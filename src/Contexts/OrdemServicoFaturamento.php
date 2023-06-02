<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

require 'application/third_party/sdk-omie/src/Helpers/CallApi.php';
require 'application/third_party/sdk-omie/src/Configuration.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;

class OrdemServicoFaturamento extends CallApi
{
    /**
     * @var string|null
     */
    private ?string $cCodIntOS;
    /**
     * @var int|null
     */
    private ?int $nCodOS;
    /**
     * @var string|null
     */
    private ?string $cCodStatus;
    /**
     * @var string|null
     */
    private ?string $cDescStatus;
    /**
     * @var string|null
     */
    private ?string $cEtapa;
    /**
     * @var int|null
     */
    private ?int $nIdPed;
    /**
     * @var string|null
     */
    private ?string $cNumPedido;

    /**
     * @param string|null $cCodIntOS
     * @param int|null $nCodOS
     * @param string|null $cCodStatus
     * @param string|null $cDescStatus
     * @param string|null $cEtapa
     * @param int|null $nIdPed
     * @param string|null $cNumPedido
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->cCodIntOS = null;
        $this->nCodOS = null;
        $this->cCodStatus = null;
        $this->cDescStatus = null;
        $this->cEtapa = null;
        $this->nIdPed = null;
        $this->cNumPedido = null;
    }

    /**
     * @return string|null
     */
    public function getCCodIntOS(): ?string
    {
        return $this->cCodIntOS;
    }

    /**
     * @param string|null $cCodIntOS
     * @return OrdemServicoFaturamento
     */
    public function setCCodIntOS(?string $cCodIntOS): OrdemServicoFaturamento
    {
        $this->cCodIntOS = $cCodIntOS;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodOS(): ?int
    {
        return $this->nCodOS;
    }

    /**
     * @param int|null $nCodOS
     * @return OrdemServicoFaturamento
     */
    public function setNCodOS(?int $nCodOS): OrdemServicoFaturamento
    {
        $this->nCodOS = $nCodOS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodStatus(): ?string
    {
        return $this->cCodStatus;
    }

    /**
     * @param string|null $cCodStatus
     * @return OrdemServicoFaturamento
     */
    public function setCCodStatus(?string $cCodStatus): OrdemServicoFaturamento
    {
        $this->cCodStatus = $cCodStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDescStatus(): ?string
    {
        return $this->cDescStatus;
    }

    /**
     * @param string|null $cDescStatus
     * @return OrdemServicoFaturamento
     */
    public function setCDescStatus(?string $cDescStatus): OrdemServicoFaturamento
    {
        $this->cDescStatus = $cDescStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEtapa(): ?string
    {
        return $this->cEtapa;
    }

    /**
     * @param string|null $cEtapa
     * @return OrdemServicoFaturamento
     */
    public function setCEtapa(?string $cEtapa): OrdemServicoFaturamento
    {
        $this->cEtapa = $cEtapa;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNIdPed(): ?int
    {
        return $this->nIdPed;
    }

    /**
     * @param int|null $nIdPed
     * @return OrdemServicoFaturamento
     */
    public function setNIdPed(?int $nIdPed): OrdemServicoFaturamento
    {
        $this->nIdPed = $nIdPed;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumPedido(): ?string
    {
        return $this->cNumPedido;
    }

    /**
     * @param string|null $cNumPedido
     * @return OrdemServicoFaturamento
     */
    public function setCNumPedido(?string $cNumPedido): OrdemServicoFaturamento
    {
        $this->cNumPedido = $cNumPedido;
        return $this;
    }


    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function faturarOS(?array $param = null): object
    {
        return $this->call("servicos/osp/#FaturarOS", $param);
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