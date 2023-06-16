<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto_permission;

/**
 */
class PermissionClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto_permission\GetRoleByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRoleById(\Proto_permission\GetRoleByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetRoleById',
        $argument,
        ['\Proto_permission\GetRoleByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetRoleUsersByUserIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRoleUsersByUserId(\Proto_permission\GetRoleUsersByUserIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetRoleUsersByUserId',
        $argument,
        ['\Proto_permission\GetRoleUsersByUserIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetRoleUsersByAppIdAndUserIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRoleUsersByAppIdAndUserId(\Proto_permission\GetRoleUsersByAppIdAndUserIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetRoleUsersByAppIdAndUserId',
        $argument,
        ['\Proto_permission\GetRoleUsersByAppIdAndUserIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetActionByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetActionById(\Proto_permission\GetActionByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetActionById',
        $argument,
        ['\Proto_permission\GetActionByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsById(\Proto_permission\GetPermissionsByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsById',
        $argument,
        ['\Proto_permission\GetPermissionsByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleId(\Proto_permission\GetPermissionsByAppIdAndRoleIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleId',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIds(\Proto_permission\GetPermissionsByAppIdAndRoleIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIds',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdAndActionId(\Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdAndActionId',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdAndActionIds(\Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdAndActionIds',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdsAndActionId(\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdsAndActionId',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdsAndActionIds(\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdsAndActionIds',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdAndObjectTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdAndObjectType(\Proto_permission\GetPermissionsByAppIdAndRoleIdAndObjectTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdAndObjectType',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdAndObjectTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdAndObjectTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdAndObjectTypes(\Proto_permission\GetPermissionsByAppIdAndRoleIdAndObjectTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdAndObjectTypes',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdAndObjectTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsAndObjectTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdsAndObjectType(\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndObjectTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdsAndObjectType',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndObjectTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsAndObjectTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdsAndObjectTypes(\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndObjectTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdsAndObjectTypes',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndObjectTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdAndObjectTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdAndActionIdAndObjectType(\Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdAndObjectTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdAndActionIdAndObjectType',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdAndActionIdAndObjectTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdAndObjectTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdsAndActionIdAndObjectType(\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdAndObjectTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdsAndActionIdAndObjectType',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdAndObjectTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectType(\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectType',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypes(\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_permission.Permission/GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypes',
        $argument,
        ['\Proto_permission\GetPermissionsByAppIdAndRoleIdsAndActionIdsAndObjectTypesResponse', 'decode'],
        $metadata, $options);
    }

}
