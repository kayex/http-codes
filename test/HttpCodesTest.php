<?php declare(strict_types = 1);

namespace Kayex\HttpCodes\Tests;

// Core
use PHPUnit\Framework\TestCase as BaseTestCase;

// Unit
use Kayex\HttpCodes;

class HttpCodesTest extends BaseTestCase
{
    public function testIsSuccessfulReturnsTrueOnSuccessfulCodes()
    {
        $successCodes = [
            200,
            201,
            202,
            203,
            204,
            205,
            206,
        ];

        foreach ($successCodes as $code) {
            $successful = HttpCodes::isSuccessful($code);

            $this->assertTrue($successful);
        }
    }

    public function testIsSuccessFulReturnsFalseOnUnsuccessfulCode()
    {
        $unsuccesfulCodes = [
            400,
            401,
            402,
            403,
            404,
            405,
            406,
            407,
            408,
            409,
            410,
            411,
            412,
            413,
            414,
            415,
            416,
            417,

            500,
            501,
            502,
            503,
            504,
            505,
        ];

        foreach ($unsuccesfulCodes as $code) {
            $successful = HttpCodes::isSuccessful($code);

            $this->assertFalse($successful);
        }
    }
}