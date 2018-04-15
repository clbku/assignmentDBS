<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function getList() {
        $account = DB::select('select * from accounts ');
        return view('admin.pages.account', compact('account'));
    }
}
