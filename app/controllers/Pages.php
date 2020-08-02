<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'TraversyMVC'
        ];

        $this->view('pages/index', $data); // view() comes from Controller class
    }

    public function about()
    {
        $data = [
                'title' => 'About Us'
            ];

        $this->view('pages/about', $data);
    }

    // public function about($params)
    // {
    //     if ($params === '33') {
    //         $data = [
    //             'title' => 'About Us - 33'
    //         ];
    //     } else {
    //         $data = [
    //             'title' => 'About Us'
    //         ];
    //     }

    //     $this->view('pages/about', $data);
    // }
}
