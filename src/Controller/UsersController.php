<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }

    public function isAuthorized($user) {
        if (isset($user['role']) and $user['role'] === 'user') {
            if (in_array($this->request->action, ['home', 'view', 'logout'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error('Dados inválidos, por favor tente novamente', ['key' => 'auth']);
            }
        }

        // Se o usuário já esta autenticado redirecionar para action home
        if ($this->Auth->user()) {
            return $this->redirect(['controller' => 'Users', 'action' => 'home']);
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function home() {
        $this->render();
    }

    public function index() {
        $this->paginate = [
            'limit' => 10
        ];

        $users = $this->paginate($this->Users);
        $this->set('users', $users);
    }

    public function view($id) {
        $user = $this->Users->get($id);
        $this->set('user', $user);
    }

    public function add() {
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);

            $user->role = 'user';
            $user->active = 1;

            if ($this->Users->save($user)) {
                $this->Flash->success('O usuário foi criado.');
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            } else {
                $this->Flash->error('O usuário não pode ser criado. Por favor tente novamente.');
            }
        }

        $this->set(compact('user'));
    }

    public function edit($id = null) {
        $user = $this->Users->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('O usuário foi modificado');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('O usuário não pode ser modificado. Por favor tente novamente.');
            }
        }

        $this->set(compact('user'));
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);

        if ($this->Users->delete($user)) {
            $this->Flash->success('O usuário foi removido.');
        } else {
            $this->Flash->error('O usuário não pode ser removido. Por favor tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }

}
