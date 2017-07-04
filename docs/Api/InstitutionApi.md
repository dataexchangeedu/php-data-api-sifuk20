# DataExchange\SIFUK20\InstitutionApi

All URIs are relative to *https://uk.staging.dataexchange.education/rest/sif/requests*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLAInfos**](InstitutionApi.md#createLAInfos) | **POST** /LAInfos | Create multiple LAInfos
[**createSchoolInfos**](InstitutionApi.md#createSchoolInfos) | **POST** /SchoolInfos | Create multiple SchoolInfos
[**deleteLAInfoByRefId**](InstitutionApi.md#deleteLAInfoByRefId) | **DELETE** /LAInfos/{RefId} | Delete LAInfo by RefId
[**deleteLAInfos**](InstitutionApi.md#deleteLAInfos) | **DELETE** /LAInfos | Delete multiple LAInfos
[**deleteSchoolInfoByRefId**](InstitutionApi.md#deleteSchoolInfoByRefId) | **DELETE** /SchoolInfos/{RefId} | Delete SchoolInfo by RefId
[**deleteSchoolInfos**](InstitutionApi.md#deleteSchoolInfos) | **DELETE** /SchoolInfos | Delete multiple SchoolInfos
[**getLAInfoByRefId**](InstitutionApi.md#getLAInfoByRefId) | **GET** /LAInfos/{RefId} | Find LAInfo by RefId
[**getLAInfos**](InstitutionApi.md#getLAInfos) | **GET** /LAInfos | Return all LAInfos
[**getSchoolInfoByRefId**](InstitutionApi.md#getSchoolInfoByRefId) | **GET** /SchoolInfos/{RefId} | Find SchoolInfo by RefId
[**getSchoolInfos**](InstitutionApi.md#getSchoolInfos) | **GET** /SchoolInfos | Return all SchoolInfos
[**updateLAInfoByRefId**](InstitutionApi.md#updateLAInfoByRefId) | **PUT** /LAInfos/{RefId} | Update LAInfo by RefId
[**updateLAInfos**](InstitutionApi.md#updateLAInfos) | **PUT** /LAInfos | Update multiple LAInfos
[**updateSchoolInfoByRefId**](InstitutionApi.md#updateSchoolInfoByRefId) | **PUT** /SchoolInfos/{RefId} | Update SchoolInfo by RefId
[**updateSchoolInfos**](InstitutionApi.md#updateSchoolInfos) | **PUT** /SchoolInfos | Update multiple SchoolInfos


# **createLAInfos**
> \DataExchange\SIFUK20\Models\SifCreateResponse createLAInfos($body)

Create multiple LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$body = new \DataExchange\SIFUK20\Models\LAInfos(); // \DataExchange\SIFUK20\Models\LAInfos | LAInfos to be created

try {
    $result = $api_instance->createLAInfos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->createLAInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LAInfos**](../Model/\DataExchange\SIFUK20\Models\LAInfos.md)| LAInfos to be created |

### Return type

[**\DataExchange\SIFUK20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSchoolInfos**
> \DataExchange\SIFUK20\Models\SifCreateResponse createSchoolInfos($body)

Create multiple SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$body = new \DataExchange\SIFUK20\Models\SchoolInfos(); // \DataExchange\SIFUK20\Models\SchoolInfos | SchoolInfos to be created

try {
    $result = $api_instance->createSchoolInfos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->createSchoolInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\SchoolInfos**](../Model/\DataExchange\SIFUK20\Models\SchoolInfos.md)| SchoolInfos to be created |

### Return type

[**\DataExchange\SIFUK20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLAInfoByRefId**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLAInfoByRefId($ref_id)

Delete LAInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of LAInfo

try {
    $result = $api_instance->deleteLAInfoByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->deleteLAInfoByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LAInfo |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLAInfos**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLAInfos($body)

Delete multiple LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$body = new \DataExchange\SIFUK20\Models\SifDeleteRequest(); // \DataExchange\SIFUK20\Models\SifDeleteRequest | 

try {
    $result = $api_instance->deleteLAInfos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->deleteLAInfos: ', $e->getMessage(), PHP_EOL;
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

# **deleteSchoolInfoByRefId**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteSchoolInfoByRefId($ref_id)

Delete SchoolInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of SchoolInfo

try {
    $result = $api_instance->deleteSchoolInfoByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->deleteSchoolInfoByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of SchoolInfo |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchoolInfos**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteSchoolInfos($body)

Delete multiple SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$body = new \DataExchange\SIFUK20\Models\SifDeleteRequest(); // \DataExchange\SIFUK20\Models\SifDeleteRequest | 

try {
    $result = $api_instance->deleteSchoolInfos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->deleteSchoolInfos: ', $e->getMessage(), PHP_EOL;
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

# **getLAInfoByRefId**
> \DataExchange\SIFUK20\Models\LAInfos getLAInfoByRefId($ref_id)

Find LAInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of LAInfo

try {
    $result = $api_instance->getLAInfoByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->getLAInfoByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LAInfo |

### Return type

[**\DataExchange\SIFUK20\Models\LAInfos**](../Model/LAInfos.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLAInfos**
> \DataExchange\SIFUK20\Models\LAInfos getLAInfos($zone_id, $navigation_page, $navigation_page_size)

Return all LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$zone_id = "zone_id_example"; // string | The id of the zone to request data from.
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getLAInfos($zone_id, $navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->getLAInfos: ', $e->getMessage(), PHP_EOL;
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

[**\DataExchange\SIFUK20\Models\LAInfos**](../Model/LAInfos.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolInfoByRefId**
> \DataExchange\SIFUK20\Models\SchoolInfos getSchoolInfoByRefId($ref_id)

Find SchoolInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of SchoolInfo

try {
    $result = $api_instance->getSchoolInfoByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->getSchoolInfoByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of SchoolInfo |

### Return type

[**\DataExchange\SIFUK20\Models\SchoolInfos**](../Model/SchoolInfos.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolInfos**
> \DataExchange\SIFUK20\Models\SchoolInfos getSchoolInfos($zone_id, $navigation_page, $navigation_page_size)

Return all SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$zone_id = "zone_id_example"; // string | The id of the zone to request data from.
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getSchoolInfos($zone_id, $navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->getSchoolInfos: ', $e->getMessage(), PHP_EOL;
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

[**\DataExchange\SIFUK20\Models\SchoolInfos**](../Model/SchoolInfos.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLAInfoByRefId**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLAInfoByRefId($ref_id, $body)

Update LAInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of LAInfo
$body = new \DataExchange\SIFUK20\Models\LAInfo(); // \DataExchange\SIFUK20\Models\LAInfo | LAInfo to be updated

try {
    $result = $api_instance->updateLAInfoByRefId($ref_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->updateLAInfoByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LAInfo |
 **body** | [**\DataExchange\SIFUK20\Models\LAInfo**](../Model/\DataExchange\SIFUK20\Models\LAInfo.md)| LAInfo to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLAInfos**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLAInfos($body)

Update multiple LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$body = new \DataExchange\SIFUK20\Models\LAInfos(); // \DataExchange\SIFUK20\Models\LAInfos | LAInfos to be updated

try {
    $result = $api_instance->updateLAInfos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->updateLAInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LAInfos**](../Model/\DataExchange\SIFUK20\Models\LAInfos.md)| LAInfos to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchoolInfoByRefId**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateSchoolInfoByRefId($ref_id, $body)

Update SchoolInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of SchoolInfo
$body = new \DataExchange\SIFUK20\Models\SchoolInfo(); // \DataExchange\SIFUK20\Models\SchoolInfo | SchoolInfo to be updated

try {
    $result = $api_instance->updateSchoolInfoByRefId($ref_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->updateSchoolInfoByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of SchoolInfo |
 **body** | [**\DataExchange\SIFUK20\Models\SchoolInfo**](../Model/\DataExchange\SIFUK20\Models\SchoolInfo.md)| SchoolInfo to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchoolInfos**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateSchoolInfos($body)

Update multiple SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DataExchange\SIFUK20\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new DataExchange\SIFUK20\Api\InstitutionApi();
$body = new \DataExchange\SIFUK20\Models\SchoolInfos(); // \DataExchange\SIFUK20\Models\SchoolInfos | SchoolInfos to be updated

try {
    $result = $api_instance->updateSchoolInfos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->updateSchoolInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\SchoolInfos**](../Model/\DataExchange\SIFUK20\Models\SchoolInfos.md)| SchoolInfos to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

