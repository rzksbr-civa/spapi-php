<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-01-09
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/services-api-model/services.json
* Source MD5 signature: 862e10748dccc50e2210fc968630a219
*
*
* Selling Partner API for Services
* With the Services API, you can build applications that help service providers get and modify their service orders.
*/
namespace Webaune\Spapi\Api;
use Webaune\Spapi\Client;

class Services extends Client {

  /**
  * Operation getServiceJobByServiceJobId
  *
  * @param string $serviceJobId A service job identifier.
  *
  */
  public function getServiceJobByServiceJobId($serviceJobId)
  {
    return $this->send("/service/v1/serviceJobs/{$serviceJobId}", [
      'method' => 'GET',
    ]);
  }

  public function getServiceJobByServiceJobIdAsync($serviceJobId)
  {
    return $this->sendAsync("/service/v1/serviceJobs/{$serviceJobId}", [
      'method' => 'GET',
    ]);
  }

  /**
  * Operation cancelServiceJobByServiceJobId
  *
  * @param string $serviceJobId An Amazon defined service job identifier.
  *
  * @param array $queryParams
  *    - *cancellationReasonCode* string - A cancel reason code that specifies the reason for cancelling a service job.
  *
  */
  public function cancelServiceJobByServiceJobId($serviceJobId, $queryParams = [])
  {
    return $this->send("/service/v1/serviceJobs/{$serviceJobId}/cancellations", [
      'method' => 'PUT',
      'query' => $queryParams,
    ]);
  }

  public function cancelServiceJobByServiceJobIdAsync($serviceJobId, $queryParams = [])
  {
    return $this->sendAsync("/service/v1/serviceJobs/{$serviceJobId}/cancellations", [
      'method' => 'PUT',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation completeServiceJobByServiceJobId
  *
  * @param string $serviceJobId An Amazon defined service job identifier.
  *
  */
  public function completeServiceJobByServiceJobId($serviceJobId)
  {
    return $this->send("/service/v1/serviceJobs/{$serviceJobId}/completions", [
      'method' => 'PUT',
    ]);
  }

  public function completeServiceJobByServiceJobIdAsync($serviceJobId)
  {
    return $this->sendAsync("/service/v1/serviceJobs/{$serviceJobId}/completions", [
      'method' => 'PUT',
    ]);
  }

  /**
  * Operation getServiceJobs
  *
  * @param array $queryParams
  *    - *serviceOrderIds* array - List of service order ids for the query you want to perform.Max values supported 20. 
  *    - *serviceJobStatus* array - A list of one or more job status by which to filter the list of jobs.
  *    - *pageToken* string - String returned in the response of your previous request.
  *    - *pageSize* integer - A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. 
  *    - *sortField* string - Sort fields on which you want to sort the output.
  *    - *sortOrder* string - Sort order for the query you want to perform.
  *    - *createdAfter* string - A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. 
  *    - *createdBefore* string - A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format. 
  *    - *lastUpdatedAfter* string - A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. 
  *    - *lastUpdatedBefore* string - A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format. 
  *    - *scheduleStartDate* string - A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. 
  *    - *scheduleEndDate* string - A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. 
  *    - *marketplaceIds* array - Used to select jobs that were placed in the specified marketplaces. 
  *
  */
  public function getServiceJobs($queryParams = [])
  {
    return $this->send("/service/v1/serviceJobs", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  public function getServiceJobsAsync($queryParams = [])
  {
    return $this->sendAsync("/service/v1/serviceJobs", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation addAppointmentForServiceJobByServiceJobId
  *
  * @param string $serviceJobId An Amazon defined service job identifier.
  *
  */
  public function addAppointmentForServiceJobByServiceJobId($serviceJobId, $body = [])
  {
    return $this->send("/service/v1/serviceJobs/{$serviceJobId}/appointments", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function addAppointmentForServiceJobByServiceJobIdAsync($serviceJobId, $body = [])
  {
    return $this->sendAsync("/service/v1/serviceJobs/{$serviceJobId}/appointments", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation rescheduleAppointmentForServiceJobByServiceJobId
  *
  * @param string $serviceJobId An Amazon defined service job identifier.
  * @param string $appointmentId An existing appointment identifier for the Service Job.
  *
  */
  public function rescheduleAppointmentForServiceJobByServiceJobId($serviceJobId, $appointmentId, $body = [])
  {
    return $this->send("/service/v1/serviceJobs/{$serviceJobId}/appointments/{$appointmentId}", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function rescheduleAppointmentForServiceJobByServiceJobIdAsync($serviceJobId, $appointmentId, $body = [])
  {
    return $this->sendAsync("/service/v1/serviceJobs/{$serviceJobId}/appointments/{$appointmentId}", [
      'method' => 'POST',
      'json' => $body
    ]);
  }
}
