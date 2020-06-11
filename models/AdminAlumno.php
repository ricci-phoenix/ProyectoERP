<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin_alumno".
 *
 * @property int $id_alumno
 * @property string $nombre
 * @property string $apaterno
 * @property string $amaterno
 * @property string $carrera
 * @property string $grado
 * @property int $id_materia1
 * @property int $id_materia2
 * @property int $id_materia3
 * @property int $id_materia4
 * @property int $id_materia5
 * @property int $id_campus
 *
 * @property Calificaciones[] $calificaciones
 * @property Campus $campus
 * @property Materias $materia1
 * @property Materias $materia2
 * @property Materias $materia3
 * @property Materias $materia4
 * @property Materias $materia5
 * @property Materias[] $materias
 */
class AdminAlumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apaterno', 'amaterno', 'carrera', 'grado', 'id_materia1', 'id_materia2', 'id_materia3', 'id_materia4', 'id_materia5', 'id_campus'], 'required'],
            [['id_materia1', 'id_materia2', 'id_materia3', 'id_materia4', 'id_materia5', 'id_campus'], 'integer'],
            [['nombre', 'apaterno', 'amaterno', 'carrera'], 'string', 'max' => 50],
            [['grado'], 'string', 'max' => 20],
            [['id_campus'], 'unique'],
            [['id_campus'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['id_campus' => 'id_campus']],
            [['id_materia1'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['id_materia1' => 'id_materia']],
            [['id_materia2'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['id_materia2' => 'id_materia']],
            [['id_materia3'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['id_materia3' => 'id_materia']],
            [['id_materia4'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['id_materia4' => 'id_materia']],
            [['id_materia5'], 'exist', 'skipOnError' => true, 'targetClass' => Materias::className(), 'targetAttribute' => ['id_materia5' => 'id_materia']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Id Alumno',
            'nombre' => 'Nombre',
            'apaterno' => 'Apaterno',
            'amaterno' => 'Amaterno',
            'carrera' => 'Carrera',
            'grado' => 'Grado',
            'id_materia1' => 'Id Materia1',
            'id_materia2' => 'Id Materia2',
            'id_materia3' => 'Id Materia3',
            'id_materia4' => 'Id Materia4',
            'id_materia5' => 'Id Materia5',
            'id_campus' => 'Id Campus',
        ];
    }

    /**
     * Gets query for [[Calificaciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificaciones()
    {
        return $this->hasMany(Calificaciones::className(), ['id_alumno' => 'id_alumno']);
    }

    /**
     * Gets query for [[Campus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCampus()
    {
        return $this->hasOne(Campus::className(), ['id_campus' => 'id_campus']);
    }

    /**
     * Gets query for [[Materia1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria1()
    {
        return $this->hasOne(Materias::className(), ['id_materia' => 'id_materia1']);
    }

    /**
     * Gets query for [[Materia2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria2()
    {
        return $this->hasOne(Materias::className(), ['id_materia' => 'id_materia2']);
    }

    /**
     * Gets query for [[Materia3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria3()
    {
        return $this->hasOne(Materias::className(), ['id_materia' => 'id_materia3']);
    }

    /**
     * Gets query for [[Materia4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria4()
    {
        return $this->hasOne(Materias::className(), ['id_materia' => 'id_materia4']);
    }

    /**
     * Gets query for [[Materia5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria5()
    {
        return $this->hasOne(Materias::className(), ['id_materia' => 'id_materia5']);
    }

    /**
     * Gets query for [[Materias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterias()
    {
        return $this->hasMany(Materias::className(), ['id_materia' => 'id_materia'])->viaTable('calificaciones', ['id_alumno' => 'id_alumno']);
    }
}
