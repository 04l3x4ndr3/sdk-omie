<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class IntIncluir
{
    /** Código de Integração do Serviço
     *
     * @var string|null
     */
    private ?string $cCodIntServ;

    /**
     * @param string|null $cCodIntServ
     */
    public function __construct(?string $cCodIntServ = null)
    {
        $this->cCodIntServ = $cCodIntServ;
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
     * @return IntIncluir
     */
    public function setCCodIntServ(?string $cCodIntServ): IntIncluir
    {
        $this->cCodIntServ = $cCodIntServ;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cCodIntServ" => $this->cCodIntServ,
        ], function ($v) {
            return !is_null($v);
        });
    }
}