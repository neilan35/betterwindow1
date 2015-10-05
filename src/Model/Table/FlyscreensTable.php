<?php
namespace App\Model\Table;

use App\Model\Entity\Flyscreen;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flyscreens Model
 */
class FlyscreensTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('flyscreens');
        $this->displayField('type');
        $this->primaryKey('id');
        $this->hasMany('Products', [
            'foreignKey' => 'flyscreen_id'
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
            ->notEmpty('id', 'create')
            ->notEmpty('mesh', 'Please enter a mesh')
            ->notEmpty('type', 'Please enter a flyscreen type')
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->notEmpty('price', 'Please enter a price');


        return $validator;
    }
}
