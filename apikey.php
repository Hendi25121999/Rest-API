<?php

function getKey() {
    return ["2512", "Terbuka", "APIKEY"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getFilm() {
    $film = [
        ["title" => "FF9", "Tom & Jerry" => "film Kartun"],
        ["title" => "FF1", "Tomy Hawk" => "film Action"],
        ["title" => "FF2", "Ant man" => "film Superhero"]
    ];
    return $film;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getFilm());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>