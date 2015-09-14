<?php
namespace App\Model\Table;

use App\Model\Entity\Quote;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quotes Model
 */
class QuotesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('quotes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Quoteproducts', [
            'foreignKey' => 'quote_id'
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
            ->add('customer_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('customer_id', 'create')
            ->notEmpty('customer_id')
            ->allowEmpty('quoteno')
            ->allowEmpty('item')
            ->add('unitcost', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('unitcost')
            ->add('quantity', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('quantity')
            ->add('installation', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('installation')
            ->allowEmpty('installtype')
            ->add('delivery', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('delivery')
            ->allowEmpty('deliverytype')
            ->allowEmpty('status','create');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        return $rules;
    }
}
