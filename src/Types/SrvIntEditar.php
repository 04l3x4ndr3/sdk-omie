<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvIntEditar
{
    /** Código de Integração do Serviço
     *
     * @var string|null
     */
    private ?string $cCodIntServ;

    /** Código do serviço
     *
     * @var int|null
     */
    private ?int $nCodServ;

    /**
     * @param string|null $cCodIntServ
     * @param int|null $nCodServ
     */
    public function __construct(?string $cCodIntServ = null, ?int $nCodServ = null)
    {
        $this->cCodIntServ = $cCodIntServ;
        $this->nCodServ = $nCodServ;
    }

    /**
     * @return string|null
     */
    public function getCCodIntServ(): ?string
    {
        return $this->cCodIntServ;
    }

    /**
     * @param string|null $cCodIntServ
     * @return SrvIntEditar
     */
    public function setCCodIntServ(?string $cCodIntServ): SrvIntEditar
    {
        $this->cCodIntServ = $cCodIntServ;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodServ(): ?int
    {
        return $this->nCodServ;
    }

    /**
     * @param int|null $nCodServ
     * @return SrvIntEditar
     */
    public function setNCodServ(?int $nCodServ): SrvIntEditar
    {
        $this->nCodServ = $nCodServ;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cCodIntServ" => $this->cCodIntServ,
            "nCodServ" => $this->nCodServ,
        ], function ($v) {
            return !is_null($v);
        });
    }
}