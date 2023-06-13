<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class Email
{
    /** Enviar um recibo de prestação de serviços (ao invés da NFS-e)
     *
     * @var string|null
     */
    private ?string $cEnvRecibo;

    /** Enviar ao Cliente e-mail com o link do site da prefeitura para consultar a NFSe emitida
     *
     * @var string|null
     */
    private ?string $cEnvLink;

    /** Enviar ao cliente e-mail com os Boletos de Cobrança gerados pelo faturamento
     *
     * @var string|null
     */
    private ?string $cEnvBoleto;

    /** Enviar ao cliente e-mail com o PIX de Cobrança gerado pelo faturamento
     *
     * @var string|null
     */
    private ?string $cEnvPix;

    /** Utilizar os seguintes endereços de e-mail
     *
     * @var string|null
     */
    private ?string $cEnviarPara;

    /** Enviar ao cliente Via Única (Notas Fiscais Modelos 21 e 22)
     *
     * @var string|null
     */
    private ?string $cEnvViaUnica;

    /**
     * @param string|null $cEnvRecibo
     * @param string|null $cEnvLink
     * @param string|null $cEnvBoleto
     * @param string|null $cEnvPix
     * @param string|null $cEnviarPara
     * @param string|null $cEnvViaUnica
     */
    public function __construct(
        ?string $cEnvRecibo = null,
        ?string $cEnvLink = null,
        ?string $cEnvBoleto = null,
        ?string $cEnvPix = null,
        ?string $cEnviarPara = null,
        ?string $cEnvViaUnica = null
    )
    {
        $this->cEnvRecibo = $cEnvRecibo;
        $this->cEnvLink = $cEnvLink;
        $this->cEnvBoleto = $cEnvBoleto;
        $this->cEnvPix = $cEnvPix;
        $this->cEnviarPara = $cEnviarPara;
        $this->cEnvViaUnica = $cEnvViaUnica;
    }

    /**
     * @return string|null
     */
    public function getCEnvRecibo(): ?string
    {
        return $this->cEnvRecibo;
    }

    /**
     * @param string|null $cEnvRecibo
     * @return Email
     */
    public function setCEnvRecibo(?string $cEnvRecibo): Email
    {
        $this->cEnvRecibo = $cEnvRecibo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvLink(): ?string
    {
        return $this->cEnvLink;
    }

    /**
     * @param string|null $cEnvLink
     * @return Email
     */
    public function setCEnvLink(?string $cEnvLink): Email
    {
        $this->cEnvLink = $cEnvLink;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvBoleto(): ?string
    {
        return $this->cEnvBoleto;
    }

    /**
     * @param string|null $cEnvBoleto
     * @return Email
     */
    public function setCEnvBoleto(?string $cEnvBoleto): Email
    {
        $this->cEnvBoleto = $cEnvBoleto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvPix(): ?string
    {
        return $this->cEnvPix;
    }

    /**
     * @param string|null $cEnvPix
     * @return Email
     */
    public function setCEnvPix(?string $cEnvPix): Email
    {
        $this->cEnvPix = $cEnvPix;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnviarPara(): ?string
    {
        return $this->cEnviarPara;
    }

    /**
     * @param string|null $cEnviarPara
     * @return Email
     */
    public function setCEnviarPara(?string $cEnviarPara): Email
    {
        $this->cEnviarPara = $cEnviarPara;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCEnvViaUnica(): ?string
    {
        return $this->cEnvViaUnica;
    }

    /**
     * @param string|null $cEnvViaUnica
     * @return Email
     */
    public function setCEnvViaUnica(?string $cEnvViaUnica): Email
    {
        $this->cEnvViaUnica = $cEnvViaUnica;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "cEnvRecibo" => $this->cEnvRecibo,
            "cEnvLink" => $this->cEnvLink,
            "cEnvBoleto" => $this->cEnvBoleto,
            "cEnvPix" => $this->cEnvPix,
            "cEnviarPara" => $this->cEnviarPara,
            "cEnvViaUnica" => $this->cEnvViaUnica,
        ], function ($v) {
            return !is_null($v);
        });
    }
}