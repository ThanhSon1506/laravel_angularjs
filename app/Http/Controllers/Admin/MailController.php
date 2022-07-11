<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        return view('admin.pages.mail.mail');
    }
    public function IndexEmailCompose(){
        return view('admin.pages.mail.EmailCompose');
    }
}
