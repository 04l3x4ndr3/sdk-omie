<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsInformacoesAdicionais
{

    /** Categoria
     * @var string|null
     */
    private ?string $cCodCateg;
    /** Código da Conta Corrente
     * @var int|null
     */
    private ?int $nCodCC;
    /** Número do Pedido do Cliente
     * @var string|null
     */
    private ?string $cNumPedido;
    /** Número do Contrato de Venda
     * @var string|null
     */
    private ?string $cNumContrato;
    /** Contato
     * @var string|null
     */
    private ?string $cContato;
    /** Dados Adicionais da Nota Fiscal
     * @var string|null
     */
    private ?string $cDadosAdicNF;
    /** Código da Obra
     * @var string|null
     */
    private ?string $cCodObra;
    /** Código ART
     * @var string|null
     */
    private ?string $cCodART;
    /** Código do Projeto
     * @var int|null
     */
    private ?int $nCodProj;
    /** Cidade da Prestação do Serviço
     * @var string|null
     */
    private ?string $cCidPrestServ;
    /** Data da RPS
     * @var string|null
     */
    private ?string $dDataRps;
    /** Número do Recibo gerado.
     * @var string|null
     */
    private ?string $cNumRecibo;

    /**
     * @param string|null $cCodCateg
     * @param int|null $nCodCC
     * @param string|null $cNumPedido
     * @param string|null $cNumContrato
     * @param string|null $cContato
     * @param string|null $cDadosAdicNF
     * @param string|null $cCodObra
     * @param string|null $cCodART
     * @param int|null $nCodProj
     * @param string|null $cCidPrestServ
     * @param string|null $dDataRps
     * @param string|null $cNumRecibo
     */
    public function __construct(
        ?string $cCodCateg = null,
        ?int    $nCodCC = null,
        ?string $cNumPedido = null,
        ?string $cNumContrato = null,
        ?string $cContato = null,
        ?string $cDadosAdicNF = null,
        ?string $cCodObra = null,
        ?string $cCodART = null,
        ?int    $nCodProj = null,
        ?string $cCidPrestServ = null,
        ?string $dDataRps = null,
        ?string $cNumRecibo = null
    )
    {
        $this->cCodCateg = $cCodCateg;
        $this->nCodCC = $nCodCC;
        $this->cNumPedido = $cNumPedido;
        $this->cNumContrato = $cNumContrato;
        $this->cContato = $cContato;
        $this->cDadosAdicNF = $cDadosAdicNF;
        $this->cCodObra = $cCodObra;
        $this->cCodART = $cCodART;
        $this->nCodProj = $nCodProj;
        $this->cCidPrestServ = $cCidPrestServ;
        $this->dDataRps = $dDataRps;
        $this->cNumRecibo = $cNumRecibo;
    }

    /**
     * @return string|null
     */
    public function getCCodCateg(): ?string
    {
        return $this->cCodCateg;
    }

    /**
     * @param string|null $cCodCateg
     * @return OsInformacoesAdicionais
     */
    public function setCCodCateg(?string $cCodCateg): OsInformacoesAdicionais
    {
        $this->cCodCateg = $cCodCateg;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodCC(): ?int
    {
        return $this->nCodCC;
    }

    /**
     * @param int|null $nCodCC
     * @return OsInformacoesAdicionais
     */
    public function setNCodCC(?int $nCodCC): OsInformacoesAdicionais
    {
        $this->nCodCC = $nCodCC;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumPedido(): ?string
    {
        return $this->cNumPedido;
    }

    /**
     * @param string|null $cNumPedido
     * @return OsInformacoesAdicionais
     */
    public function setCNumPedido(?string $cNumPedido): OsInformacoesAdicionais
    {
        $this->cNumPedido = $cNumPedido;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumContrato(): ?string
    {
        return $this->cNumContrato;
    }

    /**
     * @param string|null $cNumContrato
     * @return OsInformacoesAdicionais
     */
    public function setCNumContrato(?string $cNumContrato): OsInformacoesAdicionais
    {
        $this->cNumContrato = $cNumContrato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCContato(): ?string
    {
        return $this->cContato;
    }

    /**
     * @param string|null $cContato
     * @return OsInformacoesAdicionais
     */
    public function setCContato(?string $cContato): OsInformacoesAdicionais
    {
        $this->cContato = $cContato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDadosAdicNF(): ?string
    {
        return $this->cDadosAdicNF;
    }

    /**
     * @param string|null $cDadosAdicNF
     * @return OsInformacoesAdicionais
     */
    public function setCDadosAdicNF(?string $cDadosAdicNF): OsInformacoesAdicionais
    {
        $this->cDadosAdicNF = $cDadosAdicNF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodObra(): ?string
    {
        return $this->cCodObra;
    }

    /**
     * @param string|null $cCodObra
     * @return OsInformacoesAdicionais
     */
    public function setCCodObra(?string $cCodObra): OsInformacoesAdicionais
    {
        $this->cCodObra = $cCodObra;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodART(): ?string
    {
        return $this->cCodART;
    }

    /**
     * @param string|null $cCodART
     * @return OsInformacoesAdicionais
     */
    public function setCCodART(?string $cCodART): OsInformacoesAdicionais
    {
        $this->cCodART = $cCodART;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNCodProj(): ?int
    {
        return $this->nCodProj;
    }

    /**
     * @param int|null $nCodProj
     * @return OsInformacoesAdicionais
     */
    public function setNCodProj(?int $nCodProj): OsInformacoesAdicionais
    {
        $this->nCodProj = $nCodProj;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCidPrestServ(): ?string
    {
        return $this->cCidPrestServ;
    }

    /**
     * @param string|null $cCidPrestServ
     * @return OsInformacoesAdicionais
     */
    public function setCCidPrestServ(?string $cCidPrestServ): OsInformacoesAdicionais
    {
        $this->cCidPrestServ = $cCidPrestServ;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDDataRps(): ?string
    {
        return $this->dDataRps;
    }

    /**
     * @param string|null $dDataRps
     * @return OsInformacoesAdicionais
     */
    public function setDDataRps(?string $dDataRps): OsInformacoesAdicionais
    {
        $this->dDataRps = $dDataRps;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCNumRecibo(): ?string
    {
        return $this->cNumRecibo;
    }

    /**
     * @param string|null $cNumRecibo
     * @return OsInformacoesAdicionais
     */
    public function setCNumRecibo(?string $cNumRecibo): OsInformacoesAdicionais
    {
        $this->cNumRecibo = $cNumRecibo;
        return $this;
    }


    public function toArray(): array
    {
        return array_filter([
            "cCodCateg" => $this->cCodCateg,
            "nCodCC" => $this->nCodCC,
            "cNumPedido" => $this->cNumPedido,
            "cNumContrato" => $this->cNumContrato,
            "cContato" => $this->cContato,
            "cDadosAdicNF" => $this->cDadosAdicNF,
            "cCodObra" => $this->cCodObra,
            "cCodART" => $this->cCodART,
            "nCodProj" => $this->nCodProj,
            "cCidPrestServ" => $this->cCidPrestServ,
            "dDataRps" => $this->dDataRps,
            "cNumRecibo" => $this->cNumRecibo,
        ], function ($v) {
            return !is_null($v);
        });
    }
}