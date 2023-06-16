<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto_app;

/**
 */
class AppClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto_app\GetAppByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAppById(\Proto_app\GetAppByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_app.App/GetAppById',
        $argument,
        ['\Proto_app\GetAppByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto_app\GetAhorizedMenusByAppIdAndUserIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAhorizedMenusByAppIdAndUserId(\Proto_app\GetAhorizedMenusByAppIdAndUserIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto_app.App/GetAhorizedMenusByAppIdAndUserId',
        $argument,
        ['\Proto_app\GetAhorizedMenusByAppIdAndUserIdResponse', 'decode'],
        $metadata, $options);
    }

}
