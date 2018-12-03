<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Servcos Model
 *
 * @property \App\Model\Table\DailypartsTable|\Cake\ORM\Association\HasMany $Dailyparts
 *
 * @method \App\Model\Entity\Servco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Servco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Servco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Servco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servco|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Servco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Servco findOrCreate($search, callable $callback = null, $options = [])
 */
class ServcosTable extends Table
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

        $this->setTable('servcos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Dailyparts', [
            'foreignKey' => 'servco_id'
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
            ->scalar('name')
            ->maxLength('name', 25)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('street')
            ->maxLength('street', 64)
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->scalar('city')
            ->maxLength('city', 25)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 25)
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 15)
            ->requirePresence('zip', 'create')
            ->notEmpty('zip');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 25)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 25)
            ->requirePresence('fax', 'create')
            ->notEmpty('fax');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
