# Chat AI Multiclient

A PHP package to interact with multiple chat-based AI APIs, including OpenAI, Gemini, and Grok. This library provides a unified interface to generate text responses from these services, with configurable models and extensible design.

## Features
- Supports OpenAI, Gemini (placeholder), and Grok (placeholder) APIs.
- Configurable AI models for each service.
- Simple factory pattern for easy client instantiation.
- Built with Guzzle HTTP client for reliable API communication.
- PSR-4 autoloading via Composer.
- PSR-12 coding standards.

## Requirements
- PHP 8.1 or higher
- Composer
- API keys for the services you intend to use (e.g., OpenAI)

## Installation

Use Composer to install the package:

```sh
composer require mbvb1223/chat-ai-multiclient
```

## Usage

```php
<?php

require 'vendor/autoload.php';

use Mbvb1223\ChatAiMulticlient\ChatAiServiceFactory;

// Create an OpenAI service instance
$openAiService = ChatAiServiceFactory::create(ChatAiServiceFactory::OPENAI, 'your-openai-api-key');
$response = $openAiService->chat("Hello, how are you?");
echo $response;
```

## Run the tests:
```
vendor/bin/phpunit
vendor/bin/phpunit --testdox // Make test results verbose using TestDox
vendor/bin/phpunit --coverage-html ./tests/Reports // Run and generate HTML report
```

## Contributing

Contributions are welcome! Feel free to submit issues and pull requests.

## License

This project is licensed under the MIT License.

## Packagaist

<a href="https://packagist.org/packages/mbvb1223/chat-ai-multiclient" target="_blank" rel="noopener noreferrer">https://packagist.org/packages/mbvb1223/chat-ai-multiclient</a>

## Code coverage

<a href="https://mbvb1223.github.io/chat-ai-multiclient/" target="_blank" rel="noopener noreferrer">https://mbvb1223.github.io/chat-ai-multiclient/</a>

## Author

Khien - phamkhien2309@gmail.com