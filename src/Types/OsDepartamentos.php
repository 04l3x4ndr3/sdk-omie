<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsDepartamentos
{
    /** ID do Departamento
     *
     * @var string|null
     */
    private ?string $cCodDepto;

    /** Percentual de Rateio
     *
     * @var float|null
     */
    private ?float $nPerc;

    /** Valor do Rateio
     *
     * @var float|null
     */
    private ?float $nValor;

    /** Indica que o valor foi fixado na distribuição do rateio.
     *
     * @var string|null
     */
    private ?string $nValorFixo;

    /**
     * @param string|null $cCodDepto
     * @param float|null $nPerc
     * @param float|null $nValor
     * @param string|null $nValorFixo
     */
    public function __construct(
        ?string $cCodDepto = null,
        ?float  $nPerc = null,
        ?float  $nValor = null,
        ?string $nValorFixo = null
    )
    {
        $this->cCodDepto = $cCodDepto;
        $this->nPerc = $nPerc;
        $this->nValor = $nValor;
        $this->nValorFixo = $nValorFixo;
    }

    /**
     * @return string|null
     */
    public function getCCodDepto(): ?string
    {
        return $this->cCodDepto;
    }

    /**
     * @param string|null $cCodDepto
     * @return OsDepartamentos
     */
    public function setCCodDepto(?string $cCodDepto): OsDepartamentos
    {
        $this->cCodDepto = $cCodDepto;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNPerc(): ?float
    {
        return $this->nPerc;
    }

    /**
     * @param float|null $nPerc
     * @return OsDepartamentos
     */
    public function setNPerc(?float $nPerc): OsDepartamentos
    {
        $this->nPerc = $nPerc;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValor(): ?float
    {
        return $this->nValor;
    }

    /**
     * @param float|null $nValor
     * @return OsDepartamentos
     */
    public function setNValor(?float $nValor): OsDepartamentos
    {
        $this->nValor = $nValor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNValorFixo(): ?string
    {
        return $this->nValorFixo;
    }

    /**
     * @param string|null $nValorFixo
     * @return OsDepartamentos
     */
    public function setNValorFixo(?string $nValorFixo): OsDepartamentos
    {
        $this->nValorFixo = $nValorFixo;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            "cCodDepto" => $this->cCodDepto,
            "nPerc" => $this->nPerc,
            "nValor" => $this->nValor,
            "nValorFixo" => $this->nValorFixo,
        ], function ($v) {
            return !is_null($v);
        });
    }
}