# SchoolDiaryEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) that uniquely identifies a particular SchoolDiaryEntry. | 
**school_info_ref_id** | **string** | The ID (GUID) of the school to which this SchoolDiaryEntry applies. | 
**start_date** | [**\DateTime**](Date.md) | Date the specific SchoolDiaryEntry starts. | 
**start_time** | **string** | Specific time that SchoolDiaryEntry starts. If omitted then assumed to be an all day event. | [optional] 
**end_date** | [**\DateTime**](Date.md) | Date the specific DiaryEntry ends. If a single day event then it is same value as StartDate | 
**end_time** | **string** | Specific time that the SchoolDiaryEntry ends. If omitted then the SchoolDiaryEntry is assumed to be an all day event. | [optional] 
**title** | **string** | The name of the event. | 
**description** | **string** | A description relating to the event. | [optional] 
**category** | **string** | The user-defined, free text category of the diary entry. For example Open Evenings, Parent Evenings or Sports Events. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


