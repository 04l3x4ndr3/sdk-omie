<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class OsInfoCadastro
{
    /** "S" para Ordem de Serviço cancelada
     *
     * @var string|null
     */
    private ?string $cCancelada;

    /** "S" para Ordem de Serviço faturada com sucesso
     *
     * @var string|null
     */
    private ?string $cFaturada;

    /** Ambiente de emissão da NFS-e
     *
     * @var string|null
     */
    private ?string $cAmbiente;

    /** Data de Inclusão da Ordem de Serviço
     *
     * @var string|null
     */
    private ?string $dDtInc;

    /** Hora de inclusão da Ordem de Serviço
     *
     * @var string|null
     */
    private ?string $cHrInc;

    /** Data de Alteração da Ordem de Serviço
     *
     * @var string|null
     */
    private ?string $dDtAlt;

    /** Hora de Alteração da Ordem de Serviço
     *
     * @var string|null
     */
    private ?string $cHrAlt;

    /** Data de Faturamento
     *
     * @var string|null
     */
    private ?string $dDtFat;

    /** Hora do Faturamento
     *
     * @var string|null
     */
    private ?string $cHrFat;

    /** Data de Cancelamento
     *
     * @var string|null
     */
    private ?string $dDtCanc;

    /** Hora do Cancelamento
     *
     * @var string|null
     */
    private ?string $cHrCanc;

    /** Origem da Ordem de Serviço
     *
     * @var string|null
     */
    private ?string $cOrigem;

    /**
     * @param string|null $cCancelada
     * @param string|null $cFaturada
     * @param string|null $cAmbiente
     * @param string|null $dDtInc
     * @param string|null $cHrInc
     * @param string|null $dDtAlt
     * @param string|null $cHrAlt
     * @param string|null $dDtFat
     * @param string|null $cHrFat
     * @param string|null $dDtCanc
     * @param string|null $cHrCanc
     * @param string|null $cOrigem
     */
    public function __construct(
        ?string $cCancelada = null,
        ?string $cFaturada = null,
        ?string $cAmbiente = null,
        ?string $dDtInc = null,
        ?string $cHrInc = null,
        ?string $dDtAlt = null,
        ?string $cHrAlt = null,
        ?string $dDtFat = null,
        ?string $cHrFat = null,
        ?string $dDtCanc = null,
        ?string $cHrCanc = null,
        ?string $cOrigem = null)
    {
        $this->cCancelada = $cCancelada;
        $this->cFaturada = $cFaturada;
        $this->cAmbiente = $cAmbiente;
        $this->dDtInc = $dDtInc;
        $this->cHrInc = $cHrInc;
        $this->dDtAlt = $dDtAlt;
        $this->cHrAlt = $cHrAlt;
        $this->dDtFat = $dDtFat;
        $this->cHrFat = $cHrFat;
        $this->dDtCanc = $dDtCanc;
        $this->cHrCanc = $cHrCanc;
        $this->cOrigem = $cOrigem;
    }

    /**
     * @return string|null
     */
    public function getCCancelada(): ?string
    {
        return $this->cCancelada;
    }

    /**
     * @param string|null $cCancelada
     * @return OsInfoCadastro
     */
    public function setCCancelada(?string $cCancelada): OsInfoCadastro
    {
        $this->cCancelada = $cCancelada;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCFaturada(): ?string
    {
        return $this->cFaturada;
    }

    /**
     * @param string|null $cFaturada
     * @return OsInfoCadastro
     */
    public function setCFaturada(?string $cFaturada): OsInfoCadastro
    {
        $this->cFaturada = $cFaturada;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCAmbiente(): ?string
    {
        return $this->cAmbiente;
    }

    /**
     * @param string|null $cAmbiente
     * @return OsInfoCadastro
     */
    public function setCAmbiente(?string $cAmbiente): OsInfoCadastro
    {
        $this->cAmbiente = $cAmbiente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtInc(): ?string
    {
        return $this->dDtInc;
    }

    /**
     * @param string|null $dDtInc
     * @return OsInfoCadastro
     */
    public function setDDtInc(?string $dDtInc): OsInfoCadastro
    {
        $this->dDtInc = $dDtInc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrInc(): ?string
    {
        return $this->cHrInc;
    }

    /**
     * @param string|null $cHrInc
     * @return OsInfoCadastro
     */
    public function setCHrInc(?string $cHrInc): OsInfoCadastro
    {
        $this->cHrInc = $cHrInc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtAlt(): ?string
    {
        return $this->dDtAlt;
    }

    /**
     * @param string|null $dDtAlt
     * @return OsInfoCadastro
     */
    public function setDDtAlt(?string $dDtAlt): OsInfoCadastro
    {
        $this->dDtAlt = $dDtAlt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrAlt(): ?string
    {
        return $this->cHrAlt;
    }

    /**
     * @param string|null $cHrAlt
     * @return OsInfoCadastro
     */
    public function setCHrAlt(?string $cHrAlt): OsInfoCadastro
    {
        $this->cHrAlt = $cHrAlt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtFat(): ?string
    {
        return $this->dDtFat;
    }

    /**
     * @param string|null $dDtFat
     * @return OsInfoCadastro
     */
    public function setDDtFat(?string $dDtFat): OsInfoCadastro
    {
        $this->dDtFat = $dDtFat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrFat(): ?string
    {
        return $this->cHrFat;
    }

    /**
     * @param string|null $cHrFat
     * @return OsInfoCadastro
     */
    public function setCHrFat(?string $cHrFat): OsInfoCadastro
    {
        $this->cHrFat = $cHrFat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDtCanc(): ?string
    {
        return $this->dDtCanc;
    }

    /**
     * @param string|null $dDtCanc
     * @return OsInfoCadastro
     */
    public function setDDtCanc(?string $dDtCanc): OsInfoCadastro
    {
        $this->dDtCanc = $dDtCanc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCHrCanc(): ?string
    {
        return $this->cHrCanc;
    }

    /**
     * @param string|null $cHrCanc
     * @return OsInfoCadastro
     */
    public function setCHrCanc(?string $cHrCanc): OsInfoCadastro
    {
        $this->cHrCanc = $cHrCanc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCOrigem(): ?string
    {
        return $this->cOrigem;
    }

    /**
     * @param string|null $cOrigem
     * @return OsInfoCadastro
     */
    public function setCOrigem(?string $cOrigem): OsInfoCadastro
    {
        $this->cOrigem = $cOrigem;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cCancelada" => $this->cCancelada,
            "cFaturada" => $this->cFaturada,
            "cAmbiente" => $this->cAmbiente,
            "dDtInc" => $this->dDtInc,
            "cHrInc" => $this->cHrInc,
            "dDtAlt" => $this->dDtAlt,
            "cHrAlt" => $this->cHrAlt,
            "dDtFat" => $this->dDtFat,
            "cHrFat" => $this->cHrFat,
            "dDtCanc" => $this->dDtCanc,
            "cHrCanc" => $this->cHrCanc,
            "cOrigem" => $this->cOrigem,
        ], function ($v) {
            return !is_null($v);
        });
    }
}