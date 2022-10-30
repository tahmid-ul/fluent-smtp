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

namespace FluentMail\Google\Service\AndroidEnterprise;

class WebApp extends \Google\Collection
{
  protected $collection_key = 'icons';
  /**
   * @var string
   */
  public $displayMode;
  protected $iconsType = WebAppIcon::class;
  protected $iconsDataType = 'array';
  /**
   * @var bool
   */
  public $isPublished;
  /**
   * @var string
   */
  public $startUrl;
  /**
   * @var string
   */
  public $title;
  /**
   * @var string
   */
  public $versionCode;
  /**
   * @var string
   */
  public $webAppId;

  /**
   * @param string
   */
  public function setDisplayMode($displayMode)
  {
    $this->displayMode = $displayMode;
  }
  /**
   * @return string
   */
  public function getDisplayMode()
  {
    return $this->displayMode;
  }
  /**
   * @param WebAppIcon[]
   */
  public function setIcons($icons)
  {
    $this->icons = $icons;
  }
  /**
   * @return WebAppIcon[]
   */
  public function getIcons()
  {
    return $this->icons;
  }
  /**
   * @param bool
   */
  public function setIsPublished($isPublished)
  {
    $this->isPublished = $isPublished;
  }
  /**
   * @return bool
   */
  public function getIsPublished()
  {
    return $this->isPublished;
  }
  /**
   * @param string
   */
  public function setStartUrl($startUrl)
  {
    $this->startUrl = $startUrl;
  }
  /**
   * @return string
   */
  public function getStartUrl()
  {
    return $this->startUrl;
  }
  /**
   * @param string
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * @param string
   */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /**
   * @return string
   */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
  /**
   * @param string
   */
  public function setWebAppId($webAppId)
  {
    $this->webAppId = $webAppId;
  }
  /**
   * @return string
   */
  public function getWebAppId()
  {
    return $this->webAppId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebApp::class, 'Google_Service_AndroidEnterprise_WebApp');
