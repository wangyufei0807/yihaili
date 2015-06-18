-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2012 年 12 月 03 日 08:49
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `aladdin-media`
--

-- --------------------------------------------------------

--
-- 表的结构 `media_about`
--

CREATE TABLE IF NOT EXISTS `media_about` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `media_about`
--

INSERT INTO `media_about` (`id`, `name`, `text`) VALUES
(1, '认识阿拉丁', '<p>\r\n	在即将到来的营销3.0时代，阿拉丁将利用自身的独特优势，将多年来积累的多领域资源进行充分优化整合，形成具有独特气质的优秀产品的同时，我们将对传媒行业的理性思考与多年来从事公关活动的感性思维相结合，创造出差异化的服务理念与运营模式，在传媒行业快速发展的大趋势中，不断完善，不断壮大，努力实现全方位，跨越式发展。\r\n</p>\r\n<p>\r\n	我们本着“致专、致精、致勤”的战略方向，为员工搭建肆意挥洒才华的优秀平台，为客户提供耳目一新的服务模式，为合作伙伴营造共赢的良好局面，为整体行业的发展贡献最大的力量，阿拉丁传媒，以铸名牌企业为目标，以创百年企业为远景，勃然奋励，一往无前的迈向波澜壮阔的未来！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203132057q.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>'),
(2, '总裁致辞', '总裁致辞<br />'),
(3, '阿拉丁文化', '阿拉丁文化'),
(4, '阿拉丁精神', '<img alt="" src="/data/attachment/2012-12/20121203115643z.jpg" width="700" height="497" />\r\n<p>\r\n	&nbsp;\r\n</p>'),
(5, '阿拉丁团队 ', '<p>\r\n	阿拉丁人来自各大知名4A公司、影视行业、电视台等精英实战团队\r\n</p>\r\n<p>\r\n	拥有丰富的从业经验和优秀的职业素质，我们始终携精诚之心，怀蹈厉之志\r\n</p>\r\n<p>\r\n	用艺术与商业的思维凝结成无数完美的创意，用专业与高效的行动勾绘出一幕幕华美蓝图用创新与改变的意识，制造了一个又一个经典，在我们的努力下\r\n</p>\r\n<p>\r\n	您的品牌在纷繁的世界中焕发出着独特的表现力和生命力\r\n</p>\r\n<p class="MsoNormal" align="center">\r\n	<span style="font-size:14px;"><b><span style="color:#C00000;font-family:微软雅黑, sans-serif;">光</span></b><b><span style="color:#FFC000;font-family:微软雅黑, sans-serif;">彩</span></b><b><span style="color:#00B050;font-family:微软雅黑, sans-serif;">四</span></b><b><span style="color:#00B0F0;font-family:微软雅黑, sans-serif;">溢</span></b><b><span style="font-family:微软雅黑, sans-serif;" lang="EN-US">&nbsp;&nbsp; </span></b><b><span style="color:#0070C0;font-family:微软雅黑, sans-serif;">历</span></b><b><span style="color:#002060;font-family:微软雅黑, sans-serif;">久</span></b><b><span style="color:#7030A0;font-family:微软雅黑, sans-serif;">弥</span></b><b><span style="color:#C00000;font-family:微软雅黑, sans-serif;">新</span></b></span> \r\n</p>\r\n<p align="center">\r\n	<img style="width:453px;height:320px;" alt="" src="/data/attachment/2012-12/20121203115453p.jpg" width="569" height="340" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p class="MsoNormal" align="center">\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<br />'),
(6, '阿拉丁荣耀', '阿拉丁荣耀'),
(7, '联系我们', '<div class="liebiao_newstext">\r\n	<p>\r\n		<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203161834y.jpg" /> \r\n	</p>\r\n</div>\r\n<p>\r\n	<br />\r\n</p>');

-- --------------------------------------------------------

--
-- 表的结构 `media_ad`
--

