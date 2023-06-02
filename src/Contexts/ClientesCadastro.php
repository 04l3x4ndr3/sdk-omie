<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;

class ClientesCadastro extends CallApi
{
    /**
     * @var int|null
     */
    private ?int $codigo_cliente_omie;

    /**
     * @var string|null
     */
    private ?string $codigo_cliente_integracao;

    /**
     * @var string|null
     */
    private ?string $razao_social;

    /**
     * @var string|null
     */
    private ?string $cnpj_cpf;

    /**
     * @var string|null
     */
    private ?string $nome_fantasia;

    /**
     * @var string|null
     */
    private ?string $telefone1_ddd;

    /**
     * @var string|null
     */
    private ?string $telefone1_numero;

    /**
     * @var string|null
     */
    private ?string $contato;

    /**
     * @var string|null
     */
    private ?string $endereco;

    /**
     * @var string|null
     */
    private ?string $endereco_numero;

    /**
     * @var string|null
     */
    private ?string $bairro;

    /**
     * @var string|null
     */
    private ?string $complemento;

    /**
     * @var string|null
     */
    private ?string $estado;

    /**
     * @var string|null
     */
    private ?string $cidade;

    /**
     * @var string|null
     */
    private ?string $cep;

    /**
     * @var string|null
     */
    private ?string $codigo_pais;

    /**
     * @var string|null
     */
    private ?string $separar_endereco;

    /**
     * @var string|null
     */
    private ?string $pesquisar_cep;

    /**
     * @var string|null
     */
    private ?string $email;

    /**
     * @var string|null
     */
    private ?string $inscricao_estadual;

    /**
     * @var string|null
     */
    private ?string $optante_simples_nacional;

    /**
     * @var string|null
     */
    private ?string $contribuinte;

    /**
     * @var string|null
     */
    private ?string $importado_api;

    /**
     * @var string|null
     */
    private ?string $inativo;

    /**
     * @param int|null    $codigo_cliente_omie
     * @param string|null $codigo_cliente_integracao
     * @param string|null $razao_social
     * @param string|null $cnpj_cpf
     * @param string|null $nome_fantasia
     * @param string|null $telefone1_ddd
     * @param string|null $telefone1_numero
     * @param string|null $contato
     * @param string|null $endereco
     * @param string|null $endereco_numero
     * @param string|null $bairro
     * @param string|null $complemento
     * @param string|null $estado
     * @param string|null $cidade
     * @param string|null $cep
     * @param string|null $codigo_pais
     * @param string|null $separar_endereco
     * @param string|null $pesquisar_cep
     * @param string|null $email
     * @param string|null $inscricao_estadual
     * @param string|null $optante_simples_nacional
     * @param string|null $contribuinte
     * @param string|null $importado_api
     * @param string|null $inativo
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->codigo_cliente_omie = null;
        $this->codigo_cliente_integracao = null;
        $this->razao_social = null;
        $this->cnpj_cpf = null;
        $this->nome_fantasia = null;
        $this->telefone1_ddd = null;
        $this->telefone1_numero = null;
        $this->contato = null;
        $this->endereco = null;
        $this->endereco_numero = null;
        $this->bairro = null;
        $this->complemento = null;
        $this->estado = null;
        $this->cidade = null;
        $this->cep = null;
        $this->codigo_pais = null;
        $this->separar_endereco = null;
        $this->pesquisar_cep = null;
        $this->email = null;
        $this->inscricao_estadual = null;
        $this->optante_simples_nacional = null;
        $this->contribuinte = null;
        $this->importado_api = null;
        $this->inativo = null;
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
     *
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
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
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
    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricao_estadual;
    }

    /**
     * @param string|null $inscricao_estadual
     *
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
    public function getOptanteSimplesNacional(): ?string
    {
        return $this->optante_simples_nacional;
    }

    /**
     * @param string|null $optante_simples_nacional
     *
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
    public function getContribuinte(): ?string
    {
        return $this->contribuinte;
    }

    /**
     * @param string|null $contribuinte
     *
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
    public function getImportadoApi(): ?string
    {
        return $this->importado_api;
    }

    /**
     * @param string|null $importado_api
     *
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
    public function getInativo(): ?string
    {
        return $this->inativo;
    }

    /**
     * @param string|null $inativo
     *
     * @return ClientesCadastro
     */
    public function setInativo(?string $inativo): ClientesCadastro
    {
        $this->inativo = $inativo;
        return $this;
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function listarClientes(?array $param = null): object
    {
        return $this->call("geral/clientes/#ListarClientes", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function consultarCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#ConsultarCliente", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function incluirCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#IncluirCliente", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function alterarCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#AlterarCliente", $param);
    }

    /**
     * @param array|null $param
     *
     * @return object
     * @throws GuzzleException
     */
    public function excluirCliente(?array $param = null): object
    {
        return $this->call("geral/clientes/#ExcluirCliente", $param);
    }


    /**
     * Parse props to array
     *
     * @param ClientesCadastro $client
     *
     * @return array
     */
    private function toArray(ClientesCadastro $client): array
    {
        return [
            'codigo_cliente_omie' => $client->getCodigoClienteOmie(),
            'codigo_cliente_integracao' => $client->getCodigoClienteIntegracao(),
            'razao_social' => $client->getRazaoSocial(),
            'cnpj_cpf' => $client->getCnpjCpf(),
            'nome_fantasia' => $client->getNomeFantasia(),
            'telefone1_ddd' => $client->getTelefone1Ddd(),
            'telefone1_numero' => $client->getTelefone1Numero(),
            'contato' => $client->getContato(),
            'endereco' => $client->getEndereco(),
            'endereco_numero' => $client->getEnderecoNumero(),
            'bairro' => $client->getBairro(),
            'complemento' => $client->getComplemento(),
            'estado' => $client->getEstado(),
            'cidade' => $client->getCidade(),
            'cep' => $client->getCep(),
            'codigo_pais' => $client->getCodigoPais(),
            'separar_endereco' => $client->getSepararEndereco(),
            'pesquisar_cep' => $client->getPesquisarCep(),
            'email' => $client->getEmail(),
            'inscricao_estadual' => $client->getInscricaoEstadual(),
            'optante_simples_nacional' => $client->getOptanteSimplesNacional(),
            'contribuinte' => $client->getContribuinte(),
            'importado_api' => $client->getImportadoApi(),
            'inativo' => $client->getInativo()
        ];
    }


}
