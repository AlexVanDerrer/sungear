<div class="w-100" 
    style=" background: url('../img/contacts_bg.png') no-repeat; 
            background-size: cover; 
            background-position: center;
            position: absolute;
            height:900px;
            ">
</div>
<section id="remont-block" style="position: relative;">
    <div class="container mt-5 pb-5" style="border-bottom: 1px solid red;">
        <div class="row">
            <div class="col-lg-3 mb-5">
                <div class="list-group sticky-top shadow" id="scroll-list">
                    <a class="list-group-item list-group-item-action active" href="#feedback-form">Ремонт гидротрансформаторов</a>
                    <a class="list-group-item list-group-item-action" href="#repair-process">Процесс ремонта</a>
                    <a class="list-group-item list-group-item-action" href="#work-stage">Этапы работ</a>
                    
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
                                        <div class="form-group text-center">
                                            <?php echo form_error('customName','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                            <input value="<?php echo set_value('customName'); ?>" type="text" class="form-control br-20" name="customName" id="customName" placeholder="Имя">
                                        </div>
                                        <div class="form-group text-center">
                                            <?php echo form_error('customPhone','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                            <input value="<?php echo set_value('customPhone'); ?>" type="text" class="form-control br-20" name="customPhone" id="customPhone" placeholder="+7(___)_______">
                                        </div>
                                        <div class="form-group text-center">
                                            <label for="list-akpp">Выберите модель АКПП</label>
                                            <select class="form-control br-20" id="list-akpp" name="modelPart" onchange="getval(this);">
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
                                        <p> Диагностика и ремонт гидротрансформатора <span class="list-akpp-model"></span></p>
                                        <p><b>Модель: </b> <span class="list-akpp-model"></span></p>
                                        <p><b>Условия: </b> 
                                            <a href="/#pay-block">Гарантии</a> |
                                            <a href="/#second-block">Работа с регионами</a> |
                                            <a href="/#pay-block">Оплата</a>
                                        </p>
                                    </div>   
                                </div>
                                <div class="row">
                                    <div class="col-5"><button class="btn btn-danger shadow br-20 w-100" data-toggle="modal" data-target="#exampleModal" type="button" style="font-size: 14px;">Не знаю свою модель</button></div>
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





    
</section>

   
<?php require 'tpl-another-service.php'; ?>

