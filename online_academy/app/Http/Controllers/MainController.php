<?php

namespace App\Http\Controllers;

use App\Models\Rewiews;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function python()
    {
        $rewiews_p = new Rewiews();
        return view('python', ['rewiews_p' => $rewiews_p->all()]);
    }

    public function python_rewiew(Request $p_rewiew)
    {
        $valid = $p_rewiew->validate([
            'message' => 'required|min:15|max:1000'
        ]);

        $rewiew_python = new Rewiews();
        $rewiew_python->message = $p_rewiew->input('message');

        $rewiew_python->save();

        return redirect()->route('python');
    }

    public function javascript()
    {
        $rewiews_js = new Rewiews();
        return view('javascript', ['rewiews_js' => $rewiews_js->all()]);
    }
    public function javascript_rewiew(Request $js_rewiew)
    {
        $valid = $js_rewiew->validate([
            'message' => 'required|min:15|max:1000'
        ]);

        $javascript_rewiew = new Rewiews();
        $javascript_rewiew->message = $js_rewiew->input('message');

        $javascript_rewiew->save();

        return redirect()->route('javascript');
    }

    public function java()
    {
        $rewiews_j = new Rewiews();
        return view('java', ['rewiews_j' => $rewiews_j->all()]);
    }

    public function java_rewiew(Request $j_rewiew)
    {
        $valid = $j_rewiew->validate([
            'message' => 'required|min:15|max:1000'
        ]);

        $java_rewiew = new Rewiews();
        $java_rewiew->message = $j_rewiew->input('message');

        $java_rewiew->save();

        return redirect()->route('java');
    }

    public function c_sharpe()
    {
        $rewiews_c = new Rewiews();
        return view('c_sharpe', ['rewiews_c' => $rewiews_c->all()]);
    }
    public function c_sharpe_rewiew(Request $c_rewiew)
    {
        $valid = $c_rewiew->validate([
            'message' => 'required|min:15|max:1000'
        ]);

        $c_sharpe_rewiew = new Rewiews();
        $c_sharpe_rewiew->message = $c_rewiew->input('message');

        $c_sharpe_rewiew->save();

        return redirect()->route('c_sharpe');
    }

}

