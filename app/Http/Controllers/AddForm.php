<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Process;

class AddForm extends Controller
{

    public function python()
    {
        return view('pages.python');
    }
    
    public function result(Request $request)
    {
        $code = $request->input('code');
        $pl = $request->input('pl');
        $task_id = $request->input('t_id');

        if ($pl === 'py3') {
            $fn = "1.py";
            Storage::disk('codes')->put("" . $fn, $code);
            $p = Storage::disk('tests')->path('');
            $c = Storage::disk('codes')->path('');
            for ($i = 1; $i <= 3; $i++) {
                Storage::copy("tests/1/in{$i}.txt", "codes/in{$i}.txt");
            }
            $results = [];
            for ($i = 1; $i <= 3; $i++) {
                $result = Process::path($c)->run("python3 $fn < in{$i}.txt > out{$i}.txt");
                $results[] = $result->errorOutput();
            }
            return $results;
        } else if ($pl === 'cpp') {
            Storage::put("code/1.cpp", $code);
        }
    }
}
