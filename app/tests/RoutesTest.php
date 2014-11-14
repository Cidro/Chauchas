<?php

class RoutesTest extends TestCase {

	/**
	 * Test for base route
	 *
	 * @return void
	 */
	public function testBaseRoute()
	{
		$this->call('GET', '/');
        $this->assertResponseOk();
	}

}
