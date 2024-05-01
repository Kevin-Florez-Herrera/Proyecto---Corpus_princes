<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "procedimientos".
 *
 * @property int $ID_Procedimiento
 * @property string $Nombre_Procedimiento
 * @property string|null $Descripcion
 * @property int|null $IDCategoria_Procedimiento
 *
 * @property Categoria $iDCategoriaProcedimiento
 * @property Infocirugia[] $infocirugias
 */
class Procedimientos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'procedimientos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre_Procedimiento'], 'required'],
            [['Descripcion'], 'string'],
            [['IDCategoria_Procedimiento'], 'integer'],
            [['Nombre_Procedimiento'], 'string', 'max' => 50],
            [['IDCategoria_Procedimiento'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::class, 'targetAttribute' => ['IDCategoria_Procedimiento' => 'IDCategoria_Procedimiento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Procedimiento' => 'Id Procedimiento',
            'Nombre_Procedimiento' => 'Nombre Procedimiento',
            'Descripcion' => 'Descripcion',
            'IDCategoria_Procedimiento' => 'Id Categoria Procedimiento',
        ];
    }

    /**
     * Gets query for [[IDCategoriaProcedimiento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDCategoriaProcedimiento()
    {
        return $this->hasOne(Categoria::class, ['IDCategoria_Procedimiento' => 'IDCategoria_Procedimiento']);
    }

    /**
     * Gets query for [[Infocirugias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfocirugias()
    {
        return $this->hasMany(Infocirugia::class, ['ID_Procedimiento' => 'ID_Procedimiento']);
    }
}
