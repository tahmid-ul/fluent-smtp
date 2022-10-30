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

namespace FluentMail\Google\Service\CloudBuild\Resource;

use FluentMail\Google\Service\CloudBuild\BuildTrigger;
use FluentMail\Google\Service\CloudBuild\CloudbuildEmpty;
use FluentMail\Google\Service\CloudBuild\HttpBody;
use FluentMail\Google\Service\CloudBuild\ListBuildTriggersResponse;
use FluentMail\Google\Service\CloudBuild\Operation;
use FluentMail\Google\Service\CloudBuild\ReceiveTriggerWebhookResponse;
use FluentMail\Google\Service\CloudBuild\RunBuildTriggerRequest;

/**
 * The "triggers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbuildService = new Google\Service\CloudBuild(...);
 *   $triggers = $cloudbuildService->triggers;
 *  </code>
 */
class ProjectsLocationsTriggers extends \Google\Service\Resource
{
  /**
   * Creates a new `BuildTrigger`. This API is experimental. (triggers.create)
   *
   * @param string $parent The parent resource where this trigger will be created.
   * Format: `projects/{project}/locations/{location}`
   * @param BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project for which to
   * configure automatic builds.
   * @return BuildTrigger
   */
  public function create($parent, BuildTrigger $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], BuildTrigger::class);
  }
  /**
   * Deletes a `BuildTrigger` by its project ID and trigger ID. This API is
   * experimental. (triggers.delete)
   *
   * @param string $name The name of the `Trigger` to delete. Format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project that owns the
   * trigger.
   * @opt_param string triggerId Required. ID of the `BuildTrigger` to delete.
   * @return CloudbuildEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], CloudbuildEmpty::class);
  }
  /**
   * Returns information about a `BuildTrigger`. This API is experimental.
   * (triggers.get)
   *
   * @param string $name The name of the `Trigger` to retrieve. Format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project that owns the
   * trigger.
   * @opt_param string triggerId Required. Identifier (`id` or `name`) of the
   * `BuildTrigger` to get.
   * @return BuildTrigger
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], BuildTrigger::class);
  }
  /**
   * Lists existing `BuildTrigger`s. This API is experimental.
   * (triggers.listProjectsLocationsTriggers)
   *
   * @param string $parent The parent of the collection of `Triggers`. Format:
   * `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Number of results to return in the list.
   * @opt_param string pageToken Token to provide to skip to a particular spot in
   * the list.
   * @opt_param string projectId Required. ID of the project for which to list
   * BuildTriggers.
   * @return ListBuildTriggersResponse
   */
  public function listProjectsLocationsTriggers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListBuildTriggersResponse::class);
  }
  /**
   * Updates a `BuildTrigger` by its project ID and trigger ID. This API is
   * experimental. (triggers.patch)
   *
   * @param string $resourceName The `Trigger` name with format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`, where {trigger}
   * is a unique identifier generated by the service.
   * @param BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Required. ID of the project that owns the
   * trigger.
   * @opt_param string triggerId Required. ID of the `BuildTrigger` to update.
   * @return BuildTrigger
   */
  public function patch($resourceName, BuildTrigger $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], BuildTrigger::class);
  }
  /**
   * Runs a `BuildTrigger` at a particular source revision. To run a regional or
   * global trigger, use the POST request that includes the location endpoint in
   * the path. The POST request that does not include the location endpoint in the
   * path can only be used when running global triggers. (triggers.run)
   *
   * @param string $name The name of the `Trigger` to run. Format:
   * `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param RunBuildTriggerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function run($name, RunBuildTriggerRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('run', [$params], Operation::class);
  }
  /**
   * ReceiveTriggerWebhook [Experimental] is called when the API receives a
   * webhook request targeted at a specific trigger. (triggers.webhook)
   *
   * @param string $name The name of the `ReceiveTriggerWebhook` to retrieve.
   * Format: `projects/{project}/locations/{location}/triggers/{trigger}`
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId Project in which the specified trigger lives
   * @opt_param string secret Secret token used for authorization if an OAuth
   * token isn't provided.
   * @opt_param string trigger Name of the trigger to run the payload against
   * @return ReceiveTriggerWebhookResponse
   */
  public function webhook($name, HttpBody $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('webhook', [$params], ReceiveTriggerWebhookResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsTriggers::class, 'Google_Service_CloudBuild_Resource_ProjectsLocationsTriggers');
