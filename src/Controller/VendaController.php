<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Venda Controller
 *
 * @property \App\Model\Table\VendaTable $Venda
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VendaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendedores', 'Clientes', 'Produtos'],
        ];
        $venda = $this->paginate($this->Venda);

        $this->set(compact('venda'));
    }

    /**
     * View method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venda = $this->Venda->get($id, [
            'contain' => ['Vendedores', 'Clientes', 'Produtos'],
        ]);

        $this->set(compact('venda'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venda = $this->Venda->newEmptyEntity();
        if ($this->request->is('post')) {
            $venda = $this->Venda->patchEntity($venda, $this->request->getData());
            if ($this->Venda->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venda could not be saved. Please, try again.'));
        }
        $vendedores = $this->Venda->Vendedores->find('list', ['limit' => 200])->all();
        $clientes = $this->Venda->Clientes->find('list', ['limit' => 200])->all();
        $produtos = $this->Venda->Produtos->find('list', ['limit' => 200])->all();
        $this->set(compact('venda', 'vendedores', 'clientes', 'produtos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venda = $this->Venda->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venda = $this->Venda->patchEntity($venda, $this->request->getData());
            if ($this->Venda->save($venda)) {
                $this->Flash->success(__('The venda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venda could not be saved. Please, try again.'));
        }
        $vendedores = $this->Venda->Vendedores->find('list', ['limit' => 200])->all();
        $clientes = $this->Venda->Clientes->find('list', ['limit' => 200])->all();
        $produtos = $this->Venda->Produtos->find('list', ['limit' => 200])->all();
        $this->set(compact('venda', 'vendedores', 'clientes', 'produtos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Venda id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venda = $this->Venda->get($id);
        if ($this->Venda->delete($venda)) {
            $this->Flash->success(__('The venda has been deleted.'));
        } else {
            $this->Flash->error(__('The venda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
