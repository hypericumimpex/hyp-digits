<?php

namespace Aws\LexModelBuildingService;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Lex Model Building Service** service.
 * @method Result createBotVersion( array $args = [] )
 * @method Promise createBotVersionAsync( array $args = [] )
 * @method Result createIntentVersion( array $args = [] )
 * @method Promise createIntentVersionAsync( array $args = [] )
 * @method Result createSlotTypeVersion( array $args = [] )
 * @method Promise createSlotTypeVersionAsync( array $args = [] )
 * @method Result deleteBot( array $args = [] )
 * @method Promise deleteBotAsync( array $args = [] )
 * @method Result deleteBotAlias( array $args = [] )
 * @method Promise deleteBotAliasAsync( array $args = [] )
 * @method Result deleteBotChannelAssociation( array $args = [] )
 * @method Promise deleteBotChannelAssociationAsync( array $args = [] )
 * @method Result deleteBotVersion( array $args = [] )
 * @method Promise deleteBotVersionAsync( array $args = [] )
 * @method Result deleteIntent( array $args = [] )
 * @method Promise deleteIntentAsync( array $args = [] )
 * @method Result deleteIntentVersion( array $args = [] )
 * @method Promise deleteIntentVersionAsync( array $args = [] )
 * @method Result deleteSlotType( array $args = [] )
 * @method Promise deleteSlotTypeAsync( array $args = [] )
 * @method Result deleteSlotTypeVersion( array $args = [] )
 * @method Promise deleteSlotTypeVersionAsync( array $args = [] )
 * @method Result deleteUtterances( array $args = [] )
 * @method Promise deleteUtterancesAsync( array $args = [] )
 * @method Result getBot( array $args = [] )
 * @method Promise getBotAsync( array $args = [] )
 * @method Result getBotAlias( array $args = [] )
 * @method Promise getBotAliasAsync( array $args = [] )
 * @method Result getBotAliases( array $args = [] )
 * @method Promise getBotAliasesAsync( array $args = [] )
 * @method Result getBotChannelAssociation( array $args = [] )
 * @method Promise getBotChannelAssociationAsync( array $args = [] )
 * @method Result getBotChannelAssociations( array $args = [] )
 * @method Promise getBotChannelAssociationsAsync( array $args = [] )
 * @method Result getBotVersions( array $args = [] )
 * @method Promise getBotVersionsAsync( array $args = [] )
 * @method Result getBots( array $args = [] )
 * @method Promise getBotsAsync( array $args = [] )
 * @method Result getBuiltinIntent( array $args = [] )
 * @method Promise getBuiltinIntentAsync( array $args = [] )
 * @method Result getBuiltinIntents( array $args = [] )
 * @method Promise getBuiltinIntentsAsync( array $args = [] )
 * @method Result getBuiltinSlotTypes( array $args = [] )
 * @method Promise getBuiltinSlotTypesAsync( array $args = [] )
 * @method Result getExport( array $args = [] )
 * @method Promise getExportAsync( array $args = [] )
 * @method Result getImport( array $args = [] )
 * @method Promise getImportAsync( array $args = [] )
 * @method Result getIntent( array $args = [] )
 * @method Promise getIntentAsync( array $args = [] )
 * @method Result getIntentVersions( array $args = [] )
 * @method Promise getIntentVersionsAsync( array $args = [] )
 * @method Result getIntents( array $args = [] )
 * @method Promise getIntentsAsync( array $args = [] )
 * @method Result getSlotType( array $args = [] )
 * @method Promise getSlotTypeAsync( array $args = [] )
 * @method Result getSlotTypeVersions( array $args = [] )
 * @method Promise getSlotTypeVersionsAsync( array $args = [] )
 * @method Result getSlotTypes( array $args = [] )
 * @method Promise getSlotTypesAsync( array $args = [] )
 * @method Result getUtterancesView( array $args = [] )
 * @method Promise getUtterancesViewAsync( array $args = [] )
 * @method Result putBot( array $args = [] )
 * @method Promise putBotAsync( array $args = [] )
 * @method Result putBotAlias( array $args = [] )
 * @method Promise putBotAliasAsync( array $args = [] )
 * @method Result putIntent( array $args = [] )
 * @method Promise putIntentAsync( array $args = [] )
 * @method Result putSlotType( array $args = [] )
 * @method Promise putSlotTypeAsync( array $args = [] )
 * @method Result startImport( array $args = [] )
 * @method Promise startImportAsync( array $args = [] )
 */
class LexModelBuildingServiceClient extends AwsClient {
}
