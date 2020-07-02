<?php
class Main_model extends CI_Model 
{
  public function __construct() 
  {
        parent::__construct();
    }

    public function getArrFromXlsx()
    {
        require_once __DIR__ . '/simple_xlsx/src/SimpleXLSX.php'; 
        $xlsx = SimpleXLSX::parse(__DIR__.'/list_parts.xlsx');
        $parts = $xlsx->rows();

        return $parts;
    }

    public function orderRepair() {
        $this->load->library('email');
      
        $config['smtp_host'] = 'smtp-18.1gb.ru';
        $config['smtp_user'] = 'u98456';
        $config['smtp_pass'] = '70042dc8';
        $config['smtp_port'] = '25';
        
        $this->email->initialize($config);

        $customName = $this->input->post('customName');
        $customPhone = $this->input->post('customPhone');
        $customText = $this->input->post('customText');
        $modelPart = $this->input->post('modelPart'); 
        $delivery = $this->input->post('delivery'); 
        $isOrder = $this->input->post('order'); 
        // $callMe = @$_POST['callMe'];

        $this->email->from('info@sungear.ru', 'SunGear.ru');
        $this->email->to('borisow.a.s@yandex.ru');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $subject = 'Новый клиент!!!';

        $mess = <<<HTML
        <p>Поступил новый заказ от клиента: {$customName}</p>
        <p>Телефон для связи: {$customPhone} </p>
        <p>Модель АКПП: {$modelPart}</p>
        <p>Забрать/привезти: {$delivery}</p>
        <p>Текст сообщения: {$customText}</p>
HTML;

        $this->email->subject($subject);
        $this->email->message($mess);

        $this->email->send();


        // https://qna.habr.com/q/58228
    }

  public function printArr($array)
  {
    echo "<pre>" . print_r($array, true) . "</pre>";
  }
}