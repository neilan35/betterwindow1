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

    // public function created(){
    //   $this
    // }

     public function complete($id=null){
        


      $quotesTable = TableRegistry::get('Quotes');
      $quote = $quotesTable->get($id);

      $quote->status = 'Completed';

      $quotesTable->save($quote);

       return $this->redirect(['action' => 'index']);

     }

     public function pdf($id = null)
    {
        $this->layout ='mypdf';
        $this->loadModel('Quoteproducts');
        $this->loadModel('Designs');
        $this->loadModel('Pictures');
        $this->loadModel('Opentypes');
        // var_dump($id);
        $quote = $this->Quotes->get($id, [
            'contain' => ['Customers', 'Quoteproducts',]
        ]);
        // var_dump($quote);
            
        $quoteproducts = $this->Quotes->Quoteproducts->find('all')
        ->where(['Quoteproducts.quote_id' => $quote->id])
        ->contain (['Itemtypes','Designs','Colours','Glazings']);
        
        $quoteproducts_row = $quoteproducts->first();
        // var_dump($quoteproducts_row);
        // die();

                    
        $this->set('quote', $quote);
        $this->set('_serialize', ['quote']);
        $this->set(compact('quote', 'quoteproducts_row','quoteproducts'));
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

    // public function calculateQuote($id=null) 
    public function calculate_price($W, $H, $DF, $GLASS_PRICE, $CC_PRICE, $R_PRICE = 0, $MT_PRICE = 0) {



  //    $quotes = $this->PurchaseOrders->PurchaseOrderParts->find('all')
   //         ->where(['QuoteProducts.quote_id' => $quote_id->id]);
      $unit_price = 0;
      //constants
      $C7507 = 5;
      $C395 = 7;
      $C7584 = 15;
      $C320 = 2;

      $TT_SET = 70;
      $LPC = 15;
      $LPD = 180;
      $C7536 = 10;
      $FSD = 39;
      $FGD = 52;
      $SGD = 62;

      $MA = 1.3;
      $GST=1.1;

      
      $unit_price = eval("$DF");
      $unit_price = $unit_price * $MA *$GST;

      return $unit_price;

      // $W = $this->request->data([])
      // foreach ($quotes as $key => $value) {
      //   $quotes[$key] =$value
      // } return $quotes;

     
        
     
        /*
            foreach quote product based on quote_id
                $product_cost = 0;

               
                $formula = "$W * $H";
                $result = eval($formula);

                $quoteProduct['unit_price'] = $product_cost;
                save $quoteProduct
        */
      $quote['price'] = '';

    }


    public function create($quote_id = '', $is_final = 0){
        $designTable = TableRegistry::get('Desings');
        $revealTable = TableRegistry::get('Reveals');
      
       
        $this->layout = 'test2';
        //$session = $this->request->session();
        $quote = $this->Quotes->newEntity();
        
         
        if ($this->request->is('post')) {
          //  $this->RequestHandler->respondAs('json');
          //  $is_final = 0;
          //  list($quote_id, $is_final) = preg_split("/;/", $data);

          //  $is_final = $this->request->data['is_final'];

            $quoteFormData = $this->request->data;
            unset($quoteFormData['quoteproducts']);
            $quote = $this->Quotes->patchEntity($quote, $quoteFormData);

            $quoteProduct = $this->Quotes->Quoteproducts->newEntity();

            $quoteProduct['quote_id'] = 1;
            // $quoteProduct['design_id'] = 2;

            $qpData = $this->request->data['quoteproducts'];
            foreach ($qpData as $key => $value) {
                $quoteProduct[$key] = $value;
                }


            $W = $quoteProduct ['width'];
            $H = $quoteProduct ['height'];
            // $quoteProduct['usages'] = 4;  //fixed, should be standard for now
            $quoteProduct['glasstype'] = 2; //fix

            //asked Brendon for view
            $flyscreenmesh_id = $this->Quotes->QuoteProducts->Flyscreenmeshes->find()
                                                ->select(['id'])
                                                ->where([   'meshtype_id' => $quoteProduct['meshtype'],
                                                            'flyscreentype_id' => $quoteProduct['flyscreentypes'],
                                                            'balrating_id' => $quoteProduct['balrating_id']
                                                            ]);

                $quoteProduct['flyscreenmesh_id'] = $flyscreenmesh_id->first()['id'];


                $category_id = $this->Quotes->Colors->find()
                                ->select(['category_id'])
                                ->where ([    'id'=>$quoteProduct['color_id']
                                          ]);


                $category_id   = $category_id->first();

                $Color_cat = $this->Quotes->Colours->Categories->find()
                                        ->select(['price'])
                                        ->where([   'id' => $category_id 
                                                ]);
                $Color_cat   = $Color_cat->first();

                



            // make an if statement if not found, says somethings. 
            $glazing_id = $this->Quotes->QuoteProducts->Glazings->find()
                                                ->select(['id','price'])
                                                ->where([   'usage_id' => $quoteProduct['usages'],
                                                            'glasstype_id' => $quoteProduct['glasstype'],
                                                            'composition_id' =>$quoteProduct['compositions'],
                                                            'balrating_id' => $quoteProduct['balrating_id'],
                                                            'obscurity' => $this->request->data['obscurity'],
                                                            'safety'    => $this->request->data['safety']

                                                            ]);

            $quoteProduct['glazing_id'] = $glazing_id->first()['id'];

            $GLASS_PRICE = $glazing_id->first()['price'];   
            










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

            if ($quote_id == '') {

                $result = $this->Quotes->save($quote);
               // var_dump($quote->errors());
              //  die();
                if ($result) {
                    $quote_id = $result->id;
                    $quoteProduct['quote_id'] = $result->id;
                }
                else {
                    $result = 0;
                    $message = 'Error: could not save quote.';
                  //  $this->Flash->error('The quote could not be saved. Please, try again.');                    
                }
            }
            else
                $quoteProduct['quote_id'] = $quote_id;
              /// 
  
            // Calculate unit price for this product
            $quoteProduct['unit_price'] = $this->calculateQuote($quoteProduct['width'],
                                                                $quotePrduct['height'],
                                                                $DF,
                                                                $GLASS_PRICE,
                                                                $CC_PRICE,
                                                                $R_PRICE,
                                                                $MT_PRICE);


            if ($this->Quotes->Quoteproducts->save($quoteProduct)) {
                    $result = 1;
                    $message = 'Success: Save quote product';
//                 $this->set("status", "success");
 //                $this->set("message", "The quote product has been saved.");
                 
                //$this->Flash->success('The quote product has been saved.');
  //              return true;//$this->redirect(['action' => 'index']);
            }
            else {
                    $result = 0;
                    $message = 'Error: ';
                    $message .= var_export($quoteProduct->errors(), true);
              //      $message = 'Error: Unable to save quote product';
//                 $this->set("status", "fail");
//                 $this->set("message", "The quote product could not be saved. Please, try again.");              
  //            var_dump($quoteProduct->errors());
 //             die("can't save quote product");
               // $this->Flash->error('The quote product could not be saved. Please, try again.');        
            }

                  $this->autoRender = false;
                  $this->response->body(json_encode([   
                          "result"    => $result,
                          "message"   => $message,
                          "quote_id"  => $quote_id]));
                  return $this->response;
     
                // var_dump($id);    
                // var_dump($quote);
        }               

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
        $designs = $this->Quotes->Quoteproducts->Designs->find('list', ['limit' => 200]);

        // $glasscomps = $glazings['composition_id'];
        $this->set(compact('compositions','quote', 'customers','colours','balratings','itemtypes','reveals', 'usages','glasstypes','id','glazings','glasscomps','designs'));
        $this->set('_serialize', ['quote']);
    }



        // public function summary(){
        //   $shop = $this->Session->read('Shop');
        // $this->set(compact('shop'));
        // }



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

        public function get_designs($opentypes_id){
          $this->loadModel('Designs');
          $this->autoRender= false;

          $designID = $this->Designs->find()
                    ->select(['id'])
                    ->where(['opentype_id' => $opentypes_id]);


          echo json_encode($designID->toArray());
        }

         public function get_pictures($design_id){
          $this->loadModel('Pictures');
          $this->loadModel('Designs');
          $this->autoRender= false;


          $pictureID = $this->Designs->find()
                    ->select(['picture_id'])
                    ->where(['id' => $design_id]);


          $filename = $this->Pictures->find()
                    ->select(['filename'])
                    ->where(['id'=> $pictureID]);


          
           echo ($filename->first()['filename']);
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
                    // ->select(['type'])
                    ->select(['id','type'])  
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
