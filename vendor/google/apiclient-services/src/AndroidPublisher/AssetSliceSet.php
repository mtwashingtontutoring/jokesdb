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

namespace Google\Service\AndroidPublisher;

class AssetSliceSet extends \Google\Collection
{
  protected $collection_key = 'apkDescription';
  /**
   * @var ApkDescription[]
   */
  public $apkDescription;
  protected $apkDescriptionType = ApkDescription::class;
  protected $apkDescriptionDataType = 'array';
  /**
   * @var AssetModuleMetadata
   */
  public $assetModuleMetadata;
  protected $assetModuleMetadataType = AssetModuleMetadata::class;
  protected $assetModuleMetadataDataType = '';

  /**
   * @param ApkDescription[]
   */
  public function setApkDescription($apkDescription)
  {
    $this->apkDescription = $apkDescription;
  }
  /**
   * @return ApkDescription[]
   */
  public function getApkDescription()
  {
    return $this->apkDescription;
  }
  /**
   * @param AssetModuleMetadata
   */
  public function setAssetModuleMetadata(AssetModuleMetadata $assetModuleMetadata)
  {
    $this->assetModuleMetadata = $assetModuleMetadata;
  }
  /**
   * @return AssetModuleMetadata
   */
  public function getAssetModuleMetadata()
  {
    return $this->assetModuleMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetSliceSet::class, 'Google_Service_AndroidPublisher_AssetSliceSet');
