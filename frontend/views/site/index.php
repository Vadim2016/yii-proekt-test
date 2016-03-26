<?php

/* @var $this yii\web\View */

$this->title = 'Блог';
?>
   <div class="site-index">
      <div class="hederimage">
          <img src="/images/header.jpg" /> 
      </div>
          <div class="body-content">           
              <?php foreach($articles as $article): ?>
                 <div class="post_text">
                    <div class="row">
                       <div class="col-lg-4">
                          <div class="images">
                            <img src="/images/article/<?=$article->preview_image?>" /> 
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <h4><strong>СЕМЬЯ</strong></h4>
                           <h2><strong><?=$article->title?></strong></h2>
                           <span class="text-muted"><?=date('Y-m-d H:i:s', $article->created_at) ?></span>
                           <div class="text-article">
                            <?=$article->preview_text?>
                           </div>
                            <div class="col-lg-1">
                            </div>
                            <br>
                               <a class="btn btn-default" href="/article/<?=$article->id?>">Подробнее</a>
                            <br>
                        </div>
                      </div>
                  </div>
                   <hr> 
              <?php endforeach ?>
          </div>
    </div>
        
    
