<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index($category_slug = null)
    {
        if(!$category_slug){
            $category_slug = Category::query()->first()->slug;
        }

        $projects = Project::query()
            ->whereRelation('category', 'slug', $category_slug)
            ->get()
            ->chunk(2);

        $categories = Category::query()->get();

        return view('projects',compact('projects','categories'));
    }
}
