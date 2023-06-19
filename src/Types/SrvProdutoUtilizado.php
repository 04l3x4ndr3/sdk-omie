<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class SrvProdutoUtilizado
{
    /** (Código interno utilizado apenas na API).
     *
     * @var int|null
     */
    private ?int $nIdItemPU;

    /** Pode ser: "A" - Alterar o item. "E" - Excluir o item. "I" - Incluir o item na alteração.
     *
     * @var string|null
     */
    private ?string $cAcaoItemPU;

    /** Código interno do produto
     *
     * @var int|null
     */
    private ?int $nCodProdutoPU;

    /** Quantidade
     *
     * @var float|null
     */
    private ?float $nQtdePU;

    /** Código do Local do Estoque
     *
     * @var int|null
     */
    private ?int $codigo_local_estoque;

    /**
     * @param int|null $nIdItemPU
     * @param string|null $cAcaoItemPU
     * @param int|null $nCodProdutoPU
     * @param float|null $nQtdePU
     * @param int|null $codigo_local_estoque
     */
    public function __construct(
        ?int    $nIdItemPU = null,
        ?string $cAcaoItemPU = null,
        ?int    $nCodProdutoPU = null,
        ?float  $nQtdePU = null,
        ?int    $codigo_local_estoque = null
    )
    {
        $this->nIdItemPU = $nIdItemPU;
        $this->cAcaoItemPU = $cAcaoItemPU;
        $this->nCodProdutoPU = $nCodProdutoPU;
        $this->nQtdePU = $nQtdePU;
        $this->codigo_local_estoque = $codigo_local_estoque;
    }

    /**
     * @return int|null
     */
    public function getNIdItemPU(): ?int
    {
        return $this->nIdItemPU;
    }

    /**
     * @param int|null $nIdItemPU
     * @return SrvProdutoUtilizado
     */
    public function setNIdItemPU(?int $nIdItemPU): SrvProdutoUtilizado
    {
        $this->nIdItemPU = $nIdItemPU;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCAcaoItemPU(): ?string
    {
        return $this->cAcaoItemPU;
    }

    /**
     * @param string|null $cAcaoItemPU
     * @return SrvProdutoUtilizado
     */
    public function setCAcaoItemPU(?string $cAcaoItemPU): SrvProdutoUtilizado
    {
        $this->cAcaoItemPU = $cAcaoItemPU;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodProdutoPU(): ?int
    {
        return $this->nCodProdutoPU;
    }

    /**
     * @param int|null $nCodProdutoPU
     * @return SrvProdutoUtilizado
     */
    public function setNCodProdutoPU(?int $nCodProdutoPU): SrvProdutoUtilizado
    {
        $this->nCodProdutoPU = $nCodProdutoPU;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNQtdePU(): ?float
    {
        return $this->nQtdePU;
    }

    /**
     * @param float|null $nQtdePU
     * @return SrvProdutoUtilizado
     */
    public function setNQtdePU(?float $nQtdePU): SrvProdutoUtilizado
    {
        $this->nQtdePU = $nQtdePU;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodigoLocalEstoque(): ?int
    {
        return $this->codigo_local_estoque;
    }

    /**
     * @param int|null $codigo_local_estoque
     * @return SrvProdutoUtilizado
     */
    public function setCodigoLocalEstoque(?int $codigo_local_estoque): SrvProdutoUtilizado
    {
        $this->codigo_local_estoque = $codigo_local_estoque;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "nIdItemPU" => $this->nIdItemPU,
            "cAcaoItemPU" => $this->cAcaoItemPU,
            "nCodProdutoPU" => $this->nCodProdutoPU,
            "nQtdePU" => $this->nQtdePU,
            "codigo_local_estoque" => $this->codigo_local_estoque,
        ], function ($v) {
            return !is_null($v);
        });
    }
}