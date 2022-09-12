<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $ID_USER
 * @property string $USERNAME
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property string $AUTHKEY
 * @property string $ACCESSTOKEN
 * @property int $ACTIVATE
 *
 * @property Reserva[] $reservas
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USERNAME', 'EMAIL', 'PASSWORD', 'AUTHKEY', 'ACCESSTOKEN', 'ACTIVATE'], 'required'],
            [['ACTIVATE'], 'integer'],
            [['USERNAME', 'EMAIL'], 'string', 'max' => 80],
            [['PASSWORD', 'AUTHKEY', 'ACCESSTOKEN'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_USER' => 'Id User',
            'USERNAME' => 'Username',
            'EMAIL' => 'Email',
            'PASSWORD' => 'Password',
            'AUTHKEY' => 'Authkey',
            'ACCESSTOKEN' => 'Accesstoken',
            'ACTIVATE' => 'Activate',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::class, ['ID_USER' => 'ID_USER']);
    }
}
