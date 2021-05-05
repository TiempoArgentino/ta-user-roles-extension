<?php

return array( 'ta_redactor', __('Redactor', 'ta-roles'), TA_Roles_Plugin::get_capabilities(array(
    'article_tag',
    'article_author',
    'articles_edit',
    'media_uploads',
    'fotogaleria',
    'extra',
)));
