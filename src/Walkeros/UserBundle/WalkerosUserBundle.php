<?php

namespace Walkeros\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WalkerosUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
