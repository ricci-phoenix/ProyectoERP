<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materias".
 *
 * @property int $id_materia
 * @property string $nombre
 * @property int $id_docente
 * @property string $carrera
 * @property string $grado
 *
 * @property AdminAlumno[] $adminAlumnos
 * @property AdminAlumno[] $adminAlumnos0
 * @property AdminAlumno[] $adminAlumnos1
 * @property AdminAlumno[] $adminAlumnos2
 * @property AdminAlumno[] $adminAlumnos3
 * @property AdminAlumno[] $alumnos
 * @property Calificaciones[] $calificaciones
 * @property AdminDocente $docente
 */
class Materias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'id_docente', 'carrera', 'grado'], 'required'],
            [['id_docente'], 'integer'],
            [['nombre', 'carrera', 'grado'], 'string', 'max' => 50],
            [['id_docente'], 'exist', 'skipOnError' => true, 'targetClass' => AdminDocente::className(), 'targetAttribute' => ['id_docente' => 'id_docente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_materia' => 'Id Materia',
            'nombre' => 'Nombre',
            'id_docente' => 'Id Docente',
            'carrera' => 'Carrera',
            'grado' => 'Grado',
        ];
    }

    /**
     * Gets query for [[AdminAlumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminAlumnos()
    {
        return $this->hasMany(AdminAlumno::className(), ['id_materia1' => 'id_materia']);
    }

    /**
     * Gets query for [[AdminAlumnos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminAlumnos0()
    {
        return $this->hasMany(AdminAlumno::className(), ['id_materia2' => 'id_materia']);
    }

    /**
     * Gets query for [[AdminAlumnos1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminAlumnos1()
    {
        return $this->hasMany(AdminAlumno::className(), ['id_materia3' => 'id_materia']);
    }

    /**
     * Gets query for [[AdminAlumnos2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminAlumnos2()
    {
        return $this->hasMany(AdminAlumno::className(), ['id_materia4' => 'id_materia']);
    }

    /**
     * Gets query for [[AdminAlumnos3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdminAlumnos3()
    {
        return $this->hasMany(AdminAlumno::className(), ['id_materia5' => 'id_materia']);
    }

    /**
     * Gets query for [[Alumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(AdminAlumno::className(), ['id_alumno' => 'id_alumno'])->viaTable('calificaciones', ['id_materia' => 'id_materia']);
    }

    /**
     * Gets query for [[Calificaciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificaciones()
    {
        return $this->hasMany(Calificaciones::className(), ['id_materia' => 'id_materia']);
    }

    /**
     * Gets query for [[Docente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocente()
    {
        return $this->hasOne(AdminDocente::className(), ['id_docente' => 'id_docente']);
    }
}
