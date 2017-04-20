# SchoolInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The GUID that identifies this school. | 
**la_info_ref_id** | **string** | The ID (GUID) assigned to the LA of which this school is a member. | [optional] 
**local_id** | **string** | An ID assigned by the publishing agent for this school or establishment. This may be set to any value. | [optional] 
**establishment_id** | **string** |  | 
**la_id** | **string** |  | 
**school_name** | **string** | School&amp;#039;s name as indicated on the Annual Schools Census. | 
**school_full_name** | **string** | School&amp;#039;s full name as stated in the Instrument of Government. | [optional] 
**urn** | **string** | School Unique Reference Number. This number is an alternate to the Establishment Number. | [optional] 
**school_url** | **string** | URL for the school. | [optional] 
**school_address** | [**\DataExchange\UK\20\Models\SchoolAddress**](SchoolAddress.md) |  | [optional] 
**address_list** | **string[]** | Other addresses associated with the school. | [optional] 
**school_phone_number** | [**\DataExchange\UK\20\Models\SchoolPhoneNumber**](SchoolPhoneNumber.md) |  | [optional] 
**other_phone_number_list** | **string[]** | A list of the school&amp;#039;s phone numbers. | [optional] 
**school_email** | [**\DataExchange\UK\20\Models\SchoolEmail**](SchoolEmail.md) |  | [optional] 
**school_contact_list** | [**\DataExchange\UK\20\Models\Contact[]**](Contact.md) | A list of contacts at the school. | [optional] 
**head_teacher_info** | [**\DataExchange\UK\20\Models\HeadTeacherInfo**](HeadTeacherInfo.md) |  | [optional] 
**phase** | **string** | The high level code indicating the level of the educational institution. | [optional] 
**school_type** | **string** | An indication of the level of the educational institution. | [optional] 
**governance** | **string** | Governance afforded to this school. | [optional] 
**intake** | **string** | Intake type. | [optional] 
**nc_year_group_list** | **string[]** | Collection of National Curriculum Year Groups offered in this school or establishment. | [optional] 
**gender_of_entry** | **string** | Gender of learners allowed for entry to school. | [optional] 
**gender_sixth_form** | **string** | Gender of learners allowed for entry to Sixth Form. | [optional] 
**boarders** | **string** | Indicates whether the school supports boarders or not. | [optional] 
**sessions_per_day** | **int** | The number of sessions in the usual school day (usually two). | 
**nursery** | **string** | Indicates whether the school maintains a nursery class or not. Must be NO if Phase is set to MP, MS or SY. Must be YES if Phase is set to NY or EY. | [optional] 
**special** | **string** | Indicates whether the school has a special class/unit or not. Must be Yes if Phase &#x3D; SP. Any details will be stored in the associated SchoolInfoDetail object. | [optional] 
**operational_status** | **string** | Operational condition of a school. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


