<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class EnderecoEntrega
{
    /** Nome / Razão Social
     *
     * @var string|null
     */
    private ?string $entRazaoSocial;

    /** CNPJ / CPF do recebedor
     *
     * @var string|null
     */
    private ?string $entCnpjCpf;

    /** Endereço
     *
     * @var string|null
     */
    private ?string $entEndereco;

    /** Número do endereço
     *
     * @var string|null
     */
    private ?string $entNumero;

    /** Complemento do endereço
     *
     * @var string|null
     */
    private ?string $entComplemento;

    /** Bairro
     *
     * @var string|null
     */
    private ?string $entBairro;

    /** CEP
     *
     * @var string|null
     */
    private ?string $entCEP;

    /** Estado
     *
     * @var string|null
     */
    private ?string $entEstado;

    /** Cidade
     *
     * @var string|null
     */
    private ?string $entCidade;

    /** Separar endereço
     *
     * @var string|null
     */
    private ?string $entSepararEndereco;

    /** Telefone
     *
     * @var string|null
     */
    private ?string $entTelefone;

    /** Inscrição Estadual
     *
     * @var string|null
     */
    private ?string $entIE;

    /**
     * @param string|null $entRazaoSocial
     * @param string|null $entCnpjCpf
     * @param string|null $entEndereco
     * @param string|null $entNumero
     * @param string|null $entComplemento
     * @param string|null $entBairro
     * @param string|null $entCEP
     * @param string|null $entEstado
     * @param string|null $entCidade
     * @param string|null $entSepararEndereco
     * @param string|null $entTelefone
     * @param string|null $entIE
     */
    public function __construct(
        ?string $entRazaoSocial = null,
        ?string $entCnpjCpf = null,
        ?string $entEndereco = null,
        ?string $entNumero = null,
        ?string $entComplemento = null,
        ?string $entBairro = null,
        ?string $entCEP = null,
        ?string $entEstado = null,
        ?string $entCidade = null,
        ?string $entSepararEndereco = null,
        ?string $entTelefone = null,
        ?string $entIE = null
    )
    {
        $this->entRazaoSocial = $entRazaoSocial;
        $this->entCnpjCpf = $entCnpjCpf;
        $this->entEndereco = $entEndereco;
        $this->entNumero = $entNumero;
        $this->entComplemento = $entComplemento;
        $this->entBairro = $entBairro;
        $this->entCEP = $entCEP;
        $this->entEstado = $entEstado;
        $this->entCidade = $entCidade;
        $this->entSepararEndereco = $entSepararEndereco;
        $this->entTelefone = $entTelefone;
        $this->entIE = $entIE;
    }

    /**
     * @return string|null
     */
    public function getEntRazaoSocial(): ?string
    {
        return $this->entRazaoSocial;
    }

    /**
     * @param string|null $entRazaoSocial
     * @return EnderecoEntrega
     */
    public function setEntRazaoSocial(?string $entRazaoSocial): EnderecoEntrega
    {
        $this->entRazaoSocial = $entRazaoSocial;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntCnpjCpf(): ?string
    {
        return $this->entCnpjCpf;
    }

    /**
     * @param string|null $entCnpjCpf
     * @return EnderecoEntrega
     */
    public function setEntCnpjCpf(?string $entCnpjCpf): EnderecoEntrega
    {
        $this->entCnpjCpf = $entCnpjCpf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntEndereco(): ?string
    {
        return $this->entEndereco;
    }

    /**
     * @param string|null $entEndereco
     * @return EnderecoEntrega
     */
    public function setEntEndereco(?string $entEndereco): EnderecoEntrega
    {
        $this->entEndereco = $entEndereco;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntNumero(): ?string
    {
        return $this->entNumero;
    }

    /**
     * @param string|null $entNumero
     * @return EnderecoEntrega
     */
    public function setEntNumero(?string $entNumero): EnderecoEntrega
    {
        $this->entNumero = $entNumero;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntComplemento(): ?string
    {
        return $this->entComplemento;
    }

    /**
     * @param string|null $entComplemento
     * @return EnderecoEntrega
     */
    public function setEntComplemento(?string $entComplemento): EnderecoEntrega
    {
        $this->entComplemento = $entComplemento;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntBairro(): ?string
    {
        return $this->entBairro;
    }

    /**
     * @param string|null $entBairro
     * @return EnderecoEntrega
     */
    public function setEntBairro(?string $entBairro): EnderecoEntrega
    {
        $this->entBairro = $entBairro;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntCEP(): ?string
    {
        return $this->entCEP;
    }

    /**
     * @param string|null $entCEP
     * @return EnderecoEntrega
     */
    public function setEntCEP(?string $entCEP): EnderecoEntrega
    {
        $this->entCEP = $entCEP;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntEstado(): ?string
    {
        return $this->entEstado;
    }

    /**
     * @param string|null $entEstado
     * @return EnderecoEntrega
     */
    public function setEntEstado(?string $entEstado): EnderecoEntrega
    {
        $this->entEstado = $entEstado;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntCidade(): ?string
    {
        return $this->entCidade;
    }

    /**
     * @param string|null $entCidade
     * @return EnderecoEntrega
     */
    public function setEntCidade(?string $entCidade): EnderecoEntrega
    {
        $this->entCidade = $entCidade;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntSepararEndereco(): ?string
    {
        return $this->entSepararEndereco;
    }

    /**
     * @param string|null $entSepararEndereco
     * @return EnderecoEntrega
     */
    public function setEntSepararEndereco(?string $entSepararEndereco): EnderecoEntrega
    {
        $this->entSepararEndereco = $entSepararEndereco;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntTelefone(): ?string
    {
        return $this->entTelefone;
    }

    /**
     * @param string|null $entTelefone
     * @return EnderecoEntrega
     */
    public function setEntTelefone(?string $entTelefone): EnderecoEntrega
    {
        $this->entTelefone = $entTelefone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEntIE(): ?string
    {
        return $this->entIE;
    }

    /**
     * @param string|null $entIE
     * @return EnderecoEntrega
     */
    public function setEntIE(?string $entIE): EnderecoEntrega
    {
        $this->entIE = $entIE;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "entRazaoSocial" => $this->entRazaoSocial,
            "entCnpjCpf" => $this->entCnpjCpf,
            "entEndereco" => $this->entEndereco,
            "entNumero" => $this->entNumero,
            "entComplemento" => $this->entComplemento,
            "entBairro" => $this->entBairro,
            "entCEP" => $this->entCEP,
            "entEstado" => $this->entEstado,
            "entCidade" => $this->entCidade,
            "entSepararEndereco" => $this->entSepararEndereco,
            "entTelefone" => $this->entTelefone,
            "entIE" => $this->entIE,
        ], function ($v) {
            return !is_null($v);
        });
    }
}