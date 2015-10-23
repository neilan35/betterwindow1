<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Constants Controller
 *
 * @property \App\Model\Table\ConstantsTable $Constants */
class ConstantsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('constants', $this->paginate($this->Constants));
        $this->set('_serialize', ['constants']);
    }

    /**
     * View method
     *
     * @param string|null $id Constant id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $constant = $this->Constants->get($id, [
            'contain' => []
        ]);
        $this->set('constant', $constant);
        $this->set('_serialize', ['constant']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $constant = $this->Constants->newEntity();
        if ($this->request->is('post')) {
            $constant = $this->Constants->patchEntity($constant, $this->request->data);
            if ($this->Constants->save($constant)) {
                $this->Flash->success('The constant has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The constant could not be saved. Please, try again.');
            }
        }
        $this->set(compact('constant'));
        $this->set('_serialize', ['constant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Constant id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $constant = $this->Constants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $constant = $this->Constants->patchEntity($constant, $this->request->data);
            if ($this->Constants->save($constant)) {
                $this->Flash->success('The constant has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The constant could not be saved. Please, try again.');
            }
        }
        $this->set(compact('constant'));
        $this->set('_serialize', ['constant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Constant id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $constant = $this->Constants->get($id);
        if ($this->Constants->delete($constant)) {
            $this->Flash->success('The constant has been deleted.');
        } else {
            $this->Flash->error('The constant could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
