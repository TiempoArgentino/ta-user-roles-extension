<?php

return array( 'ta_socios_manager', __('Socios Manager', 'ta-roles'), TA_Roles_Plugin::get_capabilities(array(
    'media_uploads',
    'memberships',
    'mailtrain',
    'odoo',
    'users',
    'subscriptions',
    'beneficios',
    'extra',
)));
