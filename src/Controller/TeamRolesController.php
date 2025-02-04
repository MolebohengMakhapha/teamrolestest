<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TeamRoles Controller
 *
 * @property \App\Model\Table\TeamRolesTable $TeamRoles
 */
class TeamRolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->TeamRoles->find();
        $teamRoles = $this->paginate($query);

        $this->set(compact('teamRoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Team Role id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamRole = $this->TeamRoles->get($id, contain: []);
        $this->set(compact('teamRole'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamRole = $this->TeamRoles->newEmptyEntity();
        if ($this->request->is('post')) {
            $teamRole = $this->TeamRoles->patchEntity($teamRole, $this->request->getData());
            if ($this->TeamRoles->save($teamRole)) {
                $this->Flash->success(__('The team role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team role could not be saved. Please, try again.'));
        }
        $this->set(compact('teamRole'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Team Role id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamRole = $this->TeamRoles->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamRole = $this->TeamRoles->patchEntity($teamRole, $this->request->getData());
            if ($this->TeamRoles->save($teamRole)) {
                $this->Flash->success(__('The team role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team role could not be saved. Please, try again.'));
        }
        $this->set(compact('teamRole'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Team Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamRole = $this->TeamRoles->get($id);
        if ($this->TeamRoles->delete($teamRole)) {
            $this->Flash->success(__('The team role has been deleted.'));
        } else {
            $this->Flash->error(__('The team role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
