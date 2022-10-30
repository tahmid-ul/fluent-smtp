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

namespace FluentMail\Google\Service\CloudKMS;

class CertificateChains extends \Google\Collection
{
  protected $collection_key = 'googlePartitionCerts';
  /**
   * @var string[]
   */
  public $caviumCerts;
  /**
   * @var string[]
   */
  public $googleCardCerts;
  /**
   * @var string[]
   */
  public $googlePartitionCerts;

  /**
   * @param string[]
   */
  public function setCaviumCerts($caviumCerts)
  {
    $this->caviumCerts = $caviumCerts;
  }
  /**
   * @return string[]
   */
  public function getCaviumCerts()
  {
    return $this->caviumCerts;
  }
  /**
   * @param string[]
   */
  public function setGoogleCardCerts($googleCardCerts)
  {
    $this->googleCardCerts = $googleCardCerts;
  }
  /**
   * @return string[]
   */
  public function getGoogleCardCerts()
  {
    return $this->googleCardCerts;
  }
  /**
   * @param string[]
   */
  public function setGooglePartitionCerts($googlePartitionCerts)
  {
    $this->googlePartitionCerts = $googlePartitionCerts;
  }
  /**
   * @return string[]
   */
  public function getGooglePartitionCerts()
  {
    return $this->googlePartitionCerts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CertificateChains::class, 'Google_Service_CloudKMS_CertificateChains');
