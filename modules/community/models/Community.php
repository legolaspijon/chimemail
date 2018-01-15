<?php

namespace app\modules\community\models;

use Yii;

/**
 * This is the model class for table "{{%community}}".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $facebook_url
 */
class Community extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%community}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['name'], 'string', 'max' => 60],
            [['url', 'facebook_url'], 'string', 'max' => 2083],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'facebook_url' => 'Facebook Url',
        ];
    }

    /**
     * @inheritdoc
     * @return CommunityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommunityQuery(get_called_class());
    }
}
