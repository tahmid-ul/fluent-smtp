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

namespace FluentMail\Google\Service\CloudHealthcare;

class Field extends \Google\Model
{
  /**
   * @var int
   */
  public $maxOccurs;
  /**
   * @var int
   */
  public $minOccurs;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $table;
  /**
   * @var string
   */
  public $type;

  /**
   * @param int
   */
  public function setMaxOccurs($maxOccurs)
  {
    $this->maxOccurs = $maxOccurs;
  }
  /**
   * @return int
   */
  public function getMaxOccurs()
  {
    return $this->maxOccurs;
  }
  /**
   * @param int
   */
  public function setMinOccurs($minOccurs)
  {
    $this->minOccurs = $minOccurs;
  }
  /**
   * @return int
   */
  public function getMinOccurs()
  {
    return $this->minOccurs;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /**
   * @return string
   */
  public function getTable()
  {
    return $this->table;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Field::class, 'Google_Service_CloudHealthcare_Field');
