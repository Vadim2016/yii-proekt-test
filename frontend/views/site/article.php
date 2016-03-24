<?php


/* @var $this yii\web\View */

use yii\backend\views\index;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = $article->title;

?>
    <div class="site-article">
        <div class="heder-article">
		        <img src="/images/article/<?=$article->preview_image?>" />
        </div>
       <br>
       <div class="post-article">
           <h1><?= Html::encode($this->title) ?></h1>
           <div class="row"> 
                <div class="col-lg-1">
                </div>
               <div class="col-lg-10">
                  <?=$article->text?>
               </div>
               <div class="col-lg-1">
               </div>
           </div>
        </div>
  </div>
</div>
<?php foreach($feeds as $feed): ?>

		<div class="feed">
			<h4><?=$feed->user ? $feed->user->username : 'Anonimus'?> <span class="text-muted"><?=date('Y-m-d H:i:s', $feed->created_at) ?></span></h4>
			<p><?=$feed->text?></p>
			<div class="rating">
					<?php for ($i = 0; $i < $feed->rating; $i++ ): ?>
						<span>*</span>
					<?php endfor ?>
			</div>
			<hr>
		</div>

<?php endforeach ?>

<div class="row">
       <div class="col-lg-2">
        </div>
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'feedback-form']); ?>

            <?= $form->field($feedback, 'text')->textarea() ?>
         
            <?= $form->field($feedback, 'rating') ?>
      

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'feedback-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>

        <div class="col-lg-5">
        </div>
    </div>
</div>