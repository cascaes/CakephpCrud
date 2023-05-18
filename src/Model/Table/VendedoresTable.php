<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendedores Model
 *
 * @method \App\Model\Entity\Vendedore newEmptyEntity()
 * @method \App\Model\Entity\Vendedore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vendedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VendedoresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('vendedores');
        $this->setDisplayField('nome_vendedor');
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
            ->scalar('nome_vendedor')
            ->maxLength('nome_vendedor', 220)
            ->requirePresence('nome_vendedor', 'create')
            ->notEmptyString('nome_vendedor');

        return $validator;
    }
}
