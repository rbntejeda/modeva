<?php

/**
 * This is the model class for table "eva_evaluacion".
 *
 * The followings are the available columns in table 'eva_evaluacion':
 * @property string $EVA_ID
 * @property string $TRA_ID
 * @property string $EMP_ID
 * @property string $MOD_ID
 * @property integer $EVA_NOTA
 * @property string $EVA_FECHA
 * @property string $EVA_INICIO
 *
 * The followings are the available model relations:
 * @property Trabajador $tRA
 * @property Empresa $eMP
 * @property Modulo $mOD
 * @property Respuesta[] $respuestas
 */
class Evaluacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eva_evaluacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TRA_ID, EMP_ID, MOD_ID, EVA_FECHA, EVA_INICIO', 'required'),
			array('EVA_NOTA', 'numerical', 'integerOnly'=>true),
			array('TRA_ID, EMP_ID, MOD_ID', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EVA_ID, TRA_ID, EMP_ID, MOD_ID, EVA_NOTA, EVA_FECHA, EVA_INICIO', 'safe', 'on'=>'search'),
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
			'tRA' => array(self::BELONGS_TO, 'Trabajador', 'TRA_ID'),
			'eMP' => array(self::BELONGS_TO, 'Empresa', 'EMP_ID'),
			'mOD' => array(self::BELONGS_TO, 'Modulo', 'MOD_ID'),
			'respuestas' => array(self::HAS_MANY, 'Respuesta', 'EVA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EVA_ID' => 'Eva',
			'TRA_ID' => 'Tra',
			'EMP_ID' => 'Emp',
			'MOD_ID' => 'Mod',
			'EVA_NOTA' => 'Eva Nota',
			'EVA_FECHA' => 'Eva Fecha',
			'EVA_INICIO' => 'Eva Inicio',
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

		$criteria->compare('EVA_ID',$this->EVA_ID,true);
		$criteria->compare('TRA_ID',$this->TRA_ID,true);
		$criteria->compare('EMP_ID',$this->EMP_ID,true);
		$criteria->compare('MOD_ID',$this->MOD_ID,true);
		$criteria->compare('EVA_NOTA',$this->EVA_NOTA);
		$criteria->compare('EVA_FECHA',$this->EVA_FECHA,true);
		$criteria->compare('EVA_INICIO',$this->EVA_INICIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evaluacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
