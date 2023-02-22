<?php

function getMatriksGrade($id, $arr)
{
    foreach ($arr as $n) {
        if ($n->row_id == $id) {
            return $n->grade;
        }
    }
    return null;
}
function getMatriksSkor($id, $arr)
{
    foreach ($arr as $n) {
        if ($n->row_id == $id) {
            return $n->skor;
        }
    }
    return null;
}
function getMatriksBukti($id, $arr)
{
    foreach ($arr as $n) {
        if ($n->row_id == $id) {
            return $n->bukti;
        }
    }
    return false;
}
function getArray($row_key, $id, $arr)
{
    $array1 = array();
    $x = (object) [
        $row_key => null,
        "skor" => null,
        "remainingField" => 1,
    ];
    foreach ($arr as $n) {
        if ($n->{$row_key} == $id) {
            array_push($array1, $n);
        }
    }
    return $array1;
}
function getArrayItem($id, $arr)
{
    $x = (object) [
        "skor" => null,
        "remainingField" => 1,
    ];
    foreach ($arr as $n) {
        if ($n->id == $id) {
            return $n;
        }
    }
    return $x;
}
function getArrayItemWithId($row_key, $id, $arr)
{
    $x = (object) [
        $row_key => null,
        "remainingField" => 1,
    ];
    // return $row_key;
    foreach ($arr as $n) {
        if ($n->{$row_key} == $id) {
            return $n;
        }
    }
    return $x;
}

function toDashed($str)
{
    $str = strtolower($str);
    return str_replace(' ', '-', $str);
}
