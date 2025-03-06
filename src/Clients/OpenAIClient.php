<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GuzzleHttp\Client;

class OpenAIClient extends BaseClient
{
    public function chat(string $prompt, array $options = []): string
    {
        return 'Openai is chatting';
    }
}
