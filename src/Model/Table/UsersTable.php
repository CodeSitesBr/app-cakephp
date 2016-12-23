<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Bookmarks
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Bookmarks', [
            'foreignKey' => 'user_id'
        ]);
    }

    public function validationDefault(Validator $validator) {
        $validator
                ->add('id', 'valid', ['rule' => 'numeric'])
                ->notEmpty('id', 'create');

        $validator
                ->requirePresence('first_name', 'create')
                ->notEmpty('first_name', 'Este campo não pode estar vazio');

        $validator
                ->requirePresence('last_name', 'create')
                ->notEmpty('last_name', 'Este campo não pode estar vazio');

        $validator
                ->add('email', 'valid', ['rule' => 'email', 'message' => 'Por favor inserir um e-mail válido.'])
                ->requirePresence('email', 'create')
                ->notEmpty('email', 'Este campo não pode estar vazio');

        $validator
                ->requirePresence('password', 'create')
                ->notEmpty('password', 'Este campo não pode estar vazio', 'create');

        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['email'], 'Este e-mail já está sendo usado.'));
        return $rules;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options) {
        $query
                ->select(['id', 'first_name', 'last_name', 'email', 'password', 'role'])
                ->where(['Users.active' => 1]);

        return $query;
    }

    public function recoverPassword($id) {
        $user = $this->get($id);
        return $user->password;
    }

    /**
     *
     * Não deixar eliminar usuários do tipo admin
     *
     * @param type $event
     * @param type $entity
     * @param type $options
     *
     * @return boolean
     */
    public function beforeDelete($event, $entity, $options) {
        if ($entity->role == 'admin') {
            return false;
        }
        return true;
    }

}
