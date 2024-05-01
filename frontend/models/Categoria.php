<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property int $IDCategoria_Procedimiento
 * @property string $Categoria_Procedimiento
 * @property string|null $Descripcion
 *
 * @property Procedimientos[] $procedimientos
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Categoria_Procedimiento'], 'required'],
            [['Descripcion'], 'string'],
            [['Categoria_Procedimiento'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDCategoria_Procedimiento' => 'Id Categoria Procedimiento',
            'Categoria_Procedimiento' => 'Categoria Procedimiento',
            'Descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Procedimientos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProcedimientos()
    {
        return $this->hasMany(Procedimientos::class, ['IDCategoria_Procedimiento' => 'IDCategoria_Procedimiento']);
    }
}
