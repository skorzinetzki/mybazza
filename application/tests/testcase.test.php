<?php

abstract class TestCase extends PHPUnit_Framework_TestCase {

    public $category;

    /**
     * Rebuilds the database
     *
     */
    private function prepareForTests() {
        require path('sys').'cli/dependencies'.EXT;
        Laravel\CLI\Command::run(array('migrate:rebuild'));
    }

    /**
     * Default preparation for each test
     *
     */
    public function setUp() {
        parent::setUp();

        $this->prepareForTests();
    }

}

