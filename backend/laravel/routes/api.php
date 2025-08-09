<?php

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});