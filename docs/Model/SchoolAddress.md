# SchoolAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Code that defines the address type. | 
**local_id** | **string** | The locally assigned identifier for this address in the publishing system. | [optional] 
**start_date** | [**\DateTime**](Date.md) | Date person began using this address. | [optional] 
**end_date** | [**\DateTime**](Date.md) | Date person stopped using this address. | [optional] 
**paon** | [**\DataExchange\UK\20\Models\PAON**](PAON.md) |  | [optional] 
**saon** | [**\DataExchange\UK\20\Models\SAON**](SAON.md) |  | [optional] 
**street** | **string** | The name of the street. | [optional] 
**locality** | **string** | The locality name refers to a neighbourhood, suburb, district, village, estate, settlement, or parish that may form part of a town, or stand in its own right within the context of an administrative area. Where an industrial estate contains streets it is defined as a locality in its own right. At least one of Locality, Town, or AdministrativeArea must be specified. | [optional] 
**town** | **string** | The city name refers to a city or town that is not an adminstrative area, a suburb of an administrative area that does not form part of another town or a London district. At least one of Locality, Town, or AdministrativeArea must be specified. | [optional] 
**administrative_area** | **string** | The administrative area is a geographic area that may be the highest level local administrative area, and may be a county or a unitary authority, an island or island group, or London. At least one of Locality, Town, or AdministrativeArea must be specified | [optional] 
**county** | **string** | Where applicable, the name of the county. | [optional] 
**post_town** | **string** | Post Office usually assigns these based on Sorting Office. | [optional] 
**post_code** | **string** | The code allocated by the Post Office (within GBR) to identify a group of postal delivery points. Valid Postcode formats are: | [optional] 
**country** | **string** | Country where physical address is located, if known. Usually this is going to be &amp;#039;GBR&amp;#039; but could be outside the UK. | [optional] 
**unique_property_reference_number** | **int** |  | [optional] 
**unique_street_reference_number** | **int** |  | [optional] 
**location_context** | [**\DataExchange\UK\20\Models\LocationContext**](LocationContext.md) |  | [optional] 
**grid_location** | [**\DataExchange\UK\20\Models\GridLocation**](GridLocation.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


