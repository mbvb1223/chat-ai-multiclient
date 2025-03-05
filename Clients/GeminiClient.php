<?php

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GuzzleHttp\Client;

class GeminiClient implements AiClientInterface
{
    private Client $httpClient;
    private string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = new Client([
            'base_uri' => 'https://api.gemini.com/v1/', // Hypothetical
            'headers' => [
                'Authorization' => "Bearer {$apiKey}",
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function generateText(string $prompt, array $options = []): string
    {
        $response = $this->httpClient->post('generate', [
            'json' => array_merge(['prompt' => $prompt], $options),
        ]);

        $data = json_decode($response->getBody(), true);
        return $data['text'] ?? '';
    }
}