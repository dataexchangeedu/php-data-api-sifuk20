# Demographics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ethnicity_list** | [**\DataExchange\UK\20\Models\Ethnicity[]**](Ethnicity.md) | A list of the person&amp;#039;s ethnicities by proportion. | [optional] 
**gender** | **string** | Person&amp;#039;s gender. | [optional] 
**birth_date** | [**\DateTime**](Date.md) | The person&amp;#039;s date of birth. Required for learners. Optional for others. | [optional] 
**birth_date_verification** | **string** | Means by which the person&amp;#039;s birth date was validated. | [optional] 
**place_of_birth** | **string** | The person&amp;#039;s place of birth--like village, town, city etc. | [optional] 
**county_of_birth** | **string** | The county in which the person was born. | [optional] 
**country_of_birth** | **string** | The individual&amp;#039;s country of birth. | [optional] 
**countries_of_citizenship** | [**\DataExchange\UK\20\Models\CountriesOfCitizenship**](CountriesOfCitizenship.md) |  | [optional] 
**countries_of_residency** | [**\DataExchange\UK\20\Models\CountriesOfResidency**](CountriesOfResidency.md) |  | [optional] 
**country_arrival_date** | [**\DateTime**](Date.md) | Date the person first arrived in the UK. | [optional] 
**english_proficiency** | [**\DataExchange\UK\20\Models\EnglishProficiency**](EnglishProficiency.md) |  | [optional] 
**language_list** | [**\DataExchange\UK\20\Models\Language[]**](Language.md) |  | [optional] 
**marital_status** | **string** | The person&amp;#039;s marital status. | [optional] 
**non_uk_system_immigrant** | **string** | Indicates the learner has recently arrived from a non-English or other common UK language system. (Wales) | [optional] 
**refugee** | **string** | Indicates the person&amp;#039;s refugee/asylum seeker status as defined by the United Nations (Article 1 of the 1951 Refugee Convention). | [optional] 
**religion** | [**\DataExchange\UK\20\Models\Religion**](Religion.md) |  | [optional] 
**traveller** | [**\DataExchange\UK\20\Models\Traveller**](Traveller.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


