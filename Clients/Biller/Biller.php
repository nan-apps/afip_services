<?php
namespace AfipClient\Clients\Biller;

use AfipClient\ACException;

/**
 * Clase encargada de facturar
 */
class Biller
{
    private $biller_client;

    /**
     * @param BillerClient $biller_client interactua con api afip
     */
    public function __construct(BillerClient $biller_client)
    {
        $this->biller_client = $biller_client;
    }


    /**
     * Solicitar cae y fecha de vencimiento al WS de facturacion
     * @param array $data
     * @return array [ string 'cae' => '',  \DateTime 'cae_validdate' => null,
     *                 int 'invoice_number' => 0, string 'tax_id' => '', \DateTime 'invoice_date' => null
     * 				   stdClass 'full_response' => null ]
     * @throws  ACException
     */
    public function requestCAE(array $data)
    {
        return $this->biller_client->requestCAE($data);
    }
}
