<?php

namespace OCA\QuickShare\Tests\Integration\Controller;

use OCP\AppFramework\App;
use Test\TestCase;


/**
 * This test shows how to make a small Integration Test. Query your class
 * directly from the container, only pass in mocks if needed and run your tests
 * against the database
 */
class AppTest extends TestCase {

    private $container;

    protected function setUp(): void {
        parent::setUp();
        $app = new App('quickshare');
        $this->container = $app->getContainer();
    }

    public function testAppInstalled(): void {
        $appManager = $this->container->query('OCP\App\IAppManager');
        $this->assertTrue($appManager->isInstalled('quickshare'));
    }

    protected function tearDownAfterClass(): void {

    }

}
