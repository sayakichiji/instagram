{"filter":false,"title":"2018_06_05_155721_create_microposts_table.php","tooltip":"/microposts/database/migrations/2018_06_05_155721_create_microposts_table.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":16,"column":37},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":17,"column":12},"end":{"row":18,"column":38},"action":"insert","lines":["            $table->integer('user_id')->unsigned()->index();","            $table->string('content');"],"id":3}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":24},"action":"remove","lines":["    "],"id":4},{"start":{"row":17,"column":16},"end":{"row":17,"column":20},"action":"remove","lines":["    "]},{"start":{"row":17,"column":12},"end":{"row":17,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":19,"column":33},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":71},"action":"insert","lines":[" $table->foreign('user_id')->references('id')->on('users');"],"id":6}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":10,"selection":{"start":{"row":27,"column":19},"end":{"row":27,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528182298949,"hash":"0acf3ccb6a8f6ebb033eddf1051423a9f695f194"}