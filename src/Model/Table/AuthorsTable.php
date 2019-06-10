<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Authors Model
 *
 * @property \App\Model\Table\BooksTable|\Cake\ORM\Association\HasMany $Books
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Author get($primaryKey, $options = [])
 * @method \App\Model\Entity\Author newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Author[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Author|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Author saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Author patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Author[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Author findOrCreate($search, callable $callback = null, $options = [])
 */
class AuthorsTable extends Table
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

        $this->setTable('authors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Books', [
            'foreignKey' => 'author_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'author_id'
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

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

        return $validator;
    }
}
