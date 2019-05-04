<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('userID');
        $this->setPrimaryKey('userID');
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
            ->integer('userID')
            ->allowEmptyString('userID', 'create');

        $validator
            ->scalar('Password')
            ->maxLength('Password', 20)
            ->requirePresence('Password', 'create')
            ->allowEmptyString('Password', false);

        $validator
            ->scalar('Name')
            ->maxLength('Name', 200)
            ->requirePresence('Name', 'create')
            ->allowEmptyString('Name', false);

        $validator
            ->scalar('Phone')
            ->maxLength('Phone', 200)
            ->requirePresence('Phone', 'create')
            ->allowEmptyString('Phone', false);

        $validator
            ->scalar('Email')
            ->maxLength('Email', 200)
            ->requirePresence('Email', 'create')
            ->allowEmptyString('Email', false);

        $validator
            ->scalar('Address')
            ->maxLength('Address', 200)
            ->requirePresence('Address', 'create')
            ->allowEmptyString('Address', false);

        $validator
            ->scalar('role')
            ->maxLength('role', 200)
            ->requirePresence('role', 'create')
            ->allowEmptyString('role', false);

        $validator
            ->integer('authorID')
            ->requirePresence('authorID', 'create')
            ->allowEmptyString('authorID', false);

        return $validator;
    }
}
