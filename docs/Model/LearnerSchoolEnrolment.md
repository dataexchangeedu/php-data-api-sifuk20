# LearnerSchoolEnrolment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) that uniquely identifies a particular enrolment. | 
**learner_personal_ref_id** | **string** | The ID (GUID) of the learner to whom this information is linked. | 
**school_info_ref_id** | **string** | The ID (GUID) of the school to which this enrolment applies. | 
**membership_type** | **string** | The type of this enrolment as it relates to the school identified by SchoolInfoRefId. | 
**entry_date** | [**\DateTime**](Date.md) | The date from when this enrolment is valid. | 
**nc_year_group_actual** | **string** | The year group in which the learner is taught for the majority of their time, regardless of their chronological age. | 
**class_type** | **string** | Indicates if the learner is in a nursery class. Must be set to &amp;#039;O&amp;#039; if age on August 31 is &amp;gt;&#x3D; 6. | [optional] 
**exit_date** | [**\DateTime**](Date.md) | The ending date of this enrolment. If the learner has exited before the end of the school year, ExitDate must have a value. | [optional] 
**exit_type** | [**\DataExchange\SIFUK20\Models\ExitType**](ExitType.md) |  | [optional] 
**sessions** | **int** |  | [optional] 
**ftpt_status** | **string** | An indication of whether the learner is enroled only part time. | [optional] 
**boarder** | **string** | Indicates whether the learner is a boarder at the school or not. | [optional] 
**alternative_tuition** | [**\DataExchange\SIFUK20\Models\AlternativeTuition**](AlternativeTuition.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


