<?php
namespace App\Model\Table;

use App\Model\Entity\Glazing;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Glazings Model
 */
class GlazingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('glazings');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Usages', [
            'foreignKey' => 'usage_id'
        ]);
        $this->belongsTo('Glasstypes', [
            'foreignKey' => 'glasstype_id'
        ]);
        $this->belongsTo('Compositions', [
            'foreignKey' => 'composition_id'
        ]);
        $this->belongsTo('Balratings', [
            'foreignKey' => 'balrating_id'
        ]);
        $this->hasMany('Quoteproducts', [
            'foreignKey' => 'glazing_id'
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
            ->add('usage_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('usage_id', 'create')
            ->notEmpty('usage_id')
            ->add('glasstype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('glasstype_id', 'create')
            ->notEmpty('glasstype_id')
            ->add('composition_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('composition_id', 'create')
            ->notEmpty('composition_id')
            ->add('balrating_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('balrating_id', 'create')
            ->notEmpty('balrating_id')
            ->add('obscurity', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('obscurity')
            ->add('safety', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('safety')
            ->add('price', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('price');

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
        $rules->add($rules->existsIn(['usage_id'], 'Usages'));
        $rules->add($rules->existsIn(['glasstype_id'], 'Glasstypes'));
        $rules->add($rules->existsIn(['composition_id'], 'Compositions'));
        $rules->add($rules->existsIn(['balrating_id'], 'Balratings'));
        return $rules;
    }
}
