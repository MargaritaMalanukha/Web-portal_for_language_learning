<?php

namespace App\Http\Controllers;

use App\Models\Auth\Authorization;
use App\Models\Language_level;
use App\Models\Participant;
use App\Models\Subscription_type;
use App\Models\User;
use App\Models\User_type;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function index(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        $user = User::findById($request->session()->get('id'));

        $email = User::reduceEmail($user->email);
        $level = Language_level::findDescriptionById($user->level);
        $is_native = User_type::isUserIsSetType($user->usertype, 'native');
        $subscriptionType = Subscription_type::findDescriptionRUById($user->subscriptionType);
        $creditCardNum = ($user->creditCardNum == null) ? 'none' : User::reduceCreditCardNum($user->creditCardNum);
        $attends = Participant::getByUserId($user->id);
        return view('profile.profile')
            ->with('email', $email)
            ->with('level', $level)
            ->with('is_native', $is_native)
            ->with('subscriptionType', $subscriptionType)
            ->with('user', $user)
            ->with('creditCardNum', $creditCardNum)
            ->with('attends', $attends);
    }

    public function edit_name(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        $user = User::findById($request->session()->get('id'));
        return view('profile.edit_name')
            ->with('name', $user->name);
    }

    public function update_name(Request $request) {
        $request->validate([
            'name' => 'required|max:20'
        ]);

        $user = User::findById($request->session()->get('id'));
        User::updateName($request->input('name'), $user->name);

        return redirect('/profile');
    }

    public function edit_email_password(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        $user = User::findById($request->session()->get('id'));

        return view('profile.edit_email_password')
            ->with('email', $user->email);
    }

    public function update_email_password(Request $request) {
        $request->validate([
            'email' => 'required|max:30|email:rfc,dns',
            'old-password' => 'max:20',
            'new-password' => 'max:20',
            'repeat-password' => 'max:20'
        ]);
        $user = User::findById($request->session()->get('id'));
        User::updateEmail($request->input('email'), $user->id);

        if ($request->input('old-password') != null
            && $request->input('new-password') != null
            && $request->input('repeat-password') != null) {

            if ($user->password != $request->input('old-password')){
                throw ValidationException::withMessages(['old-password' => 'Неправильный старый пароль!']);
            }
            if ($request->input('new-password') != $request->input('repeat-password')){
                throw ValidationException::withMessages(['repeat-password' => 'Пароль не подтверждён!']);
            }
            User::updatePassword($request->input('new-password'), $user->id);
        }

        return redirect('/profile');
    }

    public static function premium(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        $subscription_types = Subscription_type::all();
        return view('profile.premium')
            ->with('subscriptions', $subscription_types);
    }

    public static function updatePremium(Request $request, $description) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');

        $user = User::findById($request->session()->get('id'));

        $subscription_id = Subscription_type::findByDescription($description);
        User::updateSubscriptionType($subscription_id, $user->id);

        return view('profile.subscription_changed');
    }

    public static function show_card(Request $request) {
        if (!Authorization::is_authenticated($request)) return redirect('/login');
        $user = User::findById($request->session()->get('id'));
        return view('profile.edit_card')
            ->with('creditCardNum', $user->creditCardNum);
    }

    public static function changeCreditCard(Request $request) {
        $request->validate([
            'creditCardNum' => 'required|numeric|digits:16'
        ]);
        User::updateCreditCardNum($request->session()->get('id'), $request->input('creditCardNum'));
        return redirect('/profile');
    }
}
