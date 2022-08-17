<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function showComponent1(){
        // $message⇒view-vladeより受け渡し、compact('message')⇒viewへ受け渡し
        $message = 'メッセージ123';
        return view('tests.component-test1',
        compact('message'));
    }

    public function showComponent2(){
        return view('tests.component-test2');
    }
}
