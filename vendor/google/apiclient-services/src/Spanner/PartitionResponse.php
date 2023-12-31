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

namespace Google\Service\Spanner;

class PartitionResponse extends \Google\Collection
{
  protected $collection_key = 'partitions';
  /**
   * @var Partition[]
   */
  public $partitions;
  protected $partitionsType = Partition::class;
  protected $partitionsDataType = 'array';
  /**
   * @var Transaction
   */
  public $transaction;
  protected $transactionType = Transaction::class;
  protected $transactionDataType = '';

  /**
   * @param Partition[]
   */
  public function setPartitions($partitions)
  {
    $this->partitions = $partitions;
  }
  /**
   * @return Partition[]
   */
  public function getPartitions()
  {
    return $this->partitions;
  }
  /**
   * @param Transaction
   */
  public function setTransaction(Transaction $transaction)
  {
    $this->transaction = $transaction;
  }
  /**
   * @return Transaction
   */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionResponse::class, 'Google_Service_Spanner_PartitionResponse');
