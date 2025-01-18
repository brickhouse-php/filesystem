<?php

namespace Brickhouse\Filesystem\Exceptions;

use Brickhouse\Filesystem\Filesystem;

class WriteFailedException extends FilesystemException
{
    /**
     * Creates a new `WriteFailedException`-instance.
     *
     * @param Filesystem    $instance   Filesystem instance which the error occured on.
     * @param string        $path       Path to the relevant element, which caused the exception.
     * @param string        $reason     Reason for why the error occured.
     */
    public function __construct(
        Filesystem $instance,
        string $path,
        string $reason,
    ) {
        parent::__construct(
            $instance,
            $path,
            "Failed to write content to file",
            $reason,
        );
    }
}
