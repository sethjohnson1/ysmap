<?php
App::uses('AppController', 'Controller');

class PlacesController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Place->recursive = 0;
		$this->set('places', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Place->exists($id)) {
			throw new NotFoundException(__('Invalid place'));
		}
		$options = array('conditions' => array('Place.' . $this->Place->primaryKey => $id));
		$this->set('place', $this->Place->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Place->create();
			if ($this->Place->save($this->request->data)) {
				$this->Flash->success(__('The place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The place could not be saved. Please, try again.'));
			}
		}
		$layers = $this->Place->Layer->find('list');
		$this->set(compact('layers'));
	}


	public function edit($id = null) {
		if (!$this->Place->exists($id)) {
			throw new NotFoundException(__('Invalid place'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Place->save($this->request->data)) {
				$this->Flash->success(__('The place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The place could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Place.' . $this->Place->primaryKey => $id));
			$this->request->data = $this->Place->find('first', $options);
		}
		$layers = $this->Place->Layer->find('list');
		$this->set(compact('layers'));
		$this->set('edit',1);
		$this->render('add','default');
	}


	public function delete($id = null) {
		$this->Place->id = $id;
		if (!$this->Place->exists()) {
			throw new NotFoundException(__('Invalid place'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Place->delete()) {
			$this->Flash->success(__('The place has been deleted.'));
		} else {
			$this->Flash->error(__('The place could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
