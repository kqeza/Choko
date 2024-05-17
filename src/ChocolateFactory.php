<?php

namespace Prince\Choko;

use Prince\Choko\Sweets;

class ChocolateFactory
{
    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);
        $snack = $this->prepare();
        $snack = $this->cut();
    }
    public function createSnack(string $type): Sweets
    {
        return new Sweets("", "", [""]);
    }
}
