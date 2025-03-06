<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Tests\Unit;

use Mbvb1223\ChatAiMulticlient\ChatAiServiceFactory;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testTrue(): void
    {
        ChatAiServiceFactory::create('gemini', 'api');
        ChatAiServiceFactory::create('openai', 'api');
        $this->assertTrue(true);
    }
}
