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

namespace Google\Service\OnDemandScanning;

class CloudRepoSourceContext extends \Google\Model
{
  /**
   * @var AliasContext
   */
  public $aliasContext;
  protected $aliasContextType = AliasContext::class;
  protected $aliasContextDataType = '';
  /**
   * @var RepoId
   */
  public $repoId;
  protected $repoIdType = RepoId::class;
  protected $repoIdDataType = '';
  /**
   * @var string
   */
  public $revisionId;

  /**
   * @param AliasContext
   */
  public function setAliasContext(AliasContext $aliasContext)
  {
    $this->aliasContext = $aliasContext;
  }
  /**
   * @return AliasContext
   */
  public function getAliasContext()
  {
    return $this->aliasContext;
  }
  /**
   * @param RepoId
   */
  public function setRepoId(RepoId $repoId)
  {
    $this->repoId = $repoId;
  }
  /**
   * @return RepoId
   */
  public function getRepoId()
  {
    return $this->repoId;
  }
  /**
   * @param string
   */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /**
   * @return string
   */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudRepoSourceContext::class, 'Google_Service_OnDemandScanning_CloudRepoSourceContext');
