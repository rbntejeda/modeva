<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $USU_ID
 * @property string $EMP_ID
 * @property string $USU_RUT
 * @property string $USU_NOMBRE
 * @property string $USU_APELLIDOS
 * @property string $USU_PASSWORD
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMP_ID, USU_RUT', 'required'),
			array('EMP_ID', 'length', 'max'=>10),
			array('USU_RUT', 'length', 'max'=>12),
			array('USU_NOMBRE, USU_APELLIDOS, USU_PASSWORD', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_ID, EMP_ID, USU_RUT, USU_NOMBRE, USU_APELLIDOS, USU_PASSWORD', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USU_ID' => 'Usu',
			'EMP_ID' => 'Emp',
			'USU_RUT' => 'Usu Rut',
			'USU_NOMBRE' => 'Usu Nombre',
			'USU_APELLIDOS' => 'Usu Apellidos',
			'USU_PASSWORD' => 'Usu Password',
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

		$criteria->compare('USU_ID',$this->USU_ID,true);
		$criteria->compare('EMP_ID',$this->EMP_ID,true);
		$criteria->compare('USU_RUT',$this->USU_RUT,true);
		$criteria->compare('USU_NOMBRE',$this->USU_NOMBRE,true);
		$criteria->compare('USU_APELLIDOS',$this->USU_APELLIDOS,true);
		$criteria->compare('USU_PASSWORD',$this->USU_PASSWORD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
