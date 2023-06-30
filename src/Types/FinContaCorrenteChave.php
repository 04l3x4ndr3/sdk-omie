<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class FinContaCorrenteChave
{
    /** Código da conta corrente no Omie.
     *
     * @var int|null
     */
    private ?int $nCodCC;

    /** Código de Integração do Parceiro.
     *
     * @var string|null
     */
    private ?string $cCodCCInt;

    /**
     * @param int|null $nCodCC
     * @param string|null $cCodCCInt
     */
    public function __construct(?int $nCodCC = null, ?string $cCodCCInt = null)
    {
        $this->nCodCC = $nCodCC;
        $this->cCodCCInt = $cCodCCInt;
    }

    /**
     * @return int|null
     */
    public function getNCodCC(): ?int
    {
        return $this->nCodCC;
    }

    /**
     * @param int|null $nCodCC
     * @return FinContaCorrenteChave
     */
    public function setNCodCC(?int $nCodCC): FinContaCorrenteChave
    {
        $this->nCodCC = $nCodCC;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodCCInt(): ?string
    {
        return $this->cCodCCInt;
    }

    /**
     * @param string|null $cCodCCInt
     * @return FinContaCorrenteChave
     */
    public function setCCodCCInt(?string $cCodCCInt): FinContaCorrenteChave
    {
        $this->cCodCCInt = $cCodCCInt;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "nCodCC" => $this->nCodCC,
            "cCodCCInt" => $this->cCodCCInt,
        ], function ($v) {
            return !is_null($v);
        });
    }
}