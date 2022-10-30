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

namespace FluentMail\Google\Service\Books;

class UsersettingsNotesExport extends \Google\Model
{
  /**
   * @var string
   */
  public $folderName;
  /**
   * @var bool
   */
  public $isEnabled;

  /**
   * @param string
   */
  public function setFolderName($folderName)
  {
    $this->folderName = $folderName;
  }
  /**
   * @return string
   */
  public function getFolderName()
  {
    return $this->folderName;
  }
  /**
   * @param bool
   */
  public function setIsEnabled($isEnabled)
  {
    $this->isEnabled = $isEnabled;
  }
  /**
   * @return bool
   */
  public function getIsEnabled()
  {
    return $this->isEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UsersettingsNotesExport::class, 'Google_Service_Books_UsersettingsNotesExport');
