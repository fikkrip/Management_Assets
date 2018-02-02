<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $id_barang
 * @property integer $jenis
 * @property integer $merk
 * @property string $nama
 * @property integer $kondisi
 * @property integer $jumlah
 *
 * The followings are the available model relations:
 * @property Jeniss $jenis0
 * @property Merks $merk0
 * @property Kondisis $kondisi0
 */
class Barang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis, merk, kondisi, jumlah', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_barang, jenis, merk, nama, kondisi, jumlah', 'safe', 'on'=>'search'),
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
			'jenis0' => array(self::BELONGS_TO, 'Jeniss', 'jenis'),
			'merk0' => array(self::BELONGS_TO, 'Merks', 'merk'),
			'kondisi0' => array(self::BELONGS_TO, 'Kondisis', 'kondisi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_barang' => 'Id Barang',
			'jenis' => 'Jenis',
			'merk' => 'Merk',
			'nama' => 'Nama',
			'kondisi' => 'Kondisi',
			'jumlah' => 'Jumlah',
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

		$criteria->compare('id_barang',$this->id_barang);
		$criteria->compare('jenis',$this->jenis);
		$criteria->compare('merk',$this->merk);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('kondisi',$this->kondisi);
		$criteria->compare('jumlah',$this->jumlah);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
