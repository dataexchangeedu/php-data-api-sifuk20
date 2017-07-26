# SchoolGroupType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The GUID that uniquely identifies a school course. | 
**school_info_ref_id** | **string** | The ID (GUID) that references the school or establishment where the course is offered or the registration group exists. | 
**school_year** | **string** | School year for which the information is applicable, expressed as the four-digit year in which the school year ends (e.g. 2007 for the 2006/07 school year). Where a group membership is valid across multiple years, the current year at the time of publication will be used. | 
**group_type** | **string** | The group type. Teaching groups are used to teach subjects while other groups are organised for various other reasons. | 
**code** | **string** | The school defined local code for the group (or course). | [optional] 
**title** | **string** | Title associated with this group. | [optional] 
**description** | **string** | Textual description for the group. | [optional] 
**subject_area_list** | **string[]** | Subject matter areas taught as part of the course, if any. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


