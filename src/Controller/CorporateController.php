<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Corporate Controller
 *
 * @property \App\Model\Table\CorporateTable $Corporate */
class CorporateController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('corporate', $this->paginate($this->Corporate));
        $this->set('_serialize', ['corporate']);
    }

    /**
     * View method
     *
     * @param string|null $id Corporate id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $corporate = $this->Corporate->get($id, [
            'contain' => []
        ]);
        $this->set('corporate', $corporate);
        $this->set('_serialize', ['corporate']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $corporate = $this->Corporate->newEntity();
        if ($this->request->is('post')) {
            $corporate = $this->Corporate->patchEntity($corporate, $this->request->data);
            if ($this->Corporate->save($corporate)) {
                $this->Flash->success('The corporate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The corporate could not be saved. Please, try again.');
            }
        }
        $this->set(compact('corporate'));
        $this->set('_serialize', ['corporate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Corporate id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $corporate = $this->Corporate->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $corporate = $this->Corporate->patchEntity($corporate, $this->request->data);
            if ($this->Corporate->save($corporate)) {
                $this->Flash->success('The corporate has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The corporate could not be saved. Please, try again.');
            }
        }
        $this->set(compact('corporate'));
        $this->set('_serialize', ['corporate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Corporate id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $corporate = $this->Corporate->get($id);
        if ($this->Corporate->delete($corporate)) {
            $this->Flash->success('The corporate has been deleted.');
        } else {
            $this->Flash->error('The corporate could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
