<?php
/**
 * author     : forecho <caizhenghai@gmail.com>
 * createTime : 16/3/20 下午5:47
 * description:
 */

namespace yiier\merit\models;


use Yii;

/**
 * This is the model class for table "{{%merit}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $type
 * @property integer $merit
 * @property integer $created_at
 * @property integer $updated_at
 */
class Merit extends \yii\db\ActiveRecord
{
    /**
     * 自动更新created_at和updated_at时间
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merit}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'type', 'merit', 'created_at', 'updated_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', '用户ID'),
            'type' => Yii::t('app', '分类 1:积分 2:声望 3:徽章'),
            'merit' => Yii::t('app', '总值'),
            'created_at' => Yii::t('app', '创建时间'),
            'updated_at' => Yii::t('app', '更新时间'),
        ];
    }
}