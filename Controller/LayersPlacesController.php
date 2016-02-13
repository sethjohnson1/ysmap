<?php
App::uses('AppController', 'Controller');
/**
 * LayersPlaces Controller
 *
 * @property LayersPlace $LayersPlace
 * @property PaginatorComponent $Paginator
 */
class LayersPlacesController extends AppController {

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
		$this->LayersPlace->recursive = 0;
		$this->set('layersPlaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LayersPlace->exists($id)) {
			throw new NotFoundException(__('Invalid layers place'));
		}
		$options = array('conditions' => array('LayersPlace.' . $this->LayersPlace->primaryKey => $id));
		$this->set('layersPlace', $this->LayersPlace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LayersPlace->create();
			if ($this->LayersPlace->save($this->request->data)) {
				$this->Flash->success(__('The layers place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The layers place could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LayersPlace->exists($id)) {
			throw new NotFoundException(__('Invalid layers place'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LayersPlace->save($this->request->data)) {
				$this->Flash->success(__('The layers place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The layers place could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LayersPlace.' . $this->LayersPlace->primaryKey => $id));
			$this->request->data = $this->LayersPlace->find('first', $options);
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
		$this->LayersPlace->id = $id;
		if (!$this->LayersPlace->exists()) {
			throw new NotFoundException(__('Invalid layers place'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LayersPlace->delete()) {
			$this->Flash->success(__('The layers place has been deleted.'));
		} else {
			$this->Flash->error(__('The layers place could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
