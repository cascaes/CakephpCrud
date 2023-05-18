<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UnidadesProdutos Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\UnidadesProduto newEmptyEntity()
 * @method \App\Model\Entity\UnidadesProduto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UnidadesProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UnidadesProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\UnidadesProduto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UnidadesProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadesProduto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadesProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnidadesProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnidadesProduto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UnidadesProduto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UnidadesProduto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UnidadesProduto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UnidadesProdutosTable extends Table
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

        $this->setTable('unidades_produtos');
        $this->setDisplayField('nome_un');
        $this->setPrimaryKey('id');

        $this->hasMany('Produtos', [
            'foreignKey' => 'unidades_produto_id',
        ]);
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
            ->scalar('nome_un')
            ->maxLength('nome_un', 220)
            ->requirePresence('nome_un', 'create')
            ->notEmptyString('nome_un');

        return $validator;
    }
}
