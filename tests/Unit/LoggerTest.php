<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggerTest extends TestCase
{
    public function testLogChannel()
    {
        Log::channel("daily")->info('this is message', [time()]);
    }

}
