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

namespace FluentMail\Google\Service\CloudBuild;

class CreateBitbucketServerConfigOperationMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $bitbucketServerConfig;
  /**
   * @var string
   */
  public $completeTime;
  /**
   * @var string
   */
  public $createTime;

  /**
   * @param string
   */
  public function setBitbucketServerConfig($bitbucketServerConfig)
  {
    $this->bitbucketServerConfig = $bitbucketServerConfig;
  }
  /**
   * @return string
   */
  public function getBitbucketServerConfig()
  {
    return $this->bitbucketServerConfig;
  }
  /**
   * @param string
   */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /**
   * @return string
   */
  public function getCompleteTime()
  {
    return $this->completeTime;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateBitbucketServerConfigOperationMetadata::class, 'Google_Service_CloudBuild_CreateBitbucketServerConfigOperationMetadata');
