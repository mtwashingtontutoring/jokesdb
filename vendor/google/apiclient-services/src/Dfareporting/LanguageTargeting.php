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

namespace Google\Service\Dfareporting;

class LanguageTargeting extends \Google\Collection
{
  protected $collection_key = 'languages';
  /**
   * @var Language[]
   */
  public $languages;
  protected $languagesType = Language::class;
  protected $languagesDataType = 'array';

  /**
   * @param Language[]
   */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }
  /**
   * @return Language[]
   */
  public function getLanguages()
  {
    return $this->languages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LanguageTargeting::class, 'Google_Service_Dfareporting_LanguageTargeting');
