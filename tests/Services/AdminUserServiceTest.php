<?php

namespace Tests\Services;

use LaravelRocket\Foundation\Tests\TestCase;

class AdminUserServiceTest extends TestCase
{

    public function testGetInstance()
    {
        /** @var  \App\Services\AdminUserServiceInterface $service */
        $service = \App::make(\App\Services\AdminUserServiceInterface::class);
        $this->assertNotNull($service);
    }

}
