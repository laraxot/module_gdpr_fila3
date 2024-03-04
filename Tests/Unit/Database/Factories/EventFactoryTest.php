<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests\Unit\Database\Factories;

use Modules\Gdpr\Database\Factories\EventFactory;
use Tests\TestCase;

/**
 * Class EventFactoryTest.
 *
 * @covers \Modules\Gdpr\Database\Factories\EventFactory
 */
final class EventFactoryTest extends TestCase
{
    private EventFactory $eventFactory;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->eventFactory = new EventFactory;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->eventFactory);
    }

    public function testDefinition(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
