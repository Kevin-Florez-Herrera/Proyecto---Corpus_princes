<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "infocirugia".
 *
 * @property int $ID_Cirugia
 * @property string $Fecha_inicio
 * @property string|null $Fecha_fin
 * @property int|null $ID_Clinica
 * @property int|null $ID_Paciente
 * @property int|null $ID_Colaborador
 * @property int|null $ID_Procedimiento
 *
 * @property Clinicas $clinica
 * @property Colaborador $colaborador
 * @property Pacientes $paciente
 * @property Procedimientos $procedimiento
 */
class Infocirugia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'infocirugia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fecha_inicio'], 'required'],
            [['Fecha_inicio', 'Fecha_fin'], 'safe'],
            [['ID_Clinica', 'ID_Paciente', 'ID_Colaborador', 'ID_Procedimiento'], 'integer'],
            [['ID_Clinica'], 'exist', 'skipOnError' => true, 'targetClass' => Clinicas::class, 'targetAttribute' => ['ID_Clinica' => 'ID_Clinica']],
            [['ID_Paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Pacientes::class, 'targetAttribute' => ['ID_Paciente' => 'ID_Paciente']],
            [['ID_Colaborador'], 'exist', 'skipOnError' => true, 'targetClass' => Colaborador::class, 'targetAttribute' => ['ID_Colaborador' => 'ID_Colaborador']],
            [['ID_Procedimiento'], 'exist', 'skipOnError' => true, 'targetClass' => Procedimientos::class, 'targetAttribute' => ['ID_Procedimiento' => 'ID_Procedimiento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Cirugia' => 'Id Cirugia',
            'Fecha_inicio' => 'Fecha Inicio',
            'Fecha_fin' => 'Fecha Fin',
            'ID_Clinica' => 'Id Clinica',
            'ID_Paciente' => 'Id Paciente',
            'ID_Colaborador' => 'Id Colaborador',
            'ID_Procedimiento' => 'Id Procedimiento',
        ];
    }

    /**
     * Gets query for [[Clinica]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClinica()
    {
        return $this->hasOne(Clinicas::class, ['ID_Clinica' => 'ID_Clinica']);
    }

    /**
     * Gets query for [[Colaborador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColaborador()
    {
        return $this->hasOne(Colaborador::class, ['ID_Colaborador' => 'ID_Colaborador']);
    }

    /**
     * Gets query for [[Paciente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Pacientes::class, ['ID_Paciente' => 'ID_Paciente']);
    }

    /**
     * Gets query for [[Procedimiento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProcedimiento()
    {
        return $this->hasOne(Procedimientos::class, ['ID_Procedimiento' => 'ID_Procedimiento']);
    }
}
