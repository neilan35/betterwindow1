<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Buyer Controller
 *
 * @property \App\Model\Table\BuyerTable $Buyer */
class BuyerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('buyer', $this->paginate($this->Buyer));
        $this->set('_serialize', ['buyer']);
    }

    /**
     * View method
     *
     * @param string|null $id Buyer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $buyer = $this->Buyer->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('buyer', $buyer);
        $this->set('_serialize', ['buyer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $buyer = $this->Buyer->newEntity();
        if ($this->request->is('post')) {
            $buyer = $this->Buyer->patchEntity($buyer, $this->request->data);
            if ($this->Buyer->save($buyer)) {
                $this->Flash->success('The buyer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The buyer could not be saved. Please, try again.');
            }
        }
        $users = $this->Buyer->Users->find('list', ['limit' => 200]);
        $this->set(compact('buyer', 'users'));
        $this->set('_serialize', ['buyer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Buyer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $buyer = $this->Buyer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $buyer = $this->Buyer->patchEntity($buyer, $this->request->data);
            if ($this->Buyer->save($buyer)) {
                $this->Flash->success('The buyer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The buyer could not be saved. Please, try again.');
            }
        }
        $users = $this->Buyer->Users->find('list', ['limit' => 200]);
        $this->set(compact('buyer', 'users'));
        $this->set('_serialize', ['buyer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Buyer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $buyer = $this->Buyer->get($id);
        if ($this->Buyer->delete($buyer)) {
            $this->Flash->success('The buyer has been deleted.');
        } else {
            $this->Flash->error('The buyer could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
