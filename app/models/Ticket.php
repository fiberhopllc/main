<?php

    use Illuminate\Database\Eloquent\SoftDeletingTrait;

    class Ticket extends \Eloquent {
        use SoftDeletingTrait;

        protected $guarded = [ 'id', 'customer_id' ];
        protected $dates = [ 'deleted_at' ];
        protected $fillable = [ ];
        protected $table = 'tickets';
    }
