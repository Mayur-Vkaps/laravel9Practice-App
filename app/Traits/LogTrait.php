<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

trait LogTrait
{
    public function log($message)
    {
        Log::info($message);
    }
    public function slug($text)
    {
        return Str::slug($text);
    }
}
