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

namespace FluentMail\Google\Service\DataCatalog;

class GoogleCloudDatacatalogV1DataplexFilesetSpec extends \Google\Model
{
  protected $dataplexSpecType = GoogleCloudDatacatalogV1DataplexSpec::class;
  protected $dataplexSpecDataType = '';

  /**
   * @param GoogleCloudDatacatalogV1DataplexSpec
   */
  public function setDataplexSpec(GoogleCloudDatacatalogV1DataplexSpec $dataplexSpec)
  {
    $this->dataplexSpec = $dataplexSpec;
  }
  /**
   * @return GoogleCloudDatacatalogV1DataplexSpec
   */
  public function getDataplexSpec()
  {
    return $this->dataplexSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogV1DataplexFilesetSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1DataplexFilesetSpec');
