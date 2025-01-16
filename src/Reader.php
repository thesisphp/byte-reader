<?php

declare(strict_types=1);

namespace Thesis\ByteReader;

/**
 * @api
 */
interface Reader
{
    /**
     * @param positive-int $limit
     * @return non-empty-string
     * @throws UnexpectedEof
     */
    public function read(int $limit): string;
}
