<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\FromField;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $user = auth()->user();
        $profiles = User::with(['country', 'state', 'city'])
            ->where([
                ['gender', '=', $user->seeking],
                ['id', '!=', $user->id],
                ['status', '=', 'active'],
                ['created_at', '>=', now()->subDays(30)],
            ])
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('frontend.pages.user-dashboard', compact('profiles'));
    }

    /**
     * Edit User Profile
     */
    public function editProfile()
    {
        $user = Auth::user();
        $dynamicForm = FromField::with('options')->get();
        $countries = Country::all();
        $states = State::where('country_id', $user->country_id)->get();
        $cities = City::where('state_id', $user->state_id)->get();

        return view('frontend.pages.user-profile-edit', compact('dynamicForm', 'user', 'countries', 'states', 'cities'));
    }

    /**
     * Update Profile.
     */
    // public function updateProfile(Request $request, string $id)
    // {

    //     try {
    //         DB::beginTransaction();
    //         $user = User::findOrFail($id);
    //         $imagePath = $this->updateImage($request, 'image', 'uploads/images', $user->image);
    //         $interests = $request->input('interest', []);
    //         $flatInterests = array_map(function ($item) {
    //             return is_array($item) ? reset($item) : $item;
    //         }, $interests);
    //         $interestsString = implode(',', $flatInterests);
    //         $user->update([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'mobile' => $request->mobile,
    //             'profession' => $request->profession,
    //             'age' => $request->age,
    //             'about' => $request->about,
    //             'weight' => $request->weight,
    //             'father_name' => $request->father_name,
    //             'mother_name' => $request->mother_name,
    //             'image' => !empty($imagePath) ? $imagePath : $user->image,
    //             'country_id' => $request->country_id,
    //             'state_id' => $request->state_id,
    //             'city_id' => $request->city_id,
    //             'gender' => $request->gender,
    //             'seeking' => $request->seeking,
    //             'username' => $request->username,
    //             // Only update password if provided
    //             'password' => $request->password ? bcrypt($request->password) : $user->password,
    //             'height' => $request->height,
    //             'bodytype' => $request->bodytype ?? null,
    //             'relationship_status' => $request->relationship_status,
    //             'have_kids' => $request->have_kids,
    //             'want_kids' => $request->want_kids,
    //             'your_education' => $request->your_education,
    //             'you_smoke' => $request->you_smoke,
    //             'you_drink' => $request->you_drink,
    //             'ethnicities' => $request->ethnicities,
    //             'religion' => $request->religion,
    //             'interest' => $interestsString,
    //         ]);

    //         DB::commit();
    //         session()->flash('success', 'Profile updated successfully!');
    //         return redirect()->back();
    //     } catch (\Exception $e) {
    //         DB::rollBack(); // Rollback the transaction in case of an exception
    //         \Log::error('Exception occurred while updating User: ' . $e->getMessage());
    //         alert()->error('An error occurred while updating the user.');
    //         return redirect()->back();
    //     }
    // }


    public function updateProfile(Request $request, string $id)
    {
       
        try {
            DB::beginTransaction();
            $user = User::findOrFail($id);
            $imagePath = $this->updateImage($request, 'image', 'uploads/images', $user->image);
            $interests = $request->input('interest', []);
            $flatInterests = array_map(function ($item) {
                return is_array($item) ? reset($item) : $item;
            }, $interests);
            $interestsString = implode(',', $flatInterests);

            $socialMediaVisibility = [
                'facebook' => $request->has('show_facebook'),
                'twitter' => $request->has('show_twitter'),
                'linkedin' => $request->has('show_linkedin'),
                'youtube' => $request->has('show_youtube'),
                'instagram' => $request->has('show_instagram'),
            ];

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'profession' => $request->profession,
                'age' => $request->age,
                'about' => $request->about,
                'dob' => $request->dob,
                'weight' => $request->weight,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'image' => !empty($imagePath) ? $imagePath : $user->image,
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'gender' => $request->gender,
                'seeking' => $request->seeking,
                'username' => $request->username,
                // Only update password if provided
                'password' => $request->password ? bcrypt($request->password) : $user->password,
                'height' => $request->height,
                'bodytype' => $request->bodytype ?? null,
                'relationship_status' => $request->relationship_status,
                'have_kids' => $request->have_kids,
                'want_kids' => $request->want_kids,
                'your_education' => $request->your_education,
                'you_smoke' => $request->you_smoke,
                'you_drink' => $request->you_drink,
                'ethnicities' => $request->ethnicities,
                'religion' => $request->religion,
                'interest' => $interestsString,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'instagram' => $request->instagram,
                'social_media_visibility' => $socialMediaVisibility,
            ]);

            DB::commit();
            session()->flash('success', 'Profile updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction in case of an exception
            \Log::error('Exception occurred while updating User: ' . $e->getMessage());
            alert()->error('An error occurred while updating the user.');
            return redirect()->back();
        }
    }



    /**
     * New Match.
     */
    // public function newMatches()
    // {
    //     $user = auth()->user();
    //     // Fetch recently joined profiles based on the seeking gender
    //     $profiles = User::where('gender', $user->seeking;)
    //         ->where('id', '!=', $user->id) // Exclude the logged-in user
    //         ->orderBy('created_at', 'desc') // Order by the newest profiles
    //         ->limit(10) // Limit to 10 profiles
    //         ->get();

    //     return view('new_matches', compact('profiles'));
    // }
}
