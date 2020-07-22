<?php
/**
 * AuthenticationApiInterface
 * PHP version 7.1.3.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.42
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\LoginRequest;
use OpenAPI\Server\Model\OAuthLoginRequest;

/**
 * AuthenticationApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface AuthenticationApiInterface
{
  /**
   * Sets authentication method PandaAuth.
   *
   * @param string $value value of the PandaAuth authentication method
   */
  public function setPandaAuth($value);

  /**
   * Operation authenticationGet.
   *
   * Check token
   *
   * @param int   $responseCode    The HTTP response code to return
   * @param array $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function authenticationGet(&$responseCode, array &$responseHeaders);

  /**
   * Operation authenticationOauthPost.
   *
   * OAuth Login
   *
   * @param OpenAPI\Server\Model\OAuthLoginRequest $o_auth_login_request (required)
   * @param int                                    $responseCode         The HTTP response code to return
   * @param array                                  $responseHeaders      Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\JWTResponse
   */
  public function authenticationOauthPost(OAuthLoginRequest $o_auth_login_request, &$responseCode, array &$responseHeaders);

  /**
   * Operation authenticationPost.
   *
   * Login
   *
   * @param OpenAPI\Server\Model\LoginRequest $login_request   (required)
   * @param int                               $responseCode    The HTTP response code to return
   * @param array                             $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return OpenAPI\Server\Model\JWTResponse
   */
  public function authenticationPost(LoginRequest $login_request, &$responseCode, array &$responseHeaders);
}
