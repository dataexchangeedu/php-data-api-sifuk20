# LearnerPersonal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) of the learner. Note that this GUID may be the same one assigned to this person when this person is either a contact (ContactPersonal) or a member of the workforce (WorkforcePersonal). | 
**local_id** | **string** | The locally-assigned identifier for this learner. This can be the internal pupil number or any other number as determined by the publishing agent. | [optional] 
**alert_msg_list** | [**\DataExchange\SIFUK20\Models\AlertMsg[]**](AlertMsg.md) |  | [optional] 
**medical_alert_msg_list** | [**\DataExchange\SIFUK20\Models\MedicalAlertMsg[]**](MedicalAlertMsg.md) |  | [optional] 
**personal_information** | [**\DataExchange\SIFUK20\Models\PersonalInformation**](PersonalInformation.md) |  | [optional] 
**uipi** | **string** | Unique Internal Pupil Number. | [optional] 
**upn** | **string** | Unique Pupil Number (UPN) allocated to each learner in maintained schools in England and Wales. It is an identifier for use in the educational context during a child&amp;#039;s school career only and subject to Data Protection restrictions. | [optional] 
**upn_allocation_date** | [**\DateTime**](Date.md) | Date UPN was allocated by the LA. | [optional] 
**former_upn_list** | **string[]** |  | [optional] 
**uln** | **string** |  | [optional] 
**external_learner_identifier_list** | [**\DataExchange\SIFUK20\Models\ExternalLearnerIdentifier[]**](ExternalLearnerIdentifier.md) |  | [optional] 
**family_structure** | **string** | Indicates type of family structure learner is living in. | [optional] 
**in_care** | [**\DataExchange\SIFUK20\Models\InCare**](InCare.md) |  | [optional] 
**connexions_agreement** | **string** | Indicates if parents have consented to allow learner data to be shared with Connexions (Middle, Secondary and Special Schools only). | [optional] 
**child_protection_register** | [**\DataExchange\SIFUK20\Models\ChildProtectionRegister**](ChildProtectionRegister.md) |  | [optional] 
**gifted_talented** | **string** | Learner qualifies for Gifted/Talented status. | [optional] 
**home_la** | **string** | The LA in which the learner lives but not necessarily the one in which they attend school. | [optional] 
**learner_identity** | **string** | Classification of national identity. (Wales) | [optional] 
**mode_of_travel** | **string** | The usual mode of travel normally used by the learner for the greater part (in distance) of the journey to and from school. | [optional] 
**pregnant** | **string** | Learner is pregnant. | [optional] 
**sibling_list** | [**\DataExchange\SIFUK20\Models\Sibling[]**](Sibling.md) |  | [optional] 
**uniform_allowance** | **string** | Learner is paid a uniform allowance. | [optional] 
**current_school_enrolment** | [**\DataExchange\SIFUK20\Models\CurrentSchoolEnrolment**](CurrentSchoolEnrolment.md) |  | [optional] 
**previous_establishment_list** | [**\DataExchange\SIFUK20\Models\PreviousEstablishment[]**](PreviousEstablishment.md) |  | [optional] 
**sif_extended_elements** | [**\DataExchange\SIFUK20\Models\SIFExtendedElement1[]**](SIFExtendedElement1.md) | Allows an agent to include data not yet defined within a SIF data object as name/value pairs. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


