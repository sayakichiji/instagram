{"filter":false,"title":"users.blade.php","tooltip":"/kadai-tasklist/resources/views/tasks/users.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":19,"column":6},"action":"insert","lines":["@if (count($users) > 0)","<ul class=\"media-list\">","@foreach ($users as $user)","    <li class=\"media\">","        <div class=\"media-left\">","            <img class=\"media-object img-rounded\" src=\"{{ Gravatar::src($user->email, 50) }}\" alt=\"\">","        </div>","        <div class=\"media-body\">","            <div>","                {{ $user->name }}","            </div>","            <div>","                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>","            </div>","        </div>","    </li>","@endforeach","</ul>","{!! $users->render() !!}","@endif"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":6},"end":{"row":19,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528260718258,"hash":"40cb01b40d641d8c0f1750f529cbbcd3899f4423"}