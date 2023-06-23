<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class OsChave
{
    /** Código de Integração da OS
     *
     * @var string|null
     */
    private ?string $cCodIntOS;

    /** Código da Ordem de Serviço
     *
     * @var int|null
     */
    private ?int $nCodOS;

    /** Número da Ordem de Serviço
     *
     * @var string|null
     */
    private ?string $cNumOS;

    /** Despesas reembolsáveis
     *
     * @var DespesasReembolsaveis|null
     */
    private ?DespesasReembolsaveis $despesasReembolsaveis;

    /**
     * @param string|null $cCodIntOS
     * @param int|null $nCodOS
     * @param string|null $cNumOS
     * @param DespesasReembolsaveis|null $despesasReembolsaveis
     */
    public function __construct(
        ?string                $cCodIntOS = null,
        ?int                   $nCodOS = null,
        ?string                $cNumOS = null,
        ?DespesasReembolsaveis $despesasReembolsaveis = null
    )
    {
        $this->cCodIntOS = $cCodIntOS;
        $this->nCodOS = $nCodOS;
        $this->cNumOS = $cNumOS;
        $this->despesasReembolsaveis = $despesasReembolsaveis;
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
     * @return OsChave
     */
    public function setCCodIntOS(?string $cCodIntOS): OsChave
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
     * @return OsChave
     */
    public function setNCodOS(?int $nCodOS): OsChave
    {
        $this->nCodOS = $nCodOS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumOS(): ?string
    {
        return $this->cNumOS;
    }

    /**
     * @param string|null $cNumOS
     * @return OsChave
     */
    public function setCNumOS(?string $cNumOS): OsChave
    {
        $this->cNumOS = $cNumOS;
        return $this;
    }

    /**
     * @return DespesasReembolsaveis|null
     */
    public function getDespesasReembolsaveis(): ?DespesasReembolsaveis
    {
        return $this->despesasReembolsaveis;
    }

    /**
     * @param DespesasReembolsaveis|null $despesasReembolsaveis
     * @return OsChave
     */
    public function setDespesasReembolsaveis(?DespesasReembolsaveis $despesasReembolsaveis): OsChave
    {
        $this->despesasReembolsaveis = $despesasReembolsaveis;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cCodIntOS" => $this->cCodIntOS,
            "nCodOS" => $this->nCodOS,
            "cNumOS" => $this->cNumOS,
            "despesasReembolsaveis" => isset($this->despesasReembolsaveis) ? $this->despesasReembolsaveis->toArray() : null,
        ], function ($v) {
            return !is_null($v);
        });
    }
}