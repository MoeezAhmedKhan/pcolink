<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\ApplySecondSection;
use App\Models\HelpSecondSection;
use App\Models\PcoCarsSecondSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function makeLogin(Request $request)
    {
        $admin = Admin::first();
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = array(
            'email' => $request->email,
            'password' => $request->password
        );


        if (Auth::guard('admin')->attempt($data)) {
            $request->session()->put('adminname', $admin->name);
            return redirect('dashboard');
        } else {
            return back()->withErrors(['message' => 'Invalid Email or Password']);
        }
    }
    public function dashboard()
    {
        // $tables = DB::select('SHOW TABLES');
        // Filter and count tables starting with "home"
        // $homeTablesCount = collect($tables)->filter(function ($table) {
        //     return str_starts_with(reset($table), 'home_');
        // })->count();
        $gettotalCars = PcoCarsSecondSection::all()->count();
        $getFaq = HelpSecondSection::all()->count();
        $getuserContact = ApplySecondSection::all()->count();
        // dd($gettotalCars);

        return view('admin.dashboard', ['gettotalCars' => $gettotalCars,'getFaq' => $getFaq,'getuserContact' => $getuserContact]);
    }

    public function destroy()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }
}
