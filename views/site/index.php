<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'Портфолио';
?>
<section id="app">
    <article v-bind:class="{trapIndex : isActive, trapIndex2 : !isActive}"></article>
    <article class="image">
        <img src="/web/assets/cloud-01.png" alt="cloud" width="400" height="150">
        <img src="/web/assets/cloud-02.png" alt="cloud" width="340" height="200">
        <img src="/web/assets/cloud-03.png" alt="cloud" width="440" height="300">
        <img src="/web/assets/cloud-03.png" alt="cloud" width="440" height="300">
        <img src="/web/assets/cloud-04.png" alt="cloud" width="440" height="300">
    </article>
    <article class="siteIndex container">
        <h1 class="logo"><span class="dodgerblue">WEB</span><span class="white">DEVEL</span></h1>
        <p class="hello">
            Портфолио web разработчика
        </p>
        <p class="advanced">
            Специалист по разработке <br>
            пользовательского интерфейса и верстке шаблона,<br>
            программно-административной части веб приложения, <br>
            серверных технологияй — базы данных, <br>
            внутреннего содержания системы, <br>
            программной логики, <br>
            архитектуры.
        </p>
        <span class="info" @click="show()">Больше информации</span>
    </article>
    <div class="exit" v-show="!isActive">
        <img @click="show()" src="/web/assets/exit.png" alt="exit" height="30" width="30">
    </div>
    <article v-bind:class="{secondWindowShow : !isActive, secondWindowHidden: isActive}">
        <section class="MyJobs">
            <div class="four">
                <h1>Разработка сайтов под ключ</h1>
            </div>
        </section>
        <section class="MySkill">
            <div class="four">
                <h1>Ключевые навыки</h1>
            </div>
        </section>
        <section class="form">
            <div class="four">
                <h1>Оставьте своё сообщение</h1>
            </div>
            <div class="formContainer">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
                <?= $form->field($model, 'communicationMethod') ?>
                <br>
                <div class="form-group">
                    <?= Html::submitButton('Отправить мне сообщение', ['class' => 'bb']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>

            <?php
            //            $js = <<<JS
            //                 $('form').on('beforeSubmit', function(){
            //                 var data = $(this).serialize();
            //                 $.ajax({
            //                 url: '/site/index',
            //                 type: 'POST',
            //                 data: data,
            //                 success: function(res){
            //                 alert('!Error!');
            //                 },
            //                 error: function(){
            //                 alert('Error!');
            //                 }
            //                 });
            //                 return false;
            //                 });
            //JS;
            //            ?>
        </section>
    </article>
</section>



