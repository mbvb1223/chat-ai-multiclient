<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

use GeminiAPI\Client;

abstract class BaseClient
{
    protected Client $client;
    protected string $model;

    public function __construct(string $apiKey)
    {
        $this->client = new Client($apiKey);
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    abstract public function chat(string $prompt, array $options = []): string;
}
