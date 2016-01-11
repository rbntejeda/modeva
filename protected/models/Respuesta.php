<?php

/**
 * This is the model class for table "respuesta".
 *
 * The followings are the available columns in table 'respuesta':
 * @property integer $PRE_ID
 * @property integer $EVA_ID
 * @property integer $RES_ID
 * @property integer $ALT_ID
 *
 * The followings are the available model relations:
 * @property Alternativa[] $alternativas
 * @property Evaluacion $eVA
 * @property Pregunta $pRE
 * @property Alternativa $aLT
 */
class Respuesta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'respuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RES_ID', 'required'),
			array('PRE_ID, EVA_ID, RES_ID, ALT_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRE_ID, EVA_ID, RES_ID, ALT_ID', 'safe', 'on'=>'search'),
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
			'alternativas' => array(self::HAS_MANY, 'Alternativa', 'RES_ID'),
			'eVA' => array(self::BELONGS_TO, 'Evaluacion', 'EVA_ID'),
			'pRE' => array(self::BELONGS_TO, 'Pregunta', 'PRE_ID'),
			'aLT' => array(self::BELONGS_TO, 'Alternativa', 'ALT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRE_ID' => 'Pre',
			'EVA_ID' => 'Eva',
			'RES_ID' => 'Res',
			'ALT_ID' => 'Alt',
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
		$criteria->compare('EVA_ID',$this->EVA_ID);
		$criteria->compare('RES_ID',$this->RES_ID);
		$criteria->compare('ALT_ID',$this->ALT_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Respuesta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
