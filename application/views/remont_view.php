<?=print_r($post); ?>
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
                <h4 class="text-center mb-3">Ремонт гидротрансформаторов в Санкт-Петербурге</h4>
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
                        <h5>Поиск и заказ ремонта гидротрансформатора по модели АКПП</h5>
                        <div class="row mt-3">
                            <div class="col-5">
                                <form method="POST">
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
                                    <div class="form-group">
                                        
                                    </div>

                                </div>
                                <div class="col-7">
                                    <span><b>Описание: </b></span>    
                                    <p> Диагностика и ремонт гидротрансформатора АКПП 4T80E</p>
                                    <p><b>АКПП: </b> 4T80E</p>
                                    <p><b>Условия: </b> 
                                        <a href="#">Гарантии</a> |
                                        <a href="#">Работа с регионами</a> |
                                        <a href="#">Оплата</a>
                                    </p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-5"><button class="btn btn-danger shadow br-20 w-100" name="callMe" type="submit">Не знаю свою модель</button></div>
                                <div class="col-7 d-flex justify-content-center"><button class="btn btn-danger shadow br-20 w-75" name="order" type="submit">Заказать ремонт</button></div>
                            </div>
                        </form>
                    </div>
            </div>

            <div class="container-fluid mb-5" id="work-stage">
            <h5 class="text-center mb-5"><span class="block-title">Этапы работ по ремонту гидротрансформатора</span></h5>
                <div class="row">
                    <div class="col-6 p-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="list-item-block">
                                        <span class="list-numbers">1.</span>
                                        <p style="font-size:26px; color: red;">
                                            Вскрытие.
                                        </p>
                                    </div>

                                </div>
                                <div class="col-8">
                                    <div class="list-item-block">
                                        <p>
                                            Специалисты VAG стараются исправить данную проблему посредством обновления программного 
                                            обеспечения, но один мехатроник не сможет решить «болезнь» всей конструкции. Проще говоря, 
                                            дребезжание будет сопровождать работу DSG-7 до выхода следующей модели коробки.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-0"><img class="w-100" src="img/stage.png" alt="" loading="lazy"></div>
                </div>
                <div class="row">
                    <div class="col-6 p-0"><img class="w-100" src="img/stage2.png" alt="" loading="lazy"></div>
                    <div class="col-6 p-0">
                    <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <div class="list-item-block">
                                        <span class="list-numbers">4.</span>
                                        <p style="font-size:26px; color: red;">
                                            Герметизация.
                                        </p>
                                    </div>

                                </div>
                                <div class="col-8">
                                    <div class="list-item-block">
                                        <p>
                                            Специалисты VAG стараются исправить данную проблему посредством обновления программного 
                                            обеспечения, но один мехатроник не сможет решить «болезнь» всей конструкции. Проще говоря, 
                                            дребезжание будет сопровождать работу DSG-7 до выхода следующей модели коробки.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-4"><button class="btn shadow br-20 w-100 work-stage-buttons" type="button"><a href="#">Принцип работы</a></button></div>
                    <div class="col-lg-4"><button class="btn shadow br-20 w-100 work-stage-buttons" type="button"><a href="#">Основные неисправности</a> </button></div>
                    <div class="col-lg-4"><button class="btn shadow br-20 w-100 work-stage-buttons" type="button"><a href="article/remont_article">Из чего состоит?</a></button></div>
                </div>
            </div>

            <div class="container-fluid mb-5" id="repair-process">
                <div class="row">
                    <div class="col">
                        <h5 class="text-center"><span class="block-title">Процесс ремонта гидротрансформатора </span></h5>
                        <div class="video-block mt-5 mx-auto">YouTube </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<section id="another-service">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center my-5"><span style="color: black; font-weight: 200">Мы так же занимаемся</span></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <div class="test-service"></div>
                            <div class="test-service"></div>
                            <div class="test-service"></div>
                            <div class="test-service"></div>
                            <div class="test-service"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

