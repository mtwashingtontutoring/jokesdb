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

namespace Google\Service\Contentwarehouse;

class ClassifierPornDocumentData extends \Google\Model
{
  /**
   * @var ClassifierPornClassifierData
   */
  public $classifierdata;
  protected $classifierdataType = ClassifierPornClassifierData::class;
  protected $classifierdataDataType = '';
  /**
   * @var ClassifierPornSiteData
   */
  public $sitedata;
  protected $sitedataType = ClassifierPornSiteData::class;
  protected $sitedataDataType = '';

  /**
   * @param ClassifierPornClassifierData
   */
  public function setClassifierdata(ClassifierPornClassifierData $classifierdata)
  {
    $this->classifierdata = $classifierdata;
  }
  /**
   * @return ClassifierPornClassifierData
   */
  public function getClassifierdata()
  {
    return $this->classifierdata;
  }
  /**
   * @param ClassifierPornSiteData
   */
  public function setSitedata(ClassifierPornSiteData $sitedata)
  {
    $this->sitedata = $sitedata;
  }
  /**
   * @return ClassifierPornSiteData
   */
  public function getSitedata()
  {
    return $this->sitedata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClassifierPornDocumentData::class, 'Google_Service_Contentwarehouse_ClassifierPornDocumentData');
