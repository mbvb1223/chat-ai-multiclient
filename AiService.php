<?php

namespace Mbvb1223\ChatAiMulticlient;

use Mbvb1223\ChatAiMulticlient\Clients\AiClientInterface;

class AiService
{
    private AiClientInterface $client;

    public function __construct(AiClientInterface $client)
    {
        $this->client = $client;
    }

    public function generateText(string $prompt, array $options = []): string
    {
        return $this->client->generateText($prompt, $options);
    }
}