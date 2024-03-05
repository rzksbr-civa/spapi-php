<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-01-09
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/fba-small-and-light-api-model/fbaSmallandLight.json
* Source MD5 signature: 525796afdf60a90146bc090d4bea551e
*
*
* Selling Partner API for FBA Small And Light
* The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
*/
namespace Webaune\Spapi\Api;
use Webaune\Spapi\Client;

class FbaSmallAndLight extends Client {

  /**
  * Operation getSmallAndLightEnrollmentBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only.
  *
  */
  public function getSmallAndLightEnrollmentBySellerSKU($sellerSKU, $queryParams = [])
  {
    return $this->send("/fba/smallAndLight/v1/enrollments/{$sellerSKU}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  public function getSmallAndLightEnrollmentBySellerSKUAsync($sellerSKU, $queryParams = [])
  {
    return $this->sendAsync("/fba/smallAndLight/v1/enrollments/{$sellerSKU}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation putSmallAndLightEnrollmentBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace in which to enroll the item. Note: Accepts a single marketplace only.
  *
  */
  public function putSmallAndLightEnrollmentBySellerSKU($sellerSKU, $queryParams = [])
  {
    return $this->send("/fba/smallAndLight/v1/enrollments/{$sellerSKU}", [
      'method' => 'PUT',
      'query' => $queryParams,
    ]);
  }

  public function putSmallAndLightEnrollmentBySellerSKUAsync($sellerSKU, $queryParams = [])
  {
    return $this->sendAsync("/fba/smallAndLight/v1/enrollments/{$sellerSKU}", [
      'method' => 'PUT',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation deleteSmallAndLightEnrollmentBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only.
  *
  */
  public function deleteSmallAndLightEnrollmentBySellerSKU($sellerSKU, $queryParams = [])
  {
    return $this->send("/fba/smallAndLight/v1/enrollments/{$sellerSKU}", [
      'method' => 'DELETE',
      'query' => $queryParams,
    ]);
  }

  public function deleteSmallAndLightEnrollmentBySellerSKUAsync($sellerSKU, $queryParams = [])
  {
    return $this->sendAsync("/fba/smallAndLight/v1/enrollments/{$sellerSKU}", [
      'method' => 'DELETE',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getSmallAndLightEligibilityBySellerSKU
  *
  * @param string $sellerSKU The seller SKU that identifies the item.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only.
  *
  */
  public function getSmallAndLightEligibilityBySellerSKU($sellerSKU, $queryParams = [])
  {
    return $this->send("/fba/smallAndLight/v1/eligibilities/{$sellerSKU}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  public function getSmallAndLightEligibilityBySellerSKUAsync($sellerSKU, $queryParams = [])
  {
    return $this->sendAsync("/fba/smallAndLight/v1/eligibilities/{$sellerSKU}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getSmallAndLightFeePreview
  *
  */
  public function getSmallAndLightFeePreview($body = [])
  {
    return $this->send("/fba/smallAndLight/v1/feePreviews", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function getSmallAndLightFeePreviewAsync($body = [])
  {
    return $this->sendAsync("/fba/smallAndLight/v1/feePreviews", [
      'method' => 'POST',
      'json' => $body
    ]);
  }
}
