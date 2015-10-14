<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Reveals Controller
 *
 * @property \App\Model\Table\RevealsTable $Reveals */
class RevealsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $reveals = $this->Reveals->find('all');
        $this->set('reveals', $reveals);
        $this->set('_serialize', ['reveals']);
    }

    /**
     * View method
     *
     * @param string|null $id Reveal id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reveal = $this->Reveals->get($id, [
            'contain' => ['Quoteproducts']
        ]);
        $this->set('reveal', $reveal);
        $this->set('_serialize', ['reveal']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reveal = $this->Reveals->newEntity();
        if ($this->request->is('post')) {
            $reveal = $this->Reveals->patchEntity($reveal, $this->request->data);
            if ($this->Reveals->save($reveal)) {
                $this->Flash->success('The reveal has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The reveal could not be saved. Please, try again.');
            }
        }
        $this->set(compact('reveal'));
        $this->set('_serialize', ['reveal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Reveal id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reveal = $this->Reveals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reveal = $this->Reveals->patchEntity($reveal, $this->request->data);
            if ($this->Reveals->save($reveal)) {
                $this->Flash->success('The reveal has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The reveal could not be saved. Please, try again.');
            }
        }
        $this->set(compact('reveal'));
        $this->set('_serialize', ['reveal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Reveal id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reveal = $this->Reveals->get($id);
        if ($this->Reveals->delete($reveal)) {
            $this->Flash->success('The reveal has been deleted.');
        } else {
            $this->Flash->error('The reveal could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
