<?php

/**
 * This is the model class for table "eva_respuesta".
 *
 * The followings are the available columns in table 'eva_respuesta':
 * @property string $RES_ID
 * @property string $EVA_ID
 * @property string $ALT_ID
 *
 * The followings are the available model relations:
 * @property Alternativa $aLT
 * @property Evaluacion $eVA
 */
class Respuesta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eva_respuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EVA_ID, ALT_ID', 'required'),
			array('EVA_ID, ALT_ID', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RES_ID, EVA_ID, ALT_ID', 'safe', 'on'=>'search'),
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
			'aLT' => array(self::BELONGS_TO, 'Alternativa', 'ALT_ID'),
			'eVA' => array(self::BELONGS_TO, 'Evaluacion', 'EVA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RES_ID' => 'Res',
			'EVA_ID' => 'Eva',
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

		$criteria->compare('RES_ID',$this->RES_ID,true);
		$criteria->compare('EVA_ID',$this->EVA_ID,true);
		$criteria->compare('ALT_ID',$this->ALT_ID,true);

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
