<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AdminAlumno;

/**
 * AlumnoSearch represents the model behind the search form of `app\models\AdminAlumno`.
 */
class AlumnoSearch extends AdminAlumno
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_alumno', 'id_materia1', 'id_materia2', 'id_materia3', 'id_materia4', 'id_materia5', 'id_campus'], 'integer'],
            [['nombre', 'apaterno', 'amaterno', 'carrera', 'grado'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AdminAlumno::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_alumno' => $this->id_alumno,
            'id_materia1' => $this->id_materia1,
            'id_materia2' => $this->id_materia2,
            'id_materia3' => $this->id_materia3,
            'id_materia4' => $this->id_materia4,
            'id_materia5' => $this->id_materia5,
            'id_campus' => $this->id_campus,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apaterno', $this->apaterno])
            ->andFilterWhere(['like', 'amaterno', $this->amaterno])
            ->andFilterWhere(['like', 'carrera', $this->carrera])
            ->andFilterWhere(['like', 'grado', $this->grado]);

        return $dataProvider;
    }
}
