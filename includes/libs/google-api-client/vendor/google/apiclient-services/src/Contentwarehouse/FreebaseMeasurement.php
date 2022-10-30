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

class FreebaseMeasurement extends \Google\Collection
{
  protected $collection_key = 'unit';
  /**
   * @var float
   */
  public $magnitude;
  protected $unitType = FreebaseMeasurementUnit::class;
  protected $unitDataType = 'array';

  /**
   * @param float
   */
  public function setMagnitude($magnitude)
  {
    $this->magnitude = $magnitude;
  }
  /**
   * @return float
   */
  public function getMagnitude()
  {
    return $this->magnitude;
  }
  /**
   * @param FreebaseMeasurementUnit[]
   */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /**
   * @return FreebaseMeasurementUnit[]
   */
  public function getUnit()
  {
    return $this->unit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FreebaseMeasurement::class, 'Google_Service_Contentwarehouse_FreebaseMeasurement');
