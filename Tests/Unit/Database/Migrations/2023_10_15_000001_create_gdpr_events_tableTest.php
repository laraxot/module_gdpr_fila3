<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class CreateGdprEventsTableTest.
 *
 * @covers \CreateGdprEventsTable
 */
final class CreateGdprEventsTableTest extends TestCase
{
    private \CreateGdprEventsTable $createGdprEventsTable;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->createGdprEventsTable = new \CreateGdprEventsTable;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createGdprEventsTable);
    }

    public function testUp(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
