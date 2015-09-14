<?php
namespace App\Model\Table;

use App\Model\Entity\Flyscreenmesh;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flyscreenmeshes Model
 */
class FlyscreenmeshesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('flyscreenmeshes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Balratings', [
            'foreignKey' => 'balrating_id'
        ]);
        $this->belongsTo('Meshtypes', [
            'foreignKey' => 'meshtype_id'
        ]);
        $this->belongsTo('Flyscreenopentypes', [
            'foreignKey' => 'flyscreenopentype_id'
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'flyscreenmesh_id'
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
            ->add('balrating_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('balrating_id', 'create')
            ->notEmpty('balrating_id')
            ->add('meshtype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('meshtype_id', 'create')
            ->notEmpty('meshtype_id')
            ->add('flyscreenopentype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('flyscreenopentype_id', 'create')
            ->notEmpty('flyscreenopentype_id');

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
        $rules->add($rules->existsIn(['balrating_id'], 'Balratings'));
        $rules->add($rules->existsIn(['meshtype_id'], 'Meshtypes'));
        $rules->add($rules->existsIn(['flyscreenopentype_id'], 'Flyscreenopentypes'));
        return $rules;
    }
}
