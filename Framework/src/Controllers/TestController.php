<?php

class TestController implements ControllerInterface
{
    public function get()
    {
        return "TestController GET";
    }

    public function post()
    {
        return "TestController POST";
    }
}
