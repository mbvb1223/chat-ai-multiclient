<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient;

use Mbvb1223\ChatAiMulticlient\Clients\BaseClient;

class ChatAiService
{
    private BaseClient $client;

    public function __construct(BaseClient $client)
    {
        $this->client = $client;
    }

    public function chat(string $prompt, string $model = null, array $options = []): string
    {
        return $this->client->chat($prompt, $model, $options);
    }
}
