<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Email;

class StoreSessionData extends Data
{
    public function __construct(
        #[Email]
        public string $email,
        public string $password,
    )
    {
    }
}
