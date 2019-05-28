<?php

interface BoardInterface
{
    public function mark($x, $y, $player);
    public function getPosition($x, $y);
    public function show();
    public function complete();
}