<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],

            [
                'liked' => $liked,
            ]
    );

    }

    /**
     * Function that destroy the like
     * @param User $user current user
     */
    public function unlike(User $user)
    {
        $user->likes()
        ->where('tweet_id', $this->id)
        ->delete();
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {

        return (bool) $user->likes()
        ->where('tweet_id', $this->id)
        ->where('liked', true)
        ->count();
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes
        ->where('tweet_id', $this->id)
        ->where('liked', false)
        ->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
