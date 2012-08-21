-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 08 月 28 日 03:02
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `acm10`
--

-- --------------------------------------------------------

--
-- 表的结构 `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `author` varchar(200) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `notices`
--

INSERT INTO `notices` (`id`, `title`, `author`, `content`) VALUES
(2, '之前的东西111', '贺天行', '期末要求\r\n编译：\r\n贾枭 李诗剑 强瑞鑫 王孟晖\r\nmips:\r\n杨笛一 陈旒俐 朱虹宇\r\n抱歉，小结中还需增加一个内容，即点名评价所有由学长担任的助教，这个非常重要，我们将实行助教规范管理。谢谢！\r\n请转告大家，对所有课都要进行评价，包括体育、英语、Hopcroft、陈宁/陈汐、Lorenzo、邓小铁等老师的课。谢谢！\r\naaaa\r\n=================================================================\r\n这是Tiger数据bonus的统计版，请准备做某个数据的同学把自己的名字填到文件名后，防止重复劳动。每个人只能同时出现一个（在做）的字样。\r\n Board.tig 秒四含\r\n Expression.tig 秒四含\r\n Factor.tig 秒四含\r\n FuncRename.tig 问题：函数重名\r\n GCD.tig 秒四含\r\n Hanoi.tig 秒四含\r\n Hanoi2.tig 秒四含\r\n HeapSort.tig 秒四含\r\n Hello.tig 秒四含\r\n Horse.tig 秒四含（做了一半）贺天行\r\n问题：ANSWER比应有步数少1，是因为tig程序中的:=打成了=\r\n Horse2.tig 贺天行\r\n问题：同上\r\n Horse3.tig 贺天行\r\n问题：同上\r\n HPPlus.tig 秒四含\r\n InlineCheck.tig 秒四含\r\n Magic.tig 贺天行\r\n ManyArguments.tig 贺天行\r\n ManyManyArguments.tig 贺天行\r\n Maxflow.tig 秒四含\r\n Merge.tig \r\n MultiArray.tig 秒四含\r\n NQueenCon.tig 秒四含\r\n Plus.tig 戴勃\r\n Prime.tig 戴勃\r\n Prime2.tig 戴勃\r\n Qsort.tig 戴勃\r\n Reverse.tig 戴勃\r\n Self.tig 易茜\r\n Spill.tig 秒四含\r\n Spill2.tig 秒四含\r\n SuperLoop.tig 易茜\r\n Tak.tig 易茜\r\n TwinPrime.tig 易茜\r\n============================================================\r\n篮球 6.4 新体 新体\r\n结果：惨败，为10级本次体育节画上了圆满的句号\r\n\r\n羽毛球 5.21 周日晚7点 南体\r\n结果：胜\r\n\r\n足球队比赛通知: 周日中午12点, 在南体对阵大四, 打平即可夺冠\r\n结果：败\r\n\r\n羽毛球（欢总） 5.10 5点南体4号场，打大四,有行政课的6点必须到\r\n结果：胜\r\n\r\n羽毛球（欢总） 5.10 5点南体4号场，打大一,有行政课的6点必须到\r\n结果：胜\r\n\r\n羽毛球（欢总） 5.2 5点南体4号场，打研一,有行政课的6点必须到\r\n结果：输\r\n\r\n保龄球（戴勃） 4.25 6:00-10:00 p.m 光标楼一楼右边保龄球\r\n结果：萌死人不偿命，完胜\r\n\r\n篮球（科神） 4.25 7:00 p.m 新体\r\n结果：凶残脸神，轻取\r\n\r\n篮球（科神） 4.14 2:00 p.m 华联旁边体育场\r\n\r\n足球（梅西） 4.14 10:00 a.m 南体\r\n1:0 轻虐 萌智大头顶入对方大门，门将望头兴叹\r\n\r\n桌球（刁） 4.12 6:00 p.m 学生服务中心\r\n战胜大一，大三，研究生。净胜2分，欢总的崛起。\r\n\r\n足球（梅西） 4.8 7:00 a.m 打大一 4餐旁边菜地\r\n结果：6比5险胜\r\n\r\n羽毛球（欢总） 3.30 晚七点 到新体 需要另外带一双干净的鞋（没有的同学把带的一双鞋的鞋底刷下便可），务必带学生卡。\r\n结果：欢总的伤势导致惜败，期待欢总的再次崛起！！\r\n==================================================================\r\n为什么大家都在说脸饼没有人说天亦,行星？==================================================================\r\n项目	年级	姓名	手机	备注\r\n足球(约7人)				\r\n	10	陈启明	18801902193	领队\r\n	10	陈彬毅	18801903252	\r\n	10	严欣辰	13918462360	\r\n	10	杨欢	18801969913	\r\n	10	林承宇	18801902490	\r\n	10	胡张广达	18801903583	\r\n	10	范雨晨	18801906710	\r\n	10	张捷钧	18801971232	\r\n	10	张选智	13601896214	\r\n	10	刘彦	15216712036	\r\n	10	陶亦心	13564768186	\r\n	10	蒋昊	18801906950	\r\n篮球(>=5人)				\r\n	10	廖予科	13817241069	领队\r\n	10	杨欢	18801969913	\r\n	10	刘彦	15216712036	\r\n	10	邱霖	18961156665	\r\n	10	商静波	15216708255	\r\n	10	蒋昊	18801906950	\r\n	10	陶亦心	13564768186	\r\n	10	王鸿伟	18801970482	\r\n陪练：天行，梅西，志明，大师，李霖\r\n保龄球(暂定为3人)				\r\n	10	戴勃	18801969501	领队\r\n	10	王鸿伟	18801970482	\r\n	10	孙雪曈	13918470096	\r\n	10	商静波	15216708255	\r\n	10	张捷钧	18801971232	\r\n				\r\n				\r\n羽毛球(约10人)				\r\n	10	杨欢	18801969913	领队\r\n	10	商静波	15216708255	\r\n	10	金海辰	19611108094	\r\n	10	陈彬毅	18801903252	\r\n	10	刁克路	18801970699	\r\n				\r\n				\r\n				\r\n				\r\n乒乓球(约8人)				\r\n	10	林承宇	18801902490	领队\r\n	10	严欣辰	13918462360	\r\n	10	李霖	18801970352	\r\n	10	金海辰	19611108094	\r\n	10	蒋昊	18801906950	\r\n	10	林承宇	18801902490	\r\n	10	廖予科	13817241069	\r\n桌球(约4人)				\r\n	10	刁克路	18801970699	领队\r\n	10	李霖	18801970352	\r\n	10	金海辰	19611108094	\r\n	10	杨欢	18801969913	\r\n	10	廖予科	13817241069	\r\n	10	易茜	13651954840	\r\n	10	王鸿伟	18801970482	\r\n	10	林承宇	18801902490	\r\n猜拳(10人)				\r\n	10	贺天行	18721535886	领队\r\n	10	李霖	18801970352	\r\n	10	孙雪曈	13918470096	\r\n	10	缪沛晗	18801971151	\r\n	10	严欣辰	13918462360	\r\n	10	陈启明	18801902193	\r\n	10	陈彬毅	18801903252	\r\n	10	刘彦	15216712036	\r\n	10	蒲悠儿	18801965683	\r\n	10	戴勃	18801969501	\r\n十人十一足(10人)				\r\n	10	贺天行	18721535886	领队\r\n	10	蒋武轩	18801970778	\r\n	10	李霖	18801970352	\r\n	10	刘彦	15216712036	\r\n	10	胡张广达	18801903583	\r\n	10	严欣辰	13918462360	\r\n	10	商静波	15216708255	\r\n	10	黎彧君	13564728153	\r\n	10	王鸿伟	18801970482	\r\n	10	范雨晨	18801906710	\r\n				\r\n				\r\n				\r\n长绳(2人甩绳+8人跳绳)	10	贺天行	18721535886	领队，但非队员\r\n	10	孙雪曈	13918470096	\r\n	10	戴勃	18801969501	\r\n	10	陈启明	18801902193	\r\n	10	严欣辰	13918462360	\r\n	10	陶亦心	 13564768186	\r\n	10	林承宇	18801902490	\r\n	10	廖予科	13817241069	\r\n	10	蒲悠儿	18801965683	\r\n	10	陆怡菲	18801970715	\r\n	10	金海辰	19611108094	\r\n				\r\n拔河(10人)	10	贺天行	18721535886	领队、但非队员\r\n	10	陶亦心	13564768186	\r\n	10	孙雪曈	13918470096	\r\n	10	林承宇	18801902490	\r\n	10	刘彦	15216712036	\r\n	10	杨欢	18801969913	\r\n	10	张捷钧	18801971232	\r\n	10	严欣辰	13918462360	\r\n	10	蒋武轩	18801970778	\r\n	10	戴勃	18801969501	\r\n	10	陈启明	18801902193	\r\n==========================================================================\r\nTIGER\r\nhttp://compiler.acm-project.org/\r\n======================================================================\r\nMIPS\r\n>>> 第一次lecture\r\n>>> 时间：2012.3.2 6:00-7:00（pm）\r\n>>> 地点：电信群楼3-414or404\r\n>>> 内容：overview of the course + pipeline + hazard + self modify code\r\n>>>\r\n>>>\r\n>>> 课程主页为 http://mips.acm-project.org/\r\n>>> 内容还会有少量调整\r\n>>>\r\n>>> 统一使用 ModelSim PE Student Edition 10.1\r\n>>> 即官网上最新的学生版\r\n>>> 传送门 http://model.com/content/modelsim-pe-student-edition-hdl-simulation\r\n各位，\r\n大家完成MIPS所需要的基本所以材料包括安装文件。我帮大家整理了一下，文件太大，所以只能放在我的public下面。\r\nftp://public.sjtu.edu.cn\r\n用户名：david\r\n密码：public\r\n======================================================================\r\n转一点四含姐姐的东西：\r\n概率论：\r\n老师：韩东，donghan@sjtu.edu.cn，办公室在数学楼2506，答疑时间是周四下午，或者email跟他约。\r\n助教：郭嘉俊，guojiajun89@gmail.com，电话15821980346\r\n成绩评定：平时作业10%+期中30%+期末60%\r\n计组：\r\n老师：阿磊，liangalei@sjtu.edu.cn\r\n助教：陈晓松，chenxiaosong@sjtu.edu.cn\r\n课程网站(wiki)：http://202.120.40.124/index.php/Course\r\n成绩评定：期末50%+大作业50%（好像是这样）\r\n阿磊说上课按ppt讲，书作为工具，需要的时候查一下相关内容。\r\n编译原理：\r\n老师：过敏意，guo-my@sjtu.edu.cn，主页http://epcc.sjtu.edu.cn/guo-my；沈耀，yshen@cs.sjtu.edu.cn\r\n课程网站：http://epcc.sjtu.edu.cn/?q=node/19\r\n成绩评定：平时成绩30%+期末70%（会根据实际情况调整）\r\nmsh:\r\nhttp://www1.cs.sjtu.edu.cn/research.action\r\n这里有各个方向的brief intro，然后有各个laboratories的链接\r\n\r\nhttp://www1.cs.sjtu.edu.cn/people_faculty.action\r\n这个是所有的老师，也可以找到那些老师的主页或是实验室的主页（比如yyu的那里有apex实验室的链接）\r\n=============================================================================\r\n公告栏格式：\r\n1.发完的公告要用“=”分隔开来\r\n2.记得在最后写上（Post By YourName）\r\n3.记得Save\r\n4.禁止恶意灌水\r\n5.理论上所有人都可以发公告，过时的公告请自行删除\r\n6.以上内容请务必遵守，凡是违规这(←错别字醒目)，关小黑屋两天～～XD～～～\r\n7.胖子太帅了'),
(18, '什么', '贺天行', '不是吧');

-- --------------------------------------------------------

--
-- 表的结构 `notice_backups`
--

CREATE TABLE IF NOT EXISTS `notice_backups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `author` varchar(200) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- 转存表中的数据 `notice_backups`
--

INSERT INTO `notice_backups` (`id`, `title`, `author`, `content`) VALUES
(33, 'backup', NULL, 'backup1234567'),
(34, 'backup', NULL, 'backup12345678'),
(35, 'backup', NULL, 'backup123456789'),
(36, 'backup', NULL, 'backup12345678910'),
(37, 'backup', NULL, 'backup1234567891011'),
(38, 'backup', NULL, 'backup123456789101112'),
(39, 'backup', NULL, 'backup12345678910111213'),
(40, 'backup', NULL, 'backup1234567891011121314'),
(41, 'backup', NULL, 'backup123456789101112131415'),
(42, NULL, NULL, 'adcddszv zv sfbvgfdhb'),
(43, NULL, NULL, 'dvcav dzsv sfgvkj,kjnkl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
