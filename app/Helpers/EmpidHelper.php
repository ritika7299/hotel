<?php

namespace App\Helpers;

function generateRandomEmpId($length = 8)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $empid = '';
    for ($i = 0; $i < $length; $i++) {
        $empid .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $empid;
}

function getUniqueEmpId($model, $length = 8)
{
    do {
        $newEmpId = generateRandomEmpId($length);
    } while ($model->find($newEmpId)); // Check if empid already exists
    return $newEmpId;
}
