<?php

namespace Main;

abstract class Controller
{

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $route_params = [];

    /**
     * Class constructor
     *
     * @param array $route_params  Parameters from the route
     *
     * @return void
     */
    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }

    /**
     * Execute
     *
     * @param  $name
     * @param  $args
     * @return void
     */
    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            throw new \Exception("Method $method not found in controller " . get_class($this));
        }
    }


    public function validateInput()
    {   
        $res = true;

        foreach($_REQUEST as $key => $value) {

            if(empty($value)) {
                setError("Input empty for key " . $key);
                $res = false;
            }
        }

        return $res;
    }

    /**
     * Set login sessions
     *
     * @return void
     */
    public function setUserSession(string $name)
    {
        $_SESSION['name'] = $name;

        redirectTo('/home');
    }

    /**
     * Set login sessions
     *
     * @return void
     */
    public function activeSession()
    {
        return !empty($_SESSION['name']) ? true : false;
    }
}
