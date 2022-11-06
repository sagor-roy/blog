<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function access(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors(Toastr::error($validator->errors()->all()[0]))->withInput();
            }

            $credential = $request->only(['email', 'password']);
            if (Auth::attempt($credential)) {
                return redirect()->route('admin.dashboard');
            }
            Toastr::error('Credential does not match our record');
            return redirect()->back();
        } catch (Exception $error) {
            Toastr::error($error->getMessage());
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'img' => 'required|mimes:jpg,png,jpeg|max:6000',
                'designation' => 'required',
                'password' => 'required|confirmed',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors(Toastr::error($validator->errors()->all()[0]))->withInput();
            }

            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $img_name = substr(md5(time()), 0, 15) . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/', $img_name);
            }
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'desig' => $request->designation,
                'img' => 'uploads/' . $img_name,
                'password' => Hash::make($request->password),
            ]);
            Toastr::success('Data created successfully');
            return redirect()->back();
        } catch (Exception $error) {
            Toastr::error($error->getMessage());
            return redirect()->back();
        }
    }
}
