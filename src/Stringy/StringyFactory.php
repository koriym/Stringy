<?php

namespace Stringy;

class StringyFactory
{
    public function newInstance($str, $encoding = null)
    {
        return new Stringy($str, $encoding);
    }
}
