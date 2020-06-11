<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property int $id_deptos
 * @property string $nombre
 * @property int $descripcion
 * @property int $telefono
 * @property int $id_campus
 *
 * @property Campus $campus
 * @property Personal[] $personals
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'telefono', 'id_campus'], 'required'],
            [['nombre', 'descripcion', 'telefono', 'id_campus'], 'integer'],
            [['id_campus'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['id_campus' => 'id_campus']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_deptos' => 'Id Deptos',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'telefono' => 'Telefono',
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
     * Gets query for [[Personals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonals()
    {
        return $this->hasMany(Personal::className(), ['id_deptos' => 'id_deptos']);
    }
}
