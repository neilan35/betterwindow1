<?php
namespace App\Model\Table;

use App\Model\Entity\Flyscreentype;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flyscreentypes Model
 */
class FlyscreentypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('flyscreentypes');
        $this->displayField('type');
        $this->primaryKey('id');
        $this->hasMany('Flyscreenopentypes', [
            'foreignKey' => 'flyscreentype_id'
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
            ->allowEmpty('type')
            ->add('price', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('price');

        return $validator;
    }
}
