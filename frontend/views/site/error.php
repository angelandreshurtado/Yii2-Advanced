<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = '¡Oops! Error 404';
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        La Página que buscaba no se encuentra en este sitio.
    </div>

    <p>
        Tal vez el error ocurrió mientras nuestro Servidor procesaba su petición.
    </p>
    <p>
        Por favor contáctese con nosotros para solucionar su inconveniente. Gracias.
    </p>

</div>
