<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class ContaReceberLancarRecebimento
{
    private int $codigo_lancamento;
    private string $codigo_lancamento_integracao;
    private int $codigo_baixa;
    private string $codigo_baixa_integracao;
    private int $codigo_conta_corrente;
    private string $codigo_conta_corrente_integracao;
    private float $valor;
    private float $juros;
    private float $desconto;
    private float $multa;
    private string $data;
    private string $observacao;
    private string $bloqueado;
    private string $conciliar_documento;
    private string $nsu;

    /**
     * @param int|null $codigo_lancamento
     * @param string|null $codigo_lancamento_integracao
     * @param int|null $codigo_baixa
     * @param string|null $codigo_baixa_integracao
     * @param int|null $codigo_conta_corrente
     * @param string|null $codigo_conta_corrente_integracao
     * @param float|null $valor
     * @param float|null $juros
     * @param float|null $desconto
     * @param float|null $multa
     * @param string|null $data
     * @param string|null $observacao
     * @param string|null $bloqueado
     * @param string|null $conciliar_documento
     * @param string|null $nsu
     */
    public function __construct(
        int $codigo_lancamento = null,
        string $codigo_lancamento_integracao = null,
        int $codigo_baixa = null,
        string $codigo_baixa_integracao = null,
        int $codigo_conta_corrente = null,
        string $codigo_conta_corrente_integracao = null,
        float $valor = null,
        float $juros = null,
        float $desconto = null,
        float $multa = null,
        string $data = null,
        string $observacao = null,
        string $bloqueado = null,
        string $conciliar_documento = null,
        string $nsu = null
    )
    {
        $this->codigo_lancamento = $codigo_lancamento;
        $this->codigo_lancamento_integracao = $codigo_lancamento_integracao;
        $this->codigo_baixa = $codigo_baixa;
        $this->codigo_baixa_integracao = $codigo_baixa_integracao;
        $this->codigo_conta_corrente = $codigo_conta_corrente;
        $this->codigo_conta_corrente_integracao = $codigo_conta_corrente_integracao;
        $this->valor = $valor;
        $this->juros = $juros;
        $this->desconto = $desconto;
        $this->multa = $multa;
        $this->data = $data;
        $this->observacao = $observacao;
        $this->bloqueado = $bloqueado;
        $this->conciliar_documento = $conciliar_documento;
        $this->nsu = $nsu;
    }

    public function getCodigoLancamento(): int
    {
        return $this->codigo_lancamento;
    }

    public function setCodigoLancamento(int $codigo_lancamento): ContaReceberLancarRecebimento
    {
        $this->codigo_lancamento = $codigo_lancamento;
        return $this;
    }

    public function getCodigoLancamentoIntegracao(): string
    {
        return $this->codigo_lancamento_integracao;
    }

    public function setCodigoLancamentoIntegracao(string $codigo_lancamento_integracao): ContaReceberLancarRecebimento
    {
        $this->codigo_lancamento_integracao = $codigo_lancamento_integracao;
        return $this;
    }

    public function getCodigoBaixa(): int
    {
        return $this->codigo_baixa;
    }

    public function setCodigoBaixa(int $codigo_baixa): ContaReceberLancarRecebimento
    {
        $this->codigo_baixa = $codigo_baixa;
        return $this;
    }

    public function getCodigoBaixaIntegracao(): string
    {
        return $this->codigo_baixa_integracao;
    }

    public function setCodigoBaixaIntegracao(string $codigo_baixa_integracao): ContaReceberLancarRecebimento
    {
        $this->codigo_baixa_integracao = $codigo_baixa_integracao;
        return $this;
    }

    public function getCodigoContaCorrente(): int
    {
        return $this->codigo_conta_corrente;
    }

    public function setCodigoContaCorrente(int $codigo_conta_corrente): ContaReceberLancarRecebimento
    {
        $this->codigo_conta_corrente = $codigo_conta_corrente;
        return $this;
    }

    public function getCodigoContaCorrenteIntegracao(): string
    {
        return $this->codigo_conta_corrente_integracao;
    }

    public function setCodigoContaCorrenteIntegracao(string $codigo_conta_corrente_integracao): ContaReceberLancarRecebimento
    {
        $this->codigo_conta_corrente_integracao = $codigo_conta_corrente_integracao;
        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): ContaReceberLancarRecebimento
    {
        $this->valor = $valor;
        return $this;
    }

    public function getJuros(): float
    {
        return $this->juros;
    }

    public function setJuros(float $juros): ContaReceberLancarRecebimento
    {
        $this->juros = $juros;
        return $this;
    }

    public function getDesconto(): float
    {
        return $this->desconto;
    }

    public function setDesconto(float $desconto): ContaReceberLancarRecebimento
    {
        $this->desconto = $desconto;
        return $this;
    }

    public function getMulta(): float
    {
        return $this->multa;
    }

    public function setMulta(float $multa): ContaReceberLancarRecebimento
    {
        $this->multa = $multa;
        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): ContaReceberLancarRecebimento
    {
        $this->data = $data;
        return $this;
    }

    public function getObservacao(): string
    {
        return $this->observacao;
    }

    public function setObservacao(string $observacao): ContaReceberLancarRecebimento
    {
        $this->observacao = $observacao;
        return $this;
    }

    public function getBloqueado(): string
    {
        return $this->bloqueado;
    }

    public function setBloqueado(string $bloqueado): ContaReceberLancarRecebimento
    {
        $this->bloqueado = $bloqueado;
        return $this;
    }

    public function getConciliarDocumento(): string
    {
        return $this->conciliar_documento;
    }

    public function setConciliarDocumento(string $conciliar_documento): ContaReceberLancarRecebimento
    {
        $this->conciliar_documento = $conciliar_documento;
        return $this;
    }

    public function getNsu(): string
    {
        return $this->nsu;
    }

    public function setNsu(string $nsu): ContaReceberLancarRecebimento
    {
        $this->nsu = $nsu;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            'codigo_lancamento' => $this->codigo_lancamento,
            'codigo_lancamento_integracao' => $this->codigo_lancamento_integracao,
            'codigo_baixa' => $this->codigo_baixa,
            'codigo_baixa_integracao' => $this->codigo_baixa_integracao,
            'codigo_conta_corrente' => $this->codigo_conta_corrente,
            'codigo_conta_corrente_integracao' => $this->codigo_conta_corrente_integracao,
            'valor' => $this->valor,
            'juros' => $this->juros,
            'desconto' => $this->desconto,
            'multa' => $this->multa,
            'data' => $this->data,
            'observacao' => $this->observacao,
            'bloqueado' => $this->bloqueado,
            'conciliar_documento' => $this->conciliar_documento,
            'nsu' => $this->nsu,
        ], function ($v) {
            return!is_null($v);
        });
    }
}