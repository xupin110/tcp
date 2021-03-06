<?php

namespace gf\conf;

class Config
{
	const WASHCARD = true;	//洗牌
	const DEBUG = true;
	const TEST_PAI = 1;
	//－－－－－－－－－－－－－玩家解散游戏状态 －－－－－－－－－－－－－－－－－－－
	const CANCLE_GAME_CLOCKER = 1; //解散房间时是否用倒计时 0 不用 1 用
	const CANCLE_GAME_CLOCKER_NUM = 20; //倒计时设定时间
	const CANCLE_GAME_CLOCKER_LIMIT = 2; //倒计时所剩时间（到此时间，等待心跳解散房间）
	
	const PLATFORM = 'gfplay';
	const LOG_FILE = '/data/www/tcp/game_s_tcp_baoding/log/swoole.log';
	
	const API_KEY = 'NCBDpay';
	const GAME_PORT = 120;

	const WEB_HOST = '127.0.0.1:80';
	const WEB_PATH = '/mahjong/game_s_http_baoding/index.php';
	const RPC_KEY = 'gfplay is best gfplay is best';
	
	const WHITE_IP = array('10.135.21.11', '127.0.0.1');	//远程连接白名单

	const RES_BID = 0;

	const LAND_LORD_BASE = 1;	//斗地主底分

	const ALL_CARD_108_TEST = [33,34,35,19,20,21,6,7,8,23,24,34,34,36,37,38,39,40,41,17,18,22,1,1,2,34,33,20,21,7,40,1,2,3,4,5,6,7,8,9,17,18,19,20,1,3,2,3,4,5,4,3,2,4,5,6,7,8,9,9,9,6,5,8,17,17,33,33,18,18,19,19,20,21,21,22,22,23,23,22,23,24,24,24,35,35,35,36,36,36,37,37,37,38,38,38,39,39,39,40,40,41,41,41,25,25,25,25];

	const ALL_CARD_136_TEST = [1,1,7,8,9,7,8,9,21,22,23,25,33,1,33,34,35,36,37,38,22,23,24,2,9,9,37,38,38,39,39,40,40,41,41,41,25,25,25,49,19,3,51,1,52,20,6,51,4,39,55,5,5,50,19,6,52,53,22,37,36,40,18,7,21,53,50,53,53,19,2,18,24,19,50,51,20,38,36,23,54,49,55,37,54,36,5,20,40,49,18,52,51,21,41,52,8,4,3,23,17,55,18,2,3,35,7,39,54,17,34,35,34,4,55,49,5,17,3,20,6,33,33,17,21,24,24,22,34,6,35,4,50,2,8,54];

	const ALL_CARD_LANDLORD_TEST = 
	[ 10, 108, 43, 34, 57, 27, 17, 42, 82, 107, 106, 44, 28, 89, 84, 97, 41, 12, 65, 66, 83, 20, 9, 75, 18, 91, 98, 25, 33, 19, 50, 99, 11, 52, 90, 92, 76, 74, 73, 60, 59, 58, 51, 35, 36, 68, 81, 100, 125, 105, 67, 26, 117, 49 ];

	const ALL_CARD_DAHONG5_TEST = 
	[ 89, 117, 10, 9, 20, 11, 125, 12, 25, 91, 27, 28, 33, 35, 34, 36, 41, 42, 43, 44, 49, 50, 51, 52, 57, 58, 59, 60, 65, 66, 67, 68, 73, 74, 75, 19, 76, 18, 17, 26];
	const ALL_CARD_RUNFAST16_TEST = 
	[  9,10,11,12	//3
	,17,18,19,20	//4
	,25,26,27,28	//5
	,33,34,35,36	//6
	,41,42,43,44	//7

	,49,50,51,52	//8
	,57,58,59,60	//9
	,65,66,67,68	//10
	,73,74,75,76	//J
	,81,82,83,84	//Q

	,89,90,91,92	//K
	,98,99,100	    //A去掉方框A
	,108	       //红2
	];
	
	const ALL_CARD_RUNFAST15D_TEST = 
	[  9,10,11,12	//3
	,17,18,19,20	//4
	,25,26,27,28	//5
	,33,34,35,36	//6
	,41,42,43,44	//7

	,49,50,51,52	//8
	,57,58,59,60	//9
	,65,66,67,68	//10
	,73,74,75,76	//J
	,81,82,83,84	//Q

	,90,91,92	//K
	,99	//A
	,108	//2
	];


}
