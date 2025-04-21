<?php

declare(strict_types=1);

namespace Sv\Util;

class Curl
{
    public static function get(string $url, array $headers = [])
    {
        $curl = curl_init();

        $opt = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ];

        if (!empty($headers)) {
            $opt[CURLOPT_HTTPHEADER] = $headers;
        }

        curl_setopt_array($curl, $opt);

        $response = curl_exec($curl);

        return $response;
    }

    public static function post(string $url, $params = [], array $headers = [])
    {
        try {
            $curl = curl_init();

            $opt = [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
            ];


            if (!empty($params)) {
                if (!empty($headers)) {
                    $headers[] = ['Content-Type: application/x-www-form-urlencoded'];
                } else {
                    $headers = ['Content-Type: application/x-www-form-urlencoded'];
                }
                if (in_array('Content-Type: application/x-www-form-urlencoded', $headers)) {
                    $opt[CURLOPT_POSTFIELDS] = http_build_query($params);
                } elseif (in_array('Content-Type: application/json', $headers)) {
                    $opt[CURLOPT_POSTFIELDS] = json_encode($params);
                }
            }

            curl_setopt_array(
                $curl,
                $opt
            );

            $response = curl_exec($curl);

            curl_close($curl);
            return $response;
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
