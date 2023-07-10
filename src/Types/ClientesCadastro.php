<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class ClientesCadastro
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

    /** Razão Social
     *
     * @var string|null
     */
    private ?string $razao_social;

    /** CNPJ / CPF
     *
     * @var string|null
     */
    private ?string $cnpj_cpf;

    /** Nome Fantasia
     *
     * @var string|null
     */
    private ?string $nome_fantasia;

    /** DDD Telefone
     *
     * @var string|null
     */
    private ?string $telefone1_ddd;

    /** Telefone para Contato
     *
     * @var string|null
     */
    private ?string $telefone1_numero;

    /** Nome para contato
     *
     * @var string|null
     */
    private ?string $contato;

    /** Endereço
     *
     * @var string|null
     */
    private ?string $endereco;

    /** Número do Endereço
     *
     * @var string|null
     */
    private ?string $endereco_numero;

    /** Bairro
     *
     * @var string|null
     */
    private ?string $bairro;

    /** Complemento para o Número do Endereço
     *
     * @var string|null
     */
    private ?string $complemento;

    /** Sigla do Estado
     *
     * @var string|null
     */
    private ?string $estado;

    /** Código da Cidade
     *
     * @var string|null
     */
    private ?string $cidade;

    /** CEP
     *
     * @var string|null
     */
    private ?string $cep;

    /** Código do País
     *
     * @var string|null
     */
    private ?string $codigo_pais;

    /** Separar endereço.
     *
     * @var string|null
     */
    private ?string $separar_endereco;

    /** Pesquisar CEP.
     *
     * @var string|null
     */
    private ?string $pesquisar_cep;

    /** DDD Telefone
     *
     * @var string|null
     */
    private ?string $telefone2_ddd;

    /** Telefone
     *
     * @var string|null
     */
    private ?string $telefone2_numero;

    /** DDD Fax
     *
     * @var string|null
     */
    private ?string $fax_ddd;

    /** Fax
     *
     * @var string|null
     */
    private ?string $fax_numero;

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

    /** Inscrição Estadual
     *
     * @var string|null
     */
    private ?string $inscricao_estadual;

    /** Inscrição Municipal
     *
     * @var string|null
     */
    private ?string $inscricao_municipal;

    /** Inscrição Suframa
     *
     * @var string|null
     */
    private ?string $inscricao_suframa;

    /** Indica se o Cliente / Fornecedor é Optante do Simples Nacional
     *
     * @var string|null
     */
    private ?string $optante_simples_nacional;

    /** Tipo da Atividade
     *
     * @var string|null
     */
    private ?string $tipo_atividade;

    /** Código do CNAE - Fiscal
     *
     * @var string|null
     */
    private ?string $cnae;

    /** Indica se o Cliente / Fornecedor é um Produtor Rural
     *
     * @var string|null
     */
    private ?string $produtor_rural;

    /** Indica se o cliente é contribuinte (S/N)
     *
     * @var string|null
     */
    private ?string $contribuinte;

    /** Observações Internas
     *
     * @var string|null
     */
    private ?string $observacao;

    /** Observações Detalhadas
     *
     * @var string|null
     */
    private ?string $obs_detalhadas;

    /** Código da Instrução de Protesto
     *
     * @var string|null
     */
    private ?string $recomendacao_atraso;

    /** Tags do Cliente ou Fornecedor
     *
     * @var array|null
     */
    private ?array $tags;

    /** Pessoa Física
     *
     * @var string|null
     */
    private ?string $pessoa_fisica;

    /** Indica que é um tomador de serviço localizado no exterior
     *
     * @var string|null
     */
    private ?string $exterior;

    /** Importado pela API (S/N)
     *
     * @var string|null
     */
    private ?string $importado_api;

    /** Código do IBGE para a Cidade
     *
     * @var string|null
     */
    private ?string $cidade_ibge;

    /** Valor do Limite de Crédito Total
     *
     * @var float|null
     */
    private ?float $valor_limite_credito;

    /** Bloquear o faturamento para o cliente (S/N)
     *
     * @var string|null
     */
    private ?string $bloquear_faturamento;

    /** Recomendações do cliente
     *
     * @var Recomendacoes|null
     */
    private ?Recomendacoes $recomendacoes;

    /** Dados do Endereço de Entrega
     *
     * @var EnderecoEntrega|null
     */
    private ?EnderecoEntrega $enderecoEntrega;

    /** NIF - Número de Identificação Fiscal
     *
     * @var string|null
     */
    private ?string $nif;

    /** Documento no exterior para clientes estrangeiros
     *
     * @var string|null
     */
    private ?string $documento_exterior;

    /** Indica se o cliente está inativo [S/N]
     *
     * @var string|null
     */
    private ?string $inativo;

    /** Dados Bancários do cliente
     *
     * @var DadosBancarios|null
     */
    private ?DadosBancarios $dadosBancarios;

    /** Características do cliente
     *
     * @var array|null
     */
    private ?array $caracteristicas;

    /** Enviar anexos por e-mail (S/N)
     *
     * @var string|null
     */
    private ?string $enviar_anexos;

    /** Informações sobre o cadastro do cliente
     *
     * @var Info|null
     */
    private ?Info $info;

    /** Bloqueia a exclusão do registro. (S/N)
     *
     * @var string|null
     */
    private ?string $bloquear_exclusao;

    /**
     * @param string|null $codigo_cliente_integracao
     * @param string|null $email
     * @param string|null $razao_social
     * @param string|null $nome_fantasia
     * @param string|null $cnpj_cpf
     * @param string|null $endereco
     * @param string|null $endereco_numero
     * @param string|null $bairro
     * @param string|null $cidade
     * @param string|null $estado
     * @param string|null $cep
     * @param string|null $complemento
     *
     */
    public function __construct(
        ?string $codigo_cliente_integracao = null,
        ?string $email = null,
        ?string $razao_social = null,
        ?string $nome_fantasia = null,
        ?string $cnpj_cpf = null,
        ?string $endereco = null,
        ?string $endereco_numero = null,
        ?string $bairro = null,
        ?string $cidade = null,
        ?string $estado = null,
        ?string $cep = null,
        ?string $complemento = null
    )
    {
        $this->codigo_cliente_omie = null;
        $this->codigo_cliente_integracao = $codigo_cliente_integracao;
        $this->email = $email;
        $this->razao_social = $razao_social;
        $this->nome_fantasia = $nome_fantasia;
        $this->cnpj_cpf = $cnpj_cpf;
        $this->endereco = $endereco;
        $this->endereco_numero = $endereco_numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->complemento = $complemento;
        $this->telefone1_ddd = null;
        $this->telefone1_numero = null;
        $this->contato = null;
        $this->codigo_pais = null;
        $this->separar_endereco = null;
        $this->pesquisar_cep = null;
        $this->telefone2_ddd = null;
        $this->telefone2_numero = null;
        $this->fax_ddd = null;
        $this->fax_numero = null;
        $this->homepage = null;
        $this->inscricao_estadual = null;
        $this->inscricao_municipal = null;
        $this->inscricao_suframa = null;
        $this->optante_simples_nacional = null;
        $this->tipo_atividade = null;
        $this->cnae = null;
        $this->produtor_rural = null;
        $this->contribuinte = null;
        $this->observacao = null;
        $this->obs_detalhadas = null;
        $this->recomendacao_atraso = null;
        $this->tags = null;
        $this->pessoa_fisica = null;
        $this->exterior = null;
        $this->importado_api = null;
        $this->cidade_ibge = null;
        $this->valor_limite_credito = null;
        $this->bloquear_faturamento = null;
        $this->recomendacoes = null;
        $this->enderecoEntrega = null;
        $this->nif = null;
        $this->documento_exterior = null;
        $this->inativo = null;
        $this->dadosBancarios = null;
        $this->caracteristicas = null;
        $this->enviar_anexos = null;
        $this->info = null;
        $this->bloquear_exclusao = null;
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
     * @return ClientesCadastro
     */
    public function setCodigoClienteOmie(?int $codigo_cliente_omie): ClientesCadastro
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
     * @return ClientesCadastro
     */
    public function setCodigoClienteIntegracao(?string $codigo_cliente_integracao): ClientesCadastro
    {
        $this->codigo_cliente_integracao = $codigo_cliente_integracao;
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
     * @return ClientesCadastro
     */
    public function setRazaoSocial(?string $razao_social): ClientesCadastro
    {
        $this->razao_social = $razao_social;
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
     * @return ClientesCadastro
     */
    public function setCnpjCpf(?string $cnpj_cpf): ClientesCadastro
    {
        $this->cnpj_cpf = $cnpj_cpf;
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
     * @return ClientesCadastro
     */
    public function setNomeFantasia(?string $nome_fantasia): ClientesCadastro
    {
        $this->nome_fantasia = $nome_fantasia;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone1Ddd(): ?string
    {
        return $this->telefone1_ddd;
    }

    /**
     * @param string|null $telefone1_ddd
     * @return ClientesCadastro
     */
    public function setTelefone1Ddd(?string $telefone1_ddd): ClientesCadastro
    {
        $this->telefone1_ddd = $telefone1_ddd;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone1Numero(): ?string
    {
        return $this->telefone1_numero;
    }

    /**
     * @param string|null $telefone1_numero
     * @return ClientesCadastro
     */
    public function setTelefone1Numero(?string $telefone1_numero): ClientesCadastro
    {
        $this->telefone1_numero = $telefone1_numero;
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
     * @return ClientesCadastro
     */
    public function setContato(?string $contato): ClientesCadastro
    {
        $this->contato = $contato;
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
     * @return ClientesCadastro
     */
    public function setEndereco(?string $endereco): ClientesCadastro
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnderecoNumero(): ?string
    {
        return $this->endereco_numero;
    }

    /**
     * @param string|null $endereco_numero
     * @return ClientesCadastro
     */
    public function setEnderecoNumero(?string $endereco_numero): ClientesCadastro
    {
        $this->endereco_numero = $endereco_numero;
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
     * @return ClientesCadastro
     */
    public function setBairro(?string $bairro): ClientesCadastro
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    /**
     * @param string|null $complemento
     * @return ClientesCadastro
     */
    public function setComplemento(?string $complemento): ClientesCadastro
    {
        $this->complemento = $complemento;
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
     * @return ClientesCadastro
     */
    public function setEstado(?string $estado): ClientesCadastro
    {
        $this->estado = $estado;
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
     * @return ClientesCadastro
     */
    public function setCidade(?string $cidade): ClientesCadastro
    {
        $this->cidade = $cidade;
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
     * @return ClientesCadastro
     */
    public function setCep(?string $cep): ClientesCadastro
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoPais(): ?string
    {
        return $this->codigo_pais;
    }

    /**
     * @param string|null $codigo_pais
     * @return ClientesCadastro
     */
    public function setCodigoPais(?string $codigo_pais): ClientesCadastro
    {
        $this->codigo_pais = $codigo_pais;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSepararEndereco(): ?string
    {
        return $this->separar_endereco;
    }

    /**
     * @param string|null $separar_endereco
     * @return ClientesCadastro
     */
    public function setSepararEndereco(?string $separar_endereco): ClientesCadastro
    {
        $this->separar_endereco = $separar_endereco;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPesquisarCep(): ?string
    {
        return $this->pesquisar_cep;
    }

    /**
     * @param string|null $pesquisar_cep
     * @return ClientesCadastro
     */
    public function setPesquisarCep(?string $pesquisar_cep): ClientesCadastro
    {
        $this->pesquisar_cep = $pesquisar_cep;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone2Ddd(): ?string
    {
        return $this->telefone2_ddd;
    }

    /**
     * @param string|null $telefone2_ddd
     * @return ClientesCadastro
     */
    public function setTelefone2Ddd(?string $telefone2_ddd): ClientesCadastro
    {
        $this->telefone2_ddd = $telefone2_ddd;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelefone2Numero(): ?string
    {
        return $this->telefone2_numero;
    }

    /**
     * @param string|null $telefone2_numero
     * @return ClientesCadastro
     */
    public function setTelefone2Numero(?string $telefone2_numero): ClientesCadastro
    {
        $this->telefone2_numero = $telefone2_numero;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFaxDdd(): ?string
    {
        return $this->fax_ddd;
    }

    /**
     * @param string|null $fax_ddd
     * @return ClientesCadastro
     */
    public function setFaxDdd(?string $fax_ddd): ClientesCadastro
    {
        $this->fax_ddd = $fax_ddd;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFaxNumero(): ?string
    {
        return $this->fax_numero;
    }

    /**
     * @param string|null $fax_numero
     * @return ClientesCadastro
     */
    public function setFaxNumero(?string $fax_numero): ClientesCadastro
    {
        $this->fax_numero = $fax_numero;
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
     * @return ClientesCadastro
     */
    public function setEmail(?string $email): ClientesCadastro
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
     * @return ClientesCadastro
     */
    public function setHomepage(?string $homepage): ClientesCadastro
    {
        $this->homepage = $homepage;
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
     * @return ClientesCadastro
     */
    public function setInscricaoEstadual(?string $inscricao_estadual): ClientesCadastro
    {
        $this->inscricao_estadual = $inscricao_estadual;
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
     * @return ClientesCadastro
     */
    public function setInscricaoMunicipal(?string $inscricao_municipal): ClientesCadastro
    {
        $this->inscricao_municipal = $inscricao_municipal;
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
     * @return ClientesCadastro
     */
    public function setInscricaoSuframa(?string $inscricao_suframa): ClientesCadastro
    {
        $this->inscricao_suframa = $inscricao_suframa;
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
     * @return ClientesCadastro
     */
    public function setOptanteSimplesNacional(?string $optante_simples_nacional): ClientesCadastro
    {
        $this->optante_simples_nacional = $optante_simples_nacional;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoAtividade(): ?string
    {
        return $this->tipo_atividade;
    }

    /**
     * @param string|null $tipo_atividade
     * @return ClientesCadastro
     */
    public function setTipoAtividade(?string $tipo_atividade): ClientesCadastro
    {
        $this->tipo_atividade = $tipo_atividade;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCnae(): ?string
    {
        return $this->cnae;
    }

    /**
     * @param string|null $cnae
     * @return ClientesCadastro
     */
    public function setCnae(?string $cnae): ClientesCadastro
    {
        $this->cnae = $cnae;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProdutorRural(): ?string
    {
        return $this->produtor_rural;
    }

    /**
     * @param string|null $produtor_rural
     * @return ClientesCadastro
     */
    public function setProdutorRural(?string $produtor_rural): ClientesCadastro
    {
        $this->produtor_rural = $produtor_rural;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContribuinte(): ?string
    {
        return $this->contribuinte;
    }

    /**
     * @param string|null $contribuinte
     * @return ClientesCadastro
     */
    public function setContribuinte(?string $contribuinte): ClientesCadastro
    {
        $this->contribuinte = $contribuinte;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservacao(): ?string
    {
        return $this->observacao;
    }

    /**
     * @param string|null $observacao
     * @return ClientesCadastro
     */
    public function setObservacao(?string $observacao): ClientesCadastro
    {
        $this->observacao = $observacao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObsDetalhadas(): ?string
    {
        return $this->obs_detalhadas;
    }

    /**
     * @param string|null $obs_detalhadas
     * @return ClientesCadastro
     */
    public function setObsDetalhadas(?string $obs_detalhadas): ClientesCadastro
    {
        $this->obs_detalhadas = $obs_detalhadas;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecomendacaoAtraso(): ?string
    {
        return $this->recomendacao_atraso;
    }

    /**
     * @param string|null $recomendacao_atraso
     * @return ClientesCadastro
     */
    public function setRecomendacaoAtraso(?string $recomendacao_atraso): ClientesCadastro
    {
        $this->recomendacao_atraso = $recomendacao_atraso;
        return $this;
    }

    /** Lista de Tags
     *
     * @param Tags $tag
     * @return $this
     */
    public function addTags(Tags $tag): ClientesCadastro
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

    /**
     * @return string|null
     */
    public function getPessoaFisica(): ?string
    {
        return $this->pessoa_fisica;
    }

    /**
     * @param string|null $pessoa_fisica
     * @return ClientesCadastro
     */
    public function setPessoaFisica(?string $pessoa_fisica): ClientesCadastro
    {
        $this->pessoa_fisica = $pessoa_fisica;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExterior(): ?string
    {
        return $this->exterior;
    }

    /**
     * @param string|null $exterior
     * @return ClientesCadastro
     */
    public function setExterior(?string $exterior): ClientesCadastro
    {
        $this->exterior = $exterior;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImportadoApi(): ?string
    {
        return $this->importado_api;
    }

    /**
     * @param string|null $importado_api
     * @return ClientesCadastro
     */
    public function setImportadoApi(?string $importado_api): ClientesCadastro
    {
        $this->importado_api = $importado_api;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCidadeIbge(): ?string
    {
        return $this->cidade_ibge;
    }

    /**
     * @param string|null $cidade_ibge
     * @return ClientesCadastro
     */
    public function setCidadeIbge(?string $cidade_ibge): ClientesCadastro
    {
        $this->cidade_ibge = $cidade_ibge;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorLimiteCredito(): ?float
    {
        return $this->valor_limite_credito;
    }

    /**
     * @param float|null $valor_limite_credito
     * @return ClientesCadastro
     */
    public function setValorLimiteCredito(?float $valor_limite_credito): ClientesCadastro
    {
        $this->valor_limite_credito = $valor_limite_credito;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBloquearFaturamento(): ?string
    {
        return $this->bloquear_faturamento;
    }

    /**
     * @param string|null $bloquear_faturamento
     * @return ClientesCadastro
     */
    public function setBloquearFaturamento(?string $bloquear_faturamento): ClientesCadastro
    {
        $this->bloquear_faturamento = $bloquear_faturamento;
        return $this;
    }

    /**
     * @return Recomendacoes|null
     */
    public function getRecomendacoes(): ?Recomendacoes
    {
        return $this->recomendacoes;
    }

    /**
     * @param Recomendacoes|null $recomendacoes
     * @return ClientesCadastro
     */
    public function setRecomendacoes(?Recomendacoes $recomendacoes): ClientesCadastro
    {
        $this->recomendacoes = $recomendacoes;
        return $this;
    }

    /**
     * @return EnderecoEntrega|null
     */
    public function getEnderecoEntrega(): ?EnderecoEntrega
    {
        return $this->enderecoEntrega;
    }

    /**
     * @param EnderecoEntrega|null $enderecoEntrega
     * @return ClientesCadastro
     */
    public function setEnderecoEntrega(?EnderecoEntrega $enderecoEntrega): ClientesCadastro
    {
        $this->enderecoEntrega = $enderecoEntrega;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNif(): ?string
    {
        return $this->nif;
    }

    /**
     * @param string|null $nif
     * @return ClientesCadastro
     */
    public function setNif(?string $nif): ClientesCadastro
    {
        $this->nif = $nif;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocumentoExterior(): ?string
    {
        return $this->documento_exterior;
    }

    /**
     * @param string|null $documento_exterior
     * @return ClientesCadastro
     */
    public function setDocumentoExterior(?string $documento_exterior): ClientesCadastro
    {
        $this->documento_exterior = $documento_exterior;
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
     * @return ClientesCadastro
     */
    public function setInativo(?string $inativo): ClientesCadastro
    {
        $this->inativo = $inativo;
        return $this;
    }

    /**
     * @return DadosBancarios|null
     */
    public function getDadosBancarios(): ?DadosBancarios
    {
        return $this->dadosBancarios;
    }

    /**
     * @param DadosBancarios|null $dadosBancarios
     * @return ClientesCadastro
     */
    public function setDadosBancarios(?DadosBancarios $dadosBancarios): ClientesCadastro
    {
        $this->dadosBancarios = $dadosBancarios;
        return $this;
    }

    /** Lista de Tags
     *
     * @param Caracteristicas $caracteristica
     * @return $this
     */
    public function addCaracteristicas(Caracteristicas $caracteristica): ClientesCadastro
    {
        $this->caracteristicas[] = $caracteristica->toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCaracteristicas(): ?array
    {
        return $this->caracteristicas;
    }

    /**
     * @return string|null
     */
    public function getEnviarAnexos(): ?string
    {
        return $this->enviar_anexos;
    }

    /**
     * @param string|null $enviar_anexos
     * @return ClientesCadastro
     */
    public function setEnviarAnexos(?string $enviar_anexos): ClientesCadastro
    {
        $this->enviar_anexos = $enviar_anexos;
        return $this;
    }

    /**
     * @return Info|null
     */
    public function getInfo(): ?Info
    {
        return $this->info;
    }

    /**
     * @param Info|null $info
     * @return ClientesCadastro
     */
    public function setInfo(?Info $info): ClientesCadastro
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBloquearExclusao(): ?string
    {
        return $this->bloquear_exclusao;
    }

    /**
     * @param string|null $bloquear_exclusao
     * @return ClientesCadastro
     */
    public function setBloquearExclusao(?string $bloquear_exclusao): ClientesCadastro
    {
        $this->bloquear_exclusao = $bloquear_exclusao;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "codigo_cliente_omie" => $this->codigo_cliente_omie,
            "codigo_cliente_integracao" => $this->codigo_cliente_integracao,
            "razao_social" => $this->razao_social,
            "cnpj_cpf" => $this->cnpj_cpf,
            "nome_fantasia" => $this->nome_fantasia,
            "telefone1_ddd" => $this->telefone1_ddd,
            "telefone1_numero" => $this->telefone1_numero,
            "contato" => $this->contato,
            "endereco" => $this->endereco,
            "endereco_numero" => $this->endereco_numero,
            "bairro" => $this->bairro,
            "complemento" => $this->complemento,
            "estado" => $this->estado,
            "cidade" => $this->cidade,
            "cep" => $this->cep,
            "codigo_pais" => $this->codigo_pais,
            "separar_endereco" => $this->separar_endereco,
            "pesquisar_cep" => $this->pesquisar_cep,
            "telefone2_ddd" => $this->telefone2_ddd,
            "telefone2_numero" => $this->telefone2_numero,
            "fax_ddd" => $this->fax_ddd,
            "fax_numero" => $this->fax_numero,
            "email" => $this->email,
            "homepage" => $this->homepage,
            "inscricao_estadual" => $this->inscricao_estadual,
            "inscricao_municipal" => $this->inscricao_municipal,
            "inscricao_suframa" => $this->inscricao_suframa,
            "optante_simples_nacional" => $this->optante_simples_nacional,
            "tipo_atividade" => $this->tipo_atividade,
            "cnae" => $this->cnae,
            "produtor_rural" => $this->produtor_rural,
            "contribuinte" => $this->contribuinte,
            "observacao" => $this->observacao,
            "obs_detalhadas" => $this->obs_detalhadas,
            "recomendacao_atraso" => $this->recomendacao_atraso,
            "tags" => $this->tags,
            "pessoa_fisica" => $this->pessoa_fisica,
            "exterior" => $this->exterior,
            "importado_api" => $this->importado_api,
            "cidade_ibge" => $this->cidade_ibge,
            "valor_limite_credito" => $this->valor_limite_credito,
            "bloquear_faturamento" => $this->bloquear_faturamento,
            "recomendacoes" => isset($this->recomendacoes) ? $this->recomendacoes->toArray() : null,
            "enderecoEntrega" => isset($this->enderecoEntrega) ? $this->enderecoEntrega->toArray() : null,
            "nif" => $this->nif,
            "documento_exterior" => $this->documento_exterior,
            "inativo" => $this->inativo,
            "dadosBancarios" => isset($this->dadosBancarios) ? $this->dadosBancarios->toArray() : null,
            "caracteristicas" => $this->caracteristicas,
            "enviar_anexos" => $this->enviar_anexos,
            "info" => isset($this->info) ? $this->info->toArray() : null,
            "bloquear_exclusao" => $this->bloquear_exclusao,
        ], function ($v) {
            return !is_null($v);
        });
    }
}