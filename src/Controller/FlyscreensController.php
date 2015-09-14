<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flyscreens Controller
 *
 * @property \App\Model\Table\FlyscreensTable $Flyscreens */
class FlyscreensController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('flyscreens', $this->paginate($this->Flyscreens));
        $this->set('_serialize', ['flyscreens']);
    }

    /**
     * View method
     *
     * @param string|null $id Flyscreen id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flyscreen = $this->Flyscreens->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('flyscreen', $flyscreen);
        $this->set('_serialize', ['flyscreen']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flyscreen = $this->Flyscreens->newEntity();
        if ($this->request->is('post')) {
            $flyscreen = $this->Flyscreens->patchEntity($flyscreen, $this->request->data);
            if ($this->Flyscreens->save($flyscreen)) {
                $this->Flash->success('The flyscreen has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreen could not be saved. Please, try again.');
            }
        }
        $this->set(compact('flyscreen'));
        $this->set('_serialize', ['flyscreen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flyscreen id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flyscreen = $this->Flyscreens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flyscreen = $this->Flyscreens->patchEntity($flyscreen, $this->request->data);
            if ($this->Flyscreens->save($flyscreen)) {
                $this->Flash->success('The flyscreen has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreen could not be saved. Please, try again.');
            }
        }
        $this->set(compact('flyscreen'));
        $this->set('_serialize', ['flyscreen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flyscreen id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flyscreen = $this->Flyscreens->get($id);
        if ($this->Flyscreens->delete($flyscreen)) {
            $this->Flash->success('The flyscreen has been deleted.');
        } else {
            $this->Flash->error('The flyscreen could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
