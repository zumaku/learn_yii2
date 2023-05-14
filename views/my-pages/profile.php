<?php
    if(isset($visitor)){
        echo "
        <center>
            <h4>Hai $visitor</h4>
            <hr>
        </center>
        ";
    }

    // Mengganti title website
    $this->title = 'Profile Zul Fadli';

    // menambah meta data
    $this->registerMetaTag(['pemilik' => 'Zul Fadli Ahmad', 'content' => 'Belajar Yii2']);
?>

<h2>Namaku <?=$nama?> dan usiaku <?=$usia?> tahun.</h2>

<!-- Memanggi parameter -->
<!-- <h4><?=Yii::$app->view->params['paramLain']?></h4> -->
<h4><?=$this->params['paramLain']?></h4>