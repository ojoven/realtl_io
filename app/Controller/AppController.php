<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('Functions', 'Lib');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $helpers = array('AssetCompress.AssetCompress');
	public $components = array('Session','RequestHandler');

	public function exportjs($name, $value) {

		$getCurrent = Configure::read('Export');
		$getCurrent[$name] = $value;

		Configure::write('Export', $getCurrent);

	}

	public function setAjaxResponse($data) {
		$this->set('data', json_encode($data));
		$this->autoLayout = false;
		$this->RequestHandler->respondAs('json');
		$this->render('/Elements/ajaxreturn');
	}

	public function beforeFilter() {

		$language = Configure::read('Config.language');
		Configure::write('Config.language', 'spa');
		$this->Session->write('Config.language', 'spa');
	}
}
