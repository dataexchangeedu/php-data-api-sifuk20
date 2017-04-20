# DataExchange\SIFUK20\AttendanceApi

All URIs are relative to *https://uk.staging.dataexchange.education/rest/sif/requests*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLearnerAttendanceSummarys**](AttendanceApi.md#createLearnerAttendanceSummarys) | **POST** /LearnerAttendanceSummarys | Create multiple LearnerAttendanceSummarys
[**createLearnerAttendances**](AttendanceApi.md#createLearnerAttendances) | **POST** /LearnerAttendances | Create multiple LearnerAttendances
[**deleteLearnerAttendanceByRefId**](AttendanceApi.md#deleteLearnerAttendanceByRefId) | **DELETE** /LearnerAttendances/{RefId} | Delete LearnerAttendance by RefId
[**deleteLearnerAttendanceSummaryByRefId**](AttendanceApi.md#deleteLearnerAttendanceSummaryByRefId) | **DELETE** /LearnerAttendanceSummarys/{RefId} | Delete LearnerAttendanceSummary by RefId
[**deleteLearnerAttendanceSummarys**](AttendanceApi.md#deleteLearnerAttendanceSummarys) | **DELETE** /LearnerAttendanceSummarys | Delete multiple LearnerAttendanceSummarys
[**deleteLearnerAttendances**](AttendanceApi.md#deleteLearnerAttendances) | **DELETE** /LearnerAttendances | Delete multiple LearnerAttendances
[**getLearnerAttendanceByRefId**](AttendanceApi.md#getLearnerAttendanceByRefId) | **GET** /LearnerAttendances/{RefId} | Find LearnerAttendance by RefId
[**getLearnerAttendanceSummaryByRefId**](AttendanceApi.md#getLearnerAttendanceSummaryByRefId) | **GET** /LearnerAttendanceSummarys/{RefId} | Find LearnerAttendanceSummary by RefId
[**getLearnerAttendanceSummarys**](AttendanceApi.md#getLearnerAttendanceSummarys) | **GET** /LearnerAttendanceSummarys | Return all LearnerAttendanceSummarys
[**getLearnerAttendances**](AttendanceApi.md#getLearnerAttendances) | **GET** /LearnerAttendances | Return all LearnerAttendances
[**updateLearnerAttendanceByRefId**](AttendanceApi.md#updateLearnerAttendanceByRefId) | **PUT** /LearnerAttendances/{RefId} | Update LearnerAttendance by RefId
[**updateLearnerAttendanceSummaryByRefId**](AttendanceApi.md#updateLearnerAttendanceSummaryByRefId) | **PUT** /LearnerAttendanceSummarys/{RefId} | Update LearnerAttendanceSummary by RefId
[**updateLearnerAttendanceSummarys**](AttendanceApi.md#updateLearnerAttendanceSummarys) | **PUT** /LearnerAttendanceSummarys | Update multiple LearnerAttendanceSummarys
[**updateLearnerAttendances**](AttendanceApi.md#updateLearnerAttendances) | **PUT** /LearnerAttendances | Update multiple LearnerAttendances


# **createLearnerAttendanceSummarys**
> \DataExchange\SIFUK20\Models\SifCreateResponse createLearnerAttendanceSummarys($body)

Create multiple LearnerAttendanceSummarys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$body = new \DataExchange\SIFUK20\Models\LearnerAttendanceSummarys(); // \DataExchange\SIFUK20\Models\LearnerAttendanceSummarys | LearnerAttendanceSummarys to be created

try {
    $result = $api_instance->createLearnerAttendanceSummarys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->createLearnerAttendanceSummarys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerAttendanceSummarys**](../Model/\DataExchange\SIFUK20\Models\LearnerAttendanceSummarys.md)| LearnerAttendanceSummarys to be created |

### Return type

[**\DataExchange\SIFUK20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLearnerAttendances**
> \DataExchange\SIFUK20\Models\SifCreateResponse createLearnerAttendances($body)

Create multiple LearnerAttendances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$body = new \DataExchange\SIFUK20\Models\LearnerAttendances(); // \DataExchange\SIFUK20\Models\LearnerAttendances | LearnerAttendances to be created

try {
    $result = $api_instance->createLearnerAttendances($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->createLearnerAttendances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerAttendances**](../Model/\DataExchange\SIFUK20\Models\LearnerAttendances.md)| LearnerAttendances to be created |

### Return type

[**\DataExchange\SIFUK20\Models\SifCreateResponse**](../Model/SifCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerAttendanceByRefId**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerAttendanceByRefId($ref_id)

Delete LearnerAttendance by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerAttendance

try {
    $result = $api_instance->deleteLearnerAttendanceByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->deleteLearnerAttendanceByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerAttendance |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerAttendanceSummaryByRefId**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerAttendanceSummaryByRefId($ref_id)

Delete LearnerAttendanceSummary by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerAttendanceSummary

try {
    $result = $api_instance->deleteLearnerAttendanceSummaryByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->deleteLearnerAttendanceSummaryByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerAttendanceSummary |

### Return type

[**\DataExchange\SIFUK20\Models\SifDeleteResponse**](../Model/SifDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerAttendanceSummarys**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerAttendanceSummarys($body)

Delete multiple LearnerAttendanceSummarys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$body = new \DataExchange\SIFUK20\Models\SifDeleteRequest(); // \DataExchange\SIFUK20\Models\SifDeleteRequest | 

try {
    $result = $api_instance->deleteLearnerAttendanceSummarys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->deleteLearnerAttendanceSummarys: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLearnerAttendances**
> \DataExchange\SIFUK20\Models\SifDeleteResponse deleteLearnerAttendances($body)

Delete multiple LearnerAttendances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$body = new \DataExchange\SIFUK20\Models\SifDeleteRequest(); // \DataExchange\SIFUK20\Models\SifDeleteRequest | 

try {
    $result = $api_instance->deleteLearnerAttendances($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->deleteLearnerAttendances: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerAttendanceByRefId**
> \DataExchange\SIFUK20\Models\LearnerAttendances getLearnerAttendanceByRefId($ref_id)

Find LearnerAttendance by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerAttendance

try {
    $result = $api_instance->getLearnerAttendanceByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->getLearnerAttendanceByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerAttendance |

### Return type

[**\DataExchange\SIFUK20\Models\LearnerAttendances**](../Model/LearnerAttendances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerAttendanceSummaryByRefId**
> \DataExchange\SIFUK20\Models\LearnerAttendanceSummarys getLearnerAttendanceSummaryByRefId($ref_id)

Find LearnerAttendanceSummary by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerAttendanceSummary

try {
    $result = $api_instance->getLearnerAttendanceSummaryByRefId($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->getLearnerAttendanceSummaryByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerAttendanceSummary |

### Return type

[**\DataExchange\SIFUK20\Models\LearnerAttendanceSummarys**](../Model/LearnerAttendanceSummarys.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerAttendanceSummarys**
> \DataExchange\SIFUK20\Models\LearnerAttendanceSummarys getLearnerAttendanceSummarys($navigation_page, $navigation_page_size)

Return all LearnerAttendanceSummarys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getLearnerAttendanceSummarys($navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->getLearnerAttendanceSummarys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **navigation_page** | **int**| Page to retrieve. | [optional] [default to 1]
 **navigation_page_size** | **int**| Number of resources to retrieve. | [optional] [default to 50]

### Return type

[**\DataExchange\SIFUK20\Models\LearnerAttendanceSummarys**](../Model/LearnerAttendanceSummarys.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLearnerAttendances**
> \DataExchange\SIFUK20\Models\LearnerAttendances getLearnerAttendances($navigation_page, $navigation_page_size)

Return all LearnerAttendances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$navigation_page = 1; // int | Page to retrieve.
$navigation_page_size = 50; // int | Number of resources to retrieve.

try {
    $result = $api_instance->getLearnerAttendances($navigation_page, $navigation_page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->getLearnerAttendances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **navigation_page** | **int**| Page to retrieve. | [optional] [default to 1]
 **navigation_page_size** | **int**| Number of resources to retrieve. | [optional] [default to 50]

### Return type

[**\DataExchange\SIFUK20\Models\LearnerAttendances**](../Model/LearnerAttendances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerAttendanceByRefId**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerAttendanceByRefId($ref_id, $body)

Update LearnerAttendance by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerAttendance
$body = new \DataExchange\SIFUK20\Models\LearnerAttendance(); // \DataExchange\SIFUK20\Models\LearnerAttendance | LearnerAttendance to be updated

try {
    $result = $api_instance->updateLearnerAttendanceByRefId($ref_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->updateLearnerAttendanceByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerAttendance |
 **body** | [**\DataExchange\SIFUK20\Models\LearnerAttendance**](../Model/\DataExchange\SIFUK20\Models\LearnerAttendance.md)| LearnerAttendance to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerAttendanceSummaryByRefId**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerAttendanceSummaryByRefId($ref_id, $body)

Update LearnerAttendanceSummary by RefId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$ref_id = "ref_id_example"; // string | RefId of LearnerAttendanceSummary
$body = new \DataExchange\SIFUK20\Models\LearnerAttendanceSummary(); // \DataExchange\SIFUK20\Models\LearnerAttendanceSummary | LearnerAttendanceSummary to be updated

try {
    $result = $api_instance->updateLearnerAttendanceSummaryByRefId($ref_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->updateLearnerAttendanceSummaryByRefId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**| RefId of LearnerAttendanceSummary |
 **body** | [**\DataExchange\SIFUK20\Models\LearnerAttendanceSummary**](../Model/\DataExchange\SIFUK20\Models\LearnerAttendanceSummary.md)| LearnerAttendanceSummary to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerAttendanceSummarys**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerAttendanceSummarys($body)

Update multiple LearnerAttendanceSummarys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$body = new \DataExchange\SIFUK20\Models\LearnerAttendanceSummarys(); // \DataExchange\SIFUK20\Models\LearnerAttendanceSummarys | LearnerAttendanceSummarys to be updated

try {
    $result = $api_instance->updateLearnerAttendanceSummarys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->updateLearnerAttendanceSummarys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerAttendanceSummarys**](../Model/\DataExchange\SIFUK20\Models\LearnerAttendanceSummarys.md)| LearnerAttendanceSummarys to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLearnerAttendances**
> \DataExchange\SIFUK20\Models\SifUpdateResponse updateLearnerAttendances($body)

Update multiple LearnerAttendances

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new DataExchange\SIFUK20\Api\AttendanceApi();
$body = new \DataExchange\SIFUK20\Models\LearnerAttendances(); // \DataExchange\SIFUK20\Models\LearnerAttendances | LearnerAttendances to be updated

try {
    $result = $api_instance->updateLearnerAttendances($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttendanceApi->updateLearnerAttendances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DataExchange\SIFUK20\Models\LearnerAttendances**](../Model/\DataExchange\SIFUK20\Models\LearnerAttendances.md)| LearnerAttendances to be updated |

### Return type

[**\DataExchange\SIFUK20\Models\SifUpdateResponse**](../Model/SifUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

