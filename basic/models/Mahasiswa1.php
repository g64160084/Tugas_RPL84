<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $no
 * @property string $nama
 * @property string $nim
 * @property string $alamat
 * @property int $no_hp
 */
class Mahasiswa1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no', 'nama', 'nim', 'alamat', 'no_hp'], 'required'],
            [['no', 'no_hp'], 'integer'],
            [['nama', 'alamat'], 'string'],
            [['nim'], 'string', 'max' => 9],
            [['no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'nama' => 'Nama',
            'nim' => 'Nim',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
        ];
    }
}
