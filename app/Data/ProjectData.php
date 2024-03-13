<?php

namespace App\Data;

use App\Models\Project;
use Spatie\LaravelData\Data;

class ProjectData extends Data
{
    public function __construct(
        public string $name,
        public ?string $icon,
    )
    {
    }

    public static function fromModel(Project $project): ProjectData
    {
        return new self(
            name: $project->name,
            icon: $project->icon?->name,
        );
    }
}
