<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Portfolio extends Model
{
    use HasFactory;
    protected $fillable =['name', 'image', 'url', 'project_cat_id'];
    public function portfolio()
    {
        return $this->belongsTo(ProjectCat::class, 'project_cat_id');
    }
    public function category()
    {
        return $this->belongsTo(ProjectCat::class, 'project_cat_id');
    }
}