# LearnerAssessmentResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) of this result. | 
**assessment_component_ref_id** | **string** | The assessment component that the result is for. | 
**learner_personal_ref_id** | **string** | The ID (GUID) of the learner achieving the results. | 
**school_info_ref_id** | **string** | The school at which the assessment was taken. | 
**achievement_date** | [**\DateTime**](Date.md) | The date the results were achieved. | 
**result** | **string** | A grade title, a comment, or a mark (dependent on ComponentType of associated aspect). Marks and grades should be valid in the grade set or mark set on the date the assessment was achieved. | 
**result_status** | **string** | Indicates whether the result is estimated, an interim result, provisional, actual result or a target. | 
**assessment_session_list** | **string[]** |  | [optional] 
**workforce_personal_ref_id** | **string** | The ID (GUID) that uniquely identifies the teacher or staff member who created the result. | [optional] 
**note** | **string** | Explanatory/usage notes for result. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


