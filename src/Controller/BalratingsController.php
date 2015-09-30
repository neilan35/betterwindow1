<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Balratings Controller
 *
 * @property \App\Model\Table\BalratingsTable $Balratings */
class BalratingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $balratings = $this->Balratings->find('all');

        $this->set('balratings', $balratings);
        $this->set('_serialize', ['balratings']);
    }

    /**
     * View method
     *
     * @param string|null $id Balrating id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $balrating = $this->Balratings->get($id, [
            'contain' => ['Flyscreenmeshes', 'Glazings', 'Quoteproducts']
        ]);
        $this->set('balrating', $balrating);
        $this->set('_serialize', ['balrating']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $balrating = $this->Balratings->newEntity();
        if ($this->request->is('post')) {
            $balrating = $this->Balratings->patchEntity($balrating, $this->request->data);
            if ($this->Balratings->save($balrating)) {
                $this->Flash->success('The balrating has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The balrating could not be saved. Please, try again.');
            }
        }
        $this->set(compact('balrating'));
        $this->set('_serialize', ['balrating']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Balrating id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $balrating = $this->Balratings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $balrating = $this->Balratings->patchEntity($balrating, $this->request->data);
            if ($this->Balratings->save($balrating)) {
                $this->Flash->success('The balrating has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The balrating could not be saved. Please, try again.');
            }
        }
        $this->set(compact('balrating'));
        $this->set('_serialize', ['balrating']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Balrating id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $balrating = $this->Balratings->get($id);
        if ($this->Balratings->delete($balrating)) {
            $this->Flash->success('The balrating has been deleted.');
        } else {
            $this->Flash->error('The balrating could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
