# DataExchange\UK\20\InstitutionApi

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
> \DataExchange\UK\20\Models\SifCreateResponse createLAInfos($body)

Create multiple LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$body = new \DataExchange\UK\20\Models\LAInfos(); // \DataExchange\UK\20\Models\LAInfos | LAInfos to be created

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
 **body** | [**\DataExchange\UK\20\Models\LAInfos**](../Model/\DataExchange\UK\20\Models\LAInfos.md)| LAInfos to be created |

### Return type

[**\DataExchange\UK\20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSchoolInfos**
> \DataExchange\UK\20\Models\SifCreateResponse createSchoolInfos($body)

Create multiple SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$body = new \DataExchange\UK\20\Models\SchoolInfos(); // \DataExchange\UK\20\Models\SchoolInfos | SchoolInfos to be created

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
 **body** | [**\DataExchange\UK\20\Models\SchoolInfos**](../Model/\DataExchange\UK\20\Models\SchoolInfos.md)| SchoolInfos to be created |

### Return type

[**\DataExchange\UK\20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLAInfoByRefId**
> \DataExchange\UK\20\Models\SifDeleteResponse deleteLAInfoByRefId($ref_id)

Delete LAInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
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

[**\DataExchange\UK\20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLAInfos**
> \DataExchange\UK\20\Models\SifDeleteResponse deleteLAInfos($body)

Delete multiple LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$body = new \DataExchange\UK\20\Models\SifDeleteRequest(); // \DataExchange\UK\20\Models\SifDeleteRequest | 

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
 **body** | [**\DataExchange\UK\20\Models\SifDeleteRequest**](../Model/\DataExchange\UK\20\Models\SifDeleteRequest.md)|  |

### Return type

[**\DataExchange\UK\20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchoolInfoByRefId**
> \DataExchange\UK\20\Models\SifDeleteResponse deleteSchoolInfoByRefId($ref_id)

Delete SchoolInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
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

[**\DataExchange\UK\20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchoolInfos**
> \DataExchange\UK\20\Models\SifDeleteResponse deleteSchoolInfos($body)

Delete multiple SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$body = new \DataExchange\UK\20\Models\SifDeleteRequest(); // \DataExchange\UK\20\Models\SifDeleteRequest | 

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
 **body** | [**\DataExchange\UK\20\Models\SifDeleteRequest**](../Model/\DataExchange\UK\20\Models\SifDeleteRequest.md)|  |

### Return type

[**\DataExchange\UK\20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLAInfoByRefId**
> \DataExchange\UK\20\Models\LAInfos getLAInfoByRefId($ref_id)

Find LAInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
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

[**\DataExchange\UK\20\Models\LAInfos**](../Model/LAInfos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLAInfos**
> \DataExchange\UK\20\Models\LAInfos getLAInfos($navigation_page, $navigation_page_size)

Return all LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getLAInfos($navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->getLAInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **navigation_page** | **int**| Page to retrieve. | [optional] [default to 1]
 **navigation_page_size** | **int**| Number of resources to retrieve. | [optional] [default to 50]

### Return type

[**\DataExchange\UK\20\Models\LAInfos**](../Model/LAInfos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolInfoByRefId**
> \DataExchange\UK\20\Models\SchoolInfos getSchoolInfoByRefId($ref_id)

Find SchoolInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
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

[**\DataExchange\UK\20\Models\SchoolInfos**](../Model/SchoolInfos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchoolInfos**
> \DataExchange\UK\20\Models\SchoolInfos getSchoolInfos($navigation_page, $navigation_page_size)

Return all SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getSchoolInfos($navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionApi->getSchoolInfos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **navigation_page** | **int**| Page to retrieve. | [optional] [default to 1]
 **navigation_page_size** | **int**| Number of resources to retrieve. | [optional] [default to 50]

### Return type

[**\DataExchange\UK\20\Models\SchoolInfos**](../Model/SchoolInfos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLAInfoByRefId**
> \DataExchange\UK\20\Models\SifUpdateResponse updateLAInfoByRefId($ref_id, $body)

Update LAInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of LAInfo
$body = new \DataExchange\UK\20\Models\LAInfo(); // \DataExchange\UK\20\Models\LAInfo | LAInfo to be updated

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
 **body** | [**\DataExchange\UK\20\Models\LAInfo**](../Model/\DataExchange\UK\20\Models\LAInfo.md)| LAInfo to be updated |

### Return type

[**\DataExchange\UK\20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLAInfos**
> \DataExchange\UK\20\Models\SifUpdateResponse updateLAInfos($body)

Update multiple LAInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$body = new \DataExchange\UK\20\Models\LAInfos(); // \DataExchange\UK\20\Models\LAInfos | LAInfos to be updated

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
 **body** | [**\DataExchange\UK\20\Models\LAInfos**](../Model/\DataExchange\UK\20\Models\LAInfos.md)| LAInfos to be updated |

### Return type

[**\DataExchange\UK\20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchoolInfoByRefId**
> \DataExchange\UK\20\Models\SifUpdateResponse updateSchoolInfoByRefId($ref_id, $body)

Update SchoolInfo by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$ref_id = "ref_id_example"; // string | RefId of SchoolInfo
$body = new \DataExchange\UK\20\Models\SchoolInfo(); // \DataExchange\UK\20\Models\SchoolInfo | SchoolInfo to be updated

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
 **body** | [**\DataExchange\UK\20\Models\SchoolInfo**](../Model/\DataExchange\UK\20\Models\SchoolInfo.md)| SchoolInfo to be updated |

### Return type

[**\DataExchange\UK\20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchoolInfos**
> \DataExchange\UK\20\Models\SifUpdateResponse updateSchoolInfos($body)

Update multiple SchoolInfos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\UK\20\Api\InstitutionApi();
$body = new \DataExchange\UK\20\Models\SchoolInfos(); // \DataExchange\UK\20\Models\SchoolInfos | SchoolInfos to be updated

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
 **body** | [**\DataExchange\UK\20\Models\SchoolInfos**](../Model/\DataExchange\UK\20\Models\SchoolInfos.md)| SchoolInfos to be updated |

### Return type

[**\DataExchange\UK\20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

