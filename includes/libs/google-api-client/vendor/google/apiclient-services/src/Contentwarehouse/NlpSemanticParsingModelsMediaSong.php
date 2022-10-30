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

class NlpSemanticParsingModelsMediaSong extends \Google\Model
{
  protected $annotationListType = NlpSemanticParsingModelsMediaMediaAnnotationList::class;
  protected $annotationListDataType = '';
  protected $evalDataType = NlpSemanticParsingAnnotationEvalData::class;
  protected $evalDataDataType = '';
  /**
   * @var bool
   */
  public $favorite;
  /**
   * @var bool
   */
  public $first;
  /**
   * @var bool
   */
  public $isAnnotatedFromText;
  /**
   * @var bool
   */
  public $isFromFastPath;
  /**
   * @var bool
   */
  public $latest;
  protected $qrefType = NlpSemanticParsingQRefAnnotation::class;
  protected $qrefDataType = '';
  /**
   * @var string
   */
  public $rawText;

  /**
   * @param NlpSemanticParsingModelsMediaMediaAnnotationList
   */
  public function setAnnotationList(NlpSemanticParsingModelsMediaMediaAnnotationList $annotationList)
  {
    $this->annotationList = $annotationList;
  }
  /**
   * @return NlpSemanticParsingModelsMediaMediaAnnotationList
   */
  public function getAnnotationList()
  {
    return $this->annotationList;
  }
  /**
   * @param NlpSemanticParsingAnnotationEvalData
   */
  public function setEvalData(NlpSemanticParsingAnnotationEvalData $evalData)
  {
    $this->evalData = $evalData;
  }
  /**
   * @return NlpSemanticParsingAnnotationEvalData
   */
  public function getEvalData()
  {
    return $this->evalData;
  }
  /**
   * @param bool
   */
  public function setFavorite($favorite)
  {
    $this->favorite = $favorite;
  }
  /**
   * @return bool
   */
  public function getFavorite()
  {
    return $this->favorite;
  }
  /**
   * @param bool
   */
  public function setFirst($first)
  {
    $this->first = $first;
  }
  /**
   * @return bool
   */
  public function getFirst()
  {
    return $this->first;
  }
  /**
   * @param bool
   */
  public function setIsAnnotatedFromText($isAnnotatedFromText)
  {
    $this->isAnnotatedFromText = $isAnnotatedFromText;
  }
  /**
   * @return bool
   */
  public function getIsAnnotatedFromText()
  {
    return $this->isAnnotatedFromText;
  }
  /**
   * @param bool
   */
  public function setIsFromFastPath($isFromFastPath)
  {
    $this->isFromFastPath = $isFromFastPath;
  }
  /**
   * @return bool
   */
  public function getIsFromFastPath()
  {
    return $this->isFromFastPath;
  }
  /**
   * @param bool
   */
  public function setLatest($latest)
  {
    $this->latest = $latest;
  }
  /**
   * @return bool
   */
  public function getLatest()
  {
    return $this->latest;
  }
  /**
   * @param NlpSemanticParsingQRefAnnotation
   */
  public function setQref(NlpSemanticParsingQRefAnnotation $qref)
  {
    $this->qref = $qref;
  }
  /**
   * @return NlpSemanticParsingQRefAnnotation
   */
  public function getQref()
  {
    return $this->qref;
  }
  /**
   * @param string
   */
  public function setRawText($rawText)
  {
    $this->rawText = $rawText;
  }
  /**
   * @return string
   */
  public function getRawText()
  {
    return $this->rawText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NlpSemanticParsingModelsMediaSong::class, 'Google_Service_Contentwarehouse_NlpSemanticParsingModelsMediaSong');
