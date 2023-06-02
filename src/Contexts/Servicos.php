<?php

namespace O4l3x4ndr3\SdkOmie\Contexts;

require 'application/third_party/sdk-omie/src/Helpers/CallApi.php';
require 'application/third_party/sdk-omie/src/Configuration.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkOmie\Configuration;
use O4l3x4ndr3\SdkOmie\Helpers\CallApi;

class Servicos extends CallApi
{
    /**
     * @var int|null
     */
    private ?int $cCodIntServ;

    /**
     * @var string|null
     */
    private ?string $cDescrCompleta;

    /**
     * @var string|null
     */
    private ?string $cDescricao;

    /**
     * @var string|null
     */
    private ?string $cCodigo;

    /**
     * @var string|null
     */
    private ?string $cIdTrib;

    /**
     * @var string|null
     */
    private ?string $cCodServMun;

    /**
     * @var string|null
     */
    private ?string $cCodLC116;

    /**
     * @var string|null
     */
    private ?string $nIdNBS;

    /**
     * @var float|null
     */
    private ?float $nPrecoUnit;

    /**
     * @var string|null
     */
    private ?string $cCodCateg;

    /**
     * @var float|null
     */
    private ?float $nAliqISS;

    /**
     * @var string|null
     */
    private ?string $cRetISS;

    /**
     * @var float|null
     */
    private ?float $nAliqPIS;

    /**
     * @var string|null
     */
    private ?string $cRetPIS;

    /**
     * @var float|null
     */
    private ?float $nAliqCOFINS;

    /**
     * @var string|null
     */
    private ?string $cRetCOFINS;

    /**
     * @var float|null
     */
    private ?float $nAliqCSLL;

    /**
     * @var string|null
     */
    private ?string $cRetCSLL;

    /**
     * @var float|null
     */
    private ?float $nAliqIR;

    /**
     * @var string|null
     */
    private ?string $cRetIR;

    /**
     * @var float|null
     */
    private ?float $nAliqINSS;

    /**
     * @var string|null
     */
    private ?string $cRetINSS;

    /**
     * @var float|null
     */
    private ?float $nRedBaseINSS;

    /**
     * @var float|null
     */
    private ?float $nRedBasePIS;

    /**
     * @var float|null
     */
    private ?float $nRedBaseCOFINS;

    /**
     * @var bool|null
     */
    private ?bool $lDeduzISS;

    /**
     * @param int|null $cCodIntServ
     * @param string|null $cDescrCompleta
     * @param string|null $cDescricao
     * @param string|null $cCodigo
     * @param string|null $cIdTrib
     * @param string|null $cCodServMun
     * @param string|null $cCodLC116
     * @param string|null $nIdNBS
     * @param float|null $nPrecoUnit
     * @param string|null $cCodCateg
     * @param float|null $nAliqISS
     * @param string|null $cRetISS
     * @param float|null $nAliqPIS
     * @param string|null $cRetPIS
     * @param float|null $nAliqCOFINS
     * @param string|null $cRetCOFINS
     * @param float|null $nAliqCSLL
     * @param string|null $cRetCSLL
     * @param float|null $nAliqIR
     * @param string|null $cRetIR
     * @param float|null $nAliqINSS
     * @param string|null $cRetINSS
     * @param float|null $nRedBaseINSS
     * @param float|null $nRedBasePIS
     * @param float|null $nRedBaseCOFINS
     * @param bool|null $lDeduzISS
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->cCodIntServ = null;
        $this->cDescrCompleta = null;
        $this->cDescricao = null;
        $this->cCodigo = null;
        $this->cIdTrib = null;
        $this->cCodServMun = null;
        $this->cCodLC116 = null;
        $this->nIdNBS = null;
        $this->nPrecoUnit = null;
        $this->cCodCateg = null;
        $this->nAliqISS = null;
        $this->cRetISS = null;
        $this->nAliqPIS = null;
        $this->cRetPIS = null;
        $this->nAliqCOFINS = null;
        $this->cRetCOFINS = null;
        $this->nAliqCSLL = null;
        $this->cRetCSLL = null;
        $this->nAliqIR = null;
        $this->cRetIR = null;
        $this->nAliqINSS = null;
        $this->cRetINSS = null;
        $this->nRedBaseINSS = null;
        $this->nRedBasePIS = null;
        $this->nRedBaseCOFINS = null;
        $this->lDeduzISS = null;
    }

    /**
     * @return int|null
     */
    public function getCCodIntServ(): ?int
    {
        return $this->cCodIntServ;
    }

