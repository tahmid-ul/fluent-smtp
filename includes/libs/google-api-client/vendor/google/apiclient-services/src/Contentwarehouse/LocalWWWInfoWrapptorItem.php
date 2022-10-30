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

class LocalWWWInfoWrapptorItem extends \Google\Model
{
  /**
   * @var string
   */
  public $addrFprint;
  /**
   * @var string
   */
  public $bizName;
  /**
   * @var string
   */
  public $phoneFprint;

  /**
   * @param string
   */
  public function setAddrFprint($addrFprint)
  {
    $this->addrFprint = $addrFprint;
  }
  /**
   * @return string
   */
  public function getAddrFprint()
  {
    return $this->addrFprint;
  }
  /**
   * @param string
   */
  public function setBizName($bizName)
  {
    $this->bizName = $bizName;
  }
  /**
   * @return string
   */
  public function getBizName()
  {
    return $this->bizName;
  }
  /**
   * @param string
   */
  public function setPhoneFprint($phoneFprint)
  {
    $this->phoneFprint = $phoneFprint;
  }
  /**
   * @return string
   */
  public function getPhoneFprint()
  {
    return $this->phoneFprint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocalWWWInfoWrapptorItem::class, 'Google_Service_Contentwarehouse_LocalWWWInfoWrapptorItem');
