<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 */
class GroupsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Group->read(null, $id);
		}
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
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('Group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	public function api($id = null) {
			$this->layout = 'ajax';

			$this->Group->id = $id;

			if (!$this->Group->exists()) {
				throw new NotFoundException(__('Invalid layer'));
			}

			$group = $this->Group->read(null, $id);
			

			$hotspots = $this->Group->Hotspot->find('all', array(
				'conditions' => array(
					'Hotspot.group_id' => $id
				),
				'contain' => array()
			));



			$jsonArray = $hotspots;
			//so we can get the url
			$view = new View($this);
	        $html = $view->loadHelper('Html');

			for ($i=0; $i<count($hotspots); $i++) {
				$imgurl = $html->url('/', true) . 'files/hotspot/file/' . $hotspots[$i]['Hotspot']['photo_dir'] . '/' . $hotspots[$i]['Hotspot']['photo'];
				$jsonArray[$i] = array(
									'id' => $hotspots[$i]['Hotspot']['id'],
									'lat' => $hotspots[$i]['Hotspot']['lat'], 
									'lon' => $hotspots[$i]['Hotspot']['lon'],
									'imageURL' => $imgurl,
									'title' => $hotspots[$i]['Hotspot']['title'], 
									'description' => $hotspots[$i]['Hotspot']['description']
								);
			}
			// debug($hotspots);die;
			$this->set(compact('jsonArray'));

		}
}
