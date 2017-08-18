<?php  
class Valid extends AppModel{
	public $useTable = false;
	public $validate = array();

	function valid1(){
		$this->validate = array(
			"name" => array(
			"rule" => "notBlank",
			"message" => "Name not empty !",
			),
			"email" => array(
            "rule" => "notBlank", // tập luật là không rỗng
            "message" => "Email not empty !", // thông báo khi có lỗi
            ),

		);
		if($this->validates($this->validate)) // nếu dữ liệu đã được validate (hợp lệ)
		return TRUE;
		else
	 	return FALSE;
	};

	function valid2(){
		$this->validate->array(
			"name" => array(
				"dk1" => array(
					"rule" => "notBlank",
					"message" => "Không được bỏ trống",
				),
				"dk2" => array(
					"rule" => array('lengthBetween', 6, 10),
					"message" => "Tên phải dài 6 đến 10 kí tự",
				),
			),

			"email" => array(
				"dk1" => array(
					"rule" => "notBlank",
					"message" => "Không được bỏ trống",
				),
				"dk2" =>array(
					"rule" => array('email', true),
					"message" => "Nhập đúng định dạng",
				),
			),

			"website" => array(
				"dk1" => array(
					"rule" => "notBlank",
					"message" => "Không được bỏ trống",
				),
				"dk2" => array(
					"rule" =>"url",
					"message" => "Nhập đúng website",
				),
			),
		);
	if($this->validates($this->validate))
		return TRUE;
	else
		return FALSE;

	}	
}
?>