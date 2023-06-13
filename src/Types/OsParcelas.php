<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsParcelas
{
    /** Número da Parcela.
     *
     * @var int|null
     */
    private ?int $nParcela;

    /** Data de Vencimento da parcela.
     *
     * @var string|null
     */
    private ?string $dDtVenc;

    /** Valor da Parcela.
     *
     * @var float|null
     */
    private ?float $nValor;

    /** Percentual do valor da parcela.
     *
     * @var float|null
     */
    private ?float $nPercentual;

    /** Número de dias até o vencimento.
     *
     * @var int|null
     */
    private ?int $nDias;

    /** Tipo de Documento.
     *
     * @var string|null
     */
    private ?string $tipo_documento;

    /** Meio de Pagamento - Utilizado apenas para emissão de NFS-e (campo "tPag" do XML).
     *
     * @var string|null
     */
    private ?string $meio_pagamento;

    /** Número Sequencial Único NSU - Para identificar vendas por cartões ou TransactionID TID - Para identificar vendas de comercio eletrônico.
     *
     * @var string|null
     */
    private ?string $nsu;

    /** Não gerar boleto para esta parcela ao emitir a nota fiscal.
     *
     * @var string|null
     */
    private ?string $nao_gerar_boleto;

    /** Está é uma parcela de Adiantamento do Cliente.
     *
     * @var string|null
     */
    private ?string $parcela_adiantamento;

    /** Código da Categoria para o Adiantamento.
     *
     * @var string|null
     */
    private ?string $categoria_adiantamento;

    /** Conta Corrente de Adiantamento.
     *
     * @var int|null
     */
    private ?int $conta_corrente_adiantamento;

    /**
     * @param int|null $nParcela
     * @param string|null $dDtVenc
     * @param float|null $nValor
     * @param float|null $nPercentual
     * @param int|null $nDias
     * @param string|null $tipo_documento
     * @param string|null $meio_pagamento
     * @param string|null $nsu
     * @param string|null $nao_gerar_boleto
     * @param string|null $parcela_adiantamento
     * @param string|null $categoria_adiantamento
     * @param int|null $conta_corrente_adiantamento
     */
    public function __construct(
        ?int $nParcela = null,
        ?string $dDtVenc = null,
        ?float $nValor = null,
        ?float $nPercentual = null,
        ?int $nDias = null,
        ?string $tipo_documento = null,
        ?string $meio_pagamento = null,
        ?string $nsu = null,
        ?string $nao_gerar_boleto = null,
        ?string $parcela_adiantamento = null,
        ?string $categoria_adiantamento = null,
        ?int $conta_corrente_adiantamento = null
    )
    {
        $this->nParcela = $nParcela;
        $this->dDtVenc = $dDtVenc;
        $this->nValor = $nValor;
        $this->nPercentual = $nPercentual;
        $this->nDias = $nDias;
        $this->tipo_documento = $tipo_documento;
        $this->meio_pagamento = $meio_pagamento;
        $this->nsu = $nsu;
        $this->nao_gerar_boleto = $nao_gerar_boleto;
        $this->parcela_adiantamento = $parcela_adiantamento;
        $this->categoria_adiantamento = $categoria_adiantamento;
        $this->conta_corrente_adiantamento = $conta_corrente_adiantamento;
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
     * @return OsParcelas
     */
    public function setNParcela(?int $nParcela): OsParcelas
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
     * @return OsParcelas
     */
    public function setDDtVenc(?string $dDtVenc): OsParcelas
    {
        $this->dDtVenc = $dDtVenc;
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
     * @return OsParcelas
     */
    public function setNValor(?float $nValor): OsParcelas
    {
        $this->nValor = $nValor;
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
     * @return OsParcelas
     */
    public function setNPercentual(?float $nPercentual): OsParcelas
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
     * @return OsParcelas
     */
    public function setNDias(?int $nDias): OsParcelas
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
     * @return OsParcelas
     */
    public function setTipoDocumento(?string $tipo_documento): OsParcelas
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
     * @return OsParcelas
     */
    public function setMeioPagamento(?string $meio_pagamento): OsParcelas
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
     * @return OsParcelas
     */
    public function setNsu(?string $nsu): OsParcelas
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
     * @return OsParcelas
     */
    public function setNaoGerarBoleto(?string $nao_gerar_boleto): OsParcelas
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
     * @return OsParcelas
     */
    public function setParcelaAdiantamento(?string $parcela_adiantamento): OsParcelas
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
     * @return OsParcelas
     */
    public function setCategoriaAdiantamento(?string $categoria_adiantamento): OsParcelas
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
     * @return OsParcelas
     */
    public function setContaCorrenteAdiantamento(?int $conta_corrente_adiantamento): OsParcelas
    {
        $this->conta_corrente_adiantamento = $conta_corrente_adiantamento;
        return $this;
    }

    public function toArray(): array {
        return array_filter([
            "nParcela" => $this->nParcela,
            "dDtVenc" => $this->dDtVenc,
            "nValor" => $this->nValor,
            "nPercentual" => $this->nPercentual,
            "nDias" => $this->nDias,
            "tipo_documento" => $this->tipo_documento,
            "meio_pagamento" => $this->meio_pagamento,
            "nsu" => $this->nsu,
            "nao_gerar_boleto" => $this->nao_gerar_boleto,
            "parcela_adiantamento" => $this->parcela_adiantamento,
            "categoria_adiantamento" => $this->categoria_adiantamento,
            "conta_corrente_adiantamento" => $this->conta_corrente_adiantamento,
        ], function ($v) {
            return !is_null($v);
        });
    }
}