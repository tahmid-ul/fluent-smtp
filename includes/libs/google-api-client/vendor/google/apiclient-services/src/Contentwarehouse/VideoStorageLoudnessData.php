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

class VideoStorageLoudnessData extends \Google\Model
{
  /**
   * @var float
   */
  public $itu1770LoudnessDb;
  /**
   * @var float
   */
  public $perceptualLoudnessDb;

  /**
   * @param float
   */
  public function setItu1770LoudnessDb($itu1770LoudnessDb)
  {
    $this->itu1770LoudnessDb = $itu1770LoudnessDb;
  }
  /**
   * @return float
   */
  public function getItu1770LoudnessDb()
  {
    return $this->itu1770LoudnessDb;
  }
  /**
   * @param float
   */
  public function setPerceptualLoudnessDb($perceptualLoudnessDb)
  {
    $this->perceptualLoudnessDb = $perceptualLoudnessDb;
  }
  /**
   * @return float
   */
  public function getPerceptualLoudnessDb()
  {
    return $this->perceptualLoudnessDb;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VideoStorageLoudnessData::class, 'Google_Service_Contentwarehouse_VideoStorageLoudnessData');
