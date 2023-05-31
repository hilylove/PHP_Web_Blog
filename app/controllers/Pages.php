<?php
class Pages extends Controller
{
    private $postModel;
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'TraversyMVC',
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        $this->view('pages/about', $data);
    }
}
