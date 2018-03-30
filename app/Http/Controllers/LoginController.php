<?php
namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
      public function login(Request $request)
      {
          if(Auth::attempt([
              'email' => $request->email, 
              'password' => $request->password
          ]))
          {
              $user=User::where('email',$request->email)->first();
              if($user->is_admin())
              {
                  return redirect()->route('admin.dashbord');
              }
              else
              {
                  return redirect()->route('dashbord');
              }
          }
          else
          {
               return redirect()->back();
          }
      }
}
?>