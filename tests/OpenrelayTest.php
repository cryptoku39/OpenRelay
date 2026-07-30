<?php
/**
 * Tests for OpenRelay
 */

use PHPUnit\Framework\TestCase;
use Openrelay\Openrelay;

class OpenrelayTest extends TestCase {
    private Openrelay $instance;

    protected function setUp(): void {
        $this->instance = new Openrelay(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Openrelay::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
