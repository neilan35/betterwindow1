<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Quoteproducts Controller
 *
 * @property \App\Model\Table\QuoteproductsTable $Quoteproducts */
class QuoteproductsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quotes', 'Colours', 'Balratings', 'Itemtypes', 'Designs', 'Reveals', 'Flyscreenmeshes', 'Glazings']
        ];
        $this->set('quoteproducts', $this->paginate($this->Quoteproducts));
        $this->set('_serialize', ['quoteproducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Quoteproduct id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quoteproduct = $this->Quoteproducts->get($id, [
            'contain' => ['Quotes', 'Colours', 'Balratings', 'Itemtypes', 'Designs', 'Reveals', 'Flyscreenmeshes', 'Glazings']
        ]);
        $this->set('quoteproduct', $quoteproduct);
        $this->set('_serialize', ['quoteproduct']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quoteproduct = $this->Quoteproducts->newEntity();
        if ($this->request->is('post')) {
            $quoteproduct = $this->Quoteproducts->patchEntity($quoteproduct, $this->request->data);
            if ($this->Quoteproducts->save($quoteproduct)) {
                $this->Flash->success('The quoteproduct has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The quoteproduct could not be saved. Please, try again.');
            }
        }
        $quotes = $this->Quoteproducts->Quotes->find('list', ['limit' => 200]);
        $colours = $this->Quoteproducts->Colours->find('list', ['limit' => 200]);
        $balratings = $this->Quoteproducts->Balratings->find('list', ['limit' => 200]);
        $itemtypes = $this->Quoteproducts->Itemtypes->find('list', ['limit' => 200]);
        $designs = $this->Quoteproducts->Designs->find('list', ['limit' => 200]);
        $reveals = $this->Quoteproducts->Reveals->find('list', ['limit' => 200]);
        $flyscreenmeshes = $this->Quoteproducts->Flyscreenmeshes->find('list', ['limit' => 200]);
        $glazings = $this->Quoteproducts->Glazings->find('list', ['limit' => 200]);
        $this->set(compact('quoteproduct', 'quotes', 'colours', 'balratings', 'itemtypes', 'designs', 'reveals', 'flyscreenmeshes', 'glazings'));
        $this->set('_serialize', ['quoteproduct']);
    }

    public function get_opentypes($itemtypes_id){
        $this->loadModel('Itemtypes');
        $this->loadModel('Opentypes');
        $this->autoRender= false;
        // var_dump($itemtypes_id);
        

        $opentypesID = $this->Opentypes->find('list')
                ->select(['name'])
                ->where(['itemtype_id' => $itemtypes_id]);
                

        // foreach ($opentypesID as $one) {
        //     var_dump($one);

        // }
        // die();
        echo json_encode($opentypesID->toArray());
    }



    /**
     * Edit method
     *
     * @param string|null $id Quoteproduct id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quoteproduct = $this->Quoteproducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quoteproduct = $this->Quoteproducts->patchEntity($quoteproduct, $this->request->data);
            if ($this->Quoteproducts->save($quoteproduct)) {
                $this->Flash->success('The quoteproduct has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The quoteproduct could not be saved. Please, try again.');
            }
        }
        $quotes = $this->Quoteproducts->Quotes->find('list', ['limit' => 200]);
        $colours = $this->Quoteproducts->Colours->find('list', ['limit' => 200]);
        $balratings = $this->Quoteproducts->Balratings->find('list', ['limit' => 200]);
        $itemtypes = $this->Quoteproducts->Itemtypes->find('list', ['limit' => 200]);
        $designs = $this->Quoteproducts->Designs->find('list', ['limit' => 200]);
        $reveals = $this->Quoteproducts->Reveals->find('list', ['limit' => 200]);
        $flyscreenmeshes = $this->Quoteproducts->Flyscreenmeshes->find('list', ['limit' => 200]);
        $glazings = $this->Quoteproducts->Glazings->find('list', ['limit' => 200]);
        $this->set(compact('quoteproduct', 'quotes', 'colours', 'balratings', 'itemtypes', 'designs', 'reveals', 'flyscreenmeshes', 'glazings'));
        $this->set('_serialize', ['quoteproduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quoteproduct id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quoteproduct = $this->Quoteproducts->get($id);
        if ($this->Quoteproducts->delete($quoteproduct)) {
            $this->Flash->success('The quoteproduct has been deleted.');
        } else {
            $this->Flash->error('The quoteproduct could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
