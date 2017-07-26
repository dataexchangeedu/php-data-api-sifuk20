# Name

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Code that specifies what type of name this is. | 
**title** | **string** | A title or prefix associated with the name. If any of: Mr, Mrs, Ms, Miss, Rev, Fr, Dr, Prof, Hon, Sir, Lord, Lady - these must be as shown, otherwise free text. Note that title is not applicable to learners. | [optional] 
**family_name** | **string** | Full legal family name. That part of the person&amp;#039;s name which is used to describe family, clan, tribal group, or marital association. Note that this element is always required. However, when associated with a contact it may not be possible to know the family name in which case you should add the available information to the FullName element. | [optional] 
**given_name** | **string** | Full given name (forename) of the person. Note that this element is always required. However, when associated with a contact it may not be possible to know the given name in which case you should add the available information to the FullName element. | [optional] 
**middle_names** | **string** | All other given or middle names, each separated with a single space character. | [optional] 
**family_name_first** | **string** | An indicator used to identify the naming conventions used by some predominantly non-European, ethnic or language groups and related to the display nature of a name. | [optional] 
**preferred_family_name** | **string** | The family name preferred most by the person (as written). | [optional] 
**preferred_family_name_first** | **string** | An indicator used to identify the naming conventions used by some predominantly non-European, ethnic or language groups and related to the display nature of a name. | [optional] 
**preferred_given_name** | **string** | The given name preferred most by the person (as written). | [optional] 
**suffix** | **string** | Textual suffix like PHD, JP, BSc. | [optional] 
**full_name** | **string** | A free text field for the complete name for display purposes. If this is associated with a ContactPersonal record and the FamilyName and GivenName are not both specified, then this becomes mandatory. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


