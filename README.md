# http-codes
[![Latest Stable Version](https://poser.pugx.org/kayex/http-codes/v/stable)](https://packagist.org/packages/kayex/http-codes) [![Total Downloads](https://poser.pugx.org/kayex/http-codes/downloads)](https://packagist.org/packages/kayex/http-codes) [![License](https://poser.pugx.org/kayex/http-codes/license)](https://packagist.org/packages/kayex/http-codes)

PHP library for easily accessing HTTP Status codes.

# Table of Contents
* [Installation](#installation)
* [Usage](#usage)
* [Optional: Laravel alias](#optional-laravel-alias)
* [Full reference](#full-reference)
* [License](#license)

# Installation
Composer
```
composer require kayex/http-codes
```

# Usage
The codes are accessible as `public static` properties on the HttpCodes class
```php
use Kayex\HttpCodes;

echo HttpCodes::HTTP_OK; // 200
```

# Optional: Laravel alias
Laravel users may want to set up an alias for quick access by adding the following to the alias array in `app/config/app.php`:
```php
'HttpCodes'         => 'Kayex\HttpCodes',
```

The codes can then be used like this:
```php
use HttpCodes;

echo HttpCodes::HTTP_OK; // 200
```

# Full reference
These are all the available status codes and the names they are accessible under.

## 1xx - Informational
| Property                   | Code |
|:---------------------------|----: |
| `HTTP_CONTINUE`            | 100  |
| `HTTP_SWITCHING_PROTOCOLS` | 101  |

## 2xx - Successful
| Property                           | Code |
|:-----------------------------------|-----:|
|`HTTP_OK`                           | 200  |
|`HTTP_CREATED`                      | 201  |
|`HTTP_ACCEPTED`                     | 202  |
|`HTTP_NONAUTHORITATIVE_INFORMATION` | 203  |
|`HTTP_NO_CONTENT`                   | 204  |
|`HTTP_RESET_CONTENT`                | 205  |
|`HTTP_PARTIAL_CONTENT`              | 206  |

## 3xx - Redirect
| Property                           | Code |
|:-----------------------------------|-----:|
|`HTTP_MULTIPLE_CHOICES` | 300|
|`HTTP_MOVED_PERMANENTLY` | 301|
|`HTTP_FOUND` | 302|
|`HTTP_SEE_OTHER` | 303|
|`HTTP_NOT_MODIFIED` | 304|
|`HTTP_USE_PROXY` | 305|
|`HTTP_UNUSED`| 306|
|`HTTP_TEMPORARY_REDIRECT` | 307|


## 4xx - Client Error
| Property                           | Code |
|:-----------------------------------|-----:|
|`HTTP_BAD_REQUEST` | 400|
|`HTTP_UNAUTHORIZED`  | 401|
|`HTTP_PAYMENT_REQUIRED` | 402|
|`HTTP_FORBIDDEN` | 403|
|`HTTP_NOT_FOUND` | 404|
|`HTTP_METHOD_NOT_ALLOWED` | 405|
|`HTTP_NOT_ACCEPTABLE` | 406|
|`HTTP_PROXY_AUTHENTICATION_REQUIRED` | 407|
|`HTTP_REQUEST_TIMEOUT` | 408|
|`HTTP_CONFLICT` | 409|
|`HTTP_GONE` | 410|
|`HTTP_LENGTH_REQUIRED` | 411|
|`HTTP_PRECONDITION_FAILED` | 412|
|`HTTP_REQUEST_ENTITY_TOO_LARGE` | 413|
|`HTTP_REQUEST_URI_TOO_LONG` | 414|
|`HTTP_UNSUPPORTED_MEDIA_TYPE` | 415|
|`HTTP_REQUESTED_RANGE_NOT_SATISFIABLE` | 416|
|`HTTP_EXPECTATION_FAILED` | 417|


## 5xx - Server Error
| Property                           | Code |
|:-----------------------------------|-----:|
|`HTTP_INTERNAL_SERVER_ERROR` | 500|
|`HTTP_NOT_IMPLEMENTED` | 501|
|`HTTP_BAD_GATEWAY` | 502|
|`HTTP_SERVICE_UNAVAILABLE` | 503|
|`HTTP_GATEWAY_TIMEOUT` | 504|
|`HTTP_VERSION_NOT_SUPPORTED` | 505|

# License
MIT
