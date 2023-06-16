<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class DadosBancarios
{
    /** Código do Banco
     * @var string|null
     */
    private ?string $codigo_banco;

    /** Agência
     *
     * @var string|null
     */
    private ?string $agencia;

    /** Número da Conta Corrente
     *
     * @var string|null
     */
    private ?string $conta_corrente;

    /** CNPJ ou CPF do titular
     *
     * @var string|null
     */
    private ?string $doc_titular;

    /** Nome do titular
     * @var string|null
     */
    private ?string $nome_titular;

    /** Definir transferência como forma de pagamento padrão
     *
     * @var string|null
     */
    private ?string $transf_padrao;

    /**
     * @param string|null $codigo_banco
     * @param string|null $agencia
     * @param string|null $conta_corrente
     * @param string|null $doc_titular
     * @param string|null $nome_titular
     * @param string|null $transf_padrao
     */
    public function __construct(
        ?string $codigo_banco = null,
        ?string $agencia = null,
        ?string $conta_corrente = null,
        ?string $doc_titular = null,
        ?string $nome_titular = null,
        ?string $transf_padrao = null
    )
    {
        $this->codigo_banco = $codigo_banco;
        $this->agencia = $agencia;
        $this->conta_corrente = $conta_corrente;
        $this->doc_titular = $doc_titular;
        $this->nome_titular = $nome_titular;
        $this->transf_padrao = $transf_padrao;
    }

    /**
     * @return string|null
     */
    public function getCodigoBanco(): ?string
    {
        return $this->codigo_banco;
    }

    /**
     * @param string|null $codigo_banco
     * @return DadosBancarios
     */
    public function setCodigoBanco(?string $codigo_banco): DadosBancarios
    {
        $this->codigo_banco = $codigo_banco;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAgencia(): ?string
    {
        return $this->agencia;
    }

    /**
     * @param string|null $agencia
     * @return DadosBancarios
     */
    public function setAgencia(?string $agencia): DadosBancarios
    {
        $this->agencia = $agencia;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContaCorrente(): ?string
    {
        return $this->conta_corrente;
    }

    /**
     * @param string|null $conta_corrente
     * @return DadosBancarios
     */
    public function setContaCorrente(?string $conta_corrente): DadosBancarios
    {
        $this->conta_corrente = $conta_corrente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocTitular(): ?string
    {
        return $this->doc_titular;
    }

    /**
     * @param string|null $doc_titular
     * @return DadosBancarios
     */
    public function setDocTitular(?string $doc_titular): DadosBancarios
    {
        $this->doc_titular = $doc_titular;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeTitular(): ?string
    {
        return $this->nome_titular;
    }

    /**
     * @param string|null $nome_titular
     * @return DadosBancarios
     */
    public function setNomeTitular(?string $nome_titular): DadosBancarios
    {
        $this->nome_titular = $nome_titular;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransfPadrao(): ?string
    {
        return $this->transf_padrao;
    }

    /**
     * @param string|null $transf_padrao
     * @return DadosBancarios
     */
    public function setTransfPadrao(?string $transf_padrao): DadosBancarios
    {
        $this->transf_padrao = $transf_padrao;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "codigo_banco" => $this->codigo_banco,
            "agencia" => $this->agencia,
            "conta_corrente" => $this->conta_corrente,
            "doc_titular" => $this->doc_titular,
            "nome_titular" => $this->nome_titular,
            "transf_padrao" => $this->transf_padrao,
        ], function ($v) {
            return !is_null($v);
        });
    }
}