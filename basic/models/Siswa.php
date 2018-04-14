<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property string $nama
 * @property string $nim
 * @property string $alamat
 * @property int $no_hp
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nim', 'alamat', 'no_hp'], 'required'],
            [['nama', 'alamat'], 'string'],
            [['no_hp'], 'integer'],
            [['nim'], 'string', 'max' => 9],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'nim' => 'Nim',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
        ];
    }
}
