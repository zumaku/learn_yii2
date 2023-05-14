<?php

namespace app\controllers;

use yii\web\Controller;

use function PHPUnit\Framework\isEmpty;

class MyPagesController extends Controller{

    public function actionIndex(){
        return $this->render(view: 'index');
    }

    public function actionAbout(){
        // Beberapa cara untuk merender konten
        // return $this->render(view: 'about');    // akan mengambil dari folder view
        // return $this->renderContent(content: '<h1>About My Page -> using renderContent</h1>');  // akan merender langsung dari controller, namun tetap menggunakan layout utama
        return $this->renderPartial(view: 'about'); // mirip seperti render biasa, tapi tanpa menggunakan layout utama

        // Selain itu ada juga renderFile() dan renderAjax()
    }

    // Passing data ke view
    public function actionProfile($me = NULL){
        $data = [
            'nama' => 'Zul Fadli Ahmad',
            'usia' => 18,
        ];

        if($me !== NULL){
            $data['visitor'] = $me;
        }

        /* Kita juga bisa membuat sebuah parameter dengan cara lain yang dapat di akases di view.
        | $this->view->params['namaParameter'] = nilainya
        */
        $this->view->params['paramLain'] = 'Silahkan melihat-lihat!';

        return $this->render('profile', $data);
    }
}