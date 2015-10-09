<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Jobs Controller
 * @source \App\Controller\JobsController
 * @property \App\Model\Table\JobsTable $Jobs
 */
class JobsController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {	
		//Checks if user is an electrician. Loads dashboard accordingly
		$user = $this->Auth->user('type');
		if ($user === 'Electrician'){
			$this->layout = 'defaultElectrician';
		}

        // Filter
        $statuses = $this->Jobs->Statuses->find('list');
        $this->set(compact('statuses'));
        //

        // Get not started, ongoing and completed jobs only
        $jobs = $this->Jobs->find('all')
            ->where(['status_id' => 1])
            ->orwhere(['status_id' => 2])
            ->orwhere(['status_id' => 3])
            ->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);

        $this->set('jobs', $jobs);
        $this->set('_serialize', ['jobs']);
    }

    /**
     * Search method
     *
     * Filters index according to the status selected by the user
     *
     */
    public function filterJob()
    {
        $jobs = $this->Jobs->find('all')
            ->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);

        $statuses = $this->Jobs->Statuses->find('list');
        $this->set(compact('statuses'));

        if (!isset( $this->request->data['Filter']))
        {
            $this->set('jobs', $jobs);
            $this->set('_serialize', ['jobs']);
        }
        else
        {
            if($this->request->data['status'] != '') {
                // All selected
                if (sizeof($this->request->data['status']) == 5) {
                    $jobs = $this->Jobs->find('all')
                        ->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);
                }
                // Four selected
                elseif (sizeof($this->request->data['status']) == 4){
                    $jobs = $this->Jobs->find('all')
                        ->where(['status_id' => $this->request->data['status'][0]])
                        ->orwhere(['status_id' => $this->request->data['status'][1]])
                        ->orwhere(['status_id' => $this->request->data['status'][2]])
                        ->orwhere(['status_id' => $this->request->data['status'][3]])
                        ->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);
                }
                // Three selected
                elseif (sizeof($this->request->data['status']) == 3){
                    $jobs = $this->Jobs->find('all')
                        ->where(['status_id' => $this->request->data['status'][0]])
                        ->orwhere(['status_id' => $this->request->data['status'][1]])
                        ->orwhere(['status_id' => $this->request->data['status'][2]])
                        ->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);
                }
                // Two selected
                elseif (sizeof($this->request->data['status']) == 2){
                    $jobs = $this->Jobs->find('all')
                        ->where(['status_id' => $this->request->data['status'][0]])
                        ->orwhere(['status_id' => $this->request->data['status'][1]])
                        ->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);
                }
                // One selected
                else {
                    $jobs = $this->Jobs->find('all')
                        ->where(['status_id' => $this->request->data['status'][0]])
                        ->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);
                }
                $this->Flash->default('Jobs filtered.');
            }
            // None selected
            else
            {
                $this->Flash->error('Select a status. Please, try again.');
            }

            $this->set('jobs', $jobs);
            $this->set('_serialize', ['jobs']);
        }
        //tells this method to use the index.ctp View rather than looking for search.ctp
        $this->view = 'index';
    }


    public function old()
    {
		$user = $this->Auth->user('type');
		if ($user === 'Electrician'){
			$this->layout = 'defaultElectrician';
		}
		
        $time = Time::now();
	
		$jobs = $this->Jobs->find('all')
			->where(['status_id' => '1'])
			->orwhere(['status_id' => '2'])
			->orwhere(['status_id' => '3'])
			->andwhere(['jobEnd <' => $time])
			->contain(['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees']);

        $this->set('jobs', $jobs);
        $this->set('_serialize', ['jobs']);
    }

    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
		
		$user = $this->Auth->user('type');
		if ($user === 'Electrician'){
			$this->layout = 'defaultElectrician';
		}

        $job = $this->Jobs->get($id, [
            'contain' => ['Customers', 'Priorities', 'Statuses', 'Electricianjobs', 'Employees', 'Jobs_Materials', 'Materials']
		]);

        if (!($job['attachments'] == '')){
            $job['attachments'] = explode(",", $job['attachments']);
        }

        $this->set('job', $job);
        $this->set('_serialize', ['job']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$user = $this->Auth->user('type');
		if ($user === 'Electrician'){
			$this->layout = 'defaultElectrician';
		}

        $job = $this->Jobs->newEntity();
        if ($this->request->is('post')) {

            // Convert to date!
            $input = $this->request->data;

            $this->request->data['jobStart'] = date('Y-m-d', strtotime(str_replace('/', '-', $input['jobStart'])));
            $this->request->data['jobEnd'] = date('Y-m-d', strtotime(str_replace('/', '-', $input['jobEnd'])));

            // Check date conditions
            if ($this->request->data['jobStart'] <= $this->request->data['jobEnd'] or $this->request->data['jobEnd'] == ' ') {
                $dateCondition = true;
            }
            elseif ($this->request->data['jobStart'] == ' '){
                $dateCondition = false;
            }
            else {
                $dateCondition = false;
            }

            $job = $this->Jobs->patchEntity($job, $this->request->data);
            if ($dateCondition) {

                if ($this->Jobs->save($job)) {
                    $this->Flash->success('The job has been saved.');
                    $this->redirect(['controller' => 'Jobs', 'action' => 'view', $job->id]);
                } else {
                    $this->Flash->error('The job could not be saved. Please, try again.');
                }
            }
            else {
                $this->Flash->error('You did not enter your dates correctly. Please, try again.');
            }
        }
        // Get active customers only
        $customers = $this->Jobs->Customers->find('list', ['limit' => 200, 'order' => ['name' => 'ASC']])
            ->where(['status' => 'Active']);
        $priorities = $this->Jobs->Priorities->find('list', ['limit' => 200]);
        $statuses = $this->Jobs->Statuses->find('list', ['limit' => 200]);
        // Get materials
        $materials = $this->Jobs->Materials->find('list', ['limit' => 200]);
        // Get employees
        $employees = $this->Jobs->Employees->find('list', ['limit' => 200, 'order' => ['firstName' => 'ASC', 'surname' => 'ASC']])
            ->join([
                'table' => 'users',
                'alias' => 'u',
                'type' => 'inner',
                'conditions' => ['u.employee_id = employees.id','u.type = "Electrician"'],
            ]);

        $this->set(compact('job', 'customers', 'priorities', 'statuses', 'materials', 'employees'));
        $this->set('_serialize', ['job']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Job id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$user = $this->Auth->user('type');
		if ($user === 'Electrician'){
			$this->layout = 'defaultElectrician';
		}
	
        // Get employees and materials previously selected
        $job = $this->Jobs->get($id, [
            'contain' => ['Employees', 'Materials']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            // Convert to date!
            $input = $this->request->data;
            $this->request->data['jobStart'] = date('Y-m-d', strtotime(str_replace('/', '-', $input['jobStart'])));
            $this->request->data['jobEnd'] = date('Y-m-d', strtotime(str_replace('/', '-', $input['jobEnd'])));

            // Check date conditions
            if ($this->request->data['jobStart'] <= $this->request->data['jobEnd'] or $this->request->data['jobEnd'] == ' ') {
                $dateCondition = true;
            }
            elseif ($this->request->data['jobStart'] == ' '){
                $dateCondition = false;
            }
            else {
                $dateCondition = false;
            }

            $job = $this->Jobs->patchEntity($job, $this->request->data);
            if ($dateCondition) {
                if ($this->Jobs->save($job)) {
                    $this->Flash->success('The job has been updated.');
                    $this->redirect(['controller' => 'Jobs', 'action' => 'view', $job->id]);
                } else {
                    $this->Flash->error('The job could not be saved. Please, try again.');
                }
            }
            else {
                $this->Flash->error('You did not enter your dates correctly. Please, try again.');
            }
        }
        // Subquery
        $query = $this->Jobs->find()
            ->select(['customer_id'])
            ->where(['id' => $id]);

        // Includes the current customer as well as active customers
        $customers = $this->Jobs->Customers->find('list', ['limit' => 200, 'order' => ['name' => 'ASC']])
            ->where(['status' => 'Active'])
            ->orWhere(['id' => $query]);

        $priorities = $this->Jobs->Priorities->find('list', ['limit' => 200]);
        $statuses = $this->Jobs->Statuses->find('list', ['limit' => 200]);
        // Get materials
        $materials = $this->Jobs->Materials->find('list', ['limit' => 200]);
        // Get employees
        $employees = $this->Jobs->Employees->find('list', ['limit' => 200, 'order' => ['firstName' => 'ASC', 'surname' => 'ASC']])
            ->join([
                'table' => 'users',
                'alias' => 'u',
                'type' => 'inner',
                'conditions' => ['u.employee_id = employees.id','u.type = "Electrician"'],
            ]);

        $this->set(compact('job', 'customers', 'priorities', 'statuses', 'materials', 'employees'));
        $this->set('_serialize', ['job']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Job id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
	 
	public function quickUpdate($id = null)
    {
		$user = $this->Auth->user('type');
		if ($user === 'Electrician'){
			$this->layout = 'defaultElectrician';
		}

	
        $job = $this->Jobs->get($id, [
            'contain' => ['Employees', 'Materials', 'Electricianjobs']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

		$job = $this->Jobs->patchEntity($job, $this->request->data);
			if ($this->Jobs->save($job)) {
				$this->Flash->success('The job has been updated.');
				$this->redirect(['controller' => 'Jobs', 'action' => 'quickUpdate', $job->id]);
			} else {
				$this->Flash->error('The job could not be updated. Please, try again.');
			}
        }
        // Subquery
        $query = $this->Jobs->find()
            ->select(['customer_id'])
            ->where(['id' => $id]);

        // Includes the current customer as well as active customers
        $customers = $this->Jobs->Customers->find('list', ['limit' => 200, 'order' => ['name' => 'ASC']])
            ->where(['status' => 'Active'])
            ->orWhere(['id' => $query]);

        $priorities = $this->Jobs->Priorities->find('list', ['limit' => 200]);
        $statuses = $this->Jobs->Statuses->find('list', ['limit' => 200]);
        // Get materials
        $materials = $this->Jobs->Materials->find('list', ['limit' => 200]);
        // Get employees
        $employees = $this->Jobs->Employees->find('list', ['limit' => 200, 'order' => ['firstName' => 'ASC', 'surname' => 'ASC']])
            ->join([
                'table' => 'users',
                'alias' => 'u',
                'type' => 'inner',
                'conditions' => ['u.employee_id = employees.id','u.type = "Electrician"'],
            ]);

        $this->set(compact('job', 'customers', 'priorities', 'statuses', 'materials', 'employees'));
        $this->set('_serialize', ['job']);
    }
	
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);

        if ($this->Jobs->delete($job)) {
            // remove attachments
            $structure = WWW_ROOT . 'images/uploads/jobs/' . $id; // path
            $files = glob($structure.'/*'); // get all file names
            foreach($files as $file){ // iterate files
                if(is_file($file))
                    unlink($file); // delete file
            }
            rmdir($structure); // remove directory
            $this->Flash->success('The job has been deleted.');
        } else {
            $this->Flash->error('The job could not be deleted. Please, try again.');
        }
        $this->redirect(['action' => 'index']);
    }

    public function upload($id = null)
    {
        $user = $this->Auth->user('type');
        if ($user === 'Electrician'){
            $this->layout = 'defaultElectrician';
        }

        $job = $this->Jobs->get($id, [
            'contain' => ['Employees', 'Materials']
        ]);

        if ($this->request->is(['put'])) {

            // $this->request->data contains name of photo
            // $job contains the job
            $files = $this->request->data['attachments'];
            $arr_ext = array('jpg', 'jpeg', 'png'); //set allowed extensions

            $valid = true;
            $newFiles = '';
            $count = 0;
            foreach ($files as $file) {
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //add the extension as an attribute
		        $file['name'] = str_replace(' ', '_', $file['name']); // replace spaces
                $files[$count]['name'] = $count . '_' . $file['name']; // make images unique by incrementing

                if ($count == 0) {
                    $newFiles = $files[$count]['name'];
                }
                else {
                    $newFiles = $newFiles . ',' . $files[$count]['name'];
                }
                if(!(in_array($ext, $arr_ext))){
                    $valid = false;
                }
                $count++;
            }

            // Extension is valid
            if($valid)
            {
                //prepare the filename for database entry
                //$this->request->data['attachments'] = $file['name'];
                $this->request->data['attachments'] = $newFiles;

                $job = $this->Jobs->patchEntity($job, $this->request->data);

                // Attempt to save
                if ($this->Jobs->save($job)) {
                    // File names don't contain spaces or special characters
                    // Desired structure
                    $structure = WWW_ROOT . 'images/uploads/jobs/' . $job->id;

                    // Make a folder if it doesn't exist!
                    if (!is_dir($structure)) {
                        mkdir($structure);
                    }
                    // Remove old attachments (temporary)
                    else {
                        $oldFiles = glob($structure.'/*'); // get all file names
                        foreach($oldFiles as $photo){ // iterate files
                            if(is_file($photo))
                                unlink($photo); // delete file
                        }
                    }

                    // Upload attachments
                    foreach ($files as $file) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($file['tmp_name'], $structure . '/' . $file['name']);
                    }

                    $this->Flash->success('The image has been saved.');
                    $this->redirect(['controller' => 'Jobs', 'action' => 'view', $job->id]);
                } else {
                    $this->Flash->error('The image can not contain any special characters.');
                }
            }
            else {
                $this->Flash->error('Incorrect extension. Please have your image as .jpg, .jpeg or .png');
            }
        }
        else if ($this->request->is(['post'])) {
            $this->Flash->error('Please wait a moment before pressing the submit button.');
        }
        $this->set(compact('job'));
        $this->set('_serialize', ['job']);
    }

    public function viewAttachment($id = null)
    {
        $user = $this->Auth->user('type');
        if ($user === 'Electrician'){
            $this->layout = 'defaultElectrician';
        }

        $job = $this->Jobs->get($id, [
            'contain' => []
        ]);

        if (!($job['attachments'] == '')){
            $job['attachments'] = explode(",", $job['attachments']);
        }

        $this->set('job', $job);
        $this->set('_serialize', ['job']);
    }

    public function isAuthorized($user)
	{	// Allow electricians to freely edit jobs for now
		if(in_array($this->request->action, ['index','add','view','edit', 'quickupdate', 'upload', 'viewAttachment', 'filterJob'])){
			if(isset($user['type']) && $user['type'] === 'Electrician'){
				return true;
			}
		}
	return parent::isAuthorized($user);
	}
}
