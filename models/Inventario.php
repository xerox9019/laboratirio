<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventario".
 *
 * @property string $id
 * @property string $nu_producto
 * @property int $cantidad
 *
 * @property Productos $nuProducto
 */
class Inventario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nu_producto', 'cantidad'], 'default', 'value' => null],
            [['nu_producto', 'cantidad'], 'integer'],
            [['nu_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['nu_producto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
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
}
