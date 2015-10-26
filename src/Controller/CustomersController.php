<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;


/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers */
class CustomersController extends AppController
{
    public $paginate = [ 
    'order' => [ 
    'Customers.last_name' => 'asc' 
    ] 
    ]; 
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $customers= $this->Customers->find('all',[
            'contain'=>['Users']
            ]);

        $this->loadModel('Users');
        $users = $this->Users->find('all')
        ->contain (['Customers']);
        
        $users_row = $users->first();

        $this->set('customers', $customers);
        $this->set('_serialize', ['customers','users_row']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('customer', $customer);
        $this->set('_serialize', ['customer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customer = $this->Customers->newEntity();
       // var_dump($this->request->data);
       // die();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->data, [
                'associated' => ['Users']
            ]);

//            var_dump($customer);
//            die();
            if ($this->Customers->save($customer)) {
                $this->Flash->success('The customer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer could not be saved. Please, try again.');
            }
        }
        $this->set(compact('customer'));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->data);
            if ($this->Customers->save($customer)) {
                $this->Flash->success('The customer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer could not be saved. Please, try again.');
            }
        }
        $this->set(compact('customer'));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success('The customer has been deleted.');
        } else {
            $this->Flash->error('The customer could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

     public function register()
    {
        $this->layout = 'test2';
        $customer = $this->Customers->newEntity();
//        var_dump($this->request->data);
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->data, [
                'associated' => ['Users']
            ]);

           // var_dump($customer);
           // die();
            if ($this->Customers->save($customer)) {                
                return $this->redirect(['controller' => 'customers', 'action' => 'success', $customer['id']]);
            } else {
                $this->Flash->error('The customer could not be saved. Please, try again.');
            }
        }

        $this->set(compact('customer'));
        $this->set('_serialize', ['customer']);
    }

    public function success($id=null){
        $this->layout='test2';
        $this->loadModel('Users');

        $customer = $this->Customers->get($id, [
            'contain' => ['Users']
        ]);

        // $test = $customer['id']; //flip

        //$user = $this->Customers->User['email'];
        // $test2 = $this->Users->get($id, [
        //     'contain' => ['Customers']
        // ]);

        // var_dump($test2['email']);
        //         var_dump($user['']);
        // die();
        $this->set('customer', $customer);
        $this->set('_serialize', ['customer','email']);

    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
    // You should not add the "login" action to allow list. Doing so would
    // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['login', 'logout' ,'forgotPassword', 'resetPassword']);
    }

    public function login()
    {   
        $this->layout='custRegister';  
        if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            $this->Flash->success(__('Welcome to Better Windows! '));
            return $this->redirect(['controller' => 'pages', 'action' => 'home']);

        }
        $this->Flash->error(__('Invalid email or password, please try again'));
        }
    }


     public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
        // return $this -> redirect(['controller' => 'pages', 'action' => 'home']);
    }




}
