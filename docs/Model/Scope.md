# Scope

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ref_id** | **string** | Unique GUID for this Timetable transfer | 
**tt_scope_name** | **string** |  | 
**supplier_name** | **string** |  | 
**supplier_url** | **string** | A URL to a page on the supplier’s website that gives information about the transfer and/or contact details for the supplier. | [optional] 
**product** | **string** |  | 
**version** | **string** |  | 
**school_info_ref_id** | **string** | The unique school ID, taken from the existing SchoolInfo object (requested from ZIS) | 
**school_name** | **string** |  | 
**schedule_creation_date** | [**\DateTime**](Date.md) | Date schedule was created or last edited (omitted for &amp;quot;Basic data only&amp;quot; message) | [optional] 
**schedule_name** | **string** |  | [optional] 
**school_year** | **string** |  | 
**start_date** | [**\DateTime**](Date.md) | First day of the timetable | [optional] 
**end_date** | [**\DateTime**](Date.md) | Last day of the timetable | [optional] 
**status** | **string** | The &amp;quot;Status&amp;quot; of the timetable transfer &amp;#039;BT&amp;#039; and &amp;#039;ET&amp;#039; are sent by TTSoftware when sending a timetable. The others are sent by the MIS after receiving a timetable. (See also &amp;quot;Reasons for Status&amp;quot; below). | 
**phone_number_list** | **string[]** | The supplier&amp;#039;s phone number(s). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


