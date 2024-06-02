<?php

namespace App\Traits;

use Illuminate\Support\Facades\Crypt;

trait CryptFields
{
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (in_array($key, $this->encryptable)) {
            try {
                $value = Crypt::decrypt($value);
            } catch(\Exception $ex) {
                $value = $ex->getMessage();
            }
            return $value;
        }
        return;
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable)) {
            $value = Crypt::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }
}