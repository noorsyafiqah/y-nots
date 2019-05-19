<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 */
class BooksTable extends Table
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

        $this->setTable('books');
        $this->setDisplayField('isbn');
        $this->setPrimaryKey('isbn');
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
            ->integer('isbn')
            ->allowEmptyString('isbn', 'create');

        $validator
            ->scalar('Title')
            ->maxLength('Title', 200)
            ->allowEmptyString('Title');

        $validator
            ->scalar('Genre')
            ->maxLength('Genre', 200)
            ->allowEmptyString('Genre');

        $validator
            ->date('PublishYear')
            ->requirePresence('PublishYear', 'create')
            ->allowEmptyDate('PublishYear', false);

        $validator
            ->decimal('Price')
            ->requirePresence('Price', 'create')
            ->allowEmptyString('Price', false);

        $validator
            ->integer('AuthorID')
            ->requirePresence('AuthorID', 'create')
            ->allowEmptyString('AuthorID', false)
            ->add('AuthorID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('userID')
            ->requirePresence('userID', 'create')
            ->allowEmptyString('userID', false);

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
        $rules->add($rules->isUnique(['AuthorID']));

        return $rules;
    }
}
