<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dooropentypes Controller
 *
 * @property \App\Model\Table\DooropentypesTable $Dooropentypes */
class DooropentypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('dooropentypes', $this->paginate($this->Dooropentypes));
        $this->set('_serialize', ['dooropentypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Dooropentype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dooropentype = $this->Dooropentypes->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('dooropentype', $dooropentype);
        $this->set('_serialize', ['dooropentype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dooropentype = $this->Dooropentypes->newEntity();
        if ($this->request->is('post')) {
            $dooropentype = $this->Dooropentypes->patchEntity($dooropentype, $this->request->data);
            if ($this->Dooropentypes->save($dooropentype)) {
                $this->Flash->success('The dooropentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The dooropentype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('dooropentype'));
        $this->set('_serialize', ['dooropentype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dooropentype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dooropentype = $this->Dooropentypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dooropentype = $this->Dooropentypes->patchEntity($dooropentype, $this->request->data);
            if ($this->Dooropentypes->save($dooropentype)) {
                $this->Flash->success('The dooropentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The dooropentype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('dooropentype'));
        $this->set('_serialize', ['dooropentype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dooropentype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dooropentype = $this->Dooropentypes->get($id);
        if ($this->Dooropentypes->delete($dooropentype)) {
            $this->Flash->success('The dooropentype has been deleted.');
        } else {
            $this->Flash->error('The dooropentype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
