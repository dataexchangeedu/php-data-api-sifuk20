# AssessmentResultComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | The ID (GUID) of this aspect or subtest. | 
**name** | **string** | The name used to identify this component or aspect. | 
**local_id** | **string** | The identifier used within the publishing application. | [optional] 
**short_description** | **string** | Shorter description used for column headers in marksheets, etc. | 
**description** | **string** | Longer text describing features of the component. | 
**year_list** | **string[]** |  | [optional] 
**assessment_subject_list** | **string[]** |  | [optional] 
**stage_list** | **string[]** |  | [optional] 
**assessment_result_grade_set_ref_id** | **string** | The gradeset associated with the component or aspect. | [optional] 
**mark_set_list** | [**\DataExchange\SIFUK20\Models\MarkSet[]**](MarkSet.md) |  | [optional] 
**component_type** | **string** | Defines the associated result format. | 
**result_qualifier** | **string** | Defines the format or type of result(s) awarded. | 
**assessment_method** | **string** | The method or format of the Assessment. | 
**supplier_name** | **string** | The supplier/originator/designer/owner of the aspect. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


