<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Glasscomps Controller
 *
 * @property \App\Model\Table\GlasscompsTable $Glasscomps */
class GlasscompsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $glasscomps = $this->Glasscomps->find('all');
        $this->set('glasscomps', $glasscomps);
        $this->set('_serialize', ['glasscomps']);
    }

    /**
     * View method
     *
     * @param string|null $id Glasscomp id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $glasscomp = $this->Glasscomps->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('glasscomp', $glasscomp);
        $this->set('_serialize', ['glasscomp']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $glasscomp = $this->Glasscomps->newEntity();
        if ($this->request->is('post')) {
            $glasscomp = $this->Glasscomps->patchEntity($glasscomp, $this->request->data);
            if ($this->Glasscomps->save($glasscomp)) {
                $this->Flash->success('The glasscomp has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The glasscomp could not be saved. Please, try again.');
            }
        }
        $this->set(compact('glasscomp'));
        $this->set('_serialize', ['glasscomp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Glasscomp id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $glasscomp = $this->Glasscomps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $glasscomp = $this->Glasscomps->patchEntity($glasscomp, $this->request->data);
            if ($this->Glasscomps->save($glasscomp)) {
                $this->Flash->success('The glasscomp has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The glasscomp could not be saved. Please, try again.');
            }
        }
        $this->set(compact('glasscomp'));
        $this->set('_serialize', ['glasscomp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Glasscomp id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $glasscomp = $this->Glasscomps->get($id);
        if ($this->Glasscomps->delete($glasscomp)) {
            $this->Flash->success('The glasscomp has been deleted.');
        } else {
            $this->Flash->error('The glasscomp could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
