<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;

class GeminiClient extends BaseClient
{
    protected string $model = ModelName::GEMINI_1_5_FLASH;
    private Client $client;

    public function setClient(string $apiKey): void
    {
        $this->client = new Client($apiKey);
    }

    public function chat(string $text, string $model = null, array $options = []): string
    {
        $response = $this->client
            ->generativeModel($model ?? $this->getModel())
            ->generateContent(new TextPart($text));

        return $response->text();
    }
}
