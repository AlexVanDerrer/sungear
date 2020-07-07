<div class="container">
    <div class="row">
        <div class="col">
            <h1>Добавление новой статьи</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Заголовок</label>
                    <input type="text" class="form-control" name="title" id="article-title">
                </div>
                <div class="form-group">
                    <label for="">Текст</label>
                    <input type="text" class="form-control" name="text" id="article-text">
                </div>
                <div class="form-group">
                    <label for="">Количество просмотров</label>
                    <input type="text" class="form-control" name="views" id="article-views">
                </div>
                <div class="form-group">
                    <label for="">Дата добавления</label>
                    <input type="text" class="form-control" name="date" id="article-date">
                </div>
                <div class="form-group">
                    <label for="">Выберите изображение</label>
                    <input type="file" class="form-control-file" name="image" id="article-image">
                </div>

                <button type="submit" class="btn btn-primary" id="add-article">Добавить</button>
            </form>
        </div>
    </div>
</div>