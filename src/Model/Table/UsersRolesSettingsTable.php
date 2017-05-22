<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersRolesSettings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $UsersRoles
 *
 * @method \App\Model\Entity\UsersRolesSetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersRolesSetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersRolesSetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersRolesSetting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersRolesSetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersRolesSetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersRolesSetting findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersRolesSettingsTable extends Table
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

        $this->setTable('users_roles_settings');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('UsersRoles', [
            'foreignKey' => 'role_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('default');

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
        $rules->add($rules->existsIn(['role_id'], 'UsersRoles'));

        return $rules;
    }
}
