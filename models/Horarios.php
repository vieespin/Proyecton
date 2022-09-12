<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horarios".
 *
 * @property int $ID_HORARIOS
 * @property string|null $NOMBRE_HORARIO
 * @property string $HORA_INICIO
 * @property string $HORA_TERMINO
 *
 * @property Reserva[] $reservas
 */
class Horarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['HORA_INICIO', 'HORA_TERMINO'], 'required'],
            [['HORA_INICIO', 'HORA_TERMINO'], 'safe'],
            [['NOMBRE_HORARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_HORARIOS' => 'Id Horarios',
            'NOMBRE_HORARIO' => 'Nombre Horario',
            'HORA_INICIO' => 'Hora Inicio',
            'HORA_TERMINO' => 'Hora Termino',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::class, ['ID_HORARIOS' => 'ID_HORARIOS']);
    }
}
