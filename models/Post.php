<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Post extends Model{

    public $title;
    public $writer;
    public $category;
    public $myAge;

    /* Rules alias memberi aturan pada data yang akan diisi
    | Agar method rules ini dapat bekerja, di controller 
    | harus di jalankan fungsi validate
    */
    public function rules(){
        return [
            ['title', 'required', 'message' => 'Tolong Masukkan Nama'],
            ['myAge', 'required'],
        ];
    }
}