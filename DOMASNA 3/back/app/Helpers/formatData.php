<?php

function formatData($data) {
    if(!isset($data[0]['properties'])) {
        return $data;
    }

    for($i = 0; $i < count($data); $i ++) {
        $changed = collect($data[$i]['properties']);
        $data[$i]['properties'] =  $changed->mapWithKeys(function ($item) {
            return [$item['type'] => $item['data']];
        });
    }

    return $data;
}