<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Service;
use App\Models\UserService;
use Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
     
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) ) {
            return redirect('/');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function is_authenticated(){
        if(Auth::check()){
            return response()
            ->json(['auth' => true]); 
        }
        return response()
            ->json(['auth' => false]); 
    }
    public function register_create(){
        
        return view('auth.register');
    }
    public function register(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'type' => 'required',
        ]);
        $model = new User;
        $model->fill($request->all());
        $model->password = Hash::make($request->password);
        $model->save();

        $service = Service::get();
        foreach($service as $data){
            $data = new UserService;
            $data->user_id = $model->id;
            $data->service_id = $data->id;
            $data->price = 0;
            $data->status = 1;
            $data->save();
        }

        return view('auth.login');
    }

   
}