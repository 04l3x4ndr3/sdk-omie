<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class DespesaReembolsavel
{
    /** ID do Reembolso.
     *
     * @var int|null
     */
    private ?int $nCodReemb;

    /** Pode ser:"A" - Alterar a despesa, "E" - Excluir a despesa, "I" - Incluir a despesa na alteração.
     *
     * @var string|null
     */
    private ?string $cAcaoReemb;

    /** Descrição da despesa.
     *
     * @var string|null
     */
    private ?string $cDescReemb;

    /** Valor da despesa.
     *
     * @var float|null
     */
    private ?float $nValorReemb;

    /** Data da despesa.
     *
     * @var string|null
     */
    private ?string $dDataReemb;

    /**
     * @param int|null $nCodReemb
     * @param string|null $cAcaoReemb
     * @param string|null $cDescReemb
     * @param float|null $nValorReemb
     * @param string|null $dDataReemb
     */
    public function __construct(
        ?int $nCodReemb = null,
        ?string $cAcaoReemb = null,
        ?string $cDescReemb = null,
        ?float $nValorReemb = null,
        ?string $dDataReemb = null
    )
    {
        $this->nCodReemb = $nCodReemb;
        $this->cAcaoReemb = $cAcaoReemb;
        $this->cDescReemb = $cDescReemb;
        $this->nValorReemb = $nValorReemb;
        $this->dDataReemb = $dDataReemb;
    }

    /**
     * @return int|null
     */
    public function getNCodReemb(): ?int
    {
        return $this->nCodReemb;
    }

    /**
     * @param int|null $nCodReemb
     * @return DespesaReembolsavel
     */
    public function setNCodReemb(?int $nCodReemb): DespesaReembolsavel
    {
        $this->nCodReemb = $nCodReemb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCAcaoReemb(): ?string
    {
        return $this->cAcaoReemb;
    }

    /**
     * @param string|null $cAcaoReemb
     * @return DespesaReembolsavel
     */
    public function setCAcaoReemb(?string $cAcaoReemb): DespesaReembolsavel
    {
        $this->cAcaoReemb = $cAcaoReemb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDescReemb(): ?string
    {
        return $this->cDescReemb;
    }

    /**
     * @param string|null $cDescReemb
     * @return DespesaReembolsavel
     */
    public function setCDescReemb(?string $cDescReemb): DespesaReembolsavel
    {
        $this->cDescReemb = $cDescReemb;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorReemb(): ?float
    {
        return $this->nValorReemb;
    }

    /**
     * @param float|null $nValorReemb
     * @return DespesaReembolsavel
     */
    public function setNValorReemb(?float $nValorReemb): DespesaReembolsavel
    {
        $this->nValorReemb = $nValorReemb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDataReemb(): ?string
    {
        return $this->dDataReemb;
    }

    /**
     * @param string|null $dDataReemb
     * @return DespesaReembolsavel
     */
    public function setDDataReemb(?string $dDataReemb): DespesaReembolsavel
    {
        $this->dDataReemb = $dDataReemb;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "nCodReemb" => $this->nCodReemb,
            "cAcaoReemb" => $this->cAcaoReemb,
            "cDescReemb" => $this->cDescReemb,
            "nValorReemb" => $this->nValorReemb,
            "dDataReemb" => $this->dDataReemb,
        ], function ($v) {
            return !is_null($v);
        });
    }
}