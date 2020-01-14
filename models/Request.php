<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $communicationMethod
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content', 'communicationMethod'], 'required', 'message' => 'Обязательно для заполнения'],
            [['name', 'content', 'communicationMethod'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ваше имя',
            'content' => 'Ваше сообщение',
            'communicationMethod' => 'Номер телефона, почта или адрес',
        ];
    }
}
