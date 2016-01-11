<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $EMP_ID
 * @property integer $COM_ID
 * @property string $EMP_RUT
 * @property string $EMP_NOMBRE
 * @property string $EMP_DIRECCION
 * @property string $EMP_FONO
 * @property string $EMP_EMAIL
 * @property string $EMP_FECHA_CREACION
 * @property integer $EMP_DESHABILITADO
 *
 * The followings are the available model relations:
 * @property Comuna $cOM
 * @property Evaluacion[] $evaluacions
 * @property PreguntaEmpresa[] $preguntaEmpresas
 * @property Usuario[] $usuarios
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMP_ID, EMP_FECHA_CREACION', 'required'),
			array('EMP_ID, COM_ID, EMP_DESHABILITADO', 'numerical', 'integerOnly'=>true),
			array('EMP_RUT', 'length', 'max'=>12),
			array('EMP_NOMBRE', 'length', 'max'=>150),
			array('EMP_FONO', 'length', 'max'=>10),
			array('EMP_EMAIL', 'length', 'max'=>100),
			array('EMP_DIRECCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EMP_ID, COM_ID, EMP_RUT, EMP_NOMBRE, EMP_DIRECCION, EMP_FONO, EMP_EMAIL, EMP_FECHA_CREACION, EMP_DESHABILITADO', 'safe', 'on'=>'search'),
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
			'cOM' => array(self::BELONGS_TO, 'Comuna', 'COM_ID'),
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'EMP_ID'),
			'preguntaEmpresas' => array(self::HAS_MANY, 'PreguntaEmpresa', 'EMP_ID'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'EMP_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EMP_ID' => 'Emp',
			'COM_ID' => 'Com',
			'EMP_RUT' => 'Emp Rut',
			'EMP_NOMBRE' => 'Emp Nombre',
			'EMP_DIRECCION' => 'Emp Direccion',
			'EMP_FONO' => 'Emp Fono',
			'EMP_EMAIL' => 'Emp Email',
			'EMP_FECHA_CREACION' => 'Emp Fecha Creacion',
			'EMP_DESHABILITADO' => 'Emp Deshabilitado',
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

		$criteria->compare('EMP_ID',$this->EMP_ID);
		$criteria->compare('COM_ID',$this->COM_ID);
		$criteria->compare('EMP_RUT',$this->EMP_RUT,true);
		$criteria->compare('EMP_NOMBRE',$this->EMP_NOMBRE,true);
		$criteria->compare('EMP_DIRECCION',$this->EMP_DIRECCION,true);
		$criteria->compare('EMP_FONO',$this->EMP_FONO,true);
		$criteria->compare('EMP_EMAIL',$this->EMP_EMAIL,true);
		$criteria->compare('EMP_FECHA_CREACION',$this->EMP_FECHA_CREACION,true);
		$criteria->compare('EMP_DESHABILITADO',$this->EMP_DESHABILITADO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
