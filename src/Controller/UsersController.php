<?php
 
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
 
class UsersController extends AppController {
	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Your username or password is incorrect.');
		}
	}
}
?>
