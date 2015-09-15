<?php
namespace App\Model\Table;

use App\Model\Entity\Flyscreenopentype;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flyscreenopentypes Model
 */
class FlyscreenopentypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('flyscreenopentypes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Opentypes', [
            'foreignKey' => 'opentype_id'
        ]);
        $this->belongsTo('Flyscreentypes', [
            'foreignKey' => 'flyscreentype_id'
        ]);
        $this->hasMany('Flyscreenmeshes', [
            'foreignKey' => 'flyscreenopentype_id'
        ]);
        $this->hasMany('Items', [
            'joinTable' => 'Opentypes'
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
            ->add('opentype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('opentype_id', 'create')
            ->notEmpty('opentype_id')
            ->add('flyscreentype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('flyscreentype_id', 'create')
            ->notEmpty('flyscreentype_id');

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
        $rules->add($rules->existsIn(['opentype_id'], 'Opentypes'));
        $rules->add($rules->existsIn(['flyscreentype_id'], 'Flyscreentypes'));
        return $rules;
    }
}
