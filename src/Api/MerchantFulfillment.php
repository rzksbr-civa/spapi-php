<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-01-09
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/merchant-fulfillment-api-model/merchantFulfillmentV0.json
* Source MD5 signature: 35c2bb854b1d917bc4905124d3099177
*
*
* Selling Partner API for Merchant Fulfillment
* The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
*/
namespace Webaune\Spapi\Api;
use Webaune\Spapi\Client;

class MerchantFulfillment extends Client {

  /**
  * Operation getEligibleShipmentServicesOld
  *
  */
  public function getEligibleShipmentServicesOld($body = [])
  {
    return $this->send("/mfn/v0/eligibleServices", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function getEligibleShipmentServicesOldAsync($body = [])
  {
    return $this->sendAsync("/mfn/v0/eligibleServices", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation getEligibleShipmentServices
  *
  */
  public function getEligibleShipmentServices($body = [])
  {
    return $this->send("/mfn/v0/eligibleShippingServices", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function getEligibleShipmentServicesAsync($body = [])
  {
    return $this->sendAsync("/mfn/v0/eligibleShippingServices", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation getShipment
  *
  * @param string $shipmentId The Amazon-defined shipment identifier for the shipment.
  *
  */
  public function getShipment($shipmentId)
  {
    return $this->send("/mfn/v0/shipments/{$shipmentId}", [
      'method' => 'GET',
    ]);
  }

  public function getShipmentAsync($shipmentId)
  {
    return $this->sendAsync("/mfn/v0/shipments/{$shipmentId}", [
      'method' => 'GET',
    ]);
  }

  /**
  * Operation cancelShipment
  *
  * @param string $shipmentId The Amazon-defined shipment identifier for the shipment to cancel.
  *
  */
  public function cancelShipment($shipmentId)
  {
    return $this->send("/mfn/v0/shipments/{$shipmentId}", [
      'method' => 'DELETE',
    ]);
  }

  public function cancelShipmentAsync($shipmentId)
  {
    return $this->sendAsync("/mfn/v0/shipments/{$shipmentId}", [
      'method' => 'DELETE',
    ]);
  }

  /**
  * Operation cancelShipmentOld
  *
  * @param string $shipmentId The Amazon-defined shipment identifier for the shipment to cancel.
  *
  */
  public function cancelShipmentOld($shipmentId)
  {
    return $this->send("/mfn/v0/shipments/{$shipmentId}/cancel", [
      'method' => 'PUT',
    ]);
  }

  public function cancelShipmentOldAsync($shipmentId)
  {
    return $this->sendAsync("/mfn/v0/shipments/{$shipmentId}/cancel", [
      'method' => 'PUT',
    ]);
  }

  /**
  * Operation createShipment
  *
  */
  public function createShipment($body = [])
  {
    return $this->send("/mfn/v0/shipments", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function createShipmentAsync($body = [])
  {
    return $this->sendAsync("/mfn/v0/shipments", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation getAdditionalSellerInputsOld
  *
  */
  public function getAdditionalSellerInputsOld($body = [])
  {
    return $this->send("/mfn/v0/sellerInputs", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function getAdditionalSellerInputsOldAsync($body = [])
  {
    return $this->sendAsync("/mfn/v0/sellerInputs", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation getAdditionalSellerInputs
  *
  */
  public function getAdditionalSellerInputs($body = [])
  {
    return $this->send("/mfn/v0/additionalSellerInputs", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function getAdditionalSellerInputsAsync($body = [])
  {
    return $this->sendAsync("/mfn/v0/additionalSellerInputs", [
      'method' => 'POST',
      'json' => $body
    ]);
  }
}
