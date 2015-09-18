<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Compositions Controller
 *
 * @property \App\Model\Table\CompositionsTable $Compositions */
class CompositionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $compositions = $this->Compositions->find('all');
        $this->set('compositions', $compositions);
        $this->set('_serialize', ['compositions']);
    }

    /**
     * View method
     *
     * @param string|null $id Composition id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $composition = $this->Compositions->get($id, [
            'contain' => ['Glazings']
        ]);
        $this->set('composition', $composition);
        $this->set('_serialize', ['composition']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $composition = $this->Compositions->newEntity();
        if ($this->request->is('post')) {
            $composition = $this->Compositions->patchEntity($composition, $this->request->data);
            if ($this->Compositions->save($composition)) {
                $this->Flash->success('The composition has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The composition could not be saved. Please, try again.');
            }
        }
        $this->set(compact('composition'));
        $this->set('_serialize', ['composition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Composition id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $composition = $this->Compositions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $composition = $this->Compositions->patchEntity($composition, $this->request->data);
            if ($this->Compositions->save($composition)) {
                $this->Flash->success('The composition has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The composition could not be saved. Please, try again.');
            }
        }
        $this->set(compact('composition'));
        $this->set('_serialize', ['composition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Composition id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $composition = $this->Compositions->get($id);
        if ($this->Compositions->delete($composition)) {
            $this->Flash->success('The composition has been deleted.');
        } else {
            $this->Flash->error('The composition could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
