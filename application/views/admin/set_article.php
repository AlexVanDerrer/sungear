<?php require 'fckeditor/fckeditor.php'; ?>
<div class="container">
    <div class="row">
        <div class="col mb-5">
            <h1>Добавление новой статьи</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="page_title" id="page-title">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="page_description" id="pege-description">
                </div>
                <div class="form-group">
                    <label for="">Заголовок h1</label>
                    <input type="text" class="form-control" name="title" id="article-title">
                </div>
                <div class="form-group">
                    <label for="">Количество просмотров</label>
                    <input type="text" class="form-control" name="views" id="article-views">
                </div>
                <!-- <div class="form-group">
                    <label for="">Дата добавления</label>
                    <input type="text" class="form-control" name="date" id="article-date" placeholder="Добавится автоматически" disabled>
                </div> -->
                <div class="form-group">
                    <label for="">Выберите главное изображение</label>
                    <input type="file" class="form-control-file" name="image" id="article-image">
                </div>
                <div class="form-group">
                    <label for="">Текст</label>
                    <?php
                    $oFCKeditor = new FCKeditor('editor') ;
                    $oFCKeditor->BasePath ='/fckeditor/';
                    $oFCKeditor->Value = '<p>Текст по умолчанию.</p>' ;
                    $oFCKeditor->Create();
                ?>  
                </div>
                <!-- <input type="hidden" class="form-control" name="date" value="<?=date('d.m.Y');?>" > -->
                <button type="submit" class="btn btn-success btn-large" id="add-article">Добавить</button>
            </form>
        </div>
    </div>
</div>