<?php
namespace App\Model\Table;

use App\Model\Entity\Design;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Designs Model
 */
class DesignsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('designs');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Opentypes', [
            'foreignKey' => 'opentype_id'
        ]);
        $this->belongsTo('Pictures', [
            'foreignKey' => 'picture_id'
        ]);
        $this->hasMany('Quoteproducts', [
            'foreignKey' => 'design_id'
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
            ->allowEmpty('opentype_id')
            ->add('picture_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('picture_id');

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
        $rules->add($rules->existsIn(['picture_id'], 'Pictures'));
        return $rules;
    }
}
