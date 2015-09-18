<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Meshtypes Controller
 *
 * @property \App\Model\Table\MeshtypesTable $Meshtypes */
class MeshtypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $meshtypes = $this->Meshtypes->find('all');
        $this->set('meshtypes', $meshtypes);
        $this->set('_serialize', ['meshtypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Meshtype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $meshtype = $this->Meshtypes->get($id, [
            'contain' => ['Flyscreenmeshes']
        ]);
        $this->set('meshtype', $meshtype);
        $this->set('_serialize', ['meshtype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $meshtype = $this->Meshtypes->newEntity();
        if ($this->request->is('post')) {
            $meshtype = $this->Meshtypes->patchEntity($meshtype, $this->request->data);
            if ($this->Meshtypes->save($meshtype)) {
                $this->Flash->success('The meshtype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The meshtype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('meshtype'));
        $this->set('_serialize', ['meshtype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Meshtype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $meshtype = $this->Meshtypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $meshtype = $this->Meshtypes->patchEntity($meshtype, $this->request->data);
            if ($this->Meshtypes->save($meshtype)) {
                $this->Flash->success('The meshtype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The meshtype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('meshtype'));
        $this->set('_serialize', ['meshtype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Meshtype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $meshtype = $this->Meshtypes->get($id);
        if ($this->Meshtypes->delete($meshtype)) {
            $this->Flash->success('The meshtype has been deleted.');
        } else {
            $this->Flash->error('The meshtype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
