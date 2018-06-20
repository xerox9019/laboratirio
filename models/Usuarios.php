<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property string $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 *
 * @property Bitacora[] $bitacoras
 * @property GruposMiembros[] $gruposMiembros
 * @property Sesiones[] $sesiones
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'paterno'], 'required'],
            [['nombre', 'paterno', 'materno'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'paterno' => 'Paterno',
            'materno' => 'Materno',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBitacoras()
    {
        return $this->hasMany(Bitacora::className(), ['nu_alumno' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposMiembros()
    {
        return $this->hasMany(GruposMiembros::className(), ['nu_alumno' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSesiones()
    {
        return $this->hasMany(Sesiones::className(), ['nu_docente' => 'id']);
    }
}
