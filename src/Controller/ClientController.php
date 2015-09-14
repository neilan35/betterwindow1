<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Client Controller
 *
 * @property \App\Model\Table\ClientTable $Client */
class ClientController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('client', $this->paginate($this->Client));
        $this->set('_serialize', ['client']);
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Client->get($id, [
            'contain' => []
        ]);
        $this->set('client', $client);
        $this->set('_serialize', ['client']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Client->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Client->patchEntity($client, $this->request->data);
            $result = $this->Client->save($client);

            if ($result) {

                $query = $this->Client->Buyer->query();
                $query->insert(['user_id','CustAddress'])->values(['user_id'=>$result->id,'CustAddress'=>$this->request->data('Customeraddress')])->execute();



                $this->Flash->success('The client has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The client could not be saved. Please, try again.');
            }
        }
        $this->set(compact('client'));
        $this->set('_serialize', ['client']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Client->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Client->patchEntity($client, $this->request->data);
            if ($this->Client->save($client)) {
                $this->Flash->success('The client has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The client could not be saved. Please, try again.');
            }
        }
        $this->set(compact('client'));
        $this->set('_serialize', ['client']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Client->get($id);
        if ($this->Client->delete($client)) {
            $this->Flash->success('The client has been deleted.');
        } else {
            $this->Flash->error('The client could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
