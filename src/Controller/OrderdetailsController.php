<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orderdetails Controller
 *
 * @property \App\Model\Table\OrderdetailsTable $Orderdetails */
class OrderdetailsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('orderdetails', $this->paginate($this->Orderdetails));
        $this->set('_serialize', ['orderdetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Orderdetail id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderdetail = $this->Orderdetails->get($id, [
            'contain' => []
        ]);
        $this->set('orderdetail', $orderdetail);
        $this->set('_serialize', ['orderdetail']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderdetail = $this->Orderdetails->newEntity();
        if ($this->request->is('post')) {
            $orderdetail = $this->Orderdetails->patchEntity($orderdetail, $this->request->data);
            if ($this->Orderdetails->save($orderdetail)) {
                $this->Flash->success('The orderdetail has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The orderdetail could not be saved. Please, try again.');
            }
        }
        $this->set(compact('orderdetail'));
        $this->set('_serialize', ['orderdetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orderdetail id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderdetail = $this->Orderdetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderdetail = $this->Orderdetails->patchEntity($orderdetail, $this->request->data);
            if ($this->Orderdetails->save($orderdetail)) {
                $this->Flash->success('The orderdetail has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The orderdetail could not be saved. Please, try again.');
            }
        }
        $this->set(compact('orderdetail'));
        $this->set('_serialize', ['orderdetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orderdetail id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderdetail = $this->Orderdetails->get($id);
        if ($this->Orderdetails->delete($orderdetail)) {
            $this->Flash->success('The orderdetail has been deleted.');
        } else {
            $this->Flash->error('The orderdetail could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
