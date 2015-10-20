<?php
namespace App\Model\Table;

use App\Model\Entity\Customer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 */
class CustomersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('customers');
        $this->displayField('first_name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasOne('Users', [
            'foreignKey' => 'customer_id',
            'dependent' => 'true',
            'cascadeCallbacks' => 'true'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            
            ->allowEmpty('australian_business_number')    
            ->allowEmpty('company_name')  
            // ->requirePresence('australian_business_number')
            // ->notEmpty('australian_business_number')
            // ->requirePresence('company_name')
            // ->notEmpty('company_name')
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name', 'You forgot to write your first name.')
            // ->add('first_name', ['rule' => array('custom', '[a-zA-Z]+', 'message'   => 'Only letters allowed')])


            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name','You forgot to write your last name.')


            ->add('phone_number', 'valid', ['rule' => 'numeric'])
            ->add('phone_number', 'length', ['rule' => ['minLength', 10],
            'message' => 'Please enter a valid phone number'])//add new rules
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number','You forget to write your phone number')
            

            ->requirePresence('street_address', 'create')
            ->notEmpty('street_address','You need to provide the street address')
            ->requirePresence('suburb', 'create')
            ->notEmpty('suburb','You need to provide your suburb')
            ->requirePresence('state', 'create')
            ->notEmpty('state')
            ->add('postcode', 'valid', ['rule' => 'numeric'])
            ->requirePresence('postcode', 'create')
            ->notEmpty('postcode', 'Please provide your postcode');

        return $validator;
    }
}
