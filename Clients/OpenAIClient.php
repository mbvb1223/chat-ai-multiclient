<?php

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GuzzleHttp\Client;

class OpenAIClient implements AiClientInterface
{
    private Client $httpClient;
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => "Bearer {$apiKey}",
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function generateText(string $prompt, array $options = []): string
    {
        $response = $this->httpClient->post('chat/completions', [
            'json' => array_merge([
                'model' => 'gpt-3.5-turbo',
                'messages' => [['role' => 'user', 'content' => $prompt]],
            ], $options),
        ]);

        $data = json_decode($response->getBody(), true);
        return $data['choices'][0]['message']['content'] ?? '';
    }
}