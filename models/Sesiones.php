<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sesiones".
 *
 * @property string $id
 * @property string $nu_docente
 * @property string $nu_materia
 * @property string $fecha_inicio
 * @property int $duracion
 * @property string $nombre
 *
 * @property Bitacora[] $bitacoras
 * @property Materias $nuMateria
 * @property Usuarios $nuDocente
 * @property SesionesProductos[] $sesionesProductos
 */
class Sesiones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sesiones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nu_docente', 'nu_materia'], 'required'],
            [['nu_docente', 'nu_materia', 'duracion'], 'default', 'value' => null],
            [['nu_docente', 'nu_materia', 'duracion'], 'integer'],
            [['fecha_inicio'], 'safe'],
            [['nombre'], 'string'],
            [['fecha_inicio'], 'unique'],
            [['nu_materia'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['nu_materia' => 'id']],
            [['nu_docente'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['nu_docente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nu_docente' => Yii::t('app', 'Nu Docente'),
            'nu_materia' => Yii::t('app', 'Nu Materia'),
            'fecha_inicio' => Yii::t('app', 'Fecha Inicio'),
            'duracion' => Yii::t('app', 'Duracion'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBitacoras()
    {
        return $this->hasMany(Bitacora::className(), ['nu_sesion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuMateria()
    {
        return $this->hasOne(Materias::className(), ['id' => 'nu_materia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuDocente()
    {
        return $this->hasOne(Usuarios::className(), ['id' => 'nu_docente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSesionesProductos()
    {
        return $this->hasMany(SesionesProductos::className(), ['nu_sesion' => 'id']);
    }
}
