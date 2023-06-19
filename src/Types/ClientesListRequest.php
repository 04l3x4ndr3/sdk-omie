<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class ClientesListRequest
{
    /** Número da página retornada
     *
     * @var int|null
     */
    private ?int $pagina;

    /** Número de registros retornados na página
     *
     * @var int|null
     */
    private ?int $registros_por_pagina;

    /** Exibir apenas os registros gerados pela API
     *
     * @var string|null
     */
    private ?string $apenas_importado_api;

    /** Ordem de exibição dos dados. Padrão: Código
     *
     * @var string|null
     */
    private ?string $ordenar_por;

    /** Se a lista será apresentada em ordem decrescente
     *
     * @var string|null
     */
    private ?string $ordem_decrescente;

    /** Filtrar os registros a partir de uma data
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_de;

    /** Filtrar os registros até uma data
     *
     * @var string|null
     */
    private ?string $filtrar_por_data_ate;

    /** Filtro por hora a apartir de
     *
     * @var string|null
     */
    private ?string $filtrar_por_hora_de;

    /** Filtro por hora até
     *
     * @var string|null
     */
    private ?string $filtrar_por_hora_ate;

    /** Filtrar apenas os registros incluídos
     *
     * @var string|null
     */
    private ?string $filtrar_apenas_inclusao;

    /** Filtrar apenas os registros alterados
     *
     * @var string|null
     */
    private ?string $filtrar_apenas_alteracao;

    /** Filtrar cadastro de clientes
     *
     * @var ClientesFiltro|null
     */
    private ?ClientesFiltro $clientesFiltro;

    /** Lista de Códigos para filtro de clientes
     *
     * @var array|null
     */
    private ?array $clientesPorCodigo;

    /** Exibe as caracteristicas do cliente
     *
     * @var string|null
     */
    private ?string $exibir_caracteristicas;

    /** Exibir as observações do cliente (S/N)
     *
     * @var string|null
     */
    private ?string $exibir_obs;

    /**
     * @param int|null $pagina
     * @param int|null $registros_por_pagina
     * @param string|null $apenas_importado_api
     */
    public function __construct(
        ?int               $pagina = null,
        ?int               $registros_por_pagina = null,
        ?string            $apenas_importado_api = null
    )
    {
        $this->pagina = $pagina;
        $this->registros_por_pagina = $registros_por_pagina;
        $this->apenas_importado_api = $apenas_importado_api;
        $this->ordenar_por = null;
        $this->ordem_decrescente = null;
        $this->filtrar_por_data_de = null;
        $this->filtrar_por_data_ate = null;
        $this->filtrar_por_hora_de = null;
        $this->filtrar_por_hora_ate = null;
        $this->filtrar_apenas_inclusao = null;
        $this->filtrar_apenas_alteracao = null;
        $this->clientesFiltro = null;
        $this->clientesPorCodigo = null;
        $this->exibir_caracteristicas = null;
        $this->exibir_obs = null;
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
     * @return ClientesListRequest
     */
    public function setPagina(?int $pagina): ClientesListRequest
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
     * @return ClientesListRequest
     */
    public function setRegistrosPorPagina(?int $registros_por_pagina): ClientesListRequest
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
     * @return ClientesListRequest
     */
    public function setApenasImportadoApi(?string $apenas_importado_api): ClientesListRequest
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
     * @return ClientesListRequest
     */
    public function setOrdenarPor(?string $ordenar_por): ClientesListRequest
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
     * @return ClientesListRequest
     */
    public function setOrdemDecrescente(?string $ordem_decrescente): ClientesListRequest
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
     * @return ClientesListRequest
     */
    public function setFiltrarPorDataDe(?string $filtrar_por_data_de): ClientesListRequest
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
     * @return ClientesListRequest
     */
    public function setFiltrarPorDataAte(?string $filtrar_por_data_ate): ClientesListRequest
    {
        $this->filtrar_por_data_ate = $filtrar_por_data_ate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorHoraDe(): ?string
    {
        return $this->filtrar_por_hora_de;
    }

    /**
     * @param string|null $filtrar_por_hora_de
     * @return ClientesListRequest
     */
    public function setFiltrarPorHoraDe(?string $filtrar_por_hora_de): ClientesListRequest
    {
        $this->filtrar_por_hora_de = $filtrar_por_hora_de;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFiltrarPorHoraAte(): ?string
    {
        return $this->filtrar_por_hora_ate;
    }

    /**
     * @param string|null $filtrar_por_hora_ate
     * @return ClientesListRequest
     */
    public function setFiltrarPorHoraAte(?string $filtrar_por_hora_ate): ClientesListRequest
    {
        $this->filtrar_por_hora_ate = $filtrar_por_hora_ate;
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
     * @return ClientesListRequest
     */
    public function setFiltrarApenasInclusao(?string $filtrar_apenas_inclusao): ClientesListRequest
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
     * @return ClientesListRequest
     */
    public function setFiltrarApenasAlteracao(?string $filtrar_apenas_alteracao): ClientesListRequest
    {
        $this->filtrar_apenas_alteracao = $filtrar_apenas_alteracao;
        return $this;
    }

    /**
     * @return ClientesFiltro|null
     */
    public function getClientesFiltro(): ?ClientesFiltro
    {
        return $this->clientesFiltro;
    }

    /**
     * @param ClientesFiltro|null $clientesFiltro
     * @return ClientesListRequest
     */
    public function setClientesFiltro(?ClientesFiltro $clientesFiltro): ClientesListRequest
    {
        $this->clientesFiltro = $clientesFiltro;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getClientesPorCodigo(): ?ClientesListRequest
    {
        return $this->clientesPorCodigo;
    }

    /** Lista de clientesPorCodigo
     *
     * @param ClientesPorCodigo $clientePorCodigo
     * @return $this
     */
    public function addDepartamentos(ClientesPorCodigo $clientePorCodigo): ClientesListRequest
    {
        $this->clientesPorCodigo[] = $clientePorCodigo->toArray();
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExibirCaracteristicas(): ?string
    {
        return $this->exibir_caracteristicas;
    }

    /**
     * @param string|null $exibir_caracteristicas
     * @return ClientesListRequest
     */
    public function setExibirCaracteristicas(?string $exibir_caracteristicas): ClientesListRequest
    {
        $this->exibir_caracteristicas = $exibir_caracteristicas;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExibirObs(): ?string
    {
        return $this->exibir_obs;
    }

    /**
     * @param string|null $exibir_obs
     * @return ClientesListRequest
     */
    public function setExibirObs(?string $exibir_obs): ClientesListRequest
    {
        $this->exibir_obs = $exibir_obs;
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
            "filtrar_por_hora_de" => $this->filtrar_por_hora_de,
            "filtrar_por_hora_ate" => $this->filtrar_por_hora_ate,
            "filtrar_apenas_inclusao" => $this->filtrar_apenas_inclusao,
            "filtrar_apenas_alteracao" => $this->filtrar_apenas_alteracao,
            "clientesFiltro" => $this->clientesFiltro,
            "clientesPorCodigo" => $this->clientesPorCodigo,
            "exibir_caracteristicas" => $this->exibir_caracteristicas,
            "exibir_obs" => $this->exibir_obs,
        ], function ($v) {
            return !is_null($v);
        });
    }
}