<?php

namespace App\Data;

use App\Models\Project;
use Spatie\LaravelData\Data;

class ProjectListData extends Data
{
    public function __construct(
        public int    $id,
        public string $name,
        public string $color,
    )
    {
    }

    public static function fromModel(Project $project): ProjectListData
    {
        return new self(
            id: $project->id,
            name: $project->name,
            color: $project->color,
        );
    }
}
