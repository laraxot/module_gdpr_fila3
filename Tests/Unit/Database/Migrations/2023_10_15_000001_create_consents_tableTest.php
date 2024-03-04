<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class CreateConsentsTableTest.
 *
 * @covers \CreateConsentsTable
 */
final class CreateConsentsTableTest extends TestCase
{
    private \CreateConsentsTable $createConsentsTable;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->createConsentsTable = new \CreateConsentsTable;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createConsentsTable);
    }

    public function testUp(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
