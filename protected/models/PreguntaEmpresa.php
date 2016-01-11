<?php

/**
 * This is the model class for table "pregunta_empresa".
 *
 * The followings are the available columns in table 'pregunta_empresa':
 * @property integer $PEMP_ID
 * @property integer $EMP_ID
 * @property integer $PRE_ID
 * @property integer $PEMP_DESHABILITADO
 *
 * The followings are the available model relations:
 * @property Pregunta $pRE
 * @property Empresa $eMP
 */
class PreguntaEmpresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pregunta_empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PEMP_ID, PEMP_DESHABILITADO', 'required'),
			array('PEMP_ID, EMP_ID, PRE_ID, PEMP_DESHABILITADO', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PEMP_ID, EMP_ID, PRE_ID, PEMP_DESHABILITADO', 'safe', 'on'=>'search'),
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
			'pRE' => array(self::BELONGS_TO, 'Pregunta', 'PRE_ID'),
			'eMP' => array(self::BELONGS_TO, 'Empresa', 'EMP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PEMP_ID' => 'Pemp',
			'EMP_ID' => 'Emp',
			'PRE_ID' => 'Pre',
			'PEMP_DESHABILITADO' => 'Pemp Deshabilitado',
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

		$criteria->compare('PEMP_ID',$this->PEMP_ID);
		$criteria->compare('EMP_ID',$this->EMP_ID);
		$criteria->compare('PRE_ID',$this->PRE_ID);
		$criteria->compare('PEMP_DESHABILITADO',$this->PEMP_DESHABILITADO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PreguntaEmpresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
