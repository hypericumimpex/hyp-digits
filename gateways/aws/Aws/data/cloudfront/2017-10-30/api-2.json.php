<?php
// This file was auto-generated from sdk-root/src/data/cloudfront/2017-10-30/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2017-10-30',
		'endpointPrefix'      => 'cloudfront',
		'globalEndpoint'      => 'cloudfront.amazonaws.com',
		'protocol'            => 'rest-xml',
		'serviceAbbreviation' => 'CloudFront',
		'serviceFullName'     => 'Amazon CloudFront',
		'serviceId'           => 'CloudFront',
		'signatureVersion'    => 'v4',
		'uid'                 => 'cloudfront-2017-10-30',
	],
	'operations' => [
		'CreateCloudFrontOriginAccessIdentity'    => [
			'name'   => 'CreateCloudFrontOriginAccessIdentity2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/origin-access-identity/cloudfront',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateCloudFrontOriginAccessIdentityRequest', ],
			'output' => [ 'shape' => 'CreateCloudFrontOriginAccessIdentityResult', ],
			'errors' => [
				[ 'shape' => 'CloudFrontOriginAccessIdentityAlreadyExists', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'TooManyCloudFrontOriginAccessIdentities', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InconsistentQuantities', ],
			],
		],
		'CreateDistribution'                      => [
			'name'   => 'CreateDistribution2017_10_30',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/2017-10-30/distribution', 'responseCode' => 201, ],
			'input'  => [ 'shape' => 'CreateDistributionRequest', ],
			'output' => [ 'shape' => 'CreateDistributionResult', ],
			'errors' => [
				[ 'shape' => 'CNAMEAlreadyExists', ],
				[ 'shape' => 'DistributionAlreadyExists', ],
				[ 'shape' => 'InvalidOrigin', ],
				[ 'shape' => 'InvalidOriginAccessIdentity', ],
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'TooManyTrustedSigners', ],
				[ 'shape' => 'TrustedSignerDoesNotExist', ],
				[ 'shape' => 'InvalidViewerCertificate', ],
				[ 'shape' => 'InvalidMinimumProtocolVersion', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'TooManyDistributionCNAMEs', ],
				[ 'shape' => 'TooManyDistributions', ],
				[ 'shape' => 'InvalidDefaultRootObject', ],
				[ 'shape' => 'InvalidRelativePath', ],
				[ 'shape' => 'InvalidErrorCode', ],
				[ 'shape' => 'InvalidResponseCode', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidRequiredProtocol', ],
				[ 'shape' => 'NoSuchOrigin', ],
				[ 'shape' => 'TooManyOrigins', ],
				[ 'shape' => 'TooManyCacheBehaviors', ],
				[ 'shape' => 'TooManyCookieNamesInWhiteList', ],
				[ 'shape' => 'InvalidForwardCookies', ],
				[ 'shape' => 'TooManyHeadersInForwardedValues', ],
				[ 'shape' => 'InvalidHeadersForS3Origin', ],
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'TooManyCertificates', ],
				[ 'shape' => 'InvalidLocationCode', ],
				[ 'shape' => 'InvalidGeoRestrictionParameter', ],
				[ 'shape' => 'InvalidProtocolSettings', ],
				[ 'shape' => 'InvalidTTLOrder', ],
				[ 'shape' => 'InvalidWebACLId', ],
				[ 'shape' => 'TooManyOriginCustomHeaders', ],
				[ 'shape' => 'TooManyQueryStringParameters', ],
				[ 'shape' => 'InvalidQueryStringParameters', ],
				[ 'shape' => 'TooManyDistributionsWithLambdaAssociations', ],
				[ 'shape' => 'TooManyLambdaFunctionAssociations', ],
				[ 'shape' => 'InvalidLambdaFunctionAssociation', ],
				[ 'shape' => 'InvalidOriginReadTimeout', ],
				[ 'shape' => 'InvalidOriginKeepaliveTimeout', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionConfig', ],
				[ 'shape' => 'IllegalFieldLevelEncryptionConfigAssociationWithCacheBehavior', ],
				[ 'shape' => 'TooManyDistributionsAssociatedToFieldLevelEncryptionConfig', ],
			],
		],
		'CreateDistributionWithTags'              => [
			'name'   => 'CreateDistributionWithTags2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/distribution?WithTags',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateDistributionWithTagsRequest', ],
			'output' => [ 'shape' => 'CreateDistributionWithTagsResult', ],
			'errors' => [
				[ 'shape' => 'CNAMEAlreadyExists', ],
				[ 'shape' => 'DistributionAlreadyExists', ],
				[ 'shape' => 'InvalidOrigin', ],
				[ 'shape' => 'InvalidOriginAccessIdentity', ],
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'TooManyTrustedSigners', ],
				[ 'shape' => 'TrustedSignerDoesNotExist', ],
				[ 'shape' => 'InvalidViewerCertificate', ],
				[ 'shape' => 'InvalidMinimumProtocolVersion', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'TooManyDistributionCNAMEs', ],
				[ 'shape' => 'TooManyDistributions', ],
				[ 'shape' => 'InvalidDefaultRootObject', ],
				[ 'shape' => 'InvalidRelativePath', ],
				[ 'shape' => 'InvalidErrorCode', ],
				[ 'shape' => 'InvalidResponseCode', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidRequiredProtocol', ],
				[ 'shape' => 'NoSuchOrigin', ],
				[ 'shape' => 'TooManyOrigins', ],
				[ 'shape' => 'TooManyCacheBehaviors', ],
				[ 'shape' => 'TooManyCookieNamesInWhiteList', ],
				[ 'shape' => 'InvalidForwardCookies', ],
				[ 'shape' => 'TooManyHeadersInForwardedValues', ],
				[ 'shape' => 'InvalidHeadersForS3Origin', ],
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'TooManyCertificates', ],
				[ 'shape' => 'InvalidLocationCode', ],
				[ 'shape' => 'InvalidGeoRestrictionParameter', ],
				[ 'shape' => 'InvalidProtocolSettings', ],
				[ 'shape' => 'InvalidTTLOrder', ],
				[ 'shape' => 'InvalidWebACLId', ],
				[ 'shape' => 'TooManyOriginCustomHeaders', ],
				[ 'shape' => 'InvalidTagging', ],
				[ 'shape' => 'TooManyQueryStringParameters', ],
				[ 'shape' => 'InvalidQueryStringParameters', ],
				[ 'shape' => 'TooManyDistributionsWithLambdaAssociations', ],
				[ 'shape' => 'TooManyLambdaFunctionAssociations', ],
				[ 'shape' => 'InvalidLambdaFunctionAssociation', ],
				[ 'shape' => 'InvalidOriginReadTimeout', ],
				[ 'shape' => 'InvalidOriginKeepaliveTimeout', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionConfig', ],
				[ 'shape' => 'IllegalFieldLevelEncryptionConfigAssociationWithCacheBehavior', ],
				[ 'shape' => 'TooManyDistributionsAssociatedToFieldLevelEncryptionConfig', ],
			],
		],
		'CreateFieldLevelEncryptionConfig'        => [
			'name'   => 'CreateFieldLevelEncryptionConfig2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/field-level-encryption',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateFieldLevelEncryptionConfigRequest', ],
			'output' => [ 'shape' => 'CreateFieldLevelEncryptionConfigResult', ],
			'errors' => [
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionProfile', ],
				[ 'shape' => 'FieldLevelEncryptionConfigAlreadyExists', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionConfigs', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionQueryArgProfiles', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionContentTypeProfiles', ],
				[ 'shape' => 'QueryArgProfileEmpty', ],
			],
		],
		'CreateFieldLevelEncryptionProfile'       => [
			'name'   => 'CreateFieldLevelEncryptionProfile2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/field-level-encryption-profile',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateFieldLevelEncryptionProfileRequest', ],
			'output' => [ 'shape' => 'CreateFieldLevelEncryptionProfileResult', ],
			'errors' => [
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'NoSuchPublicKey', ],
				[ 'shape' => 'FieldLevelEncryptionProfileAlreadyExists', ],
				[ 'shape' => 'FieldLevelEncryptionProfileSizeExceeded', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionProfiles', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionEncryptionEntities', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionFieldPatterns', ],
			],
		],
		'CreateInvalidation'                      => [
			'name'   => 'CreateInvalidation2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/distribution/{DistributionId}/invalidation',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateInvalidationRequest', ],
			'output' => [ 'shape' => 'CreateInvalidationResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'NoSuchDistribution', ],
				[ 'shape' => 'BatchTooLarge', ],
				[ 'shape' => 'TooManyInvalidationsInProgress', ],
				[ 'shape' => 'InconsistentQuantities', ],
			],
		],
		'CreatePublicKey'                         => [
			'name'   => 'CreatePublicKey2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/public-key',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreatePublicKeyRequest', ],
			'output' => [ 'shape' => 'CreatePublicKeyResult', ],
			'errors' => [
				[ 'shape' => 'PublicKeyAlreadyExists', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'TooManyPublicKeys', ],
			],
		],
		'CreateStreamingDistribution'             => [
			'name'   => 'CreateStreamingDistribution2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/streaming-distribution',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateStreamingDistributionRequest', ],
			'output' => [ 'shape' => 'CreateStreamingDistributionResult', ],
			'errors' => [
				[ 'shape' => 'CNAMEAlreadyExists', ],
				[ 'shape' => 'StreamingDistributionAlreadyExists', ],
				[ 'shape' => 'InvalidOrigin', ],
				[ 'shape' => 'InvalidOriginAccessIdentity', ],
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'TooManyTrustedSigners', ],
				[ 'shape' => 'TrustedSignerDoesNotExist', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'TooManyStreamingDistributionCNAMEs', ],
				[ 'shape' => 'TooManyStreamingDistributions', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InconsistentQuantities', ],
			],
		],
		'CreateStreamingDistributionWithTags'     => [
			'name'   => 'CreateStreamingDistributionWithTags2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/streaming-distribution?WithTags',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateStreamingDistributionWithTagsRequest', ],
			'output' => [ 'shape' => 'CreateStreamingDistributionWithTagsResult', ],
			'errors' => [
				[ 'shape' => 'CNAMEAlreadyExists', ],
				[ 'shape' => 'StreamingDistributionAlreadyExists', ],
				[ 'shape' => 'InvalidOrigin', ],
				[ 'shape' => 'InvalidOriginAccessIdentity', ],
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'TooManyTrustedSigners', ],
				[ 'shape' => 'TrustedSignerDoesNotExist', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'TooManyStreamingDistributionCNAMEs', ],
				[ 'shape' => 'TooManyStreamingDistributions', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'InvalidTagging', ],
			],
		],
		'DeleteCloudFrontOriginAccessIdentity'    => [
			'name'   => 'DeleteCloudFrontOriginAccessIdentity2017_10_30',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-10-30/origin-access-identity/cloudfront/{Id}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteCloudFrontOriginAccessIdentityRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchCloudFrontOriginAccessIdentity', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'CloudFrontOriginAccessIdentityInUse', ],
			],
		],
		'DeleteDistribution'                      => [
			'name'   => 'DeleteDistribution2017_10_30',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-10-30/distribution/{Id}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteDistributionRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'DistributionNotDisabled', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchDistribution', ],
				[ 'shape' => 'PreconditionFailed', ],
			],
		],
		'DeleteFieldLevelEncryptionConfig'        => [
			'name'   => 'DeleteFieldLevelEncryptionConfig2017_10_30',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-10-30/field-level-encryption/{Id}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteFieldLevelEncryptionConfigRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionConfig', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'FieldLevelEncryptionConfigInUse', ],
			],
		],
		'DeleteFieldLevelEncryptionProfile'       => [
			'name'   => 'DeleteFieldLevelEncryptionProfile2017_10_30',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-10-30/field-level-encryption-profile/{Id}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteFieldLevelEncryptionProfileRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionProfile', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'FieldLevelEncryptionProfileInUse', ],
			],
		],
		'DeletePublicKey'                         => [
			'name'   => 'DeletePublicKey2017_10_30',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-10-30/public-key/{Id}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeletePublicKeyRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'PublicKeyInUse', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchPublicKey', ],
				[ 'shape' => 'PreconditionFailed', ],
			],
		],
		'DeleteStreamingDistribution'             => [
			'name'   => 'DeleteStreamingDistribution2017_10_30',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-10-30/streaming-distribution/{Id}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteStreamingDistributionRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'StreamingDistributionNotDisabled', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchStreamingDistribution', ],
				[ 'shape' => 'PreconditionFailed', ],
			],
		],
		'GetCloudFrontOriginAccessIdentity'       => [
			'name'   => 'GetCloudFrontOriginAccessIdentity2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/origin-access-identity/cloudfront/{Id}',
			],
			'input'  => [ 'shape' => 'GetCloudFrontOriginAccessIdentityRequest', ],
			'output' => [ 'shape' => 'GetCloudFrontOriginAccessIdentityResult', ],
			'errors' => [
				[ 'shape' => 'NoSuchCloudFrontOriginAccessIdentity', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'GetCloudFrontOriginAccessIdentityConfig' => [
			'name'   => 'GetCloudFrontOriginAccessIdentityConfig2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/origin-access-identity/cloudfront/{Id}/config',
			],
			'input'  => [ 'shape' => 'GetCloudFrontOriginAccessIdentityConfigRequest', ],
			'output' => [ 'shape' => 'GetCloudFrontOriginAccessIdentityConfigResult', ],
			'errors' => [
				[ 'shape' => 'NoSuchCloudFrontOriginAccessIdentity', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'GetDistribution'                         => [
			'name'   => 'GetDistribution2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/distribution/{Id}',
			],
			'input'  => [ 'shape' => 'GetDistributionRequest', ],
			'output' => [ 'shape' => 'GetDistributionResult', ],
			'errors' => [
				[ 'shape' => 'NoSuchDistribution', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'GetDistributionConfig'                   => [
			'name'   => 'GetDistributionConfig2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/distribution/{Id}/config',
			],
			'input'  => [ 'shape' => 'GetDistributionConfigRequest', ],
			'output' => [ 'shape' => 'GetDistributionConfigResult', ],
			'errors' => [
				[ 'shape' => 'NoSuchDistribution', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'GetFieldLevelEncryption'                 => [
			'name'   => 'GetFieldLevelEncryption2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/field-level-encryption/{Id}',
			],
			'input'  => [ 'shape' => 'GetFieldLevelEncryptionRequest', ],
			'output' => [ 'shape' => 'GetFieldLevelEncryptionResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionConfig', ],
			],
		],
		'GetFieldLevelEncryptionConfig'           => [
			'name'   => 'GetFieldLevelEncryptionConfig2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/field-level-encryption/{Id}/config',
			],
			'input'  => [ 'shape' => 'GetFieldLevelEncryptionConfigRequest', ],
			'output' => [ 'shape' => 'GetFieldLevelEncryptionConfigResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionConfig', ],
			],
		],
		'GetFieldLevelEncryptionProfile'          => [
			'name'   => 'GetFieldLevelEncryptionProfile2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/field-level-encryption-profile/{Id}',
			],
			'input'  => [ 'shape' => 'GetFieldLevelEncryptionProfileRequest', ],
			'output' => [ 'shape' => 'GetFieldLevelEncryptionProfileResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionProfile', ],
			],
		],
		'GetFieldLevelEncryptionProfileConfig'    => [
			'name'   => 'GetFieldLevelEncryptionProfileConfig2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/field-level-encryption-profile/{Id}/config',
			],
			'input'  => [ 'shape' => 'GetFieldLevelEncryptionProfileConfigRequest', ],
			'output' => [ 'shape' => 'GetFieldLevelEncryptionProfileConfigResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionProfile', ],
			],
		],
		'GetInvalidation'                         => [
			'name'   => 'GetInvalidation2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/distribution/{DistributionId}/invalidation/{Id}',
			],
			'input'  => [ 'shape' => 'GetInvalidationRequest', ],
			'output' => [ 'shape' => 'GetInvalidationResult', ],
			'errors' => [
				[ 'shape' => 'NoSuchInvalidation', ],
				[ 'shape' => 'NoSuchDistribution', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'GetPublicKey'                            => [
			'name'   => 'GetPublicKey2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/public-key/{Id}',
			],
			'input'  => [ 'shape' => 'GetPublicKeyRequest', ],
			'output' => [ 'shape' => 'GetPublicKeyResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'NoSuchPublicKey', ],
			],
		],
		'GetPublicKeyConfig'                      => [
			'name'   => 'GetPublicKeyConfig2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/public-key/{Id}/config',
			],
			'input'  => [ 'shape' => 'GetPublicKeyConfigRequest', ],
			'output' => [ 'shape' => 'GetPublicKeyConfigResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'NoSuchPublicKey', ],
			],
		],
		'GetStreamingDistribution'                => [
			'name'   => 'GetStreamingDistribution2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/streaming-distribution/{Id}',
			],
			'input'  => [ 'shape' => 'GetStreamingDistributionRequest', ],
			'output' => [ 'shape' => 'GetStreamingDistributionResult', ],
			'errors' => [
				[ 'shape' => 'NoSuchStreamingDistribution', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'GetStreamingDistributionConfig'          => [
			'name'   => 'GetStreamingDistributionConfig2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/streaming-distribution/{Id}/config',
			],
			'input'  => [ 'shape' => 'GetStreamingDistributionConfigRequest', ],
			'output' => [ 'shape' => 'GetStreamingDistributionConfigResult', ],
			'errors' => [
				[ 'shape' => 'NoSuchStreamingDistribution', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'ListCloudFrontOriginAccessIdentities'    => [
			'name'   => 'ListCloudFrontOriginAccessIdentities2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/origin-access-identity/cloudfront',
			],
			'input'  => [ 'shape' => 'ListCloudFrontOriginAccessIdentitiesRequest', ],
			'output' => [ 'shape' => 'ListCloudFrontOriginAccessIdentitiesResult', ],
			'errors' => [ [ 'shape' => 'InvalidArgument', ], ],
		],
		'ListDistributions'                       => [
			'name'   => 'ListDistributions2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/distribution',
			],
			'input'  => [ 'shape' => 'ListDistributionsRequest', ],
			'output' => [ 'shape' => 'ListDistributionsResult', ],
			'errors' => [ [ 'shape' => 'InvalidArgument', ], ],
		],
		'ListDistributionsByWebACLId'             => [
			'name'   => 'ListDistributionsByWebACLId2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/distributionsByWebACLId/{WebACLId}',
			],
			'input'  => [ 'shape' => 'ListDistributionsByWebACLIdRequest', ],
			'output' => [ 'shape' => 'ListDistributionsByWebACLIdResult', ],
			'errors' => [
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidWebACLId', ],
			],
		],
		'ListFieldLevelEncryptionConfigs'         => [
			'name'   => 'ListFieldLevelEncryptionConfigs2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/field-level-encryption',
			],
			'input'  => [ 'shape' => 'ListFieldLevelEncryptionConfigsRequest', ],
			'output' => [ 'shape' => 'ListFieldLevelEncryptionConfigsResult', ],
			'errors' => [ [ 'shape' => 'InvalidArgument', ], ],
		],
		'ListFieldLevelEncryptionProfiles'        => [
			'name'   => 'ListFieldLevelEncryptionProfiles2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/field-level-encryption-profile',
			],
			'input'  => [ 'shape' => 'ListFieldLevelEncryptionProfilesRequest', ],
			'output' => [ 'shape' => 'ListFieldLevelEncryptionProfilesResult', ],
			'errors' => [ [ 'shape' => 'InvalidArgument', ], ],
		],
		'ListInvalidations'                       => [
			'name'   => 'ListInvalidations2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/distribution/{DistributionId}/invalidation',
			],
			'input'  => [ 'shape' => 'ListInvalidationsRequest', ],
			'output' => [ 'shape' => 'ListInvalidationsResult', ],
			'errors' => [
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'NoSuchDistribution', ],
				[ 'shape' => 'AccessDenied', ],
			],
		],
		'ListPublicKeys'                          => [
			'name'   => 'ListPublicKeys2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/public-key',
			],
			'input'  => [ 'shape' => 'ListPublicKeysRequest', ],
			'output' => [ 'shape' => 'ListPublicKeysResult', ],
			'errors' => [ [ 'shape' => 'InvalidArgument', ], ],
		],
		'ListStreamingDistributions'              => [
			'name'   => 'ListStreamingDistributions2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/streaming-distribution',
			],
			'input'  => [ 'shape' => 'ListStreamingDistributionsRequest', ],
			'output' => [ 'shape' => 'ListStreamingDistributionsResult', ],
			'errors' => [ [ 'shape' => 'InvalidArgument', ], ],
		],
		'ListTagsForResource'                     => [
			'name'   => 'ListTagsForResource2017_10_30',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2017-10-30/tagging',
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidTagging', ],
				[ 'shape' => 'NoSuchResource', ],
			],
		],
		'TagResource'                             => [
			'name'   => 'TagResource2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/tagging?Operation=Tag',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidTagging', ],
				[ 'shape' => 'NoSuchResource', ],
			],
		],
		'UntagResource'                           => [
			'name'   => 'UntagResource2017_10_30',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-10-30/tagging?Operation=Untag',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidTagging', ],
				[ 'shape' => 'NoSuchResource', ],
			],
		],
		'UpdateCloudFrontOriginAccessIdentity'    => [
			'name'   => 'UpdateCloudFrontOriginAccessIdentity2017_10_30',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/2017-10-30/origin-access-identity/cloudfront/{Id}/config',
			],
			'input'  => [ 'shape' => 'UpdateCloudFrontOriginAccessIdentityRequest', ],
			'output' => [ 'shape' => 'UpdateCloudFrontOriginAccessIdentityResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'IllegalUpdate', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'NoSuchCloudFrontOriginAccessIdentity', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InconsistentQuantities', ],
			],
		],
		'UpdateDistribution'                      => [
			'name'   => 'UpdateDistribution2017_10_30',
			'http'   => [ 'method' => 'PUT', 'requestUri' => '/2017-10-30/distribution/{Id}/config', ],
			'input'  => [ 'shape' => 'UpdateDistributionRequest', ],
			'output' => [ 'shape' => 'UpdateDistributionResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'CNAMEAlreadyExists', ],
				[ 'shape' => 'IllegalUpdate', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'NoSuchDistribution', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'TooManyDistributionCNAMEs', ],
				[ 'shape' => 'InvalidDefaultRootObject', ],
				[ 'shape' => 'InvalidRelativePath', ],
				[ 'shape' => 'InvalidErrorCode', ],
				[ 'shape' => 'InvalidResponseCode', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidOriginAccessIdentity', ],
				[ 'shape' => 'TooManyTrustedSigners', ],
				[ 'shape' => 'TrustedSignerDoesNotExist', ],
				[ 'shape' => 'InvalidViewerCertificate', ],
				[ 'shape' => 'InvalidMinimumProtocolVersion', ],
				[ 'shape' => 'InvalidRequiredProtocol', ],
				[ 'shape' => 'NoSuchOrigin', ],
				[ 'shape' => 'TooManyOrigins', ],
				[ 'shape' => 'TooManyCacheBehaviors', ],
				[ 'shape' => 'TooManyCookieNamesInWhiteList', ],
				[ 'shape' => 'InvalidForwardCookies', ],
				[ 'shape' => 'TooManyHeadersInForwardedValues', ],
				[ 'shape' => 'InvalidHeadersForS3Origin', ],
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'TooManyCertificates', ],
				[ 'shape' => 'InvalidLocationCode', ],
				[ 'shape' => 'InvalidGeoRestrictionParameter', ],
				[ 'shape' => 'InvalidTTLOrder', ],
				[ 'shape' => 'InvalidWebACLId', ],
				[ 'shape' => 'TooManyOriginCustomHeaders', ],
				[ 'shape' => 'TooManyQueryStringParameters', ],
				[ 'shape' => 'InvalidQueryStringParameters', ],
				[ 'shape' => 'TooManyDistributionsWithLambdaAssociations', ],
				[ 'shape' => 'TooManyLambdaFunctionAssociations', ],
				[ 'shape' => 'InvalidLambdaFunctionAssociation', ],
				[ 'shape' => 'InvalidOriginReadTimeout', ],
				[ 'shape' => 'InvalidOriginKeepaliveTimeout', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionConfig', ],
				[ 'shape' => 'IllegalFieldLevelEncryptionConfigAssociationWithCacheBehavior', ],
				[ 'shape' => 'TooManyDistributionsAssociatedToFieldLevelEncryptionConfig', ],
			],
		],
		'UpdateFieldLevelEncryptionConfig'        => [
			'name'   => 'UpdateFieldLevelEncryptionConfig2017_10_30',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/2017-10-30/field-level-encryption/{Id}/config',
			],
			'input'  => [ 'shape' => 'UpdateFieldLevelEncryptionConfigRequest', ],
			'output' => [ 'shape' => 'UpdateFieldLevelEncryptionConfigResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'IllegalUpdate', ],
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionProfile', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionConfig', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionQueryArgProfiles', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionContentTypeProfiles', ],
				[ 'shape' => 'QueryArgProfileEmpty', ],
			],
		],
		'UpdateFieldLevelEncryptionProfile'       => [
			'name'   => 'UpdateFieldLevelEncryptionProfile2017_10_30',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/2017-10-30/field-level-encryption-profile/{Id}/config',
			],
			'input'  => [ 'shape' => 'UpdateFieldLevelEncryptionProfileRequest', ],
			'output' => [ 'shape' => 'UpdateFieldLevelEncryptionProfileResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'FieldLevelEncryptionProfileAlreadyExists', ],
				[ 'shape' => 'IllegalUpdate', ],
				[ 'shape' => 'InconsistentQuantities', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'NoSuchPublicKey', ],
				[ 'shape' => 'NoSuchFieldLevelEncryptionProfile', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'FieldLevelEncryptionProfileSizeExceeded', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionEncryptionEntities', ],
				[ 'shape' => 'TooManyFieldLevelEncryptionFieldPatterns', ],
			],
		],
		'UpdatePublicKey'                         => [
			'name'   => 'UpdatePublicKey2017_10_30',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/2017-10-30/public-key/{Id}/config',
			],
			'input'  => [ 'shape' => 'UpdatePublicKeyRequest', ],
			'output' => [ 'shape' => 'UpdatePublicKeyResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'CannotChangeImmutablePublicKeyFields', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'IllegalUpdate', ],
				[ 'shape' => 'NoSuchPublicKey', ],
				[ 'shape' => 'PreconditionFailed', ],
			],
		],
		'UpdateStreamingDistribution'             => [
			'name'   => 'UpdateStreamingDistribution2017_10_30',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/2017-10-30/streaming-distribution/{Id}/config',
			],
			'input'  => [ 'shape' => 'UpdateStreamingDistributionRequest', ],
			'output' => [ 'shape' => 'UpdateStreamingDistributionResult', ],
			'errors' => [
				[ 'shape' => 'AccessDenied', ],
				[ 'shape' => 'CNAMEAlreadyExists', ],
				[ 'shape' => 'IllegalUpdate', ],
				[ 'shape' => 'InvalidIfMatchVersion', ],
				[ 'shape' => 'MissingBody', ],
				[ 'shape' => 'NoSuchStreamingDistribution', ],
				[ 'shape' => 'PreconditionFailed', ],
				[ 'shape' => 'TooManyStreamingDistributionCNAMEs', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidOriginAccessIdentity', ],
				[ 'shape' => 'TooManyTrustedSigners', ],
				[ 'shape' => 'TrustedSignerDoesNotExist', ],
				[ 'shape' => 'InconsistentQuantities', ],
			],
		],
	],
	'shapes'     => [
		'AccessDenied'                                                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 403, ],
			'exception' => true,
		],
		'ActiveTrustedSigners'                                          => [
			'type'     => 'structure',
			'required' => [ 'Enabled', 'Quantity', ],
			'members'  => [
				'Enabled'  => [ 'shape' => 'boolean', ],
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'SignerList', ],
			],
		],
		'AliasList'                                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'string', 'locationName' => 'CNAME', ],
		],
		'Aliases'                                                       => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'AliasList', ],
			],
		],
		'AllowedMethods'                                                => [
			'type'     => 'structure',
			'required' => [ 'Quantity', 'Items', ],
			'members'  => [
				'Quantity'      => [ 'shape' => 'integer', ],
				'Items'         => [ 'shape' => 'MethodsList', ],
				'CachedMethods' => [ 'shape' => 'CachedMethods', ],
			],
		],
		'AwsAccountNumberList'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'string', 'locationName' => 'AwsAccountNumber', ],
		],
		'BatchTooLarge'                                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 413, ],
			'exception' => true,
		],
		'CNAMEAlreadyExists'                                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'CacheBehavior'                                                 => [
			'type'     => 'structure',
			'required' => [
				'PathPattern',
				'TargetOriginId',
				'ForwardedValues',
				'TrustedSigners',
				'ViewerProtocolPolicy',
				'MinTTL',
			],
			'members'  => [
				'PathPattern'                => [ 'shape' => 'string', ],
				'TargetOriginId'             => [ 'shape' => 'string', ],
				'ForwardedValues'            => [ 'shape' => 'ForwardedValues', ],
				'TrustedSigners'             => [ 'shape' => 'TrustedSigners', ],
				'ViewerProtocolPolicy'       => [ 'shape' => 'ViewerProtocolPolicy', ],
				'MinTTL'                     => [ 'shape' => 'long', ],
				'AllowedMethods'             => [ 'shape' => 'AllowedMethods', ],
				'SmoothStreaming'            => [ 'shape' => 'boolean', ],
				'DefaultTTL'                 => [ 'shape' => 'long', ],
				'MaxTTL'                     => [ 'shape' => 'long', ],
				'Compress'                   => [ 'shape' => 'boolean', ],
				'LambdaFunctionAssociations' => [ 'shape' => 'LambdaFunctionAssociations', ],
				'FieldLevelEncryptionId'     => [ 'shape' => 'string', ],
			],
		],
		'CacheBehaviorList'                                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CacheBehavior', 'locationName' => 'CacheBehavior', ],
		],
		'CacheBehaviors'                                                => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'CacheBehaviorList', ],
			],
		],
		'CachedMethods'                                                 => [
			'type'     => 'structure',
			'required' => [ 'Quantity', 'Items', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'MethodsList', ],
			],
		],
		'CannotChangeImmutablePublicKeyFields'                          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'CertificateSource'                                             => [
			'type' => 'string',
			'enum' => [ 'cloudfront', 'iam', 'acm', ],
		],
		'CloudFrontOriginAccessIdentity'                                => [
			'type'     => 'structure',
			'required' => [ 'Id', 'S3CanonicalUserId', ],
			'members'  => [
				'Id'                                   => [ 'shape' => 'string', ],
				'S3CanonicalUserId'                    => [ 'shape' => 'string', ],
				'CloudFrontOriginAccessIdentityConfig' => [ 'shape' => 'CloudFrontOriginAccessIdentityConfig', ],
			],
		],
		'CloudFrontOriginAccessIdentityAlreadyExists'                   => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'CloudFrontOriginAccessIdentityConfig'                          => [
			'type'     => 'structure',
			'required' => [ 'CallerReference', 'Comment', ],
			'members'  => [
				'CallerReference' => [ 'shape' => 'string', ],
				'Comment'         => [ 'shape' => 'string', ],
			],
		],
		'CloudFrontOriginAccessIdentityInUse'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'CloudFrontOriginAccessIdentityList'                            => [
			'type'     => 'structure',
			'required' => [
				'Marker',
				'MaxItems',
				'IsTruncated',
				'Quantity',
			],
			'members'  => [
				'Marker'      => [ 'shape' => 'string', ],
				'NextMarker'  => [ 'shape' => 'string', ],
				'MaxItems'    => [ 'shape' => 'integer', ],
				'IsTruncated' => [ 'shape' => 'boolean', ],
				'Quantity'    => [ 'shape' => 'integer', ],
				'Items'       => [ 'shape' => 'CloudFrontOriginAccessIdentitySummaryList', ],
			],
		],
		'CloudFrontOriginAccessIdentitySummary'                         => [
			'type'     => 'structure',
			'required' => [ 'Id', 'S3CanonicalUserId', 'Comment', ],
			'members'  => [
				'Id'                => [ 'shape' => 'string', ],
				'S3CanonicalUserId' => [ 'shape' => 'string', ],
				'Comment'           => [ 'shape' => 'string', ],
			],
		],
		'CloudFrontOriginAccessIdentitySummaryList'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CloudFrontOriginAccessIdentitySummary',
				'locationName' => 'CloudFrontOriginAccessIdentitySummary',
			],
		],
		'ContentTypeProfile'                                            => [
			'type'     => 'structure',
			'required' => [ 'Format', 'ContentType', ],
			'members'  => [
				'Format'      => [ 'shape' => 'Format', ],
				'ProfileId'   => [ 'shape' => 'string', ],
				'ContentType' => [ 'shape' => 'string', ],
			],
		],
		'ContentTypeProfileConfig'                                      => [
			'type'     => 'structure',
			'required' => [ 'ForwardWhenContentTypeIsUnknown', ],
			'members'  => [
				'ForwardWhenContentTypeIsUnknown' => [ 'shape' => 'boolean', ],
				'ContentTypeProfiles'             => [ 'shape' => 'ContentTypeProfiles', ],
			],
		],
		'ContentTypeProfileList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ContentTypeProfile',
				'locationName' => 'ContentTypeProfile',
			],
		],
		'ContentTypeProfiles'                                           => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'ContentTypeProfileList', ],
			],
		],
		'CookieNameList'                                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'string',
				'locationName' => 'Name',
			],
		],
		'CookieNames'                                                   => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'CookieNameList', ],
			],
		],
		'CookiePreference'                                              => [
			'type'     => 'structure',
			'required' => [ 'Forward', ],
			'members'  => [
				'Forward'          => [ 'shape' => 'ItemSelection', ],
				'WhitelistedNames' => [ 'shape' => 'CookieNames', ],
			],
		],
		'CreateCloudFrontOriginAccessIdentityRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'CloudFrontOriginAccessIdentityConfig', ],
			'members'  => [
				'CloudFrontOriginAccessIdentityConfig' => [
					'shape'        => 'CloudFrontOriginAccessIdentityConfig',
					'locationName' => 'CloudFrontOriginAccessIdentityConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'CloudFrontOriginAccessIdentityConfig',
		],
		'CreateCloudFrontOriginAccessIdentityResult'                    => [
			'type'    => 'structure',
			'members' => [
				'CloudFrontOriginAccessIdentity' => [ 'shape' => 'CloudFrontOriginAccessIdentity', ],
				'Location'                       => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'                           => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'CloudFrontOriginAccessIdentity',
		],
		'CreateDistributionRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'DistributionConfig', ],
			'members'  => [
				'DistributionConfig' => [
					'shape'        => 'DistributionConfig',
					'locationName' => 'DistributionConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'DistributionConfig',
		],
		'CreateDistributionResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'Distribution' => [ 'shape' => 'Distribution', ],
				'Location'     => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'         => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'Distribution',
		],
		'CreateDistributionWithTagsRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'DistributionConfigWithTags', ],
			'members'  => [
				'DistributionConfigWithTags' => [
					'shape'        => 'DistributionConfigWithTags',
					'locationName' => 'DistributionConfigWithTags',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'DistributionConfigWithTags',
		],
		'CreateDistributionWithTagsResult'                              => [
			'type'    => 'structure',
			'members' => [
				'Distribution' => [ 'shape' => 'Distribution', ],
				'Location'     => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'         => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'Distribution',
		],
		'CreateFieldLevelEncryptionConfigRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'FieldLevelEncryptionConfig', ],
			'members'  => [
				'FieldLevelEncryptionConfig' => [
					'shape'        => 'FieldLevelEncryptionConfig',
					'locationName' => 'FieldLevelEncryptionConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'FieldLevelEncryptionConfig',
		],
		'CreateFieldLevelEncryptionConfigResult'                        => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryption' => [ 'shape' => 'FieldLevelEncryption', ],
				'Location'             => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'                 => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryption',
		],
		'CreateFieldLevelEncryptionProfileRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'FieldLevelEncryptionProfileConfig', ],
			'members'  => [
				'FieldLevelEncryptionProfileConfig' => [
					'shape'        => 'FieldLevelEncryptionProfileConfig',
					'locationName' => 'FieldLevelEncryptionProfileConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'FieldLevelEncryptionProfileConfig',
		],
		'CreateFieldLevelEncryptionProfileResult'                       => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryptionProfile' => [ 'shape' => 'FieldLevelEncryptionProfile', ],
				'Location'                    => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'                        => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryptionProfile',
		],
		'CreateInvalidationRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'DistributionId', 'InvalidationBatch', ],
			'members'  => [
				'DistributionId'    => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'DistributionId',
				],
				'InvalidationBatch' => [
					'shape'        => 'InvalidationBatch',
					'locationName' => 'InvalidationBatch',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'InvalidationBatch',
		],
		'CreateInvalidationResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'Location'     => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'Invalidation' => [ 'shape' => 'Invalidation', ],
			],
			'payload' => 'Invalidation',
		],
		'CreatePublicKeyRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'PublicKeyConfig', ],
			'members'  => [
				'PublicKeyConfig' => [
					'shape'        => 'PublicKeyConfig',
					'locationName' => 'PublicKeyConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'PublicKeyConfig',
		],
		'CreatePublicKeyResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'PublicKey' => [ 'shape' => 'PublicKey', ],
				'Location'  => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'      => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'PublicKey',
		],
		'CreateStreamingDistributionRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'StreamingDistributionConfig', ],
			'members'  => [
				'StreamingDistributionConfig' => [
					'shape'        => 'StreamingDistributionConfig',
					'locationName' => 'StreamingDistributionConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'StreamingDistributionConfig',
		],
		'CreateStreamingDistributionResult'                             => [
			'type'    => 'structure',
			'members' => [
				'StreamingDistribution' => [ 'shape' => 'StreamingDistribution', ],
				'Location'              => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'                  => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'StreamingDistribution',
		],
		'CreateStreamingDistributionWithTagsRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'StreamingDistributionConfigWithTags', ],
			'members'  => [
				'StreamingDistributionConfigWithTags' => [
					'shape'        => 'StreamingDistributionConfigWithTags',
					'locationName' => 'StreamingDistributionConfigWithTags',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'StreamingDistributionConfigWithTags',
		],
		'CreateStreamingDistributionWithTagsResult'                     => [
			'type'    => 'structure',
			'members' => [
				'StreamingDistribution' => [ 'shape' => 'StreamingDistribution', ],
				'Location'              => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'Location',
				],
				'ETag'                  => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'StreamingDistribution',
		],
		'CustomErrorResponse'                                           => [
			'type'     => 'structure',
			'required' => [ 'ErrorCode', ],
			'members'  => [
				'ErrorCode'          => [ 'shape' => 'integer', ],
				'ResponsePagePath'   => [ 'shape' => 'string', ],
				'ResponseCode'       => [ 'shape' => 'string', ],
				'ErrorCachingMinTTL' => [ 'shape' => 'long', ],
			],
		],
		'CustomErrorResponseList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CustomErrorResponse',
				'locationName' => 'CustomErrorResponse',
			],
		],
		'CustomErrorResponses'                                          => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'CustomErrorResponseList', ],
			],
		],
		'CustomHeaders'                                                 => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'OriginCustomHeadersList', ],
			],
		],
		'CustomOriginConfig'                                            => [
			'type'     => 'structure',
			'required' => [
				'HTTPPort',
				'HTTPSPort',
				'OriginProtocolPolicy',
			],
			'members'  => [
				'HTTPPort'               => [ 'shape' => 'integer', ],
				'HTTPSPort'              => [ 'shape' => 'integer', ],
				'OriginProtocolPolicy'   => [ 'shape' => 'OriginProtocolPolicy', ],
				'OriginSslProtocols'     => [ 'shape' => 'OriginSslProtocols', ],
				'OriginReadTimeout'      => [ 'shape' => 'integer', ],
				'OriginKeepaliveTimeout' => [ 'shape' => 'integer', ],
			],
		],
		'DefaultCacheBehavior'                                          => [
			'type'     => 'structure',
			'required' => [
				'TargetOriginId',
				'ForwardedValues',
				'TrustedSigners',
				'ViewerProtocolPolicy',
				'MinTTL',
			],
			'members'  => [
				'TargetOriginId'             => [ 'shape' => 'string', ],
				'ForwardedValues'            => [ 'shape' => 'ForwardedValues', ],
				'TrustedSigners'             => [ 'shape' => 'TrustedSigners', ],
				'ViewerProtocolPolicy'       => [ 'shape' => 'ViewerProtocolPolicy', ],
				'MinTTL'                     => [ 'shape' => 'long', ],
				'AllowedMethods'             => [ 'shape' => 'AllowedMethods', ],
				'SmoothStreaming'            => [ 'shape' => 'boolean', ],
				'DefaultTTL'                 => [ 'shape' => 'long', ],
				'MaxTTL'                     => [ 'shape' => 'long', ],
				'Compress'                   => [ 'shape' => 'boolean', ],
				'LambdaFunctionAssociations' => [ 'shape' => 'LambdaFunctionAssociations', ],
				'FieldLevelEncryptionId'     => [ 'shape' => 'string', ],
			],
		],
		'DeleteCloudFrontOriginAccessIdentityRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch' => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
		],
		'DeleteDistributionRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch' => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
		],
		'DeleteFieldLevelEncryptionConfigRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch' => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
		],
		'DeleteFieldLevelEncryptionProfileRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch' => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
		],
		'DeletePublicKeyRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch' => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
		],
		'DeleteStreamingDistributionRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch' => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
		],
		'Distribution'                                                  => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'ARN',
				'Status',
				'LastModifiedTime',
				'InProgressInvalidationBatches',
				'DomainName',
				'ActiveTrustedSigners',
				'DistributionConfig',
			],
			'members'  => [
				'Id'                            => [ 'shape' => 'string', ],
				'ARN'                           => [ 'shape' => 'string', ],
				'Status'                        => [ 'shape' => 'string', ],
				'LastModifiedTime'              => [ 'shape' => 'timestamp', ],
				'InProgressInvalidationBatches' => [ 'shape' => 'integer', ],
				'DomainName'                    => [ 'shape' => 'string', ],
				'ActiveTrustedSigners'          => [ 'shape' => 'ActiveTrustedSigners', ],
				'DistributionConfig'            => [ 'shape' => 'DistributionConfig', ],
			],
		],
		'DistributionAlreadyExists'                                     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'DistributionConfig'                                            => [
			'type'     => 'structure',
			'required' => [
				'CallerReference',
				'Origins',
				'DefaultCacheBehavior',
				'Comment',
				'Enabled',
			],
			'members'  => [
				'CallerReference'      => [ 'shape' => 'string', ],
				'Aliases'              => [ 'shape' => 'Aliases', ],
				'DefaultRootObject'    => [ 'shape' => 'string', ],
				'Origins'              => [ 'shape' => 'Origins', ],
				'DefaultCacheBehavior' => [ 'shape' => 'DefaultCacheBehavior', ],
				'CacheBehaviors'       => [ 'shape' => 'CacheBehaviors', ],
				'CustomErrorResponses' => [ 'shape' => 'CustomErrorResponses', ],
				'Comment'              => [ 'shape' => 'string', ],
				'Logging'              => [ 'shape' => 'LoggingConfig', ],
				'PriceClass'           => [ 'shape' => 'PriceClass', ],
				'Enabled'              => [ 'shape' => 'boolean', ],
				'ViewerCertificate'    => [ 'shape' => 'ViewerCertificate', ],
				'Restrictions'         => [ 'shape' => 'Restrictions', ],
				'WebACLId'             => [ 'shape' => 'string', ],
				'HttpVersion'          => [ 'shape' => 'HttpVersion', ],
				'IsIPV6Enabled'        => [ 'shape' => 'boolean', ],
			],
		],
		'DistributionConfigWithTags'                                    => [
			'type'     => 'structure',
			'required' => [ 'DistributionConfig', 'Tags', ],
			'members'  => [
				'DistributionConfig' => [ 'shape' => 'DistributionConfig', ],
				'Tags'               => [ 'shape' => 'Tags', ],
			],
		],
		'DistributionList'                                              => [
			'type'     => 'structure',
			'required' => [
				'Marker',
				'MaxItems',
				'IsTruncated',
				'Quantity',
			],
			'members'  => [
				'Marker'      => [ 'shape' => 'string', ],
				'NextMarker'  => [ 'shape' => 'string', ],
				'MaxItems'    => [ 'shape' => 'integer', ],
				'IsTruncated' => [ 'shape' => 'boolean', ],
				'Quantity'    => [ 'shape' => 'integer', ],
				'Items'       => [ 'shape' => 'DistributionSummaryList', ],
			],
		],
		'DistributionNotDisabled'                                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'DistributionSummary'                                           => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'ARN',
				'Status',
				'LastModifiedTime',
				'DomainName',
				'Aliases',
				'Origins',
				'DefaultCacheBehavior',
				'CacheBehaviors',
				'CustomErrorResponses',
				'Comment',
				'PriceClass',
				'Enabled',
				'ViewerCertificate',
				'Restrictions',
				'WebACLId',
				'HttpVersion',
				'IsIPV6Enabled',
			],
			'members'  => [
				'Id'                   => [ 'shape' => 'string', ],
				'ARN'                  => [ 'shape' => 'string', ],
				'Status'               => [ 'shape' => 'string', ],
				'LastModifiedTime'     => [ 'shape' => 'timestamp', ],
				'DomainName'           => [ 'shape' => 'string', ],
				'Aliases'              => [ 'shape' => 'Aliases', ],
				'Origins'              => [ 'shape' => 'Origins', ],
				'DefaultCacheBehavior' => [ 'shape' => 'DefaultCacheBehavior', ],
				'CacheBehaviors'       => [ 'shape' => 'CacheBehaviors', ],
				'CustomErrorResponses' => [ 'shape' => 'CustomErrorResponses', ],
				'Comment'              => [ 'shape' => 'string', ],
				'PriceClass'           => [ 'shape' => 'PriceClass', ],
				'Enabled'              => [ 'shape' => 'boolean', ],
				'ViewerCertificate'    => [ 'shape' => 'ViewerCertificate', ],
				'Restrictions'         => [ 'shape' => 'Restrictions', ],
				'WebACLId'             => [ 'shape' => 'string', ],
				'HttpVersion'          => [ 'shape' => 'HttpVersion', ],
				'IsIPV6Enabled'        => [ 'shape' => 'boolean', ],
			],
		],
		'DistributionSummaryList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DistributionSummary',
				'locationName' => 'DistributionSummary',
			],
		],
		'EncryptionEntities'                                            => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'EncryptionEntityList', ],
			],
		],
		'EncryptionEntity'                                              => [
			'type'     => 'structure',
			'required' => [
				'PublicKeyId',
				'ProviderId',
				'FieldPatterns',
			],
			'members'  => [
				'PublicKeyId'   => [ 'shape' => 'string', ],
				'ProviderId'    => [ 'shape' => 'string', ],
				'FieldPatterns' => [ 'shape' => 'FieldPatterns', ],
			],
		],
		'EncryptionEntityList'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EncryptionEntity',
				'locationName' => 'EncryptionEntity',
			],
		],
		'EventType'                                                     => [
			'type' => 'string',
			'enum' => [
				'viewer-request',
				'viewer-response',
				'origin-request',
				'origin-response',
			],
		],
		'FieldLevelEncryption'                                          => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'LastModifiedTime',
				'FieldLevelEncryptionConfig',
			],
			'members'  => [
				'Id'                         => [ 'shape' => 'string', ],
				'LastModifiedTime'           => [ 'shape' => 'timestamp', ],
				'FieldLevelEncryptionConfig' => [ 'shape' => 'FieldLevelEncryptionConfig', ],
			],
		],
		'FieldLevelEncryptionConfig'                                    => [
			'type'     => 'structure',
			'required' => [ 'CallerReference', ],
			'members'  => [
				'CallerReference'          => [ 'shape' => 'string', ],
				'Comment'                  => [ 'shape' => 'string', ],
				'QueryArgProfileConfig'    => [ 'shape' => 'QueryArgProfileConfig', ],
				'ContentTypeProfileConfig' => [ 'shape' => 'ContentTypeProfileConfig', ],
			],
		],
		'FieldLevelEncryptionConfigAlreadyExists'                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'FieldLevelEncryptionConfigInUse'                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'FieldLevelEncryptionList'                                      => [
			'type'     => 'structure',
			'required' => [ 'MaxItems', 'Quantity', ],
			'members'  => [
				'NextMarker' => [ 'shape' => 'string', ],
				'MaxItems'   => [ 'shape' => 'integer', ],
				'Quantity'   => [ 'shape' => 'integer', ],
				'Items'      => [ 'shape' => 'FieldLevelEncryptionSummaryList', ],
			],
		],
		'FieldLevelEncryptionProfile'                                   => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'LastModifiedTime',
				'FieldLevelEncryptionProfileConfig',
			],
			'members'  => [
				'Id'                                => [ 'shape' => 'string', ],
				'LastModifiedTime'                  => [ 'shape' => 'timestamp', ],
				'FieldLevelEncryptionProfileConfig' => [ 'shape' => 'FieldLevelEncryptionProfileConfig', ],
			],
		],
		'FieldLevelEncryptionProfileAlreadyExists'                      => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'FieldLevelEncryptionProfileConfig'                             => [
			'type'     => 'structure',
			'required' => [
				'Name',
				'CallerReference',
				'EncryptionEntities',
			],
			'members'  => [
				'Name'               => [ 'shape' => 'string', ],
				'CallerReference'    => [ 'shape' => 'string', ],
				'Comment'            => [ 'shape' => 'string', ],
				'EncryptionEntities' => [ 'shape' => 'EncryptionEntities', ],
			],
		],
		'FieldLevelEncryptionProfileInUse'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'FieldLevelEncryptionProfileList'                               => [
			'type'     => 'structure',
			'required' => [ 'MaxItems', 'Quantity', ],
			'members'  => [
				'NextMarker' => [ 'shape' => 'string', ],
				'MaxItems'   => [ 'shape' => 'integer', ],
				'Quantity'   => [ 'shape' => 'integer', ],
				'Items'      => [ 'shape' => 'FieldLevelEncryptionProfileSummaryList', ],
			],
		],
		'FieldLevelEncryptionProfileSizeExceeded'                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'FieldLevelEncryptionProfileSummary'                            => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'LastModifiedTime',
				'Name',
				'EncryptionEntities',
			],
			'members'  => [
				'Id'                 => [ 'shape' => 'string', ],
				'LastModifiedTime'   => [ 'shape' => 'timestamp', ],
				'Name'               => [ 'shape' => 'string', ],
				'EncryptionEntities' => [ 'shape' => 'EncryptionEntities', ],
				'Comment'            => [ 'shape' => 'string', ],
			],
		],
		'FieldLevelEncryptionProfileSummaryList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FieldLevelEncryptionProfileSummary',
				'locationName' => 'FieldLevelEncryptionProfileSummary',
			],
		],
		'FieldLevelEncryptionSummary'                                   => [
			'type'     => 'structure',
			'required' => [ 'Id', 'LastModifiedTime', ],
			'members'  => [
				'Id'                       => [ 'shape' => 'string', ],
				'LastModifiedTime'         => [ 'shape' => 'timestamp', ],
				'Comment'                  => [ 'shape' => 'string', ],
				'QueryArgProfileConfig'    => [ 'shape' => 'QueryArgProfileConfig', ],
				'ContentTypeProfileConfig' => [ 'shape' => 'ContentTypeProfileConfig', ],
			],
		],
		'FieldLevelEncryptionSummaryList'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'FieldLevelEncryptionSummary',
				'locationName' => 'FieldLevelEncryptionSummary',
			],
		],
		'FieldPatternList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'string',
				'locationName' => 'FieldPattern',
			],
		],
		'FieldPatterns'                                                 => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'FieldPatternList', ],
			],
		],
		'Format'                                                        => [
			'type' => 'string',
			'enum' => [ 'URLEncoded', ],
		],
		'ForwardedValues'                                               => [
			'type'     => 'structure',
			'required' => [ 'QueryString', 'Cookies', ],
			'members'  => [
				'QueryString'          => [ 'shape' => 'boolean', ],
				'Cookies'              => [ 'shape' => 'CookiePreference', ],
				'Headers'              => [ 'shape' => 'Headers', ],
				'QueryStringCacheKeys' => [ 'shape' => 'QueryStringCacheKeys', ],
			],
		],
		'GeoRestriction'                                                => [
			'type'     => 'structure',
			'required' => [ 'RestrictionType', 'Quantity', ],
			'members'  => [
				'RestrictionType' => [ 'shape' => 'GeoRestrictionType', ],
				'Quantity'        => [ 'shape' => 'integer', ],
				'Items'           => [ 'shape' => 'LocationList', ],
			],
		],
		'GeoRestrictionType'                                            => [
			'type' => 'string',
			'enum' => [ 'blacklist', 'whitelist', 'none', ],
		],
		'GetCloudFrontOriginAccessIdentityConfigRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetCloudFrontOriginAccessIdentityConfigResult'                 => [
			'type'    => 'structure',
			'members' => [
				'CloudFrontOriginAccessIdentityConfig' => [ 'shape' => 'CloudFrontOriginAccessIdentityConfig', ],
				'ETag'                                 => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'CloudFrontOriginAccessIdentityConfig',
		],
		'GetCloudFrontOriginAccessIdentityRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetCloudFrontOriginAccessIdentityResult'                       => [
			'type'    => 'structure',
			'members' => [
				'CloudFrontOriginAccessIdentity' => [ 'shape' => 'CloudFrontOriginAccessIdentity', ],
				'ETag'                           => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'CloudFrontOriginAccessIdentity',
		],
		'GetDistributionConfigRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetDistributionConfigResult'                                   => [
			'type'    => 'structure',
			'members' => [
				'DistributionConfig' => [ 'shape' => 'DistributionConfig', ],
				'ETag'               => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'DistributionConfig',
		],
		'GetDistributionRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetDistributionResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'Distribution' => [ 'shape' => 'Distribution', ],
				'ETag'         => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'Distribution',
		],
		'GetFieldLevelEncryptionConfigRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetFieldLevelEncryptionConfigResult'                           => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryptionConfig' => [ 'shape' => 'FieldLevelEncryptionConfig', ],
				'ETag'                       => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryptionConfig',
		],
		'GetFieldLevelEncryptionProfileConfigRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetFieldLevelEncryptionProfileConfigResult'                    => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryptionProfileConfig' => [ 'shape' => 'FieldLevelEncryptionProfileConfig', ],
				'ETag'                              => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryptionProfileConfig',
		],
		'GetFieldLevelEncryptionProfileRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetFieldLevelEncryptionProfileResult'                          => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryptionProfile' => [ 'shape' => 'FieldLevelEncryptionProfile', ],
				'ETag'                        => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryptionProfile',
		],
		'GetFieldLevelEncryptionRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetFieldLevelEncryptionResult'                                 => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryption' => [ 'shape' => 'FieldLevelEncryption', ],
				'ETag'                 => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryption',
		],
		'GetInvalidationRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'DistributionId', 'Id', ],
			'members'  => [
				'DistributionId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'DistributionId',
				],
				'Id'             => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetInvalidationResult'                                         => [
			'type'    => 'structure',
			'members' => [ 'Invalidation' => [ 'shape' => 'Invalidation', ], ],
			'payload' => 'Invalidation',
		],
		'GetPublicKeyConfigRequest'                                     => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetPublicKeyConfigResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'PublicKeyConfig' => [ 'shape' => 'PublicKeyConfig', ],
				'ETag'            => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'PublicKeyConfig',
		],
		'GetPublicKeyRequest'                                           => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetPublicKeyResult'                                            => [
			'type'    => 'structure',
			'members' => [
				'PublicKey' => [ 'shape' => 'PublicKey', ],
				'ETag'      => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'PublicKey',
		],
		'GetStreamingDistributionConfigRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetStreamingDistributionConfigResult'                          => [
			'type'    => 'structure',
			'members' => [
				'StreamingDistributionConfig' => [ 'shape' => 'StreamingDistributionConfig', ],
				'ETag'                        => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'StreamingDistributionConfig',
		],
		'GetStreamingDistributionRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetStreamingDistributionResult'                                => [
			'type'    => 'structure',
			'members' => [
				'StreamingDistribution' => [ 'shape' => 'StreamingDistribution', ],
				'ETag'                  => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'StreamingDistribution',
		],
		'HeaderList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'string',
				'locationName' => 'Name',
			],
		],
		'Headers'                                                       => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'HeaderList', ],
			],
		],
		'HttpVersion'                                                   => [
			'type' => 'string',
			'enum' => [ 'http1.1', 'http2', ],
		],
		'IllegalFieldLevelEncryptionConfigAssociationWithCacheBehavior' => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'IllegalUpdate'                                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InconsistentQuantities'                                        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidArgument'                                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidDefaultRootObject'                                      => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidErrorCode'                                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidForwardCookies'                                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidGeoRestrictionParameter'                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidHeadersForS3Origin'                                     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidIfMatchVersion'                                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidLambdaFunctionAssociation'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidLocationCode'                                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidMinimumProtocolVersion'                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidOrigin'                                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidOriginAccessIdentity'                                   => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidOriginKeepaliveTimeout'                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidOriginReadTimeout'                                      => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidProtocolSettings'                                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidQueryStringParameters'                                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidRelativePath'                                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidRequiredProtocol'                                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidResponseCode'                                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidTTLOrder'                                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidTagging'                                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidViewerCertificate'                                      => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidWebACLId'                                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'Invalidation'                                                  => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'Status',
				'CreateTime',
				'InvalidationBatch',
			],
			'members'  => [
				'Id'                => [ 'shape' => 'string', ],
				'Status'            => [ 'shape' => 'string', ],
				'CreateTime'        => [ 'shape' => 'timestamp', ],
				'InvalidationBatch' => [ 'shape' => 'InvalidationBatch', ],
			],
		],
		'InvalidationBatch'                                             => [
			'type'     => 'structure',
			'required' => [
				'Paths',
				'CallerReference',
			],
			'members'  => [
				'Paths'           => [ 'shape' => 'Paths', ],
				'CallerReference' => [ 'shape' => 'string', ],
			],
		],
		'InvalidationList'                                              => [
			'type'     => 'structure',
			'required' => [
				'Marker',
				'MaxItems',
				'IsTruncated',
				'Quantity',
			],
			'members'  => [
				'Marker'      => [ 'shape' => 'string', ],
				'NextMarker'  => [ 'shape' => 'string', ],
				'MaxItems'    => [ 'shape' => 'integer', ],
				'IsTruncated' => [ 'shape' => 'boolean', ],
				'Quantity'    => [ 'shape' => 'integer', ],
				'Items'       => [ 'shape' => 'InvalidationSummaryList', ],
			],
		],
		'InvalidationSummary'                                           => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'CreateTime',
				'Status',
			],
			'members'  => [
				'Id'         => [ 'shape' => 'string', ],
				'CreateTime' => [ 'shape' => 'timestamp', ],
				'Status'     => [ 'shape' => 'string', ],
			],
		],
		'InvalidationSummaryList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InvalidationSummary',
				'locationName' => 'InvalidationSummary',
			],
		],
		'ItemSelection'                                                 => [
			'type' => 'string',
			'enum' => [ 'none', 'whitelist', 'all', ],
		],
		'KeyPairIdList'                                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'string',
				'locationName' => 'KeyPairId',
			],
		],
		'KeyPairIds'                                                    => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'KeyPairIdList', ],
			],
		],
		'LambdaFunctionARN'                                             => [ 'type' => 'string', ],
		'LambdaFunctionAssociation'                                     => [
			'type'     => 'structure',
			'required' => [
				'LambdaFunctionARN',
				'EventType',
			],
			'members'  => [
				'LambdaFunctionARN' => [ 'shape' => 'LambdaFunctionARN', ],
				'EventType'         => [ 'shape' => 'EventType', ],
			],
		],
		'LambdaFunctionAssociationList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'LambdaFunctionAssociation',
				'locationName' => 'LambdaFunctionAssociation',
			],
		],
		'LambdaFunctionAssociations'                                    => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'LambdaFunctionAssociationList', ],
			],
		],
		'ListCloudFrontOriginAccessIdentitiesRequest'                   => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems' => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListCloudFrontOriginAccessIdentitiesResult'                    => [
			'type'    => 'structure',
			'members' => [ 'CloudFrontOriginAccessIdentityList' => [ 'shape' => 'CloudFrontOriginAccessIdentityList', ], ],
			'payload' => 'CloudFrontOriginAccessIdentityList',
		],
		'ListDistributionsByWebACLIdRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'WebACLId', ],
			'members'  => [
				'Marker'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems' => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
				'WebACLId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'WebACLId',
				],
			],
		],
		'ListDistributionsByWebACLIdResult'                             => [
			'type'    => 'structure',
			'members' => [ 'DistributionList' => [ 'shape' => 'DistributionList', ], ],
			'payload' => 'DistributionList',
		],
		'ListDistributionsRequest'                                      => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems' => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListDistributionsResult'                                       => [
			'type'    => 'structure',
			'members' => [ 'DistributionList' => [ 'shape' => 'DistributionList', ], ],
			'payload' => 'DistributionList',
		],
		'ListFieldLevelEncryptionConfigsRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems' => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListFieldLevelEncryptionConfigsResult'                         => [
			'type'    => 'structure',
			'members' => [ 'FieldLevelEncryptionList' => [ 'shape' => 'FieldLevelEncryptionList', ], ],
			'payload' => 'FieldLevelEncryptionList',
		],
		'ListFieldLevelEncryptionProfilesRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems' => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListFieldLevelEncryptionProfilesResult'                        => [
			'type'    => 'structure',
			'members' => [ 'FieldLevelEncryptionProfileList' => [ 'shape' => 'FieldLevelEncryptionProfileList', ], ],
			'payload' => 'FieldLevelEncryptionProfileList',
		],
		'ListInvalidationsRequest'                                      => [
			'type'     => 'structure',
			'required' => [ 'DistributionId', ],
			'members'  => [
				'DistributionId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'DistributionId',
				],
				'Marker'         => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems'       => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListInvalidationsResult'                                       => [
			'type'    => 'structure',
			'members' => [ 'InvalidationList' => [ 'shape' => 'InvalidationList', ], ],
			'payload' => 'InvalidationList',
		],
		'ListPublicKeysRequest'                                         => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems' => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListPublicKeysResult'                                          => [
			'type'    => 'structure',
			'members' => [ 'PublicKeyList' => [ 'shape' => 'PublicKeyList', ], ],
			'payload' => 'PublicKeyList',
		],
		'ListStreamingDistributionsRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'Marker',
				],
				'MaxItems' => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'MaxItems',
				],
			],
		],
		'ListStreamingDistributionsResult'                              => [
			'type'    => 'structure',
			'members' => [ 'StreamingDistributionList' => [ 'shape' => 'StreamingDistributionList', ], ],
			'payload' => 'StreamingDistributionList',
		],
		'ListTagsForResourceRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'Resource', ],
			'members'  => [
				'Resource' => [
					'shape'        => 'ResourceARN',
					'location'     => 'querystring',
					'locationName' => 'Resource',
				],
			],
		],
		'ListTagsForResourceResult'                                     => [
			'type'     => 'structure',
			'required' => [ 'Tags', ],
			'members'  => [ 'Tags' => [ 'shape' => 'Tags', ], ],
			'payload'  => 'Tags',
		],
		'LocationList'                                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'string',
				'locationName' => 'Location',
			],
		],
		'LoggingConfig'                                                 => [
			'type'     => 'structure',
			'required' => [
				'Enabled',
				'IncludeCookies',
				'Bucket',
				'Prefix',
			],
			'members'  => [
				'Enabled'        => [ 'shape' => 'boolean', ],
				'IncludeCookies' => [ 'shape' => 'boolean', ],
				'Bucket'         => [ 'shape' => 'string', ],
				'Prefix'         => [ 'shape' => 'string', ],
			],
		],
		'Method'                                                        => [
			'type' => 'string',
			'enum' => [
				'GET',
				'HEAD',
				'POST',
				'PUT',
				'PATCH',
				'OPTIONS',
				'DELETE',
			],
		],
		'MethodsList'                                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Method',
				'locationName' => 'Method',
			],
		],
		'MinimumProtocolVersion'                                        => [
			'type' => 'string',
			'enum' => [
				'SSLv3',
				'TLSv1',
				'TLSv1_2016',
				'TLSv1.1_2016',
				'TLSv1.2_2018',
			],
		],
		'MissingBody'                                                   => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'NoSuchCloudFrontOriginAccessIdentity'                          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchDistribution'                                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchFieldLevelEncryptionConfig'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchFieldLevelEncryptionProfile'                             => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchInvalidation'                                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchOrigin'                                                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchPublicKey'                                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchResource'                                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchStreamingDistribution'                                   => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'Origin'                                                        => [
			'type'     => 'structure',
			'required' => [ 'Id', 'DomainName', ],
			'members'  => [
				'Id'                 => [ 'shape' => 'string', ],
				'DomainName'         => [ 'shape' => 'string', ],
				'OriginPath'         => [ 'shape' => 'string', ],
				'CustomHeaders'      => [ 'shape' => 'CustomHeaders', ],
				'S3OriginConfig'     => [ 'shape' => 'S3OriginConfig', ],
				'CustomOriginConfig' => [ 'shape' => 'CustomOriginConfig', ],
			],
		],
		'OriginCustomHeader'                                            => [
			'type'     => 'structure',
			'required' => [
				'HeaderName',
				'HeaderValue',
			],
			'members'  => [
				'HeaderName'  => [ 'shape' => 'string', ],
				'HeaderValue' => [ 'shape' => 'string', ],
			],
		],
		'OriginCustomHeadersList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'OriginCustomHeader',
				'locationName' => 'OriginCustomHeader',
			],
		],
		'OriginList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Origin',
				'locationName' => 'Origin',
			],
			'min'    => 1,
		],
		'OriginProtocolPolicy'                                          => [
			'type' => 'string',
			'enum' => [
				'http-only',
				'match-viewer',
				'https-only',
			],
		],
		'OriginSslProtocols'                                            => [
			'type'     => 'structure',
			'required' => [ 'Quantity', 'Items', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'SslProtocolsList', ],
			],
		],
		'Origins'                                                       => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'OriginList', ],
			],
		],
		'PathList'                                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'string',
				'locationName' => 'Path',
			],
		],
		'Paths'                                                         => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'PathList', ],
			],
		],
		'PreconditionFailed'                                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 412, ],
			'exception' => true,
		],
		'PriceClass'                                                    => [
			'type' => 'string',
			'enum' => [
				'PriceClass_100',
				'PriceClass_200',
				'PriceClass_All',
			],
		],
		'PublicKey'                                                     => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'CreatedTime',
				'PublicKeyConfig',
			],
			'members'  => [
				'Id'              => [ 'shape' => 'string', ],
				'CreatedTime'     => [ 'shape' => 'timestamp', ],
				'PublicKeyConfig' => [ 'shape' => 'PublicKeyConfig', ],
			],
		],
		'PublicKeyAlreadyExists'                                        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'PublicKeyConfig'                                               => [
			'type'     => 'structure',
			'required' => [
				'CallerReference',
				'Name',
				'EncodedKey',
			],
			'members'  => [
				'CallerReference' => [ 'shape' => 'string', ],
				'Name'            => [ 'shape' => 'string', ],
				'EncodedKey'      => [ 'shape' => 'string', ],
				'Comment'         => [ 'shape' => 'string', ],
			],
		],
		'PublicKeyInUse'                                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'PublicKeyList'                                                 => [
			'type'     => 'structure',
			'required' => [ 'MaxItems', 'Quantity', ],
			'members'  => [
				'NextMarker' => [ 'shape' => 'string', ],
				'MaxItems'   => [ 'shape' => 'integer', ],
				'Quantity'   => [ 'shape' => 'integer', ],
				'Items'      => [ 'shape' => 'PublicKeySummaryList', ],
			],
		],
		'PublicKeySummary'                                              => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'Name',
				'CreatedTime',
				'EncodedKey',
			],
			'members'  => [
				'Id'          => [ 'shape' => 'string', ],
				'Name'        => [ 'shape' => 'string', ],
				'CreatedTime' => [ 'shape' => 'timestamp', ],
				'EncodedKey'  => [ 'shape' => 'string', ],
				'Comment'     => [ 'shape' => 'string', ],
			],
		],
		'PublicKeySummaryList'                                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PublicKeySummary',
				'locationName' => 'PublicKeySummary',
			],
		],
		'QueryArgProfile'                                               => [
			'type'     => 'structure',
			'required' => [ 'QueryArg', 'ProfileId', ],
			'members'  => [
				'QueryArg'  => [ 'shape' => 'string', ],
				'ProfileId' => [ 'shape' => 'string', ],
			],
		],
		'QueryArgProfileConfig'                                         => [
			'type'     => 'structure',
			'required' => [ 'ForwardWhenQueryArgProfileIsUnknown', ],
			'members'  => [
				'ForwardWhenQueryArgProfileIsUnknown' => [ 'shape' => 'boolean', ],
				'QueryArgProfiles'                    => [ 'shape' => 'QueryArgProfiles', ],
			],
		],
		'QueryArgProfileEmpty'                                          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'QueryArgProfileList'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'QueryArgProfile',
				'locationName' => 'QueryArgProfile',
			],
		],
		'QueryArgProfiles'                                              => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'QueryArgProfileList', ],
			],
		],
		'QueryStringCacheKeys'                                          => [
			'type'     => 'structure',
			'required' => [ 'Quantity', ],
			'members'  => [
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'QueryStringCacheKeysList', ],
			],
		],
		'QueryStringCacheKeysList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'string',
				'locationName' => 'Name',
			],
		],
		'ResourceARN'                                                   => [
			'type'    => 'string',
			'pattern' => 'arn:aws:cloudfront::[0-9]+:.*',
		],
		'Restrictions'                                                  => [
			'type'     => 'structure',
			'required' => [ 'GeoRestriction', ],
			'members'  => [ 'GeoRestriction' => [ 'shape' => 'GeoRestriction', ], ],
		],
		'S3Origin'                                                      => [
			'type'     => 'structure',
			'required' => [
				'DomainName',
				'OriginAccessIdentity',
			],
			'members'  => [
				'DomainName'           => [ 'shape' => 'string', ],
				'OriginAccessIdentity' => [ 'shape' => 'string', ],
			],
		],
		'S3OriginConfig'                                                => [
			'type'     => 'structure',
			'required' => [ 'OriginAccessIdentity', ],
			'members'  => [ 'OriginAccessIdentity' => [ 'shape' => 'string', ], ],
		],
		'SSLSupportMethod'                                              => [
			'type' => 'string',
			'enum' => [ 'sni-only', 'vip', ],
		],
		'Signer'                                                        => [
			'type'    => 'structure',
			'members' => [
				'AwsAccountNumber' => [ 'shape' => 'string', ],
				'KeyPairIds'       => [ 'shape' => 'KeyPairIds', ],
			],
		],
		'SignerList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Signer',
				'locationName' => 'Signer',
			],
		],
		'SslProtocol'                                                   => [
			'type' => 'string',
			'enum' => [
				'SSLv3',
				'TLSv1',
				'TLSv1.1',
				'TLSv1.2',
			],
		],
		'SslProtocolsList'                                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SslProtocol',
				'locationName' => 'SslProtocol',
			],
		],
		'StreamingDistribution'                                         => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'ARN',
				'Status',
				'DomainName',
				'ActiveTrustedSigners',
				'StreamingDistributionConfig',
			],
			'members'  => [
				'Id'                          => [ 'shape' => 'string', ],
				'ARN'                         => [ 'shape' => 'string', ],
				'Status'                      => [ 'shape' => 'string', ],
				'LastModifiedTime'            => [ 'shape' => 'timestamp', ],
				'DomainName'                  => [ 'shape' => 'string', ],
				'ActiveTrustedSigners'        => [ 'shape' => 'ActiveTrustedSigners', ],
				'StreamingDistributionConfig' => [ 'shape' => 'StreamingDistributionConfig', ],
			],
		],
		'StreamingDistributionAlreadyExists'                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'StreamingDistributionConfig'                                   => [
			'type'     => 'structure',
			'required' => [
				'CallerReference',
				'S3Origin',
				'Comment',
				'TrustedSigners',
				'Enabled',
			],
			'members'  => [
				'CallerReference' => [ 'shape' => 'string', ],
				'S3Origin'        => [ 'shape' => 'S3Origin', ],
				'Aliases'         => [ 'shape' => 'Aliases', ],
				'Comment'         => [ 'shape' => 'string', ],
				'Logging'         => [ 'shape' => 'StreamingLoggingConfig', ],
				'TrustedSigners'  => [ 'shape' => 'TrustedSigners', ],
				'PriceClass'      => [ 'shape' => 'PriceClass', ],
				'Enabled'         => [ 'shape' => 'boolean', ],
			],
		],
		'StreamingDistributionConfigWithTags'                           => [
			'type'     => 'structure',
			'required' => [
				'StreamingDistributionConfig',
				'Tags',
			],
			'members'  => [
				'StreamingDistributionConfig' => [ 'shape' => 'StreamingDistributionConfig', ],
				'Tags'                        => [ 'shape' => 'Tags', ],
			],
		],
		'StreamingDistributionList'                                     => [
			'type'     => 'structure',
			'required' => [
				'Marker',
				'MaxItems',
				'IsTruncated',
				'Quantity',
			],
			'members'  => [
				'Marker'      => [ 'shape' => 'string', ],
				'NextMarker'  => [ 'shape' => 'string', ],
				'MaxItems'    => [ 'shape' => 'integer', ],
				'IsTruncated' => [ 'shape' => 'boolean', ],
				'Quantity'    => [ 'shape' => 'integer', ],
				'Items'       => [ 'shape' => 'StreamingDistributionSummaryList', ],
			],
		],
		'StreamingDistributionNotDisabled'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'StreamingDistributionSummary'                                  => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'ARN',
				'Status',
				'LastModifiedTime',
				'DomainName',
				'S3Origin',
				'Aliases',
				'TrustedSigners',
				'Comment',
				'PriceClass',
				'Enabled',
			],
			'members'  => [
				'Id'               => [ 'shape' => 'string', ],
				'ARN'              => [ 'shape' => 'string', ],
				'Status'           => [ 'shape' => 'string', ],
				'LastModifiedTime' => [ 'shape' => 'timestamp', ],
				'DomainName'       => [ 'shape' => 'string', ],
				'S3Origin'         => [ 'shape' => 'S3Origin', ],
				'Aliases'          => [ 'shape' => 'Aliases', ],
				'TrustedSigners'   => [ 'shape' => 'TrustedSigners', ],
				'Comment'          => [ 'shape' => 'string', ],
				'PriceClass'       => [ 'shape' => 'PriceClass', ],
				'Enabled'          => [ 'shape' => 'boolean', ],
			],
		],
		'StreamingDistributionSummaryList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'StreamingDistributionSummary',
				'locationName' => 'StreamingDistributionSummary',
			],
		],
		'StreamingLoggingConfig'                                        => [
			'type'     => 'structure',
			'required' => [
				'Enabled',
				'Bucket',
				'Prefix',
			],
			'members'  => [
				'Enabled' => [ 'shape' => 'boolean', ],
				'Bucket'  => [ 'shape' => 'string', ],
				'Prefix'  => [ 'shape' => 'string', ],
			],
		],
		'Tag'                                                           => [
			'type'     => 'structure',
			'required' => [ 'Key', ],
			'members'  => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                                        => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$',
		],
		'TagKeyList'                                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TagKey',
				'locationName' => 'Key',
			],
		],
		'TagKeys'                                                       => [
			'type'    => 'structure',
			'members' => [ 'Items' => [ 'shape' => 'TagKeyList', ], ],
		],
		'TagList'                                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Tag',
				'locationName' => 'Tag',
			],
		],
		'TagResourceRequest'                                            => [
			'type'     => 'structure',
			'required' => [ 'Resource', 'Tags', ],
			'members'  => [
				'Resource' => [
					'shape'        => 'ResourceARN',
					'location'     => 'querystring',
					'locationName' => 'Resource',
				],
				'Tags'     => [
					'shape'        => 'Tags',
					'locationName' => 'Tags',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'Tags',
		],
		'TagValue'                                                      => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 0,
			'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$',
		],
		'Tags'                                                          => [
			'type'    => 'structure',
			'members' => [ 'Items' => [ 'shape' => 'TagList', ], ],
		],
		'TooManyCacheBehaviors'                                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyCertificates'                                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyCloudFrontOriginAccessIdentities'                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyCookieNamesInWhiteList'                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyDistributionCNAMEs'                                     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyDistributions'                                          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyDistributionsAssociatedToFieldLevelEncryptionConfig'    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyDistributionsWithLambdaAssociations'                    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyFieldLevelEncryptionConfigs'                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyFieldLevelEncryptionContentTypeProfiles'                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyFieldLevelEncryptionEncryptionEntities'                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyFieldLevelEncryptionFieldPatterns'                      => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyFieldLevelEncryptionProfiles'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyFieldLevelEncryptionQueryArgProfiles'                   => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyHeadersInForwardedValues'                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyInvalidationsInProgress'                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyLambdaFunctionAssociations'                             => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyOriginCustomHeaders'                                    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyOrigins'                                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyPublicKeys'                                             => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyQueryStringParameters'                                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyStreamingDistributionCNAMEs'                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyStreamingDistributions'                                 => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyTrustedSigners'                                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TrustedSignerDoesNotExist'                                     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'string', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TrustedSigners'                                                => [
			'type'     => 'structure',
			'required' => [ 'Enabled', 'Quantity', ],
			'members'  => [
				'Enabled'  => [ 'shape' => 'boolean', ],
				'Quantity' => [ 'shape' => 'integer', ],
				'Items'    => [ 'shape' => 'AwsAccountNumberList', ],
			],
		],
		'UntagResourceRequest'                                          => [
			'type'     => 'structure',
			'required' => [ 'Resource', 'TagKeys', ],
			'members'  => [
				'Resource' => [
					'shape'        => 'ResourceARN',
					'location'     => 'querystring',
					'locationName' => 'Resource',
				],
				'TagKeys'  => [
					'shape'        => 'TagKeys',
					'locationName' => 'TagKeys',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
			],
			'payload'  => 'TagKeys',
		],
		'UpdateCloudFrontOriginAccessIdentityRequest'                   => [
			'type'     => 'structure',
			'required' => [
				'CloudFrontOriginAccessIdentityConfig',
				'Id',
			],
			'members'  => [
				'CloudFrontOriginAccessIdentityConfig' => [
					'shape'        => 'CloudFrontOriginAccessIdentityConfig',
					'locationName' => 'CloudFrontOriginAccessIdentityConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
				'Id'                                   => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch'                              => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
			'payload'  => 'CloudFrontOriginAccessIdentityConfig',
		],
		'UpdateCloudFrontOriginAccessIdentityResult'                    => [
			'type'    => 'structure',
			'members' => [
				'CloudFrontOriginAccessIdentity' => [ 'shape' => 'CloudFrontOriginAccessIdentity', ],
				'ETag'                           => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'CloudFrontOriginAccessIdentity',
		],
		'UpdateDistributionRequest'                                     => [
			'type'     => 'structure',
			'required' => [
				'DistributionConfig',
				'Id',
			],
			'members'  => [
				'DistributionConfig' => [
					'shape'        => 'DistributionConfig',
					'locationName' => 'DistributionConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
				'Id'                 => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch'            => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
			'payload'  => 'DistributionConfig',
		],
		'UpdateDistributionResult'                                      => [
			'type'    => 'structure',
			'members' => [
				'Distribution' => [ 'shape' => 'Distribution', ],
				'ETag'         => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'Distribution',
		],
		'UpdateFieldLevelEncryptionConfigRequest'                       => [
			'type'     => 'structure',
			'required' => [
				'FieldLevelEncryptionConfig',
				'Id',
			],
			'members'  => [
				'FieldLevelEncryptionConfig' => [
					'shape'        => 'FieldLevelEncryptionConfig',
					'locationName' => 'FieldLevelEncryptionConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
				'Id'                         => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch'                    => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
			'payload'  => 'FieldLevelEncryptionConfig',
		],
		'UpdateFieldLevelEncryptionConfigResult'                        => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryption' => [ 'shape' => 'FieldLevelEncryption', ],
				'ETag'                 => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryption',
		],
		'UpdateFieldLevelEncryptionProfileRequest'                      => [
			'type'     => 'structure',
			'required' => [
				'FieldLevelEncryptionProfileConfig',
				'Id',
			],
			'members'  => [
				'FieldLevelEncryptionProfileConfig' => [
					'shape'        => 'FieldLevelEncryptionProfileConfig',
					'locationName' => 'FieldLevelEncryptionProfileConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
				'Id'                                => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch'                           => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
			'payload'  => 'FieldLevelEncryptionProfileConfig',
		],
		'UpdateFieldLevelEncryptionProfileResult'                       => [
			'type'    => 'structure',
			'members' => [
				'FieldLevelEncryptionProfile' => [ 'shape' => 'FieldLevelEncryptionProfile', ],
				'ETag'                        => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'FieldLevelEncryptionProfile',
		],
		'UpdatePublicKeyRequest'                                        => [
			'type'     => 'structure',
			'required' => [ 'PublicKeyConfig', 'Id', ],
			'members'  => [
				'PublicKeyConfig' => [
					'shape'        => 'PublicKeyConfig',
					'locationName' => 'PublicKeyConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
				'Id'              => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch'         => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
			'payload'  => 'PublicKeyConfig',
		],
		'UpdatePublicKeyResult'                                         => [
			'type'    => 'structure',
			'members' => [
				'PublicKey' => [ 'shape' => 'PublicKey', ],
				'ETag'      => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'PublicKey',
		],
		'UpdateStreamingDistributionRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'StreamingDistributionConfig',
				'Id',
			],
			'members'  => [
				'StreamingDistributionConfig' => [
					'shape'        => 'StreamingDistributionConfig',
					'locationName' => 'StreamingDistributionConfig',
					'xmlNamespace' => [ 'uri' => 'http://cloudfront.amazonaws.com/doc/2017-10-30/', ],
				],
				'Id'                          => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'IfMatch'                     => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
			],
			'payload'  => 'StreamingDistributionConfig',
		],
		'UpdateStreamingDistributionResult'                             => [
			'type'    => 'structure',
			'members' => [
				'StreamingDistribution' => [ 'shape' => 'StreamingDistribution', ],
				'ETag'                  => [
					'shape'        => 'string',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
			],
			'payload' => 'StreamingDistribution',
		],
		'ViewerCertificate'                                             => [
			'type'    => 'structure',
			'members' => [
				'CloudFrontDefaultCertificate' => [ 'shape' => 'boolean', ],
				'IAMCertificateId'             => [ 'shape' => 'string', ],
				'ACMCertificateArn'            => [ 'shape' => 'string', ],
				'SSLSupportMethod'             => [ 'shape' => 'SSLSupportMethod', ],
				'MinimumProtocolVersion'       => [ 'shape' => 'MinimumProtocolVersion', ],
				'Certificate'                  => [
					'shape'      => 'string',
					'deprecated' => true,
				],
				'CertificateSource'            => [
					'shape'      => 'CertificateSource',
					'deprecated' => true,
				],
			],
		],
		'ViewerProtocolPolicy'                                          => [
			'type' => 'string',
			'enum' => [
				'allow-all',
				'https-only',
				'redirect-to-https',
			],
		],
		'boolean'                                                       => [ 'type' => 'boolean', ],
		'integer'                                                       => [ 'type' => 'integer', ],
		'long'                                                          => [ 'type' => 'long', ],
		'string'                                                        => [ 'type' => 'string', ],
		'timestamp'                                                     => [ 'type' => 'timestamp', ],
	],
];
