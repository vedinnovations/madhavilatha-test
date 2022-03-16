<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function drug1()
    {
        $drugs = json_decode(file_get_contents(public_path() . "/drug-1.json"), true);
		$keys = array_column($drugs['fields'], 'order');
		array_multisort($keys, SORT_ASC, $drugs['fields']); 
		return view('drug1',["data"=>$drugs['fields']]);
    }
	public function drug2()
    {
        $drugs = json_decode(file_get_contents(public_path() . "/drug-2.json"), true);
		$keys = array_column($drugs['fields'], 'order');
		array_multisort($keys, SORT_ASC, $drugs['fields']);
		return view('drug2',["data"=>$drugs['fields']]);
    }
}
