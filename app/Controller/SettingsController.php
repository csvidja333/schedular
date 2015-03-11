<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class SettingsController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('time');
	}
	
	public function time(){
		
		if ($this->request->is('post')) {

			$this->Setting->create();
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The settings have been saved'));
				//$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash(__('The user could not be created. Please, try again.'));
			}
		}
		
	}
	
	public function test(){
		
		
	}

	
	
	
	
	
}
