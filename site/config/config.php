<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen.
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */

 c::set('autogit',                true);
 c::set('autogit.remote.name',    'origin');
 c::set('autogit.remote.branch',  'master');

 c::set('autogit.webhook.secret', false);
 c::set('autogit.webhook.url',    'autogit');

 c::set('autogit.panel.user',     true);
 c::set('autogit.user.name',      'Auto Git');
 c::set('autogit.user.email',     'autogit@localhost');

 c::set('autogit.widget',         true);

 c::set('autogit.language',       'en');
 c::set('autogit.translation', [
     'site.update'  => 'Changed site options',
     'page.create'  => 'Created page %s',
     'page.update'  => 'Updated page %s',
     'page.delete'  => 'Deleted page %s',
     'page.sort'    => 'Sorted page %s',
     'page.hide'    => 'Hid page %s',
     'page.move'    => 'Moved page %1$s to %2$s',
     'file.upload'  => 'Uploaded file %s',
     'file.replace' => 'Replaced file %s',
     'file.rename'  => 'Renamed file %s',
     'file.update'  => 'Updated file %s',
     'file.sort'    => 'Sorted file %s',
     'file.delete'  => 'Deleted file %s',
 ]);

return [
  'debug'  => true,
  'panel' =>[
      'install' => true
    ],
  'home' => 'landing-page'
];
?>
