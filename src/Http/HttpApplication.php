<?php

namespace Zero\Http;

use Zero\ApplicationInterface;

class HttpApplication implements ApplicationInterface {
    /**
     * @param string $rootPath
     */
    public function __construct(
        public readonly string $rootPath
    ) {
    }

    public function run(): void {

    }
}