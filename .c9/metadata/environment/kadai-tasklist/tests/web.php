{"filter":false,"title":"web.php","tooltip":"/kadai-tasklist/tests/web.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":14,"column":0},"end":{"row":15,"column":79},"action":"insert","lines":["Route::get('signup', 'Auth\\RegisterController@showRegistrationForm')->name('signup.get');","Route::post('signup', 'Auth\\RegisterController@register')->name('signup.post');"],"id":16}],[{"start":{"row":16,"column":44},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":17,"column":0},"end":{"row":19,"column":72},"action":"insert","lines":["Route::get('login', 'Auth\\LoginController@showLoginForm')->name('login');","Route::post('login', 'Auth\\LoginController@login')->name('login.post');","Route::get('logout', 'Auth\\LoginController@logout')->name('logout.get');"],"id":18}],[{"start":{"row":19,"column":72},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":19}],[{"start":{"row":20,"column":0},"end":{"row":22,"column":3},"action":"insert","lines":["Route::group(['middleware' => ['auth']], function () {","    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);","});"],"id":20}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "],"id":21}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"remove","lines":["s"],"id":22},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"remove","lines":["r"]},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"remove","lines":["e"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"remove","lines":["s"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"remove","lines":["u"]}],[{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["t"],"id":23},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["a"]},{"start":{"row":21,"column":19},"end":{"row":21,"column":20},"action":"insert","lines":["s"]},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["k"]},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"remove","lines":["s"],"id":24},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"remove","lines":["r"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"remove","lines":["e"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"remove","lines":["s"]},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"remove","lines":["U"]}],[{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"insert","lines":["t"],"id":25},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["a"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["s"]},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["k"]}],[{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"remove","lines":["k"],"id":26},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"remove","lines":["s"]},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"remove","lines":["a"]},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"remove","lines":["t"]}],[{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"insert","lines":["T"],"id":27},{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["a"]},{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["k"],"id":28},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":94.28125,"scrollleft":23,"selection":{"start":{"row":21,"column":31},"end":{"row":21,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1528260282504,"hash":"6c836bf25ccfcef6f24fde5d73ab4858bac78e45"}