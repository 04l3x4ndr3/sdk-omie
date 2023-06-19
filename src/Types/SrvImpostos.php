<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvImpostos
{
    /** Alíquota de ISS
     *
     * @var float|null
     */
    private ?float $nAliqISS;

    /** ISS Retido (S/N)
     *
     * @var string|null
     */
    private ?string $cRetISS;

    /** Alíquota do PIS
     *
     * @var float|null
     */
    private ?float $nAliqPIS;

    /** PIS Retido (S/N)
     *
     * @var string|null
     */
    private ?string $cRetPIS;

    /** Alíquota de COFINS
     *
     * @var float|null
     */
    private ?float $nAliqCOFINS;

    /** COFINS Retido (S/N)
     *
     * @var string|null
     */
    private ?string $cRetCOFINS;

    /** Alíquota de CSLL
     *
     * @var float|null
     */
    private ?float $nAliqCSLL;

    /** CSLL Retido (S/N)
     *
     * @var string|null
     */
    private ?string $cRetCSLL;

    /** Alíquota do IR
     *
     * @var float|null
     */
    private ?float $nAliqIR;

    /** IR Retido (S/N)
     *
     * @var string|null
     */
    private ?string $cRetIR;

    /** Alíquota de INSS
     *
     * @var float|null
     */
    private ?float $nAliqINSS;

    /** INSS Retido (S/N)
     *
     * @var string|null
     */
    private ?string $cRetINSS;

    /** Alíquota de Redução da Base de Cálculo de INSS
     *
     * @var float|null
     */
    private ?float $nRedBaseINSS;

    /** Alíquota de Redução da Base de Cálculo de PIS
     *
     * @var float|null
     */
    private ?float $nRedBasePIS;

    /** Alíquota de Redução da Base de Cálculo de COFINS
     *
     * @var float|null
     */
    private ?float $nRedBaseCOFINS;

    /** Deduz o ISS da Base de Cálculo de PIS e COFINS
     *
     * @var bool|null
     */
    private ?bool $lDeduzISS;

    /**
     * @param float|null $nAliqISS
     * @param string|null $cRetISS
     * @param float|null $nAliqPIS
     * @param string|null $cRetPIS
     * @param float|null $nAliqCOFINS
     * @param string|null $cRetCOFINS
     * @param float|null $nAliqCSLL
     * @param string|null $cRetCSLL
     * @param float|null $nAliqIR
     * @param string|null $cRetIR
     * @param float|null $nAliqINSS
     * @param string|null $cRetINSS
     * @param float|null $nRedBaseINSS
     * @param float|null $nRedBasePIS
     * @param float|null $nRedBaseCOFINS
     * @param bool|null $lDeduzISS
     */
    public function __construct(
        ?float  $nAliqISS = null,
        ?string $cRetISS = null,
        ?float  $nAliqPIS = null,
        ?string $cRetPIS = null,
        ?float  $nAliqCOFINS = null,
        ?string $cRetCOFINS = null,
        ?float  $nAliqCSLL = null,
        ?string $cRetCSLL = null,
        ?float  $nAliqIR = null,
        ?string $cRetIR = null,
        ?float  $nAliqINSS = null,
        ?string $cRetINSS = null,
        ?float  $nRedBaseINSS = null,
        ?float  $nRedBasePIS = null,
        ?float  $nRedBaseCOFINS = null,
        ?bool   $lDeduzISS = null
    )
    {
        $this->nAliqISS = $nAliqISS;
        $this->cRetISS = $cRetISS;
        $this->nAliqPIS = $nAliqPIS;
        $this->cRetPIS = $cRetPIS;
        $this->nAliqCOFINS = $nAliqCOFINS;
        $this->cRetCOFINS = $cRetCOFINS;
        $this->nAliqCSLL = $nAliqCSLL;
        $this->cRetCSLL = $cRetCSLL;
        $this->nAliqIR = $nAliqIR;
        $this->cRetIR = $cRetIR;
        $this->nAliqINSS = $nAliqINSS;
        $this->cRetINSS = $cRetINSS;
        $this->nRedBaseINSS = $nRedBaseINSS;
        $this->nRedBasePIS = $nRedBasePIS;
        $this->nRedBaseCOFINS = $nRedBaseCOFINS;
        $this->lDeduzISS = $lDeduzISS;
    }

    /**
     * @return float|null
     */
    public function getNAliqISS(): ?float
    {
        return $this->nAliqISS;
    }

    /**
     * @param float|null $nAliqISS
     * @return SrvImpostos
     */
    public function setNAliqISS(?float $nAliqISS): SrvImpostos
    {
        $this->nAliqISS = $nAliqISS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetISS(): ?string
    {
        return $this->cRetISS;
    }

    /**
     * @param string|null $cRetISS
     * @return SrvImpostos
     */
    public function setCRetISS(?string $cRetISS): SrvImpostos
    {
        $this->cRetISS = $cRetISS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqPIS(): ?float
    {
        return $this->nAliqPIS;
    }

    /**
     * @param float|null $nAliqPIS
     * @return SrvImpostos
     */
    public function setNAliqPIS(?float $nAliqPIS): SrvImpostos
    {
        $this->nAliqPIS = $nAliqPIS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetPIS(): ?string
    {
        return $this->cRetPIS;
    }

    /**
     * @param string|null $cRetPIS
     * @return SrvImpostos
     */
    public function setCRetPIS(?string $cRetPIS): SrvImpostos
    {
        $this->cRetPIS = $cRetPIS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqCOFINS(): ?float
    {
        return $this->nAliqCOFINS;
    }

    /**
     * @param float|null $nAliqCOFINS
     * @return SrvImpostos
     */
    public function setNAliqCOFINS(?float $nAliqCOFINS): SrvImpostos
    {
        $this->nAliqCOFINS = $nAliqCOFINS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetCOFINS(): ?string
    {
        return $this->cRetCOFINS;
    }

    /**
     * @param string|null $cRetCOFINS
     * @return SrvImpostos
     */
    public function setCRetCOFINS(?string $cRetCOFINS): SrvImpostos
    {
        $this->cRetCOFINS = $cRetCOFINS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqCSLL(): ?float
    {
        return $this->nAliqCSLL;
    }

    /**
     * @param float|null $nAliqCSLL
     * @return SrvImpostos
     */
    public function setNAliqCSLL(?float $nAliqCSLL): SrvImpostos
    {
        $this->nAliqCSLL = $nAliqCSLL;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetCSLL(): ?string
    {
        return $this->cRetCSLL;
    }

    /**
     * @param string|null $cRetCSLL
     * @return SrvImpostos
     */
    public function setCRetCSLL(?string $cRetCSLL): SrvImpostos
    {
        $this->cRetCSLL = $cRetCSLL;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqIR(): ?float
    {
        return $this->nAliqIR;
    }

    /**
     * @param float|null $nAliqIR
     * @return SrvImpostos
     */
    public function setNAliqIR(?float $nAliqIR): SrvImpostos
    {
        $this->nAliqIR = $nAliqIR;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetIR(): ?string
    {
        return $this->cRetIR;
    }

    /**
     * @param string|null $cRetIR
     * @return SrvImpostos
     */
    public function setCRetIR(?string $cRetIR): SrvImpostos
    {
        $this->cRetIR = $cRetIR;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqINSS(): ?float
    {
        return $this->nAliqINSS;
    }

    /**
     * @param float|null $nAliqINSS
     * @return SrvImpostos
     */
    public function setNAliqINSS(?float $nAliqINSS): SrvImpostos
    {
        $this->nAliqINSS = $nAliqINSS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetINSS(): ?string
    {
        return $this->cRetINSS;
    }

    /**
     * @param string|null $cRetINSS
     * @return SrvImpostos
     */
    public function setCRetINSS(?string $cRetINSS): SrvImpostos
    {
        $this->cRetINSS = $cRetINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNRedBaseINSS(): ?float
    {
        return $this->nRedBaseINSS;
    }

    /**
     * @param float|null $nRedBaseINSS
     * @return SrvImpostos
     */
    public function setNRedBaseINSS(?float $nRedBaseINSS): SrvImpostos
    {
        $this->nRedBaseINSS = $nRedBaseINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNRedBasePIS(): ?float
    {
        return $this->nRedBasePIS;
    }

    /**
     * @param float|null $nRedBasePIS
     * @return SrvImpostos
     */
    public function setNRedBasePIS(?float $nRedBasePIS): SrvImpostos
    {
        $this->nRedBasePIS = $nRedBasePIS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNRedBaseCOFINS(): ?float
    {
        return $this->nRedBaseCOFINS;
    }

    /**
     * @param float|null $nRedBaseCOFINS
     * @return SrvImpostos
     */
    public function setNRedBaseCOFINS(?float $nRedBaseCOFINS): SrvImpostos
    {
        $this->nRedBaseCOFINS = $nRedBaseCOFINS;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLDeduzISS(): ?bool
    {
        return $this->lDeduzISS;
    }

    /**
     * @param bool|null $lDeduzISS
     * @return SrvImpostos
     */
    public function setLDeduzISS(?bool $lDeduzISS): SrvImpostos
    {
        $this->lDeduzISS = $lDeduzISS;
        return $this;
    }

    public function toArray(): array {
        return array_filter([
            "nAliqISS" => $this->nAliqISS,
            "cRetISS" => $this->cRetISS,
            "nAliqPIS" => $this->nAliqPIS,
            "cRetPIS" => $this->cRetPIS,
            "nAliqCOFINS" => $this->nAliqCOFINS,
            "cRetCOFINS" => $this->cRetCOFINS,
            "nAliqCSLL" => $this->nAliqCSLL,
            "cRetCSLL" => $this->cRetCSLL,
            "nAliqIR" => $this->nAliqIR,
            "cRetIR" => $this->cRetIR,
            "nAliqINSS" => $this->nAliqINSS,
            "cRetINSS" => $this->cRetINSS,
            "nRedBaseINSS" => $this->nRedBaseINSS,
            "nRedBasePIS" => $this->nRedBasePIS,
            "nRedBaseCOFINS" => $this->nRedBaseCOFINS,
            "lDeduzISS" => $this->lDeduzISS,
        ], function ($v) {
            return !is_null($v);
        });
    }
}