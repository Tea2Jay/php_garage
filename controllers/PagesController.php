<?php

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $me = 'Me';
        return view('about', compact('me'));
    }

    public function contact()
    {
        return view('contact');
    }
}
