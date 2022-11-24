<?php

namespace App\Http\Controllers;

use App\Subscribe;
use App\Subscription;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function plans()
    {
        $plans = Subscription::all();
        return view('dashboard.transactions.InvestFund', compact('plans'));
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
                return redirect()->route('user.Investdetails', $sub->id);
            }
        }
        return redirect()->back()->with('insufficient', "Sorry! You do not have upto that amount in your balance");

    }


    public function Investdetails($id){
        $sub = Subscribe::findOrFail($id);
        $user = User::findOrFail($sub->user_id);
        return view('dashboard.transactions.investDetails', compact('user', 'sub'));
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

//    public function Investdetails($id){
//        $sub = Subscribe::whereUserId(auth()->id())->findOrFail($id);
//        $investment_plan = Subscription::findOrFail($sub->package_id);
//        $user = User::findOrFail($sub->user_id);
//        $expected_profit = $investment_plan->total_return()  * $sub->amount;
//        $profit =  number_format((float)$expected_profit / 100, 2, '.', '');
//
//        $expected_percent = $investment_plan->daily_interest  * $sub->amount;
//        $profit_percent =  number_format((float)$expected_percent / 100, 2, '.', '');
//
//        $days = 1;
//
//        $current_date = Carbon::now();
//        $d_approved = Carbon::parse($sub->approved_date);
//        $d_ended = Carbon::parse($sub->end_date);
//
//        if($d_approved->diffInDays($current_date) < $investment_plan->term_days){
//            $days = $d_approved->diffInDays($current_date);
//        }else {
//            $days =  $investment_plan->term_days;
//        }
//
//        $i = 1;
//        while ($i < $days){
//            $i++;
//        }
//
//        return view('dashboard.transactions.investDetails', compact('sub', 'investment_plan', 'profit', 'days', 'i'));
//
//    }


}
