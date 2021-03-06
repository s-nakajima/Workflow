<?php
/**
 * WorkflowControllerIndexTestテスト用Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * WorkflowControllerIndexTestテスト用Controller
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Workflow\Test\test_app\Plugin\TestWorkflow\Controller
 */
class TestSuiteWorkflowControllerIndexTestController extends AppController {

/**
 * index
 *
 * @return void
 */
	public function index() {
		$this->autoRender = true;
		$this->set('username', Current::read('User.username'));
	}

}
