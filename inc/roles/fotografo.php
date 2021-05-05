<?php

return array( 'ta_fotografo', __('Fotógrafo', 'ta-roles'), TA_Roles_Plugin::get_capabilities(array(
    'articles_edit',
    'media_uploads',
    'fotogaleria',
    'extra',
)));
