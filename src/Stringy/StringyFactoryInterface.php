<?php

namespace Stringy;

interface StringyFactoryInterface
{
    public function newInstance($str, $encoding = null);
}
