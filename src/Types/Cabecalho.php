<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class Cabecalho
{
    /** Descrição Resumida do serviço prestado
     *
     * @var string|null
     */
    private ?string $cDescricao;

    /** Código do Serviço
     *
     * @var string|null
     */
    private ?string $cCodigo;

    /** ID da Tributação dos Serviços
     *
     * @var string|null
     */
    private ?string $cIdTrib;

    /** Código do Serviço Municipal
     *
     * @var string|null
     */
    private ?string $cCodServMun;

    /** Código do Serviço LC 116
     *
     * @var string|null
     */
    private ?string $cCodLC116;

    /** Id do NBS
     *
     * @var string|null
     */
    private ?string $nIdNBS;

    /** Preço Unitário do Serviço
     *
     * @var float|null
     */
    private ?float $nPrecoUnit;

    /** Código da Categoria
     *
     * @var string|null
     */
    private ?string $cCodCateg;

    /**
     * @param string|null $cDescricao
     * @param string|null $cCodigo
     * @param string|null $cIdTrib
     * @param string|null $cCodServMun
     * @param string|null $cCodLC116
     * @param string|null $nIdNBS
     * @param float|null $nPrecoUnit
     * @param string|null $cCodCateg
     */
    public function __construct(
        ?string $cDescricao = null,
        ?string $cCodigo = null,
        ?string $cIdTrib = null,
        ?string $cCodServMun = null,
        ?string $cCodLC116 = null,
        ?string $nIdNBS = null,
        ?float  $nPrecoUnit = null,
        ?string $cCodCateg = null
    )
    {
        $this->cDescricao = $cDescricao;
        $this->cCodigo = $cCodigo;
        $this->cIdTrib = $cIdTrib;
        $this->cCodServMun = $cCodServMun;
        $this->cCodLC116 = $cCodLC116;
        $this->nIdNBS = $nIdNBS;
        $this->nPrecoUnit = $nPrecoUnit;
        $this->cCodCateg = $cCodCateg;
    }

    /**
     * @return string|null
     */
    public function getCDescricao(): ?string
    {
        return $this->cDescricao;
    }

    /**
     * @param string|null $cDescricao
     * @return Cabecalho
     */
    public function setCDescricao(?string $cDescricao): Cabecalho
    {
        $this->cDescricao = $cDescricao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodigo(): ?string
    {
        return $this->cCodigo;
    }

    /**
     * @param string|null $cCodigo
     * @return Cabecalho
     */
    public function setCCodigo(?string $cCodigo): Cabecalho
    {
        $this->cCodigo = $cCodigo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCIdTrib(): ?string
    {
        return $this->cIdTrib;
    }

    /**
     * @param string|null $cIdTrib
     * @return Cabecalho
     */
    public function setCIdTrib(?string $cIdTrib): Cabecalho
    {
        $this->cIdTrib = $cIdTrib;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodServMun(): ?string
    {
        return $this->cCodServMun;
    }

    /**
     * @param string|null $cCodServMun
     * @return Cabecalho
     */
    public function setCCodServMun(?string $cCodServMun): Cabecalho
    {
        $this->cCodServMun = $cCodServMun;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodLC116(): ?string
    {
        return $this->cCodLC116;
    }

    /**
     * @param string|null $cCodLC116
     * @return Cabecalho
     */
    public function setCCodLC116(?string $cCodLC116): Cabecalho
    {
        $this->cCodLC116 = $cCodLC116;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNIdNBS(): ?string
    {
        return $this->nIdNBS;
    }

    /**
     * @param string|null $nIdNBS
     * @return Cabecalho
     */
    public function setNIdNBS(?string $nIdNBS): Cabecalho
    {
        $this->nIdNBS = $nIdNBS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNPrecoUnit(): ?float
    {
        return $this->nPrecoUnit;
    }

    /**
     * @param float|null $nPrecoUnit
     * @return Cabecalho
     */
    public function setNPrecoUnit(?float $nPrecoUnit): Cabecalho
    {
        $this->nPrecoUnit = $nPrecoUnit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodCateg(): ?string
    {
        return $this->cCodCateg;
    }

    /**
     * @param string|null $cCodCateg
     * @return Cabecalho
     */
    public function setCCodCateg(?string $cCodCateg): Cabecalho
    {
        $this->cCodCateg = $cCodCateg;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "cDescricao" => $this->cDescricao,
            "cCodigo" => $this->cCodigo,
            "cIdTrib" => $this->cIdTrib,
            "cCodServMun" => $this->cCodServMun,
            "cCodLC116" => $this->cCodLC116,
            "nIdNBS" => $this->nIdNBS,
            "nPrecoUnit" => $this->nPrecoUnit,
            "cCodCateg" => $this->cCodCateg,
        ], function ($v) {
            return !is_null($v);
        });
    }
}