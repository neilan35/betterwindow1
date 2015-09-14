<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usages Controller
 *
 * @property \App\Model\Table\UsagesTable $Usages */
class UsagesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('usages', $this->paginate($this->Usages));
        $this->set('_serialize', ['usages']);
    }

    /**
     * View method
     *
     * @param string|null $id Usage id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usage = $this->Usages->get($id, [
            'contain' => ['Glazings']
        ]);
        $this->set('usage', $usage);
        $this->set('_serialize', ['usage']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usage = $this->Usages->newEntity();
        // var_dump($this->request->data);
        if ($this->request->is('post')) {
            $usage = $this->Usages->patchEntity($usage, $this->request->data);

           // var_dump($usage);
           // die();

            if ($this->Usages->save($usage)) {
                $this->Flash->success('The usage has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The usage could not be saved. Please, try again.');
            }
        }
        $this->set(compact('usage'));
        $this->set('_serialize', ['usage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usage id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usage = $this->Usages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usage = $this->Usages->patchEntity($usage, $this->request->data);
            if ($this->Usages->save($usage)) {
                $this->Flash->success('The usage has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The usage could not be saved. Please, try again.');
            }
        }
        $this->set(compact('usage'));
        $this->set('_serialize', ['usage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usage id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usage = $this->Usages->get($id);
        if ($this->Usages->delete($usage)) {
            $this->Flash->success('The usage has been deleted.');
        } else {
            $this->Flash->error('The usage could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
