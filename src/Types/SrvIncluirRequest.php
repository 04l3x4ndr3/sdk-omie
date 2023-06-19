<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvIncluirRequest
{
    /** Dados da integração do serviço
     *
     * @var IntIncluir|null
     */
    private ?IntIncluir $intIncluir;

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

    /** Produtos Utilizados no serviço
     *
     * @var SrvProdutosUtilizados|null
     */
    private ?SrvProdutosUtilizados $produtosUtilizados;

    /** NF Via Única (Modelo 21 e 22)
     *
     * @var SrvViaUnica|null
     */
    private ?SrvViaUnica $viaUnica;

    /**
     * @param IntIncluir|null $intIncluir
     * @param Cabecalho|null $cabecalho
     * @param Descricao|null $descricao
     * @param SrvImpostos|null $impostos
     * @param SrvProdutosUtilizados|null $produtosUtilizados
     * @param SrvViaUnica|null $viaUnica
     */
    public function __construct(
        ?IntIncluir            $intIncluir = null,
        ?Cabecalho             $cabecalho = null,
        ?Descricao             $descricao = null,
        ?SrvImpostos           $impostos = null,
        ?SrvProdutosUtilizados $produtosUtilizados = null,
        ?SrvViaUnica           $viaUnica = null
    )
    {
        $this->intIncluir = $intIncluir;
        $this->cabecalho = $cabecalho;
        $this->descricao = $descricao;
        $this->impostos = $impostos;
        $this->produtosUtilizados = $produtosUtilizados;
        $this->viaUnica = $viaUnica;
    }

    /**
     * @return IntIncluir|null
     */
    public function getIntIncluir(): ?IntIncluir
    {
        return $this->intIncluir;
    }

    /**
     * @param IntIncluir|null $intIncluir
     * @return SrvIncluirRequest
     */
    public function setIntIncluir(?IntIncluir $intIncluir): SrvIncluirRequest
    {
        $this->intIncluir = $intIncluir;
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
     * @return SrvIncluirRequest
     */
    public function setCabecalho(?Cabecalho $cabecalho): SrvIncluirRequest
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
     * @return SrvIncluirRequest
     */
    public function setDescricao(?Descricao $descricao): SrvIncluirRequest
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
     * @return SrvIncluirRequest
     */
    public function setImpostos(?SrvImpostos $impostos): SrvIncluirRequest
    {
        $this->impostos = $impostos;
        return $this;
    }

    /**
     * @return SrvProdutosUtilizados|null
     */
    public function getProdutosUtilizados(): ?SrvProdutosUtilizados
    {
        return $this->produtosUtilizados;
    }

    /**
     * @param SrvProdutosUtilizados|null $produtosUtilizados
     * @return SrvIncluirRequest
     */
    public function setProdutosUtilizados(?SrvProdutosUtilizados $produtosUtilizados): SrvIncluirRequest
    {
        $this->produtosUtilizados = $produtosUtilizados;
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
     * @return SrvIncluirRequest
     */
    public function setViaUnica(?SrvViaUnica $viaUnica): SrvIncluirRequest
    {
        $this->viaUnica = $viaUnica;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "intIncluir" => isset($this->intIncluir) ? $this->intIncluir->toArray() : null,
            "cabecalho" => isset($this->cabecalho) ? $this->cabecalho->toArray() : null,
            "descricao" => isset($this->descricao) ? $this->descricao->toArray() : null,
            "impostos" => isset($this->impostos) ? $this->impostos->toArray() : null,
            "produtosUtilizados" => isset($this->produtosUtilizados) ? $this->produtosUtilizados->toArray() : null,
            "viaUnica" => isset($this->viaUnica) ? $this->viaUnica->toArray() : null,
        ], function ($v) {
            return !is_null($v);
        });
    }
}