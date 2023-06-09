<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth.proto

namespace Proto_auth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto_auth.GenRefreshTokenRequest</code>
 */
class GenRefreshTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string grantType = 1;</code>
     */
    protected $grantType = '';
    /**
     * Generated from protobuf field <code>string clientId = 2;</code>
     */
    protected $clientId = '';
    /**
     * Generated from protobuf field <code>string clientSecret = 3;</code>
     */
    protected $clientSecret = '';
    /**
     * Generated from protobuf field <code>string refreshToken = 4;</code>
     */
    protected $refreshToken = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $grantType
     *     @type string $clientId
     *     @type string $clientSecret
     *     @type string $refreshToken
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string grantType = 1;</code>
     * @return string
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * Generated from protobuf field <code>string grantType = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGrantType($var)
    {
        GPBUtil::checkString($var, True);
        $this->grantType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientId = 2;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Generated from protobuf field <code>string clientId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientSecret = 3;</code>
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Generated from protobuf field <code>string clientSecret = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClientSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientSecret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string refreshToken = 4;</code>
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Generated from protobuf field <code>string refreshToken = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRefreshToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->refreshToken = $var;

        return $this;
    }

}

