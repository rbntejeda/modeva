<?php

/**
 * This is the model class for table "eva_perfil".
 *
 * The followings are the available columns in table 'eva_perfil':
 * @property string $PER_ID
 * @property string $PER_NOMBRE
 * @property string $PER_DESCRIPCION
 * @property string $PER_IMG
 *
 * The followings are the available model relations:
 * @property Modulo[] $modulos
 */
class Perfil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eva_perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_NOMBRE, PER_IMG', 'required'),
			array('PER_NOMBRE', 'length', 'max'=>300),
			array('PER_IMG', 'length', 'max'=>100),
			array('PER_DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_ID, PER_NOMBRE, PER_DESCRIPCION, PER_IMG', 'safe', 'on'=>'search'),
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
			'modulos' => array(self::HAS_MANY, 'Modulo', 'PER_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_ID' => 'Per',
			'PER_NOMBRE' => 'Per Nombre',
			'PER_DESCRIPCION' => 'Per Descripcion',
			'PER_IMG' => 'Per Img',
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

		$criteria->compare('PER_ID',$this->PER_ID,true);
		$criteria->compare('PER_NOMBRE',$this->PER_NOMBRE,true);
		$criteria->compare('PER_DESCRIPCION',$this->PER_DESCRIPCION,true);
		$criteria->compare('PER_IMG',$this->PER_IMG,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
