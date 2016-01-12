<?php

/**
 * This is the model class for table "eva_pregunta".
 *
 * The followings are the available columns in table 'eva_pregunta':
 * @property string $PRE_ID
 * @property string $ALT_ID
 * @property string $MOD_ID
 * @property string $PRE_NOMBRE
 * @property string $PRE_DESCRIPCION
 * @property string $PRE_URL
 * @property string $PRE_TYPE
 * @property string $PRE_NIVEL
 *
 * The followings are the available model relations:
 * @property Alternativa[] $alternativas
 * @property Alternativa $aLT
 * @property PreguntaEmpresa[] $preguntaEmpresas
 */
class Pregunta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eva_pregunta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ALT_ID, MOD_ID, PRE_NOMBRE, PRE_DESCRIPCION, PRE_URL, PRE_TYPE, PRE_NIVEL', 'required'),
			array('ALT_ID, MOD_ID, PRE_NIVEL', 'length', 'max'=>10),
			array('PRE_URL', 'length', 'max'=>100),
			array('PRE_TYPE', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRE_ID, ALT_ID, MOD_ID, PRE_NOMBRE, PRE_DESCRIPCION, PRE_URL, PRE_TYPE, PRE_NIVEL', 'safe', 'on'=>'search'),
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
			'alternativas' => array(self::HAS_MANY, 'Alternativa', 'PRE_ID'),
			'aLT' => array(self::BELONGS_TO, 'Alternativa', 'ALT_ID'),
			'preguntaEmpresas' => array(self::HAS_MANY, 'PreguntaEmpresa', 'PRE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRE_ID' => 'Pre',
			'ALT_ID' => 'Alt',
			'MOD_ID' => 'Mod',
			'PRE_NOMBRE' => 'Pre Nombre',
			'PRE_DESCRIPCION' => 'Pre Descripcion',
			'PRE_URL' => 'Pre Url',
			'PRE_TYPE' => 'Pre Type',
			'PRE_NIVEL' => 'Pre Nivel',
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

		$criteria->compare('PRE_ID',$this->PRE_ID,true);
		$criteria->compare('ALT_ID',$this->ALT_ID,true);
		$criteria->compare('MOD_ID',$this->MOD_ID,true);
		$criteria->compare('PRE_NOMBRE',$this->PRE_NOMBRE,true);
		$criteria->compare('PRE_DESCRIPCION',$this->PRE_DESCRIPCION,true);
		$criteria->compare('PRE_URL',$this->PRE_URL,true);
		$criteria->compare('PRE_TYPE',$this->PRE_TYPE,true);
		$criteria->compare('PRE_NIVEL',$this->PRE_NIVEL,true);

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
