<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sesiones_productos".
 *
 * @property string $id
 * @property string $nu_sesion
 * @property string $nu_producto
 * @property int $cantidad
 *
 * @property Productos $nuProducto
 * @property Sesiones $nuSesion
 */
class SesionesProductos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sesiones_productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nu_sesion', 'nu_producto', 'cantidad'], 'required'],
            [['nu_sesion', 'nu_producto', 'cantidad'], 'default', 'value' => null],
            [['nu_sesion', 'nu_producto', 'cantidad'], 'integer'],
            [['nu_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['nu_producto' => 'id']],
            [['nu_sesion'], 'exist', 'skipOnError' => true, 'targetClass' => Sesiones::className(), 'targetAttribute' => ['nu_sesion' => 'id']],
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
            'nu_producto' => 'Nu Producto',
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuProducto()
    {
        return $this->hasOne(Productos::className(), ['id' => 'nu_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuSesion()
    {
        return $this->hasOne(Sesiones::className(), ['id' => 'nu_sesion']);
    }
}
