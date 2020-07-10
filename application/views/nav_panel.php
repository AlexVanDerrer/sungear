<div class="container-fluid bg-light d-flex justify-content-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mr-5" href="/">
            <img src="img/logo_sungear.png" width="105" height="68" alt="" loading="lazy">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <div class="row" style="font-size: 12px;">
                <div class="col-lg-6 text-right d-none d-lg-block">Мы работаем:</div>
                <div class="col-lg-6 text-left d-lg-none">Мы работаем:</div>
                <div class="col-lg-6">с 10.00 до 18.00 <br><?=$this->config->item('adress');?></div>
            </div>
            <form class="form-inline mr-5 my-2 d-lg-none">
                <button class="btn btn-red-blood shadow br-20" type="button" data-toggle="modal" data-target="#exampleModal">Обратный звонок</button>
            </form>
        </div>
        <div class="navbar-phone" >
            <ul class="navbar-nav text-body">
                <li class="nav-item d-inline-block mr-5 my-2">
                    <span class="nav-link p-0 text-dark"><b><?=$this->config->item('phone2');?></b></span>
                    <span class="nav-link p-0  text-dark"><b><?=$this->config->item('email');?></b></span>
                </li>
                <form class="form-inline mr-5 my-2 d-none d-lg-block">
                    <button class="btn btn-red-blood shadow br-20" type="button" data-toggle="modal" data-target="#exampleModal">Обратный звонок</button>
                </form>
            </ul>
        </div>
        <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color: red;"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
    </nav>
</div>

<?php require 'tpl-modal-callback.php'; ?>
