<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Itemtypes Controller
 *
 * @property \App\Model\Table\ItemtypesTable $Itemtypes */
class ItemtypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $itemtypes = $this->Itemtypes->find('all');

        $this->set('itemtypes', $itemtypes);
        $this->set('_serialize', ['itemtypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Itemtype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemtype = $this->Itemtypes->get($id, [
            'contain' => ['Opentypes', 'Quoteproducts']
        ]);
        $this->set('itemtype', $itemtype);
        $this->set('_serialize', ['itemtype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemtype = $this->Itemtypes->newEntity();
        if ($this->request->is('post')) {
            $itemtype = $this->Itemtypes->patchEntity($itemtype, $this->request->data);
            if ($this->Itemtypes->save($itemtype)) {
                $this->Flash->success('The itemtype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The itemtype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('itemtype'));
        $this->set('_serialize', ['itemtype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Itemtype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemtype = $this->Itemtypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemtype = $this->Itemtypes->patchEntity($itemtype, $this->request->data);
            if ($this->Itemtypes->save($itemtype)) {
                $this->Flash->success('The itemtype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The itemtype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('itemtype'));
        $this->set('_serialize', ['itemtype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Itemtype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemtype = $this->Itemtypes->get($id);
        if ($this->Itemtypes->delete($itemtype)) {
            $this->Flash->success('The itemtype has been deleted.');
        } else {
            $this->Flash->error('The itemtype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
