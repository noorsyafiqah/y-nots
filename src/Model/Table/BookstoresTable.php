<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookstores Model
 *
 * @method \App\Model\Entity\Bookstore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bookstore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bookstore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bookstore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookstore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookstore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bookstore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bookstore findOrCreate($search, callable $callback = null, $options = [])
 */
class BookstoresTable extends Table
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

        $this->setTable('bookstores');
        $this->setDisplayField('name');
        $this->setPrimaryKey('bookStoreID');
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
            ->integer('bookStoreID')
            ->allowEmptyString('bookStoreID', 'create');

        $validator
            ->scalar('branch')
            ->maxLength('branch', 200)
            ->allowEmptyString('branch');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->allowEmptyString('name');

        $validator
            ->integer('totalBranch')
            ->requirePresence('totalBranch', 'create')
            ->allowEmptyString('totalBranch', false);

        return $validator;
    }
}
