<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Flyscreenopentypes Controller
 *
 * @property \App\Model\Table\FlyscreenopentypesTable $Flyscreenopentypes */
class FlyscreenopentypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {   
        $flyscreenopentypes = $this->Flyscreenopentypes->find('all')
        ->contain(['Opentypes.Itemtypes', 'Opentypes', 'Flyscreentypes']);
        
        $this->set('flyscreenopentypes', $flyscreenopentypes);
        $this->set('_serialize', ['flyscreenopentypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Flyscreenopentype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $flyscreenopentype = $this->Flyscreenopentypes->get($id, [
            'contain' => ['Opentypes.Itemtypes', 'Opentypes', 'Flyscreentypes', 'Flyscreenmeshes']
        ]);
        $this->set('flyscreenopentype', $flyscreenopentype);
        $this->set('_serialize', ['flyscreenopentype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherw
     */
    public function add()
    {
        $flyscreenopentype = $this->Flyscreenopentypes->newEntity();
        if ($this->request->is('post')) {
            // var_dump($this->request->data);
            // die();
            $flyscreenopentype = $this->Flyscreenopentypes->patchEntity($flyscreenopentype, $this->request->data);
            if ($this->Flyscreenopentypes->save($flyscreenopentype)) {
                $this->Flash->success('The flyscreenopentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreenopentype could not be saved. Please, try again.');
            }
        }
        $opentypes = $this->Flyscreenopentypes->Opentypes->find('list', ['limit' => 200]);
        $flyscreentypes = $this->Flyscreenopentypes->Flyscreentypes->find('list', ['limit' => 200]);

        $opentypeArray = $opentypes->toArray();
        foreach ($opentypeArray as $key => $opentype) {
            $itemtype_id = $this->Flyscreenopentypes->Opentypes->find()
                                    ->select(['itemtype_id'])
                                    ->where(['id' => $key]);
            $itemtype_name = $this->Flyscreenopentypes->Opentypes->Itemtypes->find()
                                    ->select(['type'])
                                    ->where(['id' => $itemtype_id]);
            $opentypeArray[$key] = "[" . $itemtype_name->first()['type'] . "] $opentype";
        }

        $opentypes = $opentypeArray;

        $this->set(compact('flyscreenopentype', 'opentypes', 'flyscreentypes'));
        $this->set('_serialize', ['flyscreenopentype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Flyscreenopentype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $flyscreenopentype = $this->Flyscreenopentypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $flyscreenopentype = $this->Flyscreenopentypes->patchEntity($flyscreenopentype, $this->request->data);
            if ($this->Flyscreenopentypes->save($flyscreenopentype)) {
                $this->Flash->success('The flyscreenopentype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The flyscreenopentype could not be saved. Please, try again.');
            }
        }
        $opentypes = $this->Flyscreenopentypes->Opentypes->find('list', ['limit' => 200]);
        $flyscreentypes = $this->Flyscreenopentypes->Flyscreentypes->find('list', ['limit' => 200]);

        $opentypeArray = $opentypes->toArray();
        foreach ($opentypeArray as $key => $opentype) {
            $itemtype_id = $this->Flyscreenopentypes->Opentypes->find()
                                    ->select(['itemtype_id'])
                                    ->where(['id' => $key]);
            $itemtype_name = $this->Flyscreenopentypes->Opentypes->Itemtypes->find()
                                    ->select(['type'])
                                    ->where(['id' => $itemtype_id]);
            $opentypeArray[$key] = "[" . $itemtype_name->first()['type'] . "] $opentype";
        }

        $opentypes = $opentypeArray;
        $this->set(compact('flyscreenopentype', 'opentypes', 'flyscreentypes'));
        $this->set('_serialize', ['flyscreenopentype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Flyscreenopentype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $flyscreenopentype = $this->Flyscreenopentypes->get($id);
        if ($this->Flyscreenopentypes->delete($flyscreenopentype)) {
            $this->Flash->success('The flyscreenopentype has been deleted.');
        } else {
            $this->Flash->error('The flyscreenopentype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
