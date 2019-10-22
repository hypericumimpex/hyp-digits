<?php

namespace Aws\DirectoryService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * AWS Directory Service client
 *
 * @method Result acceptSharedDirectory( array $args = [] )
 * @method Promise acceptSharedDirectoryAsync( array $args = [] )
 * @method Result addIpRoutes( array $args = [] )
 * @method Promise addIpRoutesAsync( array $args = [] )
 * @method Result addTagsToResource( array $args = [] )
 * @method Promise addTagsToResourceAsync( array $args = [] )
 * @method Result cancelSchemaExtension( array $args = [] )
 * @method Promise cancelSchemaExtensionAsync( array $args = [] )
 * @method Result connectDirectory( array $args = [] )
 * @method Promise connectDirectoryAsync( array $args = [] )
 * @method Result createAlias( array $args = [] )
 * @method Promise createAliasAsync( array $args = [] )
 * @method Result createComputer( array $args = [] )
 * @method Promise createComputerAsync( array $args = [] )
 * @method Result createConditionalForwarder( array $args = [] )
 * @method Promise createConditionalForwarderAsync( array $args = [] )
 * @method Result createDirectory( array $args = [] )
 * @method Promise createDirectoryAsync( array $args = [] )
 * @method Result createLogSubscription( array $args = [] )
 * @method Promise createLogSubscriptionAsync( array $args = [] )
 * @method Result createMicrosoftAD( array $args = [] )
 * @method Promise createMicrosoftADAsync( array $args = [] )
 * @method Result createSnapshot( array $args = [] )
 * @method Promise createSnapshotAsync( array $args = [] )
 * @method Result createTrust( array $args = [] )
 * @method Promise createTrustAsync( array $args = [] )
 * @method Result deleteConditionalForwarder( array $args = [] )
 * @method Promise deleteConditionalForwarderAsync( array $args = [] )
 * @method Result deleteDirectory( array $args = [] )
 * @method Promise deleteDirectoryAsync( array $args = [] )
 * @method Result deleteLogSubscription( array $args = [] )
 * @method Promise deleteLogSubscriptionAsync( array $args = [] )
 * @method Result deleteSnapshot( array $args = [] )
 * @method Promise deleteSnapshotAsync( array $args = [] )
 * @method Result deleteTrust( array $args = [] )
 * @method Promise deleteTrustAsync( array $args = [] )
 * @method Result deregisterEventTopic( array $args = [] )
 * @method Promise deregisterEventTopicAsync( array $args = [] )
 * @method Result describeConditionalForwarders( array $args = [] )
 * @method Promise describeConditionalForwardersAsync( array $args = [] )
 * @method Result describeDirectories( array $args = [] )
 * @method Promise describeDirectoriesAsync( array $args = [] )
 * @method Result describeDomainControllers( array $args = [] )
 * @method Promise describeDomainControllersAsync( array $args = [] )
 * @method Result describeEventTopics( array $args = [] )
 * @method Promise describeEventTopicsAsync( array $args = [] )
 * @method Result describeSharedDirectories( array $args = [] )
 * @method Promise describeSharedDirectoriesAsync( array $args = [] )
 * @method Result describeSnapshots( array $args = [] )
 * @method Promise describeSnapshotsAsync( array $args = [] )
 * @method Result describeTrusts( array $args = [] )
 * @method Promise describeTrustsAsync( array $args = [] )
 * @method Result disableRadius( array $args = [] )
 * @method Promise disableRadiusAsync( array $args = [] )
 * @method Result disableSso( array $args = [] )
 * @method Promise disableSsoAsync( array $args = [] )
 * @method Result enableRadius( array $args = [] )
 * @method Promise enableRadiusAsync( array $args = [] )
 * @method Result enableSso( array $args = [] )
 * @method Promise enableSsoAsync( array $args = [] )
 * @method Result getDirectoryLimits( array $args = [] )
 * @method Promise getDirectoryLimitsAsync( array $args = [] )
 * @method Result getSnapshotLimits( array $args = [] )
 * @method Promise getSnapshotLimitsAsync( array $args = [] )
 * @method Result listIpRoutes( array $args = [] )
 * @method Promise listIpRoutesAsync( array $args = [] )
 * @method Result listLogSubscriptions( array $args = [] )
 * @method Promise listLogSubscriptionsAsync( array $args = [] )
 * @method Result listSchemaExtensions( array $args = [] )
 * @method Promise listSchemaExtensionsAsync( array $args = [] )
 * @method Result listTagsForResource( array $args = [] )
 * @method Promise listTagsForResourceAsync( array $args = [] )
 * @method Result registerEventTopic( array $args = [] )
 * @method Promise registerEventTopicAsync( array $args = [] )
 * @method Result rejectSharedDirectory( array $args = [] )
 * @method Promise rejectSharedDirectoryAsync( array $args = [] )
 * @method Result removeIpRoutes( array $args = [] )
 * @method Promise removeIpRoutesAsync( array $args = [] )
 * @method Result removeTagsFromResource( array $args = [] )
 * @method Promise removeTagsFromResourceAsync( array $args = [] )
 * @method Result resetUserPassword( array $args = [] )
 * @method Promise resetUserPasswordAsync( array $args = [] )
 * @method Result restoreFromSnapshot( array $args = [] )
 * @method Promise restoreFromSnapshotAsync( array $args = [] )
 * @method Result shareDirectory( array $args = [] )
 * @method Promise shareDirectoryAsync( array $args = [] )
 * @method Result startSchemaExtension( array $args = [] )
 * @method Promise startSchemaExtensionAsync( array $args = [] )
 * @method Result unshareDirectory( array $args = [] )
 * @method Promise unshareDirectoryAsync( array $args = [] )
 * @method Result updateConditionalForwarder( array $args = [] )
 * @method Promise updateConditionalForwarderAsync( array $args = [] )
 * @method Result updateNumberOfDomainControllers( array $args = [] )
 * @method Promise updateNumberOfDomainControllersAsync( array $args = [] )
 * @method Result updateRadius( array $args = [] )
 * @method Promise updateRadiusAsync( array $args = [] )
 * @method Result updateTrust( array $args = [] )
 * @method Promise updateTrustAsync( array $args = [] )
 * @method Result verifyTrust( array $args = [] )
 * @method Promise verifyTrustAsync( array $args = [] )
 */
class DirectoryServiceClient extends AwsClient {
}
