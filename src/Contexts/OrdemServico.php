<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;
use O4l3x4ndr3\SdkOmie\Types\OsCadastro;
use O4l3x4ndr3\SdkOmie\Types\OsChave;
use O4l3x4ndr3\SdkOmie\Types\OsListarRequest;
use O4l3x4ndr3\SdkOmie\Types\OsStatusRequest;

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
    public function consultarOS(OsChave $osChave): object
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
     * @param OsCadastro|null $osCadastro
     *
     * @return object
     * @throws GuzzleException
     */
    public function alterarOS(OsCadastro $osCadastro = null): object
    {
        return $this->call("servicos/os/#AlterarOS", $osCadastro->toArray());
    }

    /**
     * @param OsChave $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function excluirOS(OsChave $param): object
    {
        return $this->call("servicos/os/#ExcluirOS", $param->toArray());
    }

    /**
     * @param OsStatusRequest $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function statusOS(OsStatusRequest $param): object
    {
        return $this->call("servicos/os/#StatusOS", $param->toArray());
    }

}
