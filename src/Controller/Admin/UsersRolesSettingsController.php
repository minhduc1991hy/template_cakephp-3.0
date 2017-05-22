<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UsersRolesSettings Controller
 *
 * @property \App\Model\Table\UsersRolesSettingsTable $UsersRolesSettings
 *
 * @method \App\Model\Entity\UsersRolesSetting[] paginate($object = null, array $settings = [])
 */
class UsersRolesSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UsersRoles']
        ];
        $usersRolesSettings = $this->paginate($this->UsersRolesSettings);

        $this->set(compact('usersRolesSettings'));
        $this->set('_serialize', ['usersRolesSettings']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Roles Setting id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersRolesSetting = $this->UsersRolesSettings->get($id, [
            'contain' => ['UsersRoles']
        ]);

        $this->set('usersRolesSetting', $usersRolesSetting);
        $this->set('_serialize', ['usersRolesSetting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersRolesSetting = $this->UsersRolesSettings->newEntity();
        if ($this->request->is('post')) {
            $usersRolesSetting = $this->UsersRolesSettings->patchEntity($usersRolesSetting, $this->request->getData());
            if ($this->UsersRolesSettings->save($usersRolesSetting)) {
                $this->Flash->success(__('The users roles setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users roles setting could not be saved. Please, try again.'));
        }
        $usersRoles = $this->UsersRolesSettings->UsersRoles->find('list', ['limit' => 200]);
        $this->set(compact('usersRolesSetting', 'usersRoles'));
        $this->set('_serialize', ['usersRolesSetting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Roles Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersRolesSetting = $this->UsersRolesSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersRolesSetting = $this->UsersRolesSettings->patchEntity($usersRolesSetting, $this->request->getData());
            if ($this->UsersRolesSettings->save($usersRolesSetting)) {
                $this->Flash->success(__('The users roles setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users roles setting could not be saved. Please, try again.'));
        }
        $usersRoles = $this->UsersRolesSettings->UsersRoles->find('list', ['limit' => 200]);
        $this->set(compact('usersRolesSetting', 'usersRoles'));
        $this->set('_serialize', ['usersRolesSetting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Roles Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersRolesSetting = $this->UsersRolesSettings->get($id);
        if ($this->UsersRolesSettings->delete($usersRolesSetting)) {
            $this->Flash->success(__('The users roles setting has been deleted.'));
        } else {
            $this->Flash->error(__('The users roles setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
