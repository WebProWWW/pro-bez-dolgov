<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use Throwable;

/**
 * This is the model class for table "region_codes".
 *
 * @property int $code
 * @property string $region_name
 *
 * @property Department $department
 * @property News[] $lastNews
 * @property ActiveDataProvider $newsProvider
 * @property ActiveQuery $news
 * @property NewsRegion[] $newsRegions
 */
class Region extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code'], 'integer'],
            [['region_name'], 'string', 'max' => 255],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'region_name' => 'Region Name',
        ];
    }

    /**
     * @return Department|ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::class, ['region_code' => 'code']);
    }

    /**
     * @return ActiveDataProvider
     */
    public function getNewsProvider()
    {
        $query = $this->getNews();
        return new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort' => [
                'defaultOrder' => [
                    'date' => SORT_DESC
                ]
            ],
        ]);

    }

    /**
     * @return News[]|ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])
            ->via('newsRegions');
    }

    /**
     * @return NewsRegion[]|ActiveQuery
     */
    public function getNewsRegions()
    {
        return $this
            ->hasMany(NewsRegion::class, ['region_code' => 'code'])
        ;
    }

    /**
     * @return News[]|ActiveQuery
     */
    public function getLastNews()
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])
            ->via('newsRegions')
            ->orderBy(['date' => SORT_DESC])
            ->limit(3);
    }

    /**
     * @param int $currentNewsId
     * @return News[]|ActiveQuery
     */
    public function lastNews(int $currentNewsId)
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])
            ->via('newsRegions')
            ->where(['!=', 'id', $currentNewsId])
            ->orderBy(['date' => SORT_DESC])
            ->limit(3)
            ->all();
    }

    /**
     * @return Region[]
     */
    public static function findAllRegions()
    {
        try {
            return self::getDb()->cache(function () {
                return self::find()
                    ->where(['not', ['code' => 99]])
                    ->orderBy(['region_name' => SORT_ASC])
                    ->all();
            });
        } catch (Throwable $e) {}
        return [];
//        $regions = Yii::$app->cache->get('all-regions');
//        if ($regions === false) {
//            $regions = self::find()
//                ->where(['not', ['code' => 99]])
//                ->orderBy(['region_name' => SORT_ASC])
//                ->all();
//            Yii::$app->cache->set('all-regions', $regions, 3600 * 24 * 365);
//        }
//        return $regions;
    }
}
