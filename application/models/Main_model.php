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

        $customName = $_POST['customName'];
        $customPhone = $_POST['customPhone'];
        $modelPart = $_POST['modelPart'];
        $delivery = @$_POST['delivery'];
        $isOrder = @$_POST['order'];
        $callMe = @$_POST['callMe'];

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('borisow.a.s@yandex.ru');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject($customName.' Email Test');
        $this->email->message($customPhone. 'Testing the email class.');

        $this->email->send();

    }

	public function printArr($array)
	{
		echo "<pre>" . print_r($array, true) . "</pre>";
	}
}