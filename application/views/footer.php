<section id="footer-block m-0">
    <div class="container-fluid footer-block text-light">
        <div class="container p-5">
            <div class="row">
                <div class="col-6 col-lg-3 footer-left-link ">
                    <span class="block-title">О компании</span>
                    <ul class="mt-3 p-0">
                        <li><a href="/">О нас</a></li>
                        <li><a href="blog">Блог</a></li>
                        <li><a href="docs">Сертификаты</a></li>
                        <li><a href="/">Гарантии</a></li>
                        <li><a href="politika">Политика конфиденциальности</a></li>
                        <li><a href="contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 footer-right-link" >
                    <span class="block-title">Услуги</span>
                    <ul class="mt-3 p-0">
                        <li><a href="zapchasti">Запчасти для АКПП, CVT, DSG</a></li>
                        <li><a href="remont">Ремонт гидротрансформаторов для легковых и грузовых</a></li>
                        <li><a href="remont6dct450">Ремонт 6DCT450 PowerShift</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="container p-0">
                        <div class="row footer-contact" style="">
                            <div class="col-md-6 p-0 footer-left-contact">
                                <span>Мы работаем:</span>
                                <ul class="mt-3 p-0">
                                    <li>c 10:00 по 18:00</li>
                                    <li><?=$this->config->item('adress');?></li>
                                </ul>
                            </div>
                            <div class="col-md-6 p-0 text-right footer-left-contact">
                                <span>С нами связаться:</span>
                                <ul class="mt-3 p-0">
                                    <!-- <li><?=$this->config->item('phone1');?></li> -->
                                    <li><?=$this->config->item('phone2');?></li>
                                    <li><?=$this->config->item('email');?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row ml-5">
                            <div class="col p-0">            
                                <div class="d-flex justify-content-end mt-3">            
                                    <span class="mr-2"><a target="_blank" href="<?=$this->config->item('viber');?>"><img class="align-middle" src="img/viber.png" width="22" height="22" alt="" loading="lazy"></a></span>
                                    <span class="mr-2"><a target="_blank" href="<?=$this->config->item('whatsapp');?>"><img class="align-middle" src="img/whatsapp.png" width="29" height="26" alt="" loading="lazy"></a></span>
                                    <span class="mr-2"><a target="_blank" href="<?=$this->config->item('vk');?>"><img class="align-middle" src="img/vk.png" width="22" height="21" alt="" loading="lazy"></a></span>
                                    <span class="mr-2"><a target="_blank" href="<?=$this->config->item('insta');?>"><img class="align-middle" src="img/insta.png" width="19" height="19" alt="" loading="lazy"></a></span>
                                    <span class=""><a target="_blank" href="<?=$this->config->item('youtube_link');?>"><img class="align-middle" src="img/youtube.png" width="28" height="26" alt="" loading="lazy"></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright-block">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center"> <span class="mt-5 text-secondary" >SunGear © 2020. Все права защищены</span> </div>
            <div class="col-lg-6 d-flex justify-content-center anchors"><span class="mt-4 mb-4"><a href="<?=$this->config->item('youtube_link'); ?>"><img src="img/image_youtube.png" width="305" height="76" alt="" loading="lazy"></a></span></div>
        </div>
    </div>
</section>
<style>
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:100px;
	right:75px;
	/* background-color: #B10000; */
    color:#FFF;
    border: 2px solid red;
	border-radius:50px;
    text-align:center;
    z-index: 1;
}

.my-float{
    color: red;
    margin-top: 8px;
    font-size: 32px;
}

.pulse {
  /* margin:100px;
  display: block;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: red;
  cursor: pointer; */
  box-shadow: 0 0 0 rgba(255, 0, 0, 0.4);
  animation: pulse 2s infinite;
}
.pulse:hover {
  animation: none;
}

@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
  }
  70% {
      -webkit-box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
  }
  100% {
      -webkit-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
  }
}
@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
    box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.4);
  }
  70% {
      -moz-box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
      box-shadow: 0 0 0 10px rgba(255, 0, 0, 0);
  }
  100% {
      -moz-box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
      box-shadow: 0 0 0 0 rgba(255, 0, 0, 0);
  }
}
</style>

<button class="btn pulse float" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-phone my-float"></i>
</button>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/sg_script.js"></script>
</body>
</html>