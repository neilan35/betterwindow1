<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

use Cake\Utility\Security;
use Cake\Utility\Text;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;
use Cake\Routing\Router;

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

     public function pdf($id = null)
    {
        $this->layout ='mypdf';
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

    public function addMore () {
        $this->autoRender= false;
        create();

    }



    //   public function clear() {
    //     $this->Quotes->clear();
    //     $this->Session->setFlash('All selections are removed from the quotation', 'flash_error');
    //     return  $this->redirect(['action' => 'create']);
    // } not working





    public function create(){
       
        $this->layout = 'test2';
       
  
        // $custid = $this->Session->read('Auth.Customer.id')
        //   if($this->Session->check('Auth.User')){
        //     $Quoteproducts['customer_id']

        // $this->Session->check('Auth.User')
        // $id= $this->Auth->user('employee_id');
        
        $session = $this->request->session();
        $quote = $this->Quotes->newEntity();
        
         
        if ($this->request->is('post')) {

         /*  $quote = $this->Quotes->patchEntity($quote, $this->request->data);/*, [
            'associated' => ['Quoteproducts']
            ]); //fucked*/

            $quoteFormData = $this->request->data;
            unset($quoteFormData['quoteproducts']);
            $quote = $this->Quotes->patchEntity($quote, $quoteFormData);

            $quoteProduct = $this->Quotes->Quoteproducts->newEntity();

            // $quoteProduct['quote_id'] = 1;
            $quoteProduct['design_id'] = 2;

            $qpData = $this->request->data['quoteproducts'];
            foreach ($qpData as $key => $value) {
                $quoteProduct[$key] = $value;
            }

            $quoteProduct['usages'] = 4;  //fix
            $quoteProduct['glasstype'] = 2; //fix


            // make an if statement if not found, says somethings. 
            $glazing_id = $this->Quotes->QuoteProducts->Glazings->find()
                                                ->select(['id'])
                                                ->where([   'usage_id' => $quoteProduct['usages'],
                                                            'glasstype_id' => $quoteProduct['glasstype'],
                                                            'composition_id' =>$quoteProduct['compositions'],
                                                            'balrating_id' => $quoteProduct['balrating_id'],
                                                            'obscurity' => $this->request->data['obscurity'],
                                                            'safety'    => $this->request->data['safety']

                                                            ]);

            $quoteProduct['glazing_id'] = $glazing_id->first()['id'];

    //        die();
        //    var_dump($quoteProduct);

        //    var_dump($quoteProduct);
      //      die();


/*            $qpData = $this->request->data['quoteproducts'];

      //      $qpData['quote_id'] = '2124124';

            $fields = array('width', 'height');
            foreach ($fields as $field) {
                list($qpData[$field], $rest) = preg_split("/ /", $qpData[$field]);
                $qpData[$field] = intval($qpData[$field]);
            }

            unset($qpData['meshtype']);
            $qpData['flyscreenmesh_id'] = 1;

            foreach ($qpData as $key => $value) {
     //           $quoteProduct['quote_id'] = '123';
                $quoteProduct[$key] = $value;
            }


            var_dump($quoteProduct);
      //      die();*/

      //      unset($qpData['colour_id']);
//           var_dump($quoteFormData);
 //          var_dump($qpData);

   //         $quoteProduct = $this->Quotes->Quoteproducts->patchEntity($quoteProduct, $qpData);
  //          var_dump($quoteProduct);
   //         die();

            //    var_dump( $quote = $this->Quotes->patchEntity($quote, $this->request->data, [
            // 'associated' => ['Quoteproducts']
            // ]));
               // var_dump($this->request->data);

               // die();
           $customer = $this->Auth->user('customer_id');
           if (!empty($customer)) {
                $id = $customer;
                // $quote_no = $this->Session->read('quote_no');
                // $quote['quote_no'] = $quote_no;             
           }
           else {
               $id = null;     
           }
           $quote['customer_id']= $id;

      //     var_dump($quoteProduct);
       //    die();

            $session->write('quote_id', '');
            if ($session->read('quote_id') == '') {
                $result = $this->Quotes->save($quote);
               // var_dump($quote->errors());
              //  die();
                if ($result) {
                    $session->write('quote_id', $result->id);
                    $quoteProduct['quote_id'] = $result->id;
                }
                else {
                    $this->Flash->error('The quote could not be saved. Please, try again.');                    
                }
            }
            else
                $quoteProduct['quote_id'] = $session->read('quote_id');

//          if ($this->Quotes->save($quote)) {
                if ($this->Quotes->Quoteproducts->save($quoteProduct)) {
                     $this->Flash->success('The quote has been saved.');
                     return $this->redirect(['action' => 'index']);
                }
                else {
                    var_dump($quoteProduct->errors());
                    die("can't save quote product");
                      $this->Flash->error('The quote product could not be saved. Please, try again.');        
                }
 ///         } 
 //         else {
  //          $this->Flash->error('The quote could not be saved. Please, try again.');
  //        }
            }
     
                // var_dump($id);    
                // var_dump($quote);
               

        // $this->Session->write('quote_no', 'Q00001');
        $customers = $this->Quotes->Customers->find('list', ['limit' => 200]);
        $colours = $this->Quotes->Quoteproducts->Colours->find('list', ['limit' => 200]);
        $balratings = $this->Quotes->Quoteproducts->Balratings->find('list', ['limit' => 200]);
        $itemtypes = $this->Quotes->Quoteproducts->Itemtypes->find('list', ['limit' => 200]);
        $reveals = $this->Quotes->Quoteproducts->Reveals->find('list', ['limit' => 200]);
        $usages = $this->Quotes->Quoteproducts->Glazings->Usages->find('list', ['limit' => 200]);
        $glasstypes = $this->Quotes->Quoteproducts->Glazings->Glasstypes->find('list', ['limit' => 200]);
        $glazings = $this->Quotes->Quoteproducts->Glazings->find('list', ['limit' => 200]);
        $compositions= $this->Quotes->Quoteproducts->Glazings->Compositions->find('list', ['limit' => 200]);

        // $glasscomps = $glazings['composition_id'];
        $this->set(compact('compositions','quote', 'customers','colours','balratings','itemtypes','reveals', 'usages','glasstypes','id','glazings','glasscomps'));
        $this->set('_serialize', ['quote']);
    }


        public function get_opentypes($itemtypes_id){
            $this->loadModel('Itemtypes');
            $this->loadModel('Opentypes');
            $this->loadModel('Quoteproducts');
            $this->autoRender= false;
           
        
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
            $this->loadModel('Opentypes');
            $this->loadModel('Meshtypes');

            $this->autoRender= false;

            // $flyscreenopentypeID = $this->Flyscreenopentypes->find('list')
            //             ->select(['id'])
            //             ->where(['flyscreentype_id' => $flyscreenID]);

            //             // var_dump($flyscreenopentypeID->toArray());
            //             // die();

             $meshID = $this->Flyscreenmeshes->find()
                        ->select(['meshtype_id'])
                        ->where(['flyscreentype_id in' => $flyscreenID, 'balrating_id' => $balratingID]);

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
            'contain' => ['Quoteproducts']
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
