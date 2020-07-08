<div class="container mt-5 pb-5" style="border-bottom: 1px solid red;">
    <div class="row">
        <div class="col-lg-3 mb-5">
            <div class="list-group sticky-top" id="scroll-list">
                <a class="list-group-item list-group-item-action active" href="#feedback-form">Ремонт гидротрансформаторов</a>
                <a class="list-group-item list-group-item-action" href="#work-stage">Этапы работ</a>
                <a class="list-group-item list-group-item-action" href="#repair-process">Процесс ремонта</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="container-fluid mb-5" id="feedback-form">
                <h1 class="text-center mb-3">Ремонт гидротрансформаторов в Санкт-Петербурге</h1>
                    <p>
                        Мы — компания, завоевавшая деловую репутацию и доверие среди покупателей и клиентов. 
                        Наша специализация - ремонт и продажа запчастей для АКПП и вариаторов. Мы достигли высоких 
                        результатов благодаря слаженной команде профессионалов, работающих с автоматическими трансмиссиями более 20 лет. 
                    
                    </p>
                    <p>
                        Наши специалисты регулярно проходят обучение и участвуют в семинарах, связанных с инновациями в 
                        области АКПП. Объединяя многолетний опыт и новейшие технологии, мы оказываем только качественные услуги. 
                    </p>

                    <div class="container-fluid shadow my-5 p-5" style="border: 1px solid f8f8f8; border-radius: 6px; background-color: #f0f0f0">
                        <h2>Поиск и заказ ремонта гидротрансформатора по модели АКПП</h2>
                        <div class="row mt-3">
                            <div class="col-5">
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control br-20" name="customName" id="customName" placeholder="Имя">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control br-20" name="customPhone" id="customPhone" placeholder="+7(___)___-__-__">
                                    </div>
                                    <div class="form-group">
                                        <label for="list-akpp">Выберите модель АКПП</label>
                                        <select class="form-control br-20" id="list-akpp" name="modelPart">
                                            <?php foreach ($parts as $p) : ?>
                                                <option><?=$p[0]?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delivery" id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">Забрать/привезти</label>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <span><b>Описание: </b></span>    
                                    <p> Диагностика и ремонт гидротрансформатора АКПП 4T80E</p>
                                    <p><b>АКПП: </b> 4T80E</p>
                                    <p><b>Условия: </b> 
                                        <a href="/#pay-block">Гарантии</a> |
                                        <a href="/#second-block">Работа с регионами</a> |
                                        <a href="/#pay-block">Оплата</a>
                                    </p>
                                </div>   
                            </div>
                            <div class="row">
                                <div class="col-5"><button class="btn btn-red-blood shadow br-20 w-100" data-toggle="modal" data-target="#exampleModal" type="button">Не знаю свою модель</button></div>
                                <div class="col-7 d-flex justify-content-center"><button class="btn btn-red-blood shadow br-20 w-75" name="order" type="submit">Заказать ремонт</button></div>
                            </div>
                        </form>
                    </div>
            </div>

            <div class="container-fluid mb-5" id="repair-process">
                <div class="row">
                    <div class="col">
                        <?php require 'tpl-repair-process.php'; ?>
                    </div>
                </div>
            </div>

            <div class="container-fluid mb-5" id="work-stage">
                <?php require 'tpl-work-stage.php'; ?>
            </div>


        </div>
    </div>
</div>
    
<?php require 'tpl-another-service.php'; ?>

