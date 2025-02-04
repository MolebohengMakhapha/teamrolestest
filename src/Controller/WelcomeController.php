<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Welcome Controller
 *
 */
class WelcomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
       
    }

    /**
     * View method
     *
     * @param string|null $id Welcome id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $welcome = $this->Welcome->get($id, contain: []);
        $this->set(compact('welcome'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $welcome = $this->Welcome->newEmptyEntity();
        if ($this->request->is('post')) {
            $welcome = $this->Welcome->patchEntity($welcome, $this->request->getData());
            if ($this->Welcome->save($welcome)) {
                $this->Flash->success(__('The welcome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The welcome could not be saved. Please, try again.'));
        }
        $this->set(compact('welcome'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Welcome id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $welcome = $this->Welcome->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $welcome = $this->Welcome->patchEntity($welcome, $this->request->getData());
            if ($this->Welcome->save($welcome)) {
                $this->Flash->success(__('The welcome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The welcome could not be saved. Please, try again.'));
        }
        $this->set(compact('welcome'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Welcome id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $welcome = $this->Welcome->get($id);
        if ($this->Welcome->delete($welcome)) {
            $this->Flash->success(__('The welcome has been deleted.'));
        } else {
            $this->Flash->error(__('The welcome could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
