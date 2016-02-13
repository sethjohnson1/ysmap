<?php
App::uses('AppController', 'Controller');
/**
 * Layers Controller
 *
 * @property Layer $Layer
 * @property PaginatorComponent $Paginator
 */
class LayersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Layer->recursive = 0;
		$this->set('layers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Layer->exists($id)) {
			throw new NotFoundException(__('Invalid layer'));
		}
		$options = array('conditions' => array('Layer.' . $this->Layer->primaryKey => $id));
		$this->set('layer', $this->Layer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Layer->create();
			if ($this->Layer->save($this->request->data)) {
				$this->Flash->success(__('The layer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The layer could not be saved. Please, try again.'));
			}
		}
		$places = $this->Layer->Place->find('list');
		$this->set(compact('places'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Layer->exists($id)) {
			throw new NotFoundException(__('Invalid layer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Layer->save($this->request->data)) {
				$this->Flash->success(__('The layer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The layer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Layer.' . $this->Layer->primaryKey => $id));
			$this->request->data = $this->Layer->find('first', $options);
		}
		$places = $this->Layer->Place->find('list');
		$this->set(compact('places'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Layer->id = $id;
		if (!$this->Layer->exists()) {
			throw new NotFoundException(__('Invalid layer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Layer->delete()) {
			$this->Flash->success(__('The layer has been deleted.'));
		} else {
			$this->Flash->error(__('The layer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
