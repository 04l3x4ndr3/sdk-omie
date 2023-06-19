<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class Descricao
{
    /** Descrição completa do serviço prestado
     *
     * @var string|null
     */
    private ?string $cDescrCompleta;

    /**
     * @param string|null $cDescrCompleta
     */
    public function __construct(?string $cDescrCompleta = null)
    {
        $this->cDescrCompleta = $cDescrCompleta;
    }

    /**
     * @return string|null
     */
    public function getCDescrCompleta(): ?string
    {
        return $this->cDescrCompleta;
    }

    /**
     * @param string|null $cDescrCompleta
     * @return Descricao
     */
    public function setCDescrCompleta(?string $cDescrCompleta): Descricao
    {
        $this->cDescrCompleta = $cDescrCompleta;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cDescrCompleta" => $this->cDescrCompleta,
        ], function ($v) {
            return !is_null($v);
        });
    }
}