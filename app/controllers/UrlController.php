<?php

    use Chrisbjr\ApiGuard\ApiGuardController;

    class UrlController extends \BaseController {
//    protected $apiMethods = [
//        'store' => [
//            'keyAuthentication' => true,
//            'level' => 1,
//            'limits' => [
//                // The variable below sets API key limits
//                'key' => [
//                    'increment' => '1 hour',
//                    'limit' => 100
//                ],
//                // The variable below sets API method limits
//                'method' => [
//                    'increment' => '1 day',
//                    'limit' => 1000
//                ]
//            ]
//        ],
//
//        'update' => [
//            'keyAuthentication' => true,
//            'level' => 1,
//            'limits' => [
//                // The variable below sets API key limits
//                'key' => [
//                    'increment' => '1 hour',
//                    'limit' => 100
//                ],
//                // The variable below sets API method limits
//                'method' => [
//                    'increment' => '1 day',
//                    'limit' => 1000
//                ]
//            ]
//        ],
//
//        'destroy' => [
//            'keyAuthentication' => true,
//            'level' => 1,
//            'limits' => [
//                // The variable below sets API key limits
//                'key' => [
//                    'increment' => '1 hour',
//                    'limit' => 100
//                ],
//                // The variable below sets API method limits
//                'method' => [
//                    'increment' => '1 day',
//                    'limit' => 1000
//                ]
//            ]
//        ],
//
//        'show' => [
//            'keyAuthentication' => true
//        ]
//    ];

        /**
         * Display a listing of the resource.
         * GET /url
         *
         * @return Response
         */
        public function index()
        {
            $urls = Url::where('user_id', Auth::user()->id)->get();

            return Response::json(array(
                    'error' => false,
                    'urls'  => $urls->toArray() ),
                200, array(), $options = JSON_PRETTY_PRINT
            );
        }

        /**
         * Show the form for creating a new resource.
         * GET /url/create
         *
         * @return Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         * POST /url
         *
         * @return Response
         */
        public function store()
        {
            $url              = new Url;
            $url->url         = Request::get('url');
            $url->description = Request::get('description');
            $url->user_id     = Auth::user()->id;

            // Validation and Filtering is sorely needed!!
            // Seriously, I'm a bad person for leaving that out.

            $url->save();

            return Response::json(array(
                    'error' => false,
                    'urls'  => $url->toArray() ),
                200, array(), $options = JSON_PRETTY_PRINT
            );
        }

        /**
         * Display the specified resource.
         * GET /url/{id}
         *
         * @param  int $id
         * @return Response
         */
        public function show($id)
        {
            // Make sure current user owns the requested resource
            $url = Url::where('user_id', Auth::user()->id)
                ->where('id', $id)
                ->take(1)
                ->get();

            return Response::json(array(
                    'error' => false,
                    'urls'  => $url->toArray() ),
                200, array(), $options = JSON_PRETTY_PRINT
            );
        }

        /**
         * Show the form for editing the specified resource.
         * GET /url/{id}/edit
         *
         * @param  int $id
         * @return Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         * PUT /url/{id}
         *
         * @param  int $id
         * @return Response
         */
        public function update($id)
        {
            $url = Url::where('user_id', Auth::user()->id)->find($id);

            if (Request::get('url')) {
                $url->url = Request::get('url');
            }

            if (Request::get('description')) {
                $url->description = Request::get('description');
            }

            $url->save();

            return Response::json(array(
                    'error'   => false,
                    'message' => 'url updated' ),
                200, array(), $options = JSON_PRETTY_PRINT
            );
        }

        /**
         * Remove the specified resource from storage.
         * DELETE /url/{id}
         *
         * @param  int $id
         * @return Response
         */
        public function destroy($id)
        {
            $url = Url::where('user_id', Auth::user()->id)->find($id);

            $url->delete();

            return Response::json(array(
                    'error'   => false,
                    'message' => 'url deleted' ),
                200, array(), $options = JSON_PRETTY_PRINT
            );
        }

    }