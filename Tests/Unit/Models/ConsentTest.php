<?php

declare(strict_types=1);

namespace Tests\Unit\Modules\Gdpr\Models;

use Modules\Gdpr\Models\Consent;
use Tests\TestCase;

/**
 * Class ConsentTest.
 *
 * @covers \Modules\Gdpr\Models\Consent
 */
final class ConsentTest extends TestCase
{
    private Consent $consent;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->consent = new Consent;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->consent);
    }

    public function testTreatment(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
