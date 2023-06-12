<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsCabecalho
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

    /** Número da Ordem de Serviço+
     *
     * @var string|null
     */
    private ?string $cNumOS;

    /** Código de Integração do Cliente
     *
     * @var string|null
     */
    private ?string $cCodIntCli;

    /** Código do Cliente
     *
     * @var int
     */
    private int $nCodCli;

    /** Data de Previsão
     *
     * @var string|null
     */
    private ?string $dDtPrevisao;

    /** Código da etapa do processo, sendo:+
     *
     * @var string|null
     */
    private ?string $cEtapa;

    /** Código do Vendedor
     *
     * @var int|null
     */
    private ?int $nCodVend;

    /** Quantidade de Parcelas
     *
     * @var int|null
     */
    private ?int $nQtdeParc;

    /** Código da parcela/Condição de pagamento.+
     *
     * @var string|null
     */
    private ?string $cCodParc;

    /** Valor total da Ordem de Serviço.+
     *
     * @var float|null
     */
    private ?float $nValorTotal;

    /** Valor Total de Impostos Retidos
     *
     * @var float|null
     */
    private ?float $nValorTotalImpRet;

    /** Código do Contrato.+
     *
     * @var int|null
     */
    private ?int $nCodCtr;

    /**
     * @param string|null $cCodIntOS
     * @param int|null    $nCodOS
     * @param string|null $cNumOS
     * @param string|null $cCodIntCli
     * @param int         $nCodCli
     * @param string|null $dDtPrevisao
     * @param string|null $cEtapa
     * @param int|null    $nCodVend
     * @param int|null    $nQtdeParc
     * @param string|null $cCodParc
     * @param float|null  $nValorTotal
     * @param float|null  $nValorTotalImpRet
     * @param int|null    $nCodCtr
     */
    public function __construct(
        ?string $cCodIntOS = null,
        ?int $nCodOS = null,
        ?string $cNumOS = null,
        ?string $cCodIntCli = null,
        int $nCodCli = null,
        ?string $dDtPrevisao = null,
        ?string $cEtapa = null,
        ?int $nCodVend = null,
        ?int $nQtdeParc = null,
        ?string $cCodParc = null,
        ?float $nValorTotal = null,
        ?float $nValorTotalImpRet = null,
        ?int $nCodCtr = null
    )
    {
        $this->cCodIntOS = $cCodIntOS;
        $this->nCodOS = $nCodOS;
        $this->cNumOS = $cNumOS;
        $this->cCodIntCli = $cCodIntCli;
        $this->nCodCli = $nCodCli;
        $this->dDtPrevisao = $dDtPrevisao;
        $this->cEtapa = $cEtapa;
        $this->nCodVend = $nCodVend;
        $this->nQtdeParc = $nQtdeParc;
        $this->cCodParc = $cCodParc;
        $this->nValorTotal = $nValorTotal;
        $this->nValorTotalImpRet = $nValorTotalImpRet;
        $this->nCodCtr = $nCodCtr;
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
     *
     * @return OsCabecalho
     */
    public function setCCodIntOS(?string $cCodIntOS): OsCabecalho
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
     *
     * @return OsCabecalho
     */
    public function setNCodOS(?int $nCodOS): OsCabecalho
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
     *
     * @return OsCabecalho
     */
    public function setCNumOS(?string $cNumOS): OsCabecalho
    {
        $this->cNumOS = $cNumOS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodIntCli(): ?string
    {
        return $this->cCodIntCli;
    }

    /**
     * @param string|null $cCodIntCli
     *
     * @return OsCabecalho
     */
    public function setCCodIntCli(?string $cCodIntCli): OsCabecalho
    {
        $this->cCodIntCli = $cCodIntCli;
        return $this;
    }

    /**
     * @return int
     */
    public function getNCodCli(): int
    {
        return $this->nCodCli;
    }

    /**
     * @param int $nCodCli
     *
     * @return OsCabecalho
     */
    public function setNCodCli(int $nCodCli): OsCabecalho
    {
        $this->nCodCli = $nCodCli;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtPrevisao(): ?string
    {
        return $this->dDtPrevisao;
    }

    /**
     * @param string|null $dDtPrevisao
     *
     * @return OsCabecalho
     */
    public function setDDtPrevisao(?string $dDtPrevisao): OsCabecalho
    {
        $this->dDtPrevisao = $dDtPrevisao;
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
     *
     * @return OsCabecalho
     */
    public function setCEtapa(?string $cEtapa): OsCabecalho
    {
        $this->cEtapa = $cEtapa;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodVend(): ?int
    {
        return $this->nCodVend;
    }

    /**
     * @param int|null $nCodVend
     *
     * @return OsCabecalho
     */
    public function setNCodVend(?int $nCodVend): OsCabecalho
    {
        $this->nCodVend = $nCodVend;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNQtdeParc(): ?int
    {
        return $this->nQtdeParc;
    }

    /**
     * @param int|null $nQtdeParc
     *
     * @return OsCabecalho
     */
    public function setNQtdeParc(?int $nQtdeParc): OsCabecalho
    {
        $this->nQtdeParc = $nQtdeParc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodParc(): ?string
    {
        return $this->cCodParc;
    }

    /**
     * @param string|null $cCodParc
     *
     * @return OsCabecalho
     */
    public function setCCodParc(?string $cCodParc): OsCabecalho
    {
        $this->cCodParc = $cCodParc;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorTotal(): ?float
    {
        return $this->nValorTotal;
    }

    /**
     * @param float|null $nValorTotal
     *
     * @return OsCabecalho
     */
    public function setNValorTotal(?float $nValorTotal): OsCabecalho
    {
        $this->nValorTotal = $nValorTotal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorTotalImpRet(): ?float
    {
        return $this->nValorTotalImpRet;
    }

    /**
     * @param float|null $nValorTotalImpRet
     *
     * @return OsCabecalho
     */
    public function setNValorTotalImpRet(?float $nValorTotalImpRet): OsCabecalho
    {
        $this->nValorTotalImpRet = $nValorTotalImpRet;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodCtr(): ?int
    {
        return $this->nCodCtr;
    }

    /**
     * @param int|null $nCodCtr
     *
     * @return OsCabecalho
     */
    public function setNCodCtr(?int $nCodCtr): OsCabecalho
    {
        $this->nCodCtr = $nCodCtr;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            "cCodIntOS" => $this->cCodIntOS,
            "nCodOS" => $this->nCodOS,
            "cNumOS" => $this->cNumOS,
            "cCodIntCli" => $this->cCodIntCli,
            "nCodCli" => $this->nCodCli,
            "dDtPrevisao" => $this->dDtPrevisao,
            "cEtapa" => $this->cEtapa,
            "nCodVend" => $this->nCodVend,
            "nQtdeParc" => $this->nQtdeParc,
            "cCodParc" => $this->cCodParc,
            "nValorTotal" => $this->nValorTotal,
            "nValorTotalImpRet" => $this->nValorTotalImpRet,
            "odCtr" => $this->nCodCtr,
        ], function ($v) {
            return !is_null($v);
        });
    }
}
