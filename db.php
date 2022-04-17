<?php

$hostname = "localhost";
$dbname = "belsut";
$username = "book";
$password = "*book*bsut";
$charset = "utf8mb4";

try {
    $conn = new PDO("mysql:host=$hostname; dbname=$dbname; charset=$charset;", $username, $password);
}
catch (PDOException $e){
    print("Connection failed: " . $e->getMessage());
}   

function get_etf_info() {
    global $conn;
    $info = $conn->query("SELECT * FROM etf_info");
    return $info;
}

// etf info by id
function get_etf_info_by_id($id) {
    global $conn;
    $info_by_id = $conn->query("SELECT * FROM etf_info WHERE id = $id");
    return $info_by_id;
}

// name and code by id
function get_etf_name_by_id($id) {
    global $conn;
    $etf_info = $conn->query("SELECT * FROM etf_info WHERE id = $id");
    foreach ($etf_info as $etf_infosy) {
        return $etf_infosy["name"];
        return $etf_infosy["code"];
    }
}

function get_etf_specializations() {
    global $conn;
    $specializations = $conn->query("SELECT * FROM etf_specializations");
    return $specializations;
}

// etf specializations by id
function get_etf_specializations_by_id($id) {
    global $conn;
    $specializations_by_id = $conn->query("SELECT * FROM etf_specializations WHERE id = $id");
    foreach ($specializations_by_id as $specialization_by_id) {
        return $specialization_by_id;
    }
}

function get_etf_questions() {
    global $conn;
    $questions = $conn->query("SELECT * FROM questions");
    return $questions;
}

function get_timetables() {
    global $conn;
    $timetables = $conn->query("SELECT * FROM timetable");
    return $timetables;
}

function get_sports() {
    global $conn;
    $sports = $conn->query("SELECT * FROM sports");
    return $sports;
}