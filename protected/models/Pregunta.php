<?php

/**
 * This is the model class for table "pregunta".
 *
 * The followings are the available columns in table 'pregunta':
 * @property integer $PRE_ID
 * @property string $PRE_NOMBRE
 * @property string $PRE_DESCRIPCION
 * @property string $PRE_IMG
 * @property string $PRE_NIVEL
 * @property integer $PRE_DESHABILITADO
 *
 * The followings are the available model relations:
 * @property PreguntaEmpresa[] $preguntaEmpresas
 * @property Respuesta[] $respuestas
 */
class Pregunta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pregunta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRE_ID, PRE_NIVEL, PRE_DESHABILITADO', 'required'),
			array('PRE_ID, PRE_DESHABILITADO', 'numerical', 'integerOnly'=>true),
			array('PRE_IMG', 'length', 'max'=>100),
			array('PRE_NIVEL', 'length', 'max'=>10),
			array('PRE_NOMBRE, PRE_DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRE_ID, PRE_NOMBRE, PRE_DESCRIPCION, PRE_IMG, PRE_NIVEL, PRE_DESHABILITADO', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'preguntaEmpresas' => array(self::HAS_MANY, 'PreguntaEmpresa', 'PRE_ID'),
			'respuestas' => array(self::HAS_MANY, 'Respuesta', 'PRE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRE_ID' => 'Pre',
			'PRE_NOMBRE' => 'Pre Nombre',
			'PRE_DESCRIPCION' => 'Pre Descripcion',
			'PRE_IMG' => 'Pre Img',
			'PRE_NIVEL' => 'Pre Nivel',
			'PRE_DESHABILITADO' => 'Pre Deshabilitado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PRE_ID',$this->PRE_ID);
		$criteria->compare('PRE_NOMBRE',$this->PRE_NOMBRE,true);
		$criteria->compare('PRE_DESCRIPCION',$this->PRE_DESCRIPCION,true);
		$criteria->compare('PRE_IMG',$this->PRE_IMG,true);
		$criteria->compare('PRE_NIVEL',$this->PRE_NIVEL,true);
		$criteria->compare('PRE_DESHABILITADO',$this->PRE_DESHABILITADO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pregunta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
