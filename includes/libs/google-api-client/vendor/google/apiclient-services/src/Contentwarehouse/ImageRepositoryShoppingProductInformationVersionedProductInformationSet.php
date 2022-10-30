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

class ImageRepositoryShoppingProductInformationVersionedProductInformationSet extends \Google\Collection
{
  protected $collection_key = 'products';
  /**
   * @var string
   */
  public $modelType;
  protected $productsType = ImageRepositoryShoppingProductInformationProductInformation::class;
  protected $productsDataType = 'array';
  /**
   * @var int
   */
  public $version;

  /**
   * @param string
   */
  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }
  /**
   * @return string
   */
  public function getModelType()
  {
    return $this->modelType;
  }
  /**
   * @param ImageRepositoryShoppingProductInformationProductInformation[]
   */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /**
   * @return ImageRepositoryShoppingProductInformationProductInformation[]
   */
  public function getProducts()
  {
    return $this->products;
  }
  /**
   * @param int
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return int
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageRepositoryShoppingProductInformationVersionedProductInformationSet::class, 'Google_Service_Contentwarehouse_ImageRepositoryShoppingProductInformationVersionedProductInformationSet');
