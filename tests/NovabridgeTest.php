<?php
/**
 * Tests for NovaBridge
 */

use PHPUnit\Framework\TestCase;
use Novabridge\Novabridge;

class NovabridgeTest extends TestCase {
    private Novabridge $instance;

    protected function setUp(): void {
        $this->instance = new Novabridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Novabridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
