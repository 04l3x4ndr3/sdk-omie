<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class DespesasReembolsaveis
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
    public function __construct(?string $cCodCategReemb = null, ?array $despesaReembolsavel = null)
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
     * @return DespesasReembolsaveis
     */
    public function setCCodCategReemb(?string $cCodCategReemb): DespesasReembolsaveis
    {
        $this->cCodCategReemb = $cCodCategReemb;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getDespesaReembolsavel(): ?array
    {
        return $this->despesaReembolsavel;
    }

    /** Lista de despesaReembolsavel
     *
     * @param DespesasReembolsaveis $despesasReembolsavel
     * @return $this
     */
    public function addDespesaReembolsavel(DespesasReembolsaveis $despesasReembolsavel): OsChave
    {
        $this->despesaReembolsavel[] = $despesasReembolsavel->toArray();
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cCodCategReemb" => $this->cCodCategReemb,
            "despesaReembolsavel" => $this->despesaReembolsavel,
        ], function ($v) {
            return !is_null($v);
        });
    }
}