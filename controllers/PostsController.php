<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;

class PostsController extends Controller{

    /* Default Action Behavior
    | Default action yang dijalankan adalah index,
    | jika ingin mengubahnya tinggal meng-ovewrite
    | variable $defaultAction.
    */
    // public $defaultAction = 'my-post';

    // url = /posts
    public function actionIndex(){
        return "<h1>Ini Posts</h1>";
    }

    // url = /posts/my-post
    public function actionMyPost(){
        return "<h1>Ini Postinganku</h1>";
    }

    // url = /posts/post?id=...
    public function actionPost($id = "{Tidak ada ID dimasukkan}"){
        return "<h1>Ini Postingan dengan ID = $id</h1>";
    }


    // Mengakses Model
    public function actionRead(){
        $post = new Post();    // instans model Post

        $post->title = 'Become Real Women';
        $post->writer = 'Asmaul Husna';
        $post->category = 'non-fiction';
        $post->myAge = 19;

        // memfalidasi data dari method rules di model
        if($post->validate()) echo 'validate success!<br><hr>';
        else echo 'validate error! <br><hr>';

        /*kita bisa menggunakan beberapa method pada instans model
        | $posts->attributes()      akan mengembalikan semua atribut pada model itu
        | $post->getAttributeLabel(attribute: '...')        untuk mengambil salah satu atribut
        */
        // return var_dump($post->attributes());
        // return var_dump($post->getAttributeLabel(attribute: 'title'));
        
        // echo '<prev>';
        // var_dump($post->attributes());
        // echo '</prev>';


        // salah satu contoh menampilkan label dan valuenya
        foreach ($post as $labelPostingan => $value){
            echo $post->getAttributeLabel($labelPostingan) . '(' . $labelPostingan . ') = <strong>' . $value . '</strong><br>';
        }
    }
}