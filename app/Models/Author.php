<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Author extends Model
    {
        use SoftDeletes;
        protected $fillable = [
            'name',
            'email',
            'website',
            'mastodon_1',
            'mastodon_2',
            'twitter',
            'bluesky'
        ];


        public function quotes()
        {
            return $this->hasMany(Quote::class);
        }
    }
