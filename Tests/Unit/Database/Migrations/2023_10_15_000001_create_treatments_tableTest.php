<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class CreateTreatmentsTableTest.
 *
 * @covers \CreateTreatmentsTable
 */
final class CreateTreatmentsTableTest extends TestCase
{
    private \CreateTreatmentsTable $createTreatmentsTable;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->createTreatmentsTable = new \CreateTreatmentsTable;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createTreatmentsTable);
    }

    public function testUp(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
