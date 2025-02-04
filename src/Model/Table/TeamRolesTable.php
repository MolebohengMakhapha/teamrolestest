<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamRoles Model
 *
 * @method \App\Model\Entity\TeamRole newEmptyEntity()
 * @method \App\Model\Entity\TeamRole newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\TeamRole> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TeamRole get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\TeamRole findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\TeamRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\TeamRole> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TeamRole|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\TeamRole saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\TeamRole>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TeamRole>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TeamRole>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TeamRole> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TeamRole>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TeamRole>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TeamRole>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TeamRole> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TeamRolesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('team_roles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('points')
            ->allowEmptyString('points');

        return $validator;
    }
}
