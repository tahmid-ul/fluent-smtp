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

namespace FluentMail\Google\Service\CloudSearch;

class FormatMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $fontColor;
  /**
   * @var string
   */
  public $formatType;

  /**
   * @param string
   */
  public function setFontColor($fontColor)
  {
    $this->fontColor = $fontColor;
  }
  /**
   * @return string
   */
  public function getFontColor()
  {
    return $this->fontColor;
  }
  /**
   * @param string
   */
  public function setFormatType($formatType)
  {
    $this->formatType = $formatType;
  }
  /**
   * @return string
   */
  public function getFormatType()
  {
    return $this->formatType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FormatMetadata::class, 'Google_Service_CloudSearch_FormatMetadata');
