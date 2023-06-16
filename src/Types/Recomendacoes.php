<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class Recomendacoes
{
    /** Número de Parcelas padrão para as Vendas
     *
     * @var string|null
     */
    private ?string $numero_parcelas;

    /** Código do Vendedor padrão
     *
     * @var int|null
     */
    private ?int $codigo_vendedor;

    /** Enviar a NF-e e Boleto para outro e-mail?
     *
     * @var string|null
     */
    private ?string $email_fatura;

    /** Por padrão: Gerar Boletos ao Emitir NF-e?
     *
     * @var string|null
     */
    private ?string $gerar_boletos;

    /** Código da Transportadora padrão
     *
     * @var int|null
     */
    private ?int $codigo_transportadora;

    /** Tipo de Assinante utilizado para notas fiscais via única (modelo 21 e 22)
     *
     * @var string|null
     */
    private ?string $tipo_assinante;

    /**
     * @param string|null $numero_parcelas
     * @param int|null $codigo_vendedor
     * @param string|null $email_fatura
     * @param string|null $gerar_boletos
     * @param int|null $codigo_transportadora
     * @param string|null $tipo_assinante
     */
    public function __construct(
        ?string $numero_parcelas = null,
        ?int    $codigo_vendedor = null,
        ?string $email_fatura = null,
        ?string $gerar_boletos = null,
        ?int    $codigo_transportadora = null,
        ?string $tipo_assinante = null
    )
    {
        $this->numero_parcelas = $numero_parcelas;
        $this->codigo_vendedor = $codigo_vendedor;
        $this->email_fatura = $email_fatura;
        $this->gerar_boletos = $gerar_boletos;
        $this->codigo_transportadora = $codigo_transportadora;
        $this->tipo_assinante = $tipo_assinante;
    }

    /**
     * @return string|null
     */
    public function getNumeroParcelas(): ?string
    {
        return $this->numero_parcelas;
    }

    /**
     * @param string|null $numero_parcelas
     * @return Recomendacoes
     */
    public function setNumeroParcelas(?string $numero_parcelas): Recomendacoes
    {
        $this->numero_parcelas = $numero_parcelas;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoVendedor(): ?int
    {
        return $this->codigo_vendedor;
    }

    /**
     * @param int|null $codigo_vendedor
     * @return Recomendacoes
     */
    public function setCodigoVendedor(?int $codigo_vendedor): Recomendacoes
    {
        $this->codigo_vendedor = $codigo_vendedor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailFatura(): ?string
    {
        return $this->email_fatura;
    }

    /**
     * @param string|null $email_fatura
     * @return Recomendacoes
     */
    public function setEmailFatura(?string $email_fatura): Recomendacoes
    {
        $this->email_fatura = $email_fatura;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGerarBoletos(): ?string
    {
        return $this->gerar_boletos;
    }

    /**
     * @param string|null $gerar_boletos
     * @return Recomendacoes
     */
    public function setGerarBoletos(?string $gerar_boletos): Recomendacoes
    {
        $this->gerar_boletos = $gerar_boletos;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoTransportadora(): ?int
    {
        return $this->codigo_transportadora;
    }

    /**
     * @param int|null $codigo_transportadora
     * @return Recomendacoes
     */
    public function setCodigoTransportadora(?int $codigo_transportadora): Recomendacoes
    {
        $this->codigo_transportadora = $codigo_transportadora;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoAssinante(): ?string
    {
        return $this->tipo_assinante;
    }

    /**
     * @param string|null $tipo_assinante
     * @return Recomendacoes
     */
    public function setTipoAssinante(?string $tipo_assinante): Recomendacoes
    {
        $this->tipo_assinante = $tipo_assinante;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "numero_parcelas" => $this->numero_parcelas,
            "codigo_vendedor" => $this->codigo_vendedor,
            "email_fatura" => $this->email_fatura,
            "gerar_boletos" => $this->gerar_boletos,
            "codigo_transportadora" => $this->codigo_transportadora,
            "tipo_assinante" => $this->tipo_assinante,
        ], function ($v) {
            return !is_null($v);
        });
    }
}