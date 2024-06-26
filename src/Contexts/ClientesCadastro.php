<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;
use O4l3x4ndr3\SdkOmie\Types\ClientesListRequest;

/**
 *
 */
class ClientesCadastro extends CallApi
{

    /**
     * @param Configuration|null $configuration
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param ClientesListRequest|null $clientesListRequest
     * @return object|array
     *
     * @throws GuzzleException
     */
    public function listarClientes(?ClientesListRequest $clientesListRequest = null): object
    {
        return $this->call("geral/clientes/#ListarClientes", $clientesListRequest->toArray());
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function consultarCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#ConsultarCliente", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function incluirCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#IncluirCliente", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function alterarCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#AlterarCliente", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function excluirCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#ExcluirCliente", $param);
    }

    /**
     * @param \O4l3x4ndr3\SdkOmie\Types\ClientesCadastro|null $upsertCliente
     * @return object|array
     *
     * @throws GuzzleException
     */
    public function upsertCliente(?\O4l3x4ndr3\SdkOmie\Types\ClientesCadastro $upsertCliente = null): object
    {
        return $this->call("geral/clientes/#UpsertCliente", $upsertCliente->toArray());
    }
}
