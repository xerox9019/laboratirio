<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property string $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Inventario[] $inventarios
 * @property SesionesProductos[] $sesionesProductos
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre', 'descripcion'], 'string'],
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
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventarios()
    {
        return $this->hasMany(Inventario::className(), ['nu_producto' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSesionesProductos()
    {
        return $this->hasMany(SesionesProductos::className(), ['nu_producto' => 'id']);
    }
}
