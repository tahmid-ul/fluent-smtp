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

namespace FluentMail\Google\Service\Slides;

class InsertTableColumnsRequest extends \Google\Model
{
  protected $cellLocationType = TableCellLocation::class;
  protected $cellLocationDataType = '';
  /**
   * @var bool
   */
  public $insertRight;
  /**
   * @var int
   */
  public $number;
  /**
   * @var string
   */
  public $tableObjectId;

  /**
   * @param TableCellLocation
   */
  public function setCellLocation(TableCellLocation $cellLocation)
  {
    $this->cellLocation = $cellLocation;
  }
  /**
   * @return TableCellLocation
   */
  public function getCellLocation()
  {
    return $this->cellLocation;
  }
  /**
   * @param bool
   */
  public function setInsertRight($insertRight)
  {
    $this->insertRight = $insertRight;
  }
  /**
   * @return bool
   */
  public function getInsertRight()
  {
    return $this->insertRight;
  }
  /**
   * @param int
   */
  public function setNumber($number)
  {
    $this->number = $number;
  }
  /**
   * @return int
   */
  public function getNumber()
  {
    return $this->number;
  }
  /**
   * @param string
   */
  public function setTableObjectId($tableObjectId)
  {
    $this->tableObjectId = $tableObjectId;
  }
  /**
   * @return string
   */
  public function getTableObjectId()
  {
    return $this->tableObjectId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InsertTableColumnsRequest::class, 'Google_Service_Slides_InsertTableColumnsRequest');
