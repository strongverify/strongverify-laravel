<?php

use StrongVerify\SDK\StringVerifyServiceProvider;

class StrongVerifyTest extends Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            'StrongVerify\SDK\StrongVerifyServiceProvider'
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'StrongVerify' => 'StrongVerify\SDK\StrongVerifyFacade'
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testThatWeCanGetAToken()
    {
        $token = StrongVerify::getToken();
        $this->assertTrue(is_string($token));
        unset($token);
    }


}