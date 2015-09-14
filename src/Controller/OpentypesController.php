<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Opentypes Controller
 *
 * @property \App\Model\Table\OpentypesTable $Opentypes */
class OpentypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Itemtypes']
        ];
        $this->set('opentypes', $this->paginate($this->Opentypes));
        $this->set('_serialize', ['opentypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Opentype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opentype = $this->Opentypes->get($id, [
            'contain' => ['Itemtypes', 'Designs', 'Flyscreenopentypes']
        ]);
        $this->set('opentype', $opentype);
        $this->set('_serialize', ['opentype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opentype = $this->Opentypes->newEntity();
        if ($this->request->is('post')) {
            $opentype = $this->Opentypes->patchEntity($opentype, $this->request->data);
            if ($this->Opentypes->save($opentype)) {
                $this->Flash->success('The opentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The opentype could not be saved. Please, try again.');
            }
        }
        $itemtypes = $this->Opentypes->Itemtypes->find('list', ['limit' => 200]);
        $this->set(compact('opentype', 'itemtypes'));
        $this->set('_serialize', ['opentype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Opentype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opentype = $this->Opentypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opentype = $this->Opentypes->patchEntity($opentype, $this->request->data);
            if ($this->Opentypes->save($opentype)) {
                $this->Flash->success('The opentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The opentype could not be saved. Please, try again.');
            }
        }
        $itemtypes = $this->Opentypes->Itemtypes->find('list', ['limit' => 200]);
        $this->set(compact('opentype', 'itemtypes'));
        $this->set('_serialize', ['opentype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Opentype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opentype = $this->Opentypes->get($id);
        if ($this->Opentypes->delete($opentype)) {
            $this->Flash->success('The opentype has been deleted.');
        } else {
            $this->Flash->error('The opentype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
