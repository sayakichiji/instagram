{"filter":false,"title":"followings.blade.php","tooltip":"/microposts/resources/views/users/followings.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":20,"column":12},"end":{"row":21,"column":12},"action":"insert","lines":["                <li role=\"presentation\" class=\"{{ Request::is('users/*/favoritings') ? 'active' : '' }}\"><a href=\"{{ route('users.favoritings', ['id' => $user->id]) }}\">Favorites <span class=\"badge\">{{ $count_favoritings }}</span></a></li>","            "],"id":2}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":12},"end":{"row":21,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528785722312,"hash":"3696fb1f911e53f1939f19cd06620acb73add7f0"}