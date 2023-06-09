<?php

declare(strict_types=1);

namespace Sv\Util;

class Arr
{
    public static function unique(array $array, int $sort_flags = \SORT_STRING, array $keys): array
    {
        foreach ($array as $item) {
            if (gettype($item) != 'array') {
                return array_unique($array, $sort_flags);
            }
        }
        $temp = [];
        $new = [];
        foreach ($array as $item) {
            $same = [];
            foreach ($keys as $key) {
                $same[$key] = $item[$key];
            }
            $k = serialize($same);

            if (!isset($temp[$k])) {
                $temp[$k] = true;
                $new[] = $same;
            }
        }

        return $new;
    }

    public static function toTree(array $list, string $pk = 'id', string $pid = 'pid', $child = 'children'): array
    {
        $tree = array();
        if (!is_array($list)) {
            return $tree;
        }
        $refer = array();
        $parentNodeIdArr = [];
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] = &$list[$key];
            $parentNodeIdArr[$data[$pid]] = $data[$pid];
        }
        /* 寻找根结点 */
        foreach ($list as $key => $data) {
            if (in_array($data[$pk], $parentNodeIdArr)) {
                unset($parentNodeIdArr[$data[$pk]]);
            }
        }
        foreach ($list as $key => $data) {
            $parantId = $data[$pid];
            if (in_array($parantId, $parentNodeIdArr)) {
                $tree[] = &$list[$key];
            } else {
                if (isset($refer[$parantId])) {
                    $parent = &$refer[$parantId];
                    $parent[$child][] = &$list[$key];
                }
            }
        }
        return $tree;
    }
}
