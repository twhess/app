<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dailyparts Controller
 *
 * @property \App\Model\Table\DailypartsTable $Dailyparts
 *
 * @method \App\Model\Entity\Dailypart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DailypartsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Vendors', 'Urgencies', 'Actions', 'Servcos']
        ];
        $dailyparts = $this->paginate($this->Dailyparts);

        $this->set(compact('dailyparts'));
    }

    /**
     * View method
     *
     * @param string|null $id Dailypart id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dailypart = $this->Dailyparts->get($id, [
            'contain' => ['Users', 'Vendors', 'Urgencies', 'Actions', 'Servcos']
        ]);

        $this->set('dailypart', $dailypart);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dailypart = $this->Dailyparts->newEntity();
        if ($this->request->is('post')) {
            $dailypart = $this->Dailyparts->patchEntity($dailypart, $this->request->getData());
            if ($this->Dailyparts->save($dailypart)) {
                $this->Flash->success(__('The dailypart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailypart could not be saved. Please, try again.'));
        }
        $users = $this->Dailyparts->Users->find('list', ['limit' => 200]);
        $vendors = $this->Dailyparts->Vendors->find('list', ['limit' => 200]);
        $urgencies = $this->Dailyparts->Urgencies->find('list', ['limit' => 200]);
        $actions = $this->Dailyparts->Actions->find('list', ['limit' => 200]);
        $servcos = $this->Dailyparts->Servcos->find('list', ['limit' => 200]);
        $this->set(compact('dailypart', 'users', 'vendors', 'urgencies', 'actions', 'servcos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dailypart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dailypart = $this->Dailyparts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dailypart = $this->Dailyparts->patchEntity($dailypart, $this->request->getData());
            if ($this->Dailyparts->save($dailypart)) {
                $this->Flash->success(__('The dailypart has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dailypart could not be saved. Please, try again.'));
        }
        $users = $this->Dailyparts->Users->find('list', ['limit' => 200]);
        $vendors = $this->Dailyparts->Vendors->find('list', ['limit' => 200]);
        $urgencies = $this->Dailyparts->Urgencies->find('list', ['limit' => 200]);
        $actions = $this->Dailyparts->Actions->find('list', ['limit' => 200]);
        $servcos = $this->Dailyparts->Servcos->find('list', ['limit' => 200]);
        $this->set(compact('dailypart', 'users', 'vendors', 'urgencies', 'actions', 'servcos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dailypart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dailypart = $this->Dailyparts->get($id);
        if ($this->Dailyparts->delete($dailypart)) {
            $this->Flash->success(__('The dailypart has been deleted.'));
        } else {
            $this->Flash->error(__('The dailypart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
