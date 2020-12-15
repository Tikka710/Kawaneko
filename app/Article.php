<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{

    public function user(): BelongsTo
    {
      return $this->belongsTo('App/User');
    }

    public function votes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'votes')->withTimestamps();
    }

    public function isVotedBy(?User $user): bool
    {
      return $user
        ?(bool)$this->votes->where('id', $user->id)->count()
        :false;
    }

    public function getCountVotesAtribute(): int
    {
      return $this->votes->count();
    }

}
