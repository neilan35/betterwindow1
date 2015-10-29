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


     public function index_completed()
    {
        $quotes = $this->Quotes->find('all')
        ->contain(['Customers'])
        ->where(['Quotes.status'=> 'Completed']);;
        
        $this->set('quotes', $quotes);
        $this->set('_serialize', ['quotes']);
    }

    public function index_pending()
    {
        $quotes = $this->Quotes->find('all')
        ->contain(['Customers'])
        ->where(['Quotes.status'=> 'Pending']);;
        
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


     public function get_price ($id){
            
          $this->loadModel ('QuoteProducts');
          $this->loadModel('Designs');
          $this->loadModel('Pictures');
          $this->loadModel('Opentypes');
          $this->loadModel('Colours');
          $this->loadModel('Balratings');
          $this->loadModel('Usages');
          $this->loadModel('Glasstypes');
          $this->loadModel('Glazings');
          $this->loadModel('Compositions');
          $this->loadModel('Flyscreentypes');

          $this->layout ='test2';

          $qpTable = TableRegistry::get('QuoteProducts');
          $qp = $qpTable->get($id);
          $price = $qp['unit_cost'];

          $quoteproducts = $this->Quotes->Quoteproducts->find('all')
              ->where(['Quoteproducts.id' => $id])
              ->contain (['Itemtypes','Designs','Colours','Glazings','Balratings','Flyscreenmeshes','Reveals']);
         
          $quoteproducts_row = $quoteproducts->first();
          // var_dump($quoteproducts_row);
          // die();
        
        $opentype = $this->Opentypes->find('all')
                        ->select (['name'])
                        ->where (['Opentypes.id' => $quoteproducts_row->open_type]);
        $Opentype = $opentype->first()['name'];

        // var_dump($Opentype);
        //   die();

        //Get the usages 
        $usages = $this->Usages->find('all')
                        ->select (['description'])
                        ->where (['Usages.id' => $quoteproducts_row->usages]);

        $usage = $usages->first()['description'];
      

        //Get the picture 
        $pictureID = $this->Designs->find()
                    ->select(['picture_id'])
                    ->where(['Designs.id' => $quoteproducts_row->design_id]);

        $PictID = $pictureID->first()['picture_id'];
         
        $filename = $this->Pictures->find()
                    ->select(['filename'])
                    ->where(['id'=> $pictureID]);
    
        $FileName= $filename->first()['filename'];
              
        //Get Glasstypes
        $gt = $this->Glasstypes->find()
                    ->select(['type'])
                    ->where(['id'=> $quoteproducts_row->glasstype]);
        $glasstype = $gt->first()['type'];

        $glz = $this->Glazings->find('all')
                    ->where(['Glazings.id'=> $quoteproducts_row->glazing_id])
                    ->contain(['Usages','Glasstypes','Compositions']);
        $glazing = $glz->first(); 


         $fst = $this->Flyscreentypes->find()
                    ->select (['type'])
                    ->where(['Flyscreentypes.id'=> $quoteproducts_row->flyscreentypes]);
        $flyscreentype = $fst->first()['type'];    




        // var_dump($flyscreentype);
        //   die();

        $this->set('price', $price);
        $this->set('_serialize', ['price']);
        $this->set(compact('qp','flyscreentype','price','quote', 'quoteproducts_row','quoteproducts','filename','Opentype','usage','FileName','glasstype','glazing'));

         
        }


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
        $this->loadModel ('QuoteProducts');
        $this->loadModel('Designs');
        $this->loadModel('Pictures');
        $this->loadModel('Opentypes');
        $this->loadModel('Colours');
        $this->loadModel('Balratings');
        $this->loadModel('Usages');
        $this->loadModel('Glasstypes');
        $this->loadModel('Glazings');
        $this->loadModel('Compositions');
        $this->loadModel('Flyscreentypes');
        // var_dump($id);
        $quote = $this->Quotes->get($id, [
            'contain' => ['Customers', 'Quoteproducts',]
        ]);
        // var_dump($quote);
            
        $quoteproducts = $this->Quotes->Quoteproducts->find('all')
        ->where(['Quoteproducts.quote_id' => $quote->id])
        ->contain (['Itemtypes','Designs','Colours','Glazings','Balratings','Flyscreenmeshes','Reveals']);
        
        $quoteproducts_row = $quoteproducts->first();
        // var_dump($quoteproducts_row);
        // die();

        $pictures = $this->Pictures->find('list', ['limit' => 200]);

        // $filename = $quoteproducts_row->Designs->Pictures->find('all');
        //   var_dump($pictures);
        // die();

        //Get the opentypes 
        $opentype = $this->Opentypes->find('all')
                        ->select (['name'])
                        ->where (['Opentypes.id' => $quoteproducts_row->open_type]);

        $Opentype = $opentype->first()['name'];
        //   var_dump($Opentype);
        // die();     

        //Get the usages 
        $usages = $this->Usages->find('all')
                        ->select (['description'])
                        ->where (['Usages.id' => $quoteproducts_row->usages]);

        $usage = $usages->first()['description'];
      


      $pictureID = $this->Designs->find()
                    ->select(['picture_id'])
                    ->where(['Designs.id' => $quoteproducts_row->design_id]);

       $PictID = $pictureID->first()['picture_id'];

      $filename = $this->Pictures->find()
                    ->select(['filename'])
                    ->where(['id'=> $pictureID]);
    
      $FileName= $filename->first()['filename'];

       //Get Glasstypes
        $gt = $this->Glasstypes->find()
                    ->select(['type'])
                    ->where(['id'=> $quoteproducts_row->glasstype]);
        $glasstype = $gt->first()['type'];

        $glz = $this->Glazings->find('all')
                    ->where(['Glazings.id'=> $quoteproducts_row->glazing_id])
                    ->contain(['Usages','Glasstypes','Compositions']);
        $glazing = $glz->first(); 



      $fst = $this->Flyscreentypes->find()
                    ->select (['type'])
                    ->where(['Flyscreentypes.id'=> $quoteproducts_row->flyscreentypes]);

        $flyscreentype = $fst->first()['type'];  

        // var_dump($FileName);
        // die(); 


        $this->set('quote', $quote);
        $this->set('_serialize', ['quote']);
        $this->set(compact('quote', 'quoteproducts_row','quoteproducts','filename','Opentype','usage','FileName','flyscreentype','glasstype','glazing'));
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


   
    public function calculate_price($W, $H, $DesignFormula, $GLASS_PRICE, $CC_PRICE, $R_PRICE = 0, $MT_PRICE = 0, $FS_PRICE = 0,$quantity) {

      $this->loadModel('Constants');
  
      $constants = $this->Constants->find()
                                  ->select(['code','value']);

      foreach ($constants->toArray() as $key => $row) {
        $code = str_replace('$', '', $row['code']);
        ${$code} = $row['value'];
      }

/*
      =(((1200+1500)/1000*2*(5* 1) + ((1200-39) +(1500-39))/1000 * 2 * (7+2)*1)+((1200-62)/1000)* (1500-62)/1000)*50 + 15*8) +70))
      = (((W+H)/1000 x 2 x 7507 + ((W-FSD) +(H-FSD))/1000 x 2 x (395+320)) + ((W-SGD)/1000) x (H-SGD)/1000)xGLASS PRICE + LPCx8) + TT HW )xMARGIN KOEFF x GST(1.1)
*/
//      $CC_PRICE = 1;
/*      $DesignFormula = str_replace('$W', $W, $DesignFormula);
      $DesignFormula = str_replace('$H', $H, $DesignFormula);
      $DesignFormula = str_replace('$C7507', $C7507, $DesignFormula);
      $DesignFormula = str_replace('$GLASS_PRICE', $GLASS_PRICE, $DesignFormula);
      $DesignFormula = str_replace('$CC_PRICE', $CC_PRICE, $DesignFormula);
      $DesignFormula = str_replace('$R_PRICE', $R_PRICE, $DesignFormula);
      $DesignFormula = str_replace('$MT_PRICE', $MT_PRICE, $DesignFormula);
      $DesignFormula = str_replace('FS_PRICEH', $FS_PRICE, $DesignFormula);                              

      $DesignFormula = str_replace('$FSD', $FSD, $DesignFormula);
      $DesignFormula = str_replace('$SGD', $SGD, $DesignFormula);
      $DesignFormula = str_replace('$LPC', $LPC, $DesignFormula);                              


      $DesignFormula = str_replace('$C395', $C395, $DesignFormula);
      $DesignFormula = str_replace('$C320', $C320, $DesignFormula);                              
*/
// ($W+$H)/1000*2 *(($C7507*$CC_PRICE)+($C320*$CC_PRICE)) + (($W-$FGD)/1000)*($H-$FGD)/1000)*$GLASS_PRICE + $LPC*4

     // $CC_PRICE = 1;

  //    echo $DesignFormula . "<br>";
     //YANG INI
     // echo $FGD ;
      // echo $CC_PRICE . "<br>";
     // die();
      $unit_price = eval("return $DesignFormula;");
      // echo ($DesignFormula);
      // var_dump($unit_price);
      $unit_price = $unit_price * $quantity;
      // var_dump($unit_price);

      //       die();      
            //SAMPE YG INI
      // $unit_price = $unit_price * $MA *$GST;


      return $unit_price  ;

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
      // $quote['price'] = '';

    }
    public function create($quote_id = '', $is_final = 0){
        $designTable = TableRegistry::get('Desings');
        $revealTable = TableRegistry::get('Reveals');
        $this->loadModel('Flyscreentypes');
      
       
        $this->layout = 'test2';
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

            $qpData = $this->request->data['quoteproducts'];
            foreach ($qpData as $key => $value) {
                $quoteProduct[$key] = $value;
                }


            $fields = array('width', 'height');
            foreach ($fields as $field) {
                list($quoteProduct[$field], $rest) = preg_split("/ /", $quoteProduct[$field]);
                $quoteProduct[$field] = intval($quoteProduct[$field]);
            }

            // $quoteProduct['usages'] = 4;  //fixed, should be standard for now
            $quoteProduct['glasstype'] = 2; //fix

            
            $flyscreenmesh_id = $this->Quotes->QuoteProducts->Flyscreenmeshes->find()
                                                ->select(['id'])
                                                ->where([   'meshtype_id' => $quoteProduct['meshtype'],
                                                            'flyscreentype_id' => $quoteProduct['flyscreentypes'],
                                                            'balrating_id' => $quoteProduct['balrating_id']
                                                            ]);

            $quoteProduct['flyscreenmesh_id'] = $flyscreenmesh_id->first()['id'];


            // Get Color Category
            $category_id = $this->Quotes->QuoteProducts->Colours->find()
                                ->select(['category_id'])
                                ->where (['id'=>$quoteProduct['colour_id']]);


            $category_id = $category_id->first()['category_id'];

            // Get price for this color category
            $Color_cat = $this->Quotes->QuoteProducts->Colours->Categories->find()
                                        ->select(['price'])
                                        ->where(['id' => $category_id ]);
            $CC_PRICE = $Color_cat->first()['price'];

                
            // Get price for this reveal
            $R_PRICE = 0;
            if ($quoteProduct['reveal'] == 1) {
                  $reveal = $this->Quotes->QuoteProducts->Reveals->find()
                                          ->select(['price'])
                                          ->where(['id' => $quoteProduct['reveal_id'] ]);
                  $R_PRICE = $reveal->first()['price'];
                }

          
                // Get price for the mesh type
              $MT_PRICE = 0;
              $FS_PRICE = 0;
             if ($quoteProduct['flyscreentype'] == 1) {
                  $mesh = $this->Quotes->QuoteProducts->Flyscreenmeshes->Meshtypes->find()
                                          ->select(['price'])
                                          ->where(['id' => $quoteProduct['meshtype'] ]);
                  $MT_PRICE = $mesh->first()['price'];

                  // Get price for flyscreen
                  $flyscreen = $this->Flyscreentypes->find()
                                          ->select(['price'])
                                          ->where(['id' => $quoteProduct['flyscreentypes'] ]);
                  $FS_PRICE = $flyscreen->first()['price'];
                }                

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


            */

      //      unset($qpData['colour_id']);
//           var_dump($quoteFormData);
          // var_dump($qpData); YG INI

   //         $quoteProduct = $this->Quotes->Quoteproducts->patchEntity($quoteProduct, $qpData);
  //          var_dump($quoteProduct);
   //         die();

            $customer = $this->Auth->user('customer_id');
            if (!empty($customer)) {
                $id = $customer;           
            }
            else {
               $id = '';     
            }
            $quote['customer_id']= $id;

      
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
            $design = $this->Quotes->QuoteProducts->Designs->find()
                                          ->select(['formula'])
                                          ->where(['picture_id' => $quoteProduct['design_id'] ]);
            $DesignFormula = $design->first()['formula'];

            $quantity = $quoteProduct['quantity'];



            $quoteProduct['unit_cost'] = $this->calculate_price($quoteProduct['width'],
                                                                $quoteProduct['height'],
                                                                $DesignFormula,
                                                                $GLASS_PRICE,
                                                                $CC_PRICE,
                                                                $R_PRICE,
                                                                $MT_PRICE,
                                                                $FS_PRICE,
                                                                $quantity);
           // var_dump($quoteProduct['design_id']);

           $designID = $this->Quotes->QuoteProducts->Designs->find()
                                        ->select (['id'])
                                        ->where(['picture_id' => $quoteProduct ['design_id']]);
                                        
           $DesignID = $designID->first()['id'];

            // var_dump($DesignID);
           $quoteProduct['design_id'] = $DesignID;

            // var_dump($quoteProduct);
            // var_dump($qpData);
            // var_dump($quoteProduct['quote_id']);

            
            // var_dump($quoteProduct['unit_cost']);
            // die();

            if ($this->Quotes->Quoteproducts->save($quoteProduct)) {
                    $result = 1;
                    $message = 'Success: Save quote product';
                    return $this->redirect(['controller' => 'Quotes','action' => 'get_price',$quoteProduct->id]);

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

                  // $this->autoRender = false;
                  // $this->response->body(json_encode([   
                  //         "result"    => $result,
                  //         "message"   => $message,
                  //         "quote_id"  => $quote_id]));
                  // return $this->response;
     
                // var_dump($id);    
                // var_dump($quote);
                // die();
        }               

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
          $this->loadModel('Pictures');
          $this->autoRender= false;

          $pictureID = $this->Designs->find()
                    ->select(['picture_id'])
                    ->where(['opentype_id' => $opentypes_id]);


          $picture_id = $this->Pictures->find()
                      ->select(['id','description'])
                      ->where(['id' => $pictureID ]);




          echo json_encode($picture_id->toArray());
        }

         public function get_pictures($picture_id){
          $this->loadModel('Pictures');
          $this->loadModel('Designs');
          $this->autoRender= false;


          // $pictureID = $this->Designs->find()
          //           ->select(['picture_id'])
          //           ->where(['id' => $design_id]);


          $filename = $this->Pictures->find()
                    ->select(['filename'])
                    ->where(['id'=> $picture_id]);


          
           echo ($filename->first()['filename']);
        }

        public function get_meshtypes($balratingID,$flyscreenID){

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
