<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function state(): PostState
    {
        return match ($this->state) {
            'draft' => new Draft($this),
            'in_review' => new InReview($this),
            'approved' => new Approved($this),
            'rejected' => new Rejected($this),
            'closed' => new Closed($this),
            default => new Draft($this),
        };
    }
}
