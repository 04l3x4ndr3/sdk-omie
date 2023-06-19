<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

require 'application/third_party/sdk-omie/src/Helpers/CallApi.php';
require 'application/third_party/sdk-omie/src/Configuration.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;
use O4l3x4ndr3\SdkOmie\Types\SrvIncluirRequest;
use O4l3x4ndr3\SdkOmie\Types\SrvUpsertRequest;

class Servicos extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function listarCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#ListarCadastroServico", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function consultarCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#ConsultarCadastroServico", $param);
    }

    /**
     * @param SrvIncluirRequest|null $incluirSrv
     *
     * @return object
     * @throws GuzzleException
     */
    public function incluirCadastroServico(?SrvIncluirRequest $incluirSrv = null): object
    {
        return $this->call("servicos/servico/#IncluirCadastroServico", $incluirSrv->toArray());
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function alterarCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#AlterarCadastroServico", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function excluirCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#ExcluirCadastroServico", $param);
    }

    public function upsertCadastroServico(?SrvUpsertRequest $upsertRequest): object {
        return $this->call('servicos/servico/#$UpsertCadastroServico',$upsertRequest->toArray());
    }
}