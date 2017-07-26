# LearnerExclusion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) of this exclusion. | 
**learner_personal_ref_id** | **string** | The ID (GUID) of the excluded learner. | 
**category** | **string** | Exclusion category. | 
**reason** | **string** | Reason for exclusion. | 
**start_date** | [**\DateTime**](Date.md) | Date exclusion takes effect irrespective of any review or appeal. Normally this will not be the same as Date of Leaving (exitDate) and it should be noted that the learner will remain on the schools&amp;#039;s roll for a period after this start date. | 
**start_session** | **int** |  | 
**end_date** | [**\DateTime**](Date.md) | Date exclusion concludes. | [optional] 
**actual_sessions** | **int** | Total number of sessions for which the exclusion is in effect. For lunchtime exclusions, each lunchtime for which the exclusion applies is one session. For fixed term and permanent exclusions, this is one session during the school day. For exclusions that are followed by reinstatement the actual, not the planned number of sessions should be recorded. (Exclusion sessions are used only to calculate the total allowable in a term or academic year and are not the same as an attendance session.) | [optional] 
**appeal** | **string** | Is there an appeal against permanent exclusion? | [optional] 
**appeal_date** | [**\DateTime**](Date.md) | Date for appeal against permanent exclusion. | [optional] 
**appeal_result** | **string** | The result of the appeal against permanent exclusion. | [optional] 
**reinstatement_date** | [**\DateTime**](Date.md) | Date learner was reinstated, if appropriate. | [optional] 
**head_teacher_notification_date** | [**\DateTime**](Date.md) | Date head teacher notified parents, school LA, and home LA (if different) of exclusion. | [optional] 
**governor_meeting_date** | [**\DateTime**](Date.md) | Date of Governors&amp;#039; meeting with respect to exclusion. | [optional] 
**hearing_notice_of_appeal_date** | [**\DateTime**](Date.md) | Date of exclusion hearing/expiration of notice of appeal. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


