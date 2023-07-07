<?php

namespace O4l3x4ndr3\SdkOmie;

class  Configuration {
    /**
     *
     */
    public const URL_PRODUCTION = "https://app.omie.com.br/api/v1/";
    /**
     * @var array|null
     */
    private ?array $credentials;
    /**
     * @var array|null
     */
    private ?array $httpHeader;

    /**
     * @param string|null $appKey
     * @param string|null $appSecret
     */
    public function __construct(?string $appKey = NULL, ?string $appSecret = NULL)
    {
        $this->credentials = [
            'app_key' => $_SERVER['OMIE_APP_KEY'] ?? $appKey,
            'app_secret' => $_SERVER['OMIE_APP_SECRET'] ?? $appSecret
        ];
        $this->httpHeader = [];
    }

    /**
     * @return array
     */
    public function getCredential(): array
    {
        return $this->credentials;
    }

    /**
     * @param string|null $appKey
     * @param string|null $appSecret
     * @return void
     */
    public function setCredential(?string $appKey = NULL, ?string $appSecret = NULL): void
    {
        $cur = $this->credentials;
        $new = [
            'app_key' => $appKey,
            'app_secret' => $appSecret
        ];
        $this->credentials = array_merge($cur, $new);
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     */
    public function setHttpHeader(array $httpHeader): void
    {
        $this->httpHeader = $httpHeader;
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URL_PRODUCTION;
    }
}
