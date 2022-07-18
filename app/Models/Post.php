<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'status'
    ];

    public function comments()
    {   
        return $this->hasMany(Comment::class);

        // hasMany(RelatedModel, foreignKeyOnRelatedModel = post_id, localKey = id)
    }
    // Model Mechanic
    // public function through(){
    //     return $this->hasOneThrough(Owner::class, Car::class);
    //     // Mechanic ---->  Car  ----> Owner  //Models
    //     //                 mechanic_id ----> car_id //Foreign Key
    //     // id ----> id  //Local Key/Primary Key
    //     // hasOneThrough(RelatedModel, IntermediateModel, foreignKeyOnIntermediateModel = mechanic_id, foreignKeyOnRelatedModel = car_id, localKey = id, localKeyOnIntermediateModel = id)
    // }
    // // Model User
    // public function roles(){
    //     return $this->belongsToMany(Role::class)->withTimeStamp()->as('role_user');
    // }

    // // role_user ->table
    // // project_id role_id create_at update_at
    // // 1       1
    // // 1       3
    // // 1       4

    // // foreach ($project->roles as $role) {
    // //     echo $role->role_user->created_at;
    // // }

    // 1 -> manager
    //      tester
    //      dev
    // 2 -> staff
    // 3 -> dev
    //      tester


    // project -> 1, 2,3        manager, staff, tester, dev
}
