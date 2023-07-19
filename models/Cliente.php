<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $apellido_paterno
 * @property string|null $apellido_materno
 * @property string|null $email
 * @property string|null $estatus
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'email', 'estatus'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido_paterno' => Yii::t('app', 'Apellido Paterno'),
            'apellido_materno' => Yii::t('app', 'Apellido Materno'),
            'email' => Yii::t('app', 'Email'),
            'estatus' => Yii::t('app', 'Estatus'),
        ];
    }
}
