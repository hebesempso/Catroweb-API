<?php
/**
 * SurveyResponse.
 *
 * PHP version 7.1.3
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
 * The version of the OpenAPI document: v1.0.56
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the SurveyResponse model.
 *
 * @author  OpenAPI Generator team
 */
class SurveyResponse
{
  /**
   * Url to a survey for the given language.
   *
   * @var string|null
   * @SerializedName("url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $url;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->url = isset($data['url']) ? $data['url'] : null;
  }

  /**
   * Gets url.
   */
  public function getUrl(): ?string
  {
    return $this->url;
  }

  /**
   * Sets url.
   *
   * @param string|null $url Url to a survey for the given language
   *
   * @return $this
   */
  public function setUrl(string $url = null)
  {
    $this->url = $url;

    return $this;
  }
}
