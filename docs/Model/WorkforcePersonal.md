# WorkforcePersonal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) of the workforce member. Note that the same GUID may be assigned to this person when they are also a learner (via LearnerPersonal) and/or a contact (via ContactPersonal). | 
**local_id** | **string** |  | 
**alert_msg_list** | [**\DataExchange\UK\20\Models\AlertMsg[]**](AlertMsg.md) |  | [optional] 
**medical_alert_msg_list** | [**\DataExchange\UK\20\Models\MedicalAlertMsg[]**](MedicalAlertMsg.md) |  | [optional] 
**personal_information** | [**\DataExchange\UK\20\Models\PersonalInformation**](PersonalInformation.md) |  | [optional] 
**teacher_number** | **string** | The DfES Teacher Reference number. For those who have one this is a unique number. | [optional] 
**ni_number** | **string** |  | [optional] 
**external_workforce_identifier_list** | [**\DataExchange\UK\20\Models\ExternalLearnerIdentifier[]**](ExternalLearnerIdentifier.md) |  | [optional] 
**current_assignment_list** | [**\DataExchange\UK\20\Models\CurrentAssignment[]**](CurrentAssignment.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


