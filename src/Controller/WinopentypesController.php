<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Winopentypes Controller
 *
 * @property \App\Model\Table\WinopentypesTable $Winopentypes */
class WinopentypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('winopentypes', $this->paginate($this->Winopentypes));
        $this->set('_serialize', ['winopentypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Winopentype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $winopentype = $this->Winopentypes->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('winopentype', $winopentype);
        $this->set('_serialize', ['winopentype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $winopentype = $this->Winopentypes->newEntity();
        if ($this->request->is('post')) {
            $winopentype = $this->Winopentypes->patchEntity($winopentype, $this->request->data);
            if ($this->Winopentypes->save($winopentype)) {
                $this->Flash->success('The winopentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The winopentype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('winopentype'));
        $this->set('_serialize', ['winopentype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Winopentype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $winopentype = $this->Winopentypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $winopentype = $this->Winopentypes->patchEntity($winopentype, $this->request->data);
            if ($this->Winopentypes->save($winopentype)) {
                $this->Flash->success('The winopentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The winopentype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('winopentype'));
        $this->set('_serialize', ['winopentype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Winopentype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $winopentype = $this->Winopentypes->get($id);
        if ($this->Winopentypes->delete($winopentype)) {
            $this->Flash->success('The winopentype has been deleted.');
        } else {
            $this->Flash->error('The winopentype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
