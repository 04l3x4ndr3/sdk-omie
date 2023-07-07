<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsCadastro
{

    /** Cabeçalho da Ordem de Serviço
     *
     * @var OsCabecalho|null
     */
    private ?OsCabecalho $cabecalho;

    /** Informações adicionais da OS
     *
     * @var OsInformacoesAdicionais|null
     */
    private ?OsInformacoesAdicionais $informacoesAdicionais;

    /** Informações do E-Mail
     *
     * @var Email|null
     */
    private ?Email $email;

    /** Lista de distribuição por departamentos
     *
     * @var array|null
     */
    private ?array $departamentos;

    /** Lista de Serviços Prestados
     *
     * @var array|null
     */
    private ?array $servicosPrestados;

    /** Permite que o parcelamento seja realizado de forma manual
     *
     * @var array|null
     */
    private ?array $parcelas;

    /** Observações da Ordem de Serviço
     *
     * @var OsObservacoes|null
     */
    private ?OsObservacoes $observacoes;

    /** Informações do cadastro da Ordem de Serviço
     *
     * @var OsInfoCadastro|null
     */
    private ?OsInfoCadastro $infoCadastro;

    /** Despesas reembolsáveis
     * @var OsDespesasReembolsaveis|null
     */
    private ?OsDespesasReembolsaveis $despesasReembolsaveis;

    /** Produtos Utilizados na Ordem de Serviço
     *
     * @var OsProdutosUtilizados|null
     */
    private ?OsProdutosUtilizados $produtosUtilizados;

    /**
     * @param OsCabecalho|null $cabecalho
     * @param OsInformacoesAdicionais|null $informacoesAdicionais
     * @param Email|null $email
     * @param array|null $departamentos
     * @param array|null $servicosPrestados
     * @param array|null $parcelas
     * @param OsObservacoes|null $observacoes
     * @param OsInfoCadastro|null $infoCadastro
     * @param OsDespesasReembolsaveis|null $despesasReembolsaveis
     * @param OsProdutosUtilizados|null $produtosUtilizado
     */
    public function __construct(
        ?OsCabecalho $cabecalho = null,
        ?OsInformacoesAdicionais $informacoesAdicionais = null,
        ?Email $email = null,
        ?array $departamentos = null,
        ?array $servicosPrestados = null,
        ?array $parcelas = null,
        ?OsObservacoes $observacoes = null,
        ?OsInfoCadastro $infoCadastro = null,
        ?OsDespesasReembolsaveis $despesasReembolsaveis = null,
        ?OsProdutosUtilizados $produtosUtilizados = null
    )
    {
        $this->cabecalho = $cabecalho;
        $this->informacoesAdicionais = $informacoesAdicionais;
        $this->email = $email;
        $this->departamentos = $departamentos;
        $this->servicosPrestados = $servicosPrestados;
        $this->parcelas = $parcelas;
        $this->observacoes = $observacoes;
        $this->infoCadastro = $infoCadastro;
        $this->despesasReembolsaveis = $despesasReembolsaveis;
        $this->produtosUtilizados = $produtosUtilizados;
    }

    /**
     * @return OsCabecalho|null
     */
    public function getCabecalho(): ?OsCabecalho
    {
        return $this->cabecalho;
    }

    /**
     * @param OsCabecalho|null $cabecalho
     * @return OsCadastro
     */
    public function setCabecalho(?OsCabecalho $cabecalho): OsCadastro
    {
        $this->cabecalho = $cabecalho;
        return $this;
    }

    /**
     * @return OsInformacoesAdicionais|null
     */
    public function getInformacoesAdicionais(): ?OsInformacoesAdicionais
    {
        return $this->informacoesAdicionais;
    }

    /**
     * @param OsInformacoesAdicionais|null $informacoesAdicionais
     * @return OsCadastro
     */
    public function setInformacoesAdicionais(?OsInformacoesAdicionais $informacoesAdicionais): OsCadastro
    {
        $this->informacoesAdicionais = $informacoesAdicionais;
        return $this;
    }

    /**
     * @return Email|null
     */
    public function getEmail(): ?Email
    {
        return $this->email;
    }

    /**
     * @param Email|null $email
     * @return OsCadastro
     */
    public function setEmail(?Email $email): OsCadastro
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return OsObservacoes|null
     */
    public function getObservacoes(): ?OsObservacoes
    {
        return $this->observacoes;
    }

    /**
     * @param OsObservacoes|null $observacoes
     * @return OsCadastro
     */
    public function setObservacoes(?OsObservacoes $observacoes): OsCadastro
    {
        $this->observacoes = $observacoes;
        return $this;
    }

    /**
     * @return OsInfoCadastro|null
     */
    public function getInfoCadastro(): ?OsInfoCadastro
    {
        return $this->infoCadastro;
    }

    /**
     * @param OsInfoCadastro|null $infoCadastro
     * @return OsCadastro
     */
    public function setInfoCadastro(?OsInfoCadastro $infoCadastro): OsCadastro
    {
        $this->infoCadastro = $infoCadastro;
        return $this;
    }

    /**
     * @return OsDespesasReembolsaveis|null
     */
    public function getDespesasReembolsaveis(): ?OsDespesasReembolsaveis
    {
        return $this->despesasReembolsaveis;
    }

    /**
     * @param OsDespesasReembolsaveis|null $despesasReembolsaveis
     * @return OsCadastro
     */
    public function setDespesasReembolsaveis(?OsDespesasReembolsaveis $despesasReembolsaveis): OsCadastro
    {
        $this->despesasReembolsaveis = $despesasReembolsaveis;
        return $this;
    }

    /**
     * @return OsProdutosUtilizados|null
     */
    public function getProdutosUtilizados(): ?OsProdutosUtilizados
    {
        return $this->produtosUtilizados;
    }

    /**
     * @param OsProdutosUtilizados|null $produtosUtilizados
     * @return OsCadastro
     */
    public function setProdutosUtilizados(?OsProdutosUtilizados $produtosUtilizados): OsCadastro
    {
        $this->produtosUtilizados = $produtosUtilizados;
        return $this;
    }

    /** Lista de Departamentos
     *
     * @param OsDepartamentos $departamento
     * @return $this
     */
    public function addDepartamentos(OsDepartamentos $departamento): OsCadastro
    {
        $this->departamentos[] = $departamento->toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function getDepartamentos(): ?array
    {
        return $this->departamentos;
    }

    /** Lista de ServicosPrestados
     *
     * @param OsServicosPrestados $servicoPrestado
     * @return $this
     */
    public function addServicosPrestados(OsServicosPrestados $servicoPrestado): OsCadastro
    {
        $this->servicosPrestados[] = $servicoPrestado->toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function getServicosPrestados(): ?array
    {
        return $this->servicosPrestados;
    }

    /** Lista de Parcelas
     *
     * @param OsParcelas $parcela
     * @return $this
     */
    public function addParcelas(OsParcelas $parcela): OsCadastro
    {
        $this->parcelas[] = $parcela->toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function getParcelas(): ?array
    {
        return $this->parcelas;
    }

    /**
     * @return array
     */
    public function toArray(): ?array
    {
        return array_filter([
            "Cabecalho" => isset($this->cabecalho) ? $this->cabecalho->toArray():null ,
            "InformacoesAdicionais" => isset($this->informacoesAdicionais) ? $this->informacoesAdicionais->toArray():null,
            "Email" => isset($this->email) ? $this->email->toArray() : null,
            "Departamentos" => $this->departamentos,
            "ServicosPrestados" => $this->servicosPrestados,
            "Parcelas" => $this->parcelas,
            "Observacoes" => isset($this->observacoes) ? $this->observacoes->toArray() : null,
            "InfoCadastro" => isset($this->infoCadastro) ? $this->infoCadastro->toArray() : null ,
            "despesasReembolsaveis" => isset($this->despesasReembolsaveis) ? $this->despesasReembolsaveis->toArray() : null,
            "produtosUtilizados" => isset($this->produtosUtilizados) ? $this->produtosUtilizados->toArray() : null,
        ], function ($v) {
            return !is_null($v);
        });
    }
}
