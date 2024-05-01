<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pacientes".
 *
 * @property int $ID_Paciente
 * @property string $Documento
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Fecha_Nacimiento
 * @property string|null $Celular
 * @property string|null $Departamento
 * @property string|null $Ciudad
 * @property string|null $Direccion
 *
 * @property Infocirugia[] $infocirugias
 */
class Pacientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pacientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Documento', 'Nombre', 'Apellido', 'Fecha_Nacimiento'], 'required'],
            [['Fecha_Nacimiento'], 'safe'],
            [['Documento'], 'string', 'max' => 50],
            [['Nombre', 'Apellido', 'Departamento', 'Ciudad'], 'string', 'max' => 100],
            [['Celular'], 'string', 'max' => 20],
            [['Direccion'], 'string', 'max' => 255],
            [['Documento'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Paciente' => 'Id Paciente',
            'Documento' => 'Documento',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Fecha_Nacimiento' => 'Fecha Nacimiento',
            'Celular' => 'Celular',
            'Departamento' => 'Departamento',
            'Ciudad' => 'Ciudad',
            'Direccion' => 'Direccion',
        ];
    }

    /**
     * Gets query for [[Infocirugias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfocirugias()
    {
        return $this->hasMany(Infocirugia::class, ['ID_Paciente' => 'ID_Paciente']);
    }
}
