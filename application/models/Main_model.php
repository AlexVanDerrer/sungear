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
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->clear();
      
        $customName = $this->input->post('customName');
        $customPhone = $this->input->post('customPhone');
        $customText = $this->input->post('customText');
        $modelPart = $this->input->post('modelPart'); 
        $delivery = $this->input->post('delivery'); 
        $isOrder = $this->input->post('order'); 
        // $callMe = @$_POST['callMe'];

        $this->email->from('zakaz@sungear.ru', '🔥SunGear.ru');
        $this->email->to('zakaz@sungear.ru');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $subject = 'SunGear.ru - NEW!💥';

        $mess = <<<HTML
            <h4>Поступил новый заказ</h4>
            <table border="1">
                <tr>
                    <td>Клиент:</td>
                    <td><b>{$customName}<b></td>
                </tr>
                <tr>
                    <td>Телефон для связи:</td>
                    <td><b>{$customPhone}</b></td>
                </tr>
                <tr>
                    <td>Модель АКПП:</td>
                    <td>{$modelPart}</td>
                </tr>
                <tr>
                    <td>Забрать/привезти:</td>
                    <td>{$delivery}</td>
                </tr>
                <tr>
                    <td>Текст сообщения:</td>
                    <td>{$customText}</td>
                </tr>
                
            </table>
            <style>
                table {
                    border-collapse: collapse;
                }
                td { 
                    max-width: 300px;
                    padding: 8px; 
                    
                }
            </style>
HTML;

        $this->email->subject($subject);
        $this->email->message($mess);
        $this->email->send();
    }

  public function printArr($array)
  {
    echo "<pre>" . print_r($array, true) . "</pre>";
  }
}