<?php

declare(strict_types=1);

namespace Sv\Util;

class Oauth
{
    public static function getAppInfo(string $serverAddress, int $appId): array
    {
        $client = new \Proto_app\AppClient($serverAddress, [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);

        $rpcRequest = new \Proto_app\GetAppByIdRequest();
        $rpcRequest->setId($appId);

        list($rpcResponse, $status) = $client->GetAppById($rpcRequest)->wait();

        $json = $rpcResponse->getResult()->serializeToJsonString();
        $client->close();

        return [$json, $status];
    }

    public static function getAppMenus(string $serverAddress, int $appId, int $userId): array
    {
        $client = new \Proto_app\AppClient($serverAddress, [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);

        $rpcRequest = new \Proto_app\GetAhorizedMenusByAppIdAndUserIdRequest();
        $rpcRequest->setAppId($appId);
        $rpcRequest->setUserId($userId);

        list($rpcResponse, $status) = $client->GetAhorizedMenusByAppIdAndUserId($rpcRequest)->wait();

        $json = $rpcResponse->getResult()->serializeToJsonString();
        $client->close();

        return [$json, $status];
    }

    public static function logout(string $serverAddress, int $userId): array
    {
        $client = new \Proto_auth\AuthClient($serverAddress, [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);

        $rpcRequest = new \Proto_auth\LogoutRequest();
        $rpcRequest->setUserId($userId);

        list($rpcResponse, $status) = $client->Logout($rpcRequest)->wait();

        $json = $rpcResponse->getResult()->serializeToJsonString();
        $client->close();

        return [$json, $status];
    }
}
