<div class="container-fluid bg-light d-flex justify-content-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mr-5" href="/">
            <img src="img/logo_sungear.png" width="105" height="68" alt="" loading="lazy">
        </a>

        <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color: red;"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-body">
                <li class="nav-item mr-5 my-2">
                    <a class="nav-link" href="about">О компании</a>
                </li>
                <li class="nav-item mr-5 my-2">
                    <a class="nav-link" href="docs">Лицензии и сертификаты <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-5 my-2">
                    <a class="nav-link" href="contacts">Контакты</a>
                </li>
                <li class="nav-item d-inline-block mr-5 my-2">
                    <span class="nav-link p-0 text-dark"><b><?=$this->config->item('phone1');?></b></span>
                    <span class="nav-link p-0  text-dark"><b><?=$this->config->item('email');?></b></span>
                </li>

            </ul>
            <form class="form-inline mr-5 my-2">
                <button class="btn btn-red-blood shadow br-20" type="button" data-toggle="modal" data-target="#exampleModal">Обратный звонок</button>
            </form>

            <!-- <a class="navbar-brand mr-5" href="#">
                <img src="img/cart.png" width="30" height="30" alt="" loading="lazy">
                <span class="badge badge-pill badge-danger" style="font-size: 7px;">1</span>
            </a> -->

            <!-- <a class="navbar-brand " href="#">
                <span style="color: red;"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </a>    -->
        </div> 

    </nav>
</div>

<?php require 'tpl-modal-callback.php'; ?>
