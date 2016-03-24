<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
   <div class="site-contact">
        <div class="header-contact">
           <h1><?= Html::encode($this->title) ?></h1>
            <p>
                If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
           </p>
        </div>
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-5">
              <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                  <?= $form->field($model, 'name') ?>

                  <?= $form->field($model, 'email') ?>

                  <?= $form->field($model, 'subject') ?>

                  <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                   <?= $form->field($model, 'verifyCode')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className()) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
               <div class="col-lg-6"></div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
