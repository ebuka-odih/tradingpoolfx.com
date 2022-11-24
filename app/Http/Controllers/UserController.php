<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Funding;
use App\Rules\MatchOldPassword;
use App\Subscribe;
use App\Trade;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $withdrawal = Withdraw::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $deposits = Deposit::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $bonus = Funding::whereUserId(\auth()->id())->select('type', 'Bonus')->where('status', 1)->sum('amount');
        $bonus2 = Funding::whereUserId(\auth()->id())->select('type', 'Referral-Bonus')->where('status', 1)->sum('amount');
        $investment = Subscribe::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        return view('dashboard.index', compact('deposits', 'withdrawal','bonus', 'bonus2', 'user', 'investment'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }
    public function editProfile()
    {
        $user = Auth::user();
        return view('dashboard.user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        $data = $this->getData($request);
        $user->update($data);
        return redirect()->back()->with('success', 'Profile Updated Successful');
    }
    protected function getData(Request $request){
        $rules = [
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'title' => 'nullable',
            'telegram' => 'nullable',
            'country' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function security()
    {
        $user = Auth::user();
        return view('dashboard.user.ChangePassword', compact('user'));
    }
    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back()->with('success', "Password Changed Successfully");
    }



}
