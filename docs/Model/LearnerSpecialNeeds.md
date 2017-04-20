# LearnerSpecialNeeds

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) that uniquely identifies a learner special need (provision). | 
**learner_personal_ref_id** | **string** | The ID (GUID) of the learner with special educational needs. | 
**school_info_ref_id** | **string** | The ID (GUID) that uniquely identifies the school provisioned to work with the learner&amp;#039;s special needs. | 
**unit_member** | **string** | Is this learner with special education needs (SEN) in a mainstream school a member of an SEN Unit (sometimes called special class)? | [optional] 
**resourced_provision_member** | **string** | Is this learner with special education needs (SEN) in a mainstream school a member of a resourced provision? | [optional] 
**next_review_date** | [**\DateTime**](Date.md) | Date of learner&amp;#039;s next SEN review. | [optional] 
**provision** | **string** | A provision (stage) accommodated for this learner within this school. | 
**start_date** | [**\DateTime**](Date.md) | Date when learner was placed on the current SEN stage. Date may be in the future. | 
**end_date** | [**\DateTime**](Date.md) | Date when learner finished this SEN stage. Assumed to be current unless a date in the past is specified here. | [optional] 
**sen_type_list** | [**\DataExchange\UK\20\Models\SENType[]**](SENType.md) |  | [optional] 
**advice_and_assessment_level** | **string** | Level of provision for Advice and Assessment. (Wales) | [optional] 
**grouping_and_support_level** | **string** | Level of provision for Grouping and Support. (Wales) | [optional] 
**specialised_resources_level** | **string** | Level of provision for Specialised Resources. (Wales) | [optional] 
**teaching_methods_level** | **string** | Level of provision for Curriculum and Teaching Methods. (Wales) | [optional] 
**embedded_basic_skills_support** | **string** | Provision of Embedded Basic Skills support beyond the attainment of formal qualification. | [optional] 
**literacy_level_start** | **string** | Level of literacy at start of this SEN stage. (Wales) | [optional] 
**literacy_level_end** | **string** | Level of literacy achieved by the end of this SEN stage. (Wales) | [optional] 
**numeracy_level_start** | **string** | Level of numeracy at start of this SEN stage. (Wales) | [optional] 
**numeracy_level_end** | **string** | Level of numeracy achieved by the end of this SEN stage. (Wales) | [optional] 
**national_curriculum_list** | [**\DataExchange\UK\20\Models\NationalCurriculum[]**](NationalCurriculum.md) |  | [optional] 
**medical_flag** | **string** | Is there medical information on this Learner? | [optional] 
**paramedical_support** | **string** | Type of therapy needed by Learner. | [optional] 
**medical_notes** | **string** | Summary of learner&amp;#039;s medical condition. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


