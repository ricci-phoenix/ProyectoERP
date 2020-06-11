<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calificaciones".
 *
 * @property int $id_alumno
 * @property int $id_materia
 * @property int $parcial1
 * @property int $parcial2
 * @property int $parcial3
 * @property int $final
 *
 * @property AdminAlumno $alumno
 * @property Materias $materia
 */
class Calificaciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calificaciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_alumno', 'id_materia', 'parcial1', 'parcial2', 'parcial3', 'final'], 'required'],
            [['id_alumno', 'id_materia', 'parcial1', 'parcial2', 'parcial3', 'final'], 'integer'],
            [['id_alumno', 'id_materia'], 'unique', 'targetAttribute' => ['id_alumno', 'id_materia']],
            [['id_alumno'], 'exist', 'skipOnError' => true, 'targetClass' => AdminAlumno::className(), 'targetAttribute' => ['id_alumno' => 'id_alumno']],
            [['id_materia'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['id_materia' => 'id_materia']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'id_materia' => 'Id Materia',
            'parcial1' => 'Parcial1',
            'parcial2' => 'Parcial2',
            'parcial3' => 'Parcial3',
            'final' => 'Final',
        ];
    }

    /**
     * Gets query for [[Alumno]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumno()
    {
        return $this->hasOne(AdminAlumno::className(), ['id_alumno' => 'id_alumno']);
    }

    /**
     * Gets query for [[Materia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria()
    {
        return $this->hasOne(Materias::className(), ['id_materia' => 'id_materia']);
    }
}
