{"filter":false,"title":"Team.php","tooltip":"/cms/app/Models/Team.php","undoManager":{"mark":25,"position":25,"stack":[[{"start":{"row":10,"column":1},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["// Userテーブルとのリレーション （従テーブル側）","public function user() {","\treturn $this->belongsTo('App\\Models\\User');","}"],"id":3}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":14,"column":1},"end":{"row":14,"column":5},"action":"insert","lines":["    "],"id":5}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "],"id":6}],[{"start":{"row":14,"column":3},"end":{"row":14,"column":4},"action":"remove","lines":[" "],"id":7},{"start":{"row":14,"column":2},"end":{"row":14,"column":3},"action":"remove","lines":[" "]},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"remove","lines":[" "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":["\t"]}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["// Userテーブルとのリレーション （従テーブル側）","public function user() {"," return $this->belongsTo('App\\Models\\User');","}"],"id":8}],[{"start":{"row":11,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["// Userテーブルとのリレーション （従テーブル側）","public function user() {","\treturn $this->belongsTo('App\\Models\\User');","}"],"id":9}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":10}],[{"start":{"row":13,"column":1},"end":{"row":13,"column":5},"action":"insert","lines":["    "],"id":11}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":4},"action":"insert","lines":["  "],"id":12}],[{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"remove","lines":[" "],"id":13}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"remove","lines":["}"],"id":14}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":["}"],"id":15}],[{"start":{"row":10,"column":1},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":16}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":48},"action":"remove","lines":["// Userテーブルとのリレーション （従テーブル側）","     public function user() {","\t    return $this->belongsTo('App\\Models\\User');"],"id":17}],[{"start":{"row":11,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["// Teamsテーブルとのリレーション （主テーブル側）","public function o_teams() {","\treturn $this->hasMany('App\\Models\\Team');","}"],"id":18}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["}"],"id":19},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":20}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":21}],[{"start":{"row":14,"column":1},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":22}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["}"],"id":23}],[{"start":{"row":15,"column":1},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":24}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["}"],"id":25},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"remove","lines":["}"],"id":26},{"start":{"row":9,"column":19},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":13,"column":1},"action":"remove","lines":["<?php","","namespace App\\Models;","","use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;","use Illuminate\\Database\\Eloquent\\Model;","","class Team extends Model","{","    use HasFactory;","// Teamsテーブルとのリレーション （主テーブル側）","    public function o_teams() {","    \treturn $this->hasMany('App\\Models\\Team');","}"],"id":27},{"start":{"row":0,"column":0},"end":{"row":23,"column":1},"action":"insert","lines":["<?php","","namespace App\\Models;","","use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;","use Illuminate\\Database\\Eloquent\\Model;","","class Team extends Model","{","    use HasFactory;","    ","    // Userテーブル側とのリレーション（従テーブル側）","    public function user(){","        return $this->belongsTo('App\\Models\\User');","    }","    ","     //userテーブルとのリレーション(多対多リレーション：参加者取得)","    public function members(){","        return $this->belongsToMany('App\\Models\\User')->withPivot('role');","    }","    ","    ","    ","}"]}]]},"ace":{"folds":[],"scrolltop":139,"scrollleft":0,"selection":{"start":{"row":21,"column":4},"end":{"row":21,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":61,"mode":"ace/mode/php"}},"timestamp":1676160502972,"hash":"d51a02d9fbedcb388f1bbf7bd3a1c1a432df6415"}