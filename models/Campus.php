<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campus".
 *
 * @property int $id_campus
 * @property string $nombre
 * @property string $calle
 * @property string $colonia
 * @property string $numero
 * @property string $codigopostal
 * @property int $telefono
 * @property string $ciudad
 * @property string $estado
 *
 * @property AdminAlumno $adminAlumno
 * @property AdminDocente $adminDocente
 * @property Departamento[] $departamentos
 */
class Campus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'calle', 'colonia', 'numero', 'codigopostal', 'telefono', 'ciudad', 'estado'], 'required'],
            [['telefono'], 'integer'],
            [['nombre', 'calle', 'colonia'], 'string', 'max' => 100],
            [['numero', 'codigopostal'], 'string', 'max' => 10],
            [['ciudad', 'estado'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_campus' => 'Id Campus',
            'nombre' => 'Nombre',
            'calle' => 'Calle',
            'colonia' => 'Colonia',
            'numero' => 'Numero',
            'codigopostal' => 'Codigopostal',
            'telefono' => 'Telefono',
            'ciudad' => 'Ciudad',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[AdminAlumno]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminAlumno()
    {
        return $this->hasOne(AdminAlumno::className(), ['id_campus' => 'id_campus']);
    }

    /**
     * Gets query for [[AdminDocente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminDocente()
    {
        return $this->hasOne(AdminDocente::className(), ['id_campus' => 'id_campus']);
    }

    /**
     * Gets query for [[Departamentos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['id_campus' => 'id_campus']);
    }
}
