<div class="w-100" 
    style=" background: url('../img/contacts_bg.png') no-repeat; 
            background-size: cover; 
            background-position: center;
            position: absolute;
            height:900px;
            ">
</div>
<div class="container mt-5 scroll-container">
    <div class="row">
        <!-- <div class="col-lg-3 mb-5">
            <div class="list-group sticky-top" id="scroll-list">
                <a class="list-group-item list-group-item-action" href="#repair_6dct450">Ремонт 6DCT450</a>
                <a class="list-group-item list-group-item-action" href="#reasons-failure">Причины поломки</a>
                <a class="list-group-item list-group-item-action" href="#repair-process">Процесс ремонта</a>
            </div>
        </div> -->
        <div class="col">
            <div class="container-fluid mb-5" id="repair_6dct450">
                <h2 class="text-center mb-5">Восстановление корпусов АКПП</h2>
                <div class="row">
                    <div class="col-lg">
                        <p>
                        Помимо основной специализации нашей компании, а это ремонт 6DCT450, гидротрансформаторов  и продажа запчастей для АКПП и вариаторов. Мы также занимаемся восстановлением корпусов АКПП: 
                        </p>
                        <div class="d-flex justify-content-center font-weight-bold">
                            <ul>
                                <li>U660</li>
                                <li>U760</li>
                                <li>BTRM11</li>
                                <li>BTRM78</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <h2 class="text-center mt-5 mb-5">Восстановление поверхности конусов CVT</h2>
                <div class="row">
                    <div class="col-lg">
                        <p>
                            Неисправность конусов грозит серьезными проблемами, поэтому их ремонт должен осуществляться своевременно и только в специализированных мастерских. 
                            Чтобы исключить дорогостоящую замену ремней и конусов, существует услуга шлифовки поверхности конусов. Шлифовка позволяет продлить срок службы и 
                            эксплуатации CVT без больших финансовых затрат. Звоните нам и мы поможем существенно продлить жизнь вашему автомобилю! 
                        </p>

                    </div>
                </div>
                <div class="row">

                    <div class="col">
                        <!-- <h2 class="text-center"><span class="block-title">Процесс восстановления корпусов CVT </span></h2> -->
                        <div class="video-block embed-responsive embed-responsive-16by9 mt-5 mx-auto">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/owWhl4mbikQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                
                </div>
            </div>



            <div class="w-100 p-3 br-20 mb-5" style="background: url('../img/21_2.png') no-repeat; background-size: cover; background-position: center;">
                <div class="container p-0 ">
                    <h2 class="text-center"><span class="text-white block-title">Восстановление и ремонт конусов CVT и корпусов АКПП в Санкт-Петербурге</span></h2>
                    <p  class="mt-4 text-center text-light" style="font-size: 14px;">
                        Выполняем восстановление и ремонт конусов CVT и корпусов АКПП в Санкт-Петербурге и России на профессиональном оборудовании с гарантией качества чтобы радовать вас и ваш автомобиль!    
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="w-100 h-100">
                                <form class="text-white" method="post">
                                    <div class="form-row ">
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control br-20" name="customNameForm" id="feedbackInputNameForm" placeholder="Ваше имя">
                                            <?php echo form_error('customNameForm','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control br-20" name="customPhoneForm" id="feedbackInputNumberForm" placeholder="+7(___)___-__-__">
                                            <?php echo form_error('customPhoneForm','<span class="text-danger" style="font-size: 12px;">', '</span>'); ?>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <button class="btn btn-danger shadow br-20 w-100" name="submitForm" value="callbackForm" type="submit">Заказать ремонт</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php require 'tpl-another-service.php'; ?>
