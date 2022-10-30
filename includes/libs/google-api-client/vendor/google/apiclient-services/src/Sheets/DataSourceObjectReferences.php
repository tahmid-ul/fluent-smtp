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

namespace FluentMail\Google\Service\Sheets;

class DataSourceObjectReferences extends \Google\Collection
{
  protected $collection_key = 'references';
  protected $referencesType = DataSourceObjectReference::class;
  protected $referencesDataType = 'array';

  /**
   * @param DataSourceObjectReference[]
   */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /**
   * @return DataSourceObjectReference[]
   */
  public function getReferences()
  {
    return $this->references;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataSourceObjectReferences::class, 'Google_Service_Sheets_DataSourceObjectReferences');
