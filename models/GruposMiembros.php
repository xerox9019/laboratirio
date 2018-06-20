<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos_miembros".
 *
 * @property string $id
 * @property string $nu_alumno
 * @property string $nu_grupo
 *
 * @property Grupos $nuGrupo
 * @property Usuarios $nuAlumno
 */
class GruposMiembros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupos_miembros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nu_alumno', 'nu_grupo'], 'required'],
            [['nu_alumno', 'nu_grupo'], 'default', 'value' => null],
            [['nu_alumno', 'nu_grupo'], 'integer'],
            [['nu_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupos::className(), 'targetAttribute' => ['nu_grupo' => 'id']],
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
            'nu_alumno' => 'Nu Alumno',
            'nu_grupo' => 'Nu Grupo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuGrupo()
    {
        return $this->hasOne(Grupos::className(), ['id' => 'nu_grupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuAlumno()
    {
        return $this->hasOne(Usuarios::className(), ['id' => 'nu_alumno']);
    }
}
