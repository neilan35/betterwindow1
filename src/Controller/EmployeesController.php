<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees */
class EmployeesController extends AppController
{
    public $paginate = [ 
    'order' => [ 
    'Employees.last_name' => 'asc' 
    ] 
    ]; 
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->loadModel('Users');

        $employees = $this->Employees->find('all')
        ->contain(['Roles','Users'])
        ->order(['Employees.last_name' => 'asc']);

        
        $this->set('employees', $employees);
        $this->set('_serialize', ['employees']);
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Roles', 'Users']
        ]);
        $this->set('employee', $employee);
        $this->set('_serialize', ['employee']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->data,  [
                'associated' => ['Users']]);



            if ($this->Employees->save($employee)) {
                $this->Flash->success('The employee has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The employee could not be saved. Please, try again.');
            }
        }
        $roles = $this->Employees->Roles->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'roles'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->data);
            if ($this->Employees->save($employee)) {
                $this->Flash->success('The employee has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The employee could not be saved. Please, try again.');
            }
        }
        $roles = $this->Employees->Roles->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'roles'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success('The employee has been deleted.');
        } else {
            $this->Flash->error('The employee could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }


}