    /**
     * @param int|null $cCodIntServ
     * @return Servicos
     */
    public function setCCodIntServ(?int $cCodIntServ): Servicos
    {
        $this->cCodIntServ = $cCodIntServ;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDescrCompleta(): ?string
    {
        return $this->cDescrCompleta;
    }

    /**
     * @param string|null $cDescrCompleta
     * @return Servicos
     */
    public function setCDescrCompleta(?string $cDescrCompleta): Servicos
    {
        $this->cDescrCompleta = $cDescrCompleta;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCDescricao(): ?string
    {
        return $this->cDescricao;
    }

    /**
     * @param string|null $cDescricao
     * @return Servicos
     */
    public function setCDescricao(?string $cDescricao): Servicos
    {
        $this->cDescricao = $cDescricao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodigo(): ?string
    {
        return $this->cCodigo;
    }

    /**
     * @param string|null $cCodigo
     * @return Servicos
     */
    public function setCCodigo(?string $cCodigo): Servicos
    {
        $this->cCodigo = $cCodigo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCIdTrib(): ?string
    {
        return $this->cIdTrib;
    }

    /**
     * @param string|null $cIdTrib
     * @return Servicos
     */
    public function setCIdTrib(?string $cIdTrib): Servicos
    {
        $this->cIdTrib = $cIdTrib;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodServMun(): ?string
    {
        return $this->cCodServMun;
    }

    /**
     * @param string|null $cCodServMun
     * @return Servicos
     */
    public function setCCodServMun(?string $cCodServMun): Servicos
    {
        $this->cCodServMun = $cCodServMun;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCCodLC116(): ?string
    {
        return $this->cCodLC116;
    }

    /**
     * @param string|null $cCodLC116
     * @return Servicos
     */
    public function setCCodLC116(?string $cCodLC116): Servicos
    {
        $this->cCodLC116 = $cCodLC116;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNIdNBS(): ?string
    {
        return $this->nIdNBS;
    }

    /**
     * @param string|null $nIdNBS
     * @return Servicos
     */
    public function setNIdNBS(?string $nIdNBS): Servicos
    {
        $this->nIdNBS = $nIdNBS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNPrecoUnit(): ?float
    {
        return $this->nPrecoUnit;
    }

    /**
     * @param float|null $nPrecoUnit
     * @return Servicos
     */
    public function setNPrecoUnit(?float $nPrecoUnit): Servicos
    {
        $this->nPrecoUnit = $nPrecoUnit;
        return $this;
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
     * @return Servicos
     */
    public function setCCodCateg(?string $cCodCateg): Servicos
    {
        $this->cCodCateg = $cCodCateg;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqISS(): ?float
    {
        return $this->nAliqISS;
    }

    /**
     * @param float|null $nAliqISS
     * @return Servicos
     */
    public function setNAliqISS(?float $nAliqISS): Servicos
    {
        $this->nAliqISS = $nAliqISS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetISS(): ?string
    {
        return $this->cRetISS;
    }

    /**
     * @param string|null $cRetISS
     * @return Servicos
     */
    public function setCRetISS(?string $cRetISS): Servicos
    {
        $this->cRetISS = $cRetISS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqPIS(): ?float
    {
        return $this->nAliqPIS;
    }

    /**
     * @param float|null $nAliqPIS
     * @return Servicos
     */
    public function setNAliqPIS(?float $nAliqPIS): Servicos
    {
        $this->nAliqPIS = $nAliqPIS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetPIS(): ?string
    {
        return $this->cRetPIS;
    }

    /**
     * @param string|null $cRetPIS
     * @return Servicos
     */
    public function setCRetPIS(?string $cRetPIS): Servicos
    {
        $this->cRetPIS = $cRetPIS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqCOFINS(): ?float
    {
        return $this->nAliqCOFINS;
    }

    /**
     * @param float|null $nAliqCOFINS
     * @return Servicos
     */
    public function setNAliqCOFINS(?float $nAliqCOFINS): Servicos
    {
        $this->nAliqCOFINS = $nAliqCOFINS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetCOFINS(): ?string
    {
        return $this->cRetCOFINS;
    }

    /**
     * @param string|null $cRetCOFINS
     * @return Servicos
     */
    public function setCRetCOFINS(?string $cRetCOFINS): Servicos
    {
        $this->cRetCOFINS = $cRetCOFINS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqCSLL(): ?float
    {
        return $this->nAliqCSLL;
    }

    /**
     * @param float|null $nAliqCSLL
     * @return Servicos
     */
    public function setNAliqCSLL(?float $nAliqCSLL): Servicos
    {
        $this->nAliqCSLL = $nAliqCSLL;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetCSLL(): ?string
    {
        return $this->cRetCSLL;
    }

    /**
     * @param string|null $cRetCSLL
     * @return Servicos
     */
    public function setCRetCSLL(?string $cRetCSLL): Servicos
    {
        $this->cRetCSLL = $cRetCSLL;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqIR(): ?float
    {
        return $this->nAliqIR;
    }

    /**
     * @param float|null $nAliqIR
     * @return Servicos
     */
    public function setNAliqIR(?float $nAliqIR): Servicos
    {
        $this->nAliqIR = $nAliqIR;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetIR(): ?string
    {
        return $this->cRetIR;
    }

    /**
     * @param string|null $cRetIR
     * @return Servicos
     */
    public function setCRetIR(?string $cRetIR): Servicos
    {
        $this->cRetIR = $cRetIR;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNAliqINSS(): ?float
    {
        return $this->nAliqINSS;
    }

    /**
     * @param float|null $nAliqINSS
     * @return Servicos
     */
    public function setNAliqINSS(?float $nAliqINSS): Servicos
    {
        $this->nAliqINSS = $nAliqINSS;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCRetINSS(): ?string
    {
        return $this->cRetINSS;
    }

    /**
     * @param string|null $cRetINSS
     * @return Servicos
     */
    public function setCRetINSS(?string $cRetINSS): Servicos
    {
        $this->cRetINSS = $cRetINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNRedBaseINSS(): ?float
    {
        return $this->nRedBaseINSS;
    }

    /**
     * @param float|null $nRedBaseINSS
     * @return Servicos
     */
    public function setNRedBaseINSS(?float $nRedBaseINSS): Servicos
    {
        $this->nRedBaseINSS = $nRedBaseINSS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNRedBasePIS(): ?float
    {
        return $this->nRedBasePIS;
    }

    /**
     * @param float|null $nRedBasePIS
     * @return Servicos
     */
    public function setNRedBasePIS(?float $nRedBasePIS): Servicos
    {
        $this->nRedBasePIS = $nRedBasePIS;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNRedBaseCOFINS(): ?float
    {
        return $this->nRedBaseCOFINS;
    }

    /**
     * @param float|null $nRedBaseCOFINS
     * @return Servicos
     */
    public function setNRedBaseCOFINS(?float $nRedBaseCOFINS): Servicos
    {
        $this->nRedBaseCOFINS = $nRedBaseCOFINS;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLDeduzISS(): ?bool
    {
        return $this->lDeduzISS;
    }

    /**
     * @param bool|null $lDeduzISS
     * @return Servicos
     */
    public function setLDeduzISS(?bool $lDeduzISS): Servicos
    {
        $this->lDeduzISS = $lDeduzISS;
        return $this;
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function listarCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#ListarCadastroServico", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function consultarCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#ConsultarCadastroServico", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function incluirCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#IncluirCadastroServico", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function alterarCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#AlterarCadastroServico", $param);
    }

    /**
     * @param array|null $param
     * @return object
     * @throws GuzzleException
     */
    public function excluirCadastroServico(?array $param = null): object
    {
        return $this->call("servicos/servico/#ExcluirCadastroServico", $param);
    }


    /**
     * Parse props to array
     *
     * @param Servicos $service
     *
     * @return array
     */
    private function toArray(Servicos $service): array
    {
        return [
            'cCodIntServ' => $this->getCCodIntServ(),
            'cDescrCompleta' => $this->getCDescrCompleta(),
            'cDescricao' => $this->getCDescricao(),
            'cCodigo' => $this->getCCodigo(),
            'cIdTrib' => $this->getCIdTrib(),
            'cCodServMun' => $this->getCCodServMun(),
            'cCodLC116' => $this->getCCodLC116(),
            'nIdNBS' => $this->getNIdNBS(),
            'nPrecoUnit' => $this->getNPrecoUnit(),
            'cCodCateg' => $this->getCCodCateg(),
            'nAliqISS' => $this->getNAliqISS(),
            'cRetISS' => $this->getCRetISS(),
            'nAliqPIS' => $this->getNAliqPIS(),
            'cRetPIS' => $this->getCRetPIS(),
            'nAliqCOFINS' => $this->getNAliqCOFINS(),
            'cRetCOFINS' => $this->getCRetCOFINS(),
            'nAliqCSLL' => $this->getNAliqCSLL(),
            'cRetCSLL' => $this->getCRetCSLL(),
            'nAliqIR' => $this->getNAliqIR(),
            'cRetIR' => $this->getCRetIR(),
            'nAliqINSS' => $this->getNAliqINSS(),
            'cRetINSS' => $this->getCRetINSS(),
            'nRedBaseINSS' => $this->getNRedBaseINSS(),
            'nRedBasePIS' => $this->getNRedBasePIS(),
            'nRedBaseCOFINS' => $this->getNRedBaseCOFINS(),
            'lDeduzISS' => $this->getLDeduzISS()
        ];
    }
}