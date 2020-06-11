<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin_docente".
 *
 * @property int $id_docente
 * @property string $nombre
 * @property string $apaterno
 * @property string $amaterno
 * @property string $materias
 * @property int $id_campus
 *
 * @property Campus $campus
 * @property Materias[] $materias0
 */
class AdminDocente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_docente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apaterno', 'amaterno', 'materias', 'id_campus'], 'required'],
            [['id_campus'], 'integer'],
            [['nombre', 'apaterno', 'amaterno', 'materias'], 'string', 'max' => 50],
            [['id_campus'], 'unique'],
            [['id_campus'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['id_campus' => 'id_campus']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_docente' => 'Id Docente',
            'nombre' => 'Nombre',
            'apaterno' => 'Apaterno',
            'amaterno' => 'Amaterno',
            'materias' => 'Materias',
            'id_campus' => 'Id Campus',
        ];
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
     * Gets query for [[Materias0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterias0()
    {
        return $this->hasMany(Materias::className(), ['id_docente' => 'id_docente']);
    }
}
