# LearnerEntitlement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) that uniquely identifies a particular entitlement. | 
**learner_personal_ref_id** | **string** | The ID (GUID) of the learner to whom this entitlement is linked. | 
**school_info_ref_id** | **string** | The ID (GUID) of the school to which this entitlement applies. | 
**entitlement_type** | **string** | The type of this Entitlement | 
**start_date** | [**\DateTime**](Date.md) | Date Specific Entitlement starts. | 
**end_date** | [**\DateTime**](Date.md) | Date Specific Entitlement Ends has to be on or after Start date. | [optional] 
**note** | **string** | A note relating to entitlement period. | [optional] 
**value** | **string** |  | [optional] 
**provider_id** | [**\DataExchange\UK\20\Models\ProviderId**](ProviderId.md) |  | [optional] 
**next_review_date** | [**\DateTime**](Date.md) | Advises the date for next review of the listed entitlement, this element is not expected to be provided for instances where the EndDate is in the past as it refers to the entitlement, not periods of entitlement. Note that a review date could be prior to the end date of a current entitlement, and so is recorded separately. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


