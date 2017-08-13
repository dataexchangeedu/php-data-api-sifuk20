# TeachingGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | Unique local ID | 
**school_group_ref_id** | **string** | The RefId of the SchoolGroup (typically in the MIS) that represents this TeachingGroup. (This will typically be known if the information is coming from an MIS; but typically not known if the information is coming from timetabling software.) | [optional] 
**group_definition** | [**\DataExchange\SIFUK20\Models\GroupDefinition**](GroupDefinition.md) |  | [optional] 
**main_teacher_ref_id** | **string** | The main teacher / supervisor / etc for this group (for reporting / recognition purposes) (see TTTeacher) | [optional] 
**group_teacher_list** | [**\DataExchange\SIFUK20\Models\GroupTeacher[]**](GroupTeacher.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


