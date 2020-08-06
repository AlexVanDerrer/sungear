<div class="w-100" 
    style=" background: url('../img/contacts_bg.png') no-repeat; 
            background-size: cover; 
            background-position: center;
            position: absolute;
            height:900px;
            ">
</div>
<div class="container mt-5 scroll-container"  style="border-bottom: 1px solid red;">
    <div class="row">
        <div class="col-lg-3 mb-5">
            <div class="list-group sticky-top shadow" id="scroll-list">
                <a class="list-group-item list-group-item-action" href="#repair_6dct450">Ремонт 6DCT450</a>
                <a class="list-group-item list-group-item-action" href="#reasons-failure">Причины поломки</a>
                <!-- <a class="list-group-item list-group-item-action" href="#work-stage">Этапы работ</a> -->
                <a class="list-group-item list-group-item-action" href="#repair-process">Процесс ремонта</a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="container-fluid mb-5" id="repair_6dct450">
                <h1 class="text-center mb-5">Ремонт 6DCT450</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <p>
                            Мы — компания, завоевавшая деловую репутацию и доверие среди покупателей и клиентов. 
                            Наша специализация - ремонт и продажа запчастей для АКПП и вариаторов. Мы достигли высоких 
                            результатов благодаря слаженной команде профессионалов, работающих с автоматическими трансмиссиями 
                            более 20 лет. 
                        </p>
                    </div>
                    <div class="col-lg-4"><img class="w-100" src="img/image_25.png" alt="" loading="lazy"></div>
                    <div class="col-lg-4">
                        <p>
                            Наши специалисты регулярно проходят обучение и участвуют в семинарах, связанных с инновациями в области АКПП. 
                            Объединяя многолетний опыт и новейшие технологии, мы оказываем только качественные услуги. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-100 p-3 br-20 mb-5" style="background: url('../img/21_2.png') no-repeat; background-size: cover; background-position: center;">
        <div class="container p-0 ">
            <h2 class="text-center"><span class="text-white block-title">Заказать ремонт 6DCT450/MPS6 PowerShift</span></h2>
            <p  class="mt-4 text-center text-light" style="font-size: 14px;">
                Выполняем ремонт PowerShift DCT450 в Санкт-Петербурге и России, <br>на профессиональном оборудовании с гарантией качества, чтобы радовать вас и ваш автомобиль!  
            </p>
            <div class="row">
                <div class="col">
                    <div class="w-100 h-100">
                        <form class="text-white" method="post">
                            <div class="form-row ">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control br-20" name="customNameForm" id="feedbackInputNameForm" placeholder="Ваше имя">
                                    <?php echo form_error('customNameForm','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control br-20" name="customPhoneForm" id="feedbackInputNumberForm" placeholder="+7(___)___-__-__">
                                    <?php echo form_error('customPhoneForm','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                </div>
                                <div class="form-group col-md-4">
                                    <button class="btn btn-danger shadow br-20 w-100" name="submitForm" value="callbackForm" type="submit">Отправить сообщение</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <div class="container-fluid mb-5" id="reasons-failure">
                <h2 class="text-center mb-5"><span class="block-title">Причины поломки</span></h2>
                <div class="row shadow bg-light" style="border: 1px solid #f0f0f0;">
                    <div class="col-4 pl-0">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                <div class="d-flex w-100 justify-content-between" >
                                    Износ дисков сцепления
                                    <span class="arrow" style="color: red;"><img class="align-middle" src="img/str.png" width="20" height="20" alt="" loading="lazy"></span>
                                </div>
                           </a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                <div class="d-flex w-100 justify-content-between" >
                                    Крышка сальника
                                    <span class="arrow" style="color: red;"><img class="align-middle" src="img/str.png" width="20" height="20" alt="" loading="lazy"></span>
                                </div> 
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
                                <div class="d-flex w-100 justify-content-between" >
                                    Система фильтрации трансмиссионной жидкости
                                    <span class="arrow" style="color: red;"><img class="align-middle" src="img/str.png" width="20" height="20" alt="" loading="lazy"></span>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
                                <div class="d-flex w-100 justify-content-between" >
                                    Износ вилок сцепления
                                    <span class="arrow" style="color: red;"><img class="align-middle" src="img/str.png" width="20" height="20" alt="" loading="lazy"></span>
                                </div>
                           </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active  mt-3 mb-3" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                Среди факторов, ускоряющих износ сцепления, – агрессивная манера вождения. 
                                При износе дисков сцепления ремонт редко ограничивается их заменой. Демпфер приходит в негодность. 
                                Пружины болтаются или трескаются, пластиковые направляющие ломаются. В результате проявляется повышенная вибрация, 
                                при движении идут периодические толчки.
                            </div>
                            <div class="tab-pane fade mt-3 mb-3" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                Еще одно слабое место – крышка сальника. Ее конструктивные особенности ведут к преждевременному износу уплотнительного кольца,
                                где итогом является – течь или перекос крышки.
                            </div>
                            <div class="tab-pane fade mt-3 mb-3" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                Следующий неприятный нюанс связан с системой фильтрации трансмиссионной жидкости. Замену наружного фильтра необходимо делать каждые 15-20 тысяч км пробега. Однако, внутренний фильтр рассчитан на весь срок эксплуатации трансмиссии, но специалисты сталкиваются с определенной проблемой: при разборе коробки после выхода ее из строя внутренний фильтр часто забит мелкой взвесью, она является причиной падения давления в коробке, нарушения работы гидравлического привода, 
                                требуется полностью разобрать трансмиссию, чтобы провести замену фильтра.</div>
                            <div class="tab-pane fade mt-3 mb-3" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                Еще одна частая поломка – износ вилок сцепления. Характерные признаки износа: передачи переключаются жестко (даже при наличии небольшого люфта), появляются рывки при движении. Часто автовладельцы получают сообщение электронной системы контроля об ошибке, связанной с вилками сцепления. Причин может быть две:
                                1.	смещение магнита, с которого электронный блок считывает информацию;
                                2.	поломка его пластикового крепления.
                                Для устранения неисправности разбирается трансмиссия.  Также нередко изнашиваются подшипники задней крышки и входного вала. Проявляется это в хорошо различимом гуле в салоне и вибрации.
                                Среди распространенных поломок – износ клапанов, регулирующих гидравлическое давление. Понять поломку можно по задержке при переключении передач, рывках при движении. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <div class="container-fluid mb-5" id="repair-process">
                <div class="row">
                    <div class="col">
                    <h2 class="text-center"><span class="block-title">Процесс ремонта гидротрансформатора </span></h2>
                    <div class="video-block embed-responsive embed-responsive-16by9 mt-5 mx-auto">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Q-Ww26HIWIc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'tpl-another-service.php'; ?>

<section id="order-block">
    <div class="w-100 p-5" style="background: url('../img/21_2.png') no-repeat; background-size: cover; background-position: center;">
        <div class="container p-0 ">
            <h2 class="text-center"><span class="text-white">Заказать ремонт 6DCT450/MPS6 PowerShift</span></h2>
            <div class="row">
                <div class="col-lg-3" >
                    <div class="w-100 h-100 p-4" style="background-color: RGB(63,61,61,.5); border-radius: 6px;">
                        <span class="small-title text-white">Адрес</span>
                        <p>
                            <?=$this->config->item('adress');?>

                        </p>
                        <span class="small-title text-white">Режим работы</span>
                        <p>
                        c 10:00 по 18:00 Пн-пт
                        </p>
                        <span class="small-title text-white">Связь с нами</span>
                        <p>
                            <?=$this->config->item('phone2');?>
                        </p>
                        <p>
                            <?=$this->config->item('email');?>
                        </p>
                        <span class="small-title text-white">Мессенджеры</span>
                        <div class="d-flex justify-content-start mt-3">            
                            <span class="mr-2"><a target="_blank" href="<?=$this->config->item('viber');?>"><img class="align-middle" src="img/viber.png" width="22" height="22" alt="" loading="lazy"></a></span>
                            <span class="mr-2"><a target="_blank" href="<?=$this->config->item('whatsapp');?>"><img class="align-middle" src="img/whatsapp.png" width="29" height="26" alt="" loading="lazy"></a></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="w-100 h-100 p-4" style="background-color: RGB(63,61,61,.5); border-radius: 6px;">
                        <h6 class="text-start"><span class="text-white">Напишите нам</span></h6>
                        <form class="text-white" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input value="<?php echo set_value('customName'); ?>" type="text" class="form-control" name="customName" id="feedbackInputName" placeholder="Ваше имя">
                                    <?php echo form_error('customName','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <input value="<?php echo set_value('customPhone'); ?>" type="text" class="form-control" name="customPhone" id="feedbackInputNumber" placeholder="+7(___)___-__-__">
                                    <?php echo form_error('customPhone','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Опишите проблему</label>
                                <textarea  value="<?php echo set_value('customText'); ?>" rows="6" class="form-control" aria-label="With textarea" name="customText" placeholder="Текст сообщения"></textarea>
                                <?php echo form_error('customText','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" name="politica" type="checkbox" id="gridCheck" value="agree">
                                <label class="form-check-label" for="gridCheck">
                                    Согласие с <a class="text-decoration-none text-danger" href="politika">Политикой конфиденциальности</a>
                                </label>
                                </div>
                            </div>
                            <button class="btn btn-danger shadow br-20" name="submit" value="callback" type="submit">Отправить сообщение</button>
                        </form>
                    </div>
                    
            
            
                </div>
            </div>
        </div>
    </div>
</section>