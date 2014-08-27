<?php

# && and (both true then true otherwise false)

# || or (both false then false otherwise true)

# ! not (toggle)

var_dump(5 > 2 && 12 > 7);
var_dump(5 > 22 && 12 > 7);

var_dump(5 > 22 || 12 > 7);
var_dump(5 > 22 || 2 > 7);

var_dump(!56);
var_dump(!0);
