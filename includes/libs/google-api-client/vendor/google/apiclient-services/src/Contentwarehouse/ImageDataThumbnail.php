<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace FluentMail\Google\Service\Contentwarehouse;

class ImageDataThumbnail extends \Google\Model
{
  /**
   * @var string
   */
  public $expirationTimestampMicros;
  /**
   * @var int
   */
  public $height;
  /**
   * @var string
   */
  public $mimeType;
  /**
   * @var int
   */
  public $size;
  /**
   * @var string
   */
  public $type;
  /**
   * @var int
   */
  public $width;

  /**
   * @param string
   */
  public function setExpirationTimestampMicros($expirationTimestampMicros)
  {
    $this->expirationTimestampMicros = $expirationTimestampMicros;
  }
  /**
   * @return string
   */
  public function getExpirationTimestampMicros()
  {
    return $this->expirationTimestampMicros;
  }
  /**
   * @param int
   */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /**
   * @return int
   */
  public function getHeight()
  {
    return $this->height;
  }
  /**
   * @param string
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /**
   * @param int
   */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /**
   * @return int
   */
  public function getSize()
  {
    return $this->size;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param int
   */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /**
   * @return int
   */
  public function getWidth()
  {
    return $this->width;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageDataThumbnail::class, 'Google_Service_Contentwarehouse_ImageDataThumbnail');
