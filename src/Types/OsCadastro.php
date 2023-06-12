<?php

namespace O4l3x4ndr3\SdkOmie\Types;

class OsCadastro
{

    private ?OsCadastro $cabecalho;
    private ?OsCadastro $informacoesAdicionais;
    private ?OsCadastro $email;
    private ?array $departamentos;
    private ?OsCadastro $servicosPrestados;
    private ?OsCadastro $parcelas;
    private ?string $observacoes;
    private ?string $infoCadastro;
    private ?OsCadastro $despesasReembolsaveis;
    private ?OsCadastro $produtosUtilizados;


    public function addDepartamentos(OsDepartamento $departamento): OsCadastro
    {
        $this->departamentos[] = $departamento->toArray();
        return $this;
    }

    public function getDepartamentos(): ?array
    {
        return $this->departamentos;
    }

    public function toArray(): array
    {
        return array_filter([
            "cabecalho" => $this->cabecalho->toArray(),
            "informacoesAdicionais" => $this->informacoesAdicionais->toArray(),
            "email" => $this->email->toArray(),
            "departamentos" => $this->departamentos,
            "servicosPrestados" => $this->servicosPrestados,
            "parcelas" => $this->parcelas,
            "observacoes" => $this->observacoes,
            "infoCadastro" => $this->infoCadastro->toArray(),
            "despesasReembolsaveis" => $this->despesasReembolsaveis->toArray(),
            "produtosUtilizados" => $this->produtosUtilizados,
        ], function ($v) {
            return !is_null($v);
        });
    }

    // TODO: Continuar
}
