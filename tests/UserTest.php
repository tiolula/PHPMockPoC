<?php

namespace Obonobo\Phpmock;

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function test_greeting()
    {
        $dbMock = $this->getMockBuilder(Database::class)
            ->onlyMethods(['getPersonByID'])
            ->getMock();
        $mockPerson = new \stdClass();
        $mockPerson->name = 'Bob';
        $dbMock->method('getPersonByID')->willReturn($mockPerson);
        $test = new User($dbMock);
        $this->assertEquals('Hello Bob', $test->greeting(2));
    }
}