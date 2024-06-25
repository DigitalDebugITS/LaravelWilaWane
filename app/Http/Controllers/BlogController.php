<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogPosts = DB::table('blog')
            ->orderBy('date', 'desc')
            ->limit(3)
            ->get()
            ->map(function ($row) {
                return [
                    'id' => $row->id,
                    'image' => $row->Cover_Image,
                    'date' => $row->date,
                    'author' => $row->author,
                    'title' => $row->Title,
                    'content' => $row->Content
                ];
            })->toArray();

        return view('index', ['blogPosts' => $blogPosts]);
    }
}
