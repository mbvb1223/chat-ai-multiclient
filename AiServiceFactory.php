<?php

namespace Mbvb1223\ChatAiMulticlient;

use Mbvb1223\ChatAiMulticlient\Clients\OpenAIClient;
use Mbvb1223\ChatAiMulticlient\Clients\GeminiClient;
use Mbvb1223\ChatAiMulticlient\Clients\GrokClient;

class AiServiceFactory
{
    public static function create(string $service, string $apiKey): AiService
    {
        switch (strtolower($service)) {
            case 'openai':
                return new AiService(new OpenAIClient($apiKey));
            case 'gemini':
                return new AiService(new GeminiClient($apiKey));
            case 'grok':
                return new AiService(new GrokClient($apiKey));
            default:
                throw new \InvalidArgumentException("Unsupported service: {$service}");
        }
    }
}