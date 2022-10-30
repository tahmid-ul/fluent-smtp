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

namespace FluentMail\Google\Service\CloudSearch;

class SlashCommandMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $argumentsHint;
  /**
   * @var string
   */
  public $commandId;
  /**
   * @var string
   */
  public $commandName;
  protected $idType = UserId::class;
  protected $idDataType = '';
  /**
   * @var bool
   */
  public $triggersDialog;
  /**
   * @var string
   */
  public $type;

  /**
   * @param string
   */
  public function setArgumentsHint($argumentsHint)
  {
    $this->argumentsHint = $argumentsHint;
  }
  /**
   * @return string
   */
  public function getArgumentsHint()
  {
    return $this->argumentsHint;
  }
  /**
   * @param string
   */
  public function setCommandId($commandId)
  {
    $this->commandId = $commandId;
  }
  /**
   * @return string
   */
  public function getCommandId()
  {
    return $this->commandId;
  }
  /**
   * @param string
   */
  public function setCommandName($commandName)
  {
    $this->commandName = $commandName;
  }
  /**
   * @return string
   */
  public function getCommandName()
  {
    return $this->commandName;
  }
  /**
   * @param UserId
   */
  public function setId(UserId $id)
  {
    $this->id = $id;
  }
  /**
   * @return UserId
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param bool
   */
  public function setTriggersDialog($triggersDialog)
  {
    $this->triggersDialog = $triggersDialog;
  }
  /**
   * @return bool
   */
  public function getTriggersDialog()
  {
    return $this->triggersDialog;
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
class_alias(SlashCommandMetadata::class, 'Google_Service_CloudSearch_SlashCommandMetadata');
