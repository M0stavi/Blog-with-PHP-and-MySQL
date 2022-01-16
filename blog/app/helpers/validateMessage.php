<?php

function validateMessage($topic)
{
    $errors = array();

    if (empty($topic['email'])) {
        array_push($errors, 'Email is required');
    }

    if (empty($topic['message'])) {
        array_push($errors, 'Email is required');
    }

    return $errors;
}
?>