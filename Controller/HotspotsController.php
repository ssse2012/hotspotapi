<?php
App::uses('AppController', 'Controller');
/**
 * Hotspots Controller
 *
 * @property Hotspot $Hotspot
 */
class HotspotsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hotspot->recursive = 0;
		$this->set('hotspots', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Hotspot->id = $id;
		if (!$this->Hotspot->exists()) {
			throw new NotFoundException(__('Invalid hotspot'));
		}
		$this->set('hotspot', $this->Hotspot->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hotspot->create();
			if ($this->Hotspot->save($this->request->data)) {
				$this->Session->setFlash(__('The hotspot has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotspot could not be saved. Please, try again.'));
			}
		}
		$groups = $this->Hotspot->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Hotspot->id = $id;
		if (!$this->Hotspot->exists()) {
			throw new NotFoundException(__('Invalid hotspot'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hotspot->save($this->request->data)) {
				$this->Session->setFlash(__('The hotspot has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotspot could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Hotspot->read(null, $id);
		}
		$groups = $this->Hotspot->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Hotspot->id = $id;
		if (!$this->Hotspot->exists()) {
			throw new NotFoundException(__('Invalid hotspot'));
		}
		if ($this->Hotspot->delete()) {
			$this->Session->setFlash(__('Hotspot deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotspot was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
