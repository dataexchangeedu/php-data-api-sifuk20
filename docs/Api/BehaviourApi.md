# DataExchange\SIFUK20\BehaviourApi

All URIs are relative to *https://uk.staging.dataexchange.education/rest/sif/requests*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLearnerBehaviourIncidents**](BehaviourApi.md#createLearnerBehaviourIncidents) | **POST** /LearnerBehaviourIncidents | Create multiple LearnerBehaviourIncidents
[**createLearnerExclusions**](BehaviourApi.md#createLearnerExclusions) | **POST** /LearnerExclusions | Create multiple LearnerExclusions
[**deleteLearnerBehaviourIncidentByRefId**](BehaviourApi.md#deleteLearnerBehaviourIncidentByRefId) | **DELETE** /LearnerBehaviourIncidents/{RefId} | Delete LearnerBehaviourIncident by RefId
[**deleteLearnerBehaviourIncidents**](BehaviourApi.md#deleteLearnerBehaviourIncidents) | **DELETE** /LearnerBehaviourIncidents | Delete multiple LearnerBehaviourIncidents
[**deleteLearnerExclusionByRefId**](BehaviourApi.md#deleteLearnerExclusionByRefId) | **DELETE** /LearnerExclusions/{RefId} | Delete LearnerExclusion by RefId
[**deleteLearnerExclusions**](BehaviourApi.md#deleteLearnerExclusions) | **DELETE** /LearnerExclusions | Delete multiple LearnerExclusions
[**getLearnerBehaviourIncidentByRefId**](BehaviourApi.md#getLearnerBehaviourIncidentByRefId) | **GET** /LearnerBehaviourIncidents/{RefId} | Find LearnerBehaviourIncident by RefId
[**getLearnerBehaviourIncidents**](BehaviourApi.md#getLearnerBehaviourIncidents) | **GET** /LearnerBehaviourIncidents | Return all LearnerBehaviourIncidents
[**getLearnerExclusionByRefId**](BehaviourApi.md#getLearnerExclusionByRefId) | **GET** /LearnerExclusions/{RefId} | Find LearnerExclusion by RefId
[**getLearnerExclusions**](BehaviourApi.md#getLearnerExclusions) | **GET** /LearnerExclusions | Return all LearnerExclusions
[**updateLearnerBehaviourIncidentByRefId**](BehaviourApi.md#updateLearnerBehaviourIncidentByRefId) | **PUT** /LearnerBehaviourIncidents/{RefId} | Update LearnerBehaviourIncident by RefId
[**updateLearnerBehaviourIncidents**](BehaviourApi.md#updateLearnerBehaviourIncidents) | **PUT** /LearnerBehaviourIncidents | Update multiple LearnerBehaviourIncidents
[**updateLearnerExclusionByRefId**](BehaviourApi.md#updateLearnerExclusionByRefId) | **PUT** /LearnerExclusions/{RefId} | Update LearnerExclusion by RefId
[**updateLearnerExclusions**](BehaviourApi.md#updateLearnerExclusions) | **PUT** /LearnerExclusions | Update multiple LearnerExclusions


# **createLearnerBehaviourIncidents**
> \DataExchange\SIFUK20\Models\SifCreateResponse createLearnerBehaviourIncidents($body)

Create multiple LearnerBehaviourIncidents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$body = new \DataExchange\SIFUK20\Models\LearnerBehaviourIncidents(); // \DataExchange\SIFUK20\Models\LearnerBehaviourIncidents | LearnerBehaviourIncidents to be created

try {
    $result = $api_instance->createLearnerBehaviourIncidents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->createLearnerBehaviourIncidents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerBehaviourIncidents**](../Model/\DataExchange\SIFUK20\Models\LearnerBehaviourIncidents.md)| LearnerBehaviourIncidents to be created |

### Return type

[**\DataExchange\SIFUK20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLearnerExclusions**
> \DataExchange\SIFUK20\Models\SifCreateResponse createLearnerExclusions($body)

Create multiple LearnerExclusions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$body = new \DataExchange\SIFUK20\Models\LearnerExclusions(); // \DataExchange\SIFUK20\Models\LearnerExclusions | LearnerExclusions to be created

try {
    $result = $api_instance->createLearnerExclusions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->createLearnerExclusions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerExclusions**](../Model/\DataExchange\SIFUK20\Models\LearnerExclusions.md)| LearnerExclusions to be created |

### Return type

[**\DataExchange\SIFUK20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerBehaviourIncidentByRefId**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerBehaviourIncidentByRefId($ref_id)

Delete LearnerBehaviourIncident by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerBehaviourIncident

try {
    $result = $api_instance->deleteLearnerBehaviourIncidentByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->deleteLearnerBehaviourIncidentByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerBehaviourIncident |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerBehaviourIncidents**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerBehaviourIncidents($body)

Delete multiple LearnerBehaviourIncidents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$body = new \DataExchange\SIFUK20\Models\SifDeleteRequest(); // \DataExchange\SIFUK20\Models\SifDeleteRequest | 

try {
    $result = $api_instance->deleteLearnerBehaviourIncidents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->deleteLearnerBehaviourIncidents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\SifDeleteRequest**](../Model/\DataExchange\SIFUK20\Models\SifDeleteRequest.md)|  |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerExclusionByRefId**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerExclusionByRefId($ref_id)

Delete LearnerExclusion by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerExclusion

try {
    $result = $api_instance->deleteLearnerExclusionByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->deleteLearnerExclusionByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerExclusion |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerExclusions**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerExclusions($body)

Delete multiple LearnerExclusions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$body = new \DataExchange\SIFUK20\Models\SifDeleteRequest(); // \DataExchange\SIFUK20\Models\SifDeleteRequest | 

try {
    $result = $api_instance->deleteLearnerExclusions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->deleteLearnerExclusions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\SifDeleteRequest**](../Model/\DataExchange\SIFUK20\Models\SifDeleteRequest.md)|  |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerBehaviourIncidentByRefId**
> \DataExchange\SIFUK20\Models\LearnerBehaviourIncidents getLearnerBehaviourIncidentByRefId($ref_id)

Find LearnerBehaviourIncident by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerBehaviourIncident

try {
    $result = $api_instance->getLearnerBehaviourIncidentByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->getLearnerBehaviourIncidentByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerBehaviourIncident |

### Return type

[**\DataExchange\SIFUK20\Models\LearnerBehaviourIncidents**](../Model/LearnerBehaviourIncidents.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerBehaviourIncidents**
> \DataExchange\SIFUK20\Models\LearnerBehaviourIncidents getLearnerBehaviourIncidents($zone_id, $navigation_page, $navigation_page_size)

Return all LearnerBehaviourIncidents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$zone_id = "zone_id_example"; // string | The id of the zone to request data from.
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getLearnerBehaviourIncidents($zone_id, $navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->getLearnerBehaviourIncidents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **string**| The id of the zone to request data from. |
 **navigation_page** | **int**| Page to retrieve. | [optional] [default to 1]
 **navigation_page_size** | **int**| Number of resources to retrieve. | [optional] [default to 50]

### Return type

[**\DataExchange\SIFUK20\Models\LearnerBehaviourIncidents**](../Model/LearnerBehaviourIncidents.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerExclusionByRefId**
> \DataExchange\SIFUK20\Models\LearnerExclusions getLearnerExclusionByRefId($ref_id)

Find LearnerExclusion by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerExclusion

try {
    $result = $api_instance->getLearnerExclusionByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->getLearnerExclusionByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerExclusion |

### Return type

[**\DataExchange\SIFUK20\Models\LearnerExclusions**](../Model/LearnerExclusions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerExclusions**
> \DataExchange\SIFUK20\Models\LearnerExclusions getLearnerExclusions($zone_id, $navigation_page, $navigation_page_size)

Return all LearnerExclusions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$zone_id = "zone_id_example"; // string | The id of the zone to request data from.
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getLearnerExclusions($zone_id, $navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->getLearnerExclusions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_id** | **string**| The id of the zone to request data from. |
 **navigation_page** | **int**| Page to retrieve. | [optional] [default to 1]
 **navigation_page_size** | **int**| Number of resources to retrieve. | [optional] [default to 50]

### Return type

[**\DataExchange\SIFUK20\Models\LearnerExclusions**](../Model/LearnerExclusions.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerBehaviourIncidentByRefId**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerBehaviourIncidentByRefId($ref_id, $body)

Update LearnerBehaviourIncident by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerBehaviourIncident
$body = new \DataExchange\SIFUK20\Models\LearnerBehaviourIncident(); // \DataExchange\SIFUK20\Models\LearnerBehaviourIncident | LearnerBehaviourIncident to be updated

try {
    $result = $api_instance->updateLearnerBehaviourIncidentByRefId($ref_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->updateLearnerBehaviourIncidentByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerBehaviourIncident |
 **body** | [**\DataExchange\SIFUK20\Models\LearnerBehaviourIncident**](../Model/\DataExchange\SIFUK20\Models\LearnerBehaviourIncident.md)| LearnerBehaviourIncident to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerBehaviourIncidents**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerBehaviourIncidents($body)

Update multiple LearnerBehaviourIncidents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$body = new \DataExchange\SIFUK20\Models\LearnerBehaviourIncidents(); // \DataExchange\SIFUK20\Models\LearnerBehaviourIncidents | LearnerBehaviourIncidents to be updated

try {
    $result = $api_instance->updateLearnerBehaviourIncidents($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->updateLearnerBehaviourIncidents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerBehaviourIncidents**](../Model/\DataExchange\SIFUK20\Models\LearnerBehaviourIncidents.md)| LearnerBehaviourIncidents to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerExclusionByRefId**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerExclusionByRefId($ref_id, $body)

Update LearnerExclusion by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerExclusion
$body = new \DataExchange\SIFUK20\Models\LearnerExclusion(); // \DataExchange\SIFUK20\Models\LearnerExclusion | LearnerExclusion to be updated

try {
    $result = $api_instance->updateLearnerExclusionByRefId($ref_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->updateLearnerExclusionByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerExclusion |
 **body** | [**\DataExchange\SIFUK20\Models\LearnerExclusion**](../Model/\DataExchange\SIFUK20\Models\LearnerExclusion.md)| LearnerExclusion to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerExclusions**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerExclusions($body)

Update multiple LearnerExclusions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\BehaviourApi();
$body = new \DataExchange\SIFUK20\Models\LearnerExclusions(); // \DataExchange\SIFUK20\Models\LearnerExclusions | LearnerExclusions to be updated

try {
    $result = $api_instance->updateLearnerExclusions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviourApi->updateLearnerExclusions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerExclusions**](../Model/\DataExchange\SIFUK20\Models\LearnerExclusions.md)| LearnerExclusions to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

