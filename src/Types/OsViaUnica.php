<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsViaUnica
{
    /** Indica qual modelo de NF será emitida para o serviço.
     *
     * @var string|null
     */
    private ?string $cModeloNF;

    /** Código CFOP para NF Via Única (Modelos 21 e 22).
     *
     * @var string|null
     */
    private ?string $cCFOP;

    /** Código da Classificação para NF Via Única (Modelos 21 e 22).
     *
     * @var string|null
     */
    private ?string $cClassifServico;

    /** Indicador do Tipo de Receita para NF Via Única (Modelos 21 e 22).
     *
     * @var string|null
     */
    private ?string $cTipoReceita;

    /** Código do tipo de utilização para NF Via Única (Modelos 21 e 22).
     *
     * @var string|null
     */
    private ?string $cTipoUtilizacao;

    /**
     * @param string|null $cModeloNF
     * @param string|null $cCFOP
     * @param string|null $cClassifServico
     * @param string|null $cTipoReceita
     * @param string|null $cTipoUtilizacao
     */
    public function __construct(
        ?string $cModeloNF = null,
        ?string $cCFOP = null,
        ?string $cClassifServico = null,
        ?string $cTipoReceita = null,
        ?string $cTipoUtilizacao = null
    )
    {
        $this->cModeloNF = $cModeloNF;
        $this->cCFOP = $cCFOP;
        $this->cClassifServico = $cClassifServico;
        $this->cTipoReceita = $cTipoReceita;
        $this->cTipoUtilizacao = $cTipoUtilizacao;
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
     * @return OsViaUnica
     */
    public function setCModeloNF(?string $cModeloNF): OsViaUnica
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
     * @return OsViaUnica
     */
    public function setCCFOP(?string $cCFOP): OsViaUnica
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
     * @return OsViaUnica
     */
    public function setCClassifServico(?string $cClassifServico): OsViaUnica
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
     * @return OsViaUnica
     */
    public function setCTipoReceita(?string $cTipoReceita): OsViaUnica
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
     * @return OsViaUnica
     */
    public function setCTipoUtilizacao(?string $cTipoUtilizacao): OsViaUnica
    {
        $this->cTipoUtilizacao = $cTipoUtilizacao;
        return $this;
    }

    public function toArray(): array {
        return array_filter([
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