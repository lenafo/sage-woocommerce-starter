<?php

return [
    'paths' => [
        resource_path('views'),
        resource_path('views/woocommerce'),
    ],
    'compiled' => env('VIEW_COMPILED_PATH', realpath(storage_path('framework/views'))),
];
