<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-01-09
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/vendor-transaction-status-api-model/vendorTransactionStatus.json
* Source MD5 signature: 4fc94032d4638149a6531ec91741ac0d
*
*
* Selling Partner API for Retail Procurement Transaction Status
* The Selling Partner API for Retail Procurement Transaction Status provides programmatic access to status information on specific asynchronous POST transactions for vendors.
*/
namespace Webaune\Spapi\Api;
use Webaune\Spapi\Client;

class VendorTransactionStatus extends Client {

  /**
  * Operation getTransaction
  *
  * @param string $transactionId The GUID provided by Amazon in the 'transactionId' field in response to the post request of a specific transaction.
  *
  */
  public function getTransaction($transactionId)
  {
    return $this->send("/vendor/transactions/v1/transactions/{$transactionId}", [
      'method' => 'GET',
    ]);
  }

  public function getTransactionAsync($transactionId)
  {
    return $this->sendAsync("/vendor/transactions/v1/transactions/{$transactionId}", [
      'method' => 'GET',
    ]);
  }
}
