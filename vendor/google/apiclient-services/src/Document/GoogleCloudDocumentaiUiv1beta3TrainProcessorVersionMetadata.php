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

namespace Google\Service\Document;

class GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadata extends \Google\Model
{
  /**
   * @var GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata
   */
  public $commonMetadata;
  protected $commonMetadataType = GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata::class;
  protected $commonMetadataDataType = '';
  /**
   * @var GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation
   */
  public $testDatasetValidation;
  protected $testDatasetValidationType = GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation::class;
  protected $testDatasetValidationDataType = '';
  /**
   * @var GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation
   */
  public $trainingDatasetValidation;
  protected $trainingDatasetValidationType = GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation::class;
  protected $trainingDatasetValidationDataType = '';

  /**
   * @param GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata
   */
  public function setCommonMetadata(GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata $commonMetadata)
  {
    $this->commonMetadata = $commonMetadata;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3CommonOperationMetadata
   */
  public function getCommonMetadata()
  {
    return $this->commonMetadata;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation
   */
  public function setTestDatasetValidation(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation $testDatasetValidation)
  {
    $this->testDatasetValidation = $testDatasetValidation;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation
   */
  public function getTestDatasetValidation()
  {
    return $this->testDatasetValidation;
  }
  /**
   * @param GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation
   */
  public function setTrainingDatasetValidation(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation $trainingDatasetValidation)
  {
    $this->trainingDatasetValidation = $trainingDatasetValidation;
  }
  /**
   * @return GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadataDatasetValidation
   */
  public function getTrainingDatasetValidation()
  {
    return $this->trainingDatasetValidation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadata::class, 'Google_Service_Document_GoogleCloudDocumentaiUiv1beta3TrainProcessorVersionMetadata');
