<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;
use O4l3x4ndr3\SdkOmie\Types\OsFaturarRequest;

class OrdemServicoFaturamento extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param OsFaturarRequest|null $os
     *
     * @return object
     * @throws GuzzleException
     */
    public function faturarOS(?OsFaturarRequest $os = null): object
    {
        return $this->call("servicos/osp/#FaturarOS", $os->toArray());
    }


    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function cancelarOS(?array $param = null): object
    {
        return $this->call("servicos/osp/#CancelarOS", $param);
    }


    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function reenviarOS(?array $param = null): object
    {
        return $this->call("servicos/osp/#ReenviarOS", $param);
    }


    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function obterOS(?array $param = null): object
    {
        return $this->call("servicos/osp/#ObterOS", $param);
    }


    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function validarOS(?array $param = null): object
    {
        return $this->call("servicos/osp/#ValidarOS", $param);
    }

}