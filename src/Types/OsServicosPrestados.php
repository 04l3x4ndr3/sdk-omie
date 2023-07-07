<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsServicosPrestados
{

    /** Código Interno do Serviço conforme cadastrado na tabela de serviços.
     *
     * @var int|null
     */
    private ?int $nCodServico;

    /** Código de Integração do Serviço conforme cadastrado na tabela de serviços.
     *
     * @var string|null
     */
    private ?string $cCodIntServico;

    /** Tipo de Tributação dos Serviços.
     *
     * @var string|null
     */
    private ?string $cTribServ;

    /** Código do Serviço Municipal ou CNAE.
     *
     * @var string|null
     */
    private ?string $cCodServMun;

    /** Código do Serviço conforme Lei Complementar (LC 116).
     *
     * @var string|null
     */
    private ?string $cCodServLC116;

    /** Quantidade de serviços.
     *
     * @var float|null
     */
    private ?float $nQtde;

    /** Valor Unitário do serviço.
     *
     * @var float|null
     */
    private ?float $nValUnit;

    /** Tipo de Desconto.
     *
     * @var string|null
     */
    private ?string $cTpDesconto;

    /** Valor do Desconto.
     *
     * @var float|null
     */
    private ?float $nValorDesconto;

    /** Aliquota do Desconto.
     *
     * @var float|null
     */
    private ?float $nAliqDesconto;

    /** Valor de Outras Retenções.
     *
     * @var float|null
     */
    private ?float $nValorOutrasRetencoes;

    /** Valor de Acréscimos e taxas.
     *
     * @var float|null
     */
    private ?float $nValorAcrescimos;

    /** Descrição dos Serviços.
     *
     * @var string|null
     */
    private ?string $cDescServ;

    /** Retem ISS (S/N)
     *
     * @var string|null
     */
    private ?string $cRetemISS;

    /** Dados adicionais do Item.
     *
     * @var string|null
     */
    private ?string $cDadosAdicItem;

    /** Código da Nomenclatura Brasileira de Serviços (NBS).
     *
     * @var string|null
     */
    private ?string $cNbs;

    /** Dados do impostos do serviço.
     *
     * @var array|null
     */
    private ?array $impostos;

    /** Não gerar conta a receber para este item.
     *
     * @var string|null
     */
    private ?string $cNaoGerarFinanceiro;

    /** Código da Categoria.
     *
     * @var string|null
     */
    private ?string $cCodCategItem;

    /** Sequencia do Item
     *
     * @var int|null
     */
    private ?int $nSeqItem;

    /** ID do Item da Ordem de Serviço.
     *
     * @var int|null
     */
    private ?int $nIdItem;

    /** Ação a ser realizada na alteração do item.
     *
     * @var string|null
     */
    private ?string $cAcaoItem;

    /** Informações referente ao serviço de NF modelo 21 ou 22.
     *
     * @var array|null
     */
    private ?array $viaUnica;

    /**
     * @param int|null $nCodServico
     * @param float|null $nValUnit
     * @param float|null $nQtde
     * @param string|null $cDescServ
     * @param string|null $cCodIntServico
     * @param string|null $cTribServ
     * @param string|null $cCodServMun
     * @param string|null $cCodServLC116
     * @param string|null $cTpDesconto
     * @param float|null $nValorDesconto
     * @param float|null $nAliqDesconto
     * @param float|null $nValorOutrasRetencoes
     * @param float|null $nValorAcrescimos
     * @param string|null $cRetemISS
     * @param string|null $cDadosAdicItem
     * @param string|null $cNbs
     * @param array|null $impostos
     * @param string|null $cNaoGerarFinanceiro
     * @param string|null $cCodCategItem
     * @param int|null $nSeqItem
     * @param int|null $nIdItem
     * @param string|null $cAcaoItem
     * @param array|null $viaUnica
     */
    public function __construct(
        ?int    $nCodServico = null,
        ?float  $nValUnit = null,
        ?float  $nQtde = null,
        ?string $cDescServ = null,
        ?string $cCodIntServico = null,
        ?string $cTribServ = null,
        ?string $cCodServMun = null,
        ?string $cCodServLC116 = null,
        ?string $cTpDesconto = null,
        ?float  $nValorDesconto = null,
        ?float  $nAliqDesconto = null,
        ?float  $nValorOutrasRetencoes = null,
        ?float  $nValorAcrescimos = null,
        ?string $cRetemISS = null,
        ?string $cDadosAdicItem = null,
        ?string $cNbs = null,
        ?array  $impostos = null,
        ?string $cNaoGerarFinanceiro = null,
        ?string $cCodCategItem = null,
        ?int    $nSeqItem = null,
        ?int    $nIdItem = null,
        ?string $cAcaoItem = null,
        ?array  $viaUnica = null)
    {
        $this->nCodServico = $nCodServico;
        $this->nValUnit = $nValUnit;
        $this->nQtde = $nQtde;
        $this->cDescServ = $cDescServ;
        $this->cCodIntServico = $cCodIntServico;
        $this->cTribServ = $cTribServ;
        $this->cCodServMun = $cCodServMun;
        $this->cCodServLC116 = $cCodServLC116;
        $this->cTpDesconto = $cTpDesconto;
        $this->nValorDesconto = $nValorDesconto;
        $this->nAliqDesconto = $nAliqDesconto;
        $this->nValorOutrasRetencoes = $nValorOutrasRetencoes;
        $this->nValorAcrescimos = $nValorAcrescimos;
        $this->cRetemISS = $cRetemISS;
        $this->cDadosAdicItem = $cDadosAdicItem;
        $this->cNbs = $cNbs;
        $this->impostos = $impostos;
        $this->cNaoGerarFinanceiro = $cNaoGerarFinanceiro;
        $this->cCodCategItem = $cCodCategItem;
        $this->nSeqItem = $nSeqItem;
        $this->nIdItem = $nIdItem;
        $this->cAcaoItem = $cAcaoItem;
        $this->viaUnica = $viaUnica;
    }

    /**
     * @return int|null
     */
    public function getNCodServico(): ?int
    {
        return $this->nCodServico;
    }

    /**
     * @param int|null $nCodServico
     * @return OsServicosPrestados
     */
    public function setNCodServico(?int $nCodServico): OsServicosPrestados
    {
        $this->nCodServico = $nCodServico;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodIntServico(): ?string
    {
        return $this->cCodIntServico;
    }

    /**
     * @param string|null $cCodIntServico
     * @return OsServicosPrestados
     */
    public function setCCodIntServico(?string $cCodIntServico): OsServicosPrestados
    {
        $this->cCodIntServico = $cCodIntServico;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTribServ(): ?string
    {
        return $this->cTribServ;
    }

    /**
     * @param string|null $cTribServ
     * @return OsServicosPrestados
     */
    public function setCTribServ(?string $cTribServ): OsServicosPrestados
    {
        $this->cTribServ = $cTribServ;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodServMun(): ?string
    {
        return $this->cCodServMun;
    }

    /**
     * @param string|null $cCodServMun
     * @return OsServicosPrestados
     */
    public function setCCodServMun(?string $cCodServMun): OsServicosPrestados
    {
        $this->cCodServMun = $cCodServMun;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodServLC116(): ?string
    {
        return $this->cCodServLC116;
    }

    /**
     * @param string|null $cCodServLC116
     * @return OsServicosPrestados
     */
    public function setCCodServLC116(?string $cCodServLC116): OsServicosPrestados
    {
        $this->cCodServLC116 = $cCodServLC116;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNQtde(): ?float
    {
        return $this->nQtde;
    }

    /**
     * @param float|null $nQtde
     * @return OsServicosPrestados
     */
    public function setNQtde(?float $nQtde): OsServicosPrestados
    {
        $this->nQtde = $nQtde;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValUnit(): ?float
    {
        return $this->nValUnit;
    }

    /**
     * @param float|null $nValUnit
     * @return OsServicosPrestados
     */
    public function setNValUnit(?float $nValUnit): OsServicosPrestados
    {
        $this->nValUnit = $nValUnit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTpDesconto(): ?string
    {
        return $this->cTpDesconto;
    }

    /**
     * @param string|null $cTpDesconto
     * @return OsServicosPrestados
     */
    public function setCTpDesconto(?string $cTpDesconto): OsServicosPrestados
    {
        $this->cTpDesconto = $cTpDesconto;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorDesconto(): ?float
    {
        return $this->nValorDesconto;
    }

    /**
     * @param float|null $nValorDesconto
     * @return OsServicosPrestados
     */
    public function setNValorDesconto(?float $nValorDesconto): OsServicosPrestados
    {
        $this->nValorDesconto = $nValorDesconto;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqDesconto(): ?float
    {
        return $this->nAliqDesconto;
    }

    /**
     * @param float|null $nAliqDesconto
     * @return OsServicosPrestados
     */
    public function setNAliqDesconto(?float $nAliqDesconto): OsServicosPrestados
    {
        $this->nAliqDesconto = $nAliqDesconto;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorOutrasRetencoes(): ?float
    {
        return $this->nValorOutrasRetencoes;
    }

    /**
     * @param float|null $nValorOutrasRetencoes
     * @return OsServicosPrestados
     */
    public function setNValorOutrasRetencoes(?float $nValorOutrasRetencoes): OsServicosPrestados
    {
        $this->nValorOutrasRetencoes = $nValorOutrasRetencoes;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorAcrescimos(): ?float
    {
        return $this->nValorAcrescimos;
    }

    /**
     * @param float|null $nValorAcrescimos
     * @return OsServicosPrestados
     */
    public function setNValorAcrescimos(?float $nValorAcrescimos): OsServicosPrestados
    {
        $this->nValorAcrescimos = $nValorAcrescimos;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDescServ(): ?string
    {
        return $this->cDescServ;
    }

    /**
     * @param string|null $cDescServ
     * @return OsServicosPrestados
     */
    public function setCDescServ(?string $cDescServ): OsServicosPrestados
    {
        $this->cDescServ = $cDescServ;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemISS(): ?string
    {
        return $this->cRetemISS;
    }

    /**
     * @param string|null $cRetemISS
     * @return OsServicosPrestados
     */
    public function setCRetemISS(?string $cRetemISS): OsServicosPrestados
    {
        $this->cRetemISS = $cRetemISS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDadosAdicItem(): ?string
    {
        return $this->cDadosAdicItem;
    }

    /**
     * @param string|null $cDadosAdicItem
     * @return OsServicosPrestados
     */
    public function setCDadosAdicItem(?string $cDadosAdicItem): OsServicosPrestados
    {
        $this->cDadosAdicItem = $cDadosAdicItem;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNbs(): ?string
    {
        return $this->cNbs;
    }

    /**
     * @param string|null $cNbs
     * @return OsServicosPrestados
     */
    public function setCNbs(?string $cNbs): OsServicosPrestados
    {
        $this->cNbs = $cNbs;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getImpostos(): ?OsServicosPrestados
    {
        return $this->impostos;
    }

    /**
     * @param OsImpostos|null $impostos
     * @return OsServicosPrestados
     */
    public function AddImpostos(?OsImpostos $impostos): OsServicosPrestados
    {
        $this->impostos[] = $impostos->toArray();
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNaoGerarFinanceiro(): ?string
    {
        return $this->cNaoGerarFinanceiro;
    }

    /**
     * @param string|null $cNaoGerarFinanceiro
     * @return OsServicosPrestados
     */
    public function setCNaoGerarFinanceiro(?string $cNaoGerarFinanceiro): OsServicosPrestados
    {
        $this->cNaoGerarFinanceiro = $cNaoGerarFinanceiro;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodCategItem(): ?string
    {
        return $this->cCodCategItem;
    }

    /**
     * @param string|null $cCodCategItem
     * @return OsServicosPrestados
     */
    public function setCCodCategItem(?string $cCodCategItem): OsServicosPrestados
    {
        $this->cCodCategItem = $cCodCategItem;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNSeqItem(): ?int
    {
        return $this->nSeqItem;
    }

    /**
     * @param int|null $nSeqItem
     * @return OsServicosPrestados
     */
    public function setNSeqItem(?int $nSeqItem): OsServicosPrestados
    {
        $this->nSeqItem = $nSeqItem;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNIdItem(): ?int
    {
        return $this->nIdItem;
    }

    /**
     * @param int|null $nIdItem
     * @return OsServicosPrestados
     */
    public function setNIdItem(?int $nIdItem): OsServicosPrestados
    {
        $this->nIdItem = $nIdItem;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCAcaoItem(): ?string
    {
        return $this->cAcaoItem;
    }

    /**
     * @param string|null $cAcaoItem
     * @return OsServicosPrestados
     */
    public function setCAcaoItem(?string $cAcaoItem): OsServicosPrestados
    {
        $this->cAcaoItem = $cAcaoItem;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getViaUnica(): ?OsServicosPrestados
    {
        return $this->viaUnica;
    }

    /**
     * @param OsViaUnica|null $viaUnica
     * @return OsServicosPrestados
     */
    public function addViaUnica(?OsViaUnica $viaUnica): OsServicosPrestados
    {
        $this->viaUnica[] = $viaUnica->toArray();
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "nCodServico" => $this->nCodServico,
            "cCodIntServico" => $this->cCodIntServico,
            "cTribServ" => $this->cTribServ,
            "cCodServMun" => $this->cCodServMun,
            "cCodServLC116" => $this->cCodServLC116,
            "nQtde" => $this->nQtde,
            "nValUnit" => $this->nValUnit,
            "cTpDesconto" => $this->cTpDesconto,
            "nValorDesconto" => $this->nValorDesconto,
            "nAliqDesconto" => $this->nAliqDesconto,
            "nValorOutrasRetencoes" => $this->nValorOutrasRetencoes,
            "nValorAcrescimos" => $this->nValorAcrescimos,
            "cDescServ" => $this->cDescServ,
            "cRetemISS" => $this->cRetemISS,
            "cDadosAdicItem" => $this->cDadosAdicItem,
            "cNbs" => $this->cNbs,
            "impostos" => $this->impostos,
            "cNaoGerarFinanceiro" => $this->cNaoGerarFinanceiro,
            "cCodCategItem" => $this->cCodCategItem,
            "nSeqItem" => $this->nSeqItem,
            "nIdItem" => $this->nIdItem,
            "cAcaoItem" => $this->cAcaoItem,
            "viaUnica" => $this->viaUnica,
        ], function ($v) {
            return !is_null($v);
        });
    }
}