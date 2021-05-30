<?php

/** 
 * @author 1
 * 
 */
abstract class Controller
{
    
    /**
     * @var Request
     */
    public $request;
    
    /**
     * @var Response
     */
    public $response;

    /**
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        //
    }
    
}

