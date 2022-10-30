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

namespace FluentMail\Google\Service\DLP;

class GooglePrivacyDlpV2ListStoredInfoTypesResponse extends \Google\Collection
{
  protected $collection_key = 'storedInfoTypes';
  /**
   * @var string
   */
  public $nextPageToken;
  protected $storedInfoTypesType = GooglePrivacyDlpV2StoredInfoType::class;
  protected $storedInfoTypesDataType = 'array';

  /**
   * @param string
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * @param GooglePrivacyDlpV2StoredInfoType[]
   */
  public function setStoredInfoTypes($storedInfoTypes)
  {
    $this->storedInfoTypes = $storedInfoTypes;
  }
  /**
   * @return GooglePrivacyDlpV2StoredInfoType[]
   */
  public function getStoredInfoTypes()
  {
    return $this->storedInfoTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ListStoredInfoTypesResponse::class, 'Google_Service_DLP_GooglePrivacyDlpV2ListStoredInfoTypesResponse');
