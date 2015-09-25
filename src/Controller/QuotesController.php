<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quotes Controller
 *
 * @property \App\Model\Table\QuotesTable $Quotes */
class QuotesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $quotes = $this->Quotes->find('all')
        ->contain(['Customers']);
        
        $this->set('quotes', $quotes);
        $this->set('_serialize', ['quotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Quote id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quote = $this->Quotes->get($id, [
            'contain' => ['Customers', 'Quoteproducts']
        ]);
        $this->set('quote', $quote);
        $this->set('_serialize', ['quote']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quote = $this->Quotes->newEntity();
        if ($this->request->is('post')) {
            $quote = $this->Quotes->patchEntity($quote, $this->request->data, 
                ['associated' => ['Quoteproducts','Colours','Itemtypes']
            ]);

            if ($this->Quotes->save($quote)) {
                $this->Flash->success('The quote has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The quote could not be saved. Please, try again.');
            }
        }
        $customers = $this->Quotes->Customers->find('list', ['limit' => 200]);
        $this->set(compact('quote', 'customers'));
        $this->set('_serialize', ['quote']);

       
    }

    public function create()
    {
       
        $this->layout = 'test2';
        $quote = $this->Quotes->newEntity();
        if ($this->request->is('post')) {
           $quote = $this->Quotes->patchEntity($quote, $this->request->data);

            if ($this->Quotes->save($quote)) {
                $this->Flash->success('The quote has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The quote could not be saved. Please, try again.');
            }
        }
        $customers = $this->Quotes->Customers->find('list', ['limit' => 200]);
        $colours = $this->Quotes->Quoteproducts->Colours->find('list', ['limit' => 200]);
        $balratings = $this->Quotes->Quoteproducts->Balratings->find('list', ['limit' => 200]);
        $itemtypes = $this->Quotes->Quoteproducts->Itemtypes->find('list', ['limit' => 200]);
        $reveals = $this->Quotes->Quoteproducts->Reveals->find('list', ['limit' => 200]);
        $usages = $this->Quotes->Quoteproducts->Glazings->Usages->find('list', ['limit' => 200]);
        $glasstypes = $this->Quotes->Quoteproducts->Glazings->Glasstypes->find('list', ['limit' => 200]);


        $this->set(compact('quote', 'customers','colours','balratings','itemtypes','reveals', 'usages','glasstypes'));
        $this->set('_serialize', ['quote']);
    }


        public function get_opentypes($itemtypes_id){
            $this->loadModel('Itemtypes');
            $this->loadModel('Opentypes');
            $this->loadModel('Quoteproducts');
            $this->autoRender= false;
            // var_dump($itemtypes_id);
            

            $opentypesID = $this->Opentypes->find('list')
                    ->select(['id','name'])
                    ->where(['itemtype_id' => $itemtypes_id]);
                    

            // foreach ($opentypesID as $one) {
            //     var_dump($one);

            // }
            // die();
            echo json_encode($opentypesID->toArray());
        }

          public function get_flyscreentypes($opentypes_id){
            $this->loadModel('Itemtypes');
            $this->loadModel('Opentypes');
            $this->loadModel('Quoteproducts');
            $this->loadModel('Flyscreenopentypes');
            $this->loadModel('Flyscreentypes');
            $this->autoRender= false;

          //  var_dump($opentypes_id);
            // // die();

            // $flyscreenID = $this->Flyscreenopentypes->find('list')
            //         ->select(['flyscreentype_id'])
            //         ->where(['opentype_id' => $opentypes_id]);
         /*    $opentypeID = $this->Opentypes->find();
                $opentypeID->select(['id'])
                    ->where(['itemtype_id' => $opentypes_id]);

            var_dump($opentypeID->toArray());*/

            $flyscreenID = $this->Flyscreenopentypes->find()
                    ->select(['flyscreentype_id'])
                    ->where(['opentype_id' => $opentypes_id]);

           // var_dump($flyscreenID->toArray());

            $flyscreen = $this->Flyscreentypes->find()
                      ->select(['id','type'])
                      ->where(['id in'=>$flyscreenID]);

        //    var_dump($flyscreen->toArray());

             // foreach ($flyscreenID as $three) {
             // var_dump($three);
             // }

             // foreach ($flyscreen as $two) {
             // var_dump($two);
             // }
//            die();
            echo json_encode($flyscreen->toArray());
        }


        public function get_meshtypes($balratingID,$flyscreenID){

            // var_dump($balratingID);
            // var_dump($flyscreenID);
            // // die();

            $this->loadModel('Flyscreenopentypes');
            $this->loadModel('Flyscreentypes');
            $this->loadModel('Balratings');
            $this->loadModel('Flyscreenmeshes');

            $this->loadModel('Meshtypes');

            $this->autoRender= false;

            $flyscreenopentypeID = $this->Flyscreenopentypes->find('list')
                        ->select(['id'])
                        ->where(['flyscreentype_id' => $flyscreenID]);

                        // var_dump($flyscreenopentypeID->toArray());
                        // die();

             $meshID = $this->Flyscreenmeshes->find()
                        ->select(['meshtype_id'])
                        ->where(['flyscreenopentype_id in' => $flyscreenopentypeID, 'balrating_id' => $balratingID]);

                        // var_dump($meshID->toArray());
                        // die();


             //put meshID to an $arrayName = array('' => , ); 
             //friday morning          
            $meshArr = [];
            foreach ($meshID as $onemesh){
                $meshArr[]= $onemesh['meshtype_id'];
            }
            // var_dump($meshArr);
            // die();

            $mesh = $this->Meshtypes->find() 
                    ->select(['type']) 
                    ->where (['id in' => $meshArr]);

                        // var_dump($mesh->toArray());
                        // die();


            echo json_encode($mesh->toArray());

            
        }
    /**
     * Edit method
     *
     * @param string|null $id Quote id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quote = $this->Quotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quote = $this->Quotes->patchEntity($quote, $this->request->data);
            if ($this->Quotes->save($quote)) {
                $this->Flash->success('The quote has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The quote could not be saved. Please, try again.');
            }
        }
        $customers = $this->Quotes->Customers->find('list', ['limit' => 200]);
        $this->set(compact('quote', 'customers'));
        $this->set('_serialize', ['quote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quote id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quote = $this->Quotes->get($id);
        if ($this->Quotes->delete($quote)) {
            $this->Flash->success('The quote has been deleted.');
        } else {
            $this->Flash->error('The quote could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
