<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class ClientesPorCodigo
{
    /** Código de Cliente / Fornecedor
     *
     * @var int|null
     */
    private ?int $codigo_cliente_omie;

    /** Código de Integração com sistemas legados
     *
     * @var string|null
     */
    private ?string $codigo_cliente_integracao;

    /**
     * @param int|null $codigo_cliente_omie
     * @param string|null $codigo_cliente_integracao
     */
    public function __construct(?int $codigo_cliente_omie = null, ?string $codigo_cliente_integracao = null)
    {
        $this->codigo_cliente_omie = $codigo_cliente_omie;
        $this->codigo_cliente_integracao = $codigo_cliente_integracao;
    }

    /**
     * @return int|null
     */
    public function getCodigoClienteOmie(): ?int
    {
        return $this->codigo_cliente_omie;
    }

    /**
     * @param int|null $codigo_cliente_omie
     * @return ClientesPorCodigo
     */
    public function setCodigoClienteOmie(?int $codigo_cliente_omie): ClientesPorCodigo
    {
        $this->codigo_cliente_omie = $codigo_cliente_omie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoClienteIntegracao(): ?string
    {
        return $this->codigo_cliente_integracao;
    }

    /**
     * @param string|null $codigo_cliente_integracao
     * @return ClientesPorCodigo
     */
    public function setCodigoClienteIntegracao(?string $codigo_cliente_integracao): ClientesPorCodigo
    {
        $this->codigo_cliente_integracao = $codigo_cliente_integracao;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "codigo_cliente_omie" => $this->codigo_cliente_omie,
            "codigo_cliente_integracao" => $this->codigo_cliente_integracao,
        ], function ($v) {
            return !is_null($v);
        });
    }
}