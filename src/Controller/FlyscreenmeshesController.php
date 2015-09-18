<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flyscreenmeshes Controller
 *
 * @property \App\Model\Table\FlyscreenmeshesTable $Flyscreenmeshes */
class FlyscreenmeshesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $flyscreenmeshes = $this->Flyscreenmeshes->find('all')
        ->contain(['Balratings', 'Meshtypes', 'Flyscreenopentypes']);

        // $this->paginate = [
        //     'contain' => ['Balratings', 'Meshtypes', 'Flyscreenopentypes']
        // ];
        $this->set('flyscreenmeshes', $flyscreenmeshes);
        $this->set('_serialize', ['flyscreenmeshes']);
    }

    /**
     * View method
     *
     * @param string|null $id Flyscreenmesh id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flyscreenmesh = $this->Flyscreenmeshes->get($id, [
            'contain' => ['Balratings', 'Meshtypes', 'Flyscreenopentypes', 'Products']
        ]);
        $this->set('flyscreenmesh', $flyscreenmesh);
        $this->set('_serialize', ['flyscreenmesh']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $flyscreenmesh = $this->Flyscreenmeshes->newEntity();
        if ($this->request->is('post')) {
            $flyscreenmesh = $this->Flyscreenmeshes->patchEntity($flyscreenmesh, $this->request->data);
            if ($this->Flyscreenmeshes->save($flyscreenmesh)) {
                $this->Flash->success('The flyscreenmesh has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreenmesh could not be saved. Please, try again.');
            }
        }
        $balratings = $this->Flyscreenmeshes->Balratings->find('list', ['limit' => 200]);
        $meshtypes = $this->Flyscreenmeshes->Meshtypes->find('list', ['limit' => 200]);
        $flyscreenopentypes = $this->Flyscreenmeshes->Flyscreenopentypes->find('list', ['limit' => 200]);
        $this->set(compact('flyscreenmesh', 'balratings', 'meshtypes', 'flyscreenopentypes'));
        $this->set('_serialize', ['flyscreenmesh']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flyscreenmesh id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flyscreenmesh = $this->Flyscreenmeshes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flyscreenmesh = $this->Flyscreenmeshes->patchEntity($flyscreenmesh, $this->request->data);
            if ($this->Flyscreenmeshes->save($flyscreenmesh)) {
                $this->Flash->success('The flyscreenmesh has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreenmesh could not be saved. Please, try again.');
            }
        }
        $balratings = $this->Flyscreenmeshes->Balratings->find('list', ['limit' => 200]);
        $meshtypes = $this->Flyscreenmeshes->Meshtypes->find('list', ['limit' => 200]);
        $flyscreenopentypes = $this->Flyscreenmeshes->Flyscreenopentypes->find('list', ['limit' => 200]);
        $this->set(compact('flyscreenmesh', 'balratings', 'meshtypes', 'flyscreenopentypes'));
        $this->set('_serialize', ['flyscreenmesh']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flyscreenmesh id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flyscreenmesh = $this->Flyscreenmeshes->get($id);
        if ($this->Flyscreenmeshes->delete($flyscreenmesh)) {
            $this->Flash->success('The flyscreenmesh has been deleted.');
        } else {
            $this->Flash->error('The flyscreenmesh could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
