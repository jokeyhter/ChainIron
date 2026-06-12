<?php
/**
 * Tests for ChainIron
 */

use PHPUnit\Framework\TestCase;
use Chainiron\Chainiron;

class ChainironTest extends TestCase {
    private Chainiron $instance;

    protected function setUp(): void {
        $this->instance = new Chainiron(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainiron::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
