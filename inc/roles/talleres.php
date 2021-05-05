<?php

return array( 'ta_talleres', __('Talleres', 'ta-roles'), TA_Roles_Plugin::get_capabilities(array(
    'media_uploads',
    'taller',
    'mailtrain',
    'extra',
)));
