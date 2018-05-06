<?php 

class FormModel{

	public function jadwalInterview(){
		$ran = array("Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
		$randomElement = $ran[array_rand($ran,1)];
		return $randomElement;

	}

}



 ?>