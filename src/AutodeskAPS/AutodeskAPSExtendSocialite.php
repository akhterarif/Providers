<?php

namespace SocialiteProviders\AutodeskAPS;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AutodeskAPSExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('aps', Provider::class);
    }
}
