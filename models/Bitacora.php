<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bitacora".
 *
 * @property string $id
 * @property string $nu_sesion
 * @property string $nu_alumno
 * @property string $fecha
 *
 * @property Sesiones $nuSesion
 * @property Usuarios $nuAlumno
 */
class Bitacora extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bitacora';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nu_sesion', 'nu_alumno'], 'default', 'value' => null],
            [['nu_sesion', 'nu_alumno'], 'integer'],
            [['nu_alumno'], 'required'],
            [['fecha'], 'safe'],
            [['nu_sesion'], 'exist', 'skipOnError' => true, 'targetClass' => Sesiones::className(), 'targetAttribute' => ['nu_sesion' => 'id']],
            [['nu_alumno'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['nu_alumno' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nu_sesion' => 'Nu Sesion',
            'nu_alumno' => 'Nu Alumno',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSesion()
    {
        return $this->hasOne(Sesiones::className(), ['id' => 'nu_sesion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuAlumno()
    {
        return $this->hasOne(Usuarios::className(), ['id' => 'nu_alumno']);
    }
}
