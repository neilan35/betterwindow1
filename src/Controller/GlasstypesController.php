<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Glasstypes Controller
 *
 * @property \App\Model\Table\GlasstypesTable $Glasstypes */
class GlasstypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('glasstypes', $this->paginate($this->Glasstypes));
        $this->set('_serialize', ['glasstypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Glasstype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $glasstype = $this->Glasstypes->get($id, [
            'contain' => ['Glazings']
        ]);
        $this->set('glasstype', $glasstype);
        $this->set('_serialize', ['glasstype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $glasstype = $this->Glasstypes->newEntity();
        if ($this->request->is('post')) {
            $glasstype = $this->Glasstypes->patchEntity($glasstype, $this->request->data);
            if ($this->Glasstypes->save($glasstype)) {
                $this->Flash->success('The glasstype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The glasstype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('glasstype'));
        $this->set('_serialize', ['glasstype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Glasstype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $glasstype = $this->Glasstypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $glasstype = $this->Glasstypes->patchEntity($glasstype, $this->request->data);
            if ($this->Glasstypes->save($glasstype)) {
                $this->Flash->success('The glasstype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The glasstype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('glasstype'));
        $this->set('_serialize', ['glasstype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Glasstype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $glasstype = $this->Glasstypes->get($id);
        if ($this->Glasstypes->delete($glasstype)) {
            $this->Flash->success('The glasstype has been deleted.');
        } else {
            $this->Flash->error('The glasstype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
