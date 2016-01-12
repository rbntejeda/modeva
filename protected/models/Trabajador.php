<?php

/**
 * This is the model class for table "trabajador".
 *
 * The followings are the available columns in table 'trabajador':
 * @property string $TRA_ID
 * @property string $COM_ID
 * @property string $TRA_RUT
 * @property string $TRA_NOMBRES
 * @property string $TRA_PATERNO
 * @property string $TRA_MATERNO
 * @property string $TRA_FECHA_NAC
 * @property string $TRA_DIRECCION
 * @property string $TRA_TELEFONO
 * @property string $TRA_CELULAR
 * @property string $TRA_LICENCIA
 * @property string $TRA_EMAIL
 * @property string $TRA_MANEJO_SW
 *
 * The followings are the available model relations:
 * @property Evaluacion[] $evaluacions
 */
class Trabajador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trabajador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TRA_ID', 'required'),
			array('TRA_ID, COM_ID, TRA_LICENCIA', 'length', 'max'=>10),
			array('TRA_RUT', 'length', 'max'=>12),
			array('TRA_NOMBRES, TRA_PATERNO, TRA_MATERNO', 'length', 'max'=>100),
			array('TRA_DIRECCION, TRA_EMAIL, TRA_MANEJO_SW', 'length', 'max'=>300),
			array('TRA_TELEFONO, TRA_CELULAR', 'length', 'max'=>50),
			array('TRA_FECHA_NAC', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TRA_ID, COM_ID, TRA_RUT, TRA_NOMBRES, TRA_PATERNO, TRA_MATERNO, TRA_FECHA_NAC, TRA_DIRECCION, TRA_TELEFONO, TRA_CELULAR, TRA_LICENCIA, TRA_EMAIL, TRA_MANEJO_SW', 'safe', 'on'=>'search'),
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
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'TRA_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TRA_ID' => 'Tra',
			'COM_ID' => 'Com',
			'TRA_RUT' => 'Tra Rut',
			'TRA_NOMBRES' => 'Tra Nombres',
			'TRA_PATERNO' => 'Tra Paterno',
			'TRA_MATERNO' => 'Tra Materno',
			'TRA_FECHA_NAC' => 'Tra Fecha Nac',
			'TRA_DIRECCION' => 'Tra Direccion',
			'TRA_TELEFONO' => 'Tra Telefono',
			'TRA_CELULAR' => 'Tra Celular',
			'TRA_LICENCIA' => 'Tra Licencia',
			'TRA_EMAIL' => 'Tra Email',
			'TRA_MANEJO_SW' => 'Tra Manejo Sw',
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

		$criteria->compare('TRA_ID',$this->TRA_ID,true);
		$criteria->compare('COM_ID',$this->COM_ID,true);
		$criteria->compare('TRA_RUT',$this->TRA_RUT,true);
		$criteria->compare('TRA_NOMBRES',$this->TRA_NOMBRES,true);
		$criteria->compare('TRA_PATERNO',$this->TRA_PATERNO,true);
		$criteria->compare('TRA_MATERNO',$this->TRA_MATERNO,true);
		$criteria->compare('TRA_FECHA_NAC',$this->TRA_FECHA_NAC,true);
		$criteria->compare('TRA_DIRECCION',$this->TRA_DIRECCION,true);
		$criteria->compare('TRA_TELEFONO',$this->TRA_TELEFONO,true);
		$criteria->compare('TRA_CELULAR',$this->TRA_CELULAR,true);
		$criteria->compare('TRA_LICENCIA',$this->TRA_LICENCIA,true);
		$criteria->compare('TRA_EMAIL',$this->TRA_EMAIL,true);
		$criteria->compare('TRA_MANEJO_SW',$this->TRA_MANEJO_SW,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
