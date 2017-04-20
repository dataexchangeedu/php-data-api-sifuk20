# Identity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The SIF RefId that uniquely identifies this object. | 
**sif_ref_id** | [**\DataExchange\SIFUK20\Models\SIFRefId**](SIFRefId.md) |  | [optional] 
**main_role** | **string** | Indicates whether or not the Person that this object refers to is the main role for this Identity. | [optional] 
**authentication_source** | **string** | The type of source system that produced this Identityobject. | 
**identity_assertions** | [**\DataExchange\SIFUK20\Models\IdentityAssertions**](IdentityAssertions.md) |  | [optional] 
**password_list** | [**\DataExchange\SIFUK20\Models\Password[]**](Password.md) |  | [optional] 
**authentication_source_global_uid** | **string** | The globally unique identifier that links together separate Identity objects which reference the same Person. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


