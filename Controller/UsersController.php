<?php
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AdminAppController {

/**
 * remove here
 * @var array
 */
	public $uses = array();

/**
* login method
*
* @return void
*/
	public function login() {
		$this->layout = 'signin';
		// if ($this->request->is('post')) {
		// 	if ($this->Auth->login()) {

		// 		return $this->redirect($this->Auth->redirect());
		// 	} else {
		// 		$this->Session->setFlash(__('Username or password is incorrect'),'alert',array('class'=>'error'));
		// 	}
		// }
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		// $this->User->recursive = 0;
		// $this->set('users', $this->paginate());
		$dammy = array(
			array(
				'User'=>array('id'=>1,'account'=>'dammy','created'=>'2013-01-01 01:01:01')
			)
		);
		$this->set('users', $dammy);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		// if (!$this->User->exists($id)) {
		// 	throw new NotFoundException(__('Invalid user'));
		// }
		// $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		// $this->set('user', $this->User->find('first', $options));
		$dammy = array(
				'User'=>array('id'=>1,'account'=>'dammy','created'=>'2013-01-01 01:01:01')
		);
		$this->set('user', $dammy);

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// if ($this->request->is('post')) {
		// 	$this->User->create();
		// 	if ($this->User->save($this->request->data)) {
		// 		$this->Session->setFlash(__('The user has been saved'));
		// 		$this->redirect(array('action' => 'index'));
		// 	} else {
		// 		$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		// 	}
		// }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
