<?php

    use Illuminate\Auth\Reminders\RemindableInterface;
    use Illuminate\Auth\UserInterface;
    use Zizaco\Entrust\HasRole;

    class User extends Cartalyst\Sentry\Users\Eloquent\User implements UserInterface, RemindableInterface {

        use HasRole; // https://github.com/Zizaco/entrust


        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'users';

        /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
        protected $hidden = array( 'password' );

        public static function boot()
        {
            self::$hasher = new Cartalyst\Sentry\Hashing\NativeHasher;
        }

        public static function createApiKey()
        {
            return Str::random(32);
        }

        /**
         * Get the unique identifier for the user.
         *
         * @return mixed
         */
        public function getAuthIdentifier()
        {
            return $this->getKey();
        }

        /**
         * Get the password for the user.
         *
         * @return string
         */
        public function getAuthPassword()
        {
            return $this->password;
        }

        /**
         * Get the token value for the "remember me" session.
         *
         * @return string
         */
        public function getRememberToken()
        {
            return $this->remember_token;
        }

        /**
         * Set the token value for the "remember me" session.
         *
         * @param  string $value
         * @return void
         */
        public function setRememberToken($value)
        {
            $this->remember_token = $value;
        }

        /**
         * Get the column name for the "remember me" token.
         *
         * @return string
         */
        public function getRememberTokenName()
        {
            return 'remember_token';
        }

        /**
         * Get the e-mail address where password reminders are sent.
         *
         * @return string
         */
        public function getReminderEmail()
        {
            return $this->email;
        }

        public function isCurrent()
        {
            if (! Sentry::check()) return false;

            return Sentry::getUser()->id == $this->id;
        }

        public function setPasswordAttribute($value)
        {
            $this->attributes[ 'password' ] = ( Hash::needsRehash($value) ? Hash::make($value) : $value );
        }

    }
