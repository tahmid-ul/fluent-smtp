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

class GeostoreGConceptInstanceProto extends \Google\Model
{
  /**
   * @var string
   */
  public $gconceptId;
  protected $metadataType = GeostoreFieldMetadataProto::class;
  protected $metadataDataType = '';
  /**
   * @var string
   */
  public $prominence;

  /**
   * @param string
   */
  public function setGconceptId($gconceptId)
  {
    $this->gconceptId = $gconceptId;
  }
  /**
   * @return string
   */
  public function getGconceptId()
  {
    return $this->gconceptId;
  }
  /**
   * @param GeostoreFieldMetadataProto
   */
  public function setMetadata(GeostoreFieldMetadataProto $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return GeostoreFieldMetadataProto
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string
   */
  public function setProminence($prominence)
  {
    $this->prominence = $prominence;
  }
  /**
   * @return string
   */
  public function getProminence()
  {
    return $this->prominence;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeostoreGConceptInstanceProto::class, 'Google_Service_Contentwarehouse_GeostoreGConceptInstanceProto');
