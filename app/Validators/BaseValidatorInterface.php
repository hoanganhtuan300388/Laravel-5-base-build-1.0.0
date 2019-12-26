<?php

namespace App\Validators;

use Prettus\Validator\Contracts\ValidatorInterface;

interface BaseValidatorInterface extends ValidatorInterface
{

    const RULE_MANAGER_LOGIN    = 'manager_login';

}