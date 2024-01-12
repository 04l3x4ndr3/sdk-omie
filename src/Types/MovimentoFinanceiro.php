<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class MovimentoFinanceiro
{
    /**
     * @var int|null
     */
    private ?int $nPagina;
    /**
     * @var int|null
     */
    private ?int $nRegPorPagina;
    /**
     * @var string|null
     */
    private ?string $cOrdenarPor;
    /**
     * @var string|null
     */
    private ?string $cOrdemDecrescente;
    /**
     * @var bool|null
     */
    private ?bool $lDadosCad;
    /**
     * @var int|null
     */
    private ?int $nCodTitulo;
    /**
     * @var string|null
     */
    private ?string $cCodIntTitulo;
    /**
     * @var string|null
     */
    private ?string $cNumTitulo;
    /**
     * @var string|null
     */
    private ?string $dDtEmisDe;
    /**
     * @var string|null
     */
    private ?string $dDtEmisAte;
    /**
     * @var string|null
     */
    private ?string $dDtVencDe;
    /**
     * @var string|null
     */
    private ?string $dDtVencAte;
    /**
     * @var string|null
     */
    private ?string $dDtPagtoDe;
    /**
     * @var string|null
     */
    private ?string $dDtPagtoAte;
    /**
     * @var string|null
     */
    private ?string $dDtPrevDe;
    /**
     * @var string|null
     */
    private ?string $dDtPrevAte;
    /**
     * @var string|null
     */
    private ?string $dDtRegDe;
    /**
     * @var string|null
     */
    private ?string $dDtRegAte;
    /**
     * @var int|null
     */
    private ?int $nCodCliente;
    /**
     * @var string|null
     */
    private ?string $cCPFCNPJCliente;
    /**
     * @var int|null
     */
    private ?int $nCodCtr;
    /**
     * @var string|null
     */
    private ?string $cNumCtr;
    /**
     * @var int|null
     */
    private ?int $nCodOS;
    /**
     * @var string|null
     */
    private ?string $cNumOS;
    /**
     * @var int|null
     */
    private ?int $nCodCC;
    /**
     * @var string|null
     */
    private ?string $cStatus;
    /**
     * @var string|null
     */
    private ?string $cNatureza;
    /**
     * @var string|null
     */
    private ?string $cTipo;
    /**
     * @var string|null
     */
    private ?string $cOperacao;
    /**
     * @var string|null
     */
    private ?string $cNumDocFiscal;
    /**
     * @var string|null
     */
    private ?string $cCodigoBarras;
    /**
     * @var int|null
     */
    private ?int $nCodProjeto;
    /**
     * @var int|null
     */
    private ?int $nCodVendedor;
    /**
     * @var int|null
     */
    private ?int $nCodComprador;
    /**
     * @var string|null
     */
    private ?string $cCodCateg;
    /**
     * @var string|null
     */
    private ?string $dDtIncDe;
    /**
     * @var string|null
     */
    private ?string $dDtIncAte;
    /**
     * @var string|null
     */
    private ?string $dDtAltDe;
    /**
     * @var string|null
     */
    private ?string $dDtAltAte;
    /**
     * @var string|null
     */
    private ?string $cTpLancamento;
    /**
     * @var string|null
     */
    private ?string $cExibirDepartamentos;
    /**
     * @var int|null
     */
    private ?int $nCodMovCC;

    /**
     * @param int|null $nPagina
     * @param int|null $nRegPorPagina
     * @param string|null $cOrdenarPor
     * @param string|null $cOrdemDecrescente
     * @param bool|null $lDadosCad
     * @param int|null $nCodTitulo
     * @param string|null $cCodIntTitulo
     * @param string|null $cNumTitulo
     * @param string|null $dDtEmisDe
     * @param string|null $dDtEmisAte
     * @param string|null $dDtVencDe
     * @param string|null $dDtVencAte
     * @param string|null $dDtPagtoDe
     * @param string|null $dDtPagtoAte
     * @param string|null $dDtPrevDe
     * @param string|null $dDtPrevAte
     * @param string|null $dDtRegDe
     * @param string|null $dDtRegAte
     * @param int|null $nCodCliente
     * @param string|null $cCPFCNPJCliente
     * @param int|null $nCodCtr
     * @param string|null $cNumCtr
     * @param int|null $nCodOS
     * @param string|null $cNumOS
     * @param int|null $nCodCC
     * @param string|null $cStatus
     * @param string|null $cNatureza
     * @param string|null $cTipo
     * @param string|null $cOperacao
     * @param string|null $cNumDocFiscal
     * @param string|null $cCodigoBarras
     * @param int|null $nCodProjeto
     * @param int|null $nCodVendedor
     * @param int|null $nCodComprador
     * @param string|null $cCodCateg
     * @param string|null $dDtIncDe
     * @param string|null $dDtIncAte
     * @param string|null $dDtAltDe
     * @param string|null $dDtAltAte
     * @param string|null $cTpLancamento
     * @param string|null $cExibirDepartamentos
     * @param int|null $nCodMovCC
     */
    public function __construct(
        ?int $nPagina = null,
        ?int $nRegPorPagina = null,
        ?string $cOrdenarPor = null,
        ?string $cOrdemDecrescente = null,
        ?bool $lDadosCad = null,
        ?int $nCodTitulo = null,
        ?string $cCodIntTitulo = null,
        ?string $cNumTitulo = null,
        ?string $dDtEmisDe = null,
        ?string $dDtEmisAte = null,
        ?string $dDtVencDe = null,
        ?string $dDtVencAte = null,
        ?string $dDtPagtoDe = null,
        ?string $dDtPagtoAte = null,
        ?string $dDtPrevDe = null,
        ?string $dDtPrevAte = null,
        ?string $dDtRegDe = null,
        ?string $dDtRegAte = null,
        ?int $nCodCliente = null,
        ?string $cCPFCNPJCliente = null,
        ?int $nCodCtr = null,
        ?string $cNumCtr = null,
        ?int $nCodOS = null,
        ?string $cNumOS = null,
        ?int $nCodCC = null,
        ?string $cStatus = null,
        ?string $cNatureza = null,
        ?string $cTipo = null,
        ?string $cOperacao = null,
        ?string $cNumDocFiscal = null,
        ?string $cCodigoBarras = null,
        ?int $nCodProjeto = null,
        ?int $nCodVendedor = null,
        ?int $nCodComprador = null,
        ?string $cCodCateg = null,
        ?string $dDtIncDe = null,
        ?string $dDtIncAte = null,
        ?string $dDtAltDe = null,
        ?string $dDtAltAte = null,
        ?string $cTpLancamento = null,
        ?string $cExibirDepartamentos = null,
        ?int $nCodMovCC = null
    )
    {
        $this->nPagina = $nPagina;
        $this->nRegPorPagina = $nRegPorPagina;
        $this->cOrdenarPor = $cOrdenarPor;
        $this->cOrdemDecrescente = $cOrdemDecrescente;
        $this->lDadosCad = $lDadosCad;
        $this->nCodTitulo = $nCodTitulo;
        $this->cCodIntTitulo = $cCodIntTitulo;
        $this->cNumTitulo = $cNumTitulo;
        $this->dDtEmisDe = $dDtEmisDe;
        $this->dDtEmisAte = $dDtEmisAte;
        $this->dDtVencDe = $dDtVencDe;
        $this->dDtVencAte = $dDtVencAte;
        $this->dDtPagtoDe = $dDtPagtoDe;
        $this->dDtPagtoAte = $dDtPagtoAte;
        $this->dDtPrevDe = $dDtPrevDe;
        $this->dDtPrevAte = $dDtPrevAte;
        $this->dDtRegDe = $dDtRegDe;
        $this->dDtRegAte = $dDtRegAte;
        $this->nCodCliente = $nCodCliente;
        $this->cCPFCNPJCliente = $cCPFCNPJCliente;
        $this->nCodCtr = $nCodCtr;
        $this->cNumCtr = $cNumCtr;
        $this->nCodOS = $nCodOS;
        $this->cNumOS = $cNumOS;
        $this->nCodCC = $nCodCC;
        $this->cStatus = $cStatus;
        $this->cNatureza = $cNatureza;
        $this->cTipo = $cTipo;
        $this->cOperacao = $cOperacao;
        $this->cNumDocFiscal = $cNumDocFiscal;
        $this->cCodigoBarras = $cCodigoBarras;
        $this->nCodProjeto = $nCodProjeto;
        $this->nCodVendedor = $nCodVendedor;
        $this->nCodComprador = $nCodComprador;
        $this->cCodCateg = $cCodCateg;
        $this->dDtIncDe = $dDtIncDe;
        $this->dDtIncAte = $dDtIncAte;
        $this->dDtAltDe = $dDtAltDe;
        $this->dDtAltAte = $dDtAltAte;
        $this->cTpLancamento = $cTpLancamento;
        $this->cExibirDepartamentos = $cExibirDepartamentos;
        $this->nCodMovCC = $nCodMovCC;
    }

    /**
     * @return int|null
     */
    public function getNPagina(): ?int
    {
        return $this->nPagina;
    }

    /**
     * @param int|null $nPagina
     * @return $this
     */
    public function setNPagina(?int $nPagina): MovimentoFinanceiro
    {
        $this->nPagina = $nPagina;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNRegPorPagina(): ?int
    {
        return $this->nRegPorPagina;
    }

    /**
     * @param int|null $nRegPorPagina
     * @return $this
     */
    public function setNRegPorPagina(?int $nRegPorPagina): MovimentoFinanceiro
    {
        $this->nRegPorPagina = $nRegPorPagina;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCOrdenarPor(): ?string
    {
        return $this->cOrdenarPor;
    }

    /**
     * @param string|null $cOrdenarPor
     * @return $this
     */
    public function setCOrdenarPor(?string $cOrdenarPor): MovimentoFinanceiro
    {
        $this->cOrdenarPor = $cOrdenarPor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCOrdemDecrescente(): ?string
    {
        return $this->cOrdemDecrescente;
    }

    /**
     * @param string|null $cOrdemDecrescente
     * @return $this
     */
    public function setCOrdemDecrescente(?string $cOrdemDecrescente): MovimentoFinanceiro
    {
        $this->cOrdemDecrescente = $cOrdemDecrescente;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLDadosCad(): ?bool
    {
        return $this->lDadosCad;
    }

    /**
     * @param bool|null $lDadosCad
     * @return $this
     */
    public function setLDadosCad(?bool $lDadosCad): MovimentoFinanceiro
    {
        $this->lDadosCad = $lDadosCad;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodTitulo(): ?int
    {
        return $this->nCodTitulo;
    }

    /**
     * @param int|null $nCodTitulo
     * @return $this
     */
    public function setNCodTitulo(?int $nCodTitulo): MovimentoFinanceiro
    {
        $this->nCodTitulo = $nCodTitulo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodIntTitulo(): ?string
    {
        return $this->cCodIntTitulo;
    }

    /**
     * @param string|null $cCodIntTitulo
     * @return $this
     */
    public function setCCodIntTitulo(?string $cCodIntTitulo): MovimentoFinanceiro
    {
        $this->cCodIntTitulo = $cCodIntTitulo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumTitulo(): ?string
    {
        return $this->cNumTitulo;
    }

    /**
     * @param string|null $cNumTitulo
     * @return $this
     */
    public function setCNumTitulo(?string $cNumTitulo): MovimentoFinanceiro
    {
        $this->cNumTitulo = $cNumTitulo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtEmisDe(): ?string
    {
        return $this->dDtEmisDe;
    }

    /**
     * @param string|null $dDtEmisDe
     * @return $this
     */
    public function setDDtEmisDe(?string $dDtEmisDe): MovimentoFinanceiro
    {
        $this->dDtEmisDe = $dDtEmisDe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtEmisAte(): ?string
    {
        return $this->dDtEmisAte;
    }

    /**
     * @param string|null $dDtEmisAte
     * @return $this
     */
    public function setDDtEmisAte(?string $dDtEmisAte): MovimentoFinanceiro
    {
        $this->dDtEmisAte = $dDtEmisAte;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtVencDe(): ?string
    {
        return $this->dDtVencDe;
    }

    /**
     * @param string|null $dDtVencDe
     * @return $this
     */
    public function setDDtVencDe(?string $dDtVencDe): MovimentoFinanceiro
    {
        $this->dDtVencDe = $dDtVencDe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtVencAte(): ?string
    {
        return $this->dDtVencAte;
    }

    /**
     * @param string|null $dDtVencAte
     * @return $this
     */
    public function setDDtVencAte(?string $dDtVencAte): MovimentoFinanceiro
    {
        $this->dDtVencAte = $dDtVencAte;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtPagtoDe(): ?string
    {
        return $this->dDtPagtoDe;
    }

    /**
     * @param string|null $dDtPagtoDe
     * @return $this
     */
    public function setDDtPagtoDe(?string $dDtPagtoDe): MovimentoFinanceiro
    {
        $this->dDtPagtoDe = $dDtPagtoDe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtPagtoAte(): ?string
    {
        return $this->dDtPagtoAte;
    }

    /**
     * @param string|null $dDtPagtoAte
     * @return $this
     */
    public function setDDtPagtoAte(?string $dDtPagtoAte): MovimentoFinanceiro
    {
        $this->dDtPagtoAte = $dDtPagtoAte;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtPrevDe(): ?string
    {
        return $this->dDtPrevDe;
    }

    /**
     * @param string|null $dDtPrevDe
     * @return $this
     */
    public function setDDtPrevDe(?string $dDtPrevDe): MovimentoFinanceiro
    {
        $this->dDtPrevDe = $dDtPrevDe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtPrevAte(): ?string
    {
        return $this->dDtPrevAte;
    }

    /**
     * @param string|null $dDtPrevAte
     * @return $this
     */
    public function setDDtPrevAte(?string $dDtPrevAte): MovimentoFinanceiro
    {
        $this->dDtPrevAte = $dDtPrevAte;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtRegDe(): ?string
    {
        return $this->dDtRegDe;
    }

    /**
     * @param string|null $dDtRegDe
     * @return $this
     */
    public function setDDtRegDe(?string $dDtRegDe): MovimentoFinanceiro
    {
        $this->dDtRegDe = $dDtRegDe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtRegAte(): ?string
    {
        return $this->dDtRegAte;
    }

    /**
     * @param string|null $dDtRegAte
     * @return $this
     */
    public function setDDtRegAte(?string $dDtRegAte): MovimentoFinanceiro
    {
        $this->dDtRegAte = $dDtRegAte;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodCliente(): ?int
    {
        return $this->nCodCliente;
    }

    /**
     * @param int|null $nCodCliente
     * @return $this
     */
    public function setNCodCliente(?int $nCodCliente): MovimentoFinanceiro
    {
        $this->nCodCliente = $nCodCliente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCPFCNPJCliente(): ?string
    {
        return $this->cCPFCNPJCliente;
    }

    /**
     * @param string|null $cCPFCNPJCliente
     * @return $this
     */
    public function setCCPFCNPJCliente(?string $cCPFCNPJCliente): MovimentoFinanceiro
    {
        $this->cCPFCNPJCliente = $cCPFCNPJCliente;
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
     * @return $this
     */
    public function setNCodCtr(?int $nCodCtr): MovimentoFinanceiro
    {
        $this->nCodCtr = $nCodCtr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumCtr(): ?string
    {
        return $this->cNumCtr;
    }

    /**
     * @param string|null $cNumCtr
     * @return $this
     */
    public function setCNumCtr(?string $cNumCtr): MovimentoFinanceiro
    {
        $this->cNumCtr = $cNumCtr;
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
     * @return $this
     */
    public function setNCodOS(?int $nCodOS): MovimentoFinanceiro
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
     * @return $this
     */
    public function setCNumOS(?string $cNumOS): MovimentoFinanceiro
    {
        $this->cNumOS = $cNumOS;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodCC(): ?int
    {
        return $this->nCodCC;
    }

    /**
     * @param int|null $nCodCC
     * @return $this
     */
    public function setNCodCC(?int $nCodCC): MovimentoFinanceiro
    {
        $this->nCodCC = $nCodCC;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCStatus(): ?string
    {
        return $this->cStatus;
    }

    /**
     * @param string|null $cStatus
     * @return $this
     */
    public function setCStatus(?string $cStatus): MovimentoFinanceiro
    {
        $this->cStatus = $cStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNatureza(): ?string
    {
        return $this->cNatureza;
    }

    /**
     * @param string|null $cNatureza
     * @return $this
     */
    public function setCNatureza(?string $cNatureza): MovimentoFinanceiro
    {
        $this->cNatureza = $cNatureza;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTipo(): ?string
    {
        return $this->cTipo;
    }

    /**
     * @param string|null $cTipo
     * @return $this
     */
    public function setCTipo(?string $cTipo): MovimentoFinanceiro
    {
        $this->cTipo = $cTipo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCOperacao(): ?string
    {
        return $this->cOperacao;
    }

    /**
     * @param string|null $cOperacao
     * @return $this
     */
    public function setCOperacao(?string $cOperacao): MovimentoFinanceiro
    {
        $this->cOperacao = $cOperacao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumDocFiscal(): ?string
    {
        return $this->cNumDocFiscal;
    }

    /**
     * @param string|null $cNumDocFiscal
     * @return $this
     */
    public function setCNumDocFiscal(?string $cNumDocFiscal): MovimentoFinanceiro
    {
        $this->cNumDocFiscal = $cNumDocFiscal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodigoBarras(): ?string
    {
        return $this->cCodigoBarras;
    }

    /**
     * @param string|null $cCodigoBarras
     * @return $this
     */
    public function setCCodigoBarras(?string $cCodigoBarras): MovimentoFinanceiro
    {
        $this->cCodigoBarras = $cCodigoBarras;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodProjeto(): ?int
    {
        return $this->nCodProjeto;
    }

    /**
     * @param int|null $nCodProjeto
     * @return $this
     */
    public function setNCodProjeto(?int $nCodProjeto): MovimentoFinanceiro
    {
        $this->nCodProjeto = $nCodProjeto;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodVendedor(): ?int
    {
        return $this->nCodVendedor;
    }

    /**
     * @param int|null $nCodVendedor
     * @return $this
     */
    public function setNCodVendedor(?int $nCodVendedor): MovimentoFinanceiro
    {
        $this->nCodVendedor = $nCodVendedor;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodComprador(): ?int
    {
        return $this->nCodComprador;
    }

    /**
     * @param int|null $nCodComprador
     * @return $this
     */
    public function setNCodComprador(?int $nCodComprador): MovimentoFinanceiro
    {
        $this->nCodComprador = $nCodComprador;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodCateg(): ?string
    {
        return $this->cCodCateg;
    }

    /**
     * @param string|null $cCodCateg
     * @return $this
     */
    public function setCCodCateg(?string $cCodCateg): MovimentoFinanceiro
    {
        $this->cCodCateg = $cCodCateg;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtIncDe(): ?string
    {
        return $this->dDtIncDe;
    }

    /**
     * @param string|null $dDtIncDe
     * @return $this
     */
    public function setDDtIncDe(?string $dDtIncDe): MovimentoFinanceiro
    {
        $this->dDtIncDe = $dDtIncDe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtIncAte(): ?string
    {
        return $this->dDtIncAte;
    }

    /**
     * @param string|null $dDtIncAte
     * @return $this
     */
    public function setDDtIncAte(?string $dDtIncAte): MovimentoFinanceiro
    {
        $this->dDtIncAte = $dDtIncAte;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtAltDe(): ?string
    {
        return $this->dDtAltDe;
    }

    /**
     * @param string|null $dDtAltDe
     * @return $this
     */
    public function setDDtAltDe(?string $dDtAltDe): MovimentoFinanceiro
    {
        $this->dDtAltDe = $dDtAltDe;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtAltAte(): ?string
    {
        return $this->dDtAltAte;
    }

    /**
     * @param string|null $dDtAltAte
     * @return $this
     */
    public function setDDtAltAte(?string $dDtAltAte): MovimentoFinanceiro
    {
        $this->dDtAltAte = $dDtAltAte;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTpLancamento(): ?string
    {
        return $this->cTpLancamento;
    }

    /**
     * @param string|null $cTpLancamento
     * @return $this
     */
    public function setCTpLancamento(?string $cTpLancamento): MovimentoFinanceiro
    {
        $this->cTpLancamento = $cTpLancamento;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCExibirDepartamentos(): ?string
    {
        return $this->cExibirDepartamentos;
    }

    /**
     * @param string|null $cExibirDepartamentos
     * @return $this
     */
    public function setCExibirDepartamentos(?string $cExibirDepartamentos): MovimentoFinanceiro
    {
        $this->cExibirDepartamentos = $cExibirDepartamentos;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodMovCC(): ?int
    {
        return $this->nCodMovCC;
    }

    /**
     * @param int|null $nCodMovCC
     * @return $this
     */
    public function setNCodMovCC(?int $nCodMovCC): MovimentoFinanceiro
    {
        $this->nCodMovCC = $nCodMovCC;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "nPagina" => $this->nPagina,
            "nRegPorPagina" => $this->nRegPorPagina,
            "cOrdenarPor" => $this->cOrdenarPor,
            "cOrdemDecrescente" => $this->cOrdemDecrescente,
            "lDadosCad" => $this->lDadosCad,
            "nCodTitulo" => $this->nCodTitulo,
            "cCodIntTitulo" => $this->cCodIntTitulo,
            "cNumTitulo" => $this->cNumTitulo,
            "dDtEmisDe" => $this->dDtEmisDe,
            "dDtEmisAte" => $this->dDtEmisAte,
            "dDtVencDe" => $this->dDtVencDe,
            "dDtVencAte" => $this->dDtVencAte,
            "dDtPagtoDe" => $this->dDtPagtoDe,
            "dDtPagtoAte" => $this->dDtPagtoAte,
            "dDtPrevDe" => $this->dDtPrevDe,
            "dDtPrevAte" => $this->dDtPrevAte,
            "dDtRegDe" => $this->dDtRegDe,
            "dDtRegAte" => $this->dDtRegAte,
            "nCodCliente" => $this->nCodCliente,
            "cCPFCNPJCliente" => $this->cCPFCNPJCliente,
            "nCodCtr" => $this->nCodCtr,
            "cNumCtr" => $this->cNumCtr,
            "nCodOS" => $this->nCodOS,
            "cNumOS" => $this->cNumOS,
            "nCodCC" => $this->nCodCC,
            "cStatus" => $this->cStatus,
            "cNatureza" => $this->cNatureza,
            "cTipo" => $this->cTipo,
            "cOperacao" => $this->cOperacao,
            "cNumDocFiscal" => $this->cNumDocFiscal,
            "cCodigoBarras" => $this->cCodigoBarras,
            "nCodProjeto" => $this->nCodProjeto,
            "nCodVendedor" => $this->nCodVendedor,
            "nCodComprador" => $this->nCodComprador,
            "cCodCateg" => $this->cCodCateg,
            "dDtIncDe" => $this->dDtIncDe,
            "dDtIncAte" => $this->dDtIncAte,
            "dDtAltDe" => $this->dDtAltDe,
            "dDtAltAte" => $this->dDtAltAte,
            "cTpLancamento" => $this->cTpLancamento,
            "cExibirDepartamentos" => $this->cExibirDepartamentos,
            "nCodMovCC" => $this->nCodMovCC,
        ], function ($v) {
            return !is_null($v);
        });
    }
}