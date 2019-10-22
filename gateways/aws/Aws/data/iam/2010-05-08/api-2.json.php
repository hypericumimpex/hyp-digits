<?php
// This file was auto-generated from sdk-root/src/data/iam/2010-05-08/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2010-05-08',
		'endpointPrefix'      => 'iam',
		'globalEndpoint'      => 'iam.amazonaws.com',
		'protocol'            => 'query',
		'serviceAbbreviation' => 'IAM',
		'serviceFullName'     => 'AWS Identity and Access Management',
		'serviceId'           => 'IAM',
		'signatureVersion'    => 'v4',
		'uid'                 => 'iam-2010-05-08',
		'xmlNamespace'        => 'https://iam.amazonaws.com/doc/2010-05-08/',
	],
	'operations' => [
		'AddClientIDToOpenIDConnectProvider'        => [
			'name'   => 'AddClientIDToOpenIDConnectProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddClientIDToOpenIDConnectProviderRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'AddRoleToInstanceProfile'                  => [
			'name'   => 'AddRoleToInstanceProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddRoleToInstanceProfileRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'AddUserToGroup'                            => [
			'name'   => 'AddUserToGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddUserToGroupRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'AttachGroupPolicy'                         => [
			'name'   => 'AttachGroupPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachGroupPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'PolicyNotAttachableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'AttachRolePolicy'                          => [
			'name'   => 'AttachRolePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachRolePolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'PolicyNotAttachableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'AttachUserPolicy'                          => [
			'name'   => 'AttachUserPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachUserPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'PolicyNotAttachableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ChangePassword'                            => [
			'name'   => 'ChangePassword',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ChangePasswordRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidUserTypeException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityTemporarilyUnmodifiableException', ],
				[ 'shape' => 'PasswordPolicyViolationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateAccessKey'                           => [
			'name'   => 'CreateAccessKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateAccessKeyRequest', ],
			'output' => [
				'shape'         => 'CreateAccessKeyResponse',
				'resultWrapper' => 'CreateAccessKeyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateAccountAlias'                        => [
			'name'   => 'CreateAccountAlias',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateAccountAliasRequest', ],
			'errors' => [
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateGroup'                               => [
			'name'   => 'CreateGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateGroupRequest', ],
			'output' => [
				'shape'         => 'CreateGroupResponse',
				'resultWrapper' => 'CreateGroupResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateInstanceProfile'                     => [
			'name'   => 'CreateInstanceProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateInstanceProfileRequest', ],
			'output' => [
				'shape'         => 'CreateInstanceProfileResponse',
				'resultWrapper' => 'CreateInstanceProfileResult',
			],
			'errors' => [
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateLoginProfile'                        => [
			'name'   => 'CreateLoginProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateLoginProfileRequest', ],
			'output' => [
				'shape'         => 'CreateLoginProfileResponse',
				'resultWrapper' => 'CreateLoginProfileResult',
			],
			'errors' => [
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'PasswordPolicyViolationException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateOpenIDConnectProvider'               => [
			'name'   => 'CreateOpenIDConnectProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateOpenIDConnectProviderRequest', ],
			'output' => [
				'shape'         => 'CreateOpenIDConnectProviderResponse',
				'resultWrapper' => 'CreateOpenIDConnectProviderResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreatePolicy'                              => [
			'name'   => 'CreatePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreatePolicyRequest', ],
			'output' => [
				'shape'         => 'CreatePolicyResponse',
				'resultWrapper' => 'CreatePolicyResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreatePolicyVersion'                       => [
			'name'   => 'CreatePolicyVersion',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreatePolicyVersionRequest', ],
			'output' => [
				'shape'         => 'CreatePolicyVersionResponse',
				'resultWrapper' => 'CreatePolicyVersionResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateRole'                                => [
			'name'   => 'CreateRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateRoleRequest', ],
			'output' => [
				'shape'         => 'CreateRoleResponse',
				'resultWrapper' => 'CreateRoleResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateSAMLProvider'                        => [
			'name'   => 'CreateSAMLProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSAMLProviderRequest', ],
			'output' => [
				'shape'         => 'CreateSAMLProviderResponse',
				'resultWrapper' => 'CreateSAMLProviderResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateServiceLinkedRole'                   => [
			'name'   => 'CreateServiceLinkedRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateServiceLinkedRoleRequest', ],
			'output' => [
				'shape'         => 'CreateServiceLinkedRoleResponse',
				'resultWrapper' => 'CreateServiceLinkedRoleResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateServiceSpecificCredential'           => [
			'name'   => 'CreateServiceSpecificCredential',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateServiceSpecificCredentialRequest', ],
			'output' => [
				'shape'         => 'CreateServiceSpecificCredentialResponse',
				'resultWrapper' => 'CreateServiceSpecificCredentialResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceNotSupportedException', ],
			],
		],
		'CreateUser'                                => [
			'name'   => 'CreateUser',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateUserRequest', ],
			'output' => [
				'shape'         => 'CreateUserResponse',
				'resultWrapper' => 'CreateUserResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'CreateVirtualMFADevice'                    => [
			'name'   => 'CreateVirtualMFADevice',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateVirtualMFADeviceRequest', ],
			'output' => [
				'shape'         => 'CreateVirtualMFADeviceResponse',
				'resultWrapper' => 'CreateVirtualMFADeviceResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeactivateMFADevice'                       => [
			'name'   => 'DeactivateMFADevice',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeactivateMFADeviceRequest', ],
			'errors' => [
				[ 'shape' => 'EntityTemporarilyUnmodifiableException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteAccessKey'                           => [
			'name'   => 'DeleteAccessKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteAccessKeyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteAccountAlias'                        => [
			'name'   => 'DeleteAccountAlias',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteAccountAliasRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteAccountPasswordPolicy'               => [
			'name'   => 'DeleteAccountPasswordPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteGroup'                               => [
			'name'   => 'DeleteGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteGroupRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteGroupPolicy'                         => [
			'name'   => 'DeleteGroupPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteGroupPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteInstanceProfile'                     => [
			'name'   => 'DeleteInstanceProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteInstanceProfileRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteLoginProfile'                        => [
			'name'   => 'DeleteLoginProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteLoginProfileRequest', ],
			'errors' => [
				[ 'shape' => 'EntityTemporarilyUnmodifiableException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteOpenIDConnectProvider'               => [
			'name'   => 'DeleteOpenIDConnectProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteOpenIDConnectProviderRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeletePolicy'                              => [
			'name'   => 'DeletePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeletePolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeletePolicyVersion'                       => [
			'name'   => 'DeletePolicyVersion',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeletePolicyVersionRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteRole'                                => [
			'name'   => 'DeleteRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteRoleRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteRolePermissionsBoundary'             => [
			'name'   => 'DeleteRolePermissionsBoundary',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteRolePermissionsBoundaryRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteRolePolicy'                          => [
			'name'   => 'DeleteRolePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteRolePolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteSAMLProvider'                        => [
			'name'   => 'DeleteSAMLProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteSAMLProviderRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteSSHPublicKey'                        => [
			'name'   => 'DeleteSSHPublicKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteSSHPublicKeyRequest', ],
			'errors' => [ [ 'shape' => 'NoSuchEntityException', ], ],
		],
		'DeleteServerCertificate'                   => [
			'name'   => 'DeleteServerCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteServerCertificateRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteServiceLinkedRole'                   => [
			'name'   => 'DeleteServiceLinkedRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteServiceLinkedRoleRequest', ],
			'output' => [
				'shape'         => 'DeleteServiceLinkedRoleResponse',
				'resultWrapper' => 'DeleteServiceLinkedRoleResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteServiceSpecificCredential'           => [
			'name'   => 'DeleteServiceSpecificCredential',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteServiceSpecificCredentialRequest', ],
			'errors' => [ [ 'shape' => 'NoSuchEntityException', ], ],
		],
		'DeleteSigningCertificate'                  => [
			'name'   => 'DeleteSigningCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteSigningCertificateRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteUser'                                => [
			'name'   => 'DeleteUser',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteUserRequest', ],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteUserPermissionsBoundary'             => [
			'name'   => 'DeleteUserPermissionsBoundary',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteUserPermissionsBoundaryRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteUserPolicy'                          => [
			'name'   => 'DeleteUserPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteUserPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DeleteVirtualMFADevice'                    => [
			'name'   => 'DeleteVirtualMFADevice',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteVirtualMFADeviceRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'DeleteConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DetachGroupPolicy'                         => [
			'name'   => 'DetachGroupPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachGroupPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DetachRolePolicy'                          => [
			'name'   => 'DetachRolePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachRolePolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'DetachUserPolicy'                          => [
			'name'   => 'DetachUserPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachUserPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'EnableMFADevice'                           => [
			'name'   => 'EnableMFADevice',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableMFADeviceRequest', ],
			'errors' => [
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'EntityTemporarilyUnmodifiableException', ],
				[ 'shape' => 'InvalidAuthenticationCodeException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GenerateCredentialReport'                  => [
			'name'   => 'GenerateCredentialReport',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'GenerateCredentialReportResponse',
				'resultWrapper' => 'GenerateCredentialReportResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GenerateOrganizationsAccessReport'         => [
			'name'   => 'GenerateOrganizationsAccessReport',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GenerateOrganizationsAccessReportRequest', ],
			'output' => [
				'shape'         => 'GenerateOrganizationsAccessReportResponse',
				'resultWrapper' => 'GenerateOrganizationsAccessReportResult',
			],
			'errors' => [ [ 'shape' => 'ReportGenerationLimitExceededException', ], ],
		],
		'GenerateServiceLastAccessedDetails'        => [
			'name'   => 'GenerateServiceLastAccessedDetails',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GenerateServiceLastAccessedDetailsRequest', ],
			'output' => [
				'shape'         => 'GenerateServiceLastAccessedDetailsResponse',
				'resultWrapper' => 'GenerateServiceLastAccessedDetailsResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
			],
		],
		'GetAccessKeyLastUsed'                      => [
			'name'   => 'GetAccessKeyLastUsed',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetAccessKeyLastUsedRequest', ],
			'output' => [
				'shape'         => 'GetAccessKeyLastUsedResponse',
				'resultWrapper' => 'GetAccessKeyLastUsedResult',
			],
		],
		'GetAccountAuthorizationDetails'            => [
			'name'   => 'GetAccountAuthorizationDetails',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetAccountAuthorizationDetailsRequest', ],
			'output' => [
				'shape'         => 'GetAccountAuthorizationDetailsResponse',
				'resultWrapper' => 'GetAccountAuthorizationDetailsResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'GetAccountPasswordPolicy'                  => [
			'name'   => 'GetAccountPasswordPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'GetAccountPasswordPolicyResponse',
				'resultWrapper' => 'GetAccountPasswordPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetAccountSummary'                         => [
			'name'   => 'GetAccountSummary',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'GetAccountSummaryResponse',
				'resultWrapper' => 'GetAccountSummaryResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'GetContextKeysForCustomPolicy'             => [
			'name'   => 'GetContextKeysForCustomPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetContextKeysForCustomPolicyRequest', ],
			'output' => [
				'shape'         => 'GetContextKeysForPolicyResponse',
				'resultWrapper' => 'GetContextKeysForCustomPolicyResult',
			],
			'errors' => [ [ 'shape' => 'InvalidInputException', ], ],
		],
		'GetContextKeysForPrincipalPolicy'          => [
			'name'   => 'GetContextKeysForPrincipalPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetContextKeysForPrincipalPolicyRequest', ],
			'output' => [
				'shape'         => 'GetContextKeysForPolicyResponse',
				'resultWrapper' => 'GetContextKeysForPrincipalPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
			],
		],
		'GetCredentialReport'                       => [
			'name'   => 'GetCredentialReport',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'GetCredentialReportResponse',
				'resultWrapper' => 'GetCredentialReportResult',
			],
			'errors' => [
				[ 'shape' => 'CredentialReportNotPresentException', ],
				[ 'shape' => 'CredentialReportExpiredException', ],
				[ 'shape' => 'CredentialReportNotReadyException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetGroup'                                  => [
			'name'   => 'GetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetGroupRequest', ],
			'output' => [
				'shape'         => 'GetGroupResponse',
				'resultWrapper' => 'GetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetGroupPolicy'                            => [
			'name'   => 'GetGroupPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetGroupPolicyRequest', ],
			'output' => [
				'shape'         => 'GetGroupPolicyResponse',
				'resultWrapper' => 'GetGroupPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetInstanceProfile'                        => [
			'name'   => 'GetInstanceProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetInstanceProfileRequest', ],
			'output' => [
				'shape'         => 'GetInstanceProfileResponse',
				'resultWrapper' => 'GetInstanceProfileResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetLoginProfile'                           => [
			'name'   => 'GetLoginProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetLoginProfileRequest', ],
			'output' => [
				'shape'         => 'GetLoginProfileResponse',
				'resultWrapper' => 'GetLoginProfileResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetOpenIDConnectProvider'                  => [
			'name'   => 'GetOpenIDConnectProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetOpenIDConnectProviderRequest', ],
			'output' => [
				'shape'         => 'GetOpenIDConnectProviderResponse',
				'resultWrapper' => 'GetOpenIDConnectProviderResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetOrganizationsAccessReport'              => [
			'name'   => 'GetOrganizationsAccessReport',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetOrganizationsAccessReportRequest', ],
			'output' => [
				'shape'         => 'GetOrganizationsAccessReportResponse',
				'resultWrapper' => 'GetOrganizationsAccessReportResult',
			],
			'errors' => [ [ 'shape' => 'NoSuchEntityException', ], ],
		],
		'GetPolicy'                                 => [
			'name'   => 'GetPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetPolicyRequest', ],
			'output' => [
				'shape'         => 'GetPolicyResponse',
				'resultWrapper' => 'GetPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetPolicyVersion'                          => [
			'name'   => 'GetPolicyVersion',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetPolicyVersionRequest', ],
			'output' => [
				'shape'         => 'GetPolicyVersionResponse',
				'resultWrapper' => 'GetPolicyVersionResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetRole'                                   => [
			'name'   => 'GetRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetRoleRequest', ],
			'output' => [
				'shape'         => 'GetRoleResponse',
				'resultWrapper' => 'GetRoleResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetRolePolicy'                             => [
			'name'   => 'GetRolePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetRolePolicyRequest', ],
			'output' => [
				'shape'         => 'GetRolePolicyResponse',
				'resultWrapper' => 'GetRolePolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetSAMLProvider'                           => [
			'name'   => 'GetSAMLProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetSAMLProviderRequest', ],
			'output' => [
				'shape'         => 'GetSAMLProviderResponse',
				'resultWrapper' => 'GetSAMLProviderResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetSSHPublicKey'                           => [
			'name'   => 'GetSSHPublicKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetSSHPublicKeyRequest', ],
			'output' => [
				'shape'         => 'GetSSHPublicKeyResponse',
				'resultWrapper' => 'GetSSHPublicKeyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'UnrecognizedPublicKeyEncodingException', ],
			],
		],
		'GetServerCertificate'                      => [
			'name'   => 'GetServerCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetServerCertificateRequest', ],
			'output' => [
				'shape'         => 'GetServerCertificateResponse',
				'resultWrapper' => 'GetServerCertificateResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetServiceLastAccessedDetails'             => [
			'name'   => 'GetServiceLastAccessedDetails',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetServiceLastAccessedDetailsRequest', ],
			'output' => [
				'shape'         => 'GetServiceLastAccessedDetailsResponse',
				'resultWrapper' => 'GetServiceLastAccessedDetailsResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
			],
		],
		'GetServiceLastAccessedDetailsWithEntities' => [
			'name'   => 'GetServiceLastAccessedDetailsWithEntities',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetServiceLastAccessedDetailsWithEntitiesRequest', ],
			'output' => [
				'shape'         => 'GetServiceLastAccessedDetailsWithEntitiesResponse',
				'resultWrapper' => 'GetServiceLastAccessedDetailsWithEntitiesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
			],
		],
		'GetServiceLinkedRoleDeletionStatus'        => [
			'name'   => 'GetServiceLinkedRoleDeletionStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetServiceLinkedRoleDeletionStatusRequest', ],
			'output' => [
				'shape'         => 'GetServiceLinkedRoleDeletionStatusResponse',
				'resultWrapper' => 'GetServiceLinkedRoleDeletionStatusResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetUser'                                   => [
			'name'   => 'GetUser',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetUserRequest', ],
			'output' => [
				'shape'         => 'GetUserResponse',
				'resultWrapper' => 'GetUserResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'GetUserPolicy'                             => [
			'name'   => 'GetUserPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetUserPolicyRequest', ],
			'output' => [
				'shape'         => 'GetUserPolicyResponse',
				'resultWrapper' => 'GetUserPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListAccessKeys'                            => [
			'name'   => 'ListAccessKeys',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAccessKeysRequest', ],
			'output' => [
				'shape'         => 'ListAccessKeysResponse',
				'resultWrapper' => 'ListAccessKeysResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListAccountAliases'                        => [
			'name'   => 'ListAccountAliases',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAccountAliasesRequest', ],
			'output' => [
				'shape'         => 'ListAccountAliasesResponse',
				'resultWrapper' => 'ListAccountAliasesResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListAttachedGroupPolicies'                 => [
			'name'   => 'ListAttachedGroupPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAttachedGroupPoliciesRequest', ],
			'output' => [
				'shape'         => 'ListAttachedGroupPoliciesResponse',
				'resultWrapper' => 'ListAttachedGroupPoliciesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListAttachedRolePolicies'                  => [
			'name'   => 'ListAttachedRolePolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAttachedRolePoliciesRequest', ],
			'output' => [
				'shape'         => 'ListAttachedRolePoliciesResponse',
				'resultWrapper' => 'ListAttachedRolePoliciesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListAttachedUserPolicies'                  => [
			'name'   => 'ListAttachedUserPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAttachedUserPoliciesRequest', ],
			'output' => [
				'shape'         => 'ListAttachedUserPoliciesResponse',
				'resultWrapper' => 'ListAttachedUserPoliciesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListEntitiesForPolicy'                     => [
			'name'   => 'ListEntitiesForPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListEntitiesForPolicyRequest', ],
			'output' => [
				'shape'         => 'ListEntitiesForPolicyResponse',
				'resultWrapper' => 'ListEntitiesForPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListGroupPolicies'                         => [
			'name'   => 'ListGroupPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListGroupPoliciesRequest', ],
			'output' => [
				'shape'         => 'ListGroupPoliciesResponse',
				'resultWrapper' => 'ListGroupPoliciesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListGroups'                                => [
			'name'   => 'ListGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListGroupsRequest', ],
			'output' => [
				'shape'         => 'ListGroupsResponse',
				'resultWrapper' => 'ListGroupsResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListGroupsForUser'                         => [
			'name'   => 'ListGroupsForUser',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListGroupsForUserRequest', ],
			'output' => [
				'shape'         => 'ListGroupsForUserResponse',
				'resultWrapper' => 'ListGroupsForUserResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListInstanceProfiles'                      => [
			'name'   => 'ListInstanceProfiles',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListInstanceProfilesRequest', ],
			'output' => [
				'shape'         => 'ListInstanceProfilesResponse',
				'resultWrapper' => 'ListInstanceProfilesResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListInstanceProfilesForRole'               => [
			'name'   => 'ListInstanceProfilesForRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListInstanceProfilesForRoleRequest', ],
			'output' => [
				'shape'         => 'ListInstanceProfilesForRoleResponse',
				'resultWrapper' => 'ListInstanceProfilesForRoleResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListMFADevices'                            => [
			'name'   => 'ListMFADevices',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListMFADevicesRequest', ],
			'output' => [
				'shape'         => 'ListMFADevicesResponse',
				'resultWrapper' => 'ListMFADevicesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListOpenIDConnectProviders'                => [
			'name'   => 'ListOpenIDConnectProviders',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListOpenIDConnectProvidersRequest', ],
			'output' => [
				'shape'         => 'ListOpenIDConnectProvidersResponse',
				'resultWrapper' => 'ListOpenIDConnectProvidersResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListPolicies'                              => [
			'name'   => 'ListPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListPoliciesRequest', ],
			'output' => [
				'shape'         => 'ListPoliciesResponse',
				'resultWrapper' => 'ListPoliciesResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListPoliciesGrantingServiceAccess'         => [
			'name'   => 'ListPoliciesGrantingServiceAccess',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListPoliciesGrantingServiceAccessRequest', ],
			'output' => [
				'shape'         => 'ListPoliciesGrantingServiceAccessResponse',
				'resultWrapper' => 'ListPoliciesGrantingServiceAccessResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
			],
		],
		'ListPolicyVersions'                        => [
			'name'   => 'ListPolicyVersions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListPolicyVersionsRequest', ],
			'output' => [
				'shape'         => 'ListPolicyVersionsResponse',
				'resultWrapper' => 'ListPolicyVersionsResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListRolePolicies'                          => [
			'name'   => 'ListRolePolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListRolePoliciesRequest', ],
			'output' => [
				'shape'         => 'ListRolePoliciesResponse',
				'resultWrapper' => 'ListRolePoliciesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListRoleTags'                              => [
			'name'   => 'ListRoleTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListRoleTagsRequest', ],
			'output' => [
				'shape'         => 'ListRoleTagsResponse',
				'resultWrapper' => 'ListRoleTagsResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListRoles'                                 => [
			'name'   => 'ListRoles',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListRolesRequest', ],
			'output' => [
				'shape'         => 'ListRolesResponse',
				'resultWrapper' => 'ListRolesResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListSAMLProviders'                         => [
			'name'   => 'ListSAMLProviders',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListSAMLProvidersRequest', ],
			'output' => [
				'shape'         => 'ListSAMLProvidersResponse',
				'resultWrapper' => 'ListSAMLProvidersResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListSSHPublicKeys'                         => [
			'name'   => 'ListSSHPublicKeys',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListSSHPublicKeysRequest', ],
			'output' => [
				'shape'         => 'ListSSHPublicKeysResponse',
				'resultWrapper' => 'ListSSHPublicKeysResult',
			],
			'errors' => [ [ 'shape' => 'NoSuchEntityException', ], ],
		],
		'ListServerCertificates'                    => [
			'name'   => 'ListServerCertificates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListServerCertificatesRequest', ],
			'output' => [
				'shape'         => 'ListServerCertificatesResponse',
				'resultWrapper' => 'ListServerCertificatesResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListServiceSpecificCredentials'            => [
			'name'   => 'ListServiceSpecificCredentials',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListServiceSpecificCredentialsRequest', ],
			'output' => [
				'shape'         => 'ListServiceSpecificCredentialsResponse',
				'resultWrapper' => 'ListServiceSpecificCredentialsResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceNotSupportedException', ],
			],
		],
		'ListSigningCertificates'                   => [
			'name'   => 'ListSigningCertificates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListSigningCertificatesRequest', ],
			'output' => [
				'shape'         => 'ListSigningCertificatesResponse',
				'resultWrapper' => 'ListSigningCertificatesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListUserPolicies'                          => [
			'name'   => 'ListUserPolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListUserPoliciesRequest', ],
			'output' => [
				'shape'         => 'ListUserPoliciesResponse',
				'resultWrapper' => 'ListUserPoliciesResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListUserTags'                              => [
			'name'   => 'ListUserTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListUserTagsRequest', ],
			'output' => [
				'shape'         => 'ListUserTagsResponse',
				'resultWrapper' => 'ListUserTagsResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ListUsers'                                 => [
			'name'   => 'ListUsers',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListUsersRequest', ],
			'output' => [
				'shape'         => 'ListUsersResponse',
				'resultWrapper' => 'ListUsersResult',
			],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'ListVirtualMFADevices'                     => [
			'name'   => 'ListVirtualMFADevices',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListVirtualMFADevicesRequest', ],
			'output' => [
				'shape'         => 'ListVirtualMFADevicesResponse',
				'resultWrapper' => 'ListVirtualMFADevicesResult',
			],
		],
		'PutGroupPolicy'                            => [
			'name'   => 'PutGroupPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutGroupPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'PutRolePermissionsBoundary'                => [
			'name'   => 'PutRolePermissionsBoundary',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutRolePermissionsBoundaryRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'PolicyNotAttachableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'PutRolePolicy'                             => [
			'name'   => 'PutRolePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutRolePolicyRequest', ],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'PutUserPermissionsBoundary'                => [
			'name'   => 'PutUserPermissionsBoundary',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutUserPermissionsBoundaryRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'PolicyNotAttachableException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'PutUserPolicy'                             => [
			'name'   => 'PutUserPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutUserPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'RemoveClientIDFromOpenIDConnectProvider'   => [
			'name'   => 'RemoveClientIDFromOpenIDConnectProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RemoveClientIDFromOpenIDConnectProviderRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'RemoveRoleFromInstanceProfile'             => [
			'name'   => 'RemoveRoleFromInstanceProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RemoveRoleFromInstanceProfileRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'RemoveUserFromGroup'                       => [
			'name'   => 'RemoveUserFromGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RemoveUserFromGroupRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'ResetServiceSpecificCredential'            => [
			'name'   => 'ResetServiceSpecificCredential',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResetServiceSpecificCredentialRequest', ],
			'output' => [
				'shape'         => 'ResetServiceSpecificCredentialResponse',
				'resultWrapper' => 'ResetServiceSpecificCredentialResult',
			],
			'errors' => [ [ 'shape' => 'NoSuchEntityException', ], ],
		],
		'ResyncMFADevice'                           => [
			'name'   => 'ResyncMFADevice',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResyncMFADeviceRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidAuthenticationCodeException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'SetDefaultPolicyVersion'                   => [
			'name'   => 'SetDefaultPolicyVersion',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetDefaultPolicyVersionRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'SetSecurityTokenServicePreferences'        => [
			'name'   => 'SetSecurityTokenServicePreferences',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetSecurityTokenServicePreferencesRequest', ],
			'errors' => [ [ 'shape' => 'ServiceFailureException', ], ],
		],
		'SimulateCustomPolicy'                      => [
			'name'   => 'SimulateCustomPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SimulateCustomPolicyRequest', ],
			'output' => [
				'shape'         => 'SimulatePolicyResponse',
				'resultWrapper' => 'SimulateCustomPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'PolicyEvaluationException', ],
			],
		],
		'SimulatePrincipalPolicy'                   => [
			'name'   => 'SimulatePrincipalPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SimulatePrincipalPolicyRequest', ],
			'output' => [
				'shape'         => 'SimulatePolicyResponse',
				'resultWrapper' => 'SimulatePrincipalPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'PolicyEvaluationException', ],
			],
		],
		'TagRole'                                   => [
			'name'   => 'TagRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TagRoleRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'TagUser'                                   => [
			'name'   => 'TagUser',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TagUserRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UntagRole'                                 => [
			'name'   => 'UntagRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UntagRoleRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UntagUser'                                 => [
			'name'   => 'UntagUser',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UntagUserRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateAccessKey'                           => [
			'name'   => 'UpdateAccessKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateAccessKeyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateAccountPasswordPolicy'               => [
			'name'   => 'UpdateAccountPasswordPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateAccountPasswordPolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateAssumeRolePolicy'                    => [
			'name'   => 'UpdateAssumeRolePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateAssumeRolePolicyRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'MalformedPolicyDocumentException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateGroup'                               => [
			'name'   => 'UpdateGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateGroupRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateLoginProfile'                        => [
			'name'   => 'UpdateLoginProfile',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateLoginProfileRequest', ],
			'errors' => [
				[ 'shape' => 'EntityTemporarilyUnmodifiableException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'PasswordPolicyViolationException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateOpenIDConnectProviderThumbprint'     => [
			'name'   => 'UpdateOpenIDConnectProviderThumbprint',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateOpenIDConnectProviderThumbprintRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateRole'                                => [
			'name'   => 'UpdateRole',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateRoleRequest', ],
			'output' => [
				'shape'         => 'UpdateRoleResponse',
				'resultWrapper' => 'UpdateRoleResult',
			],
			'errors' => [
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateRoleDescription'                     => [
			'name'   => 'UpdateRoleDescription',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateRoleDescriptionRequest', ],
			'output' => [
				'shape'         => 'UpdateRoleDescriptionResponse',
				'resultWrapper' => 'UpdateRoleDescriptionResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'UnmodifiableEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateSAMLProvider'                        => [
			'name'   => 'UpdateSAMLProvider',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateSAMLProviderRequest', ],
			'output' => [
				'shape'         => 'UpdateSAMLProviderResponse',
				'resultWrapper' => 'UpdateSAMLProviderResult',
			],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidInputException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateSSHPublicKey'                        => [
			'name'   => 'UpdateSSHPublicKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateSSHPublicKeyRequest', ],
			'errors' => [ [ 'shape' => 'NoSuchEntityException', ], ],
		],
		'UpdateServerCertificate'                   => [
			'name'   => 'UpdateServerCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateServerCertificateRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateServiceSpecificCredential'           => [
			'name'   => 'UpdateServiceSpecificCredential',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateServiceSpecificCredentialRequest', ],
			'errors' => [ [ 'shape' => 'NoSuchEntityException', ], ],
		],
		'UpdateSigningCertificate'                  => [
			'name'   => 'UpdateSigningCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateSigningCertificateRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UpdateUser'                                => [
			'name'   => 'UpdateUser',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateUserRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'EntityTemporarilyUnmodifiableException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UploadSSHPublicKey'                        => [
			'name'   => 'UploadSSHPublicKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UploadSSHPublicKeyRequest', ],
			'output' => [
				'shape'         => 'UploadSSHPublicKeyResponse',
				'resultWrapper' => 'UploadSSHPublicKeyResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'InvalidPublicKeyException', ],
				[ 'shape' => 'DuplicateSSHPublicKeyException', ],
				[ 'shape' => 'UnrecognizedPublicKeyEncodingException', ],
			],
		],
		'UploadServerCertificate'                   => [
			'name'   => 'UploadServerCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UploadServerCertificateRequest', ],
			'output' => [
				'shape'         => 'UploadServerCertificateResponse',
				'resultWrapper' => 'UploadServerCertificateResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'MalformedCertificateException', ],
				[ 'shape' => 'KeyPairMismatchException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
		'UploadSigningCertificate'                  => [
			'name'   => 'UploadSigningCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UploadSigningCertificateRequest', ],
			'output' => [
				'shape'         => 'UploadSigningCertificateResponse',
				'resultWrapper' => 'UploadSigningCertificateResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'EntityAlreadyExistsException', ],
				[ 'shape' => 'MalformedCertificateException', ],
				[ 'shape' => 'InvalidCertificateException', ],
				[ 'shape' => 'DuplicateCertificateException', ],
				[ 'shape' => 'NoSuchEntityException', ],
				[ 'shape' => 'ServiceFailureException', ],
			],
		],
	],
	'shapes'     => [
		'AccessDetail'                                      => [
			'type'     => 'structure',
			'required' => [ 'ServiceName', 'ServiceNamespace', ],
			'members'  => [
				'ServiceName'                => [ 'shape' => 'serviceNameType', ],
				'ServiceNamespace'           => [ 'shape' => 'serviceNamespaceType', ],
				'Region'                     => [ 'shape' => 'stringType', ],
				'EntityPath'                 => [ 'shape' => 'organizationsEntityPathType', ],
				'LastAuthenticatedTime'      => [ 'shape' => 'dateType', ],
				'TotalAuthenticatedEntities' => [ 'shape' => 'integerType', ],
			],
		],
		'AccessDetails'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AccessDetail', ],
		],
		'AccessKey'                                         => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'AccessKeyId', 'Status', 'SecretAccessKey', ],
			'members'  => [
				'UserName'        => [ 'shape' => 'userNameType', ],
				'AccessKeyId'     => [ 'shape' => 'accessKeyIdType', ],
				'Status'          => [ 'shape' => 'statusType', ],
				'SecretAccessKey' => [ 'shape' => 'accessKeySecretType', ],
				'CreateDate'      => [ 'shape' => 'dateType', ],
			],
		],
		'AccessKeyLastUsed'                                 => [
			'type'     => 'structure',
			'required' => [ 'LastUsedDate', 'ServiceName', 'Region', ],
			'members'  => [
				'LastUsedDate' => [ 'shape' => 'dateType', ],
				'ServiceName'  => [ 'shape' => 'stringType', ],
				'Region'       => [ 'shape' => 'stringType', ],
			],
		],
		'AccessKeyMetadata'                                 => [
			'type'    => 'structure',
			'members' => [
				'UserName'    => [ 'shape' => 'userNameType', ],
				'AccessKeyId' => [ 'shape' => 'accessKeyIdType', ],
				'Status'      => [ 'shape' => 'statusType', ],
				'CreateDate'  => [ 'shape' => 'dateType', ],
			],
		],
		'ActionNameListType'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ActionNameType', ],
		],
		'ActionNameType'                                    => [ 'type' => 'string', 'max' => 128, 'min' => 3, ],
		'AddClientIDToOpenIDConnectProviderRequest'         => [
			'type'     => 'structure',
			'required' => [ 'OpenIDConnectProviderArn', 'ClientID', ],
			'members'  => [
				'OpenIDConnectProviderArn' => [ 'shape' => 'arnType', ],
				'ClientID'                 => [ 'shape' => 'clientIDType', ],
			],
		],
		'AddRoleToInstanceProfileRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfileName', 'RoleName', ],
			'members'  => [
				'InstanceProfileName' => [ 'shape' => 'instanceProfileNameType', ],
				'RoleName'            => [ 'shape' => 'roleNameType', ],
			],
		],
		'AddUserToGroupRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'UserName', ],
			'members'  => [
				'GroupName' => [ 'shape' => 'groupNameType', ],
				'UserName'  => [ 'shape' => 'existingUserNameType', ],
			],
		],
		'ArnListType'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'arnType', ],
		],
		'AttachGroupPolicyRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'PolicyArn', ],
			'members'  => [
				'GroupName' => [ 'shape' => 'groupNameType', ],
				'PolicyArn' => [ 'shape' => 'arnType', ],
			],
		],
		'AttachRolePolicyRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'PolicyArn', ],
			'members'  => [
				'RoleName'  => [ 'shape' => 'roleNameType', ],
				'PolicyArn' => [ 'shape' => 'arnType', ],
			],
		],
		'AttachUserPolicyRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'PolicyArn', ],
			'members'  => [
				'UserName'  => [ 'shape' => 'userNameType', ],
				'PolicyArn' => [ 'shape' => 'arnType', ],
			],
		],
		'AttachedPermissionsBoundary'                       => [
			'type'    => 'structure',
			'members' => [
				'PermissionsBoundaryType' => [ 'shape' => 'PermissionsBoundaryAttachmentType', ],
				'PermissionsBoundaryArn'  => [ 'shape' => 'arnType', ],
			],
		],
		'AttachedPolicy'                                    => [
			'type'    => 'structure',
			'members' => [
				'PolicyName' => [ 'shape' => 'policyNameType', ],
				'PolicyArn'  => [ 'shape' => 'arnType', ],
			],
		],
		'BootstrapDatum'                                    => [ 'type' => 'blob', 'sensitive' => true, ],
		'ChangePasswordRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'OldPassword', 'NewPassword', ],
			'members'  => [
				'OldPassword' => [ 'shape' => 'passwordType', ],
				'NewPassword' => [ 'shape' => 'passwordType', ],
			],
		],
		'ColumnNumber'                                      => [ 'type' => 'integer', ],
		'ConcurrentModificationException'                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ConcurrentModificationMessage', ], ],
			'error'     => [
				'code'           => 'ConcurrentModification',
				'httpStatusCode' => 409,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ConcurrentModificationMessage'                     => [ 'type' => 'string', ],
		'ContextEntry'                                      => [
			'type'    => 'structure',
			'members' => [
				'ContextKeyName'   => [ 'shape' => 'ContextKeyNameType', ],
				'ContextKeyValues' => [ 'shape' => 'ContextKeyValueListType', ],
				'ContextKeyType'   => [ 'shape' => 'ContextKeyTypeEnum', ],
			],
		],
		'ContextEntryListType'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ContextEntry', ],
		],
		'ContextKeyNameType'                                => [ 'type' => 'string', 'max' => 256, 'min' => 5, ],
		'ContextKeyNamesResultListType'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ContextKeyNameType', ],
		],
		'ContextKeyTypeEnum'                                => [
			'type' => 'string',
			'enum' => [
				'string',
				'stringList',
				'numeric',
				'numericList',
				'boolean',
				'booleanList',
				'ip',
				'ipList',
				'binary',
				'binaryList',
				'date',
				'dateList',
			],
		],
		'ContextKeyValueListType'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ContextKeyValueType', ],
		],
		'ContextKeyValueType'                               => [ 'type' => 'string', ],
		'CreateAccessKeyRequest'                            => [
			'type'    => 'structure',
			'members' => [ 'UserName' => [ 'shape' => 'existingUserNameType', ], ],
		],
		'CreateAccessKeyResponse'                           => [
			'type'     => 'structure',
			'required' => [ 'AccessKey', ],
			'members'  => [ 'AccessKey' => [ 'shape' => 'AccessKey', ], ],
		],
		'CreateAccountAliasRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'AccountAlias', ],
			'members'  => [ 'AccountAlias' => [ 'shape' => 'accountAliasType', ], ],
		],
		'CreateGroupRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'Path'      => [ 'shape' => 'pathType', ],
				'GroupName' => [ 'shape' => 'groupNameType', ],
			],
		],
		'CreateGroupResponse'                               => [
			'type'     => 'structure',
			'required' => [ 'Group', ],
			'members'  => [ 'Group' => [ 'shape' => 'Group', ], ],
		],
		'CreateInstanceProfileRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfileName', ],
			'members'  => [
				'InstanceProfileName' => [ 'shape' => 'instanceProfileNameType', ],
				'Path'                => [ 'shape' => 'pathType', ],
			],
		],
		'CreateInstanceProfileResponse'                     => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfile', ],
			'members'  => [ 'InstanceProfile' => [ 'shape' => 'InstanceProfile', ], ],
		],
		'CreateLoginProfileRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'Password', ],
			'members'  => [
				'UserName'              => [ 'shape' => 'userNameType', ],
				'Password'              => [ 'shape' => 'passwordType', ],
				'PasswordResetRequired' => [ 'shape' => 'booleanType', ],
			],
		],
		'CreateLoginProfileResponse'                        => [
			'type'     => 'structure',
			'required' => [ 'LoginProfile', ],
			'members'  => [ 'LoginProfile' => [ 'shape' => 'LoginProfile', ], ],
		],
		'CreateOpenIDConnectProviderRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Url', 'ThumbprintList', ],
			'members'  => [
				'Url'            => [ 'shape' => 'OpenIDConnectProviderUrlType', ],
				'ClientIDList'   => [ 'shape' => 'clientIDListType', ],
				'ThumbprintList' => [ 'shape' => 'thumbprintListType', ],
			],
		],
		'CreateOpenIDConnectProviderResponse'               => [
			'type'    => 'structure',
			'members' => [ 'OpenIDConnectProviderArn' => [ 'shape' => 'arnType', ], ],
		],
		'CreatePolicyRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'PolicyName', 'PolicyDocument', ],
			'members'  => [
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'Path'           => [ 'shape' => 'policyPathType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
				'Description'    => [ 'shape' => 'policyDescriptionType', ],
			],
		],
		'CreatePolicyResponse'                              => [
			'type'    => 'structure',
			'members' => [ 'Policy' => [ 'shape' => 'Policy', ], ],
		],
		'CreatePolicyVersionRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', 'PolicyDocument', ],
			'members'  => [
				'PolicyArn'      => [ 'shape' => 'arnType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
				'SetAsDefault'   => [ 'shape' => 'booleanType', ],
			],
		],
		'CreatePolicyVersionResponse'                       => [
			'type'    => 'structure',
			'members' => [ 'PolicyVersion' => [ 'shape' => 'PolicyVersion', ], ],
		],
		'CreateRoleRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'AssumeRolePolicyDocument', ],
			'members'  => [
				'Path'                     => [ 'shape' => 'pathType', ],
				'RoleName'                 => [ 'shape' => 'roleNameType', ],
				'AssumeRolePolicyDocument' => [ 'shape' => 'policyDocumentType', ],
				'Description'              => [ 'shape' => 'roleDescriptionType', ],
				'MaxSessionDuration'       => [ 'shape' => 'roleMaxSessionDurationType', ],
				'PermissionsBoundary'      => [ 'shape' => 'arnType', ],
				'Tags'                     => [ 'shape' => 'tagListType', ],
			],
		],
		'CreateRoleResponse'                                => [
			'type'     => 'structure',
			'required' => [ 'Role', ],
			'members'  => [ 'Role' => [ 'shape' => 'Role', ], ],
		],
		'CreateSAMLProviderRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'SAMLMetadataDocument', 'Name', ],
			'members'  => [
				'SAMLMetadataDocument' => [ 'shape' => 'SAMLMetadataDocumentType', ],
				'Name'                 => [ 'shape' => 'SAMLProviderNameType', ],
			],
		],
		'CreateSAMLProviderResponse'                        => [
			'type'    => 'structure',
			'members' => [ 'SAMLProviderArn' => [ 'shape' => 'arnType', ], ],
		],
		'CreateServiceLinkedRoleRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'AWSServiceName', ],
			'members'  => [
				'AWSServiceName' => [ 'shape' => 'groupNameType', ],
				'Description'    => [ 'shape' => 'roleDescriptionType', ],
				'CustomSuffix'   => [ 'shape' => 'customSuffixType', ],
			],
		],
		'CreateServiceLinkedRoleResponse'                   => [
			'type'    => 'structure',
			'members' => [ 'Role' => [ 'shape' => 'Role', ], ],
		],
		'CreateServiceSpecificCredentialRequest'            => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'ServiceName', ],
			'members'  => [
				'UserName'    => [ 'shape' => 'userNameType', ],
				'ServiceName' => [ 'shape' => 'serviceName', ],
			],
		],
		'CreateServiceSpecificCredentialResponse'           => [
			'type'    => 'structure',
			'members' => [ 'ServiceSpecificCredential' => [ 'shape' => 'ServiceSpecificCredential', ], ],
		],
		'CreateUserRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [
				'Path'                => [ 'shape' => 'pathType', ],
				'UserName'            => [ 'shape' => 'userNameType', ],
				'PermissionsBoundary' => [ 'shape' => 'arnType', ],
				'Tags'                => [ 'shape' => 'tagListType', ],
			],
		],
		'CreateUserResponse'                                => [
			'type'    => 'structure',
			'members' => [ 'User' => [ 'shape' => 'User', ], ],
		],
		'CreateVirtualMFADeviceRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'VirtualMFADeviceName', ],
			'members'  => [
				'Path'                 => [ 'shape' => 'pathType', ],
				'VirtualMFADeviceName' => [ 'shape' => 'virtualMFADeviceName', ],
			],
		],
		'CreateVirtualMFADeviceResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'VirtualMFADevice', ],
			'members'  => [ 'VirtualMFADevice' => [ 'shape' => 'VirtualMFADevice', ], ],
		],
		'CredentialReportExpiredException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'credentialReportExpiredExceptionMessage', ], ],
			'error'     => [
				'code'           => 'ReportExpired',
				'httpStatusCode' => 410,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CredentialReportNotPresentException'               => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'credentialReportNotPresentExceptionMessage', ], ],
			'error'     => [
				'code'           => 'ReportNotPresent',
				'httpStatusCode' => 410,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CredentialReportNotReadyException'                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'credentialReportNotReadyExceptionMessage', ], ],
			'error'     => [
				'code'           => 'ReportInProgress',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DeactivateMFADeviceRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'SerialNumber', ],
			'members'  => [
				'UserName'     => [ 'shape' => 'existingUserNameType', ],
				'SerialNumber' => [ 'shape' => 'serialNumberType', ],
			],
		],
		'DeleteAccessKeyRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'AccessKeyId', ],
			'members'  => [
				'UserName'    => [ 'shape' => 'existingUserNameType', ],
				'AccessKeyId' => [ 'shape' => 'accessKeyIdType', ],
			],
		],
		'DeleteAccountAliasRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'AccountAlias', ],
			'members'  => [ 'AccountAlias' => [ 'shape' => 'accountAliasType', ], ],
		],
		'DeleteConflictException'                           => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'deleteConflictMessage', ], ],
			'error'     => [
				'code'           => 'DeleteConflict',
				'httpStatusCode' => 409,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DeleteGroupPolicyRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'PolicyName', ],
			'members'  => [
				'GroupName'  => [ 'shape' => 'groupNameType', ],
				'PolicyName' => [ 'shape' => 'policyNameType', ],
			],
		],
		'DeleteGroupRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [ 'GroupName' => [ 'shape' => 'groupNameType', ], ],
		],
		'DeleteInstanceProfileRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfileName', ],
			'members'  => [ 'InstanceProfileName' => [ 'shape' => 'instanceProfileNameType', ], ],
		],
		'DeleteLoginProfileRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [ 'UserName' => [ 'shape' => 'userNameType', ], ],
		],
		'DeleteOpenIDConnectProviderRequest'                => [
			'type'     => 'structure',
			'required' => [ 'OpenIDConnectProviderArn', ],
			'members'  => [ 'OpenIDConnectProviderArn' => [ 'shape' => 'arnType', ], ],
		],
		'DeletePolicyRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', ],
			'members'  => [ 'PolicyArn' => [ 'shape' => 'arnType', ], ],
		],
		'DeletePolicyVersionRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', 'VersionId', ],
			'members'  => [
				'PolicyArn' => [ 'shape' => 'arnType', ],
				'VersionId' => [ 'shape' => 'policyVersionIdType', ],
			],
		],
		'DeleteRolePermissionsBoundaryRequest'              => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [ 'RoleName' => [ 'shape' => 'roleNameType', ], ],
		],
		'DeleteRolePolicyRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'PolicyName', ],
			'members'  => [
				'RoleName'   => [ 'shape' => 'roleNameType', ],
				'PolicyName' => [ 'shape' => 'policyNameType', ],
			],
		],
		'DeleteRoleRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [ 'RoleName' => [ 'shape' => 'roleNameType', ], ],
		],
		'DeleteSAMLProviderRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'SAMLProviderArn', ],
			'members'  => [ 'SAMLProviderArn' => [ 'shape' => 'arnType', ], ],
		],
		'DeleteSSHPublicKeyRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'SSHPublicKeyId', ],
			'members'  => [
				'UserName'       => [ 'shape' => 'userNameType', ],
				'SSHPublicKeyId' => [ 'shape' => 'publicKeyIdType', ],
			],
		],
		'DeleteServerCertificateRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ServerCertificateName', ],
			'members'  => [ 'ServerCertificateName' => [ 'shape' => 'serverCertificateNameType', ], ],
		],
		'DeleteServiceLinkedRoleRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [ 'RoleName' => [ 'shape' => 'roleNameType', ], ],
		],
		'DeleteServiceLinkedRoleResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'DeletionTaskId', ],
			'members'  => [ 'DeletionTaskId' => [ 'shape' => 'DeletionTaskIdType', ], ],
		],
		'DeleteServiceSpecificCredentialRequest'            => [
			'type'     => 'structure',
			'required' => [ 'ServiceSpecificCredentialId', ],
			'members'  => [
				'UserName'                    => [ 'shape' => 'userNameType', ],
				'ServiceSpecificCredentialId' => [ 'shape' => 'serviceSpecificCredentialId', ],
			],
		],
		'DeleteSigningCertificateRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'CertificateId', ],
			'members'  => [
				'UserName'      => [ 'shape' => 'existingUserNameType', ],
				'CertificateId' => [ 'shape' => 'certificateIdType', ],
			],
		],
		'DeleteUserPermissionsBoundaryRequest'              => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [ 'UserName' => [ 'shape' => 'userNameType', ], ],
		],
		'DeleteUserPolicyRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'PolicyName', ],
			'members'  => [
				'UserName'   => [ 'shape' => 'existingUserNameType', ],
				'PolicyName' => [ 'shape' => 'policyNameType', ],
			],
		],
		'DeleteUserRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [ 'UserName' => [ 'shape' => 'existingUserNameType', ], ],
		],
		'DeleteVirtualMFADeviceRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'SerialNumber', ],
			'members'  => [ 'SerialNumber' => [ 'shape' => 'serialNumberType', ], ],
		],
		'DeletionTaskFailureReasonType'                     => [
			'type'    => 'structure',
			'members' => [
				'Reason'        => [ 'shape' => 'ReasonType', ],
				'RoleUsageList' => [ 'shape' => 'RoleUsageListType', ],
			],
		],
		'DeletionTaskIdType'                                => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ],
		'DeletionTaskStatusType'                            => [
			'type' => 'string',
			'enum' => [
				'SUCCEEDED',
				'IN_PROGRESS',
				'FAILED',
				'NOT_STARTED',
			],
		],
		'DetachGroupPolicyRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'PolicyArn', ],
			'members'  => [
				'GroupName' => [ 'shape' => 'groupNameType', ],
				'PolicyArn' => [ 'shape' => 'arnType', ],
			],
		],
		'DetachRolePolicyRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'PolicyArn', ],
			'members'  => [
				'RoleName'  => [ 'shape' => 'roleNameType', ],
				'PolicyArn' => [ 'shape' => 'arnType', ],
			],
		],
		'DetachUserPolicyRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'PolicyArn', ],
			'members'  => [
				'UserName'  => [ 'shape' => 'userNameType', ],
				'PolicyArn' => [ 'shape' => 'arnType', ],
			],
		],
		'DuplicateCertificateException'                     => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'duplicateCertificateMessage', ], ],
			'error'     => [
				'code'           => 'DuplicateCertificate',
				'httpStatusCode' => 409,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DuplicateSSHPublicKeyException'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'duplicateSSHPublicKeyMessage', ], ],
			'error'     => [
				'code'           => 'DuplicateSSHPublicKey',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'EnableMFADeviceRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'SerialNumber',
				'AuthenticationCode1',
				'AuthenticationCode2',
			],
			'members'  => [
				'UserName'            => [ 'shape' => 'existingUserNameType', ],
				'SerialNumber'        => [ 'shape' => 'serialNumberType', ],
				'AuthenticationCode1' => [ 'shape' => 'authenticationCodeType', ],
				'AuthenticationCode2' => [ 'shape' => 'authenticationCodeType', ],
			],
		],
		'EntityAlreadyExistsException'                      => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'entityAlreadyExistsMessage', ], ],
			'error'     => [
				'code'           => 'EntityAlreadyExists',
				'httpStatusCode' => 409,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'EntityDetails'                                     => [
			'type'     => 'structure',
			'required' => [ 'EntityInfo', ],
			'members'  => [
				'EntityInfo'        => [ 'shape' => 'EntityInfo', ],
				'LastAuthenticated' => [ 'shape' => 'dateType', ],
			],
		],
		'EntityInfo'                                        => [
			'type'     => 'structure',
			'required' => [ 'Arn', 'Name', 'Type', 'Id', ],
			'members'  => [
				'Arn'  => [ 'shape' => 'arnType', ],
				'Name' => [ 'shape' => 'userNameType', ],
				'Type' => [ 'shape' => 'policyOwnerEntityType', ],
				'Id'   => [ 'shape' => 'idType', ],
				'Path' => [ 'shape' => 'pathType', ],
			],
		],
		'EntityTemporarilyUnmodifiableException'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'entityTemporarilyUnmodifiableMessage', ], ],
			'error'     => [
				'code'           => 'EntityTemporarilyUnmodifiable',
				'httpStatusCode' => 409,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'EntityType'                                        => [
			'type' => 'string',
			'enum' => [
				'User',
				'Role',
				'Group',
				'LocalManagedPolicy',
				'AWSManagedPolicy',
			],
		],
		'ErrorDetails'                                      => [
			'type'     => 'structure',
			'required' => [ 'Message', 'Code', ],
			'members'  => [
				'Message' => [ 'shape' => 'stringType', ],
				'Code'    => [ 'shape' => 'stringType', ],
			],
		],
		'EvalDecisionDetailsType'                           => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'EvalDecisionSourceType', ],
			'value' => [ 'shape' => 'PolicyEvaluationDecisionType', ],
		],
		'EvalDecisionSourceType'                            => [ 'type' => 'string', 'max' => 256, 'min' => 3, ],
		'EvaluationResult'                                  => [
			'type'     => 'structure',
			'required' => [ 'EvalActionName', 'EvalDecision', ],
			'members'  => [
				'EvalActionName'              => [ 'shape' => 'ActionNameType', ],
				'EvalResourceName'            => [ 'shape' => 'ResourceNameType', ],
				'EvalDecision'                => [ 'shape' => 'PolicyEvaluationDecisionType', ],
				'MatchedStatements'           => [ 'shape' => 'StatementListType', ],
				'MissingContextValues'        => [ 'shape' => 'ContextKeyNamesResultListType', ],
				'OrganizationsDecisionDetail' => [ 'shape' => 'OrganizationsDecisionDetail', ],
				'EvalDecisionDetails'         => [ 'shape' => 'EvalDecisionDetailsType', ],
				'ResourceSpecificResults'     => [ 'shape' => 'ResourceSpecificResultListType', ],
			],
		],
		'EvaluationResultsListType'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EvaluationResult', ],
		],
		'GenerateCredentialReportResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'State'       => [ 'shape' => 'ReportStateType', ],
				'Description' => [ 'shape' => 'ReportStateDescriptionType', ],
			],
		],
		'GenerateOrganizationsAccessReportRequest'          => [
			'type'     => 'structure',
			'required' => [ 'EntityPath', ],
			'members'  => [
				'EntityPath'            => [ 'shape' => 'organizationsEntityPathType', ],
				'OrganizationsPolicyId' => [ 'shape' => 'organizationsPolicyIdType', ],
			],
		],
		'GenerateOrganizationsAccessReportResponse'         => [
			'type'    => 'structure',
			'members' => [ 'JobId' => [ 'shape' => 'jobIDType', ], ],
		],
		'GenerateServiceLastAccessedDetailsRequest'         => [
			'type'     => 'structure',
			'required' => [ 'Arn', ],
			'members'  => [ 'Arn' => [ 'shape' => 'arnType', ], ],
		],
		'GenerateServiceLastAccessedDetailsResponse'        => [
			'type'    => 'structure',
			'members' => [ 'JobId' => [ 'shape' => 'jobIDType', ], ],
		],
		'GetAccessKeyLastUsedRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'AccessKeyId', ],
			'members'  => [ 'AccessKeyId' => [ 'shape' => 'accessKeyIdType', ], ],
		],
		'GetAccessKeyLastUsedResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'UserName'          => [ 'shape' => 'existingUserNameType', ],
				'AccessKeyLastUsed' => [ 'shape' => 'AccessKeyLastUsed', ],
			],
		],
		'GetAccountAuthorizationDetailsRequest'             => [
			'type'    => 'structure',
			'members' => [
				'Filter'   => [ 'shape' => 'entityListType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
			],
		],
		'GetAccountAuthorizationDetailsResponse'            => [
			'type'    => 'structure',
			'members' => [
				'UserDetailList'  => [ 'shape' => 'userDetailListType', ],
				'GroupDetailList' => [ 'shape' => 'groupDetailListType', ],
				'RoleDetailList'  => [ 'shape' => 'roleDetailListType', ],
				'Policies'        => [ 'shape' => 'ManagedPolicyDetailListType', ],
				'IsTruncated'     => [ 'shape' => 'booleanType', ],
				'Marker'          => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'GetAccountPasswordPolicyResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'PasswordPolicy', ],
			'members'  => [ 'PasswordPolicy' => [ 'shape' => 'PasswordPolicy', ], ],
		],
		'GetAccountSummaryResponse'                         => [
			'type'    => 'structure',
			'members' => [ 'SummaryMap' => [ 'shape' => 'summaryMapType', ], ],
		],
		'GetContextKeysForCustomPolicyRequest'              => [
			'type'     => 'structure',
			'required' => [ 'PolicyInputList', ],
			'members'  => [ 'PolicyInputList' => [ 'shape' => 'SimulationPolicyListType', ], ],
		],
		'GetContextKeysForPolicyResponse'                   => [
			'type'    => 'structure',
			'members' => [ 'ContextKeyNames' => [ 'shape' => 'ContextKeyNamesResultListType', ], ],
		],
		'GetContextKeysForPrincipalPolicyRequest'           => [
			'type'     => 'structure',
			'required' => [ 'PolicySourceArn', ],
			'members'  => [
				'PolicySourceArn' => [ 'shape' => 'arnType', ],
				'PolicyInputList' => [ 'shape' => 'SimulationPolicyListType', ],
			],
		],
		'GetCredentialReportResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'Content'       => [ 'shape' => 'ReportContentType', ],
				'ReportFormat'  => [ 'shape' => 'ReportFormatType', ],
				'GeneratedTime' => [ 'shape' => 'dateType', ],
			],
		],
		'GetGroupPolicyRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'PolicyName', ],
			'members'  => [
				'GroupName'  => [ 'shape' => 'groupNameType', ],
				'PolicyName' => [ 'shape' => 'policyNameType', ],
			],
		],
		'GetGroupPolicyResponse'                            => [
			'type'     => 'structure',
			'required' => [
				'GroupName',
				'PolicyName',
				'PolicyDocument',
			],
			'members'  => [
				'GroupName'      => [ 'shape' => 'groupNameType', ],
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'GetGroupRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName' => [ 'shape' => 'groupNameType', ],
				'Marker'    => [ 'shape' => 'markerType', ],
				'MaxItems'  => [ 'shape' => 'maxItemsType', ],
			],
		],
		'GetGroupResponse'                                  => [
			'type'     => 'structure',
			'required' => [ 'Group', 'Users', ],
			'members'  => [
				'Group'       => [ 'shape' => 'Group', ],
				'Users'       => [ 'shape' => 'userListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'GetInstanceProfileRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfileName', ],
			'members'  => [ 'InstanceProfileName' => [ 'shape' => 'instanceProfileNameType', ], ],
		],
		'GetInstanceProfileResponse'                        => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfile', ],
			'members'  => [ 'InstanceProfile' => [ 'shape' => 'InstanceProfile', ], ],
		],
		'GetLoginProfileRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [ 'UserName' => [ 'shape' => 'userNameType', ], ],
		],
		'GetLoginProfileResponse'                           => [
			'type'     => 'structure',
			'required' => [ 'LoginProfile', ],
			'members'  => [ 'LoginProfile' => [ 'shape' => 'LoginProfile', ], ],
		],
		'GetOpenIDConnectProviderRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'OpenIDConnectProviderArn', ],
			'members'  => [ 'OpenIDConnectProviderArn' => [ 'shape' => 'arnType', ], ],
		],
		'GetOpenIDConnectProviderResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'Url'            => [ 'shape' => 'OpenIDConnectProviderUrlType', ],
				'ClientIDList'   => [ 'shape' => 'clientIDListType', ],
				'ThumbprintList' => [ 'shape' => 'thumbprintListType', ],
				'CreateDate'     => [ 'shape' => 'dateType', ],
			],
		],
		'GetOrganizationsAccessReportRequest'               => [
			'type'     => 'structure',
			'required' => [ 'JobId', ],
			'members'  => [
				'JobId'    => [ 'shape' => 'jobIDType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'SortKey'  => [ 'shape' => 'sortKeyType', ],
			],
		],
		'GetOrganizationsAccessReportResponse'              => [
			'type'     => 'structure',
			'required' => [ 'JobStatus', 'JobCreationDate', ],
			'members'  => [
				'JobStatus'                   => [ 'shape' => 'jobStatusType', ],
				'JobCreationDate'             => [ 'shape' => 'dateType', ],
				'JobCompletionDate'           => [ 'shape' => 'dateType', ],
				'NumberOfServicesAccessible'  => [ 'shape' => 'integerType', ],
				'NumberOfServicesNotAccessed' => [ 'shape' => 'integerType', ],
				'AccessDetails'               => [ 'shape' => 'AccessDetails', ],
				'IsTruncated'                 => [ 'shape' => 'booleanType', ],
				'Marker'                      => [ 'shape' => 'markerType', ],
				'ErrorDetails'                => [ 'shape' => 'ErrorDetails', ],
			],
		],
		'GetPolicyRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', ],
			'members'  => [ 'PolicyArn' => [ 'shape' => 'arnType', ], ],
		],
		'GetPolicyResponse'                                 => [
			'type'    => 'structure',
			'members' => [ 'Policy' => [ 'shape' => 'Policy', ], ],
		],
		'GetPolicyVersionRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', 'VersionId', ],
			'members'  => [
				'PolicyArn' => [ 'shape' => 'arnType', ],
				'VersionId' => [ 'shape' => 'policyVersionIdType', ],
			],
		],
		'GetPolicyVersionResponse'                          => [
			'type'    => 'structure',
			'members' => [ 'PolicyVersion' => [ 'shape' => 'PolicyVersion', ], ],
		],
		'GetRolePolicyRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'PolicyName', ],
			'members'  => [
				'RoleName'   => [ 'shape' => 'roleNameType', ],
				'PolicyName' => [ 'shape' => 'policyNameType', ],
			],
		],
		'GetRolePolicyResponse'                             => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'PolicyName', 'PolicyDocument', ],
			'members'  => [
				'RoleName'       => [ 'shape' => 'roleNameType', ],
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'GetRoleRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [ 'RoleName' => [ 'shape' => 'roleNameType', ], ],
		],
		'GetRoleResponse'                                   => [
			'type'     => 'structure',
			'required' => [ 'Role', ],
			'members'  => [ 'Role' => [ 'shape' => 'Role', ], ],
		],
		'GetSAMLProviderRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'SAMLProviderArn', ],
			'members'  => [ 'SAMLProviderArn' => [ 'shape' => 'arnType', ], ],
		],
		'GetSAMLProviderResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'SAMLMetadataDocument' => [ 'shape' => 'SAMLMetadataDocumentType', ],
				'CreateDate'           => [ 'shape' => 'dateType', ],
				'ValidUntil'           => [ 'shape' => 'dateType', ],
			],
		],
		'GetSSHPublicKeyRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'SSHPublicKeyId', 'Encoding', ],
			'members'  => [
				'UserName'       => [ 'shape' => 'userNameType', ],
				'SSHPublicKeyId' => [ 'shape' => 'publicKeyIdType', ],
				'Encoding'       => [ 'shape' => 'encodingType', ],
			],
		],
		'GetSSHPublicKeyResponse'                           => [
			'type'    => 'structure',
			'members' => [ 'SSHPublicKey' => [ 'shape' => 'SSHPublicKey', ], ],
		],
		'GetServerCertificateRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'ServerCertificateName', ],
			'members'  => [ 'ServerCertificateName' => [ 'shape' => 'serverCertificateNameType', ], ],
		],
		'GetServerCertificateResponse'                      => [
			'type'     => 'structure',
			'required' => [ 'ServerCertificate', ],
			'members'  => [ 'ServerCertificate' => [ 'shape' => 'ServerCertificate', ], ],
		],
		'GetServiceLastAccessedDetailsRequest'              => [
			'type'     => 'structure',
			'required' => [ 'JobId', ],
			'members'  => [
				'JobId'    => [ 'shape' => 'jobIDType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
			],
		],
		'GetServiceLastAccessedDetailsResponse'             => [
			'type'     => 'structure',
			'required' => [
				'JobStatus',
				'JobCreationDate',
				'ServicesLastAccessed',
				'JobCompletionDate',
			],
			'members'  => [
				'JobStatus'            => [ 'shape' => 'jobStatusType', ],
				'JobCreationDate'      => [ 'shape' => 'dateType', ],
				'ServicesLastAccessed' => [ 'shape' => 'ServicesLastAccessed', ],
				'JobCompletionDate'    => [ 'shape' => 'dateType', ],
				'IsTruncated'          => [ 'shape' => 'booleanType', ],
				'Marker'               => [ 'shape' => 'responseMarkerType', ],
				'Error'                => [ 'shape' => 'ErrorDetails', ],
			],
		],
		'GetServiceLastAccessedDetailsWithEntitiesRequest'  => [
			'type'     => 'structure',
			'required' => [ 'JobId', 'ServiceNamespace', ],
			'members'  => [
				'JobId'            => [ 'shape' => 'jobIDType', ],
				'ServiceNamespace' => [ 'shape' => 'serviceNamespaceType', ],
				'MaxItems'         => [ 'shape' => 'maxItemsType', ],
				'Marker'           => [ 'shape' => 'markerType', ],
			],
		],
		'GetServiceLastAccessedDetailsWithEntitiesResponse' => [
			'type'     => 'structure',
			'required' => [
				'JobStatus',
				'JobCreationDate',
				'JobCompletionDate',
				'EntityDetailsList',
			],
			'members'  => [
				'JobStatus'         => [ 'shape' => 'jobStatusType', ],
				'JobCreationDate'   => [ 'shape' => 'dateType', ],
				'JobCompletionDate' => [ 'shape' => 'dateType', ],
				'EntityDetailsList' => [ 'shape' => 'entityDetailsListType', ],
				'IsTruncated'       => [ 'shape' => 'booleanType', ],
				'Marker'            => [ 'shape' => 'responseMarkerType', ],
				'Error'             => [ 'shape' => 'ErrorDetails', ],
			],
		],
		'GetServiceLinkedRoleDeletionStatusRequest'         => [
			'type'     => 'structure',
			'required' => [ 'DeletionTaskId', ],
			'members'  => [ 'DeletionTaskId' => [ 'shape' => 'DeletionTaskIdType', ], ],
		],
		'GetServiceLinkedRoleDeletionStatusResponse'        => [
			'type'     => 'structure',
			'required' => [ 'Status', ],
			'members'  => [
				'Status' => [ 'shape' => 'DeletionTaskStatusType', ],
				'Reason' => [ 'shape' => 'DeletionTaskFailureReasonType', ],
			],
		],
		'GetUserPolicyRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'PolicyName', ],
			'members'  => [
				'UserName'   => [ 'shape' => 'existingUserNameType', ],
				'PolicyName' => [ 'shape' => 'policyNameType', ],
			],
		],
		'GetUserPolicyResponse'                             => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'PolicyName',
				'PolicyDocument',
			],
			'members'  => [
				'UserName'       => [ 'shape' => 'existingUserNameType', ],
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'GetUserRequest'                                    => [
			'type'    => 'structure',
			'members' => [ 'UserName' => [ 'shape' => 'existingUserNameType', ], ],
		],
		'GetUserResponse'                                   => [
			'type'     => 'structure',
			'required' => [ 'User', ],
			'members'  => [ 'User' => [ 'shape' => 'User', ], ],
		],
		'Group'                                             => [
			'type'     => 'structure',
			'required' => [
				'Path',
				'GroupName',
				'GroupId',
				'Arn',
				'CreateDate',
			],
			'members'  => [
				'Path'       => [ 'shape' => 'pathType', ],
				'GroupName'  => [ 'shape' => 'groupNameType', ],
				'GroupId'    => [ 'shape' => 'idType', ],
				'Arn'        => [ 'shape' => 'arnType', ],
				'CreateDate' => [ 'shape' => 'dateType', ],
			],
		],
		'GroupDetail'                                       => [
			'type'    => 'structure',
			'members' => [
				'Path'                    => [ 'shape' => 'pathType', ],
				'GroupName'               => [ 'shape' => 'groupNameType', ],
				'GroupId'                 => [ 'shape' => 'idType', ],
				'Arn'                     => [ 'shape' => 'arnType', ],
				'CreateDate'              => [ 'shape' => 'dateType', ],
				'GroupPolicyList'         => [ 'shape' => 'policyDetailListType', ],
				'AttachedManagedPolicies' => [ 'shape' => 'attachedPoliciesListType', ],
			],
		],
		'InstanceProfile'                                   => [
			'type'     => 'structure',
			'required' => [
				'Path',
				'InstanceProfileName',
				'InstanceProfileId',
				'Arn',
				'CreateDate',
				'Roles',
			],
			'members'  => [
				'Path'                => [ 'shape' => 'pathType', ],
				'InstanceProfileName' => [ 'shape' => 'instanceProfileNameType', ],
				'InstanceProfileId'   => [ 'shape' => 'idType', ],
				'Arn'                 => [ 'shape' => 'arnType', ],
				'CreateDate'          => [ 'shape' => 'dateType', ],
				'Roles'               => [ 'shape' => 'roleListType', ],
			],
		],
		'InvalidAuthenticationCodeException'                => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'invalidAuthenticationCodeMessage', ], ],
			'error'     => [
				'code'           => 'InvalidAuthenticationCode',
				'httpStatusCode' => 403,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidCertificateException'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'invalidCertificateMessage', ], ],
			'error'     => [
				'code'           => 'InvalidCertificate',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidInputException'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'invalidInputMessage', ], ],
			'error'     => [
				'code'           => 'InvalidInput',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidPublicKeyException'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'invalidPublicKeyMessage', ], ],
			'error'     => [
				'code'           => 'InvalidPublicKey',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidUserTypeException'                          => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'invalidUserTypeMessage', ], ],
			'error'     => [
				'code'           => 'InvalidUserType',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'KeyPairMismatchException'                          => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'keyPairMismatchMessage', ], ],
			'error'     => [
				'code'           => 'KeyPairMismatch',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'LimitExceededException'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'limitExceededMessage', ], ],
			'error'     => [
				'code'           => 'LimitExceeded',
				'httpStatusCode' => 409,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'LineNumber'                                        => [ 'type' => 'integer', ],
		'ListAccessKeysRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListAccessKeysResponse'                            => [
			'type'     => 'structure',
			'required' => [ 'AccessKeyMetadata', ],
			'members'  => [
				'AccessKeyMetadata' => [ 'shape' => 'accessKeyMetadataListType', ],
				'IsTruncated'       => [ 'shape' => 'booleanType', ],
				'Marker'            => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListAccountAliasesRequest'                         => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListAccountAliasesResponse'                        => [
			'type'     => 'structure',
			'required' => [ 'AccountAliases', ],
			'members'  => [
				'AccountAliases' => [ 'shape' => 'accountAliasListType', ],
				'IsTruncated'    => [ 'shape' => 'booleanType', ],
				'Marker'         => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListAttachedGroupPoliciesRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName'  => [ 'shape' => 'groupNameType', ],
				'PathPrefix' => [ 'shape' => 'policyPathType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListAttachedGroupPoliciesResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'AttachedPolicies' => [ 'shape' => 'attachedPoliciesListType', ],
				'IsTruncated'      => [ 'shape' => 'booleanType', ],
				'Marker'           => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListAttachedRolePoliciesRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [
				'RoleName'   => [ 'shape' => 'roleNameType', ],
				'PathPrefix' => [ 'shape' => 'policyPathType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListAttachedRolePoliciesResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'AttachedPolicies' => [ 'shape' => 'attachedPoliciesListType', ],
				'IsTruncated'      => [ 'shape' => 'booleanType', ],
				'Marker'           => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListAttachedUserPoliciesRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [
				'UserName'   => [ 'shape' => 'userNameType', ],
				'PathPrefix' => [ 'shape' => 'policyPathType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListAttachedUserPoliciesResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'AttachedPolicies' => [ 'shape' => 'attachedPoliciesListType', ],
				'IsTruncated'      => [ 'shape' => 'booleanType', ],
				'Marker'           => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListEntitiesForPolicyRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', ],
			'members'  => [
				'PolicyArn'         => [ 'shape' => 'arnType', ],
				'EntityFilter'      => [ 'shape' => 'EntityType', ],
				'PathPrefix'        => [ 'shape' => 'pathType', ],
				'PolicyUsageFilter' => [ 'shape' => 'PolicyUsageType', ],
				'Marker'            => [ 'shape' => 'markerType', ],
				'MaxItems'          => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListEntitiesForPolicyResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'PolicyGroups' => [ 'shape' => 'PolicyGroupListType', ],
				'PolicyUsers'  => [ 'shape' => 'PolicyUserListType', ],
				'PolicyRoles'  => [ 'shape' => 'PolicyRoleListType', ],
				'IsTruncated'  => [ 'shape' => 'booleanType', ],
				'Marker'       => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListGroupPoliciesRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName' => [ 'shape' => 'groupNameType', ],
				'Marker'    => [ 'shape' => 'markerType', ],
				'MaxItems'  => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListGroupPoliciesResponse'                         => [
			'type'     => 'structure',
			'required' => [ 'PolicyNames', ],
			'members'  => [
				'PolicyNames' => [ 'shape' => 'policyNameListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListGroupsForUserRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListGroupsForUserResponse'                         => [
			'type'     => 'structure',
			'required' => [ 'Groups', ],
			'members'  => [
				'Groups'      => [ 'shape' => 'groupListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListGroupsRequest'                                 => [
			'type'    => 'structure',
			'members' => [
				'PathPrefix' => [ 'shape' => 'pathPrefixType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListGroupsResponse'                                => [
			'type'     => 'structure',
			'required' => [ 'Groups', ],
			'members'  => [
				'Groups'      => [ 'shape' => 'groupListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListInstanceProfilesForRoleRequest'                => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [
				'RoleName' => [ 'shape' => 'roleNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListInstanceProfilesForRoleResponse'               => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfiles', ],
			'members'  => [
				'InstanceProfiles' => [ 'shape' => 'instanceProfileListType', ],
				'IsTruncated'      => [ 'shape' => 'booleanType', ],
				'Marker'           => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListInstanceProfilesRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'PathPrefix' => [ 'shape' => 'pathPrefixType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListInstanceProfilesResponse'                      => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfiles', ],
			'members'  => [
				'InstanceProfiles' => [ 'shape' => 'instanceProfileListType', ],
				'IsTruncated'      => [ 'shape' => 'booleanType', ],
				'Marker'           => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListMFADevicesRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListMFADevicesResponse'                            => [
			'type'     => 'structure',
			'required' => [ 'MFADevices', ],
			'members'  => [
				'MFADevices'  => [ 'shape' => 'mfaDeviceListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListOpenIDConnectProvidersRequest'                 => [ 'type' => 'structure', 'members' => [], ],
		'ListOpenIDConnectProvidersResponse'                => [
			'type'    => 'structure',
			'members' => [ 'OpenIDConnectProviderList' => [ 'shape' => 'OpenIDConnectProviderListType', ], ],
		],
		'ListPoliciesGrantingServiceAccessEntry'            => [
			'type'    => 'structure',
			'members' => [
				'ServiceNamespace' => [ 'shape' => 'serviceNamespaceType', ],
				'Policies'         => [ 'shape' => 'policyGrantingServiceAccessListType', ],
			],
		],
		'ListPoliciesGrantingServiceAccessRequest'          => [
			'type'     => 'structure',
			'required' => [ 'Arn', 'ServiceNamespaces', ],
			'members'  => [
				'Marker'            => [ 'shape' => 'markerType', ],
				'Arn'               => [ 'shape' => 'arnType', ],
				'ServiceNamespaces' => [ 'shape' => 'serviceNamespaceListType', ],
			],
		],
		'ListPoliciesGrantingServiceAccessResponse'         => [
			'type'     => 'structure',
			'required' => [ 'PoliciesGrantingServiceAccess', ],
			'members'  => [
				'PoliciesGrantingServiceAccess' => [ 'shape' => 'listPolicyGrantingServiceAccessResponseListType', ],
				'IsTruncated'                   => [ 'shape' => 'booleanType', ],
				'Marker'                        => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListPoliciesRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'Scope'             => [ 'shape' => 'policyScopeType', ],
				'OnlyAttached'      => [ 'shape' => 'booleanType', ],
				'PathPrefix'        => [ 'shape' => 'policyPathType', ],
				'PolicyUsageFilter' => [ 'shape' => 'PolicyUsageType', ],
				'Marker'            => [ 'shape' => 'markerType', ],
				'MaxItems'          => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListPoliciesResponse'                              => [
			'type'    => 'structure',
			'members' => [
				'Policies'    => [ 'shape' => 'policyListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListPolicyVersionsRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', ],
			'members'  => [
				'PolicyArn' => [ 'shape' => 'arnType', ],
				'Marker'    => [ 'shape' => 'markerType', ],
				'MaxItems'  => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListPolicyVersionsResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'Versions'    => [ 'shape' => 'policyDocumentVersionListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListRolePoliciesRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [
				'RoleName' => [ 'shape' => 'roleNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListRolePoliciesResponse'                          => [
			'type'     => 'structure',
			'required' => [ 'PolicyNames', ],
			'members'  => [
				'PolicyNames' => [ 'shape' => 'policyNameListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListRoleTagsRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [
				'RoleName' => [ 'shape' => 'roleNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListRoleTagsResponse'                              => [
			'type'     => 'structure',
			'required' => [ 'Tags', ],
			'members'  => [
				'Tags'        => [ 'shape' => 'tagListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListRolesRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'PathPrefix' => [ 'shape' => 'pathPrefixType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListRolesResponse'                                 => [
			'type'     => 'structure',
			'required' => [ 'Roles', ],
			'members'  => [
				'Roles'       => [ 'shape' => 'roleListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListSAMLProvidersRequest'                          => [ 'type' => 'structure', 'members' => [], ],
		'ListSAMLProvidersResponse'                         => [
			'type'    => 'structure',
			'members' => [ 'SAMLProviderList' => [ 'shape' => 'SAMLProviderListType', ], ],
		],
		'ListSSHPublicKeysRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'UserName' => [ 'shape' => 'userNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListSSHPublicKeysResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'SSHPublicKeys' => [ 'shape' => 'SSHPublicKeyListType', ],
				'IsTruncated'   => [ 'shape' => 'booleanType', ],
				'Marker'        => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListServerCertificatesRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'PathPrefix' => [ 'shape' => 'pathPrefixType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListServerCertificatesResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'ServerCertificateMetadataList', ],
			'members'  => [
				'ServerCertificateMetadataList' => [ 'shape' => 'serverCertificateMetadataListType', ],
				'IsTruncated'                   => [ 'shape' => 'booleanType', ],
				'Marker'                        => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListServiceSpecificCredentialsRequest'             => [
			'type'    => 'structure',
			'members' => [
				'UserName'    => [ 'shape' => 'userNameType', ],
				'ServiceName' => [ 'shape' => 'serviceName', ],
			],
		],
		'ListServiceSpecificCredentialsResponse'            => [
			'type'    => 'structure',
			'members' => [ 'ServiceSpecificCredentials' => [ 'shape' => 'ServiceSpecificCredentialsListType', ], ],
		],
		'ListSigningCertificatesRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListSigningCertificatesResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'Certificates', ],
			'members'  => [
				'Certificates' => [ 'shape' => 'certificateListType', ],
				'IsTruncated'  => [ 'shape' => 'booleanType', ],
				'Marker'       => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListUserPoliciesRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListUserPoliciesResponse'                          => [
			'type'     => 'structure',
			'required' => [ 'PolicyNames', ],
			'members'  => [
				'PolicyNames' => [ 'shape' => 'policyNameListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListUserTagsRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'Marker'   => [ 'shape' => 'markerType', ],
				'MaxItems' => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListUserTagsResponse'                              => [
			'type'     => 'structure',
			'required' => [ 'Tags', ],
			'members'  => [
				'Tags'        => [ 'shape' => 'tagListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListUsersRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'PathPrefix' => [ 'shape' => 'pathPrefixType', ],
				'Marker'     => [ 'shape' => 'markerType', ],
				'MaxItems'   => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListUsersResponse'                                 => [
			'type'     => 'structure',
			'required' => [ 'Users', ],
			'members'  => [
				'Users'       => [ 'shape' => 'userListType', ],
				'IsTruncated' => [ 'shape' => 'booleanType', ],
				'Marker'      => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'ListVirtualMFADevicesRequest'                      => [
			'type'    => 'structure',
			'members' => [
				'AssignmentStatus' => [ 'shape' => 'assignmentStatusType', ],
				'Marker'           => [ 'shape' => 'markerType', ],
				'MaxItems'         => [ 'shape' => 'maxItemsType', ],
			],
		],
		'ListVirtualMFADevicesResponse'                     => [
			'type'     => 'structure',
			'required' => [ 'VirtualMFADevices', ],
			'members'  => [
				'VirtualMFADevices' => [ 'shape' => 'virtualMFADeviceListType', ],
				'IsTruncated'       => [ 'shape' => 'booleanType', ],
				'Marker'            => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'LoginProfile'                                      => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'CreateDate', ],
			'members'  => [
				'UserName'              => [ 'shape' => 'userNameType', ],
				'CreateDate'            => [ 'shape' => 'dateType', ],
				'PasswordResetRequired' => [ 'shape' => 'booleanType', ],
			],
		],
		'MFADevice'                                         => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'SerialNumber',
				'EnableDate',
			],
			'members'  => [
				'UserName'     => [ 'shape' => 'userNameType', ],
				'SerialNumber' => [ 'shape' => 'serialNumberType', ],
				'EnableDate'   => [ 'shape' => 'dateType', ],
			],
		],
		'MalformedCertificateException'                     => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'malformedCertificateMessage', ], ],
			'error'     => [
				'code'           => 'MalformedCertificate',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'MalformedPolicyDocumentException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'malformedPolicyDocumentMessage', ], ],
			'error'     => [
				'code'           => 'MalformedPolicyDocument',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ManagedPolicyDetail'                               => [
			'type'    => 'structure',
			'members' => [
				'PolicyName'                    => [ 'shape' => 'policyNameType', ],
				'PolicyId'                      => [ 'shape' => 'idType', ],
				'Arn'                           => [ 'shape' => 'arnType', ],
				'Path'                          => [ 'shape' => 'policyPathType', ],
				'DefaultVersionId'              => [ 'shape' => 'policyVersionIdType', ],
				'AttachmentCount'               => [ 'shape' => 'attachmentCountType', ],
				'PermissionsBoundaryUsageCount' => [ 'shape' => 'attachmentCountType', ],
				'IsAttachable'                  => [ 'shape' => 'booleanType', ],
				'Description'                   => [ 'shape' => 'policyDescriptionType', ],
				'CreateDate'                    => [ 'shape' => 'dateType', ],
				'UpdateDate'                    => [ 'shape' => 'dateType', ],
				'PolicyVersionList'             => [ 'shape' => 'policyDocumentVersionListType', ],
			],
		],
		'ManagedPolicyDetailListType'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ManagedPolicyDetail', ],
		],
		'NoSuchEntityException'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'noSuchEntityMessage', ], ],
			'error'     => [
				'code'           => 'NoSuchEntity',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'OpenIDConnectProviderListEntry'                    => [
			'type'    => 'structure',
			'members' => [ 'Arn' => [ 'shape' => 'arnType', ], ],
		],
		'OpenIDConnectProviderListType'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OpenIDConnectProviderListEntry', ],
		],
		'OpenIDConnectProviderUrlType'                      => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'OrganizationsDecisionDetail'                       => [
			'type'    => 'structure',
			'members' => [ 'AllowedByOrganizations' => [ 'shape' => 'booleanType', ], ],
		],
		'PasswordPolicy'                                    => [
			'type'    => 'structure',
			'members' => [
				'MinimumPasswordLength'      => [ 'shape' => 'minimumPasswordLengthType', ],
				'RequireSymbols'             => [ 'shape' => 'booleanType', ],
				'RequireNumbers'             => [ 'shape' => 'booleanType', ],
				'RequireUppercaseCharacters' => [ 'shape' => 'booleanType', ],
				'RequireLowercaseCharacters' => [ 'shape' => 'booleanType', ],
				'AllowUsersToChangePassword' => [ 'shape' => 'booleanType', ],
				'ExpirePasswords'            => [ 'shape' => 'booleanType', ],
				'MaxPasswordAge'             => [ 'shape' => 'maxPasswordAgeType', ],
				'PasswordReusePrevention'    => [ 'shape' => 'passwordReusePreventionType', ],
				'HardExpiry'                 => [ 'shape' => 'booleanObjectType', ],
			],
		],
		'PasswordPolicyViolationException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'passwordPolicyViolationMessage', ], ],
			'error'     => [
				'code'           => 'PasswordPolicyViolation',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'PermissionsBoundaryAttachmentType'                 => [
			'type' => 'string',
			'enum' => [ 'PermissionsBoundaryPolicy', ],
		],
		'Policy'                                            => [
			'type'    => 'structure',
			'members' => [
				'PolicyName'                    => [ 'shape' => 'policyNameType', ],
				'PolicyId'                      => [ 'shape' => 'idType', ],
				'Arn'                           => [ 'shape' => 'arnType', ],
				'Path'                          => [ 'shape' => 'policyPathType', ],
				'DefaultVersionId'              => [ 'shape' => 'policyVersionIdType', ],
				'AttachmentCount'               => [ 'shape' => 'attachmentCountType', ],
				'PermissionsBoundaryUsageCount' => [ 'shape' => 'attachmentCountType', ],
				'IsAttachable'                  => [ 'shape' => 'booleanType', ],
				'Description'                   => [ 'shape' => 'policyDescriptionType', ],
				'CreateDate'                    => [ 'shape' => 'dateType', ],
				'UpdateDate'                    => [ 'shape' => 'dateType', ],
			],
		],
		'PolicyDetail'                                      => [
			'type'    => 'structure',
			'members' => [
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'PolicyEvaluationDecisionType'                      => [
			'type' => 'string',
			'enum' => [
				'allowed',
				'explicitDeny',
				'implicitDeny',
			],
		],
		'PolicyEvaluationException'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'policyEvaluationErrorMessage', ], ],
			'error'     => [
				'code'           => 'PolicyEvaluation',
				'httpStatusCode' => 500,
			],
			'exception' => true,
		],
		'PolicyGrantingServiceAccess'                       => [
			'type'     => 'structure',
			'required' => [ 'PolicyName', 'PolicyType', ],
			'members'  => [
				'PolicyName' => [ 'shape' => 'policyNameType', ],
				'PolicyType' => [ 'shape' => 'policyType', ],
				'PolicyArn'  => [ 'shape' => 'arnType', ],
				'EntityType' => [ 'shape' => 'policyOwnerEntityType', ],
				'EntityName' => [ 'shape' => 'entityNameType', ],
			],
		],
		'PolicyGroup'                                       => [
			'type'    => 'structure',
			'members' => [
				'GroupName' => [ 'shape' => 'groupNameType', ],
				'GroupId'   => [ 'shape' => 'idType', ],
			],
		],
		'PolicyGroupListType'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyGroup', ],
		],
		'PolicyIdentifierType'                              => [ 'type' => 'string', ],
		'PolicyNotAttachableException'                      => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'policyNotAttachableMessage', ], ],
			'error'     => [
				'code'           => 'PolicyNotAttachable',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'PolicyRole'                                        => [
			'type'    => 'structure',
			'members' => [
				'RoleName' => [ 'shape' => 'roleNameType', ],
				'RoleId'   => [ 'shape' => 'idType', ],
			],
		],
		'PolicyRoleListType'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyRole', ],
		],
		'PolicySourceType'                                  => [
			'type' => 'string',
			'enum' => [
				'user',
				'group',
				'role',
				'aws-managed',
				'user-managed',
				'resource',
				'none',
			],
		],
		'PolicyUsageType'                                   => [
			'type' => 'string',
			'enum' => [
				'PermissionsPolicy',
				'PermissionsBoundary',
			],
		],
		'PolicyUser'                                        => [
			'type'    => 'structure',
			'members' => [
				'UserName' => [ 'shape' => 'userNameType', ],
				'UserId'   => [ 'shape' => 'idType', ],
			],
		],
		'PolicyUserListType'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyUser', ],
		],
		'PolicyVersion'                                     => [
			'type'    => 'structure',
			'members' => [
				'Document'         => [ 'shape' => 'policyDocumentType', ],
				'VersionId'        => [ 'shape' => 'policyVersionIdType', ],
				'IsDefaultVersion' => [ 'shape' => 'booleanType', ],
				'CreateDate'       => [ 'shape' => 'dateType', ],
			],
		],
		'Position'                                          => [
			'type'    => 'structure',
			'members' => [
				'Line'   => [ 'shape' => 'LineNumber', ],
				'Column' => [ 'shape' => 'ColumnNumber', ],
			],
		],
		'PutGroupPolicyRequest'                             => [
			'type'     => 'structure',
			'required' => [
				'GroupName',
				'PolicyName',
				'PolicyDocument',
			],
			'members'  => [
				'GroupName'      => [ 'shape' => 'groupNameType', ],
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'PutRolePermissionsBoundaryRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'PermissionsBoundary', ],
			'members'  => [
				'RoleName'            => [ 'shape' => 'roleNameType', ],
				'PermissionsBoundary' => [ 'shape' => 'arnType', ],
			],
		],
		'PutRolePolicyRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'RoleName',
				'PolicyName',
				'PolicyDocument',
			],
			'members'  => [
				'RoleName'       => [ 'shape' => 'roleNameType', ],
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'PutUserPermissionsBoundaryRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'PermissionsBoundary', ],
			'members'  => [
				'UserName'            => [ 'shape' => 'userNameType', ],
				'PermissionsBoundary' => [ 'shape' => 'arnType', ],
			],
		],
		'PutUserPolicyRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'PolicyName',
				'PolicyDocument',
			],
			'members'  => [
				'UserName'       => [ 'shape' => 'existingUserNameType', ],
				'PolicyName'     => [ 'shape' => 'policyNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'ReasonType'                                        => [ 'type' => 'string', 'max' => 1000, ],
		'RegionNameType'                                    => [ 'type' => 'string', 'max' => 100, 'min' => 1, ],
		'RemoveClientIDFromOpenIDConnectProviderRequest'    => [
			'type'     => 'structure',
			'required' => [
				'OpenIDConnectProviderArn',
				'ClientID',
			],
			'members'  => [
				'OpenIDConnectProviderArn' => [ 'shape' => 'arnType', ],
				'ClientID'                 => [ 'shape' => 'clientIDType', ],
			],
		],
		'RemoveRoleFromInstanceProfileRequest'              => [
			'type'     => 'structure',
			'required' => [ 'InstanceProfileName', 'RoleName', ],
			'members'  => [
				'InstanceProfileName' => [ 'shape' => 'instanceProfileNameType', ],
				'RoleName'            => [ 'shape' => 'roleNameType', ],
			],
		],
		'RemoveUserFromGroupRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'UserName', ],
			'members'  => [
				'GroupName' => [ 'shape' => 'groupNameType', ],
				'UserName'  => [ 'shape' => 'existingUserNameType', ],
			],
		],
		'ReportContentType'                                 => [ 'type' => 'blob', ],
		'ReportFormatType'                                  => [ 'type' => 'string', 'enum' => [ 'text/csv', ], ],
		'ReportGenerationLimitExceededException'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'reportGenerationLimitExceededMessage', ], ],
			'error'     => [
				'code'           => 'ReportGenerationLimitExceeded',
				'httpStatusCode' => 409,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReportStateDescriptionType'                        => [ 'type' => 'string', ],
		'ReportStateType'                                   => [
			'type' => 'string',
			'enum' => [ 'STARTED', 'INPROGRESS', 'COMPLETE', ],
		],
		'ResetServiceSpecificCredentialRequest'             => [
			'type'     => 'structure',
			'required' => [ 'ServiceSpecificCredentialId', ],
			'members'  => [
				'UserName'                    => [ 'shape' => 'userNameType', ],
				'ServiceSpecificCredentialId' => [ 'shape' => 'serviceSpecificCredentialId', ],
			],
		],
		'ResetServiceSpecificCredentialResponse'            => [
			'type'    => 'structure',
			'members' => [ 'ServiceSpecificCredential' => [ 'shape' => 'ServiceSpecificCredential', ], ],
		],
		'ResourceHandlingOptionType'                        => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'ResourceNameListType'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceNameType', ],
		],
		'ResourceNameType'                                  => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'ResourceSpecificResult'                            => [
			'type'     => 'structure',
			'required' => [
				'EvalResourceName',
				'EvalResourceDecision',
			],
			'members'  => [
				'EvalResourceName'     => [ 'shape' => 'ResourceNameType', ],
				'EvalResourceDecision' => [ 'shape' => 'PolicyEvaluationDecisionType', ],
				'MatchedStatements'    => [ 'shape' => 'StatementListType', ],
				'MissingContextValues' => [ 'shape' => 'ContextKeyNamesResultListType', ],
				'EvalDecisionDetails'  => [ 'shape' => 'EvalDecisionDetailsType', ],
			],
		],
		'ResourceSpecificResultListType'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceSpecificResult', ],
		],
		'ResyncMFADeviceRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'SerialNumber',
				'AuthenticationCode1',
				'AuthenticationCode2',
			],
			'members'  => [
				'UserName'            => [ 'shape' => 'existingUserNameType', ],
				'SerialNumber'        => [ 'shape' => 'serialNumberType', ],
				'AuthenticationCode1' => [ 'shape' => 'authenticationCodeType', ],
				'AuthenticationCode2' => [ 'shape' => 'authenticationCodeType', ],
			],
		],
		'Role'                                              => [
			'type'     => 'structure',
			'required' => [
				'Path',
				'RoleName',
				'RoleId',
				'Arn',
				'CreateDate',
			],
			'members'  => [
				'Path'                     => [ 'shape' => 'pathType', ],
				'RoleName'                 => [ 'shape' => 'roleNameType', ],
				'RoleId'                   => [ 'shape' => 'idType', ],
				'Arn'                      => [ 'shape' => 'arnType', ],
				'CreateDate'               => [ 'shape' => 'dateType', ],
				'AssumeRolePolicyDocument' => [ 'shape' => 'policyDocumentType', ],
				'Description'              => [ 'shape' => 'roleDescriptionType', ],
				'MaxSessionDuration'       => [ 'shape' => 'roleMaxSessionDurationType', ],
				'PermissionsBoundary'      => [ 'shape' => 'AttachedPermissionsBoundary', ],
				'Tags'                     => [ 'shape' => 'tagListType', ],
			],
		],
		'RoleDetail'                                        => [
			'type'    => 'structure',
			'members' => [
				'Path'                     => [ 'shape' => 'pathType', ],
				'RoleName'                 => [ 'shape' => 'roleNameType', ],
				'RoleId'                   => [ 'shape' => 'idType', ],
				'Arn'                      => [ 'shape' => 'arnType', ],
				'CreateDate'               => [ 'shape' => 'dateType', ],
				'AssumeRolePolicyDocument' => [ 'shape' => 'policyDocumentType', ],
				'InstanceProfileList'      => [ 'shape' => 'instanceProfileListType', ],
				'RolePolicyList'           => [ 'shape' => 'policyDetailListType', ],
				'AttachedManagedPolicies'  => [ 'shape' => 'attachedPoliciesListType', ],
				'PermissionsBoundary'      => [ 'shape' => 'AttachedPermissionsBoundary', ],
				'Tags'                     => [ 'shape' => 'tagListType', ],
			],
		],
		'RoleUsageListType'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RoleUsageType', ],
		],
		'RoleUsageType'                                     => [
			'type'    => 'structure',
			'members' => [
				'Region'    => [ 'shape' => 'RegionNameType', ],
				'Resources' => [ 'shape' => 'ArnListType', ],
			],
		],
		'SAMLMetadataDocumentType'                          => [
			'type' => 'string',
			'max'  => 10000000,
			'min'  => 1000,
		],
		'SAMLProviderListEntry'                             => [
			'type'    => 'structure',
			'members' => [
				'Arn'        => [ 'shape' => 'arnType', ],
				'ValidUntil' => [ 'shape' => 'dateType', ],
				'CreateDate' => [ 'shape' => 'dateType', ],
			],
		],
		'SAMLProviderListType'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SAMLProviderListEntry', ],
		],
		'SAMLProviderNameType'                              => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w._-]+',
		],
		'SSHPublicKey'                                      => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'SSHPublicKeyId',
				'Fingerprint',
				'SSHPublicKeyBody',
				'Status',
			],
			'members'  => [
				'UserName'         => [ 'shape' => 'userNameType', ],
				'SSHPublicKeyId'   => [ 'shape' => 'publicKeyIdType', ],
				'Fingerprint'      => [ 'shape' => 'publicKeyFingerprintType', ],
				'SSHPublicKeyBody' => [ 'shape' => 'publicKeyMaterialType', ],
				'Status'           => [ 'shape' => 'statusType', ],
				'UploadDate'       => [ 'shape' => 'dateType', ],
			],
		],
		'SSHPublicKeyListType'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SSHPublicKeyMetadata', ],
		],
		'SSHPublicKeyMetadata'                              => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'SSHPublicKeyId',
				'Status',
				'UploadDate',
			],
			'members'  => [
				'UserName'       => [ 'shape' => 'userNameType', ],
				'SSHPublicKeyId' => [ 'shape' => 'publicKeyIdType', ],
				'Status'         => [ 'shape' => 'statusType', ],
				'UploadDate'     => [ 'shape' => 'dateType', ],
			],
		],
		'ServerCertificate'                                 => [
			'type'     => 'structure',
			'required' => [
				'ServerCertificateMetadata',
				'CertificateBody',
			],
			'members'  => [
				'ServerCertificateMetadata' => [ 'shape' => 'ServerCertificateMetadata', ],
				'CertificateBody'           => [ 'shape' => 'certificateBodyType', ],
				'CertificateChain'          => [ 'shape' => 'certificateChainType', ],
			],
		],
		'ServerCertificateMetadata'                         => [
			'type'     => 'structure',
			'required' => [
				'Path',
				'ServerCertificateName',
				'ServerCertificateId',
				'Arn',
			],
			'members'  => [
				'Path'                  => [ 'shape' => 'pathType', ],
				'ServerCertificateName' => [ 'shape' => 'serverCertificateNameType', ],
				'ServerCertificateId'   => [ 'shape' => 'idType', ],
				'Arn'                   => [ 'shape' => 'arnType', ],
				'UploadDate'            => [ 'shape' => 'dateType', ],
				'Expiration'            => [ 'shape' => 'dateType', ],
			],
		],
		'ServiceFailureException'                           => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'serviceFailureExceptionMessage', ], ],
			'error'     => [
				'code'           => 'ServiceFailure',
				'httpStatusCode' => 500,
			],
			'exception' => true,
		],
		'ServiceLastAccessed'                               => [
			'type'     => 'structure',
			'required' => [ 'ServiceName', 'ServiceNamespace', ],
			'members'  => [
				'ServiceName'                => [ 'shape' => 'serviceNameType', ],
				'LastAuthenticated'          => [ 'shape' => 'dateType', ],
				'ServiceNamespace'           => [ 'shape' => 'serviceNamespaceType', ],
				'LastAuthenticatedEntity'    => [ 'shape' => 'arnType', ],
				'TotalAuthenticatedEntities' => [ 'shape' => 'integerType', ],
			],
		],
		'ServiceNotSupportedException'                      => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'serviceNotSupportedMessage', ], ],
			'error'     => [
				'code'           => 'NotSupportedService',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ServiceSpecificCredential'                         => [
			'type'     => 'structure',
			'required' => [
				'CreateDate',
				'ServiceName',
				'ServiceUserName',
				'ServicePassword',
				'ServiceSpecificCredentialId',
				'UserName',
				'Status',
			],
			'members'  => [
				'CreateDate'                  => [ 'shape' => 'dateType', ],
				'ServiceName'                 => [ 'shape' => 'serviceName', ],
				'ServiceUserName'             => [ 'shape' => 'serviceUserName', ],
				'ServicePassword'             => [ 'shape' => 'servicePassword', ],
				'ServiceSpecificCredentialId' => [ 'shape' => 'serviceSpecificCredentialId', ],
				'UserName'                    => [ 'shape' => 'userNameType', ],
				'Status'                      => [ 'shape' => 'statusType', ],
			],
		],
		'ServiceSpecificCredentialMetadata'                 => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'Status',
				'ServiceUserName',
				'CreateDate',
				'ServiceSpecificCredentialId',
				'ServiceName',
			],
			'members'  => [
				'UserName'                    => [ 'shape' => 'userNameType', ],
				'Status'                      => [ 'shape' => 'statusType', ],
				'ServiceUserName'             => [ 'shape' => 'serviceUserName', ],
				'CreateDate'                  => [ 'shape' => 'dateType', ],
				'ServiceSpecificCredentialId' => [ 'shape' => 'serviceSpecificCredentialId', ],
				'ServiceName'                 => [ 'shape' => 'serviceName', ],
			],
		],
		'ServiceSpecificCredentialsListType'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ServiceSpecificCredentialMetadata', ],
		],
		'ServicesLastAccessed'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ServiceLastAccessed', ],
		],
		'SetDefaultPolicyVersionRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'PolicyArn', 'VersionId', ],
			'members'  => [
				'PolicyArn' => [ 'shape' => 'arnType', ],
				'VersionId' => [ 'shape' => 'policyVersionIdType', ],
			],
		],
		'SetSecurityTokenServicePreferencesRequest'         => [
			'type'     => 'structure',
			'required' => [ 'GlobalEndpointTokenVersion', ],
			'members'  => [ 'GlobalEndpointTokenVersion' => [ 'shape' => 'globalEndpointTokenVersion', ], ],
		],
		'SigningCertificate'                                => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'CertificateId',
				'CertificateBody',
				'Status',
			],
			'members'  => [
				'UserName'        => [ 'shape' => 'userNameType', ],
				'CertificateId'   => [ 'shape' => 'certificateIdType', ],
				'CertificateBody' => [ 'shape' => 'certificateBodyType', ],
				'Status'          => [ 'shape' => 'statusType', ],
				'UploadDate'      => [ 'shape' => 'dateType', ],
			],
		],
		'SimulateCustomPolicyRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'PolicyInputList', 'ActionNames', ],
			'members'  => [
				'PolicyInputList'        => [ 'shape' => 'SimulationPolicyListType', ],
				'ActionNames'            => [ 'shape' => 'ActionNameListType', ],
				'ResourceArns'           => [ 'shape' => 'ResourceNameListType', ],
				'ResourcePolicy'         => [ 'shape' => 'policyDocumentType', ],
				'ResourceOwner'          => [ 'shape' => 'ResourceNameType', ],
				'CallerArn'              => [ 'shape' => 'ResourceNameType', ],
				'ContextEntries'         => [ 'shape' => 'ContextEntryListType', ],
				'ResourceHandlingOption' => [ 'shape' => 'ResourceHandlingOptionType', ],
				'MaxItems'               => [ 'shape' => 'maxItemsType', ],
				'Marker'                 => [ 'shape' => 'markerType', ],
			],
		],
		'SimulatePolicyResponse'                            => [
			'type'    => 'structure',
			'members' => [
				'EvaluationResults' => [ 'shape' => 'EvaluationResultsListType', ],
				'IsTruncated'       => [ 'shape' => 'booleanType', ],
				'Marker'            => [ 'shape' => 'responseMarkerType', ],
			],
		],
		'SimulatePrincipalPolicyRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'PolicySourceArn', 'ActionNames', ],
			'members'  => [
				'PolicySourceArn'        => [ 'shape' => 'arnType', ],
				'PolicyInputList'        => [ 'shape' => 'SimulationPolicyListType', ],
				'ActionNames'            => [ 'shape' => 'ActionNameListType', ],
				'ResourceArns'           => [ 'shape' => 'ResourceNameListType', ],
				'ResourcePolicy'         => [ 'shape' => 'policyDocumentType', ],
				'ResourceOwner'          => [ 'shape' => 'ResourceNameType', ],
				'CallerArn'              => [ 'shape' => 'ResourceNameType', ],
				'ContextEntries'         => [ 'shape' => 'ContextEntryListType', ],
				'ResourceHandlingOption' => [ 'shape' => 'ResourceHandlingOptionType', ],
				'MaxItems'               => [ 'shape' => 'maxItemsType', ],
				'Marker'                 => [ 'shape' => 'markerType', ],
			],
		],
		'SimulationPolicyListType'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'policyDocumentType', ],
		],
		'Statement'                                         => [
			'type'    => 'structure',
			'members' => [
				'SourcePolicyId'   => [ 'shape' => 'PolicyIdentifierType', ],
				'SourcePolicyType' => [ 'shape' => 'PolicySourceType', ],
				'StartPosition'    => [ 'shape' => 'Position', ],
				'EndPosition'      => [ 'shape' => 'Position', ],
			],
		],
		'StatementListType'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Statement', ],
		],
		'Tag'                                               => [
			'type'     => 'structure',
			'required' => [ 'Key', 'Value', ],
			'members'  => [
				'Key'   => [ 'shape' => 'tagKeyType', ],
				'Value' => [ 'shape' => 'tagValueType', ],
			],
		],
		'TagRoleRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'Tags', ],
			'members'  => [
				'RoleName' => [ 'shape' => 'roleNameType', ],
				'Tags'     => [ 'shape' => 'tagListType', ],
			],
		],
		'TagUserRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'Tags', ],
			'members'  => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'Tags'     => [ 'shape' => 'tagListType', ],
			],
		],
		'UnmodifiableEntityException'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'unmodifiableEntityMessage', ], ],
			'error'     => [
				'code'           => 'UnmodifiableEntity',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UnrecognizedPublicKeyEncodingException'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'unrecognizedPublicKeyEncodingMessage', ], ],
			'error'     => [
				'code'           => 'UnrecognizedPublicKeyEncoding',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UntagRoleRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'TagKeys', ],
			'members'  => [
				'RoleName' => [ 'shape' => 'roleNameType', ],
				'TagKeys'  => [ 'shape' => 'tagKeyListType', ],
			],
		],
		'UntagUserRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'TagKeys', ],
			'members'  => [
				'UserName' => [ 'shape' => 'existingUserNameType', ],
				'TagKeys'  => [ 'shape' => 'tagKeyListType', ],
			],
		],
		'UpdateAccessKeyRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'AccessKeyId', 'Status', ],
			'members'  => [
				'UserName'    => [ 'shape' => 'existingUserNameType', ],
				'AccessKeyId' => [ 'shape' => 'accessKeyIdType', ],
				'Status'      => [ 'shape' => 'statusType', ],
			],
		],
		'UpdateAccountPasswordPolicyRequest'                => [
			'type'    => 'structure',
			'members' => [
				'MinimumPasswordLength'      => [ 'shape' => 'minimumPasswordLengthType', ],
				'RequireSymbols'             => [ 'shape' => 'booleanType', ],
				'RequireNumbers'             => [ 'shape' => 'booleanType', ],
				'RequireUppercaseCharacters' => [ 'shape' => 'booleanType', ],
				'RequireLowercaseCharacters' => [ 'shape' => 'booleanType', ],
				'AllowUsersToChangePassword' => [ 'shape' => 'booleanType', ],
				'MaxPasswordAge'             => [ 'shape' => 'maxPasswordAgeType', ],
				'PasswordReusePrevention'    => [ 'shape' => 'passwordReusePreventionType', ],
				'HardExpiry'                 => [ 'shape' => 'booleanObjectType', ],
			],
		],
		'UpdateAssumeRolePolicyRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'PolicyDocument', ],
			'members'  => [
				'RoleName'       => [ 'shape' => 'roleNameType', ],
				'PolicyDocument' => [ 'shape' => 'policyDocumentType', ],
			],
		],
		'UpdateGroupRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName'    => [ 'shape' => 'groupNameType', ],
				'NewPath'      => [ 'shape' => 'pathType', ],
				'NewGroupName' => [ 'shape' => 'groupNameType', ],
			],
		],
		'UpdateLoginProfileRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [
				'UserName'              => [ 'shape' => 'userNameType', ],
				'Password'              => [ 'shape' => 'passwordType', ],
				'PasswordResetRequired' => [ 'shape' => 'booleanObjectType', ],
			],
		],
		'UpdateOpenIDConnectProviderThumbprintRequest'      => [
			'type'     => 'structure',
			'required' => [
				'OpenIDConnectProviderArn',
				'ThumbprintList',
			],
			'members'  => [
				'OpenIDConnectProviderArn' => [ 'shape' => 'arnType', ],
				'ThumbprintList'           => [ 'shape' => 'thumbprintListType', ],
			],
		],
		'UpdateRoleDescriptionRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'RoleName', 'Description', ],
			'members'  => [
				'RoleName'    => [ 'shape' => 'roleNameType', ],
				'Description' => [ 'shape' => 'roleDescriptionType', ],
			],
		],
		'UpdateRoleDescriptionResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'Role' => [ 'shape' => 'Role', ], ],
		],
		'UpdateRoleRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'RoleName', ],
			'members'  => [
				'RoleName'           => [ 'shape' => 'roleNameType', ],
				'Description'        => [ 'shape' => 'roleDescriptionType', ],
				'MaxSessionDuration' => [ 'shape' => 'roleMaxSessionDurationType', ],
			],
		],
		'UpdateRoleResponse'                                => [ 'type' => 'structure', 'members' => [], ],
		'UpdateSAMLProviderRequest'                         => [
			'type'     => 'structure',
			'required' => [
				'SAMLMetadataDocument',
				'SAMLProviderArn',
			],
			'members'  => [
				'SAMLMetadataDocument' => [ 'shape' => 'SAMLMetadataDocumentType', ],
				'SAMLProviderArn'      => [ 'shape' => 'arnType', ],
			],
		],
		'UpdateSAMLProviderResponse'                        => [
			'type'    => 'structure',
			'members' => [ 'SAMLProviderArn' => [ 'shape' => 'arnType', ], ],
		],
		'UpdateSSHPublicKeyRequest'                         => [
			'type'     => 'structure',
			'required' => [
				'UserName',
				'SSHPublicKeyId',
				'Status',
			],
			'members'  => [
				'UserName'       => [ 'shape' => 'userNameType', ],
				'SSHPublicKeyId' => [ 'shape' => 'publicKeyIdType', ],
				'Status'         => [ 'shape' => 'statusType', ],
			],
		],
		'UpdateServerCertificateRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ServerCertificateName', ],
			'members'  => [
				'ServerCertificateName'    => [ 'shape' => 'serverCertificateNameType', ],
				'NewPath'                  => [ 'shape' => 'pathType', ],
				'NewServerCertificateName' => [ 'shape' => 'serverCertificateNameType', ],
			],
		],
		'UpdateServiceSpecificCredentialRequest'            => [
			'type'     => 'structure',
			'required' => [
				'ServiceSpecificCredentialId',
				'Status',
			],
			'members'  => [
				'UserName'                    => [ 'shape' => 'userNameType', ],
				'ServiceSpecificCredentialId' => [ 'shape' => 'serviceSpecificCredentialId', ],
				'Status'                      => [ 'shape' => 'statusType', ],
			],
		],
		'UpdateSigningCertificateRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'CertificateId', 'Status', ],
			'members'  => [
				'UserName'      => [ 'shape' => 'existingUserNameType', ],
				'CertificateId' => [ 'shape' => 'certificateIdType', ],
				'Status'        => [ 'shape' => 'statusType', ],
			],
		],
		'UpdateUserRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'UserName', ],
			'members'  => [
				'UserName'    => [ 'shape' => 'existingUserNameType', ],
				'NewPath'     => [ 'shape' => 'pathType', ],
				'NewUserName' => [ 'shape' => 'userNameType', ],
			],
		],
		'UploadSSHPublicKeyRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'UserName', 'SSHPublicKeyBody', ],
			'members'  => [
				'UserName'         => [ 'shape' => 'userNameType', ],
				'SSHPublicKeyBody' => [ 'shape' => 'publicKeyMaterialType', ],
			],
		],
		'UploadSSHPublicKeyResponse'                        => [
			'type'    => 'structure',
			'members' => [ 'SSHPublicKey' => [ 'shape' => 'SSHPublicKey', ], ],
		],
		'UploadServerCertificateRequest'                    => [
			'type'     => 'structure',
			'required' => [
				'ServerCertificateName',
				'CertificateBody',
				'PrivateKey',
			],
			'members'  => [
				'Path'                  => [ 'shape' => 'pathType', ],
				'ServerCertificateName' => [ 'shape' => 'serverCertificateNameType', ],
				'CertificateBody'       => [ 'shape' => 'certificateBodyType', ],
				'PrivateKey'            => [ 'shape' => 'privateKeyType', ],
				'CertificateChain'      => [ 'shape' => 'certificateChainType', ],
			],
		],
		'UploadServerCertificateResponse'                   => [
			'type'    => 'structure',
			'members' => [ 'ServerCertificateMetadata' => [ 'shape' => 'ServerCertificateMetadata', ], ],
		],
		'UploadSigningCertificateRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'CertificateBody', ],
			'members'  => [
				'UserName'        => [ 'shape' => 'existingUserNameType', ],
				'CertificateBody' => [ 'shape' => 'certificateBodyType', ],
			],
		],
		'UploadSigningCertificateResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'Certificate', ],
			'members'  => [ 'Certificate' => [ 'shape' => 'SigningCertificate', ], ],
		],
		'User'                                              => [
			'type'     => 'structure',
			'required' => [
				'Path',
				'UserName',
				'UserId',
				'Arn',
				'CreateDate',
			],
			'members'  => [
				'Path'                => [ 'shape' => 'pathType', ],
				'UserName'            => [ 'shape' => 'userNameType', ],
				'UserId'              => [ 'shape' => 'idType', ],
				'Arn'                 => [ 'shape' => 'arnType', ],
				'CreateDate'          => [ 'shape' => 'dateType', ],
				'PasswordLastUsed'    => [ 'shape' => 'dateType', ],
				'PermissionsBoundary' => [ 'shape' => 'AttachedPermissionsBoundary', ],
				'Tags'                => [ 'shape' => 'tagListType', ],
			],
		],
		'UserDetail'                                        => [
			'type'    => 'structure',
			'members' => [
				'Path'                    => [ 'shape' => 'pathType', ],
				'UserName'                => [ 'shape' => 'userNameType', ],
				'UserId'                  => [ 'shape' => 'idType', ],
				'Arn'                     => [ 'shape' => 'arnType', ],
				'CreateDate'              => [ 'shape' => 'dateType', ],
				'UserPolicyList'          => [ 'shape' => 'policyDetailListType', ],
				'GroupList'               => [ 'shape' => 'groupNameListType', ],
				'AttachedManagedPolicies' => [ 'shape' => 'attachedPoliciesListType', ],
				'PermissionsBoundary'     => [ 'shape' => 'AttachedPermissionsBoundary', ],
				'Tags'                    => [ 'shape' => 'tagListType', ],
			],
		],
		'VirtualMFADevice'                                  => [
			'type'     => 'structure',
			'required' => [ 'SerialNumber', ],
			'members'  => [
				'SerialNumber'     => [ 'shape' => 'serialNumberType', ],
				'Base32StringSeed' => [ 'shape' => 'BootstrapDatum', ],
				'QRCodePNG'        => [ 'shape' => 'BootstrapDatum', ],
				'User'             => [ 'shape' => 'User', ],
				'EnableDate'       => [ 'shape' => 'dateType', ],
			],
		],
		'accessKeyIdType'                                   => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 16,
			'pattern' => '[\\w]+',
		],
		'accessKeyMetadataListType'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AccessKeyMetadata', ],
		],
		'accessKeySecretType'                               => [ 'type' => 'string', 'sensitive' => true, ],
		'accountAliasListType'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'accountAliasType', ],
		],
		'accountAliasType'                                  => [
			'type'    => 'string',
			'max'     => 63,
			'min'     => 3,
			'pattern' => '^[a-z0-9](([a-z0-9]|-(?!-))*[a-z0-9])?$',
		],
		'arnType'                                           => [ 'type' => 'string', 'max' => 2048, 'min' => 20, ],
		'assignmentStatusType'                              => [
			'type' => 'string',
			'enum' => [ 'Assigned', 'Unassigned', 'Any', ],
		],
		'attachedPoliciesListType'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AttachedPolicy', ],
		],
		'attachmentCountType'                               => [ 'type' => 'integer', ],
		'authenticationCodeType'                            => [
			'type'    => 'string',
			'max'     => 6,
			'min'     => 6,
			'pattern' => '[\\d]+',
		],
		'booleanObjectType'                                 => [ 'type' => 'boolean', 'box' => true, ],
		'booleanType'                                       => [ 'type' => 'boolean', ],
		'certificateBodyType'                               => [
			'type'    => 'string',
			'max'     => 16384,
			'min'     => 1,
			'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+',
		],
		'certificateChainType'                              => [
			'type'    => 'string',
			'max'     => 2097152,
			'min'     => 1,
			'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+',
		],
		'certificateIdType'                                 => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 24,
			'pattern' => '[\\w]+',
		],
		'certificateListType'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SigningCertificate', ],
		],
		'clientIDListType'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'clientIDType', ],
		],
		'clientIDType'                                      => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'credentialReportExpiredExceptionMessage'           => [ 'type' => 'string', ],
		'credentialReportNotPresentExceptionMessage'        => [ 'type' => 'string', ],
		'credentialReportNotReadyExceptionMessage'          => [ 'type' => 'string', ],
		'customSuffixType'                                  => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'dateType'                                          => [ 'type' => 'timestamp', ],
		'deleteConflictMessage'                             => [ 'type' => 'string', ],
		'duplicateCertificateMessage'                       => [ 'type' => 'string', ],
		'duplicateSSHPublicKeyMessage'                      => [ 'type' => 'string', ],
		'encodingType'                                      => [ 'type' => 'string', 'enum' => [ 'SSH', 'PEM', ], ],
		'entityAlreadyExistsMessage'                        => [ 'type' => 'string', ],
		'entityDetailsListType'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EntityDetails', ],
		],
		'entityListType'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EntityType', ],
		],
		'entityNameType'                                    => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'entityTemporarilyUnmodifiableMessage'              => [ 'type' => 'string', ],
		'existingUserNameType'                              => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'globalEndpointTokenVersion'                        => [
			'type' => 'string',
			'enum' => [ 'v1Token', 'v2Token', ],
		],
		'groupDetailListType'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'GroupDetail', ],
		],
		'groupListType'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Group', ],
		],
		'groupNameListType'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'groupNameType', ],
		],
		'groupNameType'                                     => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'idType'                                            => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 16,
			'pattern' => '[\\w]+',
		],
		'instanceProfileListType'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InstanceProfile', ],
		],
		'instanceProfileNameType'                           => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'integerType'                                       => [ 'type' => 'integer', ],
		'invalidAuthenticationCodeMessage'                  => [ 'type' => 'string', ],
		'invalidCertificateMessage'                         => [ 'type' => 'string', ],
		'invalidInputMessage'                               => [ 'type' => 'string', ],
		'invalidPublicKeyMessage'                           => [ 'type' => 'string', ],
		'invalidUserTypeMessage'                            => [ 'type' => 'string', ],
		'jobIDType'                                         => [ 'type' => 'string', 'max' => 36, 'min' => 36, ],
		'jobStatusType'                                     => [
			'type' => 'string',
			'enum' => [ 'IN_PROGRESS', 'COMPLETED', 'FAILED', ],
		],
		'keyPairMismatchMessage'                            => [ 'type' => 'string', ],
		'limitExceededMessage'                              => [ 'type' => 'string', ],
		'listPolicyGrantingServiceAccessResponseListType'   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ListPoliciesGrantingServiceAccessEntry', ],
		],
		'malformedCertificateMessage'                       => [ 'type' => 'string', ],
		'malformedPolicyDocumentMessage'                    => [ 'type' => 'string', ],
		'markerType'                                        => [
			'type'    => 'string',
			'max'     => 320,
			'min'     => 1,
			'pattern' => '[\\u0020-\\u00FF]+',
		],
		'maxItemsType'                                      => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ],
		'maxPasswordAgeType'                                => [
			'type' => 'integer',
			'box'  => true,
			'max'  => 1095,
			'min'  => 1,
		],
		'mfaDeviceListType'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MFADevice', ],
		],
		'minimumPasswordLengthType'                         => [ 'type' => 'integer', 'max' => 128, 'min' => 6, ],
		'noSuchEntityMessage'                               => [ 'type' => 'string', ],
		'organizationsEntityPathType'                       => [
			'type'    => 'string',
			'max'     => 427,
			'min'     => 19,
			'pattern' => '^o-[0-9a-z]{10,32}\\/r-[0-9a-z]{4,32}[0-9a-z-\\/]*',
		],
		'organizationsPolicyIdType'                         => [
			'type'    => 'string',
			'pattern' => '^p-[0-9a-zA-Z_]{8,128}$',
		],
		'passwordPolicyViolationMessage'                    => [ 'type' => 'string', ],
		'passwordReusePreventionType'                       => [
			'type' => 'integer',
			'box'  => true,
			'max'  => 24,
			'min'  => 1,
		],
		'passwordType'                                      => [
			'type'      => 'string',
			'max'       => 128,
			'min'       => 1,
			'pattern'   => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+',
			'sensitive' => true,
		],
		'pathPrefixType'                                    => [
			'type'    => 'string',
			'max'     => 512,
			'min'     => 1,
			'pattern' => '\\u002F[\\u0021-\\u007F]*',
		],
		'pathType'                                          => [
			'type'    => 'string',
			'max'     => 512,
			'min'     => 1,
			'pattern' => '(\\u002F)|(\\u002F[\\u0021-\\u007F]+\\u002F)',
		],
		'policyDescriptionType'                             => [ 'type' => 'string', 'max' => 1000, ],
		'policyDetailListType'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyDetail', ],
		],
		'policyDocumentType'                                => [
			'type'    => 'string',
			'max'     => 131072,
			'min'     => 1,
			'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+',
		],
		'policyDocumentVersionListType'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyVersion', ],
		],
		'policyEvaluationErrorMessage'                      => [ 'type' => 'string', ],
		'policyGrantingServiceAccessListType'               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PolicyGrantingServiceAccess', ],
		],
		'policyListType'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Policy', ],
		],
		'policyNameListType'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'policyNameType', ],
		],
		'policyNameType'                                    => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'policyNotAttachableMessage'                        => [ 'type' => 'string', ],
		'policyOwnerEntityType'                             => [
			'type' => 'string',
			'enum' => [ 'USER', 'ROLE', 'GROUP', ],
		],
		'policyPathType'                                    => [
			'type'    => 'string',
			'max'     => 512,
			'min'     => 1,
			'pattern' => '((/[A-Za-z0-9\\.,\\+@=_-]+)*)/',
		],
		'policyScopeType'                                   => [
			'type' => 'string',
			'enum' => [ 'All', 'AWS', 'Local', ],
		],
		'policyType'                                        => [
			'type' => 'string',
			'enum' => [ 'INLINE', 'MANAGED', ],
		],
		'policyVersionIdType'                               => [
			'type'    => 'string',
			'pattern' => 'v[1-9][0-9]*(\\.[A-Za-z0-9-]*)?',
		],
		'privateKeyType'                                    => [
			'type'      => 'string',
			'max'       => 16384,
			'min'       => 1,
			'pattern'   => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+',
			'sensitive' => true,
		],
		'publicKeyFingerprintType'                          => [
			'type'    => 'string',
			'max'     => 48,
			'min'     => 48,
			'pattern' => '[:\\w]+',
		],
		'publicKeyIdType'                                   => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 20,
			'pattern' => '[\\w]+',
		],
		'publicKeyMaterialType'                             => [
			'type'    => 'string',
			'max'     => 16384,
			'min'     => 1,
			'pattern' => '[\\u0009\\u000A\\u000D\\u0020-\\u00FF]+',
		],
		'reportGenerationLimitExceededMessage'              => [ 'type' => 'string', ],
		'responseMarkerType'                                => [ 'type' => 'string', ],
		'roleDescriptionType'                               => [
			'type'    => 'string',
			'max'     => 1000,
			'pattern' => '[\\p{L}\\p{M}\\p{Z}\\p{S}\\p{N}\\p{P}]*',
		],
		'roleDetailListType'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RoleDetail', ],
		],
		'roleListType'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Role', ],
		],
		'roleMaxSessionDurationType'                        => [ 'type' => 'integer', 'max' => 43200, 'min' => 3600, ],
		'roleNameType'                                      => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'serialNumberType'                                  => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 9,
			'pattern' => '[\\w+=/:,.@-]+',
		],
		'serverCertificateMetadataListType'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ServerCertificateMetadata', ],
		],
		'serverCertificateNameType'                         => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'serviceFailureExceptionMessage'                    => [ 'type' => 'string', ],
		'serviceName'                                       => [ 'type' => 'string', ],
		'serviceNameType'                                   => [ 'type' => 'string', ],
		'serviceNamespaceListType'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'serviceNamespaceType', ],
			'max'    => 200,
			'min'    => 1,
		],
		'serviceNamespaceType'                              => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 1,
			'pattern' => '[\\w-]*',
		],
		'serviceNotSupportedMessage'                        => [ 'type' => 'string', ],
		'servicePassword'                                   => [ 'type' => 'string', 'sensitive' => true, ],
		'serviceSpecificCredentialId'                       => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 20,
			'pattern' => '[\\w]+',
		],
		'serviceUserName'                                   => [
			'type'    => 'string',
			'max'     => 200,
			'min'     => 17,
			'pattern' => '[\\w+=,.@-]+',
		],
		'sortKeyType'                                       => [
			'type' => 'string',
			'enum' => [
				'SERVICE_NAMESPACE_ASCENDING',
				'SERVICE_NAMESPACE_DESCENDING',
				'LAST_AUTHENTICATED_TIME_ASCENDING',
				'LAST_AUTHENTICATED_TIME_DESCENDING',
			],
		],
		'statusType'                                        => [
			'type' => 'string',
			'enum' => [ 'Active', 'Inactive', ],
		],
		'stringType'                                        => [ 'type' => 'string', ],
		'summaryKeyType'                                    => [
			'type' => 'string',
			'enum' => [
				'Users',
				'UsersQuota',
				'Groups',
				'GroupsQuota',
				'ServerCertificates',
				'ServerCertificatesQuota',
				'UserPolicySizeQuota',
				'GroupPolicySizeQuota',
				'GroupsPerUserQuota',
				'SigningCertificatesPerUserQuota',
				'AccessKeysPerUserQuota',
				'MFADevices',
				'MFADevicesInUse',
				'AccountMFAEnabled',
				'AccountAccessKeysPresent',
				'AccountSigningCertificatesPresent',
				'AttachedPoliciesPerGroupQuota',
				'AttachedPoliciesPerRoleQuota',
				'AttachedPoliciesPerUserQuota',
				'Policies',
				'PoliciesQuota',
				'PolicySizeQuota',
				'PolicyVersionsInUse',
				'PolicyVersionsInUseQuota',
				'VersionsPerPolicyQuota',
				'GlobalEndpointTokenVersion',
			],
		],
		'summaryMapType'                                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'summaryKeyType', ],
			'value' => [ 'shape' => 'summaryValueType', ],
		],
		'summaryValueType'                                  => [ 'type' => 'integer', ],
		'tagKeyListType'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'tagKeyType', ],
			'max'    => 50,
		],
		'tagKeyType'                                        => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]+',
		],
		'tagListType'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', ],
			'max'    => 50,
		],
		'tagValueType'                                      => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 0,
			'pattern' => '[\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*',
		],
		'thumbprintListType'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'thumbprintType', ],
		],
		'thumbprintType'                                    => [ 'type' => 'string', 'max' => 40, 'min' => 40, ],
		'unmodifiableEntityMessage'                         => [ 'type' => 'string', ],
		'unrecognizedPublicKeyEncodingMessage'              => [ 'type' => 'string', ],
		'userDetailListType'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'UserDetail', ],
		],
		'userListType'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'User', ],
		],
		'userNameType'                                      => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
		'virtualMFADeviceListType'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'VirtualMFADevice', ],
		],
		'virtualMFADeviceName'                              => [
			'type'    => 'string',
			'min'     => 1,
			'pattern' => '[\\w+=,.@-]+',
		],
	],
];
