<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;

/**
 *
 */
class ContaCorrenteCadastro extends CallApi
{
    /**
     * @param Configuration|null $config
     */
    public function __construct(?Configuration $config = NULL)
    {
        parent::__construct($config);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function consultarContaCorrente(?array $param = null): object {
        return $this->call('geral/contacorrente/#ConsultarContaCorrente',$param);
    }
}