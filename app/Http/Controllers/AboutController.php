<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('control-panel.about', compact('about'));
    }

    public function store(Request $request)
    {

        try{
            $about = About::findOrFail(1);
        }catch(ModelNotFoundException $e){
            $about = new About();
        }

        $about->title = $request->get('title');
        $about->about = $request->get('about');

        $about->save();

        return $this->index();

    }
}
