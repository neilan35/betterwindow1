<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colours Controller
 *
 * @property \App\Model\Table\ColoursTable $Colours */
class ColoursController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $this->set('colours', $this->paginate($this->Colours));
        $this->set('_serialize', ['colours']);
    }

    /**
     * View method
     *
     * @param string|null $id Colour id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colour = $this->Colours->get($id, [
            'contain' => ['Categories', 'Products']
        ]);
        $this->set('colour', $colour);
        $this->set('_serialize', ['colour']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colour = $this->Colours->newEntity();
        if ($this->request->is('post')) {
            $colour = $this->Colours->patchEntity($colour, $this->request->data);
            if ($this->Colours->save($colour)) {
                $this->Flash->success('The colour has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The colour could not be saved. Please, try again.');
            }
        }
        $categories = $this->Colours->Categories->find('list', ['limit' => 200]);
        $this->set(compact('colour', 'categories'));
        $this->set('_serialize', ['colour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Colour id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colour = $this->Colours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colour = $this->Colours->patchEntity($colour, $this->request->data);
            if ($this->Colours->save($colour)) {
                $this->Flash->success('The colour has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The colour could not be saved. Please, try again.');
            }
        }
        $categories = $this->Colours->Categories->find('list', ['limit' => 200]);
        $this->set(compact('colour', 'categories'));
        $this->set('_serialize', ['colour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Colour id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colour = $this->Colours->get($id);
        if ($this->Colours->delete($colour)) {
            $this->Flash->success('The colour has been deleted.');
        } else {
            $this->Flash->error('The colour could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
