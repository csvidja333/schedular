<?php

class UsersController extends AppController {
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login', 'register', 'userVerification', 'frgpass', 'newpass','check_data');
	}
	
	public function login() {
		$this->layout='newuser';
		//if already logged-in, redirect
		if ($this->Session->check('Auth.User')) {
			$this->redirect(array('action' => 'index'));
		}

		// if we get the post information, try to authenticate
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Welcome, ' . $this->Auth->user('username')));
				//echo $this->Auth->redirectUrl();exit;
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
	
	public function index() {
		$this->paginate = array(
		    'limit' => 6,
		    'order' => array('User.username' => 'asc')
		);
		$users = $this->paginate('User');
		$this->set(compact('users'));
	}

	public function register() {
		$this->layout='newuser';
		if ($this->request->is('post')) {

			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been created'));
				$id = $this->User->id;
				$this->User->sendvmail($id);
				$this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash(__('The user could not be created. Please, try again.'));
			}
		}
		
	}

//	public function edit($id = null) {
//
//		if (!$id) {
//			$this->Session->setFlash('Please provide a user id');
//			$this->redirect(array('action' => 'index'));
//		}
//
//		$user = $this->User->findById($id);
//		if (!$user) {
//			$this->Session->setFlash('Invalid User ID Provided');
//			$this->redirect(array('action' => 'index'));
//		}
//
//		if ($this->request->is('post') || $this->request->is('put')) {
//			$this->User->id = $id;
//			if ($this->User->save($this->request->data)) {
//				$this->Session->setFlash(__('The user has been updated'));
//				$this->redirect(array('action' => 'edit', $id));
//			} else {
//				$this->Session->setFlash(__('Unable to update your user.'));
//			}
//		}
//
//		if (!$this->request->data) {
//			$this->request->data = $user;
//		}
//	}
//
//	public function delete($id = null) {
//
//		if (!$id) {
//			$this->Session->setFlash('Please provide a user id');
//			$this->redirect(array('action' => 'index'));
//		}
//
//		$this->User->id = $id;
//		if (!$this->User->exists()) {
//			$this->Session->setFlash('Invalid user id provided');
//			$this->redirect(array('action' => 'index'));
//		}
//		if ($this->User->saveField('status', 0)) {
//			$this->Session->setFlash(__('User deleted'));
//			$this->redirect(array('action' => 'index'));
//		}
//		$this->Session->setFlash(__('User was not deleted'));
//		$this->redirect(array('action' => 'index'));
//	}

//	public function activate($id = null) {
//
//		if (!$id) {
//			$this->Session->setFlash('Please provide a user id');
//			$this->redirect(array('action' => 'index'));
//		}
//
//		$this->User->id = $id;
//		if (!$this->User->exists()) {
//			$this->Session->setFlash('Invalid user id provided');
//			$this->redirect(array('action' => 'index'));
//		}
//		$status = $this->User->field('status');
//		if($status == 0){
//			$new_status = 1;
//			$msg = __('User activated');
//		}else{
//			$new_status = 0;
//			$msg = __('User deactivated');
//		}
//		if ($this->User->saveField('status', $new_status)) {
//			$this->Session->setFlash($msg);
//			$this->redirect(array('action' => 'index'));
//		}
//		$this->Session->setFlash(__('User was not re-activated'));
//		$this->redirect(array('action' => 'index'));
//	}

	public function userVerification() {
		$id = $this->request->query['id'];
		$this->User->id = $id;
		$this->User->saveField("status", '1');
		$name = $this->request->query['name'];
		$this->Session->setFlash(__('Congratulations ' . $name . ' Your profile has been verified'));
		$this->redirect('login');
		exit;
	}

	public function frgpass() {
		if ($this->request->is('post')) {
			$email = $this->request->data['User']['email'];
			$user = $this->User->findByEmail($email);
			if (!$user) {
				$this->Session->setFlash(__('Invalid Email id'));
			} else {
				$id = $user['User']['id'];
				$name = $user['User']['username'];
				$this->User->sendfrgpassmail($id, $email, $name);
				$this->Session->setFlash(__('Check mail for Password update'));
				$this->redirect('login');
			}
		}
	}

	public function newpass() {
		if ($this->request->is('post')) {
			$pass = $this->request->data['User']['password'];
			$id = $this->request->data['User']['id'];
			$this->User->id = $id;
			//pr($this->request->data);exit;
			$this->User->saveField("password", $this->request->data['User']['password']);
			$this->Session->setFlash(__('New Password Updated'));
			$this->redirect('login');
			
		}
	}
	
	public function check_data(){
		//pr($this->request->data);
		$username = $this->request->data['usnm'];
		//$status = $this->request->data['status'];
		$userdetail = $this->User->findByUsernameAndStatus($username,0);
		//$userdetail = $this->User->find('first',array('conditions'=>array('username'=>$username,'status'=>0)));
		if(!empty($userdetail)){
			echo 1;
		}else{
			echo 0;
		}
		//echo json_encode($userdetail);
		exit;
	}
	
	
	
	
}