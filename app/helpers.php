<?php

//  this is a helper func used in blade template
function current_user()
{
    return auth()->user();
}