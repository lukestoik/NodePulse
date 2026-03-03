<?php
/**
 * Tests for NodePulse
 */

use PHPUnit\Framework\TestCase;
use Nodepulse\Nodepulse;

class NodepulseTest extends TestCase {
    private Nodepulse $instance;

    protected function setUp(): void {
        $this->instance = new Nodepulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodepulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
