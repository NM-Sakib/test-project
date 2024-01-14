<?php

namespace Sakib\Crud;

use Illuminate\Support\Facades\Http;

class Crud {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}