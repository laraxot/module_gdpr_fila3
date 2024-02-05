<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Gdpr\Models;

use Modules\Gdpr\Models\Event;
use Tests\TestCase;

/**
 * Class EventTest.
 *
 * @covers \Modules\Gdpr\Models\Event
 */
final class EventTest extends TestCase
{
    private Event $event;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->event = new Event;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->event);
    }

    public function testConsent(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testSetPayloadAttribute(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testSetIpAttribute(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
