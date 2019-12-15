<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <form id="contact-form" action="/site/contact" method="post">
        <input type="text" name="element1">
        <input type="text" name="element2">
        <button type="submit" class="btn btn-primary" name="contact-button">Submit</button>
    </form>
</div>
