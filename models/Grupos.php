<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property string $id
 * @property string $nombre
 * @property int $nivel
 *
 * @property GruposMiembros[] $gruposMiembros
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'nivel'], 'required'],
            [['nombre'], 'string'],
            [['nivel'], 'default', 'value' => null],
            [['nivel'], 'integer'],
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
            'nivel' => 'Nivel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposMiembros()
    {
        return $this->hasMany(GruposMiembros::className(), ['nu_grupo' => 'id']);
    }
}
