# LearnerAttendanceSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) assigned to uniquely identify this attendance record. | 
**learner_personal_ref_id** | **string** | The ID (GUID) of the learner for whom this attendance information is being reported. | 
**school_info_ref_id** | **string** | The ID (GUID) of the school for which this attendance information is being reported. | 
**school_year** | **string** |  | 
**start_date** | [**\DateTime**](Date.md) | Starting date of this attendance reporting period. | 
**end_date** | [**\DateTime**](Date.md) | Ending date of this attendance reporting period. | 
**reasons_list** | [**\DataExchange\UK\20\Models\Reason[]**](Reason.md) |  | 
**sessions_attended_total** | **int** | The number of sessions the learner attended school when school was in session between the StartDate and EndDate, inclusive. | 
**sessions_possible** | **int** | The number of sessions the learner was present plus the number of sessions the learner was absent (authorised and unauthorised) when school was in session during the period between the StartDate and EndDate, inclusive. | 
**authorised_absences** | **int** | The number of sessions the learner was absent from school with a valid excuse when school was in session between the StartDate and EndDate, inclusive. Note that ts column can be derived from Reason Status. | [optional] 
**unauthorised_absences** | **int** | The number of sessions the learner was absent from school without a valid excuse when school was in session between the StartDate and EndDate, inclusive. Note that this column can be derived from Reason Status. | [optional] 
**alternative_tuition_hours** | **string** | Number of Alternative Tuition (whole) hours attended between the StartDate and EndDate, inclusive. | [optional] 
**dfe_statutory_session_attendance_string** | **string** | Learner morning and afternoon session registration marks as per DfE statutory definition. This data item is a concatenation of all DfE statutory session attendance codes recorded for the given Learner starting on the morning session of the StartDate this object refers to and ending on the afternoon session of EndDate. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


