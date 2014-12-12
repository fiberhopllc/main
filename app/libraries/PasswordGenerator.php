<?php

    class PasswordGenerator {
        public static function make(
            $length,
            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/!@#$%^*()_+=-"
        )
        {
            $password = "";
            $length_c = strlen($characters);
            while (strlen($password) < $length) {
                $pos = rand(0, $length_c - 1);
                $password .= $characters[ $pos ];
            }

            return $password;
        }
    }

