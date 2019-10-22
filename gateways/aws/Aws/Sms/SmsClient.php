<?php

namespace Aws\Sms;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Server Migration Service** service.
 * @method Result createApp( array $args = [] )
 * @method Promise createAppAsync( array $args = [] )
 * @method Result createReplicationJob( array $args = [] )
 * @method Promise createReplicationJobAsync( array $args = [] )
 * @method Result deleteApp( array $args = [] )
 * @method Promise deleteAppAsync( array $args = [] )
 * @method Result deleteAppLaunchConfiguration( array $args = [] )
 * @method Promise deleteAppLaunchConfigurationAsync( array $args = [] )
 * @method Result deleteAppReplicationConfiguration( array $args = [] )
 * @method Promise deleteAppReplicationConfigurationAsync( array $args = [] )
 * @method Result deleteReplicationJob( array $args = [] )
 * @method Promise deleteReplicationJobAsync( array $args = [] )
 * @method Result deleteServerCatalog( array $args = [] )
 * @method Promise deleteServerCatalogAsync( array $args = [] )
 * @method Result disassociateConnector( array $args = [] )
 * @method Promise disassociateConnectorAsync( array $args = [] )
 * @method Result generateChangeSet( array $args = [] )
 * @method Promise generateChangeSetAsync( array $args = [] )
 * @method Result generateTemplate( array $args = [] )
 * @method Promise generateTemplateAsync( array $args = [] )
 * @method Result getApp( array $args = [] )
 * @method Promise getAppAsync( array $args = [] )
 * @method Result getAppLaunchConfiguration( array $args = [] )
 * @method Promise getAppLaunchConfigurationAsync( array $args = [] )
 * @method Result getAppReplicationConfiguration( array $args = [] )
 * @method Promise getAppReplicationConfigurationAsync( array $args = [] )
 * @method Result getConnectors( array $args = [] )
 * @method Promise getConnectorsAsync( array $args = [] )
 * @method Result getReplicationJobs( array $args = [] )
 * @method Promise getReplicationJobsAsync( array $args = [] )
 * @method Result getReplicationRuns( array $args = [] )
 * @method Promise getReplicationRunsAsync( array $args = [] )
 * @method Result getServers( array $args = [] )
 * @method Promise getServersAsync( array $args = [] )
 * @method Result importServerCatalog( array $args = [] )
 * @method Promise importServerCatalogAsync( array $args = [] )
 * @method Result launchApp( array $args = [] )
 * @method Promise launchAppAsync( array $args = [] )
 * @method Result listApps( array $args = [] )
 * @method Promise listAppsAsync( array $args = [] )
 * @method Result putAppLaunchConfiguration( array $args = [] )
 * @method Promise putAppLaunchConfigurationAsync( array $args = [] )
 * @method Result putAppReplicationConfiguration( array $args = [] )
 * @method Promise putAppReplicationConfigurationAsync( array $args = [] )
 * @method Result startAppReplication( array $args = [] )
 * @method Promise startAppReplicationAsync( array $args = [] )
 * @method Result startOnDemandReplicationRun( array $args = [] )
 * @method Promise startOnDemandReplicationRunAsync( array $args = [] )
 * @method Result stopAppReplication( array $args = [] )
 * @method Promise stopAppReplicationAsync( array $args = [] )
 * @method Result terminateApp( array $args = [] )
 * @method Promise terminateAppAsync( array $args = [] )
 * @method Result updateApp( array $args = [] )
 * @method Promise updateAppAsync( array $args = [] )
 * @method Result updateReplicationJob( array $args = [] )
 * @method Promise updateReplicationJobAsync( array $args = [] )
 */
class SmsClient extends AwsClient {
}
