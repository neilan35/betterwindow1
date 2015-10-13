<?php
namespace App\Model\Table;

use App\Model\Entity\Composition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Compositions Model
 */
class CompositionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('compositions');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Glazings', [
            'foreignKey' => 'composition_id'
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
            ->allowEmpty('name')
            ->requirePresence('price', 'create')
            ->notEmpty('price', 'You have not entered a price.');   
            // ->add('price', ['rule' => array('custom', '/^[0-9]$/',
            //     'message' => 'Price must be numeric')]);

        return $validator;
    }
}
