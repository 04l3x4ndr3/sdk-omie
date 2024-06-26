<?php

namespace O4l3x4ndr3\SdkOmie\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;

class CallApi
{
    /**
     * @var Configuration
     */
    private Configuration $config;
    /**
     * @var array|string[]|null
     */
    private ?array $header;
    /**
     * @var array|null
     */
    private ?array $credential;

    /**
     * @var array
     */
    private array $options;

    /**
     * @param Configuration $config
     * @param array|null $header
     * @param array|null $credential
     */
    public function __construct(?Configuration $config = NULL)
    {
        $this->config = $config ?? new Configuration();
        $this->credential = $this->config->getCredential();
        $this->header = array_merge([
            'User-Agent' => 'SDKOmie/1.0',
            'Content-Type' => 'application/json'
        ], $this->config->getHttpHeader());
    }

    /**
     * @return array|null
     */
    public function getHeader(): ?array
    {
        return $this->header;
    }

    /**
     * @param array|null $header
     * @return CallApi
     */
    public function setHeader(?array $header): CallApi
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCredential(): ?array
    {
        return $this->credential;
    }

    /**
     * @param array|null $credential
     * @return CallApi
     */
    public function setCredential(?array $credential): CallApi
    {
        $this->credential = $credential;
        return $this;
    }

    /**
     * @param string $endpoint
     * @param array|null $body
     * @param string|null $method
     * @return array|object
     * @throws GuzzleException
     */
    public function call(string $endpoint, ?array $body = NULL, ?string $method = 'POST'): array|object
    {
        $data = [];
        $app_key = $this->credential['app_key'];
        $app_secret = $this->credential['app_secret'];
        $uri = explode('#', $endpoint);
        $call = end($uri);

        $client = new Client();
        $options = array_filter([
            'http_errors' => false,
            'headers' => [
                'Content-type' => 'application/json'
            ],
            'json' => array_filter([
                'app_key' => $app_key,
                'app_secret' => $app_secret,
                'call' => $call,
                'param' => array_filter([$body], function ($v) {
                    return !empty($v);
                })
            ], function ($v) {
                return !is_null($v);
            })
        ]);

        $this->options = $options;
        $res = $client->request($method, "{$this->config->getUrl()}{$endpoint}", $options);
        $data = $res->getBody()->getContents();

        return json_decode($data);
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }
}
