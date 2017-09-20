<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property int $code
 * @property int $type
 * @property string $status
 * @property string $application
 * @property string $message
 */
class Message extends \yii\db\ActiveRecord
{
    const STATUS_RECEIVED = 'получено';
    const STATUS_READ = 'прочитано';
    const STATUS_CORRECTED = 'исправлено';

    public $statuses = [
        self::STATUS_RECEIVED,
        self::STATUS_READ,
        self::STATUS_CORRECTED
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'type'], 'integer'],
            [['status'], 'string'],
            [['application', 'message'], 'required'],
            [['application'], 'string', 'max' => 20],
            [['message'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'type' => 'Type',
            'status' => 'Status',
            'application' => 'Application',
            'message' => 'Message',
        ];
    }

    public function isNormalStatus($status)
    {
        return in_array($status, $this->statuses);
    }
}
