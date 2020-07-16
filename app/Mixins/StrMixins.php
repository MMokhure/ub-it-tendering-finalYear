<?php


    namespace App\Mixins;


    use Illuminate\Support\Str;

    class StrMixins
    {
        public function referenceNumber()
        {
            return function () {
                $reference = Str::random(10);
                return Str::upper( 'REF:'.'TN-'.'2020'. substr($reference, 0, 3) . '-' . substr($reference, 3) . '-UB');
            };
        }
    }
