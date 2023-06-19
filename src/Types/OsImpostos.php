<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsImpostos
{
    /** Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     *
     * @var string|null
     */
    private ?string $cFixarISS;

    /** Alíquota de ISS.
     *
     * @var float|null
     */
    private ?float $nAliqISS;

    /** Base de Cálculo do ISS.
     *
     * @var float|null
     */
    private ?float $nBaseISS;

    /** Valor de Dedução da Base de Cálculo.
     *
     * @var float|null
     */
    private ?float $nTotDeducao;

    /** Valor do ISS.
     *
     * @var float|null
     */
    private ?float $nValorISS;

    /** Indica se o valor informado para os OsImpostos Federais deverá ser mantido ao invés de ser recalculado a partir da alíquota.
     *
     * @var string|null
     */
    private ?string $cUtilizaValorImposto;

    /** Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     *
     * @var string|null
     */
    private ?string $cFixarIRRF;

    /** Alíquota de IRRF.
     *
     * @var float|null
     */
    private ?float $nAliqIRRF;

    /** Valor do IRRF.
     *
     * @var float|null
     */
    private ?float $nValorIRRF;

    /** Retém IRRF (S/N).
     *
     * @var string|null
     */
    private ?string $cRetemIRRF;

    /** Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     *
     * @var string|null
     */
    private ?string $cFixarPIS;

    /** Alíquota de PIS.
     *
     * @var float|null
     */
    private ?float $nAliqPIS;

    /** Valor do PIS.
     *
     * @var float|null
     */
    private ?float $nValorPIS;

    /** Retém PIS (S/N).
     *
     * @var string|null
     */
    private ?string $cRetemPIS;

    /** Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     *
     * @var string|null
     */
    private ?string $cFixarCOFINS;

    /** Alíquota de COFINS.
     *
     * @var float|null
     */
    private ?float $nAliqCOFINS;

    /** Valor do COFINS.
     *
     * @var float|null
     */
    private ?float $nValorCOFINS;

    /** Retém COFINS (S/N).
     *
     * @var string|null
     */
    private ?string $cRetemCOFINS;

    /** Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     *
     * @var string|null
     */
    private ?string $cFixarCSLL;

    /** Alíquota de CSLL.
     *
     * @var float|null
     */
    private ?float $nAliqCSLL;

    /** Valor de CSLL.
     *
     * @var float|null
     */
    private ?float $nValorCSLL;

    /** Retém CSLL (S/N).
     *
     * @var string|null
     */
    private ?string $cRetemCSLL;

    /** Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.
     *
     * @var string|null
     */
    private ?string $cFixarINSS;

    /** Alíquota de INSS.
     *
     * @var float|null
     */
    private ?float $nAliqINSS;

    /** Valor de INSS.
     *
     * @var float|null
     */
    private ?float $nValorINSS;

    /** Retém INSS (S/N).
     *
     * @var string|null
     */
    private ?string $cRetemINSS;

    /** Percentual de Redução da Base de Cálculo do INSS.
     *
     * @var float|null
     */
    private ?float $nAliqRedBaseINSS;

    /** Percentual de Redução da Base de Cálculo do COFINS.
     *
     * @var float|null
     */
    private ?float $nAliqRedBaseCOFINS;

    /** Percentual de Redução da Base de Cálculo do PIS.
     *
     * @var float|null
     */
    private ?float $nAliqRedBasePIS;

    /** Deduz o ISS da Base de Cálculo de PIS e COFINS.
     *
     * @var bool|null
     */
    private ?bool $lDeduzISS;

    /**
     * @param string|null $cFixarISS
     * @param float|null $nAliqISS
     * @param float|null $nBaseISS
     * @param float|null $nTotDeducao
     * @param float|null $nValorISS
     * @param string|null $cUtilizaValorImposto
     * @param string|null $cFixarIRRF
     * @param float|null $nAliqIRRF
     * @param float|null $nValorIRRF
     * @param string|null $cRetemIRRF
     * @param string|null $cFixarPIS
     * @param float|null $nAliqPIS
     * @param float|null $nValorPIS
     * @param string|null $cRetemPIS
     * @param string|null $cFixarCOFINS
     * @param float|null $nAliqCOFINS
     * @param float|null $nValorCOFINS
     * @param string|null $cRetemCOFINS
     * @param string|null $cFixarCSLL
     * @param float|null $nAliqCSLL
     * @param float|null $nValorCSLL
     * @param string|null $cRetemCSLL
     * @param string|null $cFixarINSS
     * @param float|null $nAliqINSS
     * @param float|null $nValorINSS
     * @param string|null $cRetemINSS
     * @param float|null $nAliqRedBaseINSS
     * @param float|null $nAliqRedBaseCOFINS
     * @param float|null $nAliqRedBasePIS
     * @param bool|null $lDeduzISS
     */
    public function __construct(
        ?string $cFixarISS = null,
        ?float  $nAliqISS = null,
        ?float  $nBaseISS = null,
        ?float  $nTotDeducao = null,
        ?float  $nValorISS = null,
        ?string $cUtilizaValorImposto = null,
        ?string $cFixarIRRF = null,
        ?float  $nAliqIRRF = null,
        ?float  $nValorIRRF = null,
        ?string $cRetemIRRF = null,
        ?string $cFixarPIS = null,
        ?float  $nAliqPIS = null,
        ?float  $nValorPIS = null,
        ?string $cRetemPIS = null,
        ?string $cFixarCOFINS = null,
        ?float  $nAliqCOFINS = null,
        ?float  $nValorCOFINS = null,
        ?string $cRetemCOFINS = null,
        ?string $cFixarCSLL = null,
        ?float  $nAliqCSLL = null,
        ?float  $nValorCSLL = null,
        ?string $cRetemCSLL = null,
        ?string $cFixarINSS = null,
        ?float  $nAliqINSS = null,
        ?float  $nValorINSS = null,
        ?string $cRetemINSS = null,
        ?float  $nAliqRedBaseINSS = null,
        ?float  $nAliqRedBaseCOFINS = null,
        ?float  $nAliqRedBasePIS = null,
        ?bool   $lDeduzISS = null
    )
    {
        $this->cFixarISS = $cFixarISS;
        $this->nAliqISS = $nAliqISS;
        $this->nBaseISS = $nBaseISS;
        $this->nTotDeducao = $nTotDeducao;
        $this->nValorISS = $nValorISS;
        $this->cUtilizaValorImposto = $cUtilizaValorImposto;
        $this->cFixarIRRF = $cFixarIRRF;
        $this->nAliqIRRF = $nAliqIRRF;
        $this->nValorIRRF = $nValorIRRF;
        $this->cRetemIRRF = $cRetemIRRF;
        $this->cFixarPIS = $cFixarPIS;
        $this->nAliqPIS = $nAliqPIS;
        $this->nValorPIS = $nValorPIS;
        $this->cRetemPIS = $cRetemPIS;
        $this->cFixarCOFINS = $cFixarCOFINS;
        $this->nAliqCOFINS = $nAliqCOFINS;
        $this->nValorCOFINS = $nValorCOFINS;
        $this->cRetemCOFINS = $cRetemCOFINS;
        $this->cFixarCSLL = $cFixarCSLL;
        $this->nAliqCSLL = $nAliqCSLL;
        $this->nValorCSLL = $nValorCSLL;
        $this->cRetemCSLL = $cRetemCSLL;
        $this->cFixarINSS = $cFixarINSS;
        $this->nAliqINSS = $nAliqINSS;
        $this->nValorINSS = $nValorINSS;
        $this->cRetemINSS = $cRetemINSS;
        $this->nAliqRedBaseINSS = $nAliqRedBaseINSS;
        $this->nAliqRedBaseCOFINS = $nAliqRedBaseCOFINS;
        $this->nAliqRedBasePIS = $nAliqRedBasePIS;
        $this->lDeduzISS = $lDeduzISS;
    }

    /**
     * @return string|null
     */
    public function getCFixarISS(): ?string
    {
        return $this->cFixarISS;
    }

    /**
     * @param string|null $cFixarISS
     * @return OsImpostos
     */
    public function setCFixarISS(?string $cFixarISS): OsImpostos
    {
        $this->cFixarISS = $cFixarISS;
        return $this;
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
     * @return OsImpostos
     */
    public function setNAliqISS(?float $nAliqISS): OsImpostos
    {
        $this->nAliqISS = $nAliqISS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNBaseISS(): ?float
    {
        return $this->nBaseISS;
    }

    /**
     * @param float|null $nBaseISS
     * @return OsImpostos
     */
    public function setNBaseISS(?float $nBaseISS): OsImpostos
    {
        $this->nBaseISS = $nBaseISS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNTotDeducao(): ?float
    {
        return $this->nTotDeducao;
    }

    /**
     * @param float|null $nTotDeducao
     * @return OsImpostos
     */
    public function setNTotDeducao(?float $nTotDeducao): OsImpostos
    {
        $this->nTotDeducao = $nTotDeducao;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorISS(): ?float
    {
        return $this->nValorISS;
    }

    /**
     * @param float|null $nValorISS
     * @return OsImpostos
     */
    public function setNValorISS(?float $nValorISS): OsImpostos
    {
        $this->nValorISS = $nValorISS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCUtilizaValorImposto(): ?string
    {
        return $this->cUtilizaValorImposto;
    }

    /**
     * @param string|null $cUtilizaValorImposto
     * @return OsImpostos
     */
    public function setCUtilizaValorImposto(?string $cUtilizaValorImposto): OsImpostos
    {
        $this->cUtilizaValorImposto = $cUtilizaValorImposto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarIRRF(): ?string
    {
        return $this->cFixarIRRF;
    }

    /**
     * @param string|null $cFixarIRRF
     * @return OsImpostos
     */
    public function setCFixarIRRF(?string $cFixarIRRF): OsImpostos
    {
        $this->cFixarIRRF = $cFixarIRRF;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqIRRF(): ?float
    {
        return $this->nAliqIRRF;
    }

    /**
     * @param float|null $nAliqIRRF
     * @return OsImpostos
     */
    public function setNAliqIRRF(?float $nAliqIRRF): OsImpostos
    {
        $this->nAliqIRRF = $nAliqIRRF;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorIRRF(): ?float
    {
        return $this->nValorIRRF;
    }

    /**
     * @param float|null $nValorIRRF
     * @return OsImpostos
     */
    public function setNValorIRRF(?float $nValorIRRF): OsImpostos
    {
        $this->nValorIRRF = $nValorIRRF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemIRRF(): ?string
    {
        return $this->cRetemIRRF;
    }

    /**
     * @param string|null $cRetemIRRF
     * @return OsImpostos
     */
    public function setCRetemIRRF(?string $cRetemIRRF): OsImpostos
    {
        $this->cRetemIRRF = $cRetemIRRF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarPIS(): ?string
    {
        return $this->cFixarPIS;
    }

    /**
     * @param string|null $cFixarPIS
     * @return OsImpostos
     */
    public function setCFixarPIS(?string $cFixarPIS): OsImpostos
    {
        $this->cFixarPIS = $cFixarPIS;
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
     * @return OsImpostos
     */
    public function setNAliqPIS(?float $nAliqPIS): OsImpostos
    {
        $this->nAliqPIS = $nAliqPIS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorPIS(): ?float
    {
        return $this->nValorPIS;
    }

    /**
     * @param float|null $nValorPIS
     * @return OsImpostos
     */
    public function setNValorPIS(?float $nValorPIS): OsImpostos
    {
        $this->nValorPIS = $nValorPIS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemPIS(): ?string
    {
        return $this->cRetemPIS;
    }

    /**
     * @param string|null $cRetemPIS
     * @return OsImpostos
     */
    public function setCRetemPIS(?string $cRetemPIS): OsImpostos
    {
        $this->cRetemPIS = $cRetemPIS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarCOFINS(): ?string
    {
        return $this->cFixarCOFINS;
    }

    /**
     * @param string|null $cFixarCOFINS
     * @return OsImpostos
     */
    public function setCFixarCOFINS(?string $cFixarCOFINS): OsImpostos
    {
        $this->cFixarCOFINS = $cFixarCOFINS;
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
     * @return OsImpostos
     */
    public function setNAliqCOFINS(?float $nAliqCOFINS): OsImpostos
    {
        $this->nAliqCOFINS = $nAliqCOFINS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorCOFINS(): ?float
    {
        return $this->nValorCOFINS;
    }

    /**
     * @param float|null $nValorCOFINS
     * @return OsImpostos
     */
    public function setNValorCOFINS(?float $nValorCOFINS): OsImpostos
    {
        $this->nValorCOFINS = $nValorCOFINS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemCOFINS(): ?string
    {
        return $this->cRetemCOFINS;
    }

    /**
     * @param string|null $cRetemCOFINS
     * @return OsImpostos
     */
    public function setCRetemCOFINS(?string $cRetemCOFINS): OsImpostos
    {
        $this->cRetemCOFINS = $cRetemCOFINS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarCSLL(): ?string
    {
        return $this->cFixarCSLL;
    }

    /**
     * @param string|null $cFixarCSLL
     * @return OsImpostos
     */
    public function setCFixarCSLL(?string $cFixarCSLL): OsImpostos
    {
        $this->cFixarCSLL = $cFixarCSLL;
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
     * @return OsImpostos
     */
    public function setNAliqCSLL(?float $nAliqCSLL): OsImpostos
    {
        $this->nAliqCSLL = $nAliqCSLL;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorCSLL(): ?float
    {
        return $this->nValorCSLL;
    }

    /**
     * @param float|null $nValorCSLL
     * @return OsImpostos
     */
    public function setNValorCSLL(?float $nValorCSLL): OsImpostos
    {
        $this->nValorCSLL = $nValorCSLL;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemCSLL(): ?string
    {
        return $this->cRetemCSLL;
    }

    /**
     * @param string|null $cRetemCSLL
     * @return OsImpostos
     */
    public function setCRetemCSLL(?string $cRetemCSLL): OsImpostos
    {
        $this->cRetemCSLL = $cRetemCSLL;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFixarINSS(): ?string
    {
        return $this->cFixarINSS;
    }

    /**
     * @param string|null $cFixarINSS
     * @return OsImpostos
     */
    public function setCFixarINSS(?string $cFixarINSS): OsImpostos
    {
        $this->cFixarINSS = $cFixarINSS;
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
     * @return OsImpostos
     */
    public function setNAliqINSS(?float $nAliqINSS): OsImpostos
    {
        $this->nAliqINSS = $nAliqINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNValorINSS(): ?float
    {
        return $this->nValorINSS;
    }

    /**
     * @param float|null $nValorINSS
     * @return OsImpostos
     */
    public function setNValorINSS(?float $nValorINSS): OsImpostos
    {
        $this->nValorINSS = $nValorINSS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetemINSS(): ?string
    {
        return $this->cRetemINSS;
    }

    /**
     * @param string|null $cRetemINSS
     * @return OsImpostos
     */
    public function setCRetemINSS(?string $cRetemINSS): OsImpostos
    {
        $this->cRetemINSS = $cRetemINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqRedBaseINSS(): ?float
    {
        return $this->nAliqRedBaseINSS;
    }

    /**
     * @param float|null $nAliqRedBaseINSS
     * @return OsImpostos
     */
    public function setNAliqRedBaseINSS(?float $nAliqRedBaseINSS): OsImpostos
    {
        $this->nAliqRedBaseINSS = $nAliqRedBaseINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqRedBaseCOFINS(): ?float
    {
        return $this->nAliqRedBaseCOFINS;
    }

    /**
     * @param float|null $nAliqRedBaseCOFINS
     * @return OsImpostos
     */
    public function setNAliqRedBaseCOFINS(?float $nAliqRedBaseCOFINS): OsImpostos
    {
        $this->nAliqRedBaseCOFINS = $nAliqRedBaseCOFINS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqRedBasePIS(): ?float
    {
        return $this->nAliqRedBasePIS;
    }

    /**
     * @param float|null $nAliqRedBasePIS
     * @return OsImpostos
     */
    public function setNAliqRedBasePIS(?float $nAliqRedBasePIS): OsImpostos
    {
        $this->nAliqRedBasePIS = $nAliqRedBasePIS;
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
     * @return OsImpostos
     */
    public function setLDeduzISS(?bool $lDeduzISS): OsImpostos
    {
        $this->lDeduzISS = $lDeduzISS;
        return $this;
    }

    public function toArray(): array {
        return array_filter([
            "cFixarISS" => $this->cFixarISS,
            "nAliqISS" => $this->nAliqISS,
            "nBaseISS" => $this->nBaseISS,
            "nTotDeducao" => $this->nTotDeducao,
            "nValorISS" => $this->nValorISS,
            "cUtilizaValorImposto" => $this->cUtilizaValorImposto,
            "cFixarIRRF" => $this->cFixarIRRF,
            "nAliqIRRF" => $this->nAliqIRRF,
            "nValorIRRF" => $this->nValorIRRF,
            "cRetemIRRF" => $this->cRetemIRRF,
            "cFixarPIS" => $this->cFixarPIS,
            "nAliqPIS" => $this->nAliqPIS,
            "nValorPIS" => $this->nValorPIS,
            "cRetemPIS" => $this->cRetemPIS,
            "cFixarCOFINS" => $this->cFixarCOFINS,
            "nAliqCOFINS" => $this->nAliqCOFINS,
            "nValorCOFINS" => $this->nValorCOFINS,
            "cRetemCOFINS" => $this->cRetemCOFINS,
            "cFixarCSLL" => $this->cFixarCSLL,
            "nAliqCSLL" => $this->nAliqCSLL,
            "nValorCSLL" => $this->nValorCSLL,
            "cRetemCSLL" => $this->cRetemCSLL,
            "cFixarINSS" => $this->cFixarINSS,
            "nAliqINSS" => $this->nAliqINSS,
            "nValorINSS" => $this->nValorINSS,
            "cRetemINSS" => $this->cRetemINSS,
            "nAliqRedBaseINSS" => $this->nAliqRedBaseINSS,
            "nAliqRedBaseCOFINS" => $this->nAliqRedBaseCOFINS,
            "nAliqRedBasePIS" => $this->nAliqRedBasePIS,
            "lDeduzISS" => $this->lDeduzISS,
        ], function ($v) {
            return !is_null($v);
        });
    }

}