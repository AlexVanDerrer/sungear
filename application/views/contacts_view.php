<section id="contacts-block">
    <div class="w-100 p-5" style="background: url('../img/contacts_bg.png') no-repeat; background-size: cover; background-position: center;">
        <div class="container p-0 ">
            <h5 class="text-start"><span>Контакты</span></h5>
            <div class="row">
                <div class="col-lg-3" >
                    <div class="w-100 h-100 p-4 shadow-lg" style="background-color: #fafafa; border-radius: 6px;">
                        <span class="small-title">Адрес</span>
                        <p>
                            <?=$this->config->item('adress');?>
                        </p>
                        <span class="small-title">Режим работы</span>
                        <p>
                        c 10:00 по 18:00 Пн-пт
                        </p>
                        <span class="small-title">Связь с нами</span>
                        <p>
                            <?=$this->config->item('phone1');?>
                        </p>
                        <p>
                            <?=$this->config->item('email');?>
                        </p>
                        <span class="small-title">Мы в соцсетях</span>
                        <div class="d-flex justify-content-start mt-3">            
                            <span class="mr-2"><a href="#"><img class="align-middle" src="img/vk2.png" width="48" height="45" alt="" loading="lazy"></a></span>
                            <span class="mr-2"><a href="#"><img class="align-middle" src="img/insta2.png" width="41" height="40" alt="" loading="lazy"></a></span>
                            <span class="mr-2"><a href="#"><img class="align-middle" src="img/youtube2.png" width="56" height="42" alt="" loading="lazy"></a></span>
                        </div>
                        <span class="small-title">Мессенджеры</span>
                        <div class="d-flex justify-content-start mt-3">            
                            <span class="mr-2"><a href="#"><img class="align-middle" src="img/viber_d.png" width="47" height="47" alt="" loading="lazy"></a></span>
                            <span class="mr-2"><a href="#"><img class="align-middle" src="img/whatsapp_d.png" width="61" height="55" alt="" loading="lazy"></a></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="w-100 h-100 p-4 shadow-lg" style="background-color: #fafafa; border-radius: 6px;">
                        <h6 class="text-start"><span>Напишите нам</span></h6>
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="customName" id="feedbackInputName" placeholder="Ваше имя">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="customPhone" id="feedbackInputNumber" placeholder="+7(___)___-__-__">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Опишите проблему</label>
                                <textarea rows="6" class="form-control" aria-label="With textarea" name="customText" placeholder="Текст сообщения"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="politika" value="agree">
                                <label class="form-check-label" for="gridCheck">
                                    Согласие с <a class="text-decoration-none text-danger" href="politika">Политикой конфиденциальности</a>
                                </label>
                                </div>
                            </div>
                            <button class="btn btn-red-blood shadow br-20" name="submit" value="callback" type="submit" style="width: 200px;">Отправить сообщение</button>
                        </form>
                        <div class="rekvizity">
                        <h6 class="mt-4">Информация о продавце:</h6>
                        <p>ООО «________________»</p>
                        <p>ИНН: 7714944374 <br>КПП: 77340100</p>
                        <p>Юридический адрес: <br><b>123308, г. Москва, Силикатный 2-й проезд, дом 34, строение 1</b></p>
                        <p>Почтовый адрес: <br><b>123007, г. Москва, 1-я Магистральная улица, дом 29 строение 1</b></p>
                        </div>
                    </div>
                    
            
            
                </div>
            </div>
        </div>
    </div>
</section>
<section id="map-block m-0">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A518a06c2feaa51249e8c4b4d88b9f94d0303cc603cf0d42c02757ce8bd975722&amp;width=100%25&amp;height=567&amp;lang=ru_RU&amp;scroll=false"></script>
</section>