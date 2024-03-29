<?php namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use Uuids;
    use Sluggable;
    use Taggable;
    use SoftDeletes;

    protected $table = 'articles';

    public $incrementing = false;

    protected $fillable = ['body', 'title', 'slug', 'user_id'];

    protected $dates = ['deleted_at'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body, $user_id)
    {
        $this->comments()->create(compact('body', 'user_id'));
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);

        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);

        }

    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();
    }

}
