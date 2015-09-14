<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id'
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
            ->add('email', 'valid', ['rule' => 'email', 'message' => 'E-mail must be valid'])
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'We need your email.')
            ->requirePresence('password', 'create')
            //password validation
            ->notEmpty('password')
            ->add('password', ['length' => ['rule' => ['minLength',6], 'message' => 'Passwords must be at least 6 character']])

            //confirm_password validation
            ->notEmpty('confirm_password','Please fill in the password')
            ->add('confirm_password', ['length' => ['rule' => ['minLength',6], 'message' => 'Should be 6 characters']])
            ->add('confirm_password', ['compareWith' => ['rule' => ['compareWith','password'], 'message' => 'Should be match']])

            ->add('customer_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('customer_id')
            ->add('employee_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('employee_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));
        return $rules;
    }
}
