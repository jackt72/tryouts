<?php

namespace App;

/**
 * @property string $data
 * @property string $message
 * @property string $error
 * @property int $statusApi
 */
class Response
{
    protected $fillable = ['data', 'message', 'error','statusApi'];
}