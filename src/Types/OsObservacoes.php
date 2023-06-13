<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class OsObservacoes
{
    /** Observações da Ordem de Serviço. (Essas informação não serão exibidas na Nota Fiscal).
     *
     * @var string|null
     */
    private ?string $cObsOS;

    /**
     * @param string|null $cObsOS
     */
    public function __construct(?string $cObsOS = null)
    {
        $this->cObsOS = $cObsOS;
    }

    /**
     * @return string|null
     */
    public function getCObsOS(): ?string
    {
        return $this->cObsOS;
    }

    /**
     * @param string|null $cObsOS
     * @return OsObservacoes
     */
    public function setCObsOS(?string $cObsOS): OsObservacoes
    {
        $this->cObsOS = $cObsOS;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cObsOS" => $this->cObsOS,
        ], function ($v) {
            return !is_null($v);
        });
    }
}