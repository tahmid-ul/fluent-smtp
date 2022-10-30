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

namespace FluentMail\Google\Service\Firebaseappcheck;

class GoogleFirebaseAppcheckV1betaListDebugTokensResponse extends \Google\Collection
{
  protected $collection_key = 'debugTokens';
  protected $debugTokensType = GoogleFirebaseAppcheckV1betaDebugToken::class;
  protected $debugTokensDataType = 'array';
  /**
   * @var string
   */
  public $nextPageToken;

  /**
   * @param GoogleFirebaseAppcheckV1betaDebugToken[]
   */
  public function setDebugTokens($debugTokens)
  {
    $this->debugTokens = $debugTokens;
  }
  /**
   * @return GoogleFirebaseAppcheckV1betaDebugToken[]
   */
  public function getDebugTokens()
  {
    return $this->debugTokens;
  }
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseAppcheckV1betaListDebugTokensResponse::class, 'Google_Service_Firebaseappcheck_GoogleFirebaseAppcheckV1betaListDebugTokensResponse');
