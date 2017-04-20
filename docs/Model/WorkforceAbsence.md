# WorkforceAbsence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) of the WorkforceAbsence object. | 
**workforce_personal_ref_id** | **string** | RefId of WorkforcePersonal object this applies to. | 
**absence_start_date** | [**\DateTime**](Date.md) | Date this absence started. | 
**absence_start_time** | **string** | Time on AbsenceStartDate that this absence started, assumed midnight if not included. | [optional] 
**absence_end_date** | [**\DateTime**](Date.md) | Date this absence ended, if omitted it is assumed that the absence is ongoing. | [optional] 
**absence_end_time** | **string** | Time on AbsenceEndDate that this absence ended, assumed midnight if not included. | [optional] 
**absence_type** | **string** | Type of absence. | 
**absence_illness** | **string** | Specific illness if AbsenceType is Sickness. | [optional] 
**workforce_assignment_ref_id** | **string** | For use if this absence relates to a specific WorkforceAssignment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


