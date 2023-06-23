<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;
use O4l3x4ndr3\SdkOmie\Types\OsCadastro;
use O4l3x4ndr3\SdkOmie\Types\OsChave;
use O4l3x4ndr3\SdkOmie\Types\OsListarRequest;

/**
 *
 */
class OrdemServico extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param OsListarRequest $osListarRequest
     *
     * @return object
     * @throws GuzzleException
     */
    public function listarOS(OsListarRequest $osListarRequest): object
    {
        return $this->call("servicos/os/#ListarOS", $osListarRequest->toArray());
    }

    /**
     * @param OsChave|null $osChave
     *
     * @return object
     * @throws GuzzleException
     */
    public function consultarOS(?OsChave $osChave = null): object
    {
        return $this->call("servicos/os/#ConsultarOS", $osChave->toArray());
    }

    /**
     * @param OsCadastro $osCadastro
     *
     * @return object
     * @throws GuzzleException
     */
    public function incluirOS(OsCadastro $osCadastro): object
    {
        return $this->call("servicos/os/#IncluirOS", $osCadastro->toArray());
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function alterarOS(?array $param = null): object
    {
        return $this->call("servicos/os/#AlterarOS", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function excluirOS(?array $param = null): object
    {
        return $this->call("servicos/os/#ExcluirOS", $param);
    }

}
