<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'title',
        'description',
        'release_date'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public static function generateSlug($title){
        $slug = Str::slug($title, "-");
        $original_slug = $slug;
        $exists = Project::where("slug", $slug)->first();
        $c = 1;
        while($exists){
            $slug = $original_slug . "-" . $c;
            $exists = Project::where("slug", $slug)->first();

            $c++;
        }
        return $slug;
    }


}

