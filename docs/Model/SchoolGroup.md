# SchoolGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) that uniquely identifies this group entity. | 
**school_group_type_ref_id** | **string** | The ID (GUID) that identifies a course upon which this group is centered. Note that this element is mandatory when GroupType is associated with a course (teaching group). | 
**school_year** | **string** | School year for which the group is applicable, expressed as the four-digit year in which the school year ends (e.g. 2007 for the 2006/07 school year). Where a group membership is valid across multiple years, the current year at the time of publication will be used. | 
**local_id** | **string** |  | 
**group_name** | **string** | The name associated with this group for display purposes. | 
**description** | **string** | A textual description. | [optional] 
**parent_school_group_ref_id** | **string** | The parent group associated with this group, if any. | [optional] 
**schedule_info_list** | [**\DataExchange\SIFUK20\Models\ScheduleInfo[]**](ScheduleInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


