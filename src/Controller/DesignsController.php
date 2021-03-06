<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Designs Controller
 *
 * @property \App\Model\Table\DesignsTable $Designs */
class DesignsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $designs = $this->Designs->find('all')
        ->contain(['Opentypes', 'Pictures']);
        
        $this->set('designs', $designs);
        $this->set('_serialize', ['designs']);
    }

    /**
     * View method
     *
     * @param string|null $id Design id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $design = $this->Designs->get($id, [
            'contain' => ['Opentypes', 'Pictures', 'Quoteproducts']
        ]);
        $this->set('design', $design);
        $this->set('_serialize', ['design']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $design = $this->Designs->newEntity();
        if ($this->request->is('post')) {
            $design = $this->Designs->patchEntity($design, $this->request->data);
            if ($this->Designs->save($design)) {
                $this->Flash->success('The design has been saved.');
                return $this->redirect(['action' => 'index', "#"]);
            } else {
                $this->Flash->error('The design could not be saved. Please, try again.');
            }
        }
        $opentypes = $this->Designs->Opentypes->find('list', ['limit' => 200]);
        $pictures = $this->Designs->Pictures->find('list', ['limit' => 200]);
        $this->set(compact('design', 'opentypes', 'pictures'));
        $this->set('_serialize', ['design']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Design id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $design = $this->Designs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $design = $this->Designs->patchEntity($design, $this->request->data);
            if ($this->Designs->save($design)) {
                $this->Flash->success('The design has been saved.');
                return $this->redirect(['action' => 'index', "#"]);
            } else {
                $this->Flash->error('The design could not be saved. Please, try again.');
            }
        }
        $opentypes = $this->Designs->Opentypes->find('list', ['limit' => 200]);
        $pictures = $this->Designs->Pictures->find('list', ['limit' => 200]);
        $this->set(compact('design', 'opentypes', 'pictures'));
        $this->set('_serialize', ['design']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Design id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $design = $this->Designs->get($id);
        if ($this->Designs->delete($design)) {
            $this->Flash->success('The design has been deleted.');
        } else {
            $this->Flash->error('The design could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index', "#"]);
    }
}
