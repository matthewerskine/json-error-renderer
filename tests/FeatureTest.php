<?php

use PHPUnit\Framework\TestCase;
use MatthewErskine\JsonErrorRenderer\JsonErrorRenderer;

class FeatureTest extends TestCase
{
    public function test_it_can_render()
    {
        $result = JsonErrorRenderer::render(null, new Exception('Foo'));

        $this->assertEquals([
            'message' => 'Foo',
            'exception' => Exception::class,
        ], $result->getPayload());

        $this->assertEquals(500, $result->getStatusCode());
    }

    public function test_it_can_handle_custom_status_codes()
    {
        $result = JsonErrorRenderer::render(null, new class('Foo') extends Exception {
            public function getStatusCode() {
                return 401;
            }
        });

        $this->assertEquals(401, $result->getStatusCode());
    }
}
