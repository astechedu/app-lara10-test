<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
//use Tests\TestCase;
class AjaxTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_testpost(): void
    {
    	 $response  = $this->post('/testpost');
    	 $response->assertStatus(200);

        //$this->assertTrue(true);
    }
}
