<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/home' => 'route0',
      '/upload' => 'route1',
      '/home/switchView' => 'route3',
      '/system/deleteOrphanFiles' => 'route4',
      '/system/recalculateUserQuota' => 'route5',
      '/system/themes' => 'route6',
      '/system/checkForUpdates' => 'route9',
      '/system/changelog' => 'route10',
      '/system' => 'route11',
      '/users' => 'route12',
      '/user/create' => 'route13',
      '/profile' => 'route19',
      '/' => 'route31',
      '/register' => 'route32',
      '/recover' => 'route35',
      '/login' => 'route39',
      '/logout' => 'route41',
    ),
    'POST' => 
    array (
      '/upload/web' => 'route2',
      '/system/settings/save' => 'route7',
      '/system/upgrade' => 'route8',
      '/user/create' => 'route14',
      '/tag/add' => 'route29',
      '/tag/remove' => 'route30',
      '/register' => 'route33',
      '/recover/mail' => 'route36',
      '/login' => 'route40',
      '/logout' => 'route41',
      '/upload' => 'route42',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/home/page/([^/]+)|/users/page/([^/]+)()|/user/([^/]+)/edit()()|/user/([^/]+)/delete()()()|/user/([^/]+)/clear()()()()|/user/([^/]+)/config/sharex()()()()()|/user/([^/]+)/config/script()()()()()()|/user/([^/]+)/export()()()()()()()|/upload/([^/]+)/raw()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'page' => 'page',
            ),
          ),
          3 => 
          array (
            0 => 'route12',
            1 => 
            array (
              'page' => 'page',
            ),
          ),
          4 => 
          array (
            0 => 'route15',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route17',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route18',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route22',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route23',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route24',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route27',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/upload/([^/]+)/delete|/activate/([^/]+)()|/recover/password/([^/]+)()()|/user/([^/]+)/config/screencloud()()()|/([^/]+)/([^/]+)()()()|/([^/]+)/([^/]+)/delete/([^/]+)()()()|/([^/]+)/([^/]+)/raw()()()()()|/([^/]+)/([^/]+)/raw\\.([^/]+)()()()()()|/([^/]+)/([^/]+)/download()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route28',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'activateToken' => 'activateToken',
            ),
          ),
          4 => 
          array (
            0 => 'route37',
            1 => 
            array (
              'resetToken' => 'resetToken',
            ),
          ),
          5 => 
          array (
            0 => 'route43',
            1 => 
            array (
              'token' => 'token',
            ),
          ),
          6 => 
          array (
            0 => 'route44',
            1 => 
            array (
              'userCode' => 'userCode',
              'mediaCode' => 'mediaCode',
            ),
          ),
          7 => 
          array (
            0 => 'route45',
            1 => 
            array (
              'userCode' => 'userCode',
              'mediaCode' => 'mediaCode',
              'token' => 'token',
            ),
          ),
          8 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'userCode' => 'userCode',
              'mediaCode' => 'mediaCode',
            ),
          ),
          9 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'userCode' => 'userCode',
              'mediaCode' => 'mediaCode',
              'ext' => 'ext',
            ),
          ),
          10 => 
          array (
            0 => 'route48',
            1 => 
            array (
              'userCode' => 'userCode',
              'mediaCode' => 'mediaCode',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/user/([^/]+)|/profile/([^/]+)()|/user/([^/]+)/refreshToken()()|/upload/([^/]+)/publish()()()|/upload/([^/]+)/unpublish()()()()|/upload/([^/]+)/delete()()()()()|/recover/password/([^/]+)()()()()()()|/([^/]+)/([^/]+)/delete/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route16',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route20',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route21',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route25',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route26',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route28',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route38',
            1 => 
            array (
              'resetToken' => 'resetToken',
            ),
          ),
          9 => 
          array (
            0 => 'route46',
            1 => 
            array (
              'userCode' => 'userCode',
              'mediaCode' => 'mediaCode',
              'token' => 'token',
            ),
          ),
        ),
      ),
    ),
  ),
);