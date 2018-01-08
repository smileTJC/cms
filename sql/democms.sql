/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : democms

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-09-05 14:19:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cms_content`
-- ----------------------------
DROP TABLE IF EXISTS `cms_content`;
CREATE TABLE `cms_content` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//编号',
  `title` varchar(50) NOT NULL COMMENT '//标题',
  `nav` mediumint(8) unsigned NOT NULL COMMENT '//栏目号',
  `attr` varchar(20) NOT NULL COMMENT '//属性',
  `tag` varchar(30) NOT NULL COMMENT '//标签',
  `keyword` varchar(30) NOT NULL COMMENT '//关键字',
  `thumbnail` varchar(100) NOT NULL COMMENT '//缩略图',
  `source` varchar(20) NOT NULL COMMENT '//文章来源',
  `author` varchar(10) NOT NULL COMMENT '//作者',
  `info` varchar(200) NOT NULL COMMENT '//简介',
  `content` text NOT NULL COMMENT '//详细内容',
  `commend` tinyint(1) NOT NULL DEFAULT '1' COMMENT '//是否允许评论',
  `count` smallint(6) NOT NULL DEFAULT '0' COMMENT '//浏览次数',
  `sort` tinyint(1) NOT NULL DEFAULT '0' COMMENT '//排序',
  `color` varchar(20) NOT NULL COMMENT '//颜色',
  `date` char(10) NOT NULL COMMENT '//发布时间',
  PRIMARY KEY (`id`),
  KEY `nav` (`nav`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_content
-- ----------------------------
INSERT INTO `cms_content` VALUES ('43', '深度：中国长剑10导弹让印度眼红 印度失败如家常便饭', '26', '加粗', '', '中国长剑', '', '', '蜡笔小新', '印度国防工业今天发布了一部2014年10月17日国产“无畏”巡航导弹试射的视频。这个曝光尺度还是相当大的。印度军工专门拍人乘飞机在空中近距离跟拍无畏巡航导弹的飞行过程。你还别说，“无畏”弹的做工还挺不错的。', '<p><span style=\"FONT-SIZE: 12px\"><strong>新浪军事编者：</strong>为了更好的为读者呈现多样军事内容，满足读者不同阅读需求，共同探讨国内国际战略动态，新浪军事独家推出《深度军情》版块，深度解读军事新闻背后的隐藏态势，立体呈现中国面临的复杂军事战略环境，欢迎关注。 </span></p><p>\r\n	　　<strong>&amp;ldquo;无畏&amp;rdquo;又掉了</strong></p><p>\r\n	　　16日，印度进行了&amp;ldquo;无畏&amp;rdquo;巡航导弹的第三次试射。但在导弹飞行700秒后，因故障失控，坠毁在孟加拉湾中。</p><p>\r\n	　　从技术角度看，印度的&amp;ldquo;无畏&amp;rdquo;巡航导弹的总体设计脱胎于俄罗斯3M14&amp;ldquo;克拉布&amp;rdquo;导弹的出口型。这种导弹不久前刚刚在叙利亚战场大出风头。</p><p>\r\n	　　俄罗斯3M14导弹有两种出口型，分别为潜艇用的3M14E导弹和水面舰艇用的3M14TE导弹，射程均为290公里，印度海军购买了这两种型号的导弹。</p><p>\r\n	　　但是对于印度来说，3M14E导弹的射程实在不足。即使是与俄罗斯合作研制的号称先进无比的&amp;ldquo;布拉莫斯&amp;rdquo;超音速巡航导弹的对地攻击型，最大射程也只有500公里左右，这对于万事都要讲究个攀比的印度军队来说简直无法接受。要知道，印度的死对头巴基斯坦可是从2005年就研制成功了&amp;ldquo;巴布尔&amp;rdquo;巡航导弹，射程1000公里左右。<strong>虽然和中国装备的&amp;ldquo;长剑-10&amp;rdquo;导弹2500公里以上的射程还不能比，但已经足够让印度眼红耳热的了。</strong></p><p><strong><img src=\"/Uploads/2017-08-21/1503303646130635.jpg\" title=\"1503303646130635.jpg\" alt=\"TIM图片20170821152517.jpg\"/></strong></p>', '1', '5', '0', 'red', '1499132200');
INSERT INTO `cms_content` VALUES ('44', '解放军对美军南海示弱 后患无穷！', '26', '无', '', '解放军', '', '', '蜡笔小新', '美国军方计划进入中国南沙岛礁12海里的行动，是一个极其自私的行动，只不过为了争多一点儿军费，将中国的主权和核心利益置於不顾。仅此，即看到美国军方是毫不负责任。就美国本身利益而言，如此行动亦然是置中美关系和亚太地区的和平与稳定於不顾，到头来美国是得不偿失。', '<p>\r\n	美国军方计划进入中国南沙岛礁12海里的行动，是一个极其自私的行动，只不过为了争多一点儿军费，将中国的主权和核心利益置於不顾。仅此，即看到美国军方是毫不负责任。就美国本身利益而言，如此行动亦然是置<strong class=\"kw\"><a href=\"http://military.china.com/baike_5Lit576O5YWz57O7.html\" target=\"_blank\">中美关系</a></strong>和亚太地区的和平与稳定於不顾，到头来美国是得不偿失。</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;也因为此，给了中国外交部通过外交斡旋化解这场危机的空间。相信，北京也正在做这件事情。当然，这只是从美国的利益去劝说，这也未必是上策。</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;因为，这种劝说，还是带有道德的色彩，去劝美国的健康力量做好人，而这种做好人说，未必能使美国肉痛。那麽，另一方面，就是要来点硬的。</p>\r\n<div id=\"CH_MTL_10002\">\r\n	&nbsp;</div>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;说实话，北京对奥巴马够忍让的了。明明知道你美国老是要搞中国，但是还笑脸相迎，屡屡声称要发展中美新型大国关系。过去，邓小平解释韬光养晦，除了核心利益，能让就让。朱熔基访美，还要给你们美国人消消气。但是，美舰要进入中国南海岛礁十二海里，就是把中国逼到悬崖边。逼得中国非和你老美干不可，而且许胜不许败。</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;这就是说，你美军硬干，中国只能硬顶，否则开了这个头，以後你不是想来就来？现在，不是八国联军时代啦。所以，中国也发出了要和你太平洋舰队干一场的架势。北京也忽然表态，支持俄军在叙利亚的行动。这就是，警告太平洋舰队的信号。</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;相信，解放军要硬，牌还有很多。第一，美舰要进，中国军舰会顶，大不了同归於尽。</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;第二，明确宣示，你美舰要硬闯，我就收复被越南菲律宾占领的南威岛和中业岛。</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;范长龙说，不会轻易动武，大概是先礼後兵。这个当下，要示弱，后患无穷</p>\r\n', '1', '2', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('45', '英国第二艘女王级航母舰岛到货', '27', '无', '', '英国', '/tp/Uploads/20151020/20151020164013890.jpg', '', '蜡笔小新', '英国第二艘女王级航母舰岛到货', '<p>\r\n	英国第二艘女王级航母舰岛到货</p>\r\n', '1', '1', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('46', '雅虎女高管加盟Square 雅虎复兴无望 Square冲刺IPO', '36', '无', '', '雅虎女，高管', '', '', 'admin', '雅虎首席开发官杰奎琳·雷瑟斯被曝光加入Square，雷瑟斯在Square负责重要的融资业务，并成为Square的CEO多尔西的主要助手，为IPO路演努力。\r\n', '<p class=\"text\">\r\n	<strong>雷瑟斯曾掌管200亿美元投资 加盟雅虎成梅耶尔的重要助手</strong></p>\r\n<p class=\"text\">\r\n	杰奎琳&middot;雷瑟斯是雅虎CEO梅耶尔担纲雅虎复兴大业后最早招募的一批高管之一，雷瑟斯于2012年加入雅虎，担任人力资源及发展执行副总裁，负责人力资源的协调和人才招聘以及企业和业务的全球开发工作。雷瑟斯此后担任了雅虎的首席开发官，在梅耶尔不断收购创业公司，市场关注雅虎推出什么产品的时期，可见其被赋予重任。雷瑟斯在2012年加入阿里巴巴的董事会，作为雅虎的代表，当时阿里的董事会可只有四个人，其他三个人是马云、孙正义和蔡崇信；在阿里巴巴集团上市后，雷瑟斯又被派去负责分拆雅虎持有的阿里巴巴股份的复杂工作。</p>\r\n<p class=\"text\">\r\n	说分拆阿里巴巴的股票复杂，是因为：第一，从市值上说，雅虎的市值在刨除股价高点时期的阿里巴巴股票的数百亿美元的市值后，接近为零，也就是说市场对于雅虎公司并不看好；第二，雅虎的股东出名顽固，一直对董事会施加压力，要求改革，对人事也指手画脚，阿里巴巴的股票直接剥离会产生数十亿美元的税金，股东认为造成损失，所以雅虎选择设立一个壳公司，将阿里巴巴股份完全剥离到这家公司，然后雅虎股东持有这家公司的股票，股东买卖这家子公司的股票就可以达到套现的目的&mdash;&mdash;这个过程可以避免缴纳几十亿美元的税，股东是支持的，但美国国税局目前并没有批准，雅虎想免税剥离阿里巴巴股票的路可能也走不通了。在这个过程中，雷瑟斯需要协调很多人的利益，并且承担股东的直接压力。</p>\r\n', '1', '0', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('48', '时尚加绒针织毛衣搭配 4款潮流搭配show起来', '36', '无', '', 'abc', '', '', 'admin', '今年的冬季，你除了需要一件高领毛衣之外，还需要准备一款V领的针织毛衣，下面本文为你介绍的4款V领加绒针织毛衣搭配，为你增添成熟气质魅力...', '<p>\r\n	今年的冬季，你除了需要一件高领<a class=\"channel_keylink\" href=\"http://so.yxlady.com/cse/search?s=5764106113771119888&amp;entry=1&amp;q=毛衣\" target=\"_blank\">毛衣</a>之外，还需要准备一款V领的针织毛衣，下面本文为你介绍的4款V领加绒针织毛衣<a class=\"channel_keylink\" href=\"http://so.yxlady.com/cse/search?s=5764106113771119888&amp;entry=1&amp;q=搭配\" target=\"_blank\">搭配</a>，为你增添成熟<a class=\"channel_keylink\" href=\"http://so.yxlady.com/cse/search?s=5764106113771119888&amp;entry=1&amp;q=气质\" target=\"_blank\">气质</a>魅力。</p>\r\n<p>\r\n	白色V领毛衣搭配西裤</p>\r\n<p>\r\n	一款白色针织V领毛衣，宽松版型，穿在身上就是显瘦，搭配一条<a class=\"channel_keylink\" href=\"http://so.yxlady.com/cse/search?s=5764106113771119888&amp;entry=1&amp;q=条纹\" target=\"_blank\">条纹</a>西裤，瞬间就增添了成熟气质，V领的毛衣还能将<a class=\"channel_keylink\" href=\"http://so.yxlady.com/cse/search?s=5764106113771119888&amp;entry=1&amp;q=性感\" target=\"_blank\">性感</a>的锁骨展露出来。</p>\r\n', '1', '1', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('49', '92号汽油每升涨0.04元 对私家车主的影响较小 ', '35', '无', '', 'abc', '', '', 'admin', '本报讯(记者 蔺丽爽)昨日，国家发改委发布通知称，决定将汽、柴油价格每吨均提高50元，测算到零售价格90号汽油和0号柴油(全国平均)每升均提高0.04元。北京青年报记者从中石化北京分公司了解到，北京92号汽油上涨0.04元/升。', '<p>\r\n	本报讯(记者 蔺丽爽)昨日，国家发改委发布通知称，决定将汽、柴油价格每吨均提高50元，测算到零售价格90号汽油和0号柴油(全国平均)每升均提高0.04元。北京青年报记者从中石化北京分公司了解到，北京92号汽油上涨0.04元/升。</p>\r\n<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"PADDING-RIGHT: 10px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<div id=\"adhzh\" name=\"hzh\">\r\n					<span style=\"BORDER-BOTTOM: 0px; POSITION: relative; TEXT-ALIGN: left; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; HEIGHT: 250px; OVERFLOW: visible; BORDER-TOP: 0px; BORDER-RIGHT: 0px\"><span style=\"BORDER-BOTTOM: 0px; POSITION: absolute; TEXT-ALIGN: left; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; HEIGHT: 250px; OVERFLOW: hidden; BORDER-TOP: 0px; BORDER-RIGHT: 0px\"><span style=\"BORDER-BOTTOM: 0px; POSITION: absolute; TEXT-ALIGN: left; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; HEIGHT: 250px; OVERFLOW: hidden; BORDER-TOP: 0px; BORDER-RIGHT: 0px\"><img alt=\"\" src=\"http://i8.chinanews.com/gg/yichuanmei/transparent.gif\" style=\"BORDER-BOTTOM: 0px; POSITION: absolute; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; HEIGHT: 250px; BORDER-TOP: 0px; TOP: 0px; CURSOR: pointer; BORDER-RIGHT: 0px; LEFT: 0px\" /> </span></span></span></div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	　　北青报记者从中石化北京分公司获悉，昨日24时起调整汽、柴油价格，汽、柴油最高零售价格均上调50元/吨，其中92号汽油零售价5.96元/升，调增0.04元/升；95号汽油零售价6.34元/升，调增0.04元/升；京标0号柴油零售价5.58元/升，调增0.04元/升。</p>\r\n<p>\r\n	　　由于此轮上涨幅度较小，对私家车主的影响较小。以一辆百公里油耗10升、月跑2000公里的小型私家车为例，此轮92号汽油每升上涨0.04元，截至下一调价周期(约半个月)，该私家车主的燃油费用增加4元。</p>\r\n<p>\r\n	　　后市来看，国际市场利空因素再占上风，预计短期国际油价将持弱整理。新一轮原油变化率将再度进入负向运行，下一轮成品油调价窗口将于11月4日零时开启。据悉，本次调价完成后，今年调价将形成&ldquo;七涨九跌四搁浅&rdquo;的格局。</p>\r\n', '1', '87', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('50', '北京光伏充电站首尝PPP模式 落子石景山 ', '35', '无', '', '', '', '', 'admin', '全球最大的光伏充电站落子石景山区，预计年底建成，这也是北京首个引入PPP模式的光伏充电站，故引发外界对这一领域“钱景”关注。昨日，北京首钢自动化信息技术有限公司(以下简称“首自信公司”)和北京富电科技有限公司(以下简称“富电科技”)共同合作建设的光伏超级充电站正式启动，业内普遍认为，通过PPP模式，社会资本和国有资本将实现双方的优势互补与资源整合，进而共同求解行业种种难题。 \r\n', '<p>\r\n	全球最大的光伏充电站落子石景山区，预计年底建成，这也是北京首个引入PPP模式的光伏充电站，故引发外界对这一领域&ldquo;钱景&rdquo;关注。昨日，北京首钢自动化信息技术有限公司(以下简称&ldquo;首自信公司&rdquo;)和北京富电科技有限公司(以下简称&ldquo;富电科技&rdquo;)共同合作建设的光伏超级充电站正式启动，业内普遍认为，通过PPP模式，社会资本和国有资本将实现双方的优势互补与资源整合，进而共同求解行业种种难题。</p>\r\n<table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"PADDING-RIGHT: 10px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<div id=\"adhzh\" name=\"hzh\">\r\n					<span style=\"BORDER-BOTTOM: 0px; POSITION: relative; TEXT-ALIGN: left; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; HEIGHT: 250px; OVERFLOW: visible; BORDER-TOP: 0px; BORDER-RIGHT: 0px\"><span style=\"BORDER-BOTTOM: 0px; POSITION: absolute; TEXT-ALIGN: left; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; HEIGHT: 250px; OVERFLOW: hidden; BORDER-TOP: 0px; BORDER-RIGHT: 0px\"><span style=\"BORDER-BOTTOM: 0px; POSITION: absolute; TEXT-ALIGN: left; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; HEIGHT: 250px; OVERFLOW: hidden; BORDER-TOP: 0px; BORDER-RIGHT: 0px\"><img alt=\"\" height=\"1\" src=\"http://i8.chinanews.com/gg/yichuanmei/transparent.gif\" style=\"BORDER-BOTTOM: 0px; POSITION: absolute; BORDER-LEFT: 0px; WIDTH: 300px; DISPLAY: block; HEIGHT: 250px; BORDER-TOP: 0px; TOP: 0px; CURSOR: pointer; BORDER-RIGHT: 0px; LEFT: 0px\" width=\"1\" /></span></span></span>\r\n					<p>\r\n						光伏充电站&ldquo;巨无霸&rdquo;年内建成</p>\r\n					<p>\r\n						　　据悉，石景山的光伏超级充电站兼具新能源充电和立体停车功能，项目外形形似太空飞船。充电站总投资达1500万元，将建设50根充电桩，建设占地约500平方米，通过立体停车设计建成后可以提供约30个停车充电位。此外，整个充电站的能源将全部由太阳能提供，每日可满足80辆纯电动汽车的充电需求。</p>\r\n					<p>\r\n						　　富电科技董事长庞雷介绍，光伏充电站将能满足市面上大部分电动汽车的充电需求，目前市面上主流的国产、日系和欧美等三大车系电动车都可以在这个充电站内实现充电。据北京商报记者了解，石景山的光伏充电站计划年底建成，届时，它将成为继朝阳华贸中心充电站之后，北京市最大的光伏超级充电站。此前位于华贸中心的北京市首个光伏充电站，一天的发电量能让7辆左右的纯电动车充满电。与以前相比，此次充电站的建设规模有了大幅提升。</p>\r\n					<p>\r\n						　　在推进石景山超级光伏充电站项目的同时，富电科技在西客站、西红门、北大万柳等地还有17处充电站也正施工建设中。截至今年底，共计会有1500个充电桩完成施工开始运营，并真正实现距离市中心5公里以内的电动汽车充电基础设施布</p>\r\n				</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '1', '5', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('51', '长安奔奔EV纯电动版亮相 续航里程达200Km', '35', '无', '', '', '', '', 'admin', '    【车讯网 报道】在10月21日开幕的2015节能与新能源汽车成果展上，长安奔奔EV纯电动版车型正式亮相，据悉，新车的最大续航里程达到200Km。\r\n\r\n', '<p>\r\n	&nbsp;</p>\r\n<div class=\"news-cnt\">\r\n	<div class=\"news-editbox mt20\">\r\n		<p>\r\n			&nbsp; &nbsp; 【<strong><a href=\"http://www.chexun.com/\">车讯网</a> 报道</strong>】在10月21日开幕的2015节能与<a href=\"http://xny.chexun.com/\" target=\"_blank\">新能源</a>汽车成果展上，<a href=\"http://auto.chexun.com/brand_changan/\" target=\"_blank\">长安</a>奔奔EV纯<a href=\"http://xny.chexun.com\" target=\"_blank\">电动</a>版<a href=\"http://car.chexun.com/\" target=\"_blank\">车型</a>正式亮相，据悉，<a href=\"http://www.chexun.com/newcar/\" target=\"_blank\">新车</a>的最大续航里程达到200Km。</p>\r\n		<p align=\"center\">\r\n			<img alt=\"长安奔奔EV纯电动版亮相 续航里程达200Km\" border=\"0\" id=\"8598837\" src=\"http://i2.chexun.net/images/2015/1021/17197/news_default_47F02B38F66B56F90EDB6BB2BF1B2DCC.jpg\" width=\"650\" /></p>\r\n		<p>\r\n			<a href=\"http://car.chexun.com/chexing.html\" target=\"_blank\">　　外观</a>方面，长安奔奔EV纯电动版车型保持了汽油版车型的设计，整体造型活泼动感，新车采用了全新样式的铝合金轮圈。车尾最明显的变化就是增加了&ldquo;EV&rdquo;的标识，以凸显纯电动车型的身份。</p>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', '1', '10', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('52', '淘宝百色馆上线运营', '37', '无', '', '', '', '', 'admin', '本报百色讯（记者/徐顺东通讯员/张剑）10月19日，淘宝特色中国百色馆上线运营启动活动在百色园博园主展馆举行。据了解，百色今年着手创建阿里巴巴·百色产业带和淘宝网“特色中国·百色馆”（简称“一带一馆”），打造具有地域特色的电商平台，“一带”预计明年6月底也可上线运营。 ', '<p>\r\n	本报百色讯（记者/徐顺东通讯员/张剑）10月19日，淘宝特色中国百色馆上线运营启动活动在百色园博园主展馆举行。据了解，百色今年着手创建阿里巴巴&middot;百色产业带和淘宝网&ldquo;特色中国&middot;百色馆&rdquo;（简称&ldquo;一带一馆&rdquo;），打造具有地域特色的电商平台，&ldquo;一带&rdquo;预计明年6月底也可上线运营。创建&ldquo;一带一馆&rdquo;是百色进一步提升农产品和旅游产品市场竞争力，打造百色品牌而作出的一项重要举措，实体场地位于百色市园博园。具体运作模式为：政府做监管，并且给予政策扶持；运营服务商做好销售和推广，包括频道、营销策划和客服体系；平台做基础的流量，包括搭建产品库、商品和卖家管理模块等。</p>\r\n', '1', '65', '0', '', '1499132200');
INSERT INTO `cms_content` VALUES ('53', '亚洲消息应用的营收远胜美国同行', '37', '无', '', '', '', '', 'admin', '在很多发展中国家，大量用户使用短信服务，为了节约通信成本便选择消息应用。', '<p>\r\n	在很多发展中国家，大量用户使用短信服务，为了节约通信成本便选择消息应用。</p>\r\n<p align=\"center\">\r\n	&nbsp;</p>\r\n<div class=\"mbArticleSharePic      \" style=\"WIDTH: 640px\">\r\n	<img alt=\"亚洲消息应用的营收远胜美国同行\" src=\"http://img1.gtimg.com/tech/pics/hv1/180/56/1948/126683160.jpg\" /></div>\r\n<p style=\"TEXT-INDENT: 2em\">\r\n	腾讯科技讯 10月21日，国外媒体&zwj;&zwj;报道称，科技战略和咨询公司Activate联合创始人兼CEO迈克尔&middot;沃夫（Michael Wolf）表示，在消息应用领域，WhatsApp、<span><a class=\"a-tips-Article-QQ\" href=\"http://stockhtm.finance.qq.com/astock/ggcx/FB.OQ.htm\" target=\"_blank\">Facebook</a></span> Messenger等美国应用应该向亚洲同行学习。</p>\r\n', '1', '5', '0', '', '1499132200');

-- ----------------------------
-- Table structure for `cms_manage`
-- ----------------------------
DROP TABLE IF EXISTS `cms_manage`;
CREATE TABLE `cms_manage` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//编号',
  `admin_user` varchar(20) NOT NULL COMMENT '//管理员账号',
  `admin_pass` char(40) NOT NULL COMMENT '//管理员密码',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '//管理员等级',
  `login_count` smallint(5) NOT NULL DEFAULT '0' COMMENT '//登录次数',
  `last_ip` varchar(20) NOT NULL DEFAULT '000.000.000.000' COMMENT '//最后一次IP',
  `last_time` char(10) DEFAULT NULL COMMENT '//最后一次登录时间',
  `reg_time` char(10) DEFAULT NULL COMMENT '//注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_manage
-- ----------------------------
INSERT INTO `cms_manage` VALUES ('2', '李炎恢', '601f1889667efaebb33b8c12572835da3f027f78', '21', '3', '127.0.0.1', '1499132200', '1499132200');
INSERT INTO `cms_manage` VALUES ('71', '蜡笔小新1', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '0', '0', '000.000.000.000', '1499132200', '1499132200');
INSERT INTO `cms_manage` VALUES ('4', '樱木花道', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', '1', '::1', '1499851212', '1499132200');
INSERT INTO `cms_manage` VALUES ('5', '赤木晴子', '7c4a8d09ca3762af61e59520943dc26494f8941b', '13', '3', '127.0.0.1', '1499132200', '1499132200');
INSERT INTO `cms_manage` VALUES ('6', '樱桃小丸子', '7c4a8d09ca3762af61e59520943dc26494f8941b', '21', '6', '::1', '1499735339', '1499132200');
INSERT INTO `cms_manage` VALUES ('56', 'admin', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '2', '178', '127.0.0.1', '1499132200', '1499132200');
INSERT INTO `cms_manage` VALUES ('8', '流川枫', '7c4a8d09ca3762af61e59520943dc26494f8941b', '3', '1', '127.0.0.1', '1499132200', '1499132200');
INSERT INTO `cms_manage` VALUES ('53', '蜡笔小新', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '13', '2', '127.0.0.1', '1499132200', '1499132200');
INSERT INTO `cms_manage` VALUES ('80', '日天', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '8', '::1', '1503574789', '1503386097');
INSERT INTO `cms_manage` VALUES ('81', '樱木花道1', '601f1889667efaebb33b8c12572835da3f027f78', '1', '0', '000.000.000.000', null, '1503473528');

-- ----------------------------
-- Table structure for `cms_nav`
-- ----------------------------
DROP TABLE IF EXISTS `cms_nav`;
CREATE TABLE `cms_nav` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//编号',
  `nav_name` varchar(20) NOT NULL COMMENT '//导航名',
  `nav_info` varchar(200) NOT NULL COMMENT '//导航说明',
  `pid` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '//子分类',
  `sort` mediumint(8) unsigned NOT NULL COMMENT '//排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_nav
-- ----------------------------
INSERT INTO `cms_nav` VALUES ('1', '军事动态', '主要是军事方面的新闻。', '0', '1');
INSERT INTO `cms_nav` VALUES ('3', '时尚女人', '关于时尚和女人方面的信息。', '0', '3');
INSERT INTO `cms_nav` VALUES ('4', '科技频道', '关于科技方面的资讯。1', '0', '4');
INSERT INTO `cms_nav` VALUES ('5', '智能手机', '关于智能手机方面的推荐。', '0', '5');
INSERT INTO `cms_nav` VALUES ('7', '美容护肤', '关于美容方面的信息。', '0', '7');
INSERT INTO `cms_nav` VALUES ('8', '热门汽车', '关于汽车方面的信息。', '0', '2');
INSERT INTO `cms_nav` VALUES ('9', '房产家居', '关于房产家居的信息。', '0', '9');
INSERT INTO `cms_nav` VALUES ('10', '读书教育', '关于教育方面的信息。', '0', '6');
INSERT INTO `cms_nav` VALUES ('11', '股票基金', '关于股票基金的信息。1', '0', '12');
INSERT INTO `cms_nav` VALUES ('26', '中国军事', '关于中国军事的信息。', '1', '3');
INSERT INTO `cms_nav` VALUES ('27', '美国军事', '关于美国军事的信息。', '1', '1');
INSERT INTO `cms_nav` VALUES ('29', '日本军事', '关于日本军事方面的信息。', '1', '2');
INSERT INTO `cms_nav` VALUES ('30', '韩国军事', '关于韩国军事的信息。', '1', '4');
INSERT INTO `cms_nav` VALUES ('32', '朝鲜军事1', '关于朝鲜军事的信息。', '1', '5');
INSERT INTO `cms_nav` VALUES ('33', '越南军事', '关于越南军事的信息。', '1', '0');
INSERT INTO `cms_nav` VALUES ('35', '新车', '', '8', '35');
INSERT INTO `cms_nav` VALUES ('36', '潮流服饰', '', '3', '36');
INSERT INTO `cms_nav` VALUES ('37', '互联网', 'Internet', '4', '37');
