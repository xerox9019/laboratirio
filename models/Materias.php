<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materias".
 *
 * @property string $id
 * @property string $clave
 * @property string $nombre
 *
 * @property Sesiones[] $sesiones
 */
class Materias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave', 'nombre'], 'required'],
            [['clave', 'nombre'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clave' => 'Clave',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSesiones()
    {
        return $this->hasMany(Sesiones::className(), ['nu_materia' => 'id']);
    }
}
