<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enquiries Controller
 *
 * @property \App\Model\Table\EnquiriesTable $Enquiries */
class EnquiriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $enquiries = $this->Enquiries->find('all');
        $this->set('enquiries', $enquiries);
        $this->set('_serialize', ['enquiries']);
    }

    /**
     * View method
     *
     * @param string|null $id Enquiry id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enquiry = $this->Enquiries->get($id, [
            'contain' => []
        ]);
        $this->set('enquiry', $enquiry);
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enquiry = $this->Enquiries->newEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->data);
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success('The enquiry has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The enquiry could not be saved. Please, try again.');
            }
        }
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }

    public function contactus(){
        $this->layout ='test';
        $enquiry = $this->Enquiries->newEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->data);
            // var_dump($this->request->data);
            // die;
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success('The enquiry has been saved.');
                return $this->redirect(['action' => 'contactus']);
            } else {
                $this->Flash->error('The enquiry could not be saved. Please, try again.');
            }
        }
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);

    }
    /**
     * Edit method
     *
     * @param string|null $id Enquiry id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enquiry = $this->Enquiries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->data);
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success('The enquiry has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The enquiry could not be saved. Please, try again.');
            }
        }
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Enquiry id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquiry = $this->Enquiries->get($id);
        if ($this->Enquiries->delete($enquiry)) {
            $this->Flash->success('The enquiry has been deleted.');
        } else {
            $this->Flash->error('The enquiry could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
