<?php
class Admin_model extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
		$this->load->database();
		// require 'fckeditor/fckeditor.php';
    }

    public function addNewArticle()
	{
		$result = 'Файл не был успешно загружен на сервер';
		$metaTitle = $this->db->escape_str($this->input->post('page_title'));
		$metaDesc = $this->db->escape_str($this->input->post('page_description'));
		$title = $this->db->escape_str($this->input->post('title'));
		$text = $this->db->escape_str($this->input->post('editor'));
		$views = $this->db->escape_str($this->input->post('views'));
		$photo = '';
		// die($this->printArr($_POST));
        // $date = $this->db->escape_str($this->input->post('date'));
		//TODO: поставить ограничение на загружаемый файл по размеру и расширению
		if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
			$new_file_name = 'sungear'.date("YmdHis").'_'.$_FILES['image']['name'];
			$photo = $new_file_name;
			if (move_uploaded_file($_FILES['image']['tmp_name'], $photo)) {
				$result = 'Файл загружен';	
			} else {
				$result = "Произошла обшибка при загрузке файла на сервер";
				$photo = '';
			}
        }
        $sql = "INSERT INTO `articles` (`id`, `m_title`, `m_desc`, `title`, `text`, `image`, `views`) VALUES (NULL, '$metaTitle', '$metaDesc', '$title', '$text', '$photo', '$views'); ";
		$res = $this->db->query($sql); 
		
		// if($res) {
		// 	$response = ["status" => true, "message" => "Статья успешно добавлена", 'image' => $result];
		// 	echo json_encode($response);
		// } else {
		// 	$response = ["status" => false, "message" => "Ошибка", 'image' => $result];
		// 	echo json_encode($response);
		// }
	}

    public function printArr($array)
    {
        echo "<pre>" . print_r($array, true) . "</pre>";
    }
}