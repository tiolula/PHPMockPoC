<?php

namespace Obonobo\Phpmock;

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function test_greeting()
    {
        //arrange
        $dbMock = $this->getMockBuilder(Database::class)
            ->onlyMethods(['getPersonByID'])
            ->getMock();
        $mockPerson = new \stdClass();
        $mockPerson->name = 'Bob';
        $mockPerson->id = 2;
        $dbMock->method('getPersonByID')->willReturn($mockPerson);
        $test = new User($dbMock);

        // act
        $actual_result = $test->greeting(2);
        
        //assert
        $this->assertEquals('Hello Bob', $actual_result);
    }
}