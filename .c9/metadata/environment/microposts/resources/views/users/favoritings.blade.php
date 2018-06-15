{"filter":false,"title":"favoritings.blade.php","tooltip":"/microposts/resources/views/users/favoritings.blade.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":10},"end":{"row":13,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"cd92e4de81eded70ed7549296e82da712f270dc1","undoManager":{"mark":45,"position":45,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_follow.follow_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_follow.follow_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":25,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_favorite.favorite_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                 <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.favorites', ['id' => $user->id]) }}\">Favorites <span class=\"badge\">{{ $count_favorites }}</span></a></li>","            </ul>","            @include('users.users', ['users' => $users])","        </div>","    </div>","@endsection"],"id":3}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["e"],"id":4}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["i"],"id":5},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["n"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":80},"end":{"row":20,"column":81},"action":"remove","lines":["s"],"id":6},{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"remove","lines":["g"]},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"remove","lines":["n"]},{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"remove","lines":["i"]},{"start":{"row":20,"column":76},"end":{"row":20,"column":77},"action":"remove","lines":["w"]},{"start":{"row":20,"column":75},"end":{"row":20,"column":76},"action":"remove","lines":["o"]},{"start":{"row":20,"column":74},"end":{"row":20,"column":75},"action":"remove","lines":["l"]},{"start":{"row":20,"column":73},"end":{"row":20,"column":74},"action":"remove","lines":["l"]}],[{"start":{"row":20,"column":72},"end":{"row":20,"column":73},"action":"remove","lines":["o"],"id":7}],[{"start":{"row":20,"column":72},"end":{"row":20,"column":73},"action":"insert","lines":["a"],"id":8},{"start":{"row":20,"column":73},"end":{"row":20,"column":74},"action":"insert","lines":["v"]},{"start":{"row":20,"column":74},"end":{"row":20,"column":75},"action":"insert","lines":["o"]},{"start":{"row":20,"column":75},"end":{"row":20,"column":76},"action":"insert","lines":["r"]},{"start":{"row":20,"column":76},"end":{"row":20,"column":77},"action":"insert","lines":["i"]}],[{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"insert","lines":["n"],"id":9},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"remove","lines":["'"],"id":10},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"remove","lines":["g"]},{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"remove","lines":["n"]}],[{"start":{"row":20,"column":77},"end":{"row":20,"column":78},"action":"insert","lines":["t"],"id":11},{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"insert","lines":["i"]},{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"insert","lines":["n"]},{"start":{"row":20,"column":80},"end":{"row":20,"column":81},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":136},"end":{"row":20,"column":137},"action":"remove","lines":["s"],"id":12},{"start":{"row":20,"column":135},"end":{"row":20,"column":136},"action":"remove","lines":["e"]}],[{"start":{"row":20,"column":135},"end":{"row":20,"column":136},"action":"insert","lines":["i"],"id":13},{"start":{"row":20,"column":136},"end":{"row":20,"column":137},"action":"insert","lines":["n"]},{"start":{"row":20,"column":137},"end":{"row":20,"column":138},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":138},"end":{"row":20,"column":139},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":20,"column":82},"end":{"row":20,"column":83},"action":"insert","lines":["s"],"id":15}],[{"start":{"row":20,"column":82},"end":{"row":20,"column":83},"action":"remove","lines":["s"],"id":16}],[{"start":{"row":20,"column":81},"end":{"row":20,"column":82},"action":"insert","lines":["s"],"id":17}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["x"],"id":18}],[{"start":{"row":22,"column":26},"end":{"row":22,"column":27},"action":"remove","lines":["s"],"id":19},{"start":{"row":22,"column":25},"end":{"row":22,"column":26},"action":"remove","lines":["r"]},{"start":{"row":22,"column":24},"end":{"row":22,"column":25},"action":"remove","lines":["e"]},{"start":{"row":22,"column":23},"end":{"row":22,"column":24},"action":"remove","lines":["s"]},{"start":{"row":22,"column":22},"end":{"row":22,"column":23},"action":"remove","lines":["u"]}],[{"start":{"row":22,"column":22},"end":{"row":22,"column":23},"action":"insert","lines":["m"],"id":20},{"start":{"row":22,"column":23},"end":{"row":22,"column":24},"action":"insert","lines":["i"]},{"start":{"row":22,"column":24},"end":{"row":22,"column":25},"action":"insert","lines":["c"]},{"start":{"row":22,"column":25},"end":{"row":22,"column":26},"action":"insert","lines":["r"]},{"start":{"row":22,"column":26},"end":{"row":22,"column":27},"action":"insert","lines":["o"]},{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"insert","lines":["p"]},{"start":{"row":22,"column":28},"end":{"row":22,"column":29},"action":"insert","lines":["o"]},{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"insert","lines":["s"]},{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["t"]},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"insert","lines":["s"]}],[{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"remove","lines":["s"],"id":21},{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"remove","lines":["r"]},{"start":{"row":22,"column":35},"end":{"row":22,"column":36},"action":"remove","lines":["e"]},{"start":{"row":22,"column":34},"end":{"row":22,"column":35},"action":"remove","lines":["s"]},{"start":{"row":22,"column":33},"end":{"row":22,"column":34},"action":"remove","lines":["u"]}],[{"start":{"row":22,"column":33},"end":{"row":22,"column":34},"action":"insert","lines":["m"],"id":22},{"start":{"row":22,"column":34},"end":{"row":22,"column":35},"action":"insert","lines":["i"]},{"start":{"row":22,"column":35},"end":{"row":22,"column":36},"action":"insert","lines":["c"]},{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"insert","lines":["r"]},{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"insert","lines":["o"]},{"start":{"row":22,"column":38},"end":{"row":22,"column":39},"action":"insert","lines":["p"]},{"start":{"row":22,"column":39},"end":{"row":22,"column":40},"action":"insert","lines":["o"]},{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"insert","lines":["s"]},{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"insert","lines":["t"]}],[{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"insert","lines":["s"],"id":23}],[{"start":{"row":22,"column":52},"end":{"row":22,"column":53},"action":"remove","lines":["s"],"id":24},{"start":{"row":22,"column":51},"end":{"row":22,"column":52},"action":"remove","lines":["r"]},{"start":{"row":22,"column":50},"end":{"row":22,"column":51},"action":"remove","lines":["e"]},{"start":{"row":22,"column":49},"end":{"row":22,"column":50},"action":"remove","lines":["s"]},{"start":{"row":22,"column":48},"end":{"row":22,"column":49},"action":"remove","lines":["u"]}],[{"start":{"row":22,"column":48},"end":{"row":22,"column":49},"action":"insert","lines":["m"],"id":25},{"start":{"row":22,"column":49},"end":{"row":22,"column":50},"action":"insert","lines":["i"]},{"start":{"row":22,"column":50},"end":{"row":22,"column":51},"action":"insert","lines":["c"]},{"start":{"row":22,"column":51},"end":{"row":22,"column":52},"action":"insert","lines":["r"]},{"start":{"row":22,"column":52},"end":{"row":22,"column":53},"action":"insert","lines":["o"]},{"start":{"row":22,"column":53},"end":{"row":22,"column":54},"action":"insert","lines":["p"]},{"start":{"row":22,"column":54},"end":{"row":22,"column":55},"action":"insert","lines":["o"]},{"start":{"row":22,"column":55},"end":{"row":22,"column":56},"action":"insert","lines":["s"]},{"start":{"row":22,"column":56},"end":{"row":22,"column":57},"action":"insert","lines":["t"]}],[{"start":{"row":22,"column":57},"end":{"row":22,"column":58},"action":"insert","lines":["s"],"id":26}],[{"start":{"row":22,"column":68},"end":{"row":22,"column":69},"action":"remove","lines":["s"],"id":27},{"start":{"row":22,"column":67},"end":{"row":22,"column":68},"action":"remove","lines":["r"]},{"start":{"row":22,"column":66},"end":{"row":22,"column":67},"action":"remove","lines":["e"]},{"start":{"row":22,"column":65},"end":{"row":22,"column":66},"action":"remove","lines":["s"]},{"start":{"row":22,"column":64},"end":{"row":22,"column":65},"action":"remove","lines":["u"]}],[{"start":{"row":22,"column":64},"end":{"row":22,"column":65},"action":"insert","lines":["m"],"id":28},{"start":{"row":22,"column":65},"end":{"row":22,"column":66},"action":"insert","lines":["i"]},{"start":{"row":22,"column":66},"end":{"row":22,"column":67},"action":"insert","lines":["c"]},{"start":{"row":22,"column":67},"end":{"row":22,"column":68},"action":"insert","lines":["r"]},{"start":{"row":22,"column":68},"end":{"row":22,"column":69},"action":"insert","lines":["o"]},{"start":{"row":22,"column":69},"end":{"row":22,"column":70},"action":"insert","lines":["p"]},{"start":{"row":22,"column":70},"end":{"row":22,"column":71},"action":"insert","lines":["o"]},{"start":{"row":22,"column":71},"end":{"row":22,"column":72},"action":"insert","lines":["s"]},{"start":{"row":22,"column":72},"end":{"row":22,"column":73},"action":"insert","lines":["t"]},{"start":{"row":22,"column":73},"end":{"row":22,"column":74},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"remove","lines":["x"],"id":29}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["s"],"id":30}],[{"start":{"row":0,"column":0},"end":{"row":25,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_favoritings.favorite_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                 <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/favoritings) ? 'active' : '' }}\"><a href=\"{{ route('users.favoritings', ['id' => $user->id]) }}\">Favorites <span class=\"badge\">{{ $count_favorites }}</span></a></li>","            </ul>","            @include('microposts.microposts', ['microposts' => $microposts])","        </div>","    </div>","@endsection"],"id":31}],[{"start":{"row":0,"column":0},"end":{"row":25,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('user_favoritings.favorite_button', ['user' => $user])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                 <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/favoritings') ? 'active' : '' }}\"><a href=\"{{ route('users.favoritings', ['id' => $user->id]) }}\">Favorites <span class=\"badge\">{{ $count_favorites }}</span></a></li>","            </ul>","            @include('microposts.microposts', ['microposts' => $microposts])","        </div>","    </div>","@endsection"],"id":32}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"remove","lines":["s"],"id":33},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"remove","lines":["g"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"remove","lines":["n"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["i"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"remove","lines":["t"]}],[{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["t"],"id":34},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["w"]}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["w"],"id":35}],[{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["e"],"id":36}],[{"start":{"row":20,"column":140},"end":{"row":20,"column":141},"action":"remove","lines":["s"],"id":37},{"start":{"row":20,"column":139},"end":{"row":20,"column":140},"action":"remove","lines":["g"]},{"start":{"row":20,"column":138},"end":{"row":20,"column":139},"action":"remove","lines":["n"]},{"start":{"row":20,"column":137},"end":{"row":20,"column":138},"action":"remove","lines":["i"]}],[{"start":{"row":20,"column":137},"end":{"row":20,"column":138},"action":"insert","lines":["e"],"id":38},{"start":{"row":20,"column":138},"end":{"row":20,"column":139},"action":"insert","lines":["s"]}],[{"start":{"row":20,"column":138},"end":{"row":20,"column":139},"action":"remove","lines":["s"],"id":39}],[{"start":{"row":20,"column":137},"end":{"row":20,"column":138},"action":"remove","lines":["e"],"id":40}],[{"start":{"row":20,"column":137},"end":{"row":20,"column":138},"action":"insert","lines":["i"],"id":41},{"start":{"row":20,"column":138},"end":{"row":20,"column":139},"action":"insert","lines":["n"]},{"start":{"row":20,"column":139},"end":{"row":20,"column":140},"action":"insert","lines":["g"]},{"start":{"row":20,"column":140},"end":{"row":20,"column":141},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":126},"end":{"row":19,"column":127},"action":"remove","lines":["s"],"id":42}],[{"start":{"row":19,"column":126},"end":{"row":19,"column":127},"action":"insert","lines":["s"],"id":43}],[{"start":{"row":20,"column":217},"end":{"row":20,"column":218},"action":"remove","lines":["s"],"id":44},{"start":{"row":20,"column":216},"end":{"row":20,"column":217},"action":"remove","lines":["e"]}],[{"start":{"row":20,"column":216},"end":{"row":20,"column":217},"action":"insert","lines":["i"],"id":45},{"start":{"row":20,"column":217},"end":{"row":20,"column":218},"action":"insert","lines":["n"]},{"start":{"row":20,"column":218},"end":{"row":20,"column":219},"action":"insert","lines":["g"]},{"start":{"row":20,"column":219},"end":{"row":20,"column":220},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":72},"action":"remove","lines":["  @include('user_favorite.favorite_button', ['user' => $user])"],"id":46}]]},"timestamp":1528785886736}