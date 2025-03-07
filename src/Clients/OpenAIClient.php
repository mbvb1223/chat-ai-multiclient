<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

use OpenAI;
use OpenAI\Client;

class OpenAIClient extends BaseClient
{
    protected string $model = 'gpt-3.5-turbo';
    private Client $client;

    public function setClient(string $apiKey): void
    {
        $this->client = OpenAI::client($apiKey);
    }

    public function chat(string $text, array $options = []): string
    {
        $response = $this->client->chat()->create([
            'model' => $this->getModel(),
            'messages' => [['role' => 'user', 'content' => $text]],
        ]);

        return $response->choices[0]->message->content;
    }
}
