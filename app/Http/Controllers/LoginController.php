<?php
 
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Models\User;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\Auth;
  
 class LoginController extends Controller
 {
     /**
      * Handle an authentication attempt.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */

    public function index()
    {
        return view('autentikasi.login');
    }

    public function indexReg()
    {
        return view('auth.register');
    }

    public function storeReg()
    {
        User::create([
            'name' => request()->name,
            'no_hp' => request()->no_hp,
            'roles' => request()->roles,
            'email' => request()->email,
            'password' => Hash::make(request()->password)
        ]);
        return redirect('/');
    }


    public function loginpersonal(Request $request)
    {   $data = User::where('email',$request->email)->firstOrFail();
        if ($data->roles == 'Personal User' or $data->roles == 'Admin'){
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                
                session(['login' => true]);
                
                if (auth()->user()->roles == 'Admin') {
                    return redirect()->intended('/admin/dashboard');
                }
                return redirect()->intended('/')->with('berhasil_login','Login Berhasil!');
            }else{
                return redirect('/login')->with('gagal_login','Email atau Password Salah!');
            }
        }else{
            return redirect('/login')->with('gagal_login','Email atau Password Salah!');
        }
    }

    public function loginorganizational(Request $request)
    {
        $data = User::where('email',$request->email)->firstOrFail();
        if ($data->roles == 'Organizational User'){
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                
                session(['login' => true]);
                return redirect()->intended('/')->with('berhasil_login','Login Berhasil!');
            }
        }else{
            return redirect('/login')->with('gagal_login','Email atau Password Salah!');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        $request->session()->forget('login');
    
        return redirect('/');
    }
 }