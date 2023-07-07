<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvConsultarRequest
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
     * @return SrvConsultarRequest
     */
    public function setCCodIntServ(?string $cCodIntServ): SrvConsultarRequest
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
     * @return SrvConsultarRequest
     */
    public function setNCodServ(?int $nCodServ): SrvConsultarRequest
    {
        $this->nCodServ = $nCodServ;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "cCodIntServ" => $this->cCodIntServ,
            "nCodServ" => $this->nCodServ,
        ], function ($v) {
            return !is_null($v);
        });
    }
}