<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Data\ProjectData;
use App\Data\ProjectListData;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Contracts\Pagination\Paginator;

class ProjectController extends Controller
{
    public function index(): Paginator
    {
        $userProjectsQuery = auth()->user()->projects()->getQuery();
        $projects = QueryBuilder::for($userProjectsQuery)
            ->paginate();

        return ProjectListData::collect($projects);
    }

    public function show(Project $project): ProjectData
    {
        return ProjectData::from($project);
    }
}
