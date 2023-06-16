<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto_auth;

/**
 */
class AuthClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto_auth\GenAccessTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenAccessToken(\Proto_auth\GenAccessTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_auth.Auth/GenAccessToken',
        $argument,
        ['\Proto_auth\GenAccessTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_auth\GenRefreshTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenRefreshToken(\Proto_auth\GenRefreshTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_auth.Auth/GenRefreshToken',
        $argument,
        ['\Proto_auth\GenRefreshTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_auth\LogoutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Logout(\Proto_auth\LogoutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_auth.Auth/Logout',
        $argument,
        ['\Proto_auth\LogoutResponse', 'decode'],
        $metadata, $options);
    }

}
