<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class OsFaturarRequest
{
    /** Código de Integração da Ordem de Serviço
     *
     * @var string|null
     */
    private ?string $cCodIntOS;

    /** Código do Pedido de Venda
     *
     * @var string|null
     */
    private ?string $nCodOS;

    /**
     * @param string|null $cCodIntOS
     * @param string|null $nCodOS
     */
    public function __construct(?string $cCodIntOS = null, ?string $nCodOS = null)
    {
        $this->cCodIntOS = $cCodIntOS;
        $this->nCodOS = $nCodOS;
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
     * @return OsFaturarRequest
     */
    public function setCCodIntOS(?string $cCodIntOS): OsFaturarRequest
    {
        $this->cCodIntOS = $cCodIntOS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNCodOS(): ?string
    {
        return $this->nCodOS;
    }

    /**
     * @param string|null $nCodOS
     * @return OsFaturarRequest
     */
    public function setNCodOS(?string $nCodOS): OsFaturarRequest
    {
        $this->nCodOS = $nCodOS;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cCodIntOS" => $this->cCodIntOS,
            "nCodOS" => $this->nCodOS,
        ], function ($v) {
            return !is_null($v);
        });
    }
}