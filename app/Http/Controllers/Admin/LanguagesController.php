<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{

    public function index(){

        $languages = Language::select()->paginate(PAGINATION_COUNT);
        return view('admin.languages.index', compact('languages'));


        return view('admin.languages.index');



    }//end index
    public function scopeSelection($query){


        return $query->select('abbr','name','active','direction');
    }
}
