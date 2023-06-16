<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class ClientesFiltro
{
    /** Código de Cliente / Fornecedor
     *
     * @var int|null
     */
    private ?int $codigo_cliente_omie;

    /** Código de Integração com sistemas legados
     *
     * @var string|null
     */
    private ?string $codigo_cliente_integracao;

    /** CNPJ / CPF
     *
     * @var string|null
     */
    private ?string $cnpj_cpf;

    /** Razão Social
     *
     * @var string|null
     */
    private ?string $razao_social;

    /** Nome Fantasia
     *
     * @var string|null
     */
    private ?string $nome_fantasia;

    /** Endereço
     *
     * @var string|null
     */
    private ?string $endereco;

    /** Bairro
     *
     * @var string|null
     */
    private ?string $bairro;

    /** Código da Cidade
     *
     * @var string|null
     */
    private ?string $cidade;

    /** Sigla do Estado
     *
     * @var string|null
     */
    private ?string $estado;

    /** CEP
     *
     * @var string|null
     */
    private ?string $cep;

    /** Nome para contato
     *
     * @var string|null
     */
    private ?string $contato;

    /** E-Mail
     *
     * @var string|null
     */
    private ?string $email;

    /** WebSite
     *
     * @var string|null
     */
    private ?string $homepage;

    /** Inscrição Municipal
     *
     * @var string|null
     */
    private ?string $inscricao_municipal;

    /** Inscrição Estadual
     *
     * @var string|null
     */
    private ?string $inscricao_estadual;

    /** Inscrição Suframa
     *
     * @var string|null
     */
    private ?string $inscricao_suframa;

    /** Pessoa Física
     *
     * @var string|null
     */
    private ?string $pessoa_fisica;

    /** Indica se o Cliente / Fornecedor é Optante do Simples Nacional
     *
     * @var string|null
     */
    private ?string $optante_simples_nacional;

    /** Indica se o cliente está inativo [S/N]
     *
     * @var string|null
     */
    private ?string $inativo;

    /** Tags do Cliente ou Fornecedor
     *
     * @var array|null
     */
    private ?array $tags;

    /**
     * @param int|null $codigo_cliente_omie
     * @param string|null $codigo_cliente_integracao
     * @param string|null $cnpj_cpf
     * @param string|null $razao_social
     * @param string|null $nome_fantasia
     * @param string|null $endereco
     * @param string|null $bairro
     * @param string|null $cidade
     * @param string|null $estado
     * @param string|null $cep
     * @param string|null $contato
     * @param string|null $email
     * @param string|null $homepage
     * @param string|null $inscricao_municipal
     * @param string|null $inscricao_estadual
     * @param string|null $inscricao_suframa
     * @param string|null $pessoa_fisica
     * @param string|null $optante_simples_nacional
     * @param string|null $inativo
     * @param array|null $tags
     */
    public function __construct(
        ?int    $codigo_cliente_omie = null,
        ?string $codigo_cliente_integracao = null,
        ?string $cnpj_cpf = null,
        ?string $razao_social = null,
        ?string $nome_fantasia = null,
        ?string $endereco = null,
        ?string $bairro = null,
        ?string $cidade = null,
        ?string $estado = null,
        ?string $cep = null,
        ?string $contato = null,
        ?string $email = null,
        ?string $homepage = null,
        ?string $inscricao_municipal = null,
        ?string $inscricao_estadual = null,
        ?string $inscricao_suframa = null,
        ?string $pessoa_fisica = null,
        ?string $optante_simples_nacional = null,
        ?string $inativo = null,
        ?array  $tags = null
    )
    {
        $this->codigo_cliente_omie = $codigo_cliente_omie;
        $this->codigo_cliente_integracao = $codigo_cliente_integracao;
        $this->cnpj_cpf = $cnpj_cpf;
        $this->razao_social = $razao_social;
        $this->nome_fantasia = $nome_fantasia;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->contato = $contato;
        $this->email = $email;
        $this->homepage = $homepage;
        $this->inscricao_municipal = $inscricao_municipal;
        $this->inscricao_estadual = $inscricao_estadual;
        $this->inscricao_suframa = $inscricao_suframa;
        $this->pessoa_fisica = $pessoa_fisica;
        $this->optante_simples_nacional = $optante_simples_nacional;
        $this->inativo = $inativo;
        $this->tags = $tags;
    }

    /**
     * @return int|null
     */
    public function getCodigoClienteOmie(): ?int
    {
        return $this->codigo_cliente_omie;
    }

    /**
     * @param int|null $codigo_cliente_omie
     * @return ClientesFiltro
     */
    public function setCodigoClienteOmie(?int $codigo_cliente_omie): ClientesFiltro
    {
        $this->codigo_cliente_omie = $codigo_cliente_omie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoClienteIntegracao(): ?string
    {
        return $this->codigo_cliente_integracao;
    }

    /**
     * @param string|null $codigo_cliente_integracao
     * @return ClientesFiltro
     */
    public function setCodigoClienteIntegracao(?string $codigo_cliente_integracao): ClientesFiltro
    {
        $this->codigo_cliente_integracao = $codigo_cliente_integracao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCnpjCpf(): ?string
    {
        return $this->cnpj_cpf;
    }

    /**
     * @param string|null $cnpj_cpf
     * @return ClientesFiltro
     */
    public function setCnpjCpf(?string $cnpj_cpf): ClientesFiltro
    {
        $this->cnpj_cpf = $cnpj_cpf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRazaoSocial(): ?string
    {
        return $this->razao_social;
    }

    /**
     * @param string|null $razao_social
     * @return ClientesFiltro
     */
    public function setRazaoSocial(?string $razao_social): ClientesFiltro
    {
        $this->razao_social = $razao_social;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeFantasia(): ?string
    {
        return $this->nome_fantasia;
    }

    /**
     * @param string|null $nome_fantasia
     * @return ClientesFiltro
     */
    public function setNomeFantasia(?string $nome_fantasia): ClientesFiltro
    {
        $this->nome_fantasia = $nome_fantasia;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    /**
     * @param string|null $endereco
     * @return ClientesFiltro
     */
    public function setEndereco(?string $endereco): ClientesFiltro
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    /**
     * @param string|null $bairro
     * @return ClientesFiltro
     */
    public function setBairro(?string $bairro): ClientesFiltro
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    /**
     * @param string|null $cidade
     * @return ClientesFiltro
     */
    public function setCidade(?string $cidade): ClientesFiltro
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    /**
     * @param string|null $estado
     * @return ClientesFiltro
     */
    public function setEstado(?string $estado): ClientesFiltro
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCep(): ?string
    {
        return $this->cep;
    }

    /**
     * @param string|null $cep
     * @return ClientesFiltro
     */
    public function setCep(?string $cep): ClientesFiltro
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContato(): ?string
    {
        return $this->contato;
    }

    /**
     * @param string|null $contato
     * @return ClientesFiltro
     */
    public function setContato(?string $contato): ClientesFiltro
    {
        $this->contato = $contato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return ClientesFiltro
     */
    public function setEmail(?string $email): ClientesFiltro
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param string|null $homepage
     * @return ClientesFiltro
     */
    public function setHomepage(?string $homepage): ClientesFiltro
    {
        $this->homepage = $homepage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricao_municipal;
    }

    /**
     * @param string|null $inscricao_municipal
     * @return ClientesFiltro
     */
    public function setInscricaoMunicipal(?string $inscricao_municipal): ClientesFiltro
    {
        $this->inscricao_municipal = $inscricao_municipal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricao_estadual;
    }

    /**
     * @param string|null $inscricao_estadual
     * @return ClientesFiltro
     */
    public function setInscricaoEstadual(?string $inscricao_estadual): ClientesFiltro
    {
        $this->inscricao_estadual = $inscricao_estadual;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscricaoSuframa(): ?string
    {
        return $this->inscricao_suframa;
    }

    /**
     * @param string|null $inscricao_suframa
     * @return ClientesFiltro
     */
    public function setInscricaoSuframa(?string $inscricao_suframa): ClientesFiltro
    {
        $this->inscricao_suframa = $inscricao_suframa;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPessoaFisica(): ?string
    {
        return $this->pessoa_fisica;
    }

    /**
     * @param string|null $pessoa_fisica
     * @return ClientesFiltro
     */
    public function setPessoaFisica(?string $pessoa_fisica): ClientesFiltro
    {
        $this->pessoa_fisica = $pessoa_fisica;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOptanteSimplesNacional(): ?string
    {
        return $this->optante_simples_nacional;
    }

    /**
     * @param string|null $optante_simples_nacional
     * @return ClientesFiltro
     */
    public function setOptanteSimplesNacional(?string $optante_simples_nacional): ClientesFiltro
    {
        $this->optante_simples_nacional = $optante_simples_nacional;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInativo(): ?string
    {
        return $this->inativo;
    }

    /**
     * @param string|null $inativo
     * @return ClientesFiltro
     */
    public function setInativo(?string $inativo): ClientesFiltro
    {
        $this->inativo = $inativo;
        return $this;
    }

    /** Lista de Tags
     *
     * @param Tags $tag
     * @return $this
     */
    public function addTags(Tags $tag): ClientesFiltro
    {
        $this->tags[] = $tag->toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function toArray(): array {
        return array_filter([
            "codigo_cliente_omie" => $this->codigo_cliente_omie,
            "codigo_cliente_integracao" => $this->codigo_cliente_integracao,
            "cnpj_cpf" => $this->cnpj_cpf,
            "razao_social" => $this->razao_social,
            "nome_fantasia" => $this->nome_fantasia,
            "endereco" => $this->endereco,
            "bairro" => $this->bairro,
            "cidade" => $this->cidade,
            "estado" => $this->estado,
            "cep" => $this->cep,
            "contato" => $this->contato,
            "email" => $this->email,
            "homepage" => $this->homepage,
            "inscricao_municipal" => $this->inscricao_municipal,
            "inscricao_estadual" => $this->inscricao_estadual,
            "inscricao_suframa" => $this->inscricao_suframa,
            "pessoa_fisica" => $this->pessoa_fisica,
            "optante_simples_nacional" => $this->optante_simples_nacional,
            "inativo" => $this->inativo,
            "tags" => $this->tags,
        ], function ($v) {
            return !is_null($v);
        });
    }
}