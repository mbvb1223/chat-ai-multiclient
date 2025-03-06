<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GuzzleHttp\Client;

class GrokClient extends BaseClient
{
    public function chat(string $prompt, array $options = []): string
    {
        return 'grok is chatting';
    }
}
