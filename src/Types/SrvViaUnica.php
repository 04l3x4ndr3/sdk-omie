<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvViaUnica
{
    /** Indica se o serviço utiliza Nota Fiscal Via Única (Modelos 21 e 22)
     *
     * @var string|null
     */
    private ?string $cUtilizaViaUnica;

    /** Indica qual modelo de NF será emitida para o serviço
     *
     * @var string|null
     */
    private ?string $cModeloNF;

    /** Código CFOP para NF Via Única (Modelos 21 e 22)
     *
     * @var string|null
     */
    private ?string $cCFOP;

    /** Código da Classificação para NF Via Única (Modelos 21 e 22)
     *
     * @var string|null
     */
    private ?string $cClassifServico;

    /** Indicador do Tipo de Receita para NF Via Única (Modelos 21 e 22)
     *
     * @var string|null
     */
    private ?string $cTipoReceita;

    /** Código do tipo de utilização para NF Via Única (Modelos 21 e 22)
     *
     * @var string|null
     */
    private ?string $cTipoUtilizacao;

    /**
     * @param string|null $cUtilizaViaUnica
     * @param string|null $cModeloNF
     * @param string|null $cCFOP
     * @param string|null $cClassifServico
     * @param string|null $cTipoReceita
     * @param string|null $cTipoUtilizacao
     */
    public function __construct(
        ?string $cUtilizaViaUnica = null,
        ?string $cModeloNF = null,
        ?string $cCFOP = null,
        ?string $cClassifServico = null,
        ?string $cTipoReceita = null,
        ?string $cTipoUtilizacao = null
    )
    {
        $this->cUtilizaViaUnica = $cUtilizaViaUnica;
        $this->cModeloNF = $cModeloNF;
        $this->cCFOP = $cCFOP;
        $this->cClassifServico = $cClassifServico;
        $this->cTipoReceita = $cTipoReceita;
        $this->cTipoUtilizacao = $cTipoUtilizacao;
    }

    /**
     * @return string|null
     */
    public function getCUtilizaViaUnica(): ?string
    {
        return $this->cUtilizaViaUnica;
    }

    /**
     * @param string|null $cUtilizaViaUnica
     * @return SrvViaUnica
     */
    public function setCUtilizaViaUnica(?string $cUtilizaViaUnica): SrvViaUnica
    {
        $this->cUtilizaViaUnica = $cUtilizaViaUnica;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCModeloNF(): ?string
    {
        return $this->cModeloNF;
    }

    /**
     * @param string|null $cModeloNF
     * @return SrvViaUnica
     */
    public function setCModeloNF(?string $cModeloNF): SrvViaUnica
    {
        $this->cModeloNF = $cModeloNF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCFOP(): ?string
    {
        return $this->cCFOP;
    }

    /**
     * @param string|null $cCFOP
     * @return SrvViaUnica
     */
    public function setCCFOP(?string $cCFOP): SrvViaUnica
    {
        $this->cCFOP = $cCFOP;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCClassifServico(): ?string
    {
        return $this->cClassifServico;
    }

    /**
     * @param string|null $cClassifServico
     * @return SrvViaUnica
     */
    public function setCClassifServico(?string $cClassifServico): SrvViaUnica
    {
        $this->cClassifServico = $cClassifServico;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTipoReceita(): ?string
    {
        return $this->cTipoReceita;
    }

    /**
     * @param string|null $cTipoReceita
     * @return SrvViaUnica
     */
    public function setCTipoReceita(?string $cTipoReceita): SrvViaUnica
    {
        $this->cTipoReceita = $cTipoReceita;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTipoUtilizacao(): ?string
    {
        return $this->cTipoUtilizacao;
    }

    /**
     * @param string|null $cTipoUtilizacao
     * @return SrvViaUnica
     */
    public function setCTipoUtilizacao(?string $cTipoUtilizacao): SrvViaUnica
    {
        $this->cTipoUtilizacao = $cTipoUtilizacao;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cUtilizaViaUnica" => $this->cUtilizaViaUnica,
            "cModeloNF" => $this->cModeloNF,
            "cCFOP" => $this->cCFOP,
            "cClassifServico" => $this->cClassifServico,
            "cTipoReceita" => $this->cTipoReceita,
            "cTipoUtilizacao" => $this->cTipoUtilizacao,
        ], function ($v) {
            return !is_null($v);
        });
    }
}