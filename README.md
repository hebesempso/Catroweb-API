# OpenAPIServer
API for the Catrobat Share Platform

This [Symfony](https://symfony.com/) bundle is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v1.0.63
- Build package: org.openapitools.codegen.languages.PhpSymfonyServerCodegen
For more information, please visit [https://share.catrob.at](https://share.catrob.at)

## Requirements

PHP 7.1.3 and later

## Installation & Usage

To install the dependencies via [Composer](http://getcomposer.org/), add the following repository to `composer.json` of your Symfony project:

```json
{
    "repositories": [{
        "type": "path",
        "url": "//Path to your generated openapi bundle"
    }],
}
```

Then run:

```
composer require GIT_USER_ID/GIT_REPO_ID:dev-master
```

to add the generated openapi bundle as a dependency.

## Tests

To run the unit tests for the generated bundle, first navigate to the directory containing the code, then run the following commands:

```
composer install
./vendor/bin/phpunit
```


## Getting Started

Step 1: Please follow the [installation procedure](#installation--usage) first.

Step 2: Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new OpenAPI\Server\OpenAPIServerBundle(),
        // ...
    );
}
```

Step 3: Register the routes:

```yaml
# app/config/routing.yml
open_api_server:
    resource: "@OpenAPIServerBundle/Resources/config/routing.yml"
```

Step 4: Implement the API calls:

```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface // An interface is autogenerated
{

    /**
     * Implementation of AuthenticationApiInterface#authenticationDelete
     */
    public function authenticationDelete(string $x_refresh)
    {
        // Implement the operation ...
    }

    // Other operation methods ...
}
```

Step 5: Tag your API implementation:

```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.authentication:
        class: Acme\MyBundle\Api\AuthenticationApi
        tags:
            - { name: "open_api_server.api", api: "authentication" }
    # ...
```

Now you can start using the bundle!


## Documentation for API Endpoints

All URIs are relative to *https://share.catrob.at/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApiInterface* | [**authenticationDelete**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationdelete) | **DELETE** /authentication | Expires refresh token
*AuthenticationApiInterface* | [**authenticationGet**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationget) | **GET** /authentication | Check token
*AuthenticationApiInterface* | [**authenticationOauthPost**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationoauthpost) | **POST** /authentication/oauth | OAuth Login
*AuthenticationApiInterface* | [**authenticationPost**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationpost) | **POST** /authentication | Login
*AuthenticationApiInterface* | [**authenticationRefreshPost**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationrefreshpost) | **POST** /authentication/refresh | Refresh token -- StatusCode: 501 - Not yet implemented
*AuthenticationApiInterface* | [**authenticationUpgradePost**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationupgradepost) | **POST** /authentication/upgrade | Upgrade a deprecated token to JWT
*MediaLibraryApiInterface* | [**mediaFileIdGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediafileidget) | **GET** /media/file/{id} | Get the information of a specific media file
*MediaLibraryApiInterface* | [**mediaFilesGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediafilesget) | **GET** /media/files | Get *all* content of the media library.
*MediaLibraryApiInterface* | [**mediaFilesSearchGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediafilessearchget) | **GET** /media/files/search | Search for mediafiles associated with keywords
*MediaLibraryApiInterface* | [**mediaPackageNameGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediapackagenameget) | **GET** /media/package/{name} | Get media-library asstes of a named package
*NotificationsApiInterface* | [**notificationIdReadPut**](Resources/docs/Api/NotificationsApiInterface.md#notificationidreadput) | **PUT** /notification/{id}/read | Mark specified notification as read - StatusCode: 501 - Not yet implemented
*NotificationsApiInterface* | [**notificationsCountGet**](Resources/docs/Api/NotificationsApiInterface.md#notificationscountget) | **GET** /notifications/count | Count the number of unseen notifications -- StatusCode: 501 - Not yet implemented
*NotificationsApiInterface* | [**notificationsGet**](Resources/docs/Api/NotificationsApiInterface.md#notificationsget) | **GET** /notifications | Get user notifications -- StatusCode: 501 - Not yet implemented
*NotificationsApiInterface* | [**notificationsReadPut**](Resources/docs/Api/NotificationsApiInterface.md#notificationsreadput) | **PUT** /notifications/read | Mark all notifications as read -- StatusCode: 501 - Not yet implemented
*ProjectsApiInterface* | [**projectIdDelete**](Resources/docs/Api/ProjectsApiInterface.md#projectiddelete) | **DELETE** /project/{id} | Delete a project -- StatusCode: 501 - Not yet implemented
*ProjectsApiInterface* | [**projectIdGet**](Resources/docs/Api/ProjectsApiInterface.md#projectidget) | **GET** /project/{id} | Get the information of a project
*ProjectsApiInterface* | [**projectIdRecommendationsGet**](Resources/docs/Api/ProjectsApiInterface.md#projectidrecommendationsget) | **GET** /project/{id}/recommendations | Get recommended projects related to the specific project
*ProjectsApiInterface* | [**projectIdReportPost**](Resources/docs/Api/ProjectsApiInterface.md#projectidreportpost) | **POST** /project/{id}/report | Report a project -- StatusCode: 501 - Not yet implemented
*ProjectsApiInterface* | [**projectsCategoriesGet**](Resources/docs/Api/ProjectsApiInterface.md#projectscategoriesget) | **GET** /projects/categories | Get default number of projects per category (Most downloaded etc.)
*ProjectsApiInterface* | [**projectsFeaturedGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsfeaturedget) | **GET** /projects/featured | Get the currently featured projects
*ProjectsApiInterface* | [**projectsGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsget) | **GET** /projects | Get projects
*ProjectsApiInterface* | [**projectsPost**](Resources/docs/Api/ProjectsApiInterface.md#projectspost) | **POST** /projects | Upload a catrobat project
*ProjectsApiInterface* | [**projectsSearchGet**](Resources/docs/Api/ProjectsApiInterface.md#projectssearchget) | **GET** /projects/search | Search for projects associated with a keywords
*ProjectsApiInterface* | [**projectsUserGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsuserget) | **GET** /projects/user/ | Get the projects of the logged in user
*ProjectsApiInterface* | [**projectsUserIdGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsuseridget) | **GET** /projects/user/{id} | Get the public projects of a given user
*SearchApiInterface* | [**searchGet**](Resources/docs/Api/SearchApiInterface.md#searchget) | **GET** /search | Search for projects, users,..  -- StatusCode: 501 - Not yet implemented
*UserApiInterface* | [**userDelete**](Resources/docs/Api/UserApiInterface.md#userdelete) | **DELETE** /user | Delete user account
*UserApiInterface* | [**userGet**](Resources/docs/Api/UserApiInterface.md#userget) | **GET** /user | Get your private user data
*UserApiInterface* | [**userIdGet**](Resources/docs/Api/UserApiInterface.md#useridget) | **GET** /user/{id} | Get public user data
*UserApiInterface* | [**userPost**](Resources/docs/Api/UserApiInterface.md#userpost) | **POST** /user | Register
*UserApiInterface* | [**userPut**](Resources/docs/Api/UserApiInterface.md#userput) | **PUT** /user | Update User
*UserApiInterface* | [**usersSearchGet**](Resources/docs/Api/UserApiInterface.md#userssearchget) | **GET** /users/search | Search for users
*UtilityApiInterface* | [**healthGet**](Resources/docs/Api/UtilityApiInterface.md#healthget) | **GET** /health | Health Check
*UtilityApiInterface* | [**surveyLangCodeGet**](Resources/docs/Api/UtilityApiInterface.md#surveylangcodeget) | **GET** /survey/{lang_code} | Get survey link for given language code.


## Documentation For Models

 - [BaseUser](Resources/docs/Model/BaseUser.md)
 - [BasicUserDataResponse](Resources/docs/Model/BasicUserDataResponse.md)
 - [DryRun](Resources/docs/Model/DryRun.md)
 - [ExtendedUserDataResponse](Resources/docs/Model/ExtendedUserDataResponse.md)
 - [ExtendedUserDataResponseAllOf](Resources/docs/Model/ExtendedUserDataResponseAllOf.md)
 - [FeaturedProjectResponse](Resources/docs/Model/FeaturedProjectResponse.md)
 - [JWTResponse](Resources/docs/Model/JWTResponse.md)
 - [LoginRequest](Resources/docs/Model/LoginRequest.md)
 - [MediaCategoryResponse](Resources/docs/Model/MediaCategoryResponse.md)
 - [MediaFileResponse](Resources/docs/Model/MediaFileResponse.md)
 - [MediaPackageResponse](Resources/docs/Model/MediaPackageResponse.md)
 - [NotificationContent](Resources/docs/Model/NotificationContent.md)
 - [NotificationResponse](Resources/docs/Model/NotificationResponse.md)
 - [NotificationsCountResponse](Resources/docs/Model/NotificationsCountResponse.md)
 - [NotificationsType](Resources/docs/Model/NotificationsType.md)
 - [OAuthLoginRequest](Resources/docs/Model/OAuthLoginRequest.md)
 - [ProjectReportRequest](Resources/docs/Model/ProjectReportRequest.md)
 - [ProjectResponse](Resources/docs/Model/ProjectResponse.md)
 - [ProjectsCategory](Resources/docs/Model/ProjectsCategory.md)
 - [RefreshRequest](Resources/docs/Model/RefreshRequest.md)
 - [RegisterErrorResponse](Resources/docs/Model/RegisterErrorResponse.md)
 - [RegisterRequest](Resources/docs/Model/RegisterRequest.md)
 - [SearchResponse](Resources/docs/Model/SearchResponse.md)
 - [SurveyResponse](Resources/docs/Model/SurveyResponse.md)
 - [UpdateUserErrorResponse](Resources/docs/Model/UpdateUserErrorResponse.md)
 - [UpdateUserRequest](Resources/docs/Model/UpdateUserRequest.md)
 - [UpgradeTokenRequest](Resources/docs/Model/UpgradeTokenRequest.md)
 - [UploadErrorResponse](Resources/docs/Model/UploadErrorResponse.md)


## Documentation For Authorization


## PandaAuth

- **Type**: HTTP basic authentication


## Author

webmaster@catrobat.org

