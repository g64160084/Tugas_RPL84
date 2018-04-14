<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "permohonan".
 *
 * @property string $nama
 * @property string $nim
 * @property string $jenis
 * @property string $tanggal masuk
 */
class Permohonan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permohonan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nim', 'jenis'], 'required'],
            [['nama', 'jenis'], 'string'],
            [['tanggal masuk'], 'safe'],
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
            'jenis' => 'Jenis',
            'tanggal masuk' => 'Tanggal Masuk',
        ];
    }
}
