<?php

/**
 * This is the model class for table "eva_modulo".
 *
 * The followings are the available columns in table 'eva_modulo':
 * @property string $MOD_ID
 * @property string $PER_ID
 * @property string $MOD_NOMBRE
 * @property string $MOD_DESCRIPCION
 * @property string $MOD_IMG
 *
 * The followings are the available model relations:
 * @property Evaluacion[] $evaluacions
 * @property Perfil $pER
 */
class Modulo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eva_modulo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_ID, MOD_NOMBRE, MOD_IMG', 'required'),
			array('PER_ID', 'length', 'max'=>10),
			array('MOD_NOMBRE', 'length', 'max'=>300),
			array('MOD_IMG', 'length', 'max'=>100),
			array('MOD_DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MOD_ID, PER_ID, MOD_NOMBRE, MOD_DESCRIPCION, MOD_IMG', 'safe', 'on'=>'search'),
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
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'MOD_ID'),
			'pER' => array(self::BELONGS_TO, 'Perfil', 'PER_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MOD_ID' => 'Mod',
			'PER_ID' => 'Per',
			'MOD_NOMBRE' => 'Mod Nombre',
			'MOD_DESCRIPCION' => 'Mod Descripcion',
			'MOD_IMG' => 'Mod Img',
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

		$criteria->compare('MOD_ID',$this->MOD_ID,true);
		$criteria->compare('PER_ID',$this->PER_ID,true);
		$criteria->compare('MOD_NOMBRE',$this->MOD_NOMBRE,true);
		$criteria->compare('MOD_DESCRIPCION',$this->MOD_DESCRIPCION,true);
		$criteria->compare('MOD_IMG',$this->MOD_IMG,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Modulo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
