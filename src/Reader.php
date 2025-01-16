<?php

declare(strict_types=1);

namespace Thesis\ByteReader;

use Amp\Cancellation;

/**
 * @api
 */
interface Reader
{
    /**
     * @param positive-int $limit
     * @return non-empty-string
     * @throws ReaderIsClosed
     */
    public function read(int $limit, ?Cancellation $cancellation = null): string;
}
