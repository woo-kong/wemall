
--
-- Database: `wemall`
--

-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_admin`
--

CREATE TABLE IF NOT EXISTS `dbprefix_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `dbprefix_admin`
--


-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_goods`
--

CREATE TABLE IF NOT EXISTS `dbprefix_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `old_price` text NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `status` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `dbprefix_goods`
--


-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_info`
--

CREATE TABLE IF NOT EXISTS `dbprefix_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `gonggao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `dbprefix_info`
--

INSERT INTO `dbprefix_info` (`id`, `title`, `gonggao`) VALUES
(1, 'wemall', '欢迎来到wemall');

-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_mail`
--

CREATE TABLE IF NOT EXISTS `dbprefix_mail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `smtp` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `on` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `dbprefix_mail`
--


-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_menu`
--

CREATE TABLE IF NOT EXISTS `dbprefix_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `dbprefix_menu`
--


-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_orders`
--

CREATE TABLE IF NOT EXISTS `dbprefix_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `orderid` text NOT NULL,
  `totalprice` text NOT NULL,
  `pay_status` text NOT NULL,
  `note` text NOT NULL,
  `orders_status` text NOT NULL,
  `print_status` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `dbprefix_orders`
--


-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_ordersinfo`
--

CREATE TABLE IF NOT EXISTS `dbprefix_ordersinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orders_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` text NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `dbprefix_ordersinfo`
--


-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_theme`
--

CREATE TABLE IF NOT EXISTS `dbprefix_theme` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `theme` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `dbprefix_theme`
--

INSERT INTO `dbprefix_theme` (`id`, `theme`) VALUES
(1, 'default');

-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_users`
--

CREATE TABLE IF NOT EXISTS `dbprefix_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wx_id` text NOT NULL,
  `username` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `dbprefix_users`
--


-- --------------------------------------------------------

--
-- 表的结构 `dbprefix_weixin`
--

CREATE TABLE IF NOT EXISTS `dbprefix_weixin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `picurl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `dbprefix_weixin`
--

INSERT INTO `dbprefix_weixin` (`id`, `title`, `description`, `picurl`) VALUES
(1, '欢迎来到微信商城', '欢迎来到微信商城，关注微信号:iwemall', '538d80973f66e.jpg');

