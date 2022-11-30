<?php

class OrderValidation
{
    public $errors;
    public $errorMessages;

    public function __construct()
    {
        $this->errors = [];
        $this->errorMessages = [
            'first_name' => 'Please enter your first name',
            'last_name' => 'Please enter your last name',
            'email' => 'Please enter your email',
            'phone' => 'Please enter your valid phone number',
            'shippingAddress1' => 'Please enter your shipping address',
            'shippingCity' => 'Please enter your shipping city',
            'shippingState' => 'Please enter your shipping state',
            'shippingZip' => 'Please enter your shipping zip code',
            'shippingCountry' => 'Please enter your shipping country',

            'billingAddress1' => 'Please enter your billing address',
            'billingCity' => 'Please enter your billing city',
            'billingState' => 'Please enter your billing state',
            'billingZip' => 'Please enter your billing zip code',
            'creditCardNumber' => 'Please enter the credit card number',
            'cvv' => 'Please enter the CVV',
            'expmonth' => 'Please enter the exp month',
            'expyear' => 'Please enter the exp year'
        ];
    }

    public function validate($post)
    {
        $this->errors = [];

        $this->firstName($post);
        $this->lastName($post);
        $this->email($post);
        $this->phone($post);
        $this->billingAddress1($post);
        $this->billingCity($post);
        $this->billingState($post);
        $this->billingZip($post);

        if (!isset($post['billingSameAsShipping']) || $post['billingSameAsShipping'] != 1) {
            $this->shippingAddress($post);
            $this->shippingCity($post);
            $this->shippingState($post);
            $this->shippingZip($post);
        }

        $this->creditCard($post);
        $this->creditCardCVV($post);
        $this->creditCardExpiration($post);
    }

    public function hasErrors()
    {
        if (empty($this->errors)) {
            return false;
        }
        return true;
    }

    private function notSet($post, $field)
    {
        return (!isset($post[$field]) || strlen($post[$field]) <= 0);
    }

    private function setError($field)
    {
        $this->errors[$field] = $this->errorMessages[$field];
    }

    private function firstName($post)
    {
        $field = 'first_name';
        if ($this->notSet($post, $field) || preg_match('~[0-9]~', $post[$field])) {
            $this->setError($field);
        }
    }

    private function lastName($post)
    {
        $field = 'last_name';
        if ($this->notSet($post, $field) || preg_match('~[0-9]~', $post[$field])) {
            $this->setError($field);
        }
    }

    private function email($post)
    {
        $field = 'email';
        if ($this->notSet($post, $field) || !filter_var($post[$field], FILTER_VALIDATE_EMAIL)) {
            $this->setError($field);
        }
    }

    private function phone($post)
    {
        $field = 'phone';
        if ($this->notSet($post, $field) || !ctype_digit($post[$field])) {
            $this->setError($field);
        }
    }

    private function billingAddress1($post)
    {
        $field = 'billingAddress1';
        if ($this->notSet($post, $field)) {
            $this->setError($field);
        }
    }

    private function billingCity($post)
    {
        $field = 'billingCity';
        if ($this->notSet($post, $field) || preg_match('~[0-9]~', $post[$field])) {
            $this->setError($field);
        }
    }

    private function billingState($post)
    {
        $field = 'billingState';
        if ($this->notSet($post, $field)) {
            $this->setError($field);
        }
    }

    private function billingZip($post)
    {
        $field = 'billingZip';
        if ($this->notSet($post, $field)) {
            $this->setError($field);
        }
    }

    private function shippingAddress($post)
    {
        $field = 'shippingAddress1';
        if ($this->notSet($post, $field)) {
            $this->setError($field);
        }
    }

    private function shippingCity($post)
    {
        $field = 'shippingCity';
        if ($this->notSet($post, $field) || preg_match('~[0-9]~', $post[$field])) {
            $this->setError($field);
        }
    }

    private function shippingState($post)
    {
        $field = 'shippingState';
        if ($this->notSet($post, $field)) {
            $this->setError($field);
        }
    }

    private function shippingZip($post)
    {
        $field = 'shippingZip';
        if ($this->notSet($post, $field)) {
            $this->setError($field);
        }
    }

    private function creditCard($post)
    {
        $field = 'creditCardNumber';
        $validStartNumbers = [1, 3, 4, 5, 6];
        if ($this->notSet($post, $field) || !ctype_digit($post[$field])
            || strlen($post[$field]) < 15
            || strlen($post[$field]) > 16
            || !in_array($post[$field][0], $validStartNumbers)
        ) {
            $this->setError($field);
        }
    }

    private function creditCardCVV($post)
    {
        $field = 'cvv';
        if ($this->notSet($post, $field) || !ctype_digit($post[$field])
            || strlen($post[$field]) < 3
            || strlen($post[$field]) > 4)
            {
                $this->setError($field);
            }
    }

    private function creditCardExpiration($post)
    {
        $monthField = 'expmonth';
        $yearField = 'expyear';
        $assumedCentury = '20';

        if ($this->notSet($post, $monthField) || $this->notSet($post, $yearField)) {
            $this->setError('expmonth');
            $this->setError('expyear');
            return;
        }
        $month = $post[$monthField];
        $year = $post[$yearField];
        $expdatetime = new DateTime($assumedCentury . $year . '-' . $month);
        $datetimeNow = new DateTime(date('Y') . '-' . date('m'));

        // if the expiration date is passed
        if ($datetimeNow > $expdatetime) {
            $this->setError('expmonth');
            $this->setError('expyear');
        }
    }
}
