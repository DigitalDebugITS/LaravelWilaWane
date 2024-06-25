<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourcesController extends Controller
{
    public function index(Request $request)
    {
        $resourcesPerPage = 4;
        $page = $request->get('page', 1);
        $start = ($page - 1) * $resourcesPerPage;
        $selectedCategory = $request->get('category', '');

        $query = Resource::query();

        if ($selectedCategory) {
            $query->where('category', $selectedCategory);
        }

        $resources = $query->orderBy('id', 'desc')
                           ->skip($start)
                           ->take($resourcesPerPage)
                           ->get();

        $totalResources = $query->count();
        $totalPages = ceil($totalResources / $resourcesPerPage);

        $categories = Resource::distinct('category')->pluck('category');

        return view('resources', compact('resources', 'totalPages', 'page', 'selectedCategory', 'categories'));
    }
}
