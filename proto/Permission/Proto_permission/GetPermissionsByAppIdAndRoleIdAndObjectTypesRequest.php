<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: permission.proto

namespace Proto_permission;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto_permission.GetPermissionsByAppIdAndRoleIdAndObjectTypesRequest</code>
 */
class GetPermissionsByAppIdAndRoleIdAndObjectTypesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 AppId = 1;</code>
     */
    protected $AppId = 0;
    /**
     * Generated from protobuf field <code>int64 RoleId = 2;</code>
     */
    protected $RoleId = 0;
    /**
     * Generated from protobuf field <code>repeated string ObjectTypes = 3;</code>
     */
    private $ObjectTypes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $AppId
     *     @type int|string $RoleId
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ObjectTypes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Permission::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 AppId = 1;</code>
     * @return int|string
     */
    public function getAppId()
    {
        return $this->AppId;
    }

    /**
     * Generated from protobuf field <code>int64 AppId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkInt64($var);
        $this->AppId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 RoleId = 2;</code>
     * @return int|string
     */
    public function getRoleId()
    {
        return $this->RoleId;
    }

    /**
     * Generated from protobuf field <code>int64 RoleId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoleId($var)
    {
        GPBUtil::checkInt64($var);
        $this->RoleId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string ObjectTypes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObjectTypes()
    {
        return $this->ObjectTypes;
    }

    /**
     * Generated from protobuf field <code>repeated string ObjectTypes = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObjectTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ObjectTypes = $arr;

        return $this;
    }

}

