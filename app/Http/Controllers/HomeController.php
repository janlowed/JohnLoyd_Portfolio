<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\About;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Webinar;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Educational;

class HomeController extends Controller
{
    /**x
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array();

        $users = User::all();
        $data['users'] = count($users);

        $abouts = About::all();
        $data['abouts'] = count($abouts);

        $skills = Skill::all();
        $data['skills'] = count($skills);

        $experiences = Experience::all();
        $data['experiences'] = count($experiences);

        $educationals = Educational::all();
        $data['educationals'] = count($educationals);

        $webinars = Webinar::all();
        $data['webinars'] = count($webinars);

        $blogs = Blog::all();
        $data['blogs'] = count($blogs);

        $contacts = Contact::all();
        $data['contacts'] = count($contacts);
        //dd(count($users));
        return view('home', compact('data'));
    }
}
