<?php
namespace App\Model\Table;

use App\Model\Entity\Orderdetail;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orderdetails Model
 */
class OrderdetailsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('orderdetails');
        $this->displayField('OrderDetailsID');
        $this->primaryKey('OrderDetailsID');
        $this->addBehavior('Timestamp');
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
            ->add('OrderDetailsID', 'valid', ['rule' => 'numeric'])

            ->notEmpty('OrderDetailsColour', 'A Colour is required')
            -> add('OrderDetailsColour', 'inList', [
                'rule' => ['inList', ['white', 'black', 'orange']],
                'message' => 'Please enter a valid colour'
           ])

            ->notEmpty('OrderDetailsGlazingType', 'A Glazing Type is required')
            -> add('OrderDetailsGlazingType', 'inList', [
                'rule' => ['inList', ['single glazed', 'double glazed', 'triple glazed']],
                'message' => 'Please enter a valid Glazing Type'
           ])

            ->notEmpty('OrderDetailsBalRating', 'A BAL Rating is required')
            ->add('OrderDetailsBalRating', 'valid', ['rule' => 'numeric'])

            ->notEmpty('OrderDetailsRevealSize', 'A Reveal Size is required')
            ->add('OrderDetailsRevealSize', 'valid', ['rule' => 'numeric'])
            
            ->notEmpty('OrderDetailsWinOpenType', 'Window Opening Type is Required')
            -> add('OrderDetailsWinOpenType', 'inList', [
                'rule' => ['inList', ['standard', 'french', 'sliding']],
                'message' => 'Please enter a valid Open Type'
                ])

            ->notEmpty('OrderDetailsDoorOpenType', 'Door Opening Type is Required')
            -> add('OrderDetailsDoorOpenType', 'inList', [
                'rule' => ['inList', ['standard', 'french', 'sliding']],
                'message' => 'Please enter a valid Open Type'
                ])

            ->notEmpty('OrderDetailsFlyScreen', 'Is a fly screen neccessary')

            ->allowEmpty('OrderDetailsFlyScreenType')
            -> add('OrderDetailsFlyScreenType', 'inList', [
                'rule' => ['inList', ['mesh', 'aluminium', 'fibreglass']],
                'message' => 'Please enter a valid Fly Screen Type'
                ])

            ->allowEmpty('OrderDetailsMesh')
            -> add('OrderDetailsMesh', 'inList', [
                'rule' => ['inList', ['mesh', 'aluminium', 'fibreglass']],
                'message' => 'Please enter a valid Mesh Type'
                ])

            ->notEmpty('OrderDetailsInstallation', 'Is Installation required?')
            -> add('OrderDetailsInstallation', 'inList', [
                'rule' => ['inList', ['yes', 'no']],
                'message' => 'Do you require Installation?'
                ])

            ->allowEmpty('OrderDetailsInstallTypes')
            -> add('OrderDetailsInstallTypes', 'inList', [
                'rule' => ['inList', ['new home', 'replacement']],
                'message' => 'Do you require Installation?'
                ])

            ->notEmpty('OrderDetailsDelivery', 'Do You Require Delivery')
            -> add('OrderDetailsDelivery', 'inList', [
                'rule' => ['inList', ['yes', 'no']],
                'message' => 'Do you require Delivery?'
                ])
            


            ->notEmpty('OrderDetailsPostcode')
            ->add('OrderDetailsPostcode', 'valid', ['rule' => 'numeric'])
            ->add('OrderDetailsPostcode','range', ['rule' => ['range', 799, 10000]]
                );
            return $validator;
    }
}
