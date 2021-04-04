<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = ['roles'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();
        self::saving(function ($model) {
            $model->slug = Str::random(50);
        });
        self::updating(function ($model) {
            $model->slug = Str::random(50);
        });
    }

    /**
     * Get user avatar
     *
     * @return string
     */
    public function getAvatarAttribute(): string
    {
        // $media = $this->getMedia('profile_image');
        // if ($media->first()) {
        //     return $media->first()->getFullUrl('thumb');
        // }
        return asset('pages/assets/images/users/2.jpg');
    }

    /**
     * check if user is an administrator
     *
     * @return boolean
     */
    public function getIsAdminAttribute(): bool
    {
        return (bool) $this->hasRole('admin');
    }

    /**
     * Scope a query to only include technicians
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTechnicians(Builder $query)
    {
        return $query->whereDoesntHave('roles', function (Builder $query) {
            $query->where('roles.name', 'admin');
        })
            ->orWhereDoesntHave('roles', function (Builder $query) {
                $query->where('roles.name', 'super admin');
            })
            ->orderBy('name', 'asc');
    }
}
