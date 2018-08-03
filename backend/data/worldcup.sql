-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-21 17:14:00
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldcup`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin_info`
--

CREATE TABLE `admin_info` (
  `aid` int(11) NOT NULL COMMENT '管理员ID',
  `aname` varchar(100) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL COMMENT '管理员姓名',
  `phonenumber` varchar(20) NOT NULL COMMENT '管理员电话',
  `atime` date NOT NULL COMMENT '成为管理员的时间'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='管理员信息' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `admin_info`
--

INSERT INTO `admin_info` (`aid`, `aname`, `phonenumber`, `atime`) VALUES
(1, '刘俐君', '15263748391', '2018-07-04'),
(2, '钟捷凌', '15263715241', '2018-07-10'),
(3, '韩叶', '14569937260', '2018-07-12'),
(4, '王艺茹', '17283991625', '2018-07-06'),
(5, '林美含', '16672835072', '2018-07-20');

-- --------------------------------------------------------

--
-- 表的结构 `personal_info`
--

CREATE TABLE `personal_info` (
  `sid` int(11) NOT NULL COMMENT '成员学号',
  `sname` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '成员姓名',
  `smajor` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '成员专业'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='小组成员个人信息' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `personal_info`
--

INSERT INTO `personal_info` (`sid`, `sname`, `smajor`) VALUES
(1611525, '韩叶', '信息安全'),
(1611529, '林美含', '信息安全'),
(1611530, '刘俐君', '信息安全'),
(1611533, '王艺茹', '信息安全'),
(1611540, '钟捷凌', '信息安全');

-- --------------------------------------------------------

--
-- 表的结构 `wc_country`
--

CREATE TABLE `wc_country` (
  `country_name` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '国家名称',
  `frequency` int(255) NOT NULL COMMENT '胜利次数'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='参赛国家' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_country`
--

INSERT INTO `wc_country` (`country_name`, `frequency`) VALUES
('丹麦', 1),
('乌拉圭', 4),
('伊朗', 1),
('俄罗斯', 3),
('克罗地亚', 5),
('冰岛', 0),
('哥伦比亚', 2),
('哥斯达黎加', 0),
('埃及', 0),
('塞内加尔', 1),
('塞尔维亚', 1),
('墨西哥', 2),
('尼日利亚', 1),
('巴拿马', 0),
('巴西', 3),
('德国', 1),
('摩洛哥', 0),
('日本', 1),
('比利时', 5),
('沙特阿拉伯', 1),
('法国', 6),
('波兰', 1),
('澳大利亚', 0),
('瑞典', 3),
('瑞士', 1),
('秘鲁', 0),
('突尼斯', 1),
('英格兰', 5),
('葡萄牙', 1),
('西班牙', 1),
('阿根廷', 1),
('韩国', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wc_country_like`
--

CREATE TABLE `wc_country_like` (
  `cname` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '用户昵称',
  `lcountry` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '所喜欢的国家'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='喜欢的国家' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_country_like`
--

INSERT INTO `wc_country_like` (`cname`, `lcountry`) VALUES
('刘星', '克罗地亚'),
('刘梅', '阿根廷'),
('夏东海', '法国'),
('夏雨', '巴西'),
('夏雪', '比利时');

-- --------------------------------------------------------

--
-- 表的结构 `wc_football_match`
--

CREATE TABLE `wc_football_match` (
  `mid` int(255) NOT NULL COMMENT '比赛编号',
  `country1` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '国家1',
  `country2` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '国家2',
  `mtime` date NOT NULL COMMENT '比赛时间',
  `mtype` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '比赛类型（半决赛、决赛等）',
  `mresult` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '比赛结果（记录胜出国家）',
  `mvideo` varchar(500) CHARACTER SET utf8 NOT NULL COMMENT '视频链接'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='比赛信息' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_football_match`
--

INSERT INTO `wc_football_match` (`mid`, `country1`, `country2`, `mtime`, `mtype`, `mresult`, `mvideo`) VALUES
(1, '法国', '克罗地亚', '2018-07-15', '决赛', '法国', 'http://worldcup.cctv.com/2018/07/16/VIDEPmqDvqOCIT0lAhBnNuDJ180716.shtml'),
(2, '比利时', '英格兰', '2018-07-14', '三四名决赛', '比利时', 'http://worldcup.cctv.com/2018/07/15/VIDEGbRCZwFPSGGsWDLcFtmN180715.shtml'),
(3, '克罗地亚', '英格兰', '2018-07-12', '半决赛', '克罗地亚', 'http://worldcup.cctv.com/2018/07/12/VIDEnArO92YbSPW7E9d1Gv2B180712.shtml'),
(4, '法国', '比利时', '2018-07-11', '半决赛', '法国', 'http://worldcup.cctv.com/2018/07/11/VIDENCSHeQkMQ4lvY5ecVhxl180711.shtml'),
(5, '俄罗斯', '克罗地亚', '2018-07-08', '1/4决赛', '克罗地亚', 'http://worldcup.cctv.com/2018/07/08/VIDEnv9xZTUhs2AMX3vf6Pyc180708.shtml'),
(6, '瑞典', '英格兰', '2018-07-07', '1/4决赛', '英格兰', 'http://worldcup.cctv.com/2018/07/08/VIDEhpRPOrY2AWUErV8iu5Gn180708.shtml'),
(7, '巴西', '比利时', '2018-07-07', '1/4决赛', '比利时', 'http://worldcup.cctv.com/2018/07/07/VIDEJlq1Ja6RouQgb5I75rA3180707.shtml'),
(8, '乌拉圭', '法国', '2018-07-06', '1/4决赛', '法国', 'http://worldcup.cctv.com/2018/07/07/VIDEtPesd1No8u5LUILKs4hQ180707.shtml');

-- --------------------------------------------------------

--
-- 表的结构 `wc_gamble_record`
--

CREATE TABLE `wc_gamble_record` (
  `gid` int(255) NOT NULL COMMENT '赌球编号',
  `pname` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '会员昵称',
  `gcountry` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '所赌国家',
  `gmatch_id` int(255) NOT NULL COMMENT '所赌比赛编号'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='赌球记录' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_gamble_record`
--

INSERT INTO `wc_gamble_record` (`gid`, `pname`, `gcountry`, `gmatch_id`) VALUES
(1, '刘星', '法国', 1),
(2, '刘星', '英格兰', 2),
(3, '刘星', '克罗地亚', 3),
(4, '夏雪', '法国', 1),
(5, '夏雪', '法国', 4),
(6, '夏雨', '比利时', 2),
(7, '夏雨', '克罗地亚', 3),
(8, '夏雨', '瑞典', 6),
(9, '刘梅', '克罗地亚', 1),
(10, '夏东海', '克罗地亚', 1),
(11, '夏东海', '比利时', 2),
(12, '夏东海', '俄罗斯', 5),
(13, '夏东海', '巴西', 7);

-- --------------------------------------------------------

--
-- 表的结构 `wc_member_info`
--

CREATE TABLE `wc_member_info` (
  `username` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '用户昵称',
  `password` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '用户密码',
  `grade` int(100) NOT NULL COMMENT '等级',
  `memsex` bit(1) NOT NULL DEFAULT b'1' COMMENT '性别(0为女，1为男)',
  `memage` int(100) NOT NULL COMMENT '年龄',
  `memphonenumber` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '电话联系方式'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='用户信息' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_member_info`
--

INSERT INTO `wc_member_info` (`username`, `password`, `grade`, `memsex`, `memage`, `memphonenumber`) VALUES
('刘星', 'liuxing', 4, b'1', 23, '16273819262'),
('刘梅', 'liumei', 3, b'0', 44, '16283926700'),
('夏东海', 'xiadonghai', 3, b'1', 45, '13372811087'),
('夏雨', 'xiayu', 5, b'1', 16, '15278826390'),
('夏雪', 'xiaxue', 2, b'0', 25, '16273938261');

-- --------------------------------------------------------

--
-- 表的结构 `wc_player`
--

CREATE TABLE `wc_player` (
  `Player_country` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '球员国家',
  `Player_number` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '球员编号',
  `identity` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '球员身份（前锋、后卫等）',
  `Player_name` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '球员姓名',
  `Player_age` int(100) NOT NULL COMMENT '球员年龄'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='球员信息' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_player`
--

INSERT INTO `wc_player` (`Player_country`, `Player_number`, `identity`, `Player_name`, `Player_age`) VALUES
('埃及', '11', '前锋', '萨拉赫', 26),
('巴西', '10', '前锋', '内马尔', 26),
('巴西', '14', '中场', '库蒂尼奥', 26),
('比利时', '10', '前锋', '阿扎尔', 27),
('比利时', '17', '中场', '德布劳内', 27),
('法国', '29', '前锋', '姆巴佩', 20),
('法国', '7', '前锋', '格列兹曼', 27),
('英格兰', '10', '前锋', '凯恩', 25),
('葡萄牙', '7', '前锋', 'C罗', 33),
('阿根廷', '10', '前锋', '梅西', 31);

-- --------------------------------------------------------

--
-- 表的结构 `wc_player_like`
--

CREATE TABLE `wc_player_like` (
  `pname` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '会员昵称',
  `player_name` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '喜欢的球员的名字',
  `player_country` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '球员所属国家'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='喜欢球员' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_player_like`
--

INSERT INTO `wc_player_like` (`pname`, `player_name`, `player_country`) VALUES
('刘星', 'C罗', '葡萄牙'),
('刘梅', '格列兹曼', '法国'),
('夏东海', '萨拉赫', '埃及'),
('夏雨', '内马尔', '巴西'),
('夏雪', '梅西', '阿根廷');

-- --------------------------------------------------------

--
-- 表的结构 `wc_referee`
--

CREATE TABLE `wc_referee` (
  `rname` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '裁判姓名',
  `rcountry` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '裁判所属国家'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='裁判信息' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `wc_referee`
--

INSERT INTO `wc_referee` (`rname`, `rcountry`) VALUES
('凯珀斯', '荷兰'),
('卡基尔', '土耳其'),
('卡拉肖夫', '俄罗斯'),
('图尔平', '法国'),
('布雷赫', '德国'),
('拉奥斯', '西班牙'),
('斯科米纳', '斯洛文尼亚'),
('米洛拉德-马季奇', '塞尔维亚'),
('罗基', '意大利'),
('马齐尼亚克', '波兰');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `wc_country`
--
ALTER TABLE `wc_country`
  ADD PRIMARY KEY (`country_name`);

--
-- Indexes for table `wc_country_like`
--
ALTER TABLE `wc_country_like`
  ADD PRIMARY KEY (`cname`,`lcountry`),
  ADD KEY `fk10` (`lcountry`);

--
-- Indexes for table `wc_football_match`
--
ALTER TABLE `wc_football_match`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `fk1` (`country1`),
  ADD KEY `fk2` (`country2`),
  ADD KEY `mresult` (`mresult`);

--
-- Indexes for table `wc_gamble_record`
--
ALTER TABLE `wc_gamble_record`
  ADD PRIMARY KEY (`gid`,`pname`),
  ADD KEY `fk3` (`pname`),
  ADD KEY `fk4` (`gcountry`),
  ADD KEY `fk5` (`gmatch_id`);

--
-- Indexes for table `wc_member_info`
--
ALTER TABLE `wc_member_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wc_player`
--
ALTER TABLE `wc_player`
  ADD PRIMARY KEY (`Player_country`,`Player_number`);

--
-- Indexes for table `wc_player_like`
--
ALTER TABLE `wc_player_like`
  ADD PRIMARY KEY (`pname`,`player_name`,`player_country`),
  ADD KEY `fk7` (`player_country`);

--
-- Indexes for table `wc_referee`
--
ALTER TABLE `wc_referee`
  ADD PRIMARY KEY (`rname`,`rcountry`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `wc_football_match`
--
ALTER TABLE `wc_football_match`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT COMMENT '比赛编号', AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `wc_gamble_record`
--
ALTER TABLE `wc_gamble_record`
  MODIFY `gid` int(255) NOT NULL AUTO_INCREMENT COMMENT '赌球编号', AUTO_INCREMENT=14;
--
-- 限制导出的表
--

--
-- 限制表 `wc_country_like`
--
ALTER TABLE `wc_country_like`
  ADD CONSTRAINT `wc_country_like_ibfk_1` FOREIGN KEY (`cname`) REFERENCES `wc_member_info` (`username`),
  ADD CONSTRAINT `wc_country_like_ibfk_2` FOREIGN KEY (`lcountry`) REFERENCES `wc_country` (`country_name`);

--
-- 限制表 `wc_football_match`
--
ALTER TABLE `wc_football_match`
  ADD CONSTRAINT `wc_football_match_ibfk_1` FOREIGN KEY (`country1`) REFERENCES `wc_country` (`country_name`),
  ADD CONSTRAINT `wc_football_match_ibfk_2` FOREIGN KEY (`country2`) REFERENCES `wc_country` (`country_name`),
  ADD CONSTRAINT `wc_football_match_ibfk_3` FOREIGN KEY (`mresult`) REFERENCES `wc_country` (`country_name`);

--
-- 限制表 `wc_gamble_record`
--
ALTER TABLE `wc_gamble_record`
  ADD CONSTRAINT `wc_gamble_record_ibfk_1` FOREIGN KEY (`pname`) REFERENCES `wc_member_info` (`username`),
  ADD CONSTRAINT `wc_gamble_record_ibfk_2` FOREIGN KEY (`gmatch_id`) REFERENCES `wc_football_match` (`mid`),
  ADD CONSTRAINT `wc_gamble_record_ibfk_3` FOREIGN KEY (`gcountry`) REFERENCES `wc_country` (`country_name`);

--
-- 限制表 `wc_player_like`
--
ALTER TABLE `wc_player_like`
  ADD CONSTRAINT `wc_player_like_ibfk_1` FOREIGN KEY (`pname`) REFERENCES `wc_member_info` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
