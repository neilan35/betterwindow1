<?php
namespace App\Model\Table;

use App\Model\Entity\Corporate;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Corporate Model
 */
class CorporateTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('corporate');
        $this->displayField('CorpID');
        $this->primaryKey('CorpID');
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
            ->add('CorpID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('CorpID', 'create')
            ->add('CustID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('CustID')
            ->allowEmpty('CustType')
            ->allowEmpty('CustCompanyName')
            ->allowEmpty('CustTradingName')
            ->add('CustABN', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('CustABN')
            ->allowEmpty('CustContactPerson');

        return $validator;
    }
}
