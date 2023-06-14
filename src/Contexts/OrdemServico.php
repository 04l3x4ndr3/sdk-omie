<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;
use O4l3x4ndr3\SdkOmie\Types\OsCadastro;
use O4l3x4ndr3\SdkOmie\Types\OsListarRequest;

/**
 *
 */
class OrdemServico extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param OsListarRequest $osListarRequest
     *
     * @return object
     * @throws GuzzleException
     */
    public function listarOS(OsListarRequest $osListarRequest): object
    {
        return $this->call("servicos/os/#ListarOS", $osListarRequest->toArray());
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function consultarOS(?array $param = null): object
    {
        return $this->call("servicos/os/#ConsultarOS", $param);
    }

    /**
     * @param OsCadastro $osCadastro
     *
     * @return object
     * @throws GuzzleException
     */
    public function incluirOS(OsCadastro $osCadastro): object
    {
        return $this->call("servicos/os/#IncluirOS", $osCadastro->toArray());
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function alterarOS(?array $param = null): object
    {
        return $this->call("servicos/os/#AlterarOS", $param);
    }

    /**
     * @param array|null $param
     *
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
    public function toArray(OrdemServico $os): array
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
