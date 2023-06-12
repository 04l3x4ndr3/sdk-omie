<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsListarRequest
{

    /** Número da página que será listada.
     *
     * @var int | null
     */
    private ?int $pagina;

    /** Número de registros retornados
     *
     * @var int|null
     */
    private ?int $registros_por_pagina;

    /** Exibir apenas os registros gerados pela API
     *
     * @var string|null
     */
    private ?string $apenas_importado_api;

    /** Ordenar o resultado da página por:+
     *
     * @var string|null
     */
    private ?string $ordenar_por;

    /** Ordem Crescente ou Decrescente.
     *
     * @var string|null
     */
    private ?string $ordem_decrescente;

    /** Data de inclusão e/ou alteração inicial.
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_de;

    /** Data de inclusão e/ou alteração final.
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_ate;

    /** Filtrar apenas registros incluídos (S/N)
     *
     * @var string|null
     */
    private ?string $filtrar_apenas_inclusao;

    /** Filtrar apenas registros alterados (S/N)
     *
     * @var string|null
     */
    private ?string $filtrar_apenas_alteracao;

    /** Lista de códigos de Ordem de Serviço.
     *
     * @var array [@int $nCodOS, @string $cCodIntOS]
     */
    private array $filtrar_por_codigo;

    /** Status da OS:+
     *
     * @var string|null
     */
    private ?string $filtrar_por_status;

    /** Etapa da Ordem de Serviço.
     *
     * @var string|null
     */
    private ?string $filtrar_por_etapa;

    /** Filtra pelo ID do cliente.
     *
     * @var int|null
     */
    private ?int $filtrar_por_cliente;

    /** Data de previsão inicial
     *
     * @var string|null
     */
    private string $filtrar_por_data_previsao_de;

    /** Data de previsão final.
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_previsao_ate;

    /** Data de faturamento inicial.
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_faturamento_de;

    /** Data de faturamento final.
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_faturamento_ate;

    /** Data de cancelamento inicial.
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_cancelamento_de;

    /** Data de cancelamento final.
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_cancelamento_ate;

    /** Ordem Crescente ou Decrescente.
     *
     * @var string|null
     */
    private ?string $ordem_descrescente;

    /** Exibir as despesas reembolsáveis (S/N).
     *
     * @var string|null
     */
    private ?string $cExibirDespesas;

    /** Exibir os produtos utilizados (S/N).
     *
     * @var string|null
     */
    private ?string $cExibirProdutos;

    /** Tipo de faturamento:+Pode ser:
     *
     * @var string|null
     */
    private ?string $cTipoFat;

    /**
     * @param int|null    $pagina
     * @param int|null    $registros_por_pagina
     * @param string|null $apenas_importado_api
     * @param string|null $ordenar_por
     * @param string|null $ordem_decrescente
     * @param string|null $filtrar_por_data_de
     * @param string|null $filtrar_por_data_ate
     * @param string|null $filtrar_apenas_inclusao
     * @param string|null $filtrar_apenas_alteracao
     * @param array       $filtrar_por_codigo
     * @param string|null $filtrar_por_status
     * @param string|null $filtrar_por_etapa
     * @param int|null    $filtrar_por_cliente
     * @param string|null $filtrar_por_data_previsao_de
     * @param string|null $filtrar_por_data_previsao_ate
     * @param string|null $filtrar_por_data_faturamento_de
     * @param string|null $filtrar_por_data_faturamento_ate
     * @param string|null $filtrar_por_data_cancelamento_de
     * @param string|null $filtrar_por_data_cancelamento_ate
     * @param string|null $ordem_descrescente
     * @param string|null $cExibirDespesas
     * @param string|null $cExibirProdutos
     * @param string|null $cTipoFat
     */
    public function __construct(
        ?int $pagina = null,
        ?int $registros_por_pagina = null,
        ?string $apenas_importado_api = null,
        ?string $ordenar_por = null,
        ?string $ordem_decrescente = null,
        ?string $filtrar_por_data_de = null,
        ?string $filtrar_por_data_ate = null,
        ?string $filtrar_apenas_inclusao = null, ?string $filtrar_apenas_alteracao = null,
        ?array $filtrar_por_codigo = null,
        ?string $filtrar_por_status = null,
        ?string $filtrar_por_etapa = null,
        ?int $filtrar_por_cliente = null,
        string $filtrar_por_data_previsao_de = null,
        ?string $filtrar_por_data_previsao_ate = null,
        ?string $filtrar_por_data_faturamento_de = null,
        ?string $filtrar_por_data_faturamento_ate = null,
        ?string $filtrar_por_data_cancelamento_de = null,
        ?string $filtrar_por_data_cancelamento_ate = null,
        ?string $ordem_descrescente = null,
        ?string $cExibirDespesas = null,
        ?string $cExibirProdutos = null,
        ?string $cTipoFat = null
    )
    {
        $this->pagina = $pagina;
        $this->registros_por_pagina = $registros_por_pagina;
        $this->apenas_importado_api = $apenas_importado_api;
        $this->ordenar_por = $ordenar_por;
        $this->ordem_decrescente = $ordem_decrescente;
        $this->filtrar_por_data_de = $filtrar_por_data_de;
        $this->filtrar_por_data_ate = $filtrar_por_data_ate;
        $this->filtrar_apenas_inclusao = $filtrar_apenas_inclusao;
        $this->filtrar_apenas_alteracao = $filtrar_apenas_alteracao;
        $this->filtrar_por_codigo = $filtrar_por_codigo;
        $this->filtrar_por_status = $filtrar_por_status;
        $this->filtrar_por_etapa = $filtrar_por_etapa;
        $this->filtrar_por_cliente = $filtrar_por_cliente;
        $this->filtrar_por_data_previsao_de = $filtrar_por_data_previsao_de;
        $this->filtrar_por_data_previsao_ate = $filtrar_por_data_previsao_ate;
        $this->filtrar_por_data_faturamento_de = $filtrar_por_data_faturamento_de;
        $this->filtrar_por_data_faturamento_ate = $filtrar_por_data_faturamento_ate;
        $this->filtrar_por_data_cancelamento_de = $filtrar_por_data_cancelamento_de;
        $this->filtrar_por_data_cancelamento_ate = $filtrar_por_data_cancelamento_ate;
        $this->ordem_descrescente = $ordem_descrescente;
        $this->cExibirDespesas = $cExibirDespesas;
        $this->cExibirProdutos = $cExibirProdutos;
        $this->cTipoFat = $cTipoFat;
    }

    /**
     * @return int|null
     */
    public function getPagina(): ?int
    {
        return $this->pagina;
    }

    /**
     * @param int|null $pagina
     *
     * @return OsListarRequest
     */
    public function setPagina(?int $pagina): OsListarRequest
    {
        $this->pagina = $pagina;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRegistrosPorPagina(): ?int
    {
        return $this->registros_por_pagina;
    }

    /**
     * @param int|null $registros_por_pagina
     *
     * @return OsListarRequest
     */
    public function setRegistrosPorPagina(?int $registros_por_pagina): OsListarRequest
    {
        $this->registros_por_pagina = $registros_por_pagina;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getApenasImportadoApi(): ?string
    {
        return $this->apenas_importado_api;
    }

    /**
     * @param string|null $apenas_importado_api
     *
     * @return OsListarRequest
     */
    public function setApenasImportadoApi(?string $apenas_importado_api): OsListarRequest
    {
        $this->apenas_importado_api = $apenas_importado_api;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrdenarPor(): ?string
    {
        return $this->ordenar_por;
    }

    /**
     * @param string|null $ordenar_por
     *
     * @return OsListarRequest
     */
    public function setOrdenarPor(?string $ordenar_por): OsListarRequest
    {
        $this->ordenar_por = $ordenar_por;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrdemDecrescente(): ?string
    {
        return $this->ordem_decrescente;
    }

    /**
     * @param string|null $ordem_decrescente
     *
     * @return OsListarRequest
     */
    public function setOrdemDecrescente(?string $ordem_decrescente): OsListarRequest
    {
        $this->ordem_decrescente = $ordem_decrescente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorDataDe(): ?string
    {
        return $this->filtrar_por_data_de;
    }

    /**
     * @param string|null $filtrar_por_data_de
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataDe(?string $filtrar_por_data_de): OsListarRequest
    {
        $this->filtrar_por_data_de = $filtrar_por_data_de;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorDataAte(): ?string
    {
        return $this->filtrar_por_data_ate;
    }

    /**
     * @param string|null $filtrar_por_data_ate
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataAte(?string $filtrar_por_data_ate): OsListarRequest
    {
        $this->filtrar_por_data_ate = $filtrar_por_data_ate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarApenasInclusao(): ?string
    {
        return $this->filtrar_apenas_inclusao;
    }

    /**
     * @param string|null $filtrar_apenas_inclusao
     *
     * @return OsListarRequest
     */
    public function setFiltrarApenasInclusao(?string $filtrar_apenas_inclusao): OsListarRequest
    {
        $this->filtrar_apenas_inclusao = $filtrar_apenas_inclusao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarApenasAlteracao(): ?string
    {
        return $this->filtrar_apenas_alteracao;
    }

    /**
     * @param string|null $filtrar_apenas_alteracao
     *
     * @return OsListarRequest
     */
    public function setFiltrarApenasAlteracao(?string $filtrar_apenas_alteracao): OsListarRequest
    {
        $this->filtrar_apenas_alteracao = $filtrar_apenas_alteracao;
        return $this;
    }

    /**
     * @return array
     */
    public function getFiltrarPorCodigo(): array
    {
        return $this->filtrar_por_codigo;
    }

    /**
     * @param array $filtrar_por_codigo
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorCodigo(array $filtrar_por_codigo): OsListarRequest
    {
        $this->filtrar_por_codigo = $filtrar_por_codigo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorStatus(): ?string
    {
        return $this->filtrar_por_status;
    }

    /**
     * @param string|null $filtrar_por_status
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorStatus(?string $filtrar_por_status): OsListarRequest
    {
        $this->filtrar_por_status = $filtrar_por_status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorEtapa(): ?string
    {
        return $this->filtrar_por_etapa;
    }

    /**
     * @param string|null $filtrar_por_etapa
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorEtapa(?string $filtrar_por_etapa): OsListarRequest
    {
        $this->filtrar_por_etapa = $filtrar_por_etapa;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFiltrarPorCliente(): ?int
    {
        return $this->filtrar_por_cliente;
    }

    /**
     * @param int|null $filtrar_por_cliente
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorCliente(?int $filtrar_por_cliente): OsListarRequest
    {
        $this->filtrar_por_cliente = $filtrar_por_cliente;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiltrarPorDataPrevisaoDe(): string
    {
        return $this->filtrar_por_data_previsao_de;
    }

    /**
     * @param string $filtrar_por_data_previsao_de
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataPrevisaoDe(string $filtrar_por_data_previsao_de): OsListarRequest
    {
        $this->filtrar_por_data_previsao_de = $filtrar_por_data_previsao_de;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorDataPrevisaoAte(): ?string
    {
        return $this->filtrar_por_data_previsao_ate;
    }

    /**
     * @param string|null $filtrar_por_data_previsao_ate
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataPrevisaoAte(?string $filtrar_por_data_previsao_ate): OsListarRequest
    {
        $this->filtrar_por_data_previsao_ate = $filtrar_por_data_previsao_ate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorDataFaturamentoDe(): ?string
    {
        return $this->filtrar_por_data_faturamento_de;
    }

    /**
     * @param string|null $filtrar_por_data_faturamento_de
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataFaturamentoDe(?string $filtrar_por_data_faturamento_de): OsListarRequest
    {
        $this->filtrar_por_data_faturamento_de = $filtrar_por_data_faturamento_de;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorDataFaturamentoAte(): ?string
    {
        return $this->filtrar_por_data_faturamento_ate;
    }

    /**
     * @param string|null $filtrar_por_data_faturamento_ate
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataFaturamentoAte(?string $filtrar_por_data_faturamento_ate): OsListarRequest
    {
        $this->filtrar_por_data_faturamento_ate = $filtrar_por_data_faturamento_ate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorDataCancelamentoDe(): ?string
    {
        return $this->filtrar_por_data_cancelamento_de;
    }

    /**
     * @param string|null $filtrar_por_data_cancelamento_de
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataCancelamentoDe(?string $filtrar_por_data_cancelamento_de): OsListarRequest
    {
        $this->filtrar_por_data_cancelamento_de = $filtrar_por_data_cancelamento_de;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorDataCancelamentoAte(): ?string
    {
        return $this->filtrar_por_data_cancelamento_ate;
    }

    /**
     * @param string|null $filtrar_por_data_cancelamento_ate
     *
     * @return OsListarRequest
     */
    public function setFiltrarPorDataCancelamentoAte(?string $filtrar_por_data_cancelamento_ate): OsListarRequest
    {
        $this->filtrar_por_data_cancelamento_ate = $filtrar_por_data_cancelamento_ate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrdemDescrescente(): ?string
    {
        return $this->ordem_descrescente;
    }

    /**
     * @param string|null $ordem_descrescente
     *
     * @return OsListarRequest
     */
    public function setOrdemDescrescente(?string $ordem_descrescente): OsListarRequest
    {
        $this->ordem_descrescente = $ordem_descrescente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCExibirDespesas(): ?string
    {
        return $this->cExibirDespesas;
    }

    /**
     * @param string|null $cExibirDespesas
     *
     * @return OsListarRequest
     */
    public function setCExibirDespesas(?string $cExibirDespesas): OsListarRequest
    {
        $this->cExibirDespesas = $cExibirDespesas;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCExibirProdutos(): ?string
    {
        return $this->cExibirProdutos;
    }

    /**
     * @param string|null $cExibirProdutos
     *
     * @return OsListarRequest
     */
    public function setCExibirProdutos(?string $cExibirProdutos): OsListarRequest
    {
        $this->cExibirProdutos = $cExibirProdutos;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCTipoFat(): ?string
    {
        return $this->cTipoFat;
    }

    /**
     * @param string|null $cTipoFat
     *
     * @return OsListarRequest
     */
    public function setCTipoFat(?string $cTipoFat): OsListarRequest
    {
        $this->cTipoFat = $cTipoFat;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "pagina" => $this->pagina,
            "registros_por_pagina" => $this->registros_por_pagina,
            "apenas_importado_api" => $this->apenas_importado_api,
            "ordenar_por" => $this->ordenar_por,
            "ordem_decrescente" => $this->ordem_decrescente,
            "filtrar_por_data_de" => $this->filtrar_por_data_de,
            "filtrar_por_data_ate" => $this->filtrar_por_data_ate,
            "filtrar_apenas_inclusao" => $this->filtrar_apenas_inclusao,
            "filtrar_apenas_alteracao" => $this->filtrar_apenas_alteracao,
            "filtrar_por_codigo" => $this->filtrar_por_codigo,
            "filtrar_por_status" => $this->filtrar_por_status,
            "filtrar_por_etapa" => $this->filtrar_por_etapa,
            "filtrar_por_cliente" => $this->filtrar_por_cliente,
            "filtrar_por_data_previsao_de" => $this->filtrar_por_data_previsao_de,
            "filtrar_por_data_previsao_ate" => $this->filtrar_por_data_previsao_ate,
            "filtrar_por_data_faturamento_de" => $this->filtrar_por_data_faturamento_de,
            "filtrar_por_data_faturamento_ate" => $this->filtrar_por_data_faturamento_ate,
            "filtrar_por_data_cancelamento_de" => $this->filtrar_por_data_cancelamento_de,
            "filtrar_por_data_cancelamento_ate" => $this->filtrar_por_data_cancelamento_ate,
            "ordem_descrescente" => $this->ordem_descrescente,
            "cExibirDespesas" => $this->cExibirDespesas,
            "cExibirProdutos" => $this->cExibirProdutos,
            "cTipoFat" => $this->cTipoFat,
        ], function ($v) {
            return !is_null($v);
        });
    }

}
