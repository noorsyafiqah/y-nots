<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Stocks Model
 *
 * @method \App\Model\Entity\Stock get($primaryKey, $options = [])
 * @method \App\Model\Entity\Stock newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Stock[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Stock|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Stock saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Stock patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Stock[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Stock findOrCreate($search, callable $callback = null, $options = [])
 */
class StocksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('stocks');
        $this->setDisplayField('StockID');
        $this->setPrimaryKey('StockID');
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
            ->integer('StockID')
            ->allowEmptyString('StockID', 'create');

        $validator
            ->integer('Quantity')
            ->requirePresence('Quantity', 'create')
            ->allowEmptyString('Quantity', false);

        $validator
            ->date('DateDeliver')
            ->requirePresence('DateDeliver', 'create')
            ->allowEmptyDate('DateDeliver', false);

        $validator
            ->date('DateReturn')
            ->requirePresence('DateReturn', 'create')
            ->allowEmptyDate('DateReturn', false);

        return $validator;
    }
}
