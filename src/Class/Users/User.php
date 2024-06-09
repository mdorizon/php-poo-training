<?php

namespace Class\Users;

class user {
    private int $id;

    public function __construct()
    {
        $this->id = rand();
    }
}