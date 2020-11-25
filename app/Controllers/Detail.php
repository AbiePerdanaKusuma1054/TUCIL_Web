<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function marvel1()
    {
        $data =  [
            'title' => 'Avengers: Age of Ultron (2015)'
        ];
        return view('auth/detail/marvel1', $data);
    }

    public function marvel2()
    {
        $data =  [
            'title' => 'Avengers: Infinity War (2018)'
        ];
        return view('auth/detail/marvel2', $data);
    }

    public function marvel3()
    {
        $data =  [
            'title' => 'Avengers: Endgame (2019)'
        ];
        return view('auth/detail/marvel3', $data);
    }

    public function justice1()
    {
        $data =  [
            'title' => 'Batman vs Superman (2016)'
        ];
        return view('auth/detail/justice1', $data);
    }

    public function justice2()
    {
        $data =  [
            'title' => 'Justice League (2017)'
        ];
        return view('auth/detail/justice2', $data);
    }

    public function justice3()
    {
        $data =  [
            'title' => 'Wonder Womans (2017)'
        ];
        return view('auth/detail/justice3', $data);
    }
}
