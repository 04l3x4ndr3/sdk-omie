<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class OsDespesasReembolsaveis
{
    /** Código da categoria para reembolso
     *
     * @var string|null
     */
    private ?string $cCodCategReemb;

    /** Despesa reembolsável
     *
     * @var array|null
     */
    private ?array $despesaReembolsavel;

    /**
     * @param string|null $cCodCategReemb
     * @param array|null $despesaReembolsavel
     */
    public function __construct(
        ?string $cCodCategReemb = null,
        ?array $despesaReembolsavel = null
    )
    {
        $this->cCodCategReemb = $cCodCategReemb;
        $this->despesaReembolsavel = $despesaReembolsavel;
    }

    /**
     * @return string|null
     */
    public function getCCodCategReemb(): ?string
    {
        return $this->cCodCategReemb;
    }

    /**
     * @param string|null $cCodCategReemb
     * @return OsDespesasReembolsaveis
     */
    public function setCCodCategReemb(?string $cCodCategReemb): OsDespesasReembolsaveis
    {
        $this->cCodCategReemb = $cCodCategReemb;
        return $this;
    }

    /** Lista de despesaReembolsavel
     *
     * @param OsParcelas $parcela
     * @return $this
     */
    public function addDespesaReembolsavel(DespesaReembolsavel $despesaReembolsavel): OsDespesasReembolsaveis
    {
        $this->despesaReembolsavel[] = $despesaReembolsavel->toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function getDespesaReembolsavel(): ?array
    {
        return $this->despesaReembolsavel;
    }

    public function toArray(): array {
        return array_filter([
            "cCodCategReemb" => $this->cCodCategReemb,
            "despesaReembolsavel" => $this->despesaReembolsavel,
        ], function ($v) {
            return !is_null($v);
        });
    }
}