<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "region_id"=>"required:exists:regions,id",
            "stripe_account_id"=>"required|string|min:1",
            "stripe_onboarded"=>"required|integer|min:1",
            "account_status"=>"required|boolean",
            "current_roadmap_step"=>"required|integer",
            "photo"=>"nullable",
            "full_name"=>"required|string|min:6",
            "email"=>"required|unique:users",
            "phone"=>"nullable",
            "password"=>"required",
            "gender"=>"required|string",
            "pronouns"=>"required",
            "company_name"=>"required|string",
            "job_title"=>"required|string",
            "timezone"=>"required|integer",
            "tfa_enabled"=>"nullable",
            "social_linked"=>"nullable",
            "social_twitter"=>"nullable",
            "social_instagram"=>"nullable",
            "social_other"=>"nullable",
            "availability_settings"=>"required",
            "logo"=>"required|string",
            "primary_color"=>"nullable",
            "secondary_color"=>"nullable",
            "billing_address"=>"required",
        ];
        dd('hy');
    }


}
