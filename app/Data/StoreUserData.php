<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Unique;

class StoreUserData extends Data
{
    public function __construct(
        #[Email]
        #[Max(255)]
        #[Unique('users')]
        public string $email,
        #[Min(8)]
        public string $password,
        #[Max(255)]
        public string $name,
    )
    {
    }
}
