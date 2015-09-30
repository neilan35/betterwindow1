<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flyscreentypes Controller
 *
 * @property \App\Model\Table\FlyscreentypesTable $Flyscreentypes */
class FlyscreentypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
       $flyscreentypes = $this->Flyscreentypes->find('all');
        $this->set('flyscreentypes', $flyscreentypes);
        $this->set('_serialize', ['flyscreentypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Flyscreentype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flyscreentype = $this->Flyscreentypes->get($id, [
            'contain' => ['Flyscreenmeshes', 'Flyscreenopentypes']
        ]);
        $this->set('flyscreentype', $flyscreentype);
        $this->set('_serialize', ['flyscreentype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flyscreentype = $this->Flyscreentypes->newEntity();
        if ($this->request->is('post')) {
            $flyscreentype = $this->Flyscreentypes->patchEntity($flyscreentype, $this->request->data);
            if ($this->Flyscreentypes->save($flyscreentype)) {
                $this->Flash->success('The flyscreentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreentype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('flyscreentype'));
        $this->set('_serialize', ['flyscreentype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flyscreentype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flyscreentype = $this->Flyscreentypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flyscreentype = $this->Flyscreentypes->patchEntity($flyscreentype, $this->request->data);
            if ($this->Flyscreentypes->save($flyscreentype)) {
                $this->Flash->success('The flyscreentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreentype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('flyscreentype'));
        $this->set('_serialize', ['flyscreentype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flyscreentype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flyscreentype = $this->Flyscreentypes->get($id);
        if ($this->Flyscreentypes->delete($flyscreentype)) {
            $this->Flash->success('The flyscreentype has been deleted.');
        } else {
            $this->Flash->error('The flyscreentype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
