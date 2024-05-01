<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "colaborador".
 *
 * @property int $ID_Colaborador
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Fecha_Nacimiento
 * @property string|null $Celular
 * @property string|null $Departamento
 * @property string|null $Ciudad
 * @property string|null $Direccion
 * @property string|null $Correo
 * @property string $Rol
 *
 * @property Infocirugia[] $infocirugias
 */
class Colaborador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colaborador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Apellido', 'Fecha_Nacimiento', 'Rol'], 'required'],
            [['Fecha_Nacimiento'], 'safe'],
            [['Nombre', 'Apellido', 'Departamento', 'Ciudad', 'Correo'], 'string', 'max' => 100],
            [['Celular'], 'string', 'max' => 20],
            [['Direccion'], 'string', 'max' => 255],
            [['Rol'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Colaborador' => 'Id Colaborador',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Fecha_Nacimiento' => 'Fecha Nacimiento',
            'Celular' => 'Celular',
            'Departamento' => 'Departamento',
            'Ciudad' => 'Ciudad',
            'Direccion' => 'Direccion',
            'Correo' => 'Correo',
            'Rol' => 'Rol',
        ];
    }

    /**
     * Gets query for [[Infocirugias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfocirugias()
    {
        return $this->hasMany(Infocirugia::class, ['ID_Colaborador' => 'ID_Colaborador']);
    }
}
