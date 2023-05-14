<?php

namespace app\controllers;

use yii\web\Controller;

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
}