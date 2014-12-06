<?php
class BaseController extends Controller {
    public function __construct() {
        // Cache on index and show methods
        $this->afterFilter('@cache', ['only' => ['index', 'show']]);

        $this->afterFilter('@expires');

    }

    public function expires($route, $request, \Illuminate\Http\Response $response)
    {
        $response->header("Expires: ", new DateTime("2012-07-08 11:14:15.638276"), true);
    }

    public function cache($route, $request, \Illuminate\Http\Response $response)
    {
        $response->setMaxAge(900); // Cache for 15min
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
