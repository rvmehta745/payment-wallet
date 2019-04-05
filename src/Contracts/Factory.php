<?php

namespace rvmehta745\PaymentWallet\Contracts;

interface Factory
{
    /**
     * Get Paytm Wallet Provider
     *
     * @param  string  $driver
     * @return \rvmehta745\PaymentWallet\Contracts\Provider
     */
    
    public function driver($do = null);
}