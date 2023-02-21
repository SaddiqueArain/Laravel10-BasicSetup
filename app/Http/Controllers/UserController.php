<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Usernotification;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imageName = '';
        if ($request->photo) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads'), $imageName);
        }

        $user= new User();
                $user->region_id = $request->region_id;
                $user->stripe_account_id = $request->stripe_account_id;
                $user->stripe_onboarded = $request->stripe_onboarded;
                $user->account_status = $request->account_status;
                $user->current_roadmap_step = $request->current_roadmap_step;
                $user->photo = $request->photo;
                $user->full_name = $request->full_name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->password = Hash::make('password');
                $user->gender = $request->gender;
                $user->pronouns = $request->pronouns;
                $user->company_name = $request->company_name;
                $user->job_title = $request->job_title;
                $user->timezone = $request->timezone;
                $user->tfa_enabled = $request->tfa_enabled;
                $user->social_linked = $request->social_linked;
                $user->social_twitter = $request->social_twitter;
                $user->social_instagram = $request->social_instagram;
                $user->social_other = $request->social_other;
                $user->availability_settings = $request->availability_settings;
                $user->logo = $request->logo;
                $user->primary_color = $request->primary_color;
                $user->secondary_color = $request->secondary_color;
                $user->billing_address = $request->billing_address;
                $user->last_login =Carbon::now();

                $user->save();

        $user->roles()->sync([1,2,3]);

        $user->notify(new Usernotification());



        return 'User Added';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


        $imageName = '';
        if ($request->photo) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads'), $imageName);
        }



        $data=User::find($request->id);
        $data->region_id = $request->region_id;
        $data->stripe_account_id = $request->stripe_account_id;
        $data->stripe_onboarded = $request->stripe_onboarded;
        $data->account_status = $request->account_status;
        $data->current_roadmap_step = $request->current_roadmap_step;
        $data->photo = $request->photo;
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->password = Hash::make('password');
        $data->gender = $request->gender;
        $data->pronouns = $request->pronouns;
        $data->company_name = $request->company_name;
        $data->job_title = $request->job_title;
        $data->timezone = $request->timezone;
        $data->tfa_enabled = $request->tfa_enabled;
        $data->social_linked = $request->social_linked;
        $data->social_twitter = $request->social_twitter;
        $data->social_instagram = $request->social_instagram;
        $data->social_other = $request->social_other;
        $data->availability_settings = $request->availability_settings;
        $data->logo = $request->logo;
        $data->primary_color = $request->primary_color;
        $data->secondary_color = $request->secondary_color;
        $data->billing_address = $request->billing_address;
        $data->last_login =Carbon::now();

        $data->save();

        return 'User Updated';


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
        return 'Deleted';
    }
}
