<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function resume()
    {
        return view('pages.resume');
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'Project Name 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!',
                'imageSrc' => 'https://dummyimage.com/300x400/343a40/6c757d',
                'imageAlt' => 'Project 1',
            ],
            [
                'title' => 'Project Name 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!',
                'imageSrc' => 'https://dummyimage.com/300x400/343a40/6c757d',
                'imageAlt' => 'Project 2',
            ],
        ];

        return view('pages.projects', compact('projects'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
