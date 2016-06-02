<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SmartyTest extends TestCase
{
    public function testBasicExample()
    {
        $this->visit('/smarty/hello')
             ->see('hello world');
    }

    public function testNameExample()
    {
        $this->visit('/smarty/hello/rob')
            ->see('hello rob');
    }
}
