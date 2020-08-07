<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class TestController extends Controller
{
    public function test1(){

        // echo 'okay test method launched';

        // $pages = Page::All();

        // foreach($pages as $page){

        //     echo $page->name . ' - ' . $page->description;

        //     echo '<br>';

        // }

        //dd($pages);
        // $pages = Page::where('id', 1)->where('name','This')->first();


        $page = Page::where('id',1)->first();

        return view('test1', ['page' => $page]);


    }
}
