<?php

namespace rvmehta745\PaymentWallet\Traits;
use rvmehta745\PaymentWallet\Facades\PaytmWallet;

trait HasTransactionStatus {

    public function isOpen(){
        if ($this->response['STATUS'] == PaytmWallet::STATUS_OPEN){
            return true;
        }
        return false;
    }

    public function isFailed(){
        if ($this->response['STATUS'] == PaytmWallet::STATUS_FAILURE) {
            return true;
        }
        return false;
    }

    public function isSuccessful(){
        if($this->response['STATUS'] == PaytmWallet::STATUS_SUCCESSFUL){
            return true;
        }
        return false;
    }

    public function isPending(){
        if($this->response['STATUS'] == PaytmWallet::STATUS_PENDING){
            return true;
        }
        return false;
    }
}