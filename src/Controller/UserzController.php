<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userz Controller
 *
 * @property \App\Model\Table\UserzTable $Userz */
class UserzController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('userz', $this->paginate($this->Userz));
        $this->set('_serialize', ['userz']);
    }

    /**
     * View method
     *
     * @param string|null $id Userz id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userz = $this->Userz->get($id, [
            'contain' => []
        ]);
        $this->set('userz', $userz);
        $this->set('_serialize', ['userz']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userz = $this->Userz->newEntity();
        if ($this->request->is('post')) {
            $userz = $this->Userz->patchEntity($userz, $this->request->data);
            if ($this->Userz->save($userz)) {
                $this->Flash->success('The userz has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The userz could not be saved. Please, try again.');
            }
        }
        $this->set(compact('userz'));
        $this->set('_serialize', ['userz']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userz id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userz = $this->Userz->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userz = $this->Userz->patchEntity($userz, $this->request->data);
            if ($this->Userz->save($userz)) {
                $this->Flash->success('The userz has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The userz could not be saved. Please, try again.');
            }
        }
        $this->set(compact('userz'));
        $this->set('_serialize', ['userz']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userz id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userz = $this->Userz->get($id);
        if ($this->Userz->delete($userz)) {
            $this->Flash->success('The userz has been deleted.');
        } else {
            $this->Flash->error('The userz could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
