<?php
/**
 * Tests for DriftForge
 */

use PHPUnit\Framework\TestCase;
use Driftforge\Driftforge;

class DriftforgeTest extends TestCase {
    private Driftforge $instance;

    protected function setUp(): void {
        $this->instance = new Driftforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Driftforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
