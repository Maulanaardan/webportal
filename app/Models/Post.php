<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['judul', 'body', 'author_id', 'slug', 'category_id'];

    protected $with = ['author', 'category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void 
    {
    // Filter berdasarkan judul (search)
    $query->when($filters['search'] ?? false, function ($query, $search) {
        $query->where('judul', 'like', '%' . $search . '%');
    });

    // Filter berdasarkan category
    $query->when($filters['category'] ?? false, function ($query, $category) {
        $query->whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        });
    });

    // Filter berdasarkan author
    $query->when($filters['author'] ?? false, function ($query, $author) {
        $query->whereHas('author', function ($query) use ($author) {
            $query->where('name', $author);
        });
    });
    }

}
