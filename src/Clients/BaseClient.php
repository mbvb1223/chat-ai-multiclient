<?php

declare(strict_types=1);

namespace Mbvb1223\ChatAiMulticlient\Clients;

abstract class BaseClient
{
    protected string $model;
    protected string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->setClient($apiKey);
    }

    abstract public function setClient(string $apiKey): void;

    abstract public function chat(string $text, string $model = null, array $options = []): string;

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getModel(): string
    {
        return $this->model;
    }
}
