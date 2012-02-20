<?php
/* Login Test cases generated on: 2012-02-20 15:33:06 : 1329748386*/
App::uses('Login', 'Model');

/**
 * Login Test Case
 *
 */
class LoginTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.login');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Login = ClassRegistry::init('Login');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Login);

		parent::tearDown();
	}

}
