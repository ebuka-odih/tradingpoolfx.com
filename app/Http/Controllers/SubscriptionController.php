<?php

namespace App\Http\Controllers;

use App\Subscribe;
use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function plans()
    {
        $plans = Subscription::all();
        return view('dashboard.subscription.plans', compact('plans'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
           'amount' => 'required'
        ]);
        $sub_id = $request->subscription_id;
        $plan_id = Subscription::findOrFail($sub_id);
        $sub = new Subscribe();
        if ($request->amount < \auth()->user()->balance){
//            $plan_id = Package::findOrFail($request->package_id);
            if ($request->get('amount') < $plan_id->min_deposit || $request->get('amount') > $plan_id->max_deposit)
            {
                return redirect()->back()->with('declined', "Please enter the amount within the Min/Max Deposit");
            }else{
                $sub->subscription_id = $request->subscription_id;
                $sub->user_id = Auth::id();
                $sub->amount = $request->amount;
                $sub->status = 1;
                $sub->save();
                return redirect()->route('user.investmentDetails', $sub->id);
            }
        }
        return redirect()->back()->with('insufficient', "Sorry! You do not have upto that amount in your balance");

    }

    public function Subsuccess($id)
    {
        return view('dashboard.subscription.success');
    }

    public function history()
    {
        $sub = Subscribe::whereUserId(\auth()->id())->get();
        return view('dashboard.transactions.MyInvestments', compact('sub'));
    }

    public function details($id){
        $sub = Subscribe::findOrFail($id);
        $user = User::findOrFail($sub->user_id);
        return view('dashboard.subscription.details', compact('user', 'sub'));
    }
}
