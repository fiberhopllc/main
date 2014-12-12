<?php

    /**
     * Url
     *
     * @property integer        $id
     * @property integer        $user_id
     * @property string         $url
     * @property string         $description
     * @property \Carbon\Carbon $created_at
     * @property \Carbon\Carbon $updated_at
     * @method static \Illuminate\Database\Query\Builder|\Url whereId( $value )
     * @method static \Illuminate\Database\Query\Builder|\Url whereUserId( $value )
     * @method static \Illuminate\Database\Query\Builder|\Url whereUrl( $value )
     * @method static \Illuminate\Database\Query\Builder|\Url whereDescription( $value )
     * @method static \Illuminate\Database\Query\Builder|\Url whereCreatedAt( $value )
     * @method static \Illuminate\Database\Query\Builder|\Url whereUpdatedAt( $value )
     */
    class Url extends \Eloquent {
        protected $fillable = [ ];
        /**
         * Hide fields from JSON output.
         * @var array
         */
        protected $hidden = array( 'created_at', 'updated_at' );
        protected $table = 'urls';
    }
