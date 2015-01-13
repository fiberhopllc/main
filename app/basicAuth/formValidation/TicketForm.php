<?php namespace basicAuth\formValidation;

use Laracasts\Validation\FormValidator;

class TicketForm extends FormValidator {
    /**
     * Validation rules for ticket input
     *
     * @var array
     */
    protected $rules = [
//        'category_id' => 'required|integer',
        'subject'     => 'required',
        'body'        => 'required'
    ];
}
