{"filter":false,"title":"favoriting.blade.php","tooltip":"/microposts/resources/views/users/favoriting.blade.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_follow.follow_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_follow.follow_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":25,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_favorite.favorite_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                 <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.favorites', ['id' => $user->id]) }}\">Favorites <span class=\"badge\">{{ $count_favorites }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":3}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["e"],"id":4}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["i"],"id":5},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["n"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":80},"end":{"row":20,"column":81},"action":"remove","lines":["s"],"id":6},{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"remove","lines":["g"]},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"remove","lines":["n"]},{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"remove","lines":["i"]},{"start":{"row":20,"column":76},"end":{"row":20,"column":77},"action":"remove","lines":["w"]},{"start":{"row":20,"column":75},"end":{"row":20,"column":76},"action":"remove","lines":["o"]},{"start":{"row":20,"column":74},"end":{"row":20,"column":75},"action":"remove","lines":["l"]},{"start":{"row":20,"column":73},"end":{"row":20,"column":74},"action":"remove","lines":["l"]}],[{"start":{"row":20,"column":72},"end":{"row":20,"column":73},"action":"remove","lines":["o"],"id":7}],[{"start":{"row":20,"column":72},"end":{"row":20,"column":73},"action":"insert","lines":["a"],"id":8},{"start":{"row":20,"column":73},"end":{"row":20,"column":74},"action":"insert","lines":["v"]},{"start":{"row":20,"column":74},"end":{"row":20,"column":75},"action":"insert","lines":["o"]},{"start":{"row":20,"column":75},"end":{"row":20,"column":76},"action":"insert","lines":["r"]},{"start":{"row":20,"column":76},"end":{"row":20,"column":77},"action":"insert","lines":["i"]}],[{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"insert","lines":["n"],"id":9},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"remove","lines":["'"],"id":10},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"remove","lines":["g"]},{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"remove","lines":["n"]}],[{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"insert","lines":["t"],"id":11},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"insert","lines":["i"]},{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"insert","lines":["n"]},{"start":{"row":20,"column":80},"end":{"row":20,"column":81},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":136},"end":{"row":20,"column":137},"action":"remove","lines":["s"],"id":12},{"start":{"row":20,"column":135},"end":{"row":20,"column":136},"action":"remove","lines":["e"]}],[{"start":{"row":20,"column":135},"end":{"row":20,"column":136},"action":"insert","lines":["i"],"id":13},{"start":{"row":20,"column":136},"end":{"row":20,"column":137},"action":"insert","lines":["n"]},{"start":{"row":20,"column":137},"end":{"row":20,"column":138},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":138},"end":{"row":20,"column":139},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":20,"column":82},"end":{"row":20,"column":83},"action":"insert","lines":["s"],"id":15}],[{"start":{"row":20,"column":82},"end":{"row":20,"column":83},"action":"remove","lines":["s"],"id":16}],[{"start":{"row":20,"column":81},"end":{"row":20,"column":82},"action":"insert","lines":["s"],"id":17}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["x"],"id":18}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":38},"end":{"row":13,"column":38},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528780170189,"hash":"4d817c10054a215ce6e38220a4ee3181198415e3"}