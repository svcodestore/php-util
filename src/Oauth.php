<?php

declare(strict_types=1);

namespace Sv\Util;

class Oauth
{
    public static function getCurrentApplication(int $appId, string $serverAddress): array
    {
        $client = new \Proto_app\AppClient($serverAddress, [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);

        $rpcRequest = new \Proto_app\GetAppByIdRequest();
        $rpcRequest->setId($appId);

        list($rpcResponse, $status) = $client->GetAppById($rpcRequest)->wait();

        if ($status->code !== \Grpc\STATUS_OK) {
            echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        }

        $json = $rpcResponse->getResult()->serializeToJsonString();
        $client->close();

        return [$json, $status];
    }
}
