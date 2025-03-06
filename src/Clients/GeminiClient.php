<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;

class GeminiClient extends BaseClient
{
    protected string $model = ModelName::GEMINI_1_5_FLASH;

    public function chat(string $prompt, array $options = []): string
    {
        $response = $this->client
            ->generativeModel($this->getModel())
            ->generateContent(new TextPart($prompt));

        return $response->text();
    }
}
