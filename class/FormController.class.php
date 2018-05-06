<?php 

 class FormController{
 	private $uiFormSatu;
 	private $uiFormDua;
 	private $ObjectModel;



 	public function getFormSatu(){
 		$this->uiFormSatu = new FormView();
 		$this->uiFormDua-> FormSatu();
	}

	public function getFormDua(){
		$this->ObjectModel = new FormModel();
		$data = $this->ObjekModel->Ruangan();
		$this->uiFormSatu = new FormView();
		$this->uiFormDua-> FormDua($data);
	}

 }