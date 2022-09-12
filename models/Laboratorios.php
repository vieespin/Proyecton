<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laboratorios".
 *
 * @property int $ID_LABORATORIO
 * @property string $NOMBRE_LABORATORIO
 *
 * @property Reserva[] $reservas
 */
class Laboratorios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laboratorios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOMBRE_LABORATORIO'], 'required'],
            [['NOMBRE_LABORATORIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_LABORATORIO' => 'Id Laboratorio',
            'NOMBRE_LABORATORIO' => 'Nombre Laboratorio',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::class, ['ID_LABORATORIO' => 'ID_LABORATORIO']);
    }
}
