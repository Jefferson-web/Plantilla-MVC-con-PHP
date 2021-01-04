<?php

function toObject($data)
{
    return json_decode(json_encode($data));
}
