<?php

/**
 * Created by PhpStorm.
 * User: Antatoly
 * Date: 06.11.2015
 * Time: 22:24
 */
class TodoControllerTest extends TestCase
{


    public function tearDown()
    {
        Mockery::close();
    }

    public function testIndex()
    {
        $this->call('GET', 'todo');
        $this->assertViewHas('todos');
    }

    public function testStore()
    {
        $this->visit('/todo')
            ->type('Tests2', 'title')
            ->press('Add Todo')
            ->seePageIs('/todo');
    }
}
