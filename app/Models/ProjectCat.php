<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProjectCat extends Model
{
    use HasFactory;
    protected $fillable = ['project_cat'];
    public function category()
    {
        return $this->hasMany(Portfolio::class, 'project_cat_id');
    }
}