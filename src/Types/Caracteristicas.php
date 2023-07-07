<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class Caracteristicas
{
    /** Nome da característica
     *
     * @var string|null
     */
    private ?string $campo;

    /** Conteúdo do característica
     *
     * @var string|null
     */
    private ?string $conteudo;

    /**
     * @param string|null $campo
     * @param string|null $conteudo
     */
    public function __construct(?string $campo = null, ?string $conteudo = null)
    {
        $this->campo = $campo;
        $this->conteudo = $conteudo;
    }

    /**
     * @return string|null
     */
    public function getCampo(): ?string
    {
        return $this->campo;
    }

    /**
     * @param string|null $campo
     * @return Caracteristicas
     */
    public function setCampo(?string $campo): Caracteristicas
    {
        $this->campo = $campo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConteudo(): ?string
    {
        return $this->conteudo;
    }

    /**
     * @param string|null $conteudo
     * @return Caracteristicas
     */
    public function setConteudo(?string $conteudo): Caracteristicas
    {
        $this->conteudo = $conteudo;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "campo" => $this->campo,
            "conteudo" => $this->conteudo,
        ], function ($v) {
            return !is_null($v);
        });
    }
}