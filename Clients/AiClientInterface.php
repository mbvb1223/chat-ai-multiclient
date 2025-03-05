<?php

namespace Mbvb1223\ChatAiMulticlient\Clients;

interface AiClientInterface
{
    public function __construct(string $apiKey);

    public function generateText(string $prompt, array $options = []): string;
}