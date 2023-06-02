<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

require 'application/third_party/sdk-omie/src/Helpers/CallApi.php';
require 'application/third_party/sdk-omie/src/Configuration.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;

/**
 *
 */
class OrdemServico extends CallApi
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
    private ?string $cNumOS;
    /**
     * @var string|null
     */
    private ?string $cCodIntCli;
    /**
     * @var int|null
     */
    private ?int $nCodCli;
    /**
     * @var string|null
     */
    private ?string $dDtPrevisao;
    /**
     * @var string|null
     */
    private ?string $cEtapa;
    /**
     * @var int|null
     */
    private ?int $nCodVend;
    /**
     * @var int|null
     */
    private ?int $nQtdeParc;
    /**
     * @var string|null
     */
    private ?string $cCodParc;
    /**
     * @var float|null
     */
    private ?float $nValorTotal;
    /**
     * @var float|null
     */
    private ?float $nValorTotalImpRet;
    /**
     * @var int|null
     */
    private ?int $nCodCtr;
    /**
     * @var string|null
     */
    private ?string $cCodCateg;
    /**
     * @var int|null
     */
    private ?int $nCodCC;
    /**
     * @var string|null
     */
    private ?string $cNumPedido;
    /**
     * @var string|null
     */
    private ?string $cNumContrato;
    /**
     * @var string|null
     */
    private ?string $cContato;
    /**
     * @var string|null
     */
    private ?string $cDadosAdicNF;
    /**
     * @var string|null
     */
    private ?string $cCodObra;
    /**
     * @var string|null
     */
    private ?string $cCodART;
    /**
     * @var int|null
     */
    private ?int $nCodProj;
    /**
     * @var string|null
     */
    private ?string $cCidPrestServ;
    /**
     * @var string|null
     */
    private ?string $dDataRps;
    /**
     * @var string|null
     */
    private ?string $cNumRecibo;
    /**
     * @var string|null
     */
    private ?string $cEnvRecibo;
    /**
     * @var string|null
     */
    private ?string $cEnvLink;
    /**
     * @var string|null
     */
    private ?string $cEnvBoleto;
    /**
     * @var string|null
     */
    private ?string $cEnvPix;
    /**
     * @var string|null
     */
    private ?string $cEnviarPara;
    /**
     * @var string|null
     */
    private ?string $cEnvViaUnica;
    /**
     * @var string|null
     */
    private ?string $cCodDepto;
    /**
     * @var float|null
     */
    private ?float $nPerc;
    /**
     * @var float|null
     */
    private ?float $nValor;
    /**
     * @var string|null
     */
    private ?string $nValorFixo;
    /**
     * @var int|null
     */
    private ?int $nCodServico;
    /**
     * @var string|null
     */
    private ?string $cCodIntServico;
    /**
     * @var string|null
     */
    private ?string $cTribServ;
    /**
     * @var string|null
     */
    private ?string $cCodServMun;
    /**
     * @var string|null
     */
    private ?string $cCodServLC116;
    /**
     * @var float|null
     */
    private ?float $nQtde;
    /**
     * @var float|null
     */
    private ?float $nValUnit;
    /**
     * @var string|null
     */
    private ?string $cTpDesconto;
    /**
     * @var float|null
     */
    private ?float $nValorDesconto;
    /**
     * @var float|null
     */
    private ?float $nAliqDesconto;
    /**
     * @var float|null
     */
    private ?float $nValorOutrasRetencoes;
    /**
     * @var float|null
     */
    private ?float $nValorAcrescimos;
    /**
     * @var string|null
     */
    private ?string $cDescServ;
    /**
     * @var string|null
     */
    private ?string $cRetemISS;
    /**
     * @var string|null
     */
    private ?string $cDadosAdicItem;
    /**
     * @var string|null
     */
    private ?string $cNbs;
    /**
     * @var string|null
     */
    private ?string $cNaoGerarFinanceiro;
    /**
     * @var string|null
     */
    private ?string $cCodCategItem;
    /**
     * @var int|null
     */
    private ?int $nSeqItem;
    /**
     * @var int|null
     */
    private ?int $nIdItem;
    /**
     * @var string|null
     */
    private ?string $cAcaoItem;
    /**
     * @var string|null
     */
    private ?string $cModeloNF;
    /**
     * @var string|null
     */
    private ?string $cCFOP;
    /**
     * @var string|null
     */
    private ?string $cClassifServico;
    /**
     * @var string|null
     */
    private ?string $cTipoReceita;
    /**
     * @var string|null
     */
    private ?string $cTipoUtilizacao;
    /**
     * @var string|null
     */
    private ?string $cFixarISS;
    /**
     * @var float|null
     */
    private ?float $nAliqISS;
    /**
     * @var float|null
     */
    private ?float $nBaseISS;
    /**
     * @var float|null
     */
    private ?float $nTotDeducao;
    /**
     * @var float|null
     */
    private ?float $nValorISS;
    /**
     * @var string|null
     */
    private ?string $cUtilizaValorImposto;
    /**
     * @var string|null
     */
    private ?string $cFixarIRRF;
    /**
     * @var float|null
     */
    private ?float $nAliqIRRF;
    /**
     * @var float|null
     */
    private ?float $nValorIRRF;
    /**
     * @var string|null
     */
    private ?string $cRetemIRRF;
    /**
     * @var string|null
     */
    private ?string $cFixarPIS;
    /**
     * @var float|null
     */
    private ?float $nAliqPIS;
    /**
     * @var float|null
     */
    private ?float $nValorPIS;
    /**
     * @var string|null
     */
    private ?string $cRetemPIS;
    /**
     * @var string|null
     */
    private ?string $cFixarCOFINS;
    /**
     * @var float|null
     */
    private ?float $nAliqCOFINS;
    /**
     * @var float|null
     */
    private ?float $nValorCOFINS;
    /**
     * @var string|null
     */
    private ?string $cRetemCOFINS;
    /**
     * @var string|null
     */
    private ?string $cFixarCSLL;
    /**
     * @var float|null
     */
    private ?float $nAliqCSLL;
    /**
     * @var float|null
     */
    private ?float $nValorCSLL;
    /**
     * @var string|null
     */
    private ?string $cRetemCSLL;
    /**
     * @var string|null
     */
    private ?string $cFixarINSS;
    /**
     * @var float|null
     */
    private ?float $nAliqINSS;
    /**
     * @var float|null
     */
    private ?float $nValorINSS;
    /**
     * @var string|null
     */
    private ?string $cRetemINSS;
    /**
     * @var float|null
     */
    private ?float $nAliqRedBaseINSS;
    /**
     * @var float|null
     */
    private ?float $nAliqRedBaseCOFINS;
    /**
     * @var float|null
     */
    private ?float $nAliqRedBasePIS;
    /**
     * @var bool|null
     */
    private ?bool $lDeduzISS;
    /**
     * @var int|null
     */
    private ?int $nParcela;
    /**
     * @var string|null
     */
    private ?string $dDtVenc;
    /**
     * @var float|null
     */
    private ?float $nPercentual;
    /**
     * @var int|null
     */
    private ?int $nDias;
    /**
     * @var string|null
     */
    private ?string $tipo_documento;
    /**
     * @var string|null
     */
    private ?string $meio_pagamento;
    /**
     * @var string|null
     */
    private ?string $nsu;
    /**
     * @var string|null
     */
    private ?string $nao_gerar_boleto;
    /**
     * @var string|null
     */
    private ?string $parcela_adiantamento;
    /**
     * @var string|null
     */
    private ?string $categoria_adiantamento;
    /**
     * @var int|null
     */
    private ?int $conta_corrente_adiantamento;
    /**
     * @var string|null
     */
    private ?string $cObsOS;
    /**
     * @var string|null
     */
    private ?string $cCancelada;
    /**
     * @var string|null
     */
    private ?string $cFaturada;
    /**
     * @var string|null
     */
    private ?string $cAmbiente;
    /**
     * @var string|null
     */
    private ?string $dDtInc;
    /**
     * @var string|null
     */
    private ?string $cHrInc;
    /**
     * @var string|null
     */
    private ?string $dDtAlt;
    /**
     * @var string|null
     */
    private ?string $cHrAlt;
    /**
     * @var string|null
     */
    private ?string $dDtFat;
    /**
     * @var string|null
     */
    private ?string $cHrFat;
    /**
     * @var string|null
     */
    private ?string $dDtCanc;
    /**
     * @var string|null
     */
    private ?string $cHrCanc;
    /**
     * @var string|null
     */
    private ?string $cOrigem;
    /**
     * @var int|null
     */
    private ?int $nIdItemPU;
    /**
     * @var string|null
     */
    private ?string $cAcaoItemPU;
    /**
     * @var int|null
     */
    private ?int $nCodProdutoPU;
    /**
     * @var float|null
     */
    private ?float $nQtdePU;
    /**
     * @var int|null
     */
    private ?int $codigo_local_estoque;

    /**
     * @param string|null $cCodIntOS
     * @param int|null $nCodOS
     * @param string|null $cNumOS
     * @param string|null $cCodIntCli
     * @param int|null $nCodCli
     * @param string|null $dDtPrevisao
     * @param string|null $cEtapa
     * @param int|null $nCodVend
     * @param int|null $nQtdeParc
     * @param string|null $cCodParc
     * @param float|null $nValorTotal
     * @param float|null $nValorTotalImpRet
     * @param int|null $nCodCtr
     * @param string|null $cCodCateg
     * @param int|null $nCodCC
     * @param string|null $cNumPedido
     * @param string|null $cNumContrato
     * @param string|null $cContato
     * @param string|null $cDadosAdicNF
     * @param string|null $cCodObra
     * @param string|null $cCodART
     * @param int|null $nCodProj
     * @param string|null $cCidPrestServ
     * @param string|null $dDataRps
     * @param string|null $cNumRecibo
     * @param string|null $cEnvRecibo
     * @param string|null $cEnvLink
     * @param string|null $cEnvBoleto
     * @param string|null $cEnvPix
     * @param string|null $cEnviarPara
     * @param string|null $cEnvViaUnica
     * @param string|null $cCodDepto
     * @param float|null $nPerc
     * @param float|null $nValor
     * @param string|null $nValorFixo
     * @param int|null $nCodServico
     * @param string|null $cCodIntServico
     * @param string|null $cTribServ
     * @param string|null $cCodServMun
     * @param string|null $cCodServLC116
     * @param float|null $nQtde
     * @param float|null $nValUnit
     * @param string|null $cTpDesconto
     * @param float|null $nValorDesconto
     * @param float|null $nAliqDesconto
     * @param float|null $nValorOutrasRetencoes
     * @param float|null $nValorAcrescimos
     * @param string|null $cDescServ
     * @param string|null $cRetemISS
     * @param string|null $cDadosAdicItem
     * @param string|null $cNbs
     * @param string|null $cNaoGerarFinanceiro
     * @param string|null $cCodCategItem
     * @param int|null $nSeqItem
     * @param int|null $nIdItem
     * @param string|null $cAcaoItem
     * @param string|null $cModeloNF
     * @param string|null $cCFOP
     * @param string|null $cClassifServico
     * @param string|null $cTipoReceita
     * @param string|null $cTipoUtilizacao
     * @param string|null $cFixarISS
     * @param float|null $nAliqISS
     * @param float|null $nBaseISS
     * @param float|null $nTotDeducao
     * @param float|null $nValorISS
     * @param string|null $cUtilizaValorImposto
     * @param string|null $cFixarIRRF
     * @param float|null $nAliqIRRF
     * @param float|null $nValorIRRF
     * @param string|null $cRetemIRRF
     * @param string|null $cFixarPIS
     * @param float|null $nAliqPIS
     * @param float|null $nValorPIS
     * @param string|null $cRetemPIS
     * @param string|null $cFixarCOFINS
     * @param float|null $nAliqCOFINS
     * @param float|null $nValorCOFINS
     * @param string|null $cRetemCOFINS
     * @param string|null $cFixarCSLL
     * @param float|null $nAliqCSLL
     * @param float|null $nValorCSLL
     * @param string|null $cRetemCSLL
     * @param string|null $cFixarINSS
     * @param float|null $nAliqINSS
     * @param float|null $nValorINSS
     * @param string|null $cRetemINSS
     * @param float|null $nAliqRedBaseINSS
     * @param float|null $nAliqRedBaseCOFINS
     * @param float|null $nAliqRedBasePIS
     * @param bool|null $lDeduzISS
     * @param int|null $nParcela
     * @param string|null $dDtVenc
     * @param float|null $nPercentual
     * @param int|null $nDias
     * @param string|null $tipo_documento
     * @param string|null $meio_pagamento
     * @param string|null $nsu
     * @param string|null $nao_gerar_boleto
     * @param string|null $parcela_adiantamento
     * @param string|null $categoria_adiantamento
     * @param int|null $conta_corrente_adiantamento
     * @param string|null $cObsOS
     * @param string|null $cCancelada
     * @param string|null $cFaturada
     * @param string|null $cAmbiente
     * @param string|null $dDtInc
     * @param string|null $cHrInc
     * @param string|null $dDtAlt
     * @param string|null $cHrAlt
     * @param string|null $dDtFat
     * @param string|null $cHrFat
     * @param string|null $dDtCanc
     * @param string|null $cHrCanc
     * @param string|null $cOrigem
     * @param int|null $nIdItemPU
     * @param string|null $cAcaoItemPU
     * @param int|null $nCodProdutoPU
     * @param float|null $nQtdePU
     * @param int|null $codigo_local_estoque
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->cCodIntOS = null;
        $this->nCodOS = null;
        $this->cNumOS = null;
        $this->cCodIntCli = null;
        $this->nCodCli = null;
        $this->dDtPrevisao = null;
        $this->cEtapa = null;
        $this->nCodVend = null;
        $this->nQtdeParc = null;
        $this->cCodParc = null;
        $this->nValorTotal = null;
        $this->nValorTotalImpRet = null;
        $this->nCodCtr = null;
        $this->cCodCateg = null;
        $this->nCodCC = null;
        $this->cNumPedido = null;
        $this->cNumContrato = null;
        $this->cContato = null;
        $this->cDadosAdicNF = null;
        $this->cCodObra = null;
        $this->cCodART = null;
        $this->nCodProj = null;
        $this->cCidPrestServ = null;
        $this->dDataRps = null;
        $this->cNumRecibo = null;
        $this->cEnvRecibo = null;
        $this->cEnvLink = null;
        $this->cEnvBoleto = null;
        $this->cEnvPix = null;
        $this->cEnviarPara = null;
        $this->cEnvViaUnica = null;
        $this->cCodDepto = null;
        $this->nPerc = null;
        $this->nValor = null;
        $this->nValorFixo = null;
        $this->nCodServico = null;
        $this->cCodIntServico = null;
        $this->cTribServ = null;
        $this->cCodServMun = null;
        $this->cCodServLC116 = null;
        $this->nQtde = null;
        $this->nValUnit = null;
        $this->cTpDesconto = null;
        $this->nValorDesconto = null;
        $this->nAliqDesconto = null;
        $this->nValorOutrasRetencoes = null;
        $this->nValorAcrescimos = null;
        $this->cDescServ = null;
        $this->cRetemISS = null;
        $this->cDadosAdicItem = null;
        $this->cNbs = null;
        $this->cNaoGerarFinanceiro = null;
        $this->cCodCategItem = null;
        $this->nSeqItem = null;
        $this->nIdItem = null;
        $this->cAcaoItem = null;
        $this->cModeloNF = null;
        $this->cCFOP = null;
        $this->cClassifServico = null;
        $this->cTipoReceita = null;
        $this->cTipoUtilizacao = null;
        $this->cFixarISS = null;
        $this->nAliqISS = null;
        $this->nBaseISS = null;
        $this->nTotDeducao = null;
        $this->nValorISS = null;
        $this->cUtilizaValorImposto = null;
        $this->cFixarIRRF = null;
        $this->nAliqIRRF = null;
        $this->nValorIRRF = null;
        $this->cRetemIRRF = null;
        $this->cFixarPIS = null;
        $this->nAliqPIS = null;
        $this->nValorPIS = null;
        $this->cRetemPIS = null;
        $this->cFixarCOFINS = null;
        $this->nAliqCOFINS = null;
        $this->nValorCOFINS = null;
        $this->cRetemCOFINS = null;
        $this->cFixarCSLL = null;
        $this->nAliqCSLL = null;
        $this->nValorCSLL = null;
        $this->cRetemCSLL = null;
        $this->cFixarINSS = null;
        $this->nAliqINSS = null;
        $this->nValorINSS = null;
        $this->cRetemINSS = null;
        $this->nAliqRedBaseINSS = null;
        $this->nAliqRedBaseCOFINS = null;
        $this->nAliqRedBasePIS = null;
        $this->lDeduzISS = null;
        $this->nParcela = null;
        $this->dDtVenc = null;
        $this->nPercentual = null;
        $this->nDias = null;
        $this->tipo_documento = null;
        $this->meio_pagamento = null;
        $this->nsu = null;
        $this->nao_gerar_boleto = null;
        $this->parcela_adiantamento = null;
        $this->categoria_adiantamento = null;
        $this->conta_corrente_adiantamento = null;
        $this->cObsOS = null;
        $this->cCancelada = null;
        $this->cFaturada = null;
        $this->cAmbiente = null;
        $this->dDtInc = null;
        $this->cHrInc = null;
        $this->dDtAlt = null;
        $this->cHrAlt = null;
        $this->dDtFat = null;
        $this->cHrFat = null;
        $this->dDtCanc = null;
        $this->cHrCanc = null;
        $this->cOrigem = null;
        $this->nIdItemPU = null;
        $this->cAcaoItemPU = null;
        $this->nCodProdutoPU = null;
        $this->nQtdePU = null;
        $this->codigo_local_estoque = null;
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
     * @return OrdemServico
     */
    public function setCCodIntOS(?string $cCodIntOS): OrdemServico
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
     * @return OrdemServico
     */
    public function setNCodOS(?int $nCodOS): OrdemServico
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
     * @return OrdemServico
     */
    public function setCNumOS(?string $cNumOS): OrdemServico
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
     * @return OrdemServico
     */
    public function setCCodIntCli(?string $cCodIntCli): OrdemServico
    {
        $this->cCodIntCli = $cCodIntCli;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodCli(): ?int
    {
        return $this->nCodCli;
    }

    /**
     * @param int|null $nCodCli
     * @return OrdemServico
     */
    public function setNCodCli(?int $nCodCli): OrdemServico
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
     * @return OrdemServico
     */
    public function setDDtPrevisao(?string $dDtPrevisao): OrdemServico
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
     * @return OrdemServico
     */
    public function setCEtapa(?string $cEtapa): OrdemServico
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
     * @return OrdemServico
     */
    public function setNCodVend(?int $nCodVend): OrdemServico
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
     * @return OrdemServico
     */
    public function setNQtdeParc(?int $nQtdeParc): OrdemServico
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
     * @return OrdemServico
     */
    public function setCCodParc(?string $cCodParc): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValorTotal(?float $nValorTotal): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValorTotalImpRet(?float $nValorTotalImpRet): OrdemServico
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
     * @return OrdemServico
     */
    public function setNCodCtr(?int $nCodCtr): OrdemServico
    {
        $this->nCodCtr = $nCodCtr;
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
     * @return OrdemServico
     */
    public function setCCodCateg(?string $cCodCateg): OrdemServico
    {
        $this->cCodCateg = $cCodCateg;
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
     * @return OrdemServico
     */
    public function setNCodCC(?int $nCodCC): OrdemServico
    {
        $this->nCodCC = $nCodCC;
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
     * @return OrdemServico
     */
    public function setCNumPedido(?string $cNumPedido): OrdemServico
    {
        $this->cNumPedido = $cNumPedido;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumContrato(): ?string
    {
        return $this->cNumContrato;
    }

    /**
     * @param string|null $cNumContrato
     * @return OrdemServico
     */
    public function setCNumContrato(?string $cNumContrato): OrdemServico
    {
        $this->cNumContrato = $cNumContrato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCContato(): ?string
    {
        return $this->cContato;
    }

    /**
     * @param string|null $cContato
     * @return OrdemServico
     */
    public function setCContato(?string $cContato): OrdemServico
    {
        $this->cContato = $cContato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDadosAdicNF(): ?string
    {
        return $this->cDadosAdicNF;
    }

    /**
     * @param string|null $cDadosAdicNF
     * @return OrdemServico
     */
    public function setCDadosAdicNF(?string $cDadosAdicNF): OrdemServico
    {
        $this->cDadosAdicNF = $cDadosAdicNF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodObra(): ?string
    {
        return $this->cCodObra;
    }

    /**
     * @param string|null $cCodObra
     * @return OrdemServico
     */
    public function setCCodObra(?string $cCodObra): OrdemServico
    {
        $this->cCodObra = $cCodObra;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodART(): ?string
    {
        return $this->cCodART;
    }

    /**
     * @param string|null $cCodART
     * @return OrdemServico
     */
    public function setCCodART(?string $cCodART): OrdemServico
    {
        $this->cCodART = $cCodART;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodProj(): ?int
    {
        return $this->nCodProj;
    }

    /**
     * @param int|null $nCodProj
     * @return OrdemServico
     */
    public function setNCodProj(?int $nCodProj): OrdemServico
    {
        $this->nCodProj = $nCodProj;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCidPrestServ(): ?string
    {
        return $this->cCidPrestServ;
    }

    /**
     * @param string|null $cCidPrestServ
     * @return OrdemServico
     */
    public function setCCidPrestServ(?string $cCidPrestServ): OrdemServico
    {
        $this->cCidPrestServ = $cCidPrestServ;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDataRps(): ?string
    {
        return $this->dDataRps;
    }

    /**
     * @param string|null $dDataRps
     * @return OrdemServico
     */
    public function setDDataRps(?string $dDataRps): OrdemServico
    {
        $this->dDataRps = $dDataRps;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumRecibo(): ?string
    {
        return $this->cNumRecibo;
    }

    /**
     * @param string|null $cNumRecibo
     * @return OrdemServico
     */
    public function setCNumRecibo(?string $cNumRecibo): OrdemServico
    {
        $this->cNumRecibo = $cNumRecibo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvRecibo(): ?string
    {
        return $this->cEnvRecibo;
    }

    /**
     * @param string|null $cEnvRecibo
     * @return OrdemServico
     */
    public function setCEnvRecibo(?string $cEnvRecibo): OrdemServico
    {
        $this->cEnvRecibo = $cEnvRecibo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvLink(): ?string
    {
        return $this->cEnvLink;
    }

    /**
     * @param string|null $cEnvLink
     * @return OrdemServico
     */
    public function setCEnvLink(?string $cEnvLink): OrdemServico
    {
        $this->cEnvLink = $cEnvLink;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvBoleto(): ?string
    {
        return $this->cEnvBoleto;
    }

    /**
     * @param string|null $cEnvBoleto
     * @return OrdemServico
     */
    public function setCEnvBoleto(?string $cEnvBoleto): OrdemServico
    {
        $this->cEnvBoleto = $cEnvBoleto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvPix(): ?string
    {
        return $this->cEnvPix;
    }

    /**
     * @param string|null $cEnvPix
     * @return OrdemServico
     */
    public function setCEnvPix(?string $cEnvPix): OrdemServico
    {
        $this->cEnvPix = $cEnvPix;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnviarPara(): ?string
    {
        return $this->cEnviarPara;
    }

    /**
     * @param string|null $cEnviarPara
     * @return OrdemServico
     */
    public function setCEnviarPara(?string $cEnviarPara): OrdemServico
    {
        $this->cEnviarPara = $cEnviarPara;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvViaUnica(): ?string
    {
        return $this->cEnvViaUnica;
    }

    /**
     * @param string|null $cEnvViaUnica
     * @return OrdemServico
     */
    public function setCEnvViaUnica(?string $cEnvViaUnica): OrdemServico
    {
        $this->cEnvViaUnica = $cEnvViaUnica;
        return $this;
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
     * @return OrdemServico
     */
    public function setCCodDepto(?string $cCodDepto): OrdemServico
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
     * @return OrdemServico
     */
    public function setNPerc(?float $nPerc): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValor(?float $nValor): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValorFixo(?string $nValorFixo): OrdemServico
    {
        $this->nValorFixo = $nValorFixo;
        return $this;
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
     * @return OrdemServico
     */
    public function setNCodServico(?int $nCodServico): OrdemServico
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
     * @return OrdemServico
     */
    public function setCCodIntServico(?string $cCodIntServico): OrdemServico
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
     * @return OrdemServico
     */
    public function setCTribServ(?string $cTribServ): OrdemServico
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
     * @return OrdemServico
     */
    public function setCCodServMun(?string $cCodServMun): OrdemServico
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
     * @return OrdemServico
     */
    public function setCCodServLC116(?string $cCodServLC116): OrdemServico
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
     * @return OrdemServico
     */
    public function setNQtde(?float $nQtde): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValUnit(?float $nValUnit): OrdemServico
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
     * @return OrdemServico
     */
    public function setCTpDesconto(?string $cTpDesconto): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValorDesconto(?float $nValorDesconto): OrdemServico
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
     * @return OrdemServico
     */
    public function setNAliqDesconto(?float $nAliqDesconto): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValorOutrasRetencoes(?float $nValorOutrasRetencoes): OrdemServico
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
     * @return OrdemServico
     */
    public function setNValorAcrescimos(?float $nValorAcrescimos): OrdemServico
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
     * @return OrdemServico
     */
    public function setCDescServ(?string $cDescServ): OrdemServico
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
     * @return OrdemServico
     */
    public function setCRetemISS(?string $cRetemISS): OrdemServico
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
     * @return OrdemServico
     */
    public function setCDadosAdicItem(?string $cDadosAdicItem): OrdemServico
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
     * @return OrdemServico
     */
    public function setCNbs(?string $cNbs): OrdemServico
    {
        $this->cNbs = $cNbs;
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
     * @return OrdemServico
     */
    public function setCNaoGerarFinanceiro(?string $cNaoGerarFinanceiro): OrdemServico
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
     * @return OrdemServico
     */
    public function setCCodCategItem(?string $cCodCategItem): OrdemServico
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
     * @return OrdemServico
     */
    public function setNSeqItem(?int $nSeqItem): OrdemServico
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
     * @return OrdemServico
     */
    public function setNIdItem(?int $nIdItem): OrdemServico
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
     * @return OrdemServico
     */
    public function setCAcaoItem(?string $cAcaoItem): OrdemServico
    {
        $this->cAcaoItem = $cAcaoItem;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCModeloNF(): ?string
    {
        return $this->cModeloNF;
    }

    /**
     * @param string|null $cModeloNF
     * @return OrdemServico
     */
    public function setCModeloNF(?string $cModeloNF): OrdemServico
    {
        $this->cModeloNF = $cModeloNF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCFOP(): ?string
    {
        return $this->cCFOP;
    }

    /**
     * @param string|null $cCFOP
     * @return OrdemServico
     */
    public function setCCFOP(?string $cCFOP): OrdemServico
    {
        $this->cCFOP = $cCFOP;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCClassifServico(): ?string
    {
        return $this->cClassifServico;
    }

    /**
     * @param string|null $cClassifServico
     * @return OrdemServico
     */
    public function setCClassifServico(?string $cClassifServico): OrdemServico
    {
        $this->cClassifServico = $cClassifServico;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTipoReceita(): ?string
    {
        return $this->cTipoReceita;
    }

    /**
     * @param string|null $cTipoReceita
     * @return OrdemServico
     */
    public function setCTipoReceita(?string $cTipoReceita): OrdemServico
    {
        $this->cTipoReceita = $cTipoReceita;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTipoUtilizacao(): ?string
    {
        return $this->cTipoUtilizacao;
    }

    /**
     * @param string|null $cTipoUtilizacao
     * @return OrdemServico
     */
    public function setCTipoUtilizacao(?string $cTipoUtilizacao): OrdemServico
    {
        $this->cTipoUtilizacao = $cTipoUtilizacao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarISS(): ?string
    {
        return $this->cFixarISS;
    }

    /**
     * @param string|null $cFixarISS
     * @return OrdemServico
     */
    public function setCFixarISS(?string $cFixarISS): OrdemServico
    {
        $this->cFixarISS = $cFixarISS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqISS(): ?float
    {
        return $this->nAliqISS;
    }

    /**
     * @param float|null $nAliqISS
     * @return OrdemServico
     */
    public function setNAliqISS(?float $nAliqISS): OrdemServico
    {
        $this->nAliqISS = $nAliqISS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNBaseISS(): ?float
    {
        return $this->nBaseISS;
    }

    /**
     * @param float|null $nBaseISS
     * @return OrdemServico
     */
    public function setNBaseISS(?float $nBaseISS): OrdemServico
    {
        $this->nBaseISS = $nBaseISS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNTotDeducao(): ?float
    {
        return $this->nTotDeducao;
    }

    /**
     * @param float|null $nTotDeducao
     * @return OrdemServico
     */
    public function setNTotDeducao(?float $nTotDeducao): OrdemServico
    {
        $this->nTotDeducao = $nTotDeducao;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorISS(): ?float
    {
        return $this->nValorISS;
    }

    /**
     * @param float|null $nValorISS
     * @return OrdemServico
     */
    public function setNValorISS(?float $nValorISS): OrdemServico
    {
        $this->nValorISS = $nValorISS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCUtilizaValorImposto(): ?string
    {
        return $this->cUtilizaValorImposto;
    }

    /**
     * @param string|null $cUtilizaValorImposto
     * @return OrdemServico
     */
    public function setCUtilizaValorImposto(?string $cUtilizaValorImposto): OrdemServico
    {
        $this->cUtilizaValorImposto = $cUtilizaValorImposto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarIRRF(): ?string
    {
        return $this->cFixarIRRF;
    }

    /**
     * @param string|null $cFixarIRRF
     * @return OrdemServico
     */
    public function setCFixarIRRF(?string $cFixarIRRF): OrdemServico
    {
        $this->cFixarIRRF = $cFixarIRRF;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqIRRF(): ?float
    {
        return $this->nAliqIRRF;
    }

    /**
     * @param float|null $nAliqIRRF
     * @return OrdemServico
     */
    public function setNAliqIRRF(?float $nAliqIRRF): OrdemServico
    {
        $this->nAliqIRRF = $nAliqIRRF;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorIRRF(): ?float
    {
        return $this->nValorIRRF;
    }

    /**
     * @param float|null $nValorIRRF
     * @return OrdemServico
     */
    public function setNValorIRRF(?float $nValorIRRF): OrdemServico
    {
        $this->nValorIRRF = $nValorIRRF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemIRRF(): ?string
    {
        return $this->cRetemIRRF;
    }

    /**
     * @param string|null $cRetemIRRF
     * @return OrdemServico
     */
    public function setCRetemIRRF(?string $cRetemIRRF): OrdemServico
    {
        $this->cRetemIRRF = $cRetemIRRF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarPIS(): ?string
    {
        return $this->cFixarPIS;
    }

    /**
     * @param string|null $cFixarPIS
     * @return OrdemServico
     */
    public function setCFixarPIS(?string $cFixarPIS): OrdemServico
    {
        $this->cFixarPIS = $cFixarPIS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqPIS(): ?float
    {
        return $this->nAliqPIS;
    }

    /**
     * @param float|null $nAliqPIS
     * @return OrdemServico
     */
    public function setNAliqPIS(?float $nAliqPIS): OrdemServico
    {
        $this->nAliqPIS = $nAliqPIS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorPIS(): ?float
    {
        return $this->nValorPIS;
    }

    /**
     * @param float|null $nValorPIS
     * @return OrdemServico
     */
    public function setNValorPIS(?float $nValorPIS): OrdemServico
    {
        $this->nValorPIS = $nValorPIS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemPIS(): ?string
    {
        return $this->cRetemPIS;
    }

    /**
     * @param string|null $cRetemPIS
     * @return OrdemServico
     */
    public function setCRetemPIS(?string $cRetemPIS): OrdemServico
    {
        $this->cRetemPIS = $cRetemPIS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarCOFINS(): ?string
    {
        return $this->cFixarCOFINS;
    }

    /**
     * @param string|null $cFixarCOFINS
     * @return OrdemServico
     */
    public function setCFixarCOFINS(?string $cFixarCOFINS): OrdemServico
    {
        $this->cFixarCOFINS = $cFixarCOFINS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqCOFINS(): ?float
    {
        return $this->nAliqCOFINS;
    }

    /**
     * @param float|null $nAliqCOFINS
     * @return OrdemServico
     */
    public function setNAliqCOFINS(?float $nAliqCOFINS): OrdemServico
    {
        $this->nAliqCOFINS = $nAliqCOFINS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorCOFINS(): ?float
    {
        return $this->nValorCOFINS;
    }

    /**
     * @param float|null $nValorCOFINS
     * @return OrdemServico
     */
    public function setNValorCOFINS(?float $nValorCOFINS): OrdemServico
    {
        $this->nValorCOFINS = $nValorCOFINS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemCOFINS(): ?string
    {
        return $this->cRetemCOFINS;
    }

    /**
     * @param string|null $cRetemCOFINS
     * @return OrdemServico
     */
    public function setCRetemCOFINS(?string $cRetemCOFINS): OrdemServico
    {
        $this->cRetemCOFINS = $cRetemCOFINS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarCSLL(): ?string
    {
        return $this->cFixarCSLL;
    }

    /**
     * @param string|null $cFixarCSLL
     * @return OrdemServico
     */
    public function setCFixarCSLL(?string $cFixarCSLL): OrdemServico
    {
        $this->cFixarCSLL = $cFixarCSLL;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqCSLL(): ?float
    {
        return $this->nAliqCSLL;
    }

    /**
     * @param float|null $nAliqCSLL
     * @return OrdemServico
     */
    public function setNAliqCSLL(?float $nAliqCSLL): OrdemServico
    {
        $this->nAliqCSLL = $nAliqCSLL;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorCSLL(): ?float
    {
        return $this->nValorCSLL;
    }

    /**
     * @param float|null $nValorCSLL
     * @return OrdemServico
     */
    public function setNValorCSLL(?float $nValorCSLL): OrdemServico
    {
        $this->nValorCSLL = $nValorCSLL;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemCSLL(): ?string
    {
        return $this->cRetemCSLL;
    }

    /**
     * @param string|null $cRetemCSLL
     * @return OrdemServico
     */
    public function setCRetemCSLL(?string $cRetemCSLL): OrdemServico
    {
        $this->cRetemCSLL = $cRetemCSLL;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarINSS(): ?string
    {
        return $this->cFixarINSS;
    }

    /**
     * @param string|null $cFixarINSS
     * @return OrdemServico
     */
    public function setCFixarINSS(?string $cFixarINSS): OrdemServico
    {
        $this->cFixarINSS = $cFixarINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqINSS(): ?float
    {
        return $this->nAliqINSS;
    }

    /**
     * @param float|null $nAliqINSS
     * @return OrdemServico
     */
    public function setNAliqINSS(?float $nAliqINSS): OrdemServico
    {
        $this->nAliqINSS = $nAliqINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorINSS(): ?float
    {
        return $this->nValorINSS;
    }

    /**
     * @param float|null $nValorINSS
     * @return OrdemServico
     */
    public function setNValorINSS(?float $nValorINSS): OrdemServico
    {
        $this->nValorINSS = $nValorINSS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemINSS(): ?string
    {
        return $this->cRetemINSS;
    }

    /**
     * @param string|null $cRetemINSS
     * @return OrdemServico
     */
    public function setCRetemINSS(?string $cRetemINSS): OrdemServico
    {
        $this->cRetemINSS = $cRetemINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqRedBaseINSS(): ?float
    {
        return $this->nAliqRedBaseINSS;
    }

    /**
     * @param float|null $nAliqRedBaseINSS
     * @return OrdemServico
     */
    public function setNAliqRedBaseINSS(?float $nAliqRedBaseINSS): OrdemServico
    {
        $this->nAliqRedBaseINSS = $nAliqRedBaseINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqRedBaseCOFINS(): ?float
    {
        return $this->nAliqRedBaseCOFINS;
    }

    /**
     * @param float|null $nAliqRedBaseCOFINS
     * @return OrdemServico
     */
    public function setNAliqRedBaseCOFINS(?float $nAliqRedBaseCOFINS): OrdemServico
    {
        $this->nAliqRedBaseCOFINS = $nAliqRedBaseCOFINS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqRedBasePIS(): ?float
    {
        return $this->nAliqRedBasePIS;
    }

    /**
     * @param float|null $nAliqRedBasePIS
     * @return OrdemServico
     */
    public function setNAliqRedBasePIS(?float $nAliqRedBasePIS): OrdemServico
    {
        $this->nAliqRedBasePIS = $nAliqRedBasePIS;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLDeduzISS(): ?bool
    {
        return $this->lDeduzISS;
    }

    /**
     * @param bool|null $lDeduzISS
     * @return OrdemServico
     */
    public function setLDeduzISS(?bool $lDeduzISS): OrdemServico
    {
        $this->lDeduzISS = $lDeduzISS;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNParcela(): ?int
    {
        return $this->nParcela;
    }

    /**
     * @param int|null $nParcela
     * @return OrdemServico
     */
    public function setNParcela(?int $nParcela): OrdemServico
    {
        $this->nParcela = $nParcela;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtVenc(): ?string
    {
        return $this->dDtVenc;
    }

    /**
     * @param string|null $dDtVenc
     * @return OrdemServico
     */
    public function setDDtVenc(?string $dDtVenc): OrdemServico
    {
        $this->dDtVenc = $dDtVenc;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNPercentual(): ?float
    {
        return $this->nPercentual;
    }

    /**
     * @param float|null $nPercentual
     * @return OrdemServico
     */
    public function setNPercentual(?float $nPercentual): OrdemServico
    {
        $this->nPercentual = $nPercentual;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNDias(): ?int
    {
        return $this->nDias;
    }

    /**
     * @param int|null $nDias
     * @return OrdemServico
     */
    public function setNDias(?int $nDias): OrdemServico
    {
        $this->nDias = $nDias;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoDocumento(): ?string
    {
        return $this->tipo_documento;
    }

    /**
     * @param string|null $tipo_documento
     * @return OrdemServico
     */
    public function setTipoDocumento(?string $tipo_documento): OrdemServico
    {
        $this->tipo_documento = $tipo_documento;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMeioPagamento(): ?string
    {
        return $this->meio_pagamento;
    }

    /**
     * @param string|null $meio_pagamento
     * @return OrdemServico
     */
    public function setMeioPagamento(?string $meio_pagamento): OrdemServico
    {
        $this->meio_pagamento = $meio_pagamento;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNsu(): ?string
    {
        return $this->nsu;
    }

    /**
     * @param string|null $nsu
     * @return OrdemServico
     */
    public function setNsu(?string $nsu): OrdemServico
    {
        $this->nsu = $nsu;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNaoGerarBoleto(): ?string
    {
        return $this->nao_gerar_boleto;
    }

    /**
     * @param string|null $nao_gerar_boleto
     * @return OrdemServico
     */
    public function setNaoGerarBoleto(?string $nao_gerar_boleto): OrdemServico
    {
        $this->nao_gerar_boleto = $nao_gerar_boleto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getParcelaAdiantamento(): ?string
    {
        return $this->parcela_adiantamento;
    }

    /**
     * @param string|null $parcela_adiantamento
     * @return OrdemServico
     */
    public function setParcelaAdiantamento(?string $parcela_adiantamento): OrdemServico
    {
        $this->parcela_adiantamento = $parcela_adiantamento;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategoriaAdiantamento(): ?string
    {
        return $this->categoria_adiantamento;
    }

    /**
     * @param string|null $categoria_adiantamento
     * @return OrdemServico
     */
    public function setCategoriaAdiantamento(?string $categoria_adiantamento): OrdemServico
    {
        $this->categoria_adiantamento = $categoria_adiantamento;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getContaCorrenteAdiantamento(): ?int
    {
        return $this->conta_corrente_adiantamento;
    }

    /**
     * @param int|null $conta_corrente_adiantamento
     * @return OrdemServico
     */
    public function setContaCorrenteAdiantamento(?int $conta_corrente_adiantamento): OrdemServico
    {
        $this->conta_corrente_adiantamento = $conta_corrente_adiantamento;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCObsOS(): ?string
    {
        return $this->cObsOS;
    }

    /**
     * @param string|null $cObsOS
     * @return OrdemServico
     */
    public function setCObsOS(?string $cObsOS): OrdemServico
    {
        $this->cObsOS = $cObsOS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCancelada(): ?string
    {
        return $this->cCancelada;
    }

    /**
     * @param string|null $cCancelada
     * @return OrdemServico
     */
    public function setCCancelada(?string $cCancelada): OrdemServico
    {
        $this->cCancelada = $cCancelada;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFaturada(): ?string
    {
        return $this->cFaturada;
    }

    /**
     * @param string|null $cFaturada
     * @return OrdemServico
     */
    public function setCFaturada(?string $cFaturada): OrdemServico
    {
        $this->cFaturada = $cFaturada;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCAmbiente(): ?string
    {
        return $this->cAmbiente;
    }

    /**
     * @param string|null $cAmbiente
     * @return OrdemServico
     */
    public function setCAmbiente(?string $cAmbiente): OrdemServico
    {
        $this->cAmbiente = $cAmbiente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtInc(): ?string
    {
        return $this->dDtInc;
    }

    /**
     * @param string|null $dDtInc
     * @return OrdemServico
     */
    public function setDDtInc(?string $dDtInc): OrdemServico
    {
        $this->dDtInc = $dDtInc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrInc(): ?string
    {
        return $this->cHrInc;
    }

    /**
     * @param string|null $cHrInc
     * @return OrdemServico
     */
    public function setCHrInc(?string $cHrInc): OrdemServico
    {
        $this->cHrInc = $cHrInc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtAlt(): ?string
    {
        return $this->dDtAlt;
    }

    /**
     * @param string|null $dDtAlt
     * @return OrdemServico
     */
    public function setDDtAlt(?string $dDtAlt): OrdemServico
    {
        $this->dDtAlt = $dDtAlt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrAlt(): ?string
    {
        return $this->cHrAlt;
    }

    /**
     * @param string|null $cHrAlt
     * @return OrdemServico
     */
    public function setCHrAlt(?string $cHrAlt): OrdemServico
    {
        $this->cHrAlt = $cHrAlt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtFat(): ?string
    {
        return $this->dDtFat;
    }

    /**
     * @param string|null $dDtFat
     * @return OrdemServico
     */
    public function setDDtFat(?string $dDtFat): OrdemServico
    {
        $this->dDtFat = $dDtFat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrFat(): ?string
    {
        return $this->cHrFat;
    }

    /**
     * @param string|null $cHrFat
     * @return OrdemServico
     */
    public function setCHrFat(?string $cHrFat): OrdemServico
    {
        $this->cHrFat = $cHrFat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtCanc(): ?string
    {
        return $this->dDtCanc;
    }

    /**
     * @param string|null $dDtCanc
     * @return OrdemServico
     */
    public function setDDtCanc(?string $dDtCanc): OrdemServico
    {
        $this->dDtCanc = $dDtCanc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrCanc(): ?string
    {
        return $this->cHrCanc;
    }

    /**
     * @param string|null $cHrCanc
     * @return OrdemServico
     */
    public function setCHrCanc(?string $cHrCanc): OrdemServico
    {
        $this->cHrCanc = $cHrCanc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCOrigem(): ?string
    {
        return $this->cOrigem;
    }

    /**
     * @param string|null $cOrigem
     * @return OrdemServico
     */
    public function setCOrigem(?string $cOrigem): OrdemServico
    {
        $this->cOrigem = $cOrigem;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNIdItemPU(): ?int
    {
        return $this->nIdItemPU;
    }

    /**
     * @param int|null $nIdItemPU
     * @return OrdemServico
     */
    public function setNIdItemPU(?int $nIdItemPU): OrdemServico
    {
        $this->nIdItemPU = $nIdItemPU;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCAcaoItemPU(): ?string
    {
        return $this->cAcaoItemPU;
    }

    /**
     * @param string|null $cAcaoItemPU
     * @return OrdemServico
     */
    public function setCAcaoItemPU(?string $cAcaoItemPU): OrdemServico
    {
        $this->cAcaoItemPU = $cAcaoItemPU;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodProdutoPU(): ?int
    {
        return $this->nCodProdutoPU;
    }

    /**
     * @param int|null $nCodProdutoPU
     * @return OrdemServico
     */
    public function setNCodProdutoPU(?int $nCodProdutoPU): OrdemServico
    {
        $this->nCodProdutoPU = $nCodProdutoPU;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNQtdePU(): ?float
    {
        return $this->nQtdePU;
    }

    /**
     * @param float|null $nQtdePU
     * @return OrdemServico
     */
    public function setNQtdePU(?float $nQtdePU): OrdemServico
    {
        $this->nQtdePU = $nQtdePU;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoLocalEstoque(): ?int
    {
        return $this->codigo_local_estoque;
    }

    /**
     * @param int|null $codigo_local_estoque
     * @return OrdemServico
     */
    public function setCodigoLocalEstoque(?int $codigo_local_estoque): OrdemServico
    {
        $this->codigo_local_estoque = $codigo_local_estoque;
        return $this;
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function listarOS(?array $param = null): object
    {
        return $this->call("servicos/os/#ListarOS", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function consultarOS(?array $param = null): object
    {
        return $this->call("servicos/os/#ConsultarOS", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function incluirOS(?array $param = null): object
    {
        return $this->call("servicos/os/#IncluirOS", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function alterarOS(?array $param = null): object
    {
        return $this->call("servicos/os/#AlterarOS", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function excluirOS(?array $param = null): object
    {
        return $this->call("servicos/os/#ExcluirOS", $param);
    }



    /**
     * Parse props to array
     *
     * @param OrdemServico $os
     *
     * @return array
     */
    private function toArray(OrdemServico $os): array
    {
        return [

        'cCodIntOS' => $this->getCCodIntOS(),
        'nCodOS' => $this->getNCodOS(),
        'cNumOS' => $this->getCNumOS(),
        'cCodIntCli' => $this->getCCodIntCli(),
        'nCodCli' => $this->getNCodCli(),
        'dDtPrevisao' => $this->getDDtPrevisao(),
        'cEtapa' => $this->getCEtapa(),
        'nCodVend' => $this->getNCodVend(),
        'nQtdeParc' => $this->getNQtdeParc(),
        'cCodParc' => $this->getCCodParc(),
        'nValorTotal' => $this->getNValorTotal(),
        'nValorTotalImpRet' => $this->getNValorTotalImpRet(),
        'nCodCtr' => $this->getNCodCtr(),
        'cCodCateg' => $this->getCCodCateg(),
        'nCodCC' => $this->getNCodCC(),
        'cNumPedido' => $this->getCNumPedido(),
        'cNumContrato' => $this->getCNumContrato(),
        'cContato' => $this->getCContato(),
        'cDadosAdicNF' => $this->getCDadosAdicNF(),
        'cCodObra' => $this->getCCodObra(),
        'cCodART' => $this->getCCodART(),
        'nCodProj' => $this->getNCodProj(),
        'cCidPrestServ' => $this->getCCidPrestServ(),
        'dDataRps' => $this->getDDataRps(),
        'cNumRecibo' => $this->getCNumRecibo(),
        'cEnvRecibo' => $this->getCEnvRecibo(),
        'cEnvLink' => $this->getCEnvLink(),
        'cEnvBoleto' => $this->getCEnvBoleto(),
        'cEnvPix' => $this->getCEnvPix(),
        'cEnviarPara' => $this->getCEnviarPara(),
        'cEnvViaUnica' => $this->getCEnvViaUnica(),
        'cCodDepto' => $this->getCCodDepto(),
        'nPerc' => $this->getNPerc(),
        'nValor' => $this->getNValor(),
        'nValorFixo' => $this->getNValorFixo(),
        'nCodServico' => $this->getNCodServico(),
        'cCodIntServico' => $this->getCCodIntServico(),
        'cTribServ' => $this->getCTribServ(),
        'cCodServMun' => $this->getCCodServMun(),
        'cCodServLC116' => $this->getCCodServLC116(),
        'nQtde' => $this->getNQtde(),
        'nValUnit' => $this->getNValUnit(),
        'cTpDesconto' => $this->getCTpDesconto(),
        'nValorDesconto' => $this->getNValorDesconto(),
        'nAliqDesconto' => $this->getNAliqDesconto(),
        'nValorOutrasRetencoes' => $this->getNValorOutrasRetencoes(),
        'nValorAcrescimos' => $this->getNValorAcrescimos(),
        'cDescServ' => $this->getCDescServ(),
        'cRetemISS' => $this->getCRetemISS(),
        'cDadosAdicItem' => $this->getCDadosAdicItem(),
        'cNbs' => $this->getCNbs(),
        'cNaoGerarFinanceiro' => $this->getCNaoGerarFinanceiro(),
        'cCodCategItem' => $this->getCCodCategItem(),
        'nSeqItem' => $this->getNSeqItem(),
        'nIdItem' => $this->getNIdItem(),
        'cAcaoItem' => $this->getCAcaoItem(),
        'cModeloNF' => $this->getCModeloNF(),
        'cCFOP' => $this->getCCFOP(),
        'cClassifServico' => $this->getCClassifServico(),
        'cTipoReceita' => $this->getCTipoReceita(),
        'cTipoUtilizacao' => $this->getCTipoUtilizacao(),
        'cFixarISS' => $this->getCFixarISS(),
        'nAliqISS' => $this->getNAliqISS(),
        'nBaseISS' => $this->getNBaseISS(),
        'nTotDeducao' => $this->getNTotDeducao(),
        'nValorISS' => $this->getNValorISS(),
        'cUtilizaValorImposto' => $this->getCUtilizaValorImposto(),
        'cFixarIRRF' => $this->getCFixarIRRF(),
        'nAliqIRRF' => $this->getNAliqIRRF(),
        'nValorIRRF' => $this->getNValorIRRF(),
        'cRetemIRRF' => $this->getCRetemIRRF(),
        'cFixarPIS' => $this->getCFixarPIS(),
        'nAliqPIS' => $this->getNAliqPIS(),
        'nValorPIS' => $this->getNValorPIS(),
        'cRetemPIS' => $this->getCRetemPIS(),
        'cFixarCOFINS' => $this->getCFixarCOFINS(),
        'nAliqCOFINS' => $this->getNAliqCOFINS(),
        'nValorCOFINS' => $this->getNValorCOFINS(),
        'cRetemCOFINS' => $this->getCRetemCOFINS(),
        'cFixarCSLL' => $this->getCFixarCSLL(),
        'nAliqCSLL' => $this->getNAliqCSLL(),
        'nValorCSLL' => $this->getNValorCSLL(),
        'cRetemCSLL' => $this->getCRetemCSLL(),
        'cFixarINSS' => $this->getCFixarINSS(),
        'nAliqINSS' => $this->getNAliqINSS(),
        'nValorINSS' => $this->getNValorINSS(),
        'cRetemINSS' => $this->getCRetemINSS(),
        'nAliqRedBaseINSS' => $this->getNAliqRedBaseINSS(),
        'nAliqRedBaseCOFINS' => $this->getNAliqRedBaseCOFINS(),
        'nAliqRedBasePIS' => $this->getNAliqRedBasePIS(),
        'lDeduzISS' => $this->getLDeduzISS(),
        'nParcela' => $this->getNParcela(),
        'dDtVenc' => $this->getDDtVenc(),
        'nPercentual' => $this->getNPercentual(),
        'nDias' => $this->getNDias(),
        'tipo_documento' => $this->getTipoDocumento(),
        'meio_pagamento' => $this->getMeioPagamento(),
        'nsu' => $this->getNsu(),
        'nao_gerar_boleto' => $this->getNaoGerarBoleto(),
        'parcela_adiantamento' => $this->getParcelaAdiantamento(),
        'categoria_adiantamento' => $this->getCategoriaAdiantamento(),
        'conta_corrente_adiantamento' => $this->getContaCorrenteAdiantamento(),
        'cObsOS' => $this->getCObsOS(),
        'cCancelada' => $this->getCCancelada(),
        'cFaturada' => $this->getCFaturada(),
        'cAmbiente' => $this->getCAmbiente(),
        'dDtInc' => $this->getDDtInc(),
        'cHrInc' => $this->getCHrInc(),
        'dDtAlt' => $this->getDDtAlt(),
        'cHrAlt' => $this->getCHrAlt(),
        'dDtFat' => $this->getDDtFat(),
        'cHrFat' => $this->getCHrFat(),
        'dDtCanc' => $this->getDDtCanc(),
        'cHrCanc' => $this->getCHrCanc(),
        'cOrigem' => $this->getCOrigem(),
        'nIdItemPU' => $this->getNIdItemPU(),
        'cAcaoItemPU' => $this->getCAcaoItemPU(),
        'nCodProdutoPU' => $this->getNCodProdutoPU(),
        'nQtdePU' => $this->getNQtdePU(),
        'codigo_local_estoque' => $this->getCodigoLocalEstoque(),
        ];
    }
}