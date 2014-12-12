<?php

    class PagesController extends \BaseController {

        /**
         * The layout that should be used for responses.
         */
        protected $layout = 'layouts.master';


        public function getHome()
        {
            $this->layout->content = View::make('pages.home');
        }


    }