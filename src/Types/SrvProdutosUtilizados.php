<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvProdutosUtilizados
{
    /** Atualiza automaticamente. (S/N).
     * @var string|null
     */
    private ?string $cAtualizarProdutos;

    /** Produtos utilizados no serviço
     * @var array|null
     */
    private ?array $produtoUtilizado;

    /**
     * @param string|null $cAtualizarProdutos
     * @param array|null $produtoUtilizado
     */
    public function __construct(?string $cAtualizarProdutos = null, ?array $produtoUtilizado = null)
    {
        $this->cAtualizarProdutos = $cAtualizarProdutos;
        $this->produtoUtilizado = $produtoUtilizado;
    }

    /**
     * @return string|null
     */
    public function getCAtualizarProdutos(): ?string
    {
        return $this->cAtualizarProdutos;
    }

    /**
     * @param string|null $cAtualizarProdutos
     * @return SrvProdutosUtilizados
     */
    public function setCAtualizarProdutos(?string $cAtualizarProdutos): SrvProdutosUtilizados
    {
        $this->cAtualizarProdutos = $cAtualizarProdutos;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getProdutoUtilizado(): ?array
    {
        return $this->produtoUtilizado;
    }

    /** Lista de produtoUtilizado
     *
     * @param SrvProdutoUtilizado $produtoUtilizado
     * @return $this
     */
    public function addSrvProdutoUtilizado(SrvProdutoUtilizado $produtoUtilizado): OsCadastro
    {
        $this->produtoUtilizado[] = $produtoUtilizado->toArray();
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cAtualizarProdutos" => $this->cAtualizarProdutos,
            "produtoUtilizado" => $this->produtoUtilizado,
        ], function ($v) {
            return !is_null($v);
        });
    }
}