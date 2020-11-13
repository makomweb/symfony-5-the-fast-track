<?php

namespace App;

use App\Entity\Comment;
use Psr\Log\LoggerInterface;

class SpamCheckerMock
{
    /** @var int */
    private $storedResult;
    private $logger;

    public function __construct(LoggerInterface $logger, int $storedResult = 2)
    {
        $this->storedResult = $storedResult;
        $this->logger = $logger;
    }

    /**
     * @return int Spam score: 0: not spam, 1: maybe spam, 2: blatant spam
     */
    public function getSpamScore(Comment $comment, array $context): int
    {
        $this->logger->info("check spam score!!!");
        return $this->storedResult;
    }
}