CREATE TABLE IF NOT EXISTS `media_ad` (
  `ad_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_logo` varchar(100) NOT NULL,
  `ad_url` varchar(100) NOT NULL,
  `ad_order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `media_ad`
--

INSERT INTO `media_ad` (`ad_id`, `ad_logo`, `ad_url`, `ad_order`) VALUES
(1, '/data/attachment/2012-08/20120811120022r.jpg', 'http://baidu.com21', 1),
(3, '', '2222222222222', 2);

-- --------------------------------------------------------

--
-- 表的结构 `media_admin`
--

CREATE TABLE IF NOT EXISTS `media_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理id',
  `groupid` mediumint(8) unsigned DEFAULT NULL COMMENT '组ID',
  `super` smallint(2) unsigned NOT NULL COMMENT '1为超管0为普通',
  `admin_name` varchar(20) NOT NULL COMMENT '管理名',
  `admin_pw` varchar(32) NOT NULL COMMENT '管理密码',
  `admin_atime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理注册时间',
  `admin_ltime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理上次登录时间',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `media_admin`
--

INSERT INTO `media_admin` (`admin_id`, `groupid`, `super`, `admin_name`, `admin_pw`, `admin_atime`, `admin_ltime`) VALUES
(1, 0, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1344267826, 1354498163);

-- --------------------------------------------------------

--
-- 表的结构 `media_article`
--

CREATE TABLE IF NOT EXISTS `media_article` (
  `article_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `article_name` varchar(50) NOT NULL COMMENT '文章名称',
  `article_text` text NOT NULL COMMENT '文章内容',
  `article_logo` varchar(200) NOT NULL COMMENT '文章缩略图',
  `article_atime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `article_clicknum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `category_id` smallint(5) unsigned NOT NULL COMMENT '分类id',
  `article_tuijian` smallint(2) NOT NULL COMMENT '推荐',
  `article_cuxiao` smallint(2) NOT NULL COMMENT '置顶',
  PRIMARY KEY (`article_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 导出表中的数据 `media_article`
--

INSERT INTO `media_article` (`article_id`, `article_name`, `article_text`, `article_logo`, `article_atime`, `article_clicknum`, `category_id`, `article_tuijian`, `article_cuxiao`) VALUES
(1, '阿拉丁传媒及阿拉丁资产受邀代表参加2012世界城市小姐新闻发布会', '<p>\r\n	2012年7月5日，2012世界城市小姐(Miss World City)中国大赛民众眼科杯新闻发布会在北京悠唐皇冠假日酒店盛大起航，明星萧蔷、董路等明星为活动助阵，四国大使出席活动，阿拉丁文化传媒有限公司副总经理付薇及阿拉丁财富资产管理有限公司公共事业部总经理贡静漪亦受邀参加此次发布会。\r\n</p>\r\n<p>\r\n	<br />\r\n发布会中，各国外交官及中外选手代表纷纷致辞，高度赞扬大赛“寻找美丽正能量，让美更有意义，让爱更有价值”的核心内涵，并对赛事表示热切的期盼。世界城市小姐大赛组委会执行主席叶姿风女士在发布会上致辞：“二十一世纪的世界，不仅是经济的逐利，更是文化软实力的比拼。在这个伟大的时代，中国需要创造自己独具时代特色的世界美丽文化品牌赛事，向世界展示中国的魅力。世界城市小姐大赛是新时代的创新，通过这个赛事引领美的正能量，展示城市文化，实现城市名片，让美动天下，爱动天下！”\r\n</p>\r\n<p>\r\n	<br />\r\n2012世界城市小姐中国大赛旨在寻找美丽文化正能量，展示美丽价值新内涵，展示新城市、新女性的魅力形象，传播城市文明、魅力、文化、特色，促进世界城市文明交流和对话，打造美丽文化、时尚经济产业链，塑造城市美丽名片，推进城市化进程。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '/data/attachment/2012-12/20121203132729y.jpg', 1354464000, 13, 2, 1, 0),
(2, '肖秘书长莅临', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203132538c.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	2012年11月22日，中华社会文化发展基金会肖清波副秘书长来访我司，肖秘书长对我司文化传媒方面工作给予了较高的评价。阿拉丁文化传媒副总经理付薇与肖秘书长就双方未来合作事宜进行了深入地会谈。<br />\r\n付薇与肖秘书长针对目前文化产业基金的现状进行了讨论，对文化产业发展工作交换了意见，并探讨了社会公益基金以及文化产业投资方向未来合作的可能性。会后双方在我司会议室合影留念。\r\n</p>\r\n<p>\r\n	中华社会文化发展基金会是中华人民共和国文化部主管的全国性公募型基金会，经中国人民银行1992年批准，创始人为著名戏剧大师曹禺先生，名誉会长为著名教育家许嘉璐先生。多年来致力于海内外文化服务业的交流、合作、咨询、服务；弘扬、保护优秀民族文化的活动; 文化扶贫; 社会文化领域的理论研究、教育培训; 社会文化领域的科研活动及科学技术的引进应用和推广; 有关社会文化典籍的编辑出版; 文化演出、比赛、艺术展览、开展全民文化艺术素质普及与提高教育;文化艺术人才的职业培训、深造等工作。\r\n</p>\r\n<p align="left">\r\n	&nbsp;\r\n</p>', '', 1354512358, 2, 2, 0, 0),
(3, '“传媒行业领导力论坛”将于7月移师上海和北京', '<p>\r\n	由触动传媒主办的首届"传媒行业领导力论坛"昨日在广州召开。此次巡回论坛将覆盖北上广三地，以"融合趋势下的互动营销"为主题。广州首站的进行，为7月5日的上海站和7月20日的北京站打下基础。\r\n</p>\r\n<p align="center">\r\n	&nbsp;<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203132830p.jpg" />\r\n</p>\r\n<p>\r\n	触动传媒创始人兼执行主席冯晖中表示："触动传媒能有现在的成就，离不开业内的支持和厚爱。我们非常希望在这样一个不断变化的大环境下，能够通过举办论坛，彰显行业在互动领域的成就来回馈给整个行业。在互动广告技术领域，中国具备领先的新策略和新思路，并能够将其运用在市场营销中。另外，能够将中国创造在中国发扬光大，实在比仿效国外技术更令人激动。"\r\n</p>\r\n<p>\r\n	广州站活动，主办方邀请到由光华活彩传媒集团副总裁杨宇时、腾讯大粤网常务副总裁易海燕 、广东联通产品运营部副总经理聂波、新生代市场监测机构副总经理肖明超在内的广告传媒业演讲者，从各自细分领域出发，阐述以精准化见长的互动营销，在当今的融合趋势之下，借助各媒体之所长，如何进化成终极营销利器。触动传媒全国销售总经理丁书慧亦特别分享了一些案例，可以看到有越来越多的品牌利用触动Q屏与消费者互动，进行有效的整合营销战役。7月5日上海站和7月20日北京站，将会有更多演讲者的分享。\r\n</p>\r\n<p>\r\n	随着科技发展，广告的表现形式在不断演变，喜新厌旧的消费者们也对各种新型广告喜闻乐见，再也没有哪条广告可以靠着单一媒体独步天下，有机地融合各种媒体，取长补短、博采众长，才是成功广告的不二选择。冯晖中对此表示极力赞同："触动传媒近几年来，不仅针对互动荧屏研发新功能，而且会将这些功能与手机结合，包括二维码的应用、电子优惠券的手机下载等。同时，我们也刚开始涉足电商和CRM营销服务。每一个媒体必须不断革新，才能不被行业所抛弃。"\r\n</p>\r\n<p>\r\n	触动传媒市场及客户服务副总裁李令进一步阐述了活动的初衷："作为互动营销领域的参与者，显然非常希望这个行业能不断发展，但我们也了解到这是一个展现许多其他互动营销人的新发展和新思路的机会。同样，去年的"触动营销奖"也是为了鼓励那些在广告点击率、广告投放回报率（ROI）和品牌销售上都取得优异成绩的品牌活动。这两个活动的初衷都是为了与更多的业内同仁分享新趋势、新技术，引发对广告与媒体行业的全新思考。"\r\n</p>\r\n<p>\r\n	来源：触动传媒\r\n</p>', '', 1354512512, 0, 3, 0, 0),
(4, '艾菲“3+1”论坛：探讨创意经济与品牌实效价值 ', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203132917s.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	由中国广告协会主办，中国艾菲奖推广委员会承办的艾菲"3+1"实效论坛近日在北京万达索菲特大酒店举行。来自广告界、创意界、营销界、财经界的专家学者，共同探讨创意经济与品牌实效价值。\r\n</p>\r\n<p>\r\n	论坛的第一环节是由艾菲CHINA与AC尼尔森联合发布《品牌实效趋势报告》、与央视索福瑞CTR联合发布《媒体实效趋势报告》、与北京大学新媒体研究中心联合发布《数字营销趋势报告》，报告以2011年艾菲参赛案例为基本素材，研究分析了中国营销活动的未来发展趋势。\r\n</p>\r\n<p>\r\n	论坛的第二环节是《创意经济》杂志的首刊发行仪式暨鸡尾酒会。该杂志是在《财经界》领导的支持和督导下，由国家发展和改革委员会主管、国家信息中心主办、艾菲CHINA编辑的，跨财经界、营销界、广告界、时尚界等的多领域的经济类大型期刊。杂志依托国际艾菲奖的全球专家资源和案例库资源，以"创意--以实效论英雄"的传播理念为基础，致力打造"孵化中国创意经济"的国际化、专业化传播平台。\r\n</p>\r\n<p>\r\n	论坛的第三个环节是"Effie Effectiveness Index"的公布与颁奖，"Effie Effectiveness Index"是Effie China与WARC合作制定颁布的评估标准。中国艾菲实效排名根据2011年参赛公司、媒体的获奖表现而设有广告主实效排名（Advertiser） 、品牌实效排名( Brand）、广告代理集团实效排名（Agency Network）、独立广告代理公司实效排名（Agency） 、广告媒体实效排名( Media）。\r\n</p>\r\n<p>\r\n	论坛是艾菲CHINA以研究和探讨中国营销传播领域的发展趋势为基础，联合行业资源，研究推广实效营销的传播理念，推动中国营销传播业与世界的交流。\r\n</p>\r\n<p>\r\n	来源：艾菲CHINA\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="left">\r\n	&nbsp;\r\n</p>', '', 1354512563, 1, 3, 0, 0),
(5, '缔元信主办的汽车营销趋势论坛在北京落幕', '<p>\r\n	由缔元信主办的"选择下的汽车营销趋势论坛暨汽车行业网络营销数据白皮书（第一季）发布会" 于6月27日在北京落下帷幕，缔元信CEO秦雯女士在论坛上提出了网络传播量及网络声量相结合的传播效率评价体系，并表示白皮书以网民关注度为重要衡量指标，白皮书是缔元信长期研究网民行为特征对网络营销应用价值的成果。本次论坛的演讲嘉宾汇集了包括行业专家、门户网站汽车频道、汽车行业垂直网站、SNS社会化媒体等汽车行业网络营销产业链上的代表，另外包括奔驰中国、宝马中国、大众中国、英菲尼迪等在内的众多车企代表、广告公司代表、营销机构代表和媒体代表，围绕缔元信发布的《汽车网络营销数据白皮书（第一季）》，就汽车行业数字营销话题展开营销思路探讨与观点分享。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133003e.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	缔元信CEO秦雯女士致辞\r\n</p>\r\n据悉，"选择下的汽车营销趋势论坛暨汽车行业网络营销数据白皮书（第一季）发布会"上海站（报名参与）将于2012年7月12日在上海光大国际会展中心举办，届时易车网、车讯网、映盛中国、时代嘉道、飞拓无限等网络营销产业链上的代表将齐集上海，通过自身的营销方法、案例分享，阐述在各自领域对数字营销的观点，就新形式下的汽车产业的数字营销与网络推广和大数据如何构建营销洞察力的话题进行探讨。希望这种尝试能够帮助汽车行业客户更为科学地认识市场竞争环境、优化营销策略，提升品牌竞争力。\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133045s.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	会议现场\r\n</p>\r\n<p>\r\n	缔元信自2008年起即对互联网汽车舆情进行网络数据监测，为新浪、搜狐、网易、凤凰网等门户网站、汽车垂直网站提供全流量数据统计、分析和咨询服务。自2008年北京车展以来，缔元信连续五年在国际车展期间进行数据监测研究工作。2012北京车展期间，缔元信通过其数据管理平台DDMP，采用嵌码、抓站、微博API接品数据调取等多种地技术手段，7*24小时持续采集主流媒体网站上的网民访问的内容信息及相关微博更新情况，对所有数据进行分类处理，每天平均处理超过30亿条数据信息。透过对数据的解读，既能看出汽车网民的真实意图，也是中国汽车市场在网络上的真实映现。本次论坛上海站活动结束后，将于2012年7月19日启动广州站的活动。\r\n</p>\r\n<p>\r\n	来源：缔元信\r\n</p>', '', 1354512668, 0, 3, 0, 0),
(6, '营销首脑风云际会 论道中国经济大势', '<p>\r\n	2012年，世界经济出现震荡，中国实体经济也面临严峻形势。非常时期，中国经济如何走向？中国企业该何去何从？7月8日，国内企业界营销人士汇聚上海杨浦区五维创意园区内的沈馆，进行了一场关于中国企业如何发展的高端对话。\r\n</p>\r\n<p>\r\n	今年的经济形势，比2008年的世界金融危机更为严峻，已经成为企业界的共识。世界经济大格局风云聚变，国内经济环境也是一路走低，实体经济疲软，市场萎缩。中国经济形式究竟如何走向，中国企业该如何应对严峻的局面？已经成为全国企业界共同关心的话题。营销首脑平台召集国内顶尖营销专家，就中国企业当前形势和出路，展开讨论和头脑风暴。\r\n</p>\r\n<p>\r\n	本次高峰论坛，邀请到国内营销界专家袁晓民（唯众传媒集团副总裁）、朱玉童（采纳营销创始人、董事长）、翁向东（杰信咨询创始人、董事长）、沈其斌（证大艺术CEO 、沈馆总裁）、何慕（联纵智达创始人、董事长）、程伟雄（美邦集团副总裁）、姚壮民（保瑞药业董事长）、郑晓亮（美国运通CMO）、徐军伟（飞科集团CBO）等，展开头脑风暴，为中国企业寻求突破困境的路径。\r\n</p>\r\n<p>\r\n	营销首脑是一个汇聚8000万营销人，致力于服务中国营销人，加强彼此之间连接与互动的平台。"营销万里行"，是营销首脑线下的高端互动论坛品牌，本活动的宗旨，是汇聚中国营销首脑和全行业营销专家，召集企业市场精英，就中国营销界共同关心的话题，面临的处境，展开精英之间的对话和讨论，为中国营销界贡献策略、思想和方法。营销万里行除履行行业责任之外，还立志为营销精英们创造一个轻松愉快，良性互动的沟通交流机会，达成行业之间更充分的融合。\r\n</p>\r\n<p>\r\n	本次论坛作为营销万里行的首次活动，吸引了营销界众多专家和知名人士的关注和支持，大家积极建言献策，充分体现了营销首脑们对于这个营销人自己的组织的热情和关注。营销首脑机构负责人郭鹏先生表示："这将是一个所有营销人共同建设，共同经营的平台，希望通过这个平台，为中国的营销首脑们服务的同时，大家更好的利用平台充分互动，充分碰撞，诞生更多有价值，有实操，对企业有指导意义的营销思想、观点和方法，更好的服务于中国企业。"\r\n</p>\r\n<p>\r\n	来源：营销首脑\r\n</p>', '', 1354512716, 0, 3, 0, 0),
(7, '第四届亚洲城市论坛即将在武汉举行', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133224f.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	第三届亚洲城市论坛。资料图片\r\n</p>\r\n<p>\r\n	2012年8月16日，第四届亚洲城市论坛·武汉论坛即将在武汉隆重拉开序幕。“亚洲城市论坛”是全球第一个以城市形象与城市营销为主题的高端国际论坛。是以加强亚洲城市之间的合作与交流为己任，聚合全球范围内相关政府部门领导、城市形象、城市营销专家以及中外媒体记者等各方面力量，探讨城市形象建设与城市营销方面的热点话题，借鉴世界发达城市的推广经验，为中国及亚洲其他国家的城市形象建设和品牌营销提供全面、系统的智力支持，助力打造世界级的城市品牌。\r\n</p>\r\n<p>\r\n	在全球化进程加剧的当下，城市品牌已经成为城市最大的无形资产，良好的品牌效应不仅可以提升城市形象，还能增加城市的竞争软实力，置换出更大的政治、经济、文化和环境效益。从国内外的实践来看，城市品牌营销和传播已日益成为城市提升竞争力的重要战略。作为辐射全国的区域中心城市——武汉提出了建设国家中心城市的宏伟目标，加快发展旅游业，重点打造武汉市旅游度假休闲城市形象，武汉华侨城响应城市宏观的发展战略，在武汉建造起由华中首个欢乐谷领衔的一系列主题公园，改变了武汉观光旅游的旧局面，打造出武汉东湖度假区的旅游新名片。第四届亚洲城市论坛牵手武汉，聚集了顶级国际学术力量从国际领先城市推广经典案例传播先进经验；研究品牌塑造与城市形象建设之间的关系；讨论旅游度假区概念、模式和发展趋势；从中国路径探讨国内旅游度假区经营模式。论坛从以上几个方面展开深入讨论，让“城市品牌塑造与传播——武汉城市品牌再出发”的主题得以深入阐释。\r\n</p>\r\n<p>\r\n	本届论坛将邀请世界顶级旅游营销专家、国际旅游学会主席阿拉斯泰尔?莫瑞森；世界旅游组织亚太区首席代表徐京；韩国国会议员、亚洲城市联盟理事长尹永硕；世界知名城市营销和城市品牌专家西蒙?安浩；日本北海道札幌市北京事务所所长、日本札幌市产业振兴部部长角田贵美等20多位来自全球的城市营销专家、城市营销推广官员以及十几位权威专家学者。到场嘉宾将从不同的角度探讨与研究旅游度假品牌塑造对城市形象建设的重大影响力，用全球的眼光看待武汉旅游城市的发展，为武汉胜利实现十二五规划目标、提升城市品牌形象贡献专家智慧和专业力量。除论坛的嘉宾邀请外，本届论坛将打造城市品牌的传播高地，来自100余家国内外权威主流媒体将对论坛的盛大召开进行全方位、多角度的报道，吸引全球关注目光。\r\n</p>\r\n<p>\r\n	亚洲城市论坛已经成为一个以城市营销、传播为核心的综合性论坛品牌，此届论坛是产、官、学、研的一次智慧交流盛宴，也是多元化思想碰撞与交锋的学术交流平台。网友们可以通过昵称为“亚洲城市论坛”的新浪官方微博与论坛嘉宾进行全程互动，通过与政府官员及专家学者的无时差交流，分享自己对城市品牌的独特看法和建议。有意参会者可通过此链接(<a href="http://www.cicbrb.com/html/2012/0706/416.html">http://www.cicbrb.com/html/2012/0706/416.html</a>)下载会议详细资料以及报名方式。\r\n</p>\r\n<p align="left">\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>', '', 1354512770, 0, 3, 0, 0),
(8, '中储粮金鼎悬赏五万元征集电视广告脚本', '<p align="center">\r\n	<span style="color:#E53333;">新华社-瞭望东方周刊</span>\r\n</p>\r\n<p>\r\n	“投案自SHOW 顶鼎大名”— 7月10日，我国食用油市场新兵中储粮金鼎在京宣布启动电视广告脚本创意征集大赛，大奖得主将获得价值5万元奖励。\r\n</p>\r\n<p>\r\n	大赛由中储粮油脂有限公司主办，瞭望东方周刊、广告门协办。在为期1个月的比赛期间，广告设计专业人士、学生，以及全社会对广告创意有兴趣的单位和个人，均可为金鼎量身定做出色的电视广告脚本。\r\n</p>\r\n<p>\r\n	大赛将邀请广告业界资深评审：灵狮中国区合伙人兼首席创意官吴捷，DMG娱乐传媒集团创意总监徐卫兵，北京杰尔思行(CHEIL)执行创意总监龙杰琦组成专家评选委员会，最终于8月10日在北京公布获奖结果。比赛设一等奖1名，获奖者将获得价值50000元奖品；二等奖2名，获奖者将获得价值5000元奖品；三等奖3名，获奖者将获得价值1000元奖品。\r\n</p>\r\n<p>\r\n	大赛将围绕中储粮金鼎小包装食用油产品进行，主办方希望通过广告创意征集的方式，使中储粮金鼎在获得创意新颖的电视广告创意脚本的同时，加深与消费者、业界专业人士的交流与沟通，塑造值得信赖的品牌形象。\r\n</p>\r\n<p>\r\n	同日，大赛专题网站(<a href="http://lylz.lwdf.cn">http://lylz.lwdf.cn</a>)也正式开通。所有参赛组织和个人均可登录了解活动背景和比赛细则。\r\n</p>', '', 1354512809, 0, 3, 0, 0),
(9, '微电影到底是什么? 网络走红源于“尝鲜”心态', '<p>\r\n	不知何时起始，一个新的影视品种——微电影近年来蹿红了整个网络，大约只有短短一两年时间，微电影便在网络市场潮水般流行起来，大有创造一个微电影时代的势头。那么，到底什么是微电影？它是如何兴起的？它将走向何处？有关微电影的一系列问题，引起了笔者的关注。\r\n</p>\r\n<p>\r\n	　&nbsp; 微电影是什么<br />\r\n　 微电影到底是什么？微电影也就是微型电影，又称“微影”，它是指专门在各种新媒体平台上播放的具有完整策划、完整情节、完整制作的，适合在移动状态和短暂休闲时观看的视频短片。微电影最显著的特征是“微”，即短时，观看一场传统电影，一般要花费一个半小时到两个小时，而欣赏一部微电影，只要几分钟就够了。较为典型的是吴彦祖主演的《一触即发》，全片场面宏大，制作精良，片长却只有一分半钟。微电影因为片长短，所以投资也小，一般在几千元至几万元，制作周期也短，一般在一周左右。微电影的性质决定它还具有草根性、广谱性、参与性和互动性的低门槛特征。<br />\r\n　 　 微电影的内容涉及也很丰富、很广泛：商业广告、时尚潮流、伦理道德、爱情故事、公益事业、励志向上、惊悚悬疑、幽默搞怪，几乎是无所不包。据笔者的观察，微电影实际上已经不是真正意义上的电影了，这不是因为它的长与短。电影是用胶片摄影机或高清的数码摄影机拍摄的，并在院线使用放映机进行放映或在电影频道进行播放，期间还要通过电影管理部门的审查，而微电影的摄制手段则是多种多样的，并多在网络播放，电影院里难得看到它的身影，也不需要电影管理部门的审查，比真正的电影要灵活得多。确切一点讲，微电影不是电影，而是一种网络视频短剧。但不管是什么，它受到越来越多人的喜爱，越来越红火。\r\n</p>\r\n<p>\r\n	　 微电影的兴起\r\n</p>\r\n<p>\r\n	微电影之所以能在网络上火起来，笔者认为缘于这样几个方面的因素：<br />\r\n　 　 一、它的短小精悍，符合时代的节拍。随着社会的发展，竞争的激烈，人们的生活节奏和工作节奏越来越快，长时间观看大部头影视作品的闲暇越来越少。在几分钟时间就能够观赏一部小电影，调节一下神经，何乐而不为？<br />\r\n　 　 二、它的便捷性受到人们的青睐。若想吃上一顿“电影大餐”，看一部大片，必须去电影院花费几十元甚至上百元排队买票，才能如愿以偿，而观看微电影，只需坐在电脑桌前，或者打开手机，就能吃一份“电影快餐”，而且几乎不用产生什么费用。\r\n</p>\r\n<p>\r\n	三、它的大众性决定了它的低门槛。微电影打破了传统电影高高在上的主流代言的姿态与形象，激活了公众的参与性与主动性的广阔空间，使之成为大众艺术，从而激发了人们的热情。\r\n</p>\r\n<p>\r\n	　 　 四、它的快捷性为它助长了灵活的触角。它以它的短平快及时去触摸生活，批判现实，针砭时弊，叩问人性，作用心灵，特别是它常常去触摸被主流大剧所遗忘的小人物、小命运、小细节，因而引起大众的共鸣。\r\n</p>\r\n<p>\r\n	五、它的许多平民化的内容桥段使得它“有意思”、吸引眼球。对大家低着头，笑脸相迎的微电影很容易走进普通观众的心目之中。\r\n</p>\r\n<p>\r\n	　&nbsp; 微电影的发展趋势\r\n</p>\r\n<p>\r\n	一是品牌化，就是微电影用其独特的制作手段和艺术风格来达到吸引受众、感染受众，与受众共同分享的魅力。有了网络及其它新媒体的支撑，未来的微电影必将要“百花齐放”，因而，微电影的品牌化是必须的，否则，它便无法长期在影视市场立足。其实，从吴彦祖的《一触即发》，到姜文的《看球》，徐铮的《一部佳作的诞生》，黄晓明《早十年的童话》，王珞丹的《老人愿》等微电影影片，我们看到了越来越多腕级演员的参与，感觉到了这种趋势离我们越来越近。\r\n</p>\r\n<p>\r\n	二是商业化。微电影从诞生的那天起就注定了它的商业气质。具典型意义的第一部微电影作品《一触即发》，不管其场面何等宏大，剧情何等惊险，制作何等精良，但实际上它就是某汽车品牌的广告片。尽管微电影具有明显的公益化成分，但仍然扭转不了它的商业趋势。故而，商业定制性的微电影也会成为未来微电影不可忽视的一大类型。\r\n</p>\r\n<p>\r\n	三是公共化。微电影是公众艺术，因此，随着它的发展，微电影会触及和占用更多的公共传播空间。\r\n</p>\r\n<p>\r\n	　&nbsp; 微电影需克服的问题\r\n</p>\r\n<p>\r\n	　 　 微电影在网络走红，一定程度上是出于人们对新事物的“尝鲜”心态，我们不能就此宣布已经进入“微电影时代”。微电影恐怕一时还难以取代电影或电视剧，如同当年电视取代不了电影和报纸一样。就微电影本身而言，它存在的问题也是显而易见的。<br />\r\n　 　 作品鱼龙混杂，制作水平参次不齐。像《一触即发》《动机》《看球》《调音师》这样的作品实在是少之又少，可谓凤毛麟角。许多片子画面平淡，制作粗糙，有些影片如同DV机拍摄的一般，离真正电影作品的标准差距较大，艺术和技术质量都有待提高。<br />\r\n　 　 界定不清，制作不够规范。比如《隐形哨兵》《猫咪拯救大兵》都在一分半钟左右，姜文的《看球》也不过5分钟，而《玩大的》《老男孩》则超过了12分钟，《青春期》甚至超过了50分钟，7集《千山暮雪》竟然达到100多分钟。这些影片还算能是微电影吗？\r\n</p>\r\n<p>\r\n	缺乏相应的管理。无论是电影还是电视剧，都有专门的管理机构进行专业管理，而微电影管理却处于真空状态。没有专门、专业的管理，长期自由的生长，出现各种问题也就不足为奇了。<br />\r\n　 　 有明显的局限性。微电影多为商业定制，久而久之，一旦控制不好，微电影有可能成为新的品种的广告代名词——只不过这种广告是有故事情节的。另外，由于都市是消费时尚的策源地，因而微电影的消费群体无疑是城市市民，这其中很难看到八亿农民的影子，不能不说这是个严重的缺憾。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '', 1354512910, 0, 3, 0, 0),
(10, '社交网络前景未见雏形 未来出路何方', '<p>\r\n	随着facebook的成功上市，社交媒体成为了近来热议的话题。根据调查，在2012年已经过去的6个月内，有91%的中国网友访问了社交媒体网站，而在美国，只有87%的网友访问了社交网站。在中国，最大的社交网络QQ空间的活跃用户已达5.77亿，而类Twitter的新浪微博也累积了3亿注册用户。\r\n</p>\r\n<p>\r\n	尽管国内社交网络的用户数量和活跃度都领先于国际，但大多数还停留在初期发展阶段。随着国内SNS的发展，隐私保护、盈利能力和移动能力将成为未来国内SNS发展和竞争的主线。\r\n</p>\r\n<p>\r\n	隐私问题的提出与保护\r\n</p>\r\n<p>\r\n	最近正在热映的电影《搜索》，讲述的就是一件关于网络上著名的“人肉搜索”事件。在这个个人生活开放化、网络化的时代，隐私成为了人们生活中重要的话题。对于社交网站来说，更是一个很重要的议题。社交，顾名思义，用户需要在网站内交流、互动，然而在互动的过程中，对于一个素未谋面的陌生人，我们的隐私似乎就变得不再那么坚不可摧。\r\n</p>\r\n<p>\r\n	由社交网站引起的危机事件最近已经比比皆是，有一则事件是由于家长在微博上每天晒出孩子的成长日记，照片等等，招来人贩子的注意。在警方破获案件后，人贩子坦然交代，由于每天观看家长的微博，所以对孩子的行踪了如执掌。\r\n</p>\r\n<p>\r\n	这件事给社交网站和广大互联网用户敲响了警钟。实名制是国家对于社交网络的政策倾向，然而在实名制下，用户隐私保护更加棘手。如何更好地将隐私保护和实名制相结合，既保护好用户的隐私安全，也符合国家对于社交网站的监管措施，对于每一个社交网站都是考验。\r\n</p>\r\n<p>\r\n	另一方面，用户自身也需要提高防范意识，在个人主页上设置信息的保护功能，不要全部开放个人信息，例如QQ空间就提供了针对访客的分级权限设置，并提供了“回答问题的人可见”密码保护措施，这从一定程度上杜绝了个人隐私被肆意窥探的危险。\r\n</p>\r\n<p>\r\n	盈利模式的探索和完善\r\n</p>\r\n<p>\r\n	社交网络的商业价值体现在“社交关系”上，目前社交网络已经成为网络广告的后起之秀。社交媒体的盈利模式不仅包括社交广告，还有应用分成、用户付费等。\r\n</p>\r\n<p>\r\n	社交广告方面，根据国外社交网络的发展模式，各大品牌通过社交网络建立自己的店铺，用户将直接通过社交网站购物，而社交网站获得消费分成。应用分成亦采用类似的模式。\r\n</p>\r\n<p>\r\n	用户付费部分，国内的QQ空间发展较早，黄钻模式已经比较成熟，会员的权益也相对比较完善和清晰，例如打造个性化的装扮、扩大相册容量、获得游戏礼包等，贴合QQ空间的品牌战略，让用户感受到“家”的情怀。新浪微博前不久也推出了会员制，但是会员的身份似乎并没有为用户带来多少实质性的特权，因此对于大多数用户来说缺乏吸引力。\r\n</p>\r\n<p>\r\n	社交未来在于移动\r\n</p>\r\n<p>\r\n	社交网络天生就具有移动互联网的基因。社交网站的本质是人与人的交往，人与人的交往绝不应只限于PC上，基于移动互联网的社交服务将成为社交网络下一步发展和竞争的重点。两大微博、QQ空间、人人网等也早就布局各大移动终端，通过移动终端使用SNS将成为最主要的方式。\r\n</p>', '', 1354512941, 0, 3, 0, 0),
(11, '视频网站七年之痒 昔日贵族今何在？ ', '<p>\r\n	今天，中国的网络视频行业合并、联盟、互相讨伐，商业战争强度丝毫不亚于古代帝国征战。\r\n</p>\r\n<p>\r\n	铁蹄踏过七年，昔日光鲜亮丽的贵族们，有的依然踌躇满志，有的却已褪去“光辉的战袍”。\r\n</p>\r\n<p>\r\n	视频网站用户数集体爆发\r\n</p>\r\n<p>\r\n	互联网泡沫（1995年至2001年间的投机泡沫）过去后4年，中国互联网的商机已经开始显现，资本市场也开始活跃，当时的创业公司比现在更容易拿到风投的钱，而创业者们，也在寻求资金实现自己的创业梦想。2004年，乐视网成立。2005年，土豆、优酷、56网、悠视网、风行、PPS、PPTV成立，2006年酷6、六间房成立。\r\n</p>\r\n<p>\r\n	扎堆似的创业使2005年成为中国互联网网络视频行业的创业元年。而就在那一年的情人节，如今世界上最大的视频网站Youtube在大洋彼岸的加利福尼亚被创建。同年4月，土豆成立，之后优酷、酷6、56网、六间房等一批模仿Youtube的UGC网站接连上线。\r\n</p>\r\n<p>\r\n	2007年，国内互联网网民数量急剧上升，更多的用户开始接受互联网视频。从那时开始，国内影视内容和UGC短片成为网络视频的主要内容，用户开始习惯在网络上收看免费影片和短视频。视频网站开始进入用户数集体爆发阶段，随着用户数量的不断上升，品牌效应和企业模式，也在那个阶段悄然成型。\r\n</p>\r\n<p>\r\n	一个曾经的创业贵族消失了\r\n</p>\r\n<p>\r\n	2008年，金融危机。资本大门紧闭，迫使视频网站开始缩减资金、裁员，甚至转变模式。彼时因参与长视频版权购买而出现资金问题的六间房，被迫转型做视频社区。其他如优酷、土豆，因早期建立了品牌效应累积用户，金融危机过后逐渐发展成为综合视频网站，并且相继在美国上市；而酷6、56网在UGC领域行走艰难，不得不转型学习六间房做视频社区，前者被盛大收购后借壳在美国上市，后者被社交网站人人网收购；相比之下，乐视网、风行、PPTV、PPS等依然在坚持自己创业之初的方向。\r\n</p>\r\n<p>\r\n	此外，网络视频行业的用户习惯及市场规模不断成熟，国内互联网巨头禁不住诱惑开始陆续进入。典型代表包括百度旗下爱奇艺、搜狐视频、腾讯视频等，前两位主攻长视频，而腾讯视频则定位综合视频。\r\n</p>\r\n<p>\r\n	时间行至2012年，版权官司、抢购版权比比皆是，但最引人注目的却是“优土合并”。今年3月，优土宣布双方以100%换股的方式合并，合并事宜预计于今年第三季度完成。合并后，土豆将退市，但品牌将会保留。\r\n</p>\r\n<p>\r\n	土豆早于优酷成立，曾一度是国内视频行业的领军人物，但王微最终没能熬过七年之痒。土豆因王微个人原因错过最佳上市时机，资金链断裂。后期艰难上市，圈到的钱勉强维持，今年3月在资本的推动下选择与优酷合并，一个曾经的创业贵族就这样消失了。\r\n</p>\r\n<p>\r\n	优土合并裁员难以避免\r\n</p>\r\n<p>\r\n	七年过去了，风投不再热情，能继续融到资的网站屈指可数，“富二代”大多也不能再从“亲爹”那里拿到注资，各家都在经受如何盈利的苦恼。烧钱、版权、商业模式等一系列问题成为网络视频的标签。\r\n</p>\r\n<p>\r\n	踌躇满志如优酷，吞并土豆后领跑中国网络视频市场。优酷如今拥有两个品牌，优酷和土豆。合并后，两个品牌虽然是独立运营，可裁员似乎不可避免，即使王微和古永锵在合并的时候承诺不会裁员，但前不久土豆COO王祥芸的离职，却也引发了业内对优土裁员的猜测。\r\n</p>\r\n<p>\r\n	曾有业内人士预测，优土合并后虽然品牌独立运营，但两个网站整体运营古永锵势必要安排自己身边的人，而最基本的销售也会大批量换掉，合并之后广告销售将不再是两个团队，而是一个，所以裁员在所难免。\r\n</p>\r\n<p>\r\n	同时，优酷还要面临来自爱奇艺、搜狐、乐视、腾讯等视频网站带来的竞争压力。\r\n</p>\r\n<p>\r\n	联盟对抗优土酷6转型“钱”景不明\r\n</p>\r\n<p>\r\n	优土合并后，爱奇艺、腾讯视频、搜狐视频随即结成版权联盟，业内将这一动作看成是3家对优土结合的防御手段。这些典型的“富二代”，相对于2005年那一批网站，应属于后期才进入视频领域的新玩家。有资金支持，有流量入口，在疯抢版权的2011年，他们的身影活跃。\r\n</p>\r\n<p>\r\n	新玩家的进入，使得这个本来就小的圈子已经容不下太多的人，于是2011年9月，有两家网站几乎同时宣布转型，一家是被盛大收购的酷6，另外一家是UGC网站56网。酷6转型被认为是无奈之举，业内传闻当时盛大已经无心再对酷6注资，后者极其糟糕的财报和运行状态，让盛大无法面对。\r\n</p>\r\n<p>\r\n	56网转型是因为人人将其全资收购，这也是陈一舟视频社交战略里的一个重要步骤。陈一舟用8000万美元的代价将视频揉进社交网站，其结果是56网的网站排名和流量及用户覆盖数，均要高于同期转型的酷6。\r\n</p>\r\n<p>\r\n	PPTV依然强势悠视网令人堪忧\r\n</p>\r\n<p>\r\n	在线视频网站的战火似乎并未波及到客户端领域。在优土合并后业内都在猜测客户端领域是否会有大的抱团动作共同抵御外敌，但至今这个领域依旧风平浪静。根据艾瑞最新一周的统计数据，网络电视领域PPTV以1910的周覆盖用户数位列第一，二、三位分别是PPS和风行，而2005年成立的悠视网，因仅有80的周覆盖数排在倒数第二。\r\n</p>\r\n<p>\r\n	值得注意的是，2011年初，PPTV拿到软银2.5亿美元巨额融资，这也是近年来网络视频行业为数不多的一次融资成功案例。今年3月，百视通注资3000万美元购买风行股权，风行由此获得了8500万美元的估值。\r\n</p>\r\n<p>\r\n	而另两家客户端视频网站，暴风影音和迅雷看看整体表现似乎都不甚理想。暴风影音早期以影音工具起家，后期发布暴风左眼功能却被质疑，装机量逐渐被迅雷看看超越。业内分析称，在线视频的兴起使影音工具市场被蚕食，而其在线影视内容也十分匮乏，是导致其走下坡路的主要原因。\r\n</p>\r\n<p>\r\n	迅雷因版权问题严重赴美上市夭折，虽然已经将狗狗搜索剥离，但版权问题依旧存在。后期随着迅雷看看装机量的提升，迅雷在版权购买方面颇为卖力。2010年和2011年第一季度，迅雷购买版权内容的成本高达507万美元和142万美元。\r\n</p>\r\n<p>\r\n	与迅雷追版权不同，总部同在深圳的快播走的却是站长路线。快播不花一分钱买内容，完全靠中小站长的盗版内容存活。虽然饱受争议，但快播依然认为以流量换广告的模式毫无价值。\r\n</p>\r\n<p>\r\n	同为客户端视频，PPTV、PPS、风行等在走流量换广告的老步子。快播倚赖盗版，推会员服务赚钱，而那些既没有流量也不敢靠盗版的平台只能望洋兴叹。\r\n</p>\r\n<p>\r\n	行业纷争割据内容依旧是主旋律\r\n</p>\r\n<p>\r\n	视频网站的根本在于内容，而视频网站本身没有内容制造能力，这是天生的短板。所以在未来，版权购买依然是整个行业的主旋律。虽然眼下大多数的网站还在倚赖广告主度日，但随着网络视频平台的发展和价值挖掘，或许将来能够依靠技术，将教育、电商等元素融合到网络视频，使视频媒体发挥出更大的价值。\r\n</p>\r\n<p>\r\n	经过七年，国内视频网站的发展良莠不齐，商业模式也模糊不清。这种现象就如同一个人守着一座无比巨大的宝藏却不知道如何开采。未来能有多少时间留给中国的视频网站去摸索出一个能够开采宝藏的方法，未来又有谁会消失在这条寻找开采方法的路上？\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '', 1354512963, 0, 3, 0, 0),
(12, '首位闯入迪斯尼的华裔：想让中国动画风行全球', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133633n.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133652b.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	刘大伟曾担任《美女与野兽》、《阿拉丁》、《狮子王》、《花木兰》的动画设计和美术指导。 （图片由刘大伟提供）\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133723n.jpg" />\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133747r.jpg" />\r\n</p>\r\n<p align="center">\r\n	迪斯尼动画电影《花木兰》中的李翔将军是根据刘大伟的形象设计的。上图为刘大伟穿盔甲像。（图片由刘大伟提供）\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203133846b.jpg" />\r\n</p>\r\n<p align="center">\r\n	刘大伟在深圳动漫节受到“粉丝”们的热烈欢迎。（深圳商报记者 韩 墨 摄）\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>\r\n<p align="left">\r\n	<br />\r\n	<p>\r\n		深圳商报记者 刘 琼\r\n	</p>\r\n	<p>\r\n		他19岁闯入迪斯尼公司，成为第一位进入迪斯尼的华人动画师。他曾担任《美女与野兽》、《阿拉丁》、《狮子王》、《花木兰》的动画设计和美术指导。昨日，这位颇具传奇色彩的动画人——刘大伟携作品现身深圳第四届动漫节，并接受了深圳商报专访。\r\n	</p>\r\n	<p>\r\n		采访中，刘大伟侃侃而谈。既有对中美两国教育方式的感慨，也有对国内动漫产业缺乏创意的担忧，更有将中国文化通过动画传遍全球，影响全世界的雄心。\r\n	</p>\r\n	<p>\r\n		从台湾到美国：\r\n	</p>\r\n	<p>\r\n		在绘画中寻找自信\r\n	</p>\r\n	<p>\r\n		在台湾出生的刘大伟，童年时期并不像如今那般光彩夺目。因为成绩不好，他经常被人嘲笑，甚至连父母都觉得很没面子。从小爱画画，却并不被人认可。因为喜欢在课堂上把老师画成搞笑的妖怪，他被人看作是小丑。“那时，我非常自卑。”刘大伟说，父母认为画画没有前途，从小便要求他学钢琴，刘大伟“被逼”学了8年钢琴，依旧没有任何兴趣。“再加上我在学校经常是倒数第二第三，爸妈觉得脸都被我丢光了。”刘大伟告诉记者，父母在台湾是小有名气的面包店老板。因为他的原因，在朋友圈里都抬不起头。\r\n	</p>\r\n	<p>\r\n		1982年，13的刘大伟被家人送往美国读书。 刚到美国的日子，刘大伟不会英语，加上文化差异，他更加自卑。绘画成了他最大的乐趣。就在这个时候，他碰到了一位对他影响非常大的老师。“这位老师发现了我的绘画天分，给了我莫大的鼓舞。”刘大伟说，在台湾天天被人看不起，但这位老师却经常鼓励他。称赞的力量和神奇，就是在老师的支持下，他开始变得自信。那一年，刘大伟绘制了作品“中国龙”，并在比赛中获得全美前二十名。\r\n	</p>\r\n	<p>\r\n		“其实我并不是‘一无是处’，原以为自己是颗玻璃球，没想到是颗闪闪发光的钻石。”刘大伟调侃地说，“我不是一只会读书的蜜蜂，也不是会弹钢琴的蟋蟀，但我是一只会画画、在黑暗中展翔发光的萤火虫。”\r\n	</p>\r\n	<p>\r\n		好莱坞十年：\r\n	</p>\r\n	<p>\r\n		靠才华吃饭\r\n	</p>\r\n	<p>\r\n		1989年，刘大伟大学毕业时，正碰上迪斯尼招人。凭借出色的绘画才能，刘大伟顺利成为当年迪斯尼在北美和欧洲招的8位动画师之一。从1989年到1998年，刘大伟一直在迪斯尼从事动画的前期创意工作。担任《美女与野兽》、《阿拉丁》、《狮子王》、《花木兰》分镜剧本设计和美术指导。“我从来没想到自己画的东西能动起来。动画实在是一门非常奇妙的艺术。在这个世界里，有音乐有美术，两者结合在一起非常有力量。”刘大伟如此阐释他对动画的喜爱。\r\n	</p>\r\n	<p>\r\n		提起根据中国传统故事《花木兰》改编的动画电影，刘大伟指着自己的脸问：“你有没有觉得，片中的李翔将军跟我有点像？”在得到记者的认同之后，他“颇为得意”地说：“李翔将军就是根据我的形象设计的。我祖籍山东，长得也很壮，大家感觉与这形象比较贴近。”\r\n	</p>\r\n	<p>\r\n		1998年，刘大伟应美国知名导演、制片人乔治·卢卡斯创立的“工业光魔特效公司”之邀，在两年的时间里参与了《星际大战》、《科学怪人》等电影的布景、风格设计，以及3D模型设计和数位电影的光线效果设置。\r\n	</p>\r\n	<p>\r\n		“在好莱坞十年，非常开心，因为一直在做自己喜欢和擅长的事情。在这里，我靠自己的才华立足。”刘大伟这样总结自己十年的好莱坞生活。\r\n	</p>\r\n	<p>\r\n		自立门户：\r\n	</p>\r\n	<p>\r\n		成为独立插画家\r\n	</p>\r\n	<p>\r\n		经过10年的磨练，刘大伟开始思考进行独立的绘画创作。2000年，他离开好莱坞，成为一名独立插画家。此后，他为美国《时代杂志》、《华尔街日报》、《商业周刊》等刊物绘制插画，并承接环球制片厂、迪斯尼制片厂的艺术工作。\r\n	</p>\r\n	<p>\r\n		2004年，对于刘大伟来说意义非凡。他在美国创办了康多影业(KenduFilms)。刘大伟说，“Kendu”是“can do”的同音。意为相信自己，肯做、能做。期间，独立创业的刘大伟完成了多部绘画作品。目前，刘大伟彩绘“隐形的尾巴”系列丛书已经出版，包括《乔丹的访客》、《火鱼》、《梦中的巨叶》、《国王的盛宴》四本。据了解，该系列书籍在美国亚马逊销售榜上被评为五颗星优良刊物，风靡全美。\r\n	</p>\r\n	<p>\r\n		返回中国：\r\n	</p>\r\n	<p>\r\n		分公司有望落户深圳\r\n	</p>\r\n	<p>\r\n		此次参加深圳动漫节，刘大伟目的非常明确：为新作寻找合作者。刘大伟说，新作前期创意均已完成。如果分公司能落户深圳，这部片子就是典型的“中国创造”。据刘大伟透露，这几天他也频频与深圳一些大型的动漫公司进行接触。期间，有公司和投资商已表露出合作的兴趣。\r\n	</p>\r\n	<p>\r\n		“这么多年来，我已经受够了‘MADE IN CHINA ’，我希望这部动画作品是‘CREATE IN CHINA’。”刘大伟说，之前在迪斯尼时，团队创作的宗旨就是寻找悠久的文化，并通过动画予以包装，从而风行全球。比如《花木兰》这个典型的中国故事，因为迪斯尼动画而全球皆知。\r\n	</p>\r\n	<p>\r\n		“中国有着如此灿烂的历史文化，中国动画人为什么就不能把我们的文化，通过中国创意，传播至国外呢？”刘大伟说，他至今仍清楚地记得2000年第一次回大陆时，看到国内山川风光的震撼，体悟到历史民俗时的感动。作为一名动画人，他在参加国内多个动漫节时，也无奈地发现中国动漫作品毫无创意的日本式复制。“我想，是时候把中国元素包装成国际风行的品牌了。我一直梦想：能通过动画作品，让中国文化影响全世界。”\r\n	</p>\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>', '', 1354513179, 1, 3, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `media_authgroup`
--

CREATE TABLE IF NOT EXISTS `media_authgroup` (
  `groupid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '组ID',
  `groupname` varchar(50) CHARACTER SET gbk NOT NULL COMMENT '组名称',
  `auths` text CHARACTER SET gbk NOT NULL COMMENT '组权限',
  `timeline` int(10) unsigned NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `media_authgroup`
--


-- --------------------------------------------------------

--
-- 表的结构 `media_category`
--

CREATE TABLE IF NOT EXISTS `media_category` (
  `category_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `category_pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `category_name` varchar(30) NOT NULL,
  `category_type` varchar(20) NOT NULL DEFAULT 'product',
  `category_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `media_category`
--

INSERT INTO `media_category` (`category_id`, `category_pid`, `category_name`, `category_type`, `category_order`) VALUES
(2, 0, '公司新闻', 'article', 0),
(3, 0, '业界动态', 'article', 0),
(4, 0, '活动展示', 'jingdiananli', 0),
(5, 0, '创意设计', 'jingdiananli', 0),
(6, 0, '影视制作', 'jingdiananli', 0);

-- --------------------------------------------------------

--
-- 表的结构 `media_jingdiananli`
--

CREATE TABLE IF NOT EXISTS `media_jingdiananli` (
  `jingdiananli_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `jingdiananli_name` varchar(50) NOT NULL COMMENT '文章名称',
  `jingdiananli_text` text NOT NULL COMMENT '文章内容',
  `jingdiananli_logo` varchar(200) NOT NULL COMMENT '文章缩略图',
  `jingdiananli_atime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `jingdiananli_clicknum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击数',
  `category_id` smallint(5) unsigned NOT NULL COMMENT '分类id',
  `jingdiananli_tuijian` smallint(2) NOT NULL COMMENT '推荐',
  `jingdiananli_cuxiao` smallint(2) NOT NULL COMMENT '置顶',
  PRIMARY KEY (`jingdiananli_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 导出表中的数据 `media_jingdiananli`
--

INSERT INTO `media_jingdiananli` (`jingdiananli_id`, `jingdiananli_name`, `jingdiananli_text`, `jingdiananli_logo`, `jingdiananli_atime`, `jingdiananli_clicknum`, `category_id`, `jingdiananli_tuijian`, `jingdiananli_cuxiao`) VALUES
(21, '活动展示', '活动展示', '', 1354518559, 4, 4, 0, 0),
(22, 'VIS设计', '<p>\r\n	我们理解设计与品牌的关系，更懂你的想法与期望；\r\n</p>\r\n<p>\r\n	专业的人员配置，为客户整合优质资源，成为企业的合作伙伴！\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151022y.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151022f.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151022a.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151022d.jpg" width="680" height="409" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '/data/attachment/2012-12/20121203151112e.jpg', 1354518672, 0, 5, 0, 0),
(23, '标志设计', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151204c.jpg" width="680" height="354" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<br />\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151204l.jpg" width="680" height="354" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<br />\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151204l.jpg" width="680" height="354" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<br />\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151204a.jpg" width="680" height="356" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<br />', '/data/attachment/2012-12/20121203151255i.jpg', 1354518775, 0, 5, 0, 0),
(24, '包装设计', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151322k.jpg" width="680" height="471" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>', '/data/attachment/2012-12/20121203151336r.jpg', 1354518816, 0, 5, 0, 0),
(25, '画册设计', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151406v.jpg" width="680" height="379" /> \r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n	<p>\r\n		<br />\r\n	</p>', '/data/attachment/2012-12/20121203151425o.jpg', 1354464000, 1, 5, 0, 0),
(26, '网站设计', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151451z.jpg" width="680" height="378" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>', '/data/attachment/2012-12/20121203151504f.jpg', 1354518904, 1, 5, 0, 0),
(27, '其他设计', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151825m.jpg" width="680" height="377" />\r\n</p>\r\n<br />\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151733d.png" width="680" height="378" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<br />\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203151940v.jpg" width="680" height="376" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<br />\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203152009c.png" width="680" height="377" />\r\n	<div align="center">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<br />', '/data/attachment/2012-12/20121203152039e.png', 1354519239, 2, 5, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `media_link`
--

CREATE TABLE IF NOT EXISTS `media_link` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情链接id',
  `link_name` varchar(50) NOT NULL COMMENT '友情链接名称',
  `link_url` varchar(100) NOT NULL COMMENT '友情链接url',
  `link_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '友情链接排序',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `media_link`
--

INSERT INTO `media_link` (`link_id`, `link_name`, `link_url`, `link_order`) VALUES
(3, '22222222', '', 2);

-- --------------------------------------------------------

--
-- 表的结构 `media_page`
--

CREATE TABLE IF NOT EXISTS `media_page` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 导出表中的数据 `media_page`
--

INSERT INTO `media_page` (`id`, `name`, `text`, `logo`) VALUES
(1, '公关活动', '<p>\r\n	为客户量身定做各式创意新颖的市场活动，包括：新闻发布会、新产品上市推介会、签约签售仪式、商业演出活动、研讨论坛会、联谊（欢）活动及酒会沙龙等活动的策划与实施。\r\n</p>\r\n<p>\r\n	持续提高品牌的知名度、认知度、美誉度、忠诚度、顾客满意度，提升品牌形象，累积无形资产，并能从不同程度上促进销售。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203143019z.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>', '/data/attachment/2012-12/20121203143032v.jpg'),
(2, '影视制作', '<p>\r\n	微电影、宣传片、纪录片、专题片、电视栏目等拍摄与制作。\r\n</p>\r\n<p>\r\n	策划，以客户的营销目的为指导，每个分镜头、每句解说词字斟句酌；\r\n</p>\r\n<p>\r\n	拍摄，每个镜头的角度、取景、灯光、拍摄手法都力求最佳；\r\n</p>\r\n<p>\r\n	后期制作，剪辑要有特色、包装要精良，保证全片的色调统一、画面流畅。\r\n</p>\r\n<p>\r\n	以多彩的视觉体验、丰富的声音魅力、生动的视觉特效，取代枯燥乏味的文字说明，能更直观、更透彻地表现其富含的价值。多年经验的打造，不断进取的决心，加上持之以恒的热忱，使我们能够做出更优秀的服务。\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203144004v.png" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '/data/attachment/2012-12/20121203144015o.png'),
(3, '品牌推广', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203144056l.jpg" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '/data/attachment/2012-12/20121203144105z.jpg'),
(4, '栏目制作', '<p>\r\n	微电影、宣传片、纪录片、专题片、电视栏目等拍摄与制作。\r\n</p>\r\n<p>\r\n	策划，以客户的营销目的为指导，每个分镜头、每句解说词字斟句酌；\r\n</p>\r\n<p>\r\n	拍摄，每个镜头的角度、取景、灯光、拍摄手法都力求最佳；\r\n</p>\r\n<p>\r\n	后期制作，剪辑要有特色、包装要精良，保证全片的色调统一、画面流畅。\r\n</p>\r\n<p>\r\n	以多彩的视觉体验、丰富的声音魅力、生动的视觉特效，取代枯燥乏味的文字说明，能更直观、更透彻地表现其富含的价值。多年经验的打造，不断进取的决心，加上持之以恒的热忱，使我们能够做出更优秀的服务。\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203144158l.jpg" width="600" height="450" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '/data/attachment/2012-12/20121203144213g.jpg'),
(5, '创意设计', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203144331v.jpg" width="600" height="448" /> \r\n</p>\r\n<p align="center">\r\n	<br />\r\n</p>', '/data/attachment/2012-12/20121203144411h.jpg'),
(6, '媒介整合', '<p>\r\n	&nbsp;\r\n</p>', '/data/attachment/2012-12/20121203144444o.png'),
(7, '文化投资', '<p>\r\n	&nbsp;\r\n</p>', '/data/attachment/2012-12/20121203144511f.jpg'),
(8, '艺术品基金', '&nbsp;', '/data/attachment/2012-12/20121203144532c.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `media_parent`
--

CREATE TABLE IF NOT EXISTS `media_parent` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `logo` varchar(200) NOT NULL,
  `parent_atime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `media_parent`
--

INSERT INTO `media_parent` (`id`, `name`, `text`, `logo`, `parent_atime`) VALUES
(1, '社会资源', '<p align="center">\r\n	协会领导&nbsp; 著名学者&nbsp; 品牌专家&nbsp; 十大策划师 营销专家 明星&nbsp;&nbsp;&nbsp; 知名主持人&nbsp; 模特&nbsp; 特型演员&nbsp; 艺术家等\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203160311a.png" width="680" height="633" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>', '/data/attachment/2012-11/20121121093656m.jpg', 1353461816),
(2, '场地资源', '<p align="center">\r\n	城市广场&nbsp; 星级酒店&nbsp; 高档会所&nbsp;&nbsp; 体育场&nbsp; 会议中心&nbsp; 高尔夫球场&nbsp; 游轮等\r\n</p>\r\n<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203160503m.jpg" width="680" height="438" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>\r\n<p align="center">\r\n	&nbsp;\r\n</p>', '', 1354521911),
(3, '荣誉客户', '<p align="center">\r\n	<img alt="" src="http://127.0.0.1/data/attachment/2012-12/20121203160539x.png" width="680" height="502" />\r\n	<div align="left">\r\n		&nbsp;\r\n	</div>\r\n</p>', '/data/attachment/2012-12/20121203160550r.png', 1354521950);

-- --------------------------------------------------------

--
-- 表的结构 `media_setting`
--

CREATE TABLE IF NOT EXISTS `media_setting` (
  `setting_key` varchar(50) NOT NULL,
  `setting_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `media_setting`
--

INSERT INTO `media_setting` (`setting_key`, `setting_value`) VALUES
('web_tpl', ''),
('web_title', 'Aaron-cms'),
('web_keywords', '234'),
('web_description', '345'),
('web_copyright', '456'),
('web_icp', '京ICP000000'),
('web_weibo', '678'),
('web_tongji', '789'),
('alipay_name', '13161293330'),
('alipay_pid', '2088202850009327'),
('alipay_key', '3buwyej2a2m5mkerxu3qlq5ckvpdf62z');

-- --------------------------------------------------------

--
-- 表的结构 `media_user`
--

CREATE TABLE IF NOT EXISTS `media_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_name` varchar(20) NOT NULL COMMENT '用户名',
  `user_pw` varchar(32) NOT NULL COMMENT '用户密码',
  `user_tname` varchar(10) NOT NULL COMMENT '用户姓名',
  `user_phone` char(11) NOT NULL COMMENT '用户手机',
  `user_qq` varchar(10) NOT NULL COMMENT '用户QQ',
  `user_email` varchar(30) NOT NULL COMMENT '用户email',
  `user_atime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户注册时间',
  `user_ltime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户上次登录时间',
  `user_address` varchar(255) NOT NULL COMMENT '用户地址',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `media_user`
--

