<?php

namespace App;

use App\Entity\Comment;

class SpamCheckerMock
{
    /** @var int */
    private $storedResult;

    public function __construct(int $storedResult = 0)
    {
        $this->storedResult = $storedResult;
    }

    /**
     * @return int Spam score: 0: not spam, 1: maybe spam, 2: blatant spam
     */
    public function getSpamScore(Comment $comment, array $context): int
    {
        return $this->storedResult;
    }
}
