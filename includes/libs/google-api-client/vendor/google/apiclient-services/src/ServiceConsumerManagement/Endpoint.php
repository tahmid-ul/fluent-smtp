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

namespace FluentMail\Google\Service\ServiceConsumerManagement;

class Endpoint extends \Google\Model
{
  /**
   * @var bool
   */
  public $allowCors;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $target;

  /**
   * @param bool
   */
  public function setAllowCors($allowCors)
  {
    $this->allowCors = $allowCors;
  }
  /**
   * @return bool
   */
  public function getAllowCors()
  {
    return $this->allowCors;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /**
   * @return string
   */
  public function getTarget()
  {
    return $this->target;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Endpoint::class, 'Google_Service_ServiceConsumerManagement_Endpoint');
