<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "clinicas".
 *
 * @property int $ID_Clinica
 * @property string $Nombre_Clinica
 * @property string $Direccion
 * @property string|null $Barrio
 *
 * @property InfoCirugia[] $infoCirugias
 */
class Clinicas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clinicas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre_Clinica', 'Direccion'], 'required'],
            [['Nombre_Clinica', 'Barrio'], 'string', 'max' => 100],
            [['Direccion'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Clinica' => 'Id Clinica',
            'Nombre_Clinica' => 'Nombre Clinica',
            'Direccion' => 'Direccion',
            'Barrio' => 'Barrio',
        ];
    }

    /**
     * Gets query for [[InfoCirugias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfoCirugias()
    {
        return $this->hasMany(InfoCirugia::class, ['ID_Clinica' => 'ID_Clinica']);
    }
}
