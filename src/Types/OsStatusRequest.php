<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsStatusRequest
{
    /** Código de Integração da OS
     * @var string|null
     */
    private ?string $cCodIntOS;

    /** Código da Ordem de Serviço
     * @var int|null
     */
    private ?int $nCodOS;

    /** Exibir a Url do PDF do Demonstrativo da NFS-e.
     * @var bool|null
     */
    private ?bool $lPdfDemo;

    /** Exibir a Url do PDF do Destinatário da NFS-e.
     * @var bool|null
     */
    private ?bool $lPdfDest;

    /** Exibir a Url da RPS.
     * @var bool|null
     */
    private ?bool $lRps;

    /** Exibir a Url do Recibo.
     * @var bool|null
     */
    private ?bool $lPdfRecibo;

    /**
     * @param string|null $cCodIntOS
     * @param int|null $nCodOS
     * @param bool|null $lPdfDemo
     * @param bool|null $lPdfDest
     * @param bool|null $lRps
     * @param bool|null $lPdfRecibo
     */
    public function __construct(
        ?string $cCodIntOS = null,
        ?int $nCodOS = null,
        ?bool $lPdfDemo = null,
        ?bool $lPdfDest = null,
        ?bool $lRps = null,
        ?bool $lPdfRecibo = null
    )
    {
        $this->cCodIntOS = $cCodIntOS;
        $this->nCodOS = $nCodOS;
        $this->lPdfDemo = $lPdfDemo;
        $this->lPdfDest = $lPdfDest;
        $this->lRps = $lRps;
        $this->lPdfRecibo = $lPdfRecibo;
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
     * @return $this
     */
    public function setCCodIntOS(?string $cCodIntOS): OsStatusRequest
    {
        $this->cCodIntOS = $cCodIntOS;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodOS(): ?int
    {
        return $this->nCodOS;
    }

    /**
     * @param int|null $nCodOS
     * @return $this
     */
    public function setNCodOS(?int $nCodOS): OsStatusRequest
    {
        $this->nCodOS = $nCodOS;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLPdfDemo(): ?bool
    {
        return $this->lPdfDemo;
    }

    /**
     * @param bool|null $lPdfDemo
     * @return $this
     */
    public function setLPdfDemo(?bool $lPdfDemo): OsStatusRequest
    {
        $this->lPdfDemo = $lPdfDemo;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLPdfDest(): ?bool
    {
        return $this->lPdfDest;
    }

    /**
     * @param bool|null $lPdfDest
     * @return $this
     */
    public function setLPdfDest(?bool $lPdfDest): OsStatusRequest
    {
        $this->lPdfDest = $lPdfDest;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLRps(): ?bool
    {
        return $this->lRps;
    }

    /**
     * @param bool|null $lRps
     * @return $this
     */
    public function setLRps(?bool $lRps): OsStatusRequest
    {
        $this->lRps = $lRps;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLPdfRecibo(): ?bool
    {
        return $this->lPdfRecibo;
    }

    /**
     * @param bool|null $lPdfRecibo
     * @return $this
     */
    public function setLPdfRecibo(?bool $lPdfRecibo): OsStatusRequest
    {
        $this->lPdfRecibo = $lPdfRecibo;
        return $this;
    }

    public function toArray(): array {
        return array_filter([
            "cCodIntOS" => $this->cCodIntOS,
            "nCodOS" => $this->nCodOS,
            "lPdfDemo" => $this->lPdfDemo,
            "lPdfDest" => $this->lPdfDest,
            "lRps" => $this->lRps,
            "lPdfRecibo" => $this->lPdfRecibo
        ], function ($v) {
            return !is_null($v);
        });
    }
}