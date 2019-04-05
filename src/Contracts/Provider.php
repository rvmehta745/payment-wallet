<?php

namespace rvmehta745\PaymentWallet\Contracts;

interface Provider
{
    /**
     * Return raw response.
     *
     * @return object
     */
    public function response();

}
