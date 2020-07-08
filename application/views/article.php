<div class="container my-5">
    <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item"><a href="blog">Блог</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$article['title']?></li>
    </ol>
    <h1><?=$article['title']?></h1>
    <div class="row mt-3">
        <div class="col">
            <?=$article['text'];?>
        </div>
    </div>
</div>