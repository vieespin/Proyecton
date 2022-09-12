<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $ID_RESERVA
 * @property int $ID_USER
 * @property int $ID_LABORATORIO
 * @property int $ID_HORARIOS
 *
 * @property Horarios $hORARIOS
 * @property Laboratorios $lABORATORIO
 * @property Users $uSER
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_USER', 'ID_LABORATORIO', 'ID_HORARIOS'], 'required'],
            [['ID_USER', 'ID_LABORATORIO', 'ID_HORARIOS'], 'integer'],
            [['ID_USER'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['ID_USER' => 'ID_USER']],
            [['ID_LABORATORIO'], 'exist', 'skipOnError' => true, 'targetClass' => Laboratorios::class, 'targetAttribute' => ['ID_LABORATORIO' => 'ID_LABORATORIO']],
            [['ID_HORARIOS'], 'exist', 'skipOnError' => true, 'targetClass' => Horarios::class, 'targetAttribute' => ['ID_HORARIOS' => 'ID_HORARIOS']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_RESERVA' => 'Id Reserva',
            'ID_USER' => 'Id User',
            'ID_LABORATORIO' => 'Id Laboratorio',
            'ID_HORARIOS' => 'Id Horarios',
        ];
    }

    /**
     * Gets query for [[HORARIOS]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHORARIOS()
    {
        return $this->hasOne(Horarios::class, ['ID_HORARIOS' => 'ID_HORARIOS']);
    }

    /**
     * Gets query for [[LABORATORIO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLABORATORIO()
    {
        return $this->hasOne(Laboratorios::class, ['ID_LABORATORIO' => 'ID_LABORATORIO']);
    }

    /**
     * Gets query for [[USER]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUSER()
    {
        return $this->hasOne(Users::class, ['ID_USER' => 'ID_USER']);
    }
}
