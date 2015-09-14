<?php
namespace App\Model\Table;

use App\Model\Entity\Opentype;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Opentypes Model
 */
class OpentypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('opentypes');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Itemtypes', [
            'foreignKey' => 'itemtype_id'
        ]);
        $this->hasMany('Designs', [
            'foreignKey' => 'opentype_id'
        ]);
        $this->hasMany('Flyscreenopentypes', [
            'foreignKey' => 'opentype_id'
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
            ->add('itemtype_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('itemtype_id')
            ->allowEmpty('name');

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
        $rules->add($rules->existsIn(['itemtype_id'], 'Itemtypes'));
        return $rules;
    }
}
