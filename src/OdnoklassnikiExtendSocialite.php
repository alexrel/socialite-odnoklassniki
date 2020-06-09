<?php

namespace AlexRel\SocialiteProviders\Odnoklassniki;

use SocialiteProviders\Manager\SocialiteWasCalled;

class OdnoklassnikiExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'odnoklassniki', Provider::class
        );
    }
}
