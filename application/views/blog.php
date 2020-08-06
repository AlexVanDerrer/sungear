<?php $allArticles = $this->main_model->getAllArticles(); ?>
<div class="w-100" 
    style=" background: url('../img/contacts_bg.png') no-repeat;
            background-size: cover; 
            background-position: center;
            position: absolute;
            height:900px;
            ">
</div>

<div class="container mt-5">
<h1 class="text-center ">Статьи по ремонту и восстановлению гидротрансформаторов и PowerShift</h1>
    <div class="row">
        <div class="col d-flex flex-wrap justify-content-center">
            <?php foreach ($allArticles as $article) : ?>
            <div class="card p-3 m-3 shadow " style="width: 18rem; min-width: 18rem;">
                <img src="./img/<?=$article['image'];?>" class="card-img-top img-thumbnail" alt="">
                <div class="card-body p-0 mt-3 d-flex align-items-center flex-column">
                    <h5 class="card-title text-center" style="font-size: 18px;"><?=$article['title']?></h5>
                    <div class="row w-100 my-2">
                        <div class="col text-start"><i class="fa fa-eye" aria-hidden="true"></i> <?=$article['views']?></div>
                        <div class="col text-end"><?=date_format(date_create($article['date']), 'd/m/Y')?></div>
                    </div>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="article<?=$article['id']?>" class="btn btn-red-border br-20 mb-2 mt-auto shadow">Подробнее</a>
                </div>
            </div>
            <?php endforeach; ?>    
        </div>
    </div>
</div>

