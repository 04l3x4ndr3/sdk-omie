<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class Info
{
    /** Data da Inclusão
     *
     * @var string|null
     */
    private ?string $dInc;

    /** Hora da Inclusão
     *
     * @var string|null
     */
    private ?string $hInc;

    /** Usuário da Inclusão
     *
     * @var string|null
     */
    private ?string $uInc;

    /** Data da Alteração
     *
     * @var string|null
     */
    private ?string $dAlt;

    /** Hora da Alteração
     *
     * @var string|null
     */
    private ?string $hAlt;

    /** Usuário da Alteração
     *
     * @var string|null
     */
    private ?string $uAlt;

    /** Importado pela API (S/N)
     *
     * @var string|null
     */
    private ?string $cImpAPI;

    /**
     * @param string|null $dInc
     * @param string|null $hInc
     * @param string|null $uInc
     * @param string|null $dAlt
     * @param string|null $hAlt
     * @param string|null $uAlt
     * @param string|null $cImpAPI
     */
    public function __construct(
        ?string $dInc = null,
        ?string $hInc = null,
        ?string $uInc = null,
        ?string $dAlt = null,
        ?string $hAlt = null,
        ?string $uAlt = null,
        ?string $cImpAPI = null
    )
    {
        $this->dInc = $dInc;
        $this->hInc = $hInc;
        $this->uInc = $uInc;
        $this->dAlt = $dAlt;
        $this->hAlt = $hAlt;
        $this->uAlt = $uAlt;
        $this->cImpAPI = $cImpAPI;
    }

    /**
     * @return string|null
     */
    public function getDInc(): ?string
    {
        return $this->dInc;
    }

    /**
     * @param string|null $dInc
     * @return Info
     */
    public function setDInc(?string $dInc): Info
    {
        $this->dInc = $dInc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHInc(): ?string
    {
        return $this->hInc;
    }

    /**
     * @param string|null $hInc
     * @return Info
     */
    public function setHInc(?string $hInc): Info
    {
        $this->hInc = $hInc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUInc(): ?string
    {
        return $this->uInc;
    }

    /**
     * @param string|null $uInc
     * @return Info
     */
    public function setUInc(?string $uInc): Info
    {
        $this->uInc = $uInc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDAlt(): ?string
    {
        return $this->dAlt;
    }

    /**
     * @param string|null $dAlt
     * @return Info
     */
    public function setDAlt(?string $dAlt): Info
    {
        $this->dAlt = $dAlt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHAlt(): ?string
    {
        return $this->hAlt;
    }

    /**
     * @param string|null $hAlt
     * @return Info
     */
    public function setHAlt(?string $hAlt): Info
    {
        $this->hAlt = $hAlt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUAlt(): ?string
    {
        return $this->uAlt;
    }

    /**
     * @param string|null $uAlt
     * @return Info
     */
    public function setUAlt(?string $uAlt): Info
    {
        $this->uAlt = $uAlt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCImpAPI(): ?string
    {
        return $this->cImpAPI;
    }

    /**
     * @param string|null $cImpAPI
     * @return Info
     */
    public function setCImpAPI(?string $cImpAPI): Info
    {
        $this->cImpAPI = $cImpAPI;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "dInc" => $this->dInc,
            "hInc" => $this->hInc,
            "uInc" => $this->uInc,
            "dAlt" => $this->dAlt,
            "hAlt" => $this->hAlt,
            "uAlt" => $this->uAlt,
            "cImpAPI" => $this->cImpAPI,
        ], function ($v) {
            return !is_null($v);
        });
    }
}