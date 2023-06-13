<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class OsProdutosUtilizados
{
    /** Pode ser:
     * REM - Será gerado uma remessa dos produtos para o cliente.
     * EST - Será gerado uma saída de estoque.
     *
     * @var string|null
     */
    private ?string $cAcaoProdUtilizados;

    /** Código da Categoria da Remessa
     *
     * @var string|null
     */
    private ?string $cCodCategRem;

    /** Produtos utilizados no serviço
     *
     * @var array|null
     */
    private ?array $produtosUtilizados;

    /**
     * @param string|null $cAcaoProdUtilizados
     * @param string|null $cCodCategRem
     * @param array|null $produtosUtilizados
     */
    public function __construct(
        ?string $cAcaoProdUtilizados = null,
        ?string $cCodCategRem = null,
        ?array $produtosUtilizados = null
    )
    {
        $this->cAcaoProdUtilizados = $cAcaoProdUtilizados;
        $this->cCodCategRem = $cCodCategRem;
        $this->produtosUtilizados = $produtosUtilizados;
    }

    /**
     * @return string|null
     */
    public function getCAcaoProdUtilizados(): ?string
    {
        return $this->cAcaoProdUtilizados;
    }

    /**
     * @param string|null $cAcaoProdUtilizados
     * @return OsProdutosUtilizados
     */
    public function setCAcaoProdUtilizados(?string $cAcaoProdUtilizados): OsProdutosUtilizados
    {
        $this->cAcaoProdUtilizados = $cAcaoProdUtilizados;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodCategRem(): ?string
    {
        return $this->cCodCategRem;
    }

    /**
     * @param string|null $cCodCategRem
     * @return OsProdutosUtilizados
     */
    public function setCCodCategRem(?string $cCodCategRem): OsProdutosUtilizados
    {
        $this->cCodCategRem = $cCodCategRem;
        return $this;
    }


    /** Lista de produtoUtilizado
     *
     * @param OsProdutoUtilizado $produtoUtilizado
     * @return $this
     */
    public function addProdutosUtilizados(OsProdutoUtilizado $produtoUtilizado): OsCadastro
    {
        $this->produtosUtilizados[] = $produtoUtilizado->toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function getProdutosUtilizados(): ?array
    {
        return $this->produtosUtilizados;
    }

    public function toArray(): array {
        return array_filter([
            "cAcaoProdUtilizados" => $this->cAcaoProdUtilizados,
            "cCodCategRem" => $this->cCodCategRem,
            "produtosUtilizados" => $this->produtosUtilizados,
        ], function ($v) {
            return !is_null($v);
        });
    }
}