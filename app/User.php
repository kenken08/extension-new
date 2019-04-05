<?php

namespace App;

use Auth;
use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Intervention\Image\Facades\Image;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_details()
    {
        return $this->hasOne('App\UserDetails','user_id','id');
    }

    public function validate_user_registration()
    {
        $validation = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|min:6|confirmed',
        ];

        return $validation;
    }
    public function name()
    {
        return Auth::user()->first_name .' '. Auth::user()->last_name;
    }
    public function avatar()
    {
        $user = User::find(auth()->user()->id);

        $avatar = $user->user_details->avatar;
        $avatar_extension = $user->user_details->avatar_extension;

        $img = Image::make($avatar);
        $img->encode($avatar_extension);
        $type = $avatar_extension;

        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return $base64;
    }
    public function user_avatar($id)
    {
        $user = User::find($id);

        $avatar = $user->user_details->avatar;
        $avatar_extension = $user->user_details->avatar_extension;

        $img = Image::make($avatar);
        $img->encode($avatar_extension);
        $type = $avatar_extension;

        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return $base64;
    }
    public function user_name($id)
    {
        $user = User::find($id);

        $name = $user->first_name .' '. $user->last_name;

        return $name;
    }
}
