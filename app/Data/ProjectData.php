<?php

namespace App\Data;

use App\Models\Project;
use Spatie\LaravelData\Data;

class ProjectData extends Data
{
    public function __construct(
        public string  $name,
        public string $color,
    )
    {
    }

    public static function fromModel(Project $project): ProjectData
    {
        return new self(
            name: $project->name,
            color: $project->color,
        );
    }
}
