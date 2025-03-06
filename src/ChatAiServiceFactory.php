<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient;

use Mbvb1223\ChatAiMulticlient\Clients\OpenAIClient;
use Mbvb1223\ChatAiMulticlient\Clients\GeminiClient;
use Mbvb1223\ChatAiMulticlient\Clients\GrokClient;

class ChatAiServiceFactory
{
    public const OPENAI = 'openai';
    public const GEMINI = 'gemini';
    public const GROK = 'grok';

    public static function create(string $service, string $apiKey): ChatAiService
    {
        switch (strtolower($service)) {
            case self::OPENAI:
                return new ChatAiService(new OpenAIClient($apiKey));
            case self::GEMINI:
                return new ChatAiService(new GeminiClient($apiKey));
            case self::GROK:
                return new ChatAiService(new GrokClient($apiKey));
            default:
                throw new \InvalidArgumentException("Unsupported service: {$service}");
        }
    }
}
