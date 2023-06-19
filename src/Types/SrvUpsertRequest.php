<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvUpsertRequest
{
    /** Dados da integração do serviço
     *
     * @var SrvIntEditar|null
     */
    private ?SrvIntEditar $intEditar;

    /** Dados do Serviço
     *
     * @var Cabecalho|null
     */
    private ?Cabecalho $cabecalho;

    /** Descrição do Serviço
     *
     * @var Descricao|null
     */
    private ?Descricao $descricao;

    /** OsImpostos e Retenções do serviço
     *
     * @var SrvImpostos|null
     */
    private ?SrvImpostos $impostos;

    /** NF Via Única (Modelo 21 e 22)
     *
     * @var SrvViaUnica|null
     */
    private ?SrvViaUnica $viaUnica;

    /**
     * @param SrvIntEditar|null $intEditar
     * @param Cabecalho|null $cabecalho
     * @param Descricao|null $descricao
     * @param SrvImpostos|null $impostos
     * @param SrvViaUnica|null $viaUnica
     */
    public function __construct(
        ?SrvIntEditar $intEditar = null,
        ?Cabecalho $cabecalho = null,
        ?Descricao $descricao = null,
        ?SrvImpostos $impostos = null,
        ?SrvViaUnica $viaUnica = null
    )
    {
        $this->intEditar = $intEditar;
        $this->cabecalho = $cabecalho;
        $this->descricao = $descricao;
        $this->impostos = $impostos;
        $this->viaUnica = $viaUnica;
    }

    /**
     * @return SrvIntEditar|null
     */
    public function getIntEditar(): ?SrvIntEditar
    {
        return $this->intEditar;
    }

    /**
     * @param SrvIntEditar|null $intEditar
     * @return SrvUpsertRequest
     */
    public function setIntEditar(?SrvIntEditar $intEditar): SrvUpsertRequest
    {
        $this->intEditar = $intEditar;
        return $this;
    }

    /**
     * @return Cabecalho|null
     */
    public function getCabecalho(): ?Cabecalho
    {
        return $this->cabecalho;
    }

    /**
     * @param Cabecalho|null $cabecalho
     * @return SrvUpsertRequest
     */
    public function setCabecalho(?Cabecalho $cabecalho): SrvUpsertRequest
    {
        $this->cabecalho = $cabecalho;
        return $this;
    }

    /**
     * @return Descricao|null
     */
    public function getDescricao(): ?Descricao
    {
        return $this->descricao;
    }

    /**
     * @param Descricao|null $descricao
     * @return SrvUpsertRequest
     */
    public function setDescricao(?Descricao $descricao): SrvUpsertRequest
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return SrvImpostos|null
     */
    public function getImpostos(): ?SrvImpostos
    {
        return $this->impostos;
    }

    /**
     * @param SrvImpostos|null $impostos
     * @return SrvUpsertRequest
     */
    public function setImpostos(?SrvImpostos $impostos): SrvUpsertRequest
    {
        $this->impostos = $impostos;
        return $this;
    }

    /**
     * @return SrvViaUnica|null
     */
    public function getViaUnica(): ?SrvViaUnica
    {
        return $this->viaUnica;
    }

    /**
     * @param SrvViaUnica|null $viaUnica
     * @return SrvUpsertRequest
     */
    public function setViaUnica(?SrvViaUnica $viaUnica): SrvUpsertRequest
    {
        $this->viaUnica = $viaUnica;
        return $this;
    }

    public function toArray(): array {
        return array_filter([
            "intEditar" =>$this->intEditar,
            "cabecalho" =>$this->cabecalho,
            "descricao" =>$this->descricao,
            "impostos" =>$this->impostos,
            "viaUnica" =>$this->viaUnica,
        ], function ($v) {
            return !is_null($v);
        });
    }
}