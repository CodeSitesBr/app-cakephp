<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookmarks Controller
 *
 * @property \App\Model\Table\BookmarksTable $Bookmarks
 */
class BookmarksController extends AppController {

    public function isAuthorized($user) {
        if (isset($user['role']) and $user['role'] === 'user') {
            if (in_array($this->request->action, ['add', 'index'])) {
                return true;
            }

            // Alterar e deletar o link somente se for do usuario.
            if (in_array($this->request->action, ['edit', 'delete'])) {
                $id = $this->request->params['pass'][0];
                $bookmark = $this->Bookmarks->get($id);
                if ($bookmark->user_id == $user['id']) {
                    return true;
                }
            }
        }

        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        // Somente os registros do usuário logado
        $this->paginate = [
            'limit' => 10,
            'conditions' => ['user_id' => $this->Auth->user('id')],
            'order' => ['id' => 'desc']
        ];
        $this->set('bookmarks', $this->paginate($this->Bookmarks));
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $bookmark = $this->Bookmarks->newEntity();
        if ($this->request->is('post')) {
            $bookmark = $this->Bookmarks->patchEntity($bookmark, $this->request->data);
            $bookmark->user_id = $this->Auth->user('id');
            if ($this->Bookmarks->save($bookmark)) {
                $this->Flash->success('O link foi criado.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('O link não pôde ser criado. Por favor tente novamente.');
            }
        }
        $this->set(compact('bookmark'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bookmark id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $bookmark = $this->Bookmarks->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookmark = $this->Bookmarks->patchEntity($bookmark, $this->request->data);
            $bookmark->user_id = $this->Auth->user('id');
            if ($this->Bookmarks->save($bookmark)) {
                $this->Flash->success('O link foi atualizado.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('O link não pode ser modificado. Por favor tente novamente');
            }
        }
        $this->set(compact('bookmark'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bookmark id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $bookmark = $this->Bookmarks->get($id);
        if ($this->Bookmarks->delete($bookmark)) {
            $this->Flash->success('O link foi removido');
        } else {
            $this->Flash->error('O link não pode ser removido. Por favor tente novamente.');
        }
        return $this->redirect(['action' => 'index']);
    }

}
