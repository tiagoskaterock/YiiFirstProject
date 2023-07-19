<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adeudo".
 *
 * @property int $id
 * @property string $fecha
 * @property float $monto
 * @property int $cliente_id
 *
 * @property Cliente $cliente
 */
class Adeudo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adeudo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'monto', 'cliente_id'], 'required'],
            [['fecha'], 'safe'],
            [['monto'], 'number'],
            [['cliente_id'], 'integer'],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['cliente_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fecha' => Yii::t('app', 'Fecha'),
            'monto' => Yii::t('app', 'Monto'),
            'cliente_id' => Yii::t('app', 'Cliente ID'),
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['id' => 'cliente_id']);
    }
}
