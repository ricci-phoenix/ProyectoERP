<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id_personal
 * @property string $nombre
 * @property string $apaterno
 * @property string $amaterno
 * @property string $fecha_nac
 * @property string $sexo
 * @property string $RFC
 * @property string $status
 * @property int $id_deptos
 *
 * @property Departamento $deptos
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apaterno', 'amaterno', 'fecha_nac', 'sexo', 'RFC', 'status', 'id_deptos'], 'required'],
            [['fecha_nac'], 'safe'],
            [['id_deptos'], 'integer'],
            [['nombre', 'apaterno', 'amaterno', 'RFC', 'status'], 'string', 'max' => 100],
            [['sexo'], 'string', 'max' => 20],
            [['id_deptos'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['id_deptos' => 'id_deptos']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'nombre' => 'Nombre',
            'apaterno' => 'Apaterno',
            'amaterno' => 'Amaterno',
            'fecha_nac' => 'Fecha Nac',
            'sexo' => 'Sexo',
            'RFC' => 'Rfc',
            'status' => 'Status',
            'id_deptos' => 'Id Deptos',
        ];
    }

    /**
     * Gets query for [[Deptos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptos()
    {
        return $this->hasOne(Departamento::className(), ['id_deptos' => 'id_deptos']);
    }
}
