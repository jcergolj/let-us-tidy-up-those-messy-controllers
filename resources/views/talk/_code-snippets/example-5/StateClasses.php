<?php

namespace App\States\Post;

use Carbon\Carbon;

class Draft extends PostState
{
    public function requestReview($author): void
    {
        $this->post->state = 'in_review';
        $this->post->author = $author;
        $this->post->send_to_review_at = Carbon::now();

        $this->post->save();
    }
}

class InReview extends PostState
{
    public function approve($approve): void
    {
        $this->post->state = 'approved';
        $this->post->approve = $approve;
        $this->post->approved_at = Carbon::now();

        $this->post->save();
    }

    public function reject($rejector): void
    {
        $this->post->state = 'rejected';
        $this->post->rejector = $rejector;
        $this->post->rejected_at = Carbon::now();

        $this->post->save();
    }
}

class Approved extends PostState
{
}

class Rejected extends PostState
{
    public function close($reason): void
    {
        $this->post->state = 'closed';
        $this->post->reason_for_closing = $reason;
        $this->post->closed_at = Carbon::now();

        $this->post->save();
    }

    public function backToDraft($suggestion): void
    {
        $this->post->state = 'draft';

        $this->post->suggestion_for_improvement = $suggestion;

        $this->post->drafted_at = Carbon::now();

        // undo the changes made in in_review state and rejected
        $this->post->author = null;
        $this->post->send_to_review_at = null;

        $this->post->rejector = null;
        $this->post->rejected_at = null;

        $this->post->save();

        // closed and approved are final states from where you can't transition back
    }
}
