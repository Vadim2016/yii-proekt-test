<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\backend\views\index;

$this->title = 'О сайте';
 $this->params['breadcrumbs'][] = $this->title 
?>   
   <script>
        $(function () {
            $("button[data-url]").click(function () {
                var img = $(this).data('url');
                changeImage(img);
            });
            function changeImage(img) {
                $("img").attr("src", img);
            }
        });
    </script>
    <script>
        $(function () {
               $(".left-img li").toggle();
                 $("#button1").click(function () {
                $(".left-img li").toggle(1000);
            });
        });
    </script>

<div class="site-about">
     <div class="header">
        <h1><?= Html::encode($this->title) ?></h1>
     </div>
     <div class="row">
           <div class="col-lg-9">
                 <div class="prime">
                      <div class="vs">
                           <ul>
                              <li>Сможем ли мы „выжить“ в первый год после свадьбы?»«Наши разговоры всегда перерастают в споры.
                                  «Как нам остановиться?»</li> 
                              <li>  «Готов ли я к браку?»</li>
                              <li>« Как мне справиться сбеспокойствами ?» </li>
                            </ul>
                                <p> Очень часть у многих возникают вопросы на которые  им сложно найти ответ.</p>  
                                <p>  Порой кажется, что вопросов, с которыми сталкиваются супружеские пары, не меньше, 
                                      чем источников, которые предлагают на них ответы. </p>
                                 <p>Мы постараемся помочь Вам найти ответы на эти и другие вопросы.</p>
                                 <p><strong>Семья может быть тихой гаванью 
                                     и укрытием от жизненных бурь.</strong></p>                     
                      </div>     
                </div>
           </div>
                <div class="col-lg-2">
                   <div class="left-img">  
                    <ul>
                     <li class= "blok-1"></li>
                     <li class= "blok-2"></li>
                     <li class= "blok-3"></li>
                     <li class= "blok-4"></li>
                     <br>     
                   </ul>
                    <input type="button" id="button1" value="РУБРИКИ" />
                </div>    
              </div>
            <div class="col-lg-1"> </div>
    </div>      
</div>

 