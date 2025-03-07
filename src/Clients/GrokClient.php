<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GuzzleHttp\Client;

class GrokClient extends BaseClient
{
    public function setClient(string $apiKey): void
    {
        // TODO: Implement setClient() method.
    }

    public function chat(string $text, array $options = []): string
    {
        return 'grok is chatting';
    }
}
