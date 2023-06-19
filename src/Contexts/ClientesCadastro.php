<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;

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
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function listarClientes(?array $param = null): object
    {
        return $this->call("geral/clientes/#ListarClientes", $param);
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
     * @param \O4l3x4ndr3\SdkOmie\Types\ClientesCadastro|null $clienteCadastro
     * @return object|array
     *
     * @throws GuzzleException
     */
    public function upsertClienteCpfCnpj(?\O4l3x4ndr3\SdkOmie\Types\ClientesCadastro $clienteCadastro = null): object
    {
        return $this->call("geral/clientes/#UpsertClienteCpfCnpj", $clienteCadastro->toArray());
    }
}
