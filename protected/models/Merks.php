<?php

/**
 * This is the model class for table "merks".
 *
 * The followings are the available columns in table 'merks':
 * @property integer $id_merk
 * @property string $nama
 * @property integer $produsen
 *
 * The followings are the available model relations:
 * @property Barang[] $barangs
 * @property Produsens $produsen0
 */
class Merks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'merks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('produsen', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_merk, nama, produsen', 'safe', 'on'=>'search'),
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
			'barangs' => array(self::HAS_MANY, 'Barang', 'merk'),
			'produsen0' => array(self::BELONGS_TO, 'Produsens', 'produsen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_merk' => 'Id Merk',
			'nama' => 'Nama',
			'produsen' => 'Produsen',
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

		$criteria->compare('id_merk',$this->id_merk);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('produsen',$this->produsen);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Merks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
