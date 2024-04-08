<?php

namespace App\States\Post;

use Exception;

abstract class PostState
{
    public function __construct(public Post $post)
    {
    }

    public function requestReview($author): void
    {
        throw new Exception('Invalid transition');
    }

    public function approve($approve): void
    {
        throw new Exception('Invalid transition');
    }

    public function reject($rejector): void
    {
        throw new Exception('Invalid transition');
    }

    public function close($reason): void
    {
        throw new Exception('Invalid transition');
    }

    public function backToDraft($suggestion): void
    {
        throw new Exception('Invalid transition');
    }
}
