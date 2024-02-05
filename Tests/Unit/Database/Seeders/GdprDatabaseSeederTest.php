<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests\Unit\Database\Seeders;

use Modules\Gdpr\Database\Seeders\GdprDatabaseSeeder;
use Tests\TestCase;

/**
 * Class GdprDatabaseSeederTest.
 *
 * @covers \Modules\Gdpr\Database\Seeders\GdprDatabaseSeeder
 */
final class GdprDatabaseSeederTest extends TestCase
{
    private GdprDatabaseSeeder $gdprDatabaseSeeder;

    protected function setUp(): void
    {
        parent::setUp();

        /* @todo Correctly instantiate tested object to use it. */
        $this->gdprDatabaseSeeder = new GdprDatabaseSeeder;
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->gdprDatabaseSeeder);
    }

    public function testRun(): void
    {
        /* @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
