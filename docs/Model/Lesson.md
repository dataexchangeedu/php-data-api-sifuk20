# Lesson

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** |  | 
**cycle_ref_id** | **string** | The RefId of the Cycle to which this Lesson belongs. This is optional to preserve backwards compatibility but it is very strongly advised that it should be correctly populated and considered mandatory in this version of the specification. | [optional] 
**tt_day_id** | **string** |  | 
**period_index** | **int** | Index of period this lesson/meeting starts | 
**type** | **string** | Lesson/meeting type The value here determines whether a TeachingGroupID or an NTCode is required | 
**length** | **int** | Length of lesson in periods (1&#x3D;single, 2&#x3D;double, etc). Can omit if just a single. | [optional] 
**teaching_group_ref_id** | **string** | The Teaching Group being taught (may not be one if Type !&#x3D; &amp;quot;T&amp;quot;) (see TeachingGroup) | [optional] 
**nt_code_ref** | **string** | If there is no TeachingGroupRefID (see NTCode) | [optional] 
**teacher_list** | **string[]** |  | [optional] 
**tt_room_ref_id** | **string** | The room (or location) where this lesson is taking place (see TTRoom) | [optional] 
**sif_extended_elements** | [**\DataExchange\UK\20\Models\SIFExtendedElement2[]**](SIFExtendedElement2.md) | Allows an agent to include data not yet defined within a SIF data object as name/value pairs. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


