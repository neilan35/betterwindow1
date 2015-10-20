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
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // Allowing actions for not logged users
        $this->Auth->allow(['login', 'logout' ,'forgotPassword', 'resetPassword']);
    }

    public function login()
    {   //choosing layout 
        $this->layout='login'; 

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                // $user = $this->Session->read('Auth.User');
                $this->Flash->success(__('Welcome, '. $user['email'].' !' ));
                return $this->redirect(['controller' => 'users', 'action' => 'dashboard', $user['employee_id']]);

            }
        $this->Flash->error(__('Invalid email or password, please try again'));
        }
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }


    public function index()
    {
        

        $users = $this->Users->find('all')
        ->contain(['Customers','Employees']);

        $this->set('users', $users);
        $this->set('_serialize', ['users']);
    }


    public function dashboard($id = null){


        $this->loadModel('Employees');
        $user = $this->Users->Employees->get($id);
        $employeeID=$user['id'];
        $role= $user['role_id'];
        // var_dump($user);
        // var_dump($employeeID);

        // var_dump($role);
        // die();

        if ($role === 3){
             return $this->redirect(['action' => 'dashboard_admin', $employeeID]);
        }
        
        $this->layout = 'dashboard';
        $this->loadModel('Customers');
        $this->loadModel('Employees');
        $this->loadModel('Quotes');
        $this->loadModel('Enquiries');


        $users = $this->Users->find('all');
        $customers = $this->Customers->find('all');
        $employees  = $this->Employees ->find('all');
        $quotes  = $this->Quotes ->find('all');
        $enquiries = $this->Enquiries->find('all');

        $enquiriesArr= [];
            foreach ($enquiries as $enquiry){
                $enquiriesArr[]=$enquiries;
            }
        $enquirCount = count($enquiriesArr);

        $usersArr = [];
            foreach ($users as $user){
                $usersArr[]= $users;
            }
        $userCount = count($usersArr);

        $custsArr = [];
            foreach ($customers as $customer){
                $custsArr[]= $customers;
            }
        $custCount = count($custsArr);

        $empsArr = [];
            foreach ($employees as $employee){
                $empsArr[]= $employees;
            }
        $empCount = count($empsArr);

        $quotesArr = [];
            foreach ($quotes as $quote){
                $quotesArr[]= $quotes;
            }
        $quotesCount = count($quotesArr);

            // var_dump($custCount);
            // die();

        $this->set('users', $users);
        $this->set('_serialize', ['users']);
        $this->set(compact('user', 'userCount','custCount','empCount','quotesCount','enquirCount'));

    }


    public function dashboard_admin($id = null){


        $this->layout = 'dashboardAdmin';
        $this->loadModel('Customers');
        $this->loadModel('Employees');
        $this->loadModel('Quotes');
        $this->loadModel('Enquiries');


        $users = $this->Users->find('all');
        $customers = $this->Customers->find('all');
        $employees  = $this->Employees ->find('all');
        $quotes  = $this->Quotes ->find('all');
        $enquiries = $this->Enquiries->find('all');

        $enquiriesArr= [];
            foreach ($enquiries as $enquiry){
                $enquiriesArr[]=$enquiries;
            }
        $enquirCount = count($enquiriesArr);

        $usersArr = [];
            foreach ($users as $user){
                $usersArr[]= $users;
            }
        $userCount = count($usersArr);

        $custsArr = [];
            foreach ($customers as $customer){
                $custsArr[]= $customers;
            }
        $custCount = count($custsArr);

        $empsArr = [];
            foreach ($employees as $employee){
                $empsArr[]= $employees;
            }
        $empCount = count($empsArr);

        $quotesArr = [];
            foreach ($quotes as $quote){
                $quotesArr[]= $quotes;
            }
        $quotesCount = count($quotesArr);

            // var_dump($custCount);
            // die();

        $this->set('users', $users);
        $this->set('_serialize', ['users']);
        $this->set(compact('user', 'userCount','custCount','empCount','quotesCount','enquirCount'));

       
    }



    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Customers', 'Employees']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('The user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user could not be saved. Please, try again.');
            }
        }
        $customers = $this->Users->Customers->find('list', ['limit' => 200]);
        $employees = $this->Users->Employees->find('list', ['limit' => 200]);
        $this->set(compact('user', 'customers', 'employees'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('The user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user could not be saved. Please, try again.');
            }
        }
        $customers = $this->Users->Customers->find('list', ['limit' => 200]);
        $employees = $this->Users->Employees->find('list', ['limit' => 200]);
        $this->set(compact('user', 'customers', 'employees'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('The user has been deleted.');
        } else {
            $this->Flash->error('The user could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

     public function isAuthorized($user)
    {
    // All registered users can add users
    if ($this->request->action === 'edit' || $this->request->action === 'add' ||$this->request->action === 'delete')  
    {
        return true;
    }

    }


    function forgotPassword(){

        $this->layout = 'login';

        if(!empty($this->request->data))
        {

            if(empty($this->request->data['email']))
            {
                $this->Flash->error('Please enter your email address.');

            }
            else
            {
                $email=$this->request->data['email'];

                // Match users to their email
                $query = $this->Users->find('all', ['conditions'=> ['Users.email'=>$email]]); //i wanna look email colummn under use
                $user = $query->first();
                
                if($user)
                {
                        $key = Security::hash(Text::uuid(),'sha512',true);
                        $hash=sha1($user['User']['username'].rand(0,100));
                        $url = Router::url(['controller'=>'users','action'=>'resetPassword'], true ).'/'.$key.'#'.$hash;
                        $ms=$url;
                        $ms=wordwrap($ms,1000);

                        $user['tokenhash']=$key;

                        if ($this->Users->save($user)) {

                            //============Email================//
                            /* SMTP Options */

                            $email = new Email('default');
                            $toemail = $user['email'];
                            $email->template('reset_password')
                                ->emailFormat('html')
                                ->to($toemail)
                                ->subject('Reset your Better Windows password')
                                ->from('mafak1@student.monash.edu')
                                ->viewVars(['ms' => $ms])
                                ->send();

                            $this->Flash->success('A link has been generated. Please check your email.');

                            //============EndEmail=============//
                        }
                        else{

                            $this->Flash->error('Error generating reset link.');
                        }
                }
                else
                {
                    $this->Flash->error('Email does not exist.');
                }
            }
        }
    }

    function resetPassword($token=null){

        $this->layout = 'login';

        // User must have a token in order to proceed
        if(!empty($token)){
            $query = $this->Users->find('all', ['conditions'=> ['Users.tokenhash'=>$token]]);

            $u = $query->first();
            $uvalid = $u['email'];

            if($uvalid){

                $user = $this->Users->newEntity();
                $user = $this->Users->patchEntity($user, $this->request->data);

                if ($this->request->is('post')) {

                    $this->Users->data = $this->request->data;
                    $new_hash = sha1($u['email'].rand(0,100)); //created token
                    $u['tokenhash'] = $new_hash;

                    $passinput = $this->request->data['password'];
                    $passconfirminput = $this->request->data['confirm_password'];

                    


                    if($passinput === $passconfirminput){
                        $passinput = $this->request->data['password'];

                        $u['password'] = $passinput;

                        if($this->Users->save($u))
                        {
                            $this->Flash->success('Password Has been updated');

                            $this->redirect(['controller' => 'users', 'action' => 'login']);
                        }
                        
                    }
                    else{
                        $this->Flash->error('Oops! Please try again.');
                    }
                }
            }
            else
            {
                $this->redirect(['controller' => 'users', 'action' => 'login']);
                $this->Flash->error('Token Corrupted, please retry. The reset link will only work once.');
            }
        }

        else{
            $this->redirect('/');
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);

    }


}
