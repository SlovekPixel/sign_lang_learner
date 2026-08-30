<?php

namespace Tests\Unit;

use App\pantomime;
use App\result;
use Tests\TestCase;

class ModelTableTest extends TestCase
{
    public function test_pantomime_uses_correct_table()
    {
        $this->assertSame('pantomime', (new pantomime())->getTable());
    }

    public function test_result_uses_correct_table()
    {
        $this->assertSame('results', (new result())->getTable());
    }
}
