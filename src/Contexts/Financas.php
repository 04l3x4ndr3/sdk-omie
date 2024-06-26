<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;
use O4l3x4ndr3\SdkOmie\Types\ContaReceberLancarRecebimento;
use O4l3x4ndr3\SdkOmie\Types\MovimentoFinanceiro;

class Financas extends CallApi
{
    public function __construct(?Configuration $config = NULL)
    {
        parent::__construct($config);
    }

    /**
     * ListarMovimentos method retrieves the list of finance movements based on the given MovimentoFinanceiro object.
     *
     * @param MovimentoFinanceiro $param The MovimentoFinanceiro object used as a filter for the list of movements.
     *
     * @return object The retrieved list of finance movements.
     * @throws GuzzleException
     */
    public function ListarMovimentos(MovimentoFinanceiro $param): object
    {
        return $this->call('financas/mf/#ListarMovimentos', $param->toArray());
    }

    /**
     * LancarRecebimento method.
     *
     * This method performs the operation of launching a receivable.
     *
     * @param ContaReceberLancarRecebimento $param The parameter object containing the necessary data for the receivable launch.
     * @return object The result of the operation.
     * @throws GuzzleException
     */
    public function LancarRecebimento(ContaReceberLancarRecebimento $param): object
    {
        return $this->call('financas/contareceber/#LancarRecebimento', $param->toArray());
    }
}