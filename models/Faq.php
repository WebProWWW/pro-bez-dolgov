<?php

namespace app\models;

use Exception;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

use app\components\SendpulseApi;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property int|null $city_id
 * @property int $status
 * @property string $title
 * @property string $alias
 * @property string $name
 * @property string $email
 * @property string $text
 * @property int|null $views
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property UploadedFile $userFile
 *
 * @property City $city
 */
class Faq extends ActiveRecord
{
    const SCENARIO_ADD = 'UserAddFaq';

    public $userFile;

    private $_hasError = false;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            TimestampBehavior::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id', 'status', 'views', 'created_at', 'updated_at'], 'integer'],
            [['title', 'alias', 'name', 'email', 'text'], 'required'],
            [['text'], 'string'],
            [['title', 'alias', 'name', 'email'], 'string', 'max' => 255],
            [['email'], 'email'],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::class, 'targetAttribute' => ['city_id' => 'id']],
            [['userFile'], 'file', 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritDoc
     */
    public function scenarios()
    {
        return ArrayHelper::merge(parent::scenarios(), [
            self::SCENARIO_ADD => ['name','email','text'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'City ID',
            'status' => 'Статус',
            'title' => 'Заголовок',
            'alias' => 'Псевдоним',
            'name' => 'Ваше Имя',
            'email' => 'Ваш Email',
            'text' => 'Ваш вопрос',
            'views' => 'Просмотры',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
        ];
    }

    /**
     * @inheritDoc
     */
    public function load($data, $formName = null)
    {
        $this->userFile = UploadedFile::getInstance($this, 'userFile');
        return parent::load($data, $formName);
    }

    public function validate($attributeNames = null, $clearErrors = true)
    {
        if (parent::validate($attributeNames, $clearErrors)) {
            if ($this->_hasError) {
                $this->addError('text', 'Произошла ошибка, попробуйте позже');
                return false;
            }
            return true;
        }
        return false;
    }

    /**
     * @return City|ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::class, ['id' => 'city_id']);
    }

    /**
     * @return bool
     */
    public function addFaq()
    {
        if (!$this->validate()) return false;
        $title = 'Вопрос - ответ';
        $message = Yii::$app->mailer->compose('faq', [ 'model' => $this, 'title' => $title ]);
        $message
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo('ju.lerchik@yandex.ru')
            ->setReplyTo($this->email)
            ->setSubject($title);
        if ($this->userFile->tempName) {
            $message->attach($this->userFile->tempName, [
                'fileName' => $this->userFile->name,
                'contentType' => $this->userFile->type,
            ]);
        }
        if ($message->send()) {
            $this->save(false);
            $this->sendPulse();
            return true;
        }
        $this->_hasError = true;
        return false;
    }

    /**
     * @return bool
     */
    private function sendPulse()
    {
        try {
            (new SendpulseApi())
                ->addEmails(SendpulseApi::BOOK, [[ 'email' => $this->email ]]);
            return true;
        } catch (Exception $e) {}
        return false;
    }
}