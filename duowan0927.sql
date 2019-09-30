/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50725
Source Host           : 127.0.0.1:3306
Source Database       : duowan

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-09-27 17:30:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bear_admin_groups
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_groups`;
CREATE TABLE `bear_admin_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '角色名称',
  `description` varchar(200) DEFAULT '' COMMENT '角色描述',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '默认为1启用，2冻结',
  `rules` varchar(2000) NOT NULL DEFAULT '' COMMENT '权限id集合',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';

-- ----------------------------
-- Records of bear_admin_groups
-- ----------------------------
INSERT INTO `bear_admin_groups` VALUES ('1', '管理员', '管理员角色', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,26,27,28,29,30,31,32,33,34,21,22,23,25,24,35,36,44,37,38,39,40,41,43,42,45,46,47,48,49,50,51,52,53,54');
INSERT INTO `bear_admin_groups` VALUES ('4', '客服', '沟通', '1', '1,2,44');

-- ----------------------------
-- Table structure for bear_admin_group_access
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_group_access`;
CREATE TABLE `bear_admin_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='角色用户关联表';

-- ----------------------------
-- Records of bear_admin_group_access
-- ----------------------------
INSERT INTO `bear_admin_group_access` VALUES ('1', '1');
INSERT INTO `bear_admin_group_access` VALUES ('2', '1');

-- ----------------------------
-- Table structure for bear_admin_logs
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_logs`;
CREATE TABLE `bear_admin_logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL COMMENT '用户id',
  `resource_id` int(11) NOT NULL DEFAULT '0' COMMENT '资源id，如果是0证明是添加？，此字段不设置为无符号',
  `title` varchar(255) NOT NULL COMMENT '日志标题',
  `log_type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1get，2post，3put，4deldet',
  `log_url` varchar(255) NOT NULL COMMENT '访问url',
  `log_ip` bigint(15) NOT NULL COMMENT '操作ip',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，保留字段',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COMMENT='后台用户操作日志表';

-- ----------------------------
-- Records of bear_admin_logs
-- ----------------------------
INSERT INTO `bear_admin_logs` VALUES ('1', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569225947');
INSERT INTO `bear_admin_logs` VALUES ('2', '1', '-1', '添加角色', '2', 'admin/admin_group/add.html', '2130706433', '1', '1569226019');
INSERT INTO `bear_admin_logs` VALUES ('3', '1', '0', '退出', '2', 'admin/auth/logout.html', '2130706433', '1', '1569226056');
INSERT INTO `bear_admin_logs` VALUES ('4', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569226139');
INSERT INTO `bear_admin_logs` VALUES ('5', '1', '-1', '个人资料', '2', 'admin/admin_user/profile.html', '2130706433', '1', '1569227406');
INSERT INTO `bear_admin_logs` VALUES ('6', '1', '39', '删除菜单', '2', 'admin/admin_menu/del.html', '2130706433', '1', '1569227530');
INSERT INTO `bear_admin_logs` VALUES ('7', '1', '39', '删除菜单', '2', 'admin/admin_menu/del.html', '2130706433', '1', '1569227536');
INSERT INTO `bear_admin_logs` VALUES ('8', '1', '34', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569227543');
INSERT INTO `bear_admin_logs` VALUES ('9', '1', '40', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569227578');
INSERT INTO `bear_admin_logs` VALUES ('10', '1', '20', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569227587');
INSERT INTO `bear_admin_logs` VALUES ('11', '1', '29', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569227599');
INSERT INTO `bear_admin_logs` VALUES ('12', '1', '1', '修改设置', '2', 'admin/sysconfig/edit.html', '2130706433', '1', '1569227640');
INSERT INTO `bear_admin_logs` VALUES ('13', '1', '1', '修改设置', '2', 'admin/sysconfig/edit.html', '2130706433', '1', '1569227644');
INSERT INTO `bear_admin_logs` VALUES ('14', '1', '1', '修改设置', '2', 'admin/sysconfig/edit.html', '2130706433', '1', '1569227650');
INSERT INTO `bear_admin_logs` VALUES ('15', '1', '1', '修改设置', '2', 'admin/sysconfig/edit.html', '2130706433', '1', '1569227657');
INSERT INTO `bear_admin_logs` VALUES ('16', '1', '1', '修改设置', '2', 'admin/sysconfig/edit.html', '2130706433', '1', '1569227663');
INSERT INTO `bear_admin_logs` VALUES ('17', '1', '1', '删除设置', '2', 'admin/sysconfig/del.html', '2130706433', '1', '1569227679');
INSERT INTO `bear_admin_logs` VALUES ('18', '1', '54', '删除菜单', '2', 'admin/admin_menu/del.html', '2130706433', '1', '1569227994');
INSERT INTO `bear_admin_logs` VALUES ('19', '1', '53', '删除菜单', '2', 'admin/admin_menu/del.html', '2130706433', '1', '1569227997');
INSERT INTO `bear_admin_logs` VALUES ('20', '1', '52', '删除菜单', '2', 'admin/admin_menu/del.html', '2130706433', '1', '1569227999');
INSERT INTO `bear_admin_logs` VALUES ('21', '1', '51', '删除菜单', '2', 'admin/admin_menu/del.html', '2130706433', '1', '1569228002');
INSERT INTO `bear_admin_logs` VALUES ('22', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569465948');
INSERT INTO `bear_admin_logs` VALUES ('23', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569465970');
INSERT INTO `bear_admin_logs` VALUES ('24', '1', '0', '退出', '2', 'admin/auth/logout.html', '2130706433', '1', '1569465974');
INSERT INTO `bear_admin_logs` VALUES ('25', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569466053');
INSERT INTO `bear_admin_logs` VALUES ('26', '1', '-1', '个人资料', '2', 'admin/admin_user/profile.html', '2130706433', '1', '1569466072');
INSERT INTO `bear_admin_logs` VALUES ('27', '1', '-1', '添加角色', '2', 'admin/admin_group/add.html', '2130706433', '1', '1569466102');
INSERT INTO `bear_admin_logs` VALUES ('28', '1', '-1', '添加用户', '2', 'admin/admin_user/add.html', '2130706433', '1', '1569466145');
INSERT INTO `bear_admin_logs` VALUES ('29', '1', '0', '退出', '2', 'admin/auth/logout.html', '2130706433', '1', '1569466158');
INSERT INTO `bear_admin_logs` VALUES ('30', '2', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569466167');
INSERT INTO `bear_admin_logs` VALUES ('31', '2', '2', '删除角色', '2', 'admin/admin_group/del.html', '2130706433', '1', '1569466189');
INSERT INTO `bear_admin_logs` VALUES ('32', '2', '-1', '添加角色', '2', 'admin/admin_group/add.html', '2130706433', '1', '1569466201');
INSERT INTO `bear_admin_logs` VALUES ('33', '2', '-1', '添加用户', '2', 'admin/admin_user/add.html', '2130706433', '1', '1569466215');
INSERT INTO `bear_admin_logs` VALUES ('34', '2', '-1', '添加用户', '2', 'admin/admin_user/add.html', '2130706433', '1', '1569466225');
INSERT INTO `bear_admin_logs` VALUES ('35', '2', '3', '删除用户', '2', 'admin/admin_user/del.html', '2130706433', '1', '1569466239');
INSERT INTO `bear_admin_logs` VALUES ('36', '2', '2', '删除用户', '2', 'admin/admin_user/del.html', '2130706433', '1', '1569466242');
INSERT INTO `bear_admin_logs` VALUES ('37', '2', '3', '删除角色', '2', 'admin/admin_group/del.html', '2130706433', '1', '1569466246');
INSERT INTO `bear_admin_logs` VALUES ('38', '2', '0', '退出', '2', 'admin/auth/logout.html', '2130706433', '1', '1569466313');
INSERT INTO `bear_admin_logs` VALUES ('39', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569466451');
INSERT INTO `bear_admin_logs` VALUES ('40', '1', '-1', '个人资料', '2', 'admin/admin_user/profile.html', '2130706433', '1', '1569466464');
INSERT INTO `bear_admin_logs` VALUES ('41', '1', '0', '退出', '2', 'admin/auth/logout.html', '2130706433', '1', '1569466470');
INSERT INTO `bear_admin_logs` VALUES ('42', '1', '0', '登录', '2', 'admin/auth/login.html', '2130706433', '1', '1569466482');
INSERT INTO `bear_admin_logs` VALUES ('43', '1', '-1', '添加角色', '2', 'admin/admin_group/add.html', '2130706433', '1', '1569568214');
INSERT INTO `bear_admin_logs` VALUES ('44', '1', '11', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569568295');
INSERT INTO `bear_admin_logs` VALUES ('45', '1', '11', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569568463');
INSERT INTO `bear_admin_logs` VALUES ('46', '1', '3', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569568656');
INSERT INTO `bear_admin_logs` VALUES ('47', '1', '3', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569568680');
INSERT INTO `bear_admin_logs` VALUES ('48', '1', '45', '修改菜单', '2', 'admin/admin_menu/edit.html', '2130706433', '1', '1569568692');
INSERT INTO `bear_admin_logs` VALUES ('49', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1569568911');
INSERT INTO `bear_admin_logs` VALUES ('50', '1', '51', '删除菜单', '2', 'admin/admin_menu/del.html', '2130706433', '1', '1569569165');
INSERT INTO `bear_admin_logs` VALUES ('51', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1569569265');
INSERT INTO `bear_admin_logs` VALUES ('52', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1569569318');
INSERT INTO `bear_admin_logs` VALUES ('53', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1569569348');
INSERT INTO `bear_admin_logs` VALUES ('54', '1', '-1', '添加菜单', '2', 'admin/admin_menu/add.html', '2130706433', '1', '1569569462');

-- ----------------------------
-- Table structure for bear_admin_log_datas
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_log_datas`;
CREATE TABLE `bear_admin_log_datas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '日志id',
  `data` longtext NOT NULL COMMENT '日志内容',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，保留字段',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COMMENT='后台用户操作日志数据表';

-- ----------------------------
-- Records of bear_admin_log_datas
-- ----------------------------
INSERT INTO `bear_admin_log_datas` VALUES ('1', '1', 'c261be53MZHzvDP9qyy3PN7u9bjGZzKole7jXksISbBPLIWJnoQGLv3Jb+QatY8KjX7zJ07DpqrsR8yuxL08KAPKx8T+e1PTBuSDoelpJYLzWLZt4An06Y0zw/Ys0R6c8+HQbS8JJedLVj78gdBs80jvQXA6qjd16spcN0oKqpZP+facLA2VG98hcnL2bH80FB6TOUa7mdZ3FmS37XHTWrMs557e5Ky/TByJeLjUOJVy/65vTdK/unzj/5/yVEbt8Zc3A3EHOEDe0WnwfupJGjyUN+giQs4cY4TkPHdtUF1U/JyrbStPfbGBSsSijrGN4Ehl72Dz0lv7rT39R1gLAyekdZn83vwdhcs8Xyu+IA9A7m0FLsia/bZ2gyCJimvCtwe4cagacZ81hGL1NAZqhIRPI3Ieci38+u99w+0E1Hhs7QFgeeS39qgOmv00tooToovBUY+GUpL0', '1', '1569225948', '1569225948', null);
INSERT INTO `bear_admin_log_datas` VALUES ('2', '2', 'b3d67f761G/suv8sj7uz4FF4EKvGaN59eY+RJw9jMczcctX/Cemk4CVlNzqQ1UQoWTjHecoIoqUkbacRYHTN6tOc0ToURT8MrjvdE9l5zMXmSXfPP0iZLpLwS/EE6ujhyhxWN9OcbjsO8wPk0qjVbCwc3fvSswYFIjCckMKBQ3j/O7UoB0+CH+sCqYLa1Kq3ASw3sRhNCAhlBJJebIb2sfVAY6gjI0eofE0l6A', '1', '1569226019', '1569226019', null);
INSERT INTO `bear_admin_log_datas` VALUES ('3', '3', 'fd6eaf712zglYolkAT6KWPBlhSxNTq4nUac6WR4qx2jjDW7KW74', '1', '1569226056', '1569226056', null);
INSERT INTO `bear_admin_log_datas` VALUES ('4', '4', '70cdde10W3Mk1qVzWhaEVexdvY/4odZL5p2x3U0O6CyM2Cp4QkrwXFrRwsX0jTHSC55n3ZGId/KyPOOdU4FWrWSyuiDuBfb9gOTjs2igpFbtd6qi2ETid1lgZZK6MtPS1b8+UWVlZiUMMba3ELp44Y0JxD3LLpcLGEYiZl/sCVk5s4MljK3Qp4l3ViA5dYijN+g/uRH+SFu2xZCGwc0FPzTNQ0HBAUIAz5YF4IP3s1hHIFOcTZIQF21PQWIljO+WdkX/gl+jc6H2pqHEj7S42mcF60btQbTmoCWSmpNWBC7Jgh+o1ZYO1hQQn9Yqx5OCuU13RD0lwyr4jHcZzdWeW37WbFgp6Gml+tWEbRxo3uZsFZHPu9xkP4qnh2I9JPKsAf5kBCk3at38tFLtN8SvXWOnUkbdYLnZDg95VdRV2R3G1KKb+CicL+MzpPof4NatT6gi9fBcsRM0', '1', '1569226139', '1569226139', null);
INSERT INTO `bear_admin_log_datas` VALUES ('5', '5', '0ff70e00cbwxezbGzYPeckfgcCseS2tljrk/JyGYm6wRC1H04lzD8nJruQt9y8cYdUHDQua789wBXbzolSlwMOM7xYLKw9JxY4D1lYkOEHoBV9x3Amm/BCdTSXEeN11gi/uHTtHB07uAre41x/TsRegAnBQsxhJ0v6VLLuE9', '1', '1569227406', '1569227406', null);
INSERT INTO `bear_admin_log_datas` VALUES ('6', '6', '115c445fHLuAffPdZObYTOI94LgU0T9UUA7LsKTDi52ejDk63/b64nAH6cHrIdEaRoLAWbHH9bE', '1', '1569227530', '1569227530', null);
INSERT INTO `bear_admin_log_datas` VALUES ('7', '7', 'fc9cdbaayki5qRUUKdP7W5p4rzbBB1TIgYzmm4BstFMLajj5l5HG4IkaA5SmGAbocYziGLtfbUQ', '1', '1569227536', '1569227536', null);
INSERT INTO `bear_admin_log_datas` VALUES ('8', '8', 'ef3d84e1JkBslvfbXeVRw/Lj8ZK+FOn9pgTPC2eR5NOrpvnTUWjVhYSs+bO4oodpQSAAZZN8RPHW7g92gMdTjsaJjXTo/kZmRP28hhvHJLXvUK3PBuU9eukRuQv1qauPG8N2DVDqK195Ha+6fL63Iz1HSkblIyJLVdtdV82pv/YWn+wQut9ehk8QIbmhmBVMOXpNsR6+yqWq2gg1ooNSlV9rxx3lrOs+HpJ00fwynS/iqY8RFtoBtH4Du2CoYcznspDacQtj37l34rjOyeGEzICEghTNYylkyxFRsuvbyn1EyjRQIeMIU/tOwzsI0dnhuby2gSESkRXmxS3B8DCCz8KAOsMhYig8M3sC/25Qlp0bfCWp05/oDBSP5Nry2Uvvyml0fQ7qWZE', '1', '1569227543', '1569227543', null);
INSERT INTO `bear_admin_log_datas` VALUES ('9', '9', '9bb57bc5DDKEXQvGLMIpqcxwyjcbK7EKlzRpjtbIVoxHElmMciJ7syOXy3KdGQ06Vy+uamGfy79izYLrmYjfHNRMX/+sdGH2EX7gw5b/rXXo3O1ARkHgvtLlWksR77jpXU3BanKHOCP63IuZQJt02Aiqee5KI+B4elHl+ml2J54Q7x3ihAZm3I5t79b8uPHc4j3JbJFV1VOhbnpjt57Rtv4eusWsD2hNnXpQaXzeX8U16CJk8y1RvwJbBCYbUSrBm1rOrF5PQA6hR3fXn21lNcpQ9OG6E4JnlPQ9ekn8uF2h704sFrIucFkBcptan2g5b9YXPKFyLN4BAFxbQF44fDuTDXU+9MeLkrTCVrhhIeEhE119hu77WFwDXLNo/HMbHXDfMd7Gi7yRR2O7Rnqjr6U', '1', '1569227578', '1569227578', null);
INSERT INTO `bear_admin_log_datas` VALUES ('10', '10', 'd12edec9B+eCLvnQ/FpUdiC0GJ7uyigtV51mFb+ZocyYHB7/SlYXFJwipN1JdULSd8EyEu2rsboqIkrsienec9VcubyU/3e6pd9erW/92IaXv5u/OB74xsZWEJfE/aPyM118v2rqr0VVsze+MAii9Fz1cn24n6rwMqTIexPtNv4oBA0NT9YhtZ9Pn7njcNd8pDDHRV9Xv4n7Hd6EMxnATwczDtfXd9jg3K4QTKhX3AdSaDyGOEK698K9JY5982Ei9yCW4SDkiGKrTw/5uvkHPqtaIBMQ5+VwTrU27PGhFlNO7omZSOLgQp9aMf32sgmw3zlxKR2GIfmhnDh6+TxXksqRg8gf//5MCbpq/OR0vv+3OCFXCu/qtOKEY11/s+Zj6mWpjWLtUcXT2KOs+rsjqPK7o7s1+2E', '1', '1569227587', '1569227587', null);
INSERT INTO `bear_admin_log_datas` VALUES ('11', '11', '03d17e97udSwr08EB+bqDiwEC0Xt3kI6ClEpkBwAZIuWqt4YtO7Kt/s19OaZbFNHE8xIZoIoUvOhMcsc8+4nGJXvtO9lak6D/2vYcCxqTXDUxp7i4skCrQy3+0JasT7OOS6wTOhw3kXhtjJr9bTHjKhsiUXDHz8mucvkgtjtxTaUG7y58D6sayXPSTgQ9fOm2VEOj80OHmyQ1DbkOmgM6PJqF+Z3Zx4Orx4Qwpj1C/fKYwi/iDDYTf/5Jc3DIqNibnq0P/PipuqpoBd/icFg5J2YtduGDIOPtNTbOMuHWQDBQpOD/h7zcgxvuE6IpYZEgrUy1t69k/ZZD8s2T48LOoCHN6xfKLjlvEZuRRcag+N9epF4V8nHTiYpR9hGJzc0sIpQBWA6ubA5d4JKtrrXhw', '1', '1569227599', '1569227599', null);
INSERT INTO `bear_admin_log_datas` VALUES ('12', '12', '3d6b2e88S8/OI9ye/eKXXIiF8raDkZsmuTqbhJRghqOxU4bzPSjny3NSEKHY19WsUkx5u9/OcEjTX1fXaxhOIuqrhFoOBCfLHf3+iI36j8nplyBH+gqdVm0tzJ4xaJwFqFstrkyehctqiquh6H4YBzAgnLdHlD4CZ0fG3iIRk31JizpfBcUuPppgKx9GGG1pu9cWidkdyX6S6myrCgMebzbGQrs8RCMoK+An+lKer5Rc3PYQVtjVfAOvD1/IU2Kfx8TOhMDmVKvbybwZOBmsFTu6roYbvZ1vJxkygKXZWnRG/FFfGgJ7zldfQdjx3CbjS7lOKMDUFjZRrzcJUV4', '1', '1569227640', '1569227640', null);
INSERT INTO `bear_admin_log_datas` VALUES ('13', '13', 'dcdcb940RChTHVfv8twbGDTkblUL6J+g5GTEU+QMcepqS3t6b9dSKSyZOComl41UjFF0mEDdGJdNist8vrM8PMFJ4XJrDY561Dqq7z8hK/qWuiw0k4NIjoJbcUXn4S3YRSE8eT590utvxrkVsdqkdtB6OfvzG8QdaooVPPSjSN4u0pDpQhyBgOv+OiNy9r/Bc4YOYSuKiyZR6FmfO/Baemh+25AAL05ZbEhfevQFx18nbzBE34CzvEOWlL/5+A1S/rEJXyxBgJAb2U1sGn3G9solzo7B2VTxAKw5OsRdWFD7uxZAigQvBBbwVJh0nwKTj4AkGG3f5FRbPPUUq0Y', '1', '1569227644', '1569227644', null);
INSERT INTO `bear_admin_log_datas` VALUES ('14', '14', '2188d5f7Z38uyZH5DA2vOmy7mphUCnxyEwM4MvmtR/6rmBxRJ+BflNIYWbBC4CUpUBvzeApJ4QSSqF8XqFT58FxjwSZnPSybYipBlEUsfkos9ghFXyu2jwjP+XTjSKfPjiqqrPRD7hGcXFDblObDuhOt2IlPNc1PI/onkWgqiC8FYSU1OfJPfF0Nct777M9ZvPRM19WMUaqt5derfaHPCxReu2I8u6b47ZgjlgqLnTap2B8OCIVgTxX9QnZrw1Pli9C9KTaVGn0k2/OM9DkVuNBoOfOwWBi0ADL5Aqjr/xmrNIoV0mNmqg92naIOcfnH2f96dBwhDpcoy4VqSEipcnQ', '1', '1569227650', '1569227650', null);
INSERT INTO `bear_admin_log_datas` VALUES ('15', '15', '942dfb9as9+7BMv4rCn0+Iemo18ppcjJWtSFjhHDLP0H8qpv2jULdWCue3kttA50ZvLTOrX7AC8iTD9YBip/qHSAbWgK8QsnhiIbOlyE0JV+eh2CRrWc8NbvEoHlNSIjAmdZa2O+34+ClKQeN6t6K7oF5InwHNflO/Cy/o4eualtq0RcnlNMj9wrumh2kgdagQqI5pEc6JxC5+qmQe+hCX9nKQqmaNWQ/LstDFpswZGY7MmSXrsGPfXBpcJfDr0+0mrXfOONE3lcPfKJekV/+ihulfMrAF/ZF39IRghujrRqXlt44R+idouHu5qOBf7BaHWLLQ', '1', '1569227657', '1569227657', null);
INSERT INTO `bear_admin_log_datas` VALUES ('16', '16', 'c1f940dc6vjclk0S0ELRsbDzWAFXaOAiTIhGn1mLjLf+CC0Jyu6NKsf7Zz3XdKOd2NsmC4QdGmI7z0dsjcshIr65m7mhfhJ/Uxq/4jlNtCwRRLnNtBQEWYBEn6BSHPX9WKK/vvrGI3sUxJvRYgCRyfbuGwsm7X5ZLLkaBFz8aAjL8L7zyxUewdH362jXmAAcOULT5Clg5767BrGJe2fmmTHxu90zNNpvHBdYtIV0tlzVG0L12zjLkq6mGHUylGvZoTZUNmaBVO+lzm/Jndw/aD0uOstTSPSuHOTPKJaxCoUKUPcqc8DJHaRP4Imv8Y753YVPwL9Lf5TRTcm+v2luz4o', '1', '1569227663', '1569227663', null);
INSERT INTO `bear_admin_log_datas` VALUES ('17', '17', '2b039f50MyLtE+kAEC1Gyw+KtiNActPL1ScPLaPzDPm+VVEmvJmG2fycyU6dZjkOtw0byxwYig', '1', '1569227679', '1569227679', null);
INSERT INTO `bear_admin_log_datas` VALUES ('18', '18', 'e01e2dcfzbftxMYGUqSgIUNirNMH+M2vMKgwgvWecDnVijOxkkzVsirWo3IGzhYTl5BZOThwsvc', '1', '1569227994', '1569227994', null);
INSERT INTO `bear_admin_log_datas` VALUES ('19', '19', '5cb69014Q6U5hGzM1nsZiyFV8hdnXYMSp8SkSqWWjx5CLiZHNW4UqJx+CkAc4ZxNfcpIi18ZQ5g', '1', '1569227997', '1569227997', null);
INSERT INTO `bear_admin_log_datas` VALUES ('20', '20', '712a2e18jooOGJa0AgCPD2Px6pGObc5CRg5P2Fs2MEm2JY21iKTsJ7tEXFRKVoVzGhkfXLwMsHI', '1', '1569227999', '1569227999', null);
INSERT INTO `bear_admin_log_datas` VALUES ('21', '21', '652b7d41DvgEbJQFnW1gO20ZmXdpmVCkbiAlnIja6gQDxfE2b3QcqyzTy/BSKfFTgjwo0IPtwIk', '1', '1569228002', '1569228002', null);
INSERT INTO `bear_admin_log_datas` VALUES ('22', '22', 'a3b94f58qpjqvB6+sj848UPA2vgYN158iVh9zNRmGYlFuhGPrlLKZFsJsR9GlPTRAuveecj3zN96crQVBW0tXfim1aso/OaJs7QM5d08EUCjqzzSy5YgVlw9EmLE25w4ar0zBotVe0NQOZ/lA3/InKfPQj6nx5K6muKwGX0O6TfWoL2blgjQtct1JcCvkKQo', '1', '1569465948', '1569465948', null);
INSERT INTO `bear_admin_log_datas` VALUES ('23', '23', 'ce93f868J6KKW2EONirBOHZtLjev4BBvmokcRdKtT0j3eEbcNY1bsfGHiWzDCGSOgYWGeugRdJ6Y4d8YRv0F6IR+nxtdnYByJ4o4zVrpIXpnbta7+WM1eiq17XNWu0FParutIVvBQxjeTqCdr3jpcPt/O2QyRMDp3vq0H3zRNZliIE4l5hnyVYMe0kC3xP0S', '1', '1569465970', '1569465970', null);
INSERT INTO `bear_admin_log_datas` VALUES ('24', '24', '01ab0d36ddfp60Yi2OhHFrAJlSCQMn0fc9k+J4RncPSC0i9GZbk', '1', '1569465974', '1569465974', null);
INSERT INTO `bear_admin_log_datas` VALUES ('25', '25', '52003681i14cRYzXBiZUyQpI/UIAXn2OgPetgAbk2ZQvdvQGs60TUnmAuVtTwjwthjtMij+ymWoOZx7eE+cCYNLPE9BtQio3WmbzsZuu5LI9FCsDOnBQ741+wkhfZntfP03u8nQzh8SXgW+24J003R/+zN/U+81Bs05PrA3VhdOPsKDjRsys4UV3F47nlhrM', '1', '1569466053', '1569466053', null);
INSERT INTO `bear_admin_log_datas` VALUES ('26', '26', 'd8787864FelYmqUO+6yPCTvSw0+XlUnGOeeQGK2cUxa5J3PJYieC3L6rfcCCB7rVaMDMvFCZRZ6qGCou4zn/l6k6ClGhWybBRB4qMw/osJa/tBaB/V/0vwUgDVZmC8kQqOucIfaRVkk6zxH5sGh+1oh4OsC93G2egSqY4vjkymD6qNttFkqAIUJ13sMmRrTOfFdAd/oS10vqiO0h6HXEMQg2RYSSwZvS+JGiLnm3ARIAsmGwB72mqDzkaxdU7fRA+VsHMhDkKi0W+u2dPHSARsZK7WERCynaDYsjVjPlqZQYDQ', '1', '1569466072', '1569466072', null);
INSERT INTO `bear_admin_log_datas` VALUES ('27', '27', 'ec10b4a7Azcnezg0ghsf+34XhO/lFqvAkeICT8WsOPqHxbdcBdkdOzSwoyBUvGaBCEUIFKfrkVpMFvZKlwJjzX7IMKs6l3Zjh/785bulXrMcKHtNsG6wPwMzuU8yDvdHEk2WHp8vg1ZAppdvgZfmWEE8sqg0TC2puHmlDwQEskINJAliQIrepn3ubaBt5O5U2wAduOvHkfl9Imtwl3QxU8rNDs+RH9o3uUiEniXB0hafhPg/AQ', '1', '1569466102', '1569466102', null);
INSERT INTO `bear_admin_log_datas` VALUES ('28', '28', '41150a2bDXk8TDh4npeFISfPVaoha8eTmSkE6jrDcUP95fK6L/UoAXWUjrH39AGmKUNw5Ama/OH5o3NgRN1r79TFXfARMbUpJQVlWORcQRQLOmFh0ifQeVGSzPOtcvtarGdYl36G/exI6ATHxOZxMnGbAUfFwaA2Qd+njn1BdfePHaAkLK8Z+kyMlrnQUHPoY+EclWsp3ueRATVu4MhSUeR9iHCK6VWtEQv5A9zOnuyI0WqF7MfqaOAOexPDesUEjXbP+gn9kHHhDKE4pxDCFtg6geB+2E5amNfSqcIGN/yIYQNNGrRW7WEpOw6JgiM7t/LU62i5t9eetbEZ00rxYZQXBuWdCB27MUryDWR8dUronRZrcwZw8RRN', '1', '1569466145', '1569466145', null);
INSERT INTO `bear_admin_log_datas` VALUES ('29', '29', '4163e023qL4LlggomTMtbEBj3SGx06vevtbi5k8fBhgA/rFosYc', '1', '1569466158', '1569466158', null);
INSERT INTO `bear_admin_log_datas` VALUES ('30', '30', '43190938gUW297jJVgndGdHacxIuEiNTb7fh623R+w+xAzxT5G5d2yFYtitrA1VQp/D2lxYchr3r5vn6DpUb4vIkkFu2aV75UPPCvg+F/OeF69DyLH19HbJU4nfj/OMjQz+zhuoviYQx8bYLmoAeh3gyFcoGpM3h/f4KZou4PLiEmoqJb9jjugH8YoMgwcA7KQ', '1', '1569466167', '1569466167', null);
INSERT INTO `bear_admin_log_datas` VALUES ('31', '31', '8fe7471bPkpXFLDLSsZ3Z7hxxVlZ8yzd53JjYqzkdb29Nau4Y4fjRUHgF2N2Es99Jn6VprRSWg', '1', '1569466189', '1569466189', null);
INSERT INTO `bear_admin_log_datas` VALUES ('32', '32', 'f754f4b8oR16/tXEF1CpLsij8WCixzwdqaDwmU408jWhzwesaNumIcOtta1Q+ZQ+nv+YBWzLfksiMVresizykWPe0D0avZHUeFzNU2iQSdAG69t6Klyz5AXQDDhSJXJrPo+P1iIn6D8yXboeYb5bTztX3gB4rGLum/iIvXXHs0MTN42B56xz5lLIMVGWz1kAcR8KuqCk9xkd/ETm+10+wKBZGy2jZyV2k1pVkEd/kCDKMhb/pw', '1', '1569466201', '1569466201', null);
INSERT INTO `bear_admin_log_datas` VALUES ('33', '33', 'ae086e53FF0gIeRxPrhzWUHUYl6sk/pUWBY8nL3cEBh2Cw19/iy24Dd+8pYJWgxyYCV7kHWIAQuHjs1YLiReyQWxh3ZvPymBrZR63hgttAhjAuqrYoi7+Lauid0daes9Uhr6YJVL/GPBoBTn2lx5VTCBV2bIO4viFZF00e6kqhNoN5XCZ0MCN5qXh1wNljtvMZfMyj6RgU4DRTuVD6iLFftpvAZJmg/f/jBafus0kW1r9sup56/6DHKuGQXzHpx7oKAuyfgGhr3W/vBiD/SzvGmGbPswjOLDLHRw7GZZ7ala2xanMr7US4n1TwsPFW9s9G0m9T7abTAt1wOaorbzcb/9Dkb5GA', '1', '1569466215', '1569466215', null);
INSERT INTO `bear_admin_log_datas` VALUES ('34', '34', '7680b102gzQ0UZPyfBNu6CQL4fSXq797Ecmd4itua+rdvfBal93WqEI9nnmyV59EYJALdV9Ou86SfzgcjG6AZywdB91XTCIhRFsgzeKf+jRIt+oWBvYjQqd0738jnsffTapOhbyHO1atFam8tJOpunCa69rexOLRQVoUKO/1qhdbhIxor+O1hRwTMYl6/NPcgU1wVEliw9A5pJGWIzBtq/GGeFIvpn4ofbJubsbTlzTV9dw0lk9kF5ZeE/aYw/ANmGuIQ3t+KUYdDNTQQ1f0SkFbQO/xoTx7MD3Wy5PBs6XJM0wIG1d4K5KwpWo9kPdPkHI+mjKd+wQMjfd4qifUfk/Iid0XZto/097d0kSVfg', '1', '1569466225', '1569466225', null);
INSERT INTO `bear_admin_log_datas` VALUES ('35', '35', '6ff3d172aTXw0JYaoPaI+8Dn0RWlMrbGKrfPX1fPQQ9v6/c0mB53eQdeaYDffl2qBnBfqpD3FA', '1', '1569466239', '1569466239', null);
INSERT INTO `bear_admin_log_datas` VALUES ('36', '36', '87a4ef79XUAfHho5wOXZkNzSJDvR2Sz+UH5HpC0DZgUHuTpb9OdUwXwBAXRQnQRExo5f2samog', '1', '1569466242', '1569466242', null);
INSERT INTO `bear_admin_log_datas` VALUES ('37', '37', 'b6c8eac3T74yTmj2ObrmfKjiF8YNFZZNZ+57xgb4z50X/n1WE7Z8srvqaZ76g4cWrTc2gvddQg', '1', '1569466246', '1569466246', null);
INSERT INTO `bear_admin_log_datas` VALUES ('38', '38', '8c0297fbOnqPk+ptGiy+K6mhzQPe1fCCNytz/UoQO/mT0aP+INU', '1', '1569466313', '1569466313', null);
INSERT INTO `bear_admin_log_datas` VALUES ('39', '39', 'bb8edee7HbIRnApWOe5ERHhmG7pkl4ey+yK9DTgnzMo2bDbf0WSx/B+DSnPexq35I62TKLGrJlF+SYK6uo7b5RCeKjYhv79Yy7eWQm9VYo5y+EtySk2VcwEHX+0iw2oTb6a5yKPB1z7xFTo2yQAY3bAsV0/uxYQ0QaiGY39NmCnRvwgO4i1r/sJ6KYfe6EnXprIk', '1', '1569466451', '1569466451', null);
INSERT INTO `bear_admin_log_datas` VALUES ('40', '40', '21d6bb73Z2iLiRoPpROWJS0d9zLgo3C9Y2oZ9uGNDTCMuSzxuvTAuZlCQSsu3Tn6ZYnjfRpVuV6LX3wy6SDWBEmi3Zap5VWaJ6Joa3wlw8NOA7sIFe3we7Yg8sOnE0Cgl4n+ptH+S4iI62SWHotUoRBYl9fxl29fwOR4DJiKQ4bgxYuq8cKxATmEYH+RLZiHWlkg8IwFkUkwD49vuacspHzM1ws5/7z7qYGVZ1D9DoPwX7wOJnIHcYqF6crwt/VKB6A/DUAIS58wUJG5A/rCu5GbVhqG1LhDOiiFlGRqQAiKJiBFow', '1', '1569466464', '1569466464', null);
INSERT INTO `bear_admin_log_datas` VALUES ('41', '41', 'e41b2abfoRLGWensrSm5zX2lZp/tKsmzJP1yvD74S3ioScM6Y1s', '1', '1569466470', '1569466470', null);
INSERT INTO `bear_admin_log_datas` VALUES ('42', '42', 'c39fd0be5JDJCWURHTwvcjb1xTq2jLRjQzNfAkwYt8XxbHwFJYxEQMepW5a7EnC2PQSczk2kajKwK8nrS9afRmN1NoHTsB7tap8Ts4XXVorKCcd1zxcoyUDFU9fvW746fx39PZsTcblDgnzfhQDBSQge9s8nhfvtg/SDsK8MzFy5xf0Ufnu+ZWJTMJwLw9o6BriM', '1', '1569466482', '1569466482', null);
INSERT INTO `bear_admin_log_datas` VALUES ('43', '43', '969303aeaoTyQxOykrbRB1xvouf0rSdAyGTpwhLfOUjXZwYFT4GaiJPkx6NgiApPBcf29c/BbtuTWykyczUg5ZU9lDoCz+nkmfhvZBy8bLc6cswgS0IkjZtGYnUuDj2yxumuHuddKXkpoRkwqYNDuIwhGuDx6W8UV4eP2NN1Z9cx8BKf0NnQ3Nd0VU/0jwdTEgfSGXoHOYnEY0iepgWYR3csUxST8Kb0JfA9', '1', '1569568214', '1569568214', null);
INSERT INTO `bear_admin_log_datas` VALUES ('44', '44', '91815c98BTdT6QncF2FUaDfZLeht64Q31rsQeAnEBWl29lnm+dkpCa1oxHdIDHG2/VmRomj+H86xsY8ffXHMBP63wjxtSRC/1QEWKiXoMOckv9ENkuCyHfpYEx0PDKsWEyOONu4VQH9PWRa3thjS4lrys8as/GuuV0+Kv6QoYUD/hVaDz4eYlvedRPCksDSgAZjQfeFwkDUqlqXIOkkSXSLzQwfGUxk/rDqHFVvaBVxOiSpc9pmWXR5xq+lPHdUt8ckPzqOMHoHAHYh+EvjgaGnkAQ/BaT/N1+GXcPSSwthhVfD7UUSRcvVvAlPQPS1ne9+Z/y3yWEUMvJrSd9kzOgMcEOiKZ42VKmVU2t4ih2hj5RX8XxtnqjO+CzAMVJvR8gTXrgMtniWd1XIufWGNCg', '1', '1569568296', '1569568296', null);
INSERT INTO `bear_admin_log_datas` VALUES ('45', '45', 'f1cf6d04MNIBqhTohIttgRrPb0vJIJIh5nqPqkCjkzresVGph0wHrsuWSQ9yg9SW7eCgeaRTgz0ZUDUuUb9QEUhIaLbTiANW2oJ8r/dL4t0mMNU5SDwm5y0Z2RSibUJz2T6/buyc556gg0SjAiFEt++4uVFVB9lpaBSNLLPsaILXyvugI0mrv/ICWk95bO2MtneeVNpzPax8EZvqqaRj61UuQ2Bt+44W5KeFW1Sa6GLnHbfdozh+X7lwFIvX7VaRXIvRs4h40Im8AcEFeRZtT1AsZQMoUtix6+hSHfHspz0l/tlBRzz0EvrNQkdkVBmidkeVwR3l4wBe4i90Lx0yxWXcRTlBp7Sf98OZyzjFZnWXcYL+67/zfRynIIFAd9OREtsWA4s/fd3/tkz4wyf7Jg', '1', '1569568463', '1569568463', null);
INSERT INTO `bear_admin_log_datas` VALUES ('46', '46', '08a43c06Ieq67BbZQEKRPqCgAvPdUSCKzE2MIfpoRgdfy47ycaRDo7HW39nhnTX4uLiqIrRz64rv+crsUF9e6YnKyJvEHdjE79wSsvUMzcifWd02PQJreeP4rPvEFIfzJtjTz0lPrlmIx4sGnqqOzAT1p5NLNBOe/lYm+VKNO+36wa0sQVHq8mUZN/Q9o1doAS3gkyaSIVJHgn2OK/F2HvqyaAFHtKS+YZ6Zwy3XSBrIJdf5pqFNZc0AaaM1Ot32+UMszwgEX+fWZ+fGaz4nB8bX3P2eb2kXGcpACKF9GEtfdp4r87SdkFDCc3ViQNIkX6xQlONpegqoL/nrNA8Cu27deqrRcZ4QrxbXDW3zavgBW0Cx9Ioa28xM1XKcYqZc0MgLx2sX9Ch0pKza4u6PuufHH6Q', '1', '1569568656', '1569568656', null);
INSERT INTO `bear_admin_log_datas` VALUES ('47', '47', '8053aa01wX3r7WOq5c6KlT730I1lrkeGMPSUH/edXXjPSBmq6NG3F+Zekq6tJacGmYoMAOGKB48UPdTlEjvNW82vSiCn8BcoYKcORUYut0gj8oS0l4N6ThZN0Kyc4LQUu1dCNdC1mEZODzleDgBwl94e2nncU8QNGC5FZ6YGsDkChz/LVl2v45R7pjI4Sa03EF1aJTvotfYeMuUvDyfdemsDdbosaONTpATxO1wE41uEGV7SfmRgDt+xMZt86cQkTsFw3XZzoeaPPUdZDyficFj0t5MjqR1DLOxyy7+7Tts0DgxfUKEEg02s4aZ/lxBJeto876/EzOIWt9mehgvRu1ArIBcxV5u0/bO5cbgF14UhEdGxIy3pHcDLzSUiyhgTLH1Uu49aMHLtmwzmo6o', '1', '1569568680', '1569568680', null);
INSERT INTO `bear_admin_log_datas` VALUES ('48', '48', '539c5b71YwDJGRpxPjMmZP8+xr7qFoXqSBSKTg76CPRJhH4Ynoi3qWyGuv0+t2uLW73cAlPvjJC9juzJBHDHHmr3NXYjLtnLfeT03eXvbpvx+jdcUf7fwNdLkM4gJpBg7y+sD+QsWXmsSdpboBazx8OfzbQKmlLvZSZjm7Z/0jb1RmiQs6F9pga3UacJMmaczwRzaRzcLgcfVIJvaXLMzXpsSMgq3U1IyEcT3lWc4IZOUWpzCCxi2Z478itiIM3W7U0mb3gvH5kZzYqg9RQu+vHmyoMI+CqYoC4UJiHN/2/iveEtgP4rMPFcjxWh30ulqmSNPOopbiDU5oRmhHlzBeWRoi8MbVnTCfGoHjmXNg2PxL02XNtfySFJJ5zvEhD2s1plJ3ZIESljvirmcSpgJQ', '1', '1569568692', '1569568692', null);
INSERT INTO `bear_admin_log_datas` VALUES ('49', '49', '80c6d845Oaj2VE8kAO+urQiMNhhjspdlj896m8U+/iGVKH74r7usLGiFrtolUiNeK1VuWA5NlxNsa6WAcbQRp5IZ9YiWfPhJBOsCGS3RLtXoHOmZ9I+kxpQSzsRGr/BQ8dzyk9eeFNbMEHrVlnX3r0N52/VcNdL5a9alw/2IdbUaNNdMm0cBxKeV8ftG+xWsX/Z+LeA4RsCzHd/t0zVoKqyH7kmRmQ3Pj6m55IpIEzt8nKdyNguUGekyaYkoZIvs/+BICn22PnCGBH3ZJgpg6/iOi+2YUFM9DTMEyyEqJF+eofCW26rMEH2ogERQBLZrLjZKh4xbUaeYo5+wfuVYX+iHAZFj09njiSdt7ZAhAQRu78Si+7uR0duOUC5S6hBCIhHqSfZqt+qP', '1', '1569568911', '1569568911', null);
INSERT INTO `bear_admin_log_datas` VALUES ('50', '50', '0b95da10ewmIVduTjely/I7iguDROmZMeyix7H87jMOmHbm/a7oTfhswfdYUuIR23NhyC3xv+Ww', '1', '1569569165', '1569569165', null);
INSERT INTO `bear_admin_log_datas` VALUES ('51', '51', '7d9c24b5B7tDOeLwCATJ/0qVrue59kmWigkDdul7/wh17b93aOLekrlHJ0R3kYg9TdGYSa09J32c4bqs+ADuQ2UmscNRwXpS3utxGKKXS4jNJxE+UMHHxBF4I5JFIqnfmHvcdD9GCQaH2zIne988fbrIU793h2QpCFfRPyqXQUhbzYpAUApDxsMj9v9+TDUyKMQLZTtDfj2sS6bef9J7s0VcJBpH8hxmc7COpPKtv2alQp6uJnRIGOvXeQ8HLkXQ1wF2G+GT8uCIHOMmZ0U5Y9vfFtHRXw/gRfvEiNvFHoeRYgdkHbRPCPl7yPgikPUrMovqESv0QWwVp2ZJR3Cp+a22ckAKV4FAa33PVWs', '1', '1569569265', '1569569265', null);
INSERT INTO `bear_admin_log_datas` VALUES ('52', '52', '24e8f8cb21tkoHHBnsgSuuJAP1inPsSEhILYJSCGWMn9UXyjgsX02+4apaEvZo1NhNEcIa9dtJH3/rt1iu55CRaBTrO6i5c3S5UmaF9dsPK6ty3dAYNNYAsO0LdZnveJEu6+m2HbOTpPCTrHBFW3nSr3b5w4fte9SPDDooD6lgiHdaaeO0+TqNnpUAh5KVYexKxrjOsCKP1e/ICcuyLrQjkZ0LDMB9GfQjW/zeXxSJX/4mz7TaIGrAaUlOKOyKqdVCX/YDSHHav1I5SlLPcR8q/bQGfNblZEQXECX3JunlicaWg7v2AceMyA0QvKQW9aaqRTQAodFDry/HxJaSJkkmhy9j5u6x2kkLFt0vzWmbe+hZ556QqJvQ', '1', '1569569318', '1569569318', null);
INSERT INTO `bear_admin_log_datas` VALUES ('53', '53', '53858bafW+atde9ynXK789gox3Q7AwngqBr4svDC5aCXlkfv56fK8FrQouHAqLV8ZUMU5U6m19YpFrpIPGZ2DlwtJf97t4zeCImrbsrWkQFEWh8qhGoFvfOxLTtezL8vwhfrOPvnSqMvj5cgNRPYmTjDy6Bryqj4r9WdDbiQmNGXdegYKEPfHGWbqjeY4TvG6ueS/1ki+N1ucP+l2Qni5jKdEgJoB0Z5CC/ExxAJ2XkNSwEFa7LRBjDTDYzz9puillL0sRfS1kOyGsFN2NbXdIg4DyVh/JdUlyrAk1rz3Yfep11bp5CMaBpkh+Byqa7Bm2HrNffOKi3OOpjv3tYhkaSe3Fiks6W+EANQUKh+e3N9WNv01IFiSPnS1uJTfd0', '1', '1569569348', '1569569348', null);
INSERT INTO `bear_admin_log_datas` VALUES ('54', '54', '2ba0bf05OJhtCLeNBWCjimBZ6fRFvoluQG29XIs2EqhEzq5eXxw3PbNAcYB9PbLs0KvSwH0xjG0m74qRD9MtWjp9GRLiF2WVozvzBrbYbjljzsLw7RMYD8UVE9/jQsrdc/N95xUzNK75vapyBstnW7Rl6Vz3ISGewqAZxk0arr+SFSgZhAgDT6QNTJxJUfUdiajOhxTUXoVuELlPOPuVj/5+SjWIIUYDS0jRWjQH8pC71aPSzBnH2YgiydpX1LgD8tO0IT40l++7VO82vi/h7Xb0xGKwG74sA4Ka7IxSCC7saPESq4jMymEpcMux0pz1/rODNBuceRcdRztWX4Xj2P5L8eDh1U/Yv06wzMZ16DXlm+jLkYim9efk', '1', '1569569462', '1569569462', null);

-- ----------------------------
-- Table structure for bear_admin_menus
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_menus`;
CREATE TABLE `bear_admin_menus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '菜单id',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `title` varchar(50) NOT NULL COMMENT '菜单名称',
  `url` varchar(100) NOT NULL COMMENT '模块/控制器/方法',
  `icon` varchar(50) NOT NULL DEFAULT 'fa-circle-o' COMMENT '菜单图标',
  `condition` varchar(255) DEFAULT '',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `sort_id` smallint(5) unsigned NOT NULL DEFAULT '1000' COMMENT '排序id',
  `log_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0不记录日志，1get，2post，3put，4delete，先这些啦',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '认证方式，1为实时认证，2为登录认证',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态：1默认正常，2禁用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COMMENT='后台菜单表';

-- ----------------------------
-- Records of bear_admin_menus
-- ----------------------------
INSERT INTO `bear_admin_menus` VALUES ('1', '0', '后台首页', 'admin/index/index', 'fa-home', '', '1', '99', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('2', '0', '系统管理', 'admin/sys', 'fa-desktop', '', '1', '1099', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('3', '2', '用户管理', 'admin/admin_user/index', 'fa-user', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('4', '3', '添加用户', 'admin/admin_user/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('5', '3', '修改用户', 'admin/admin_user/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('6', '3', '删除用户', 'admin/admin_user/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('7', '2', '角色管理', 'admin/admin_group/index', 'fa-group', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('8', '7', '添加角色', 'admin/admin_group/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('9', '7', '修改角色', 'admin/admin_group/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('10', '7', '删除角色', 'admin/admin_group/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('11', '7', '角色授权', 'admin/admin_group/access', 'fa-key', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('12', '2', '菜单管理', 'admin/admin_menu/index', 'fa-align-justify', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('13', '12', '添加菜单', 'admin/admin_menu/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('14', '12', '修改菜单', 'admin/admin_menu/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('15', '12', '删除菜单', 'admin/admin_menu/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('16', '2', '系统设置', 'admin/sysconfig/index', 'fa-cog', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('17', '16', '添加设置', 'admin/sysconfig/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('18', '16', '修改设置', 'admin/sysconfig/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('19', '16', '删除设置', 'admin/sysconfig/del', 'fa-close', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('20', '2', '文件管理', 'admin/admin_file/manager', 'fa-file-text', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('21', '20', '文件列表', 'admin/admin_file/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('22', '21', '上传文件', 'admin/admin_file/upload', 'fa-upload', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('23', '21', '下载文件', 'admin/admin_file/download', 'fa-download', '', '0', '1000', '1', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('24', '21', '修改文件', 'admin/admin_file/edit', 'fa-edit', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('25', '21', '删除文件', 'admin/admin_file/del', 'fa-crash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('26', '20', '回收站文件', 'admin/admin_file/recycle', 'fa-recycle', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('27', '26', '还原文件', 'admin/admin_file/reduction', 'fa-reply', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('28', '26', '永久删除文件', 'admin/admin_file/delete', 'fa-trash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('29', '2', '日志管理', 'admin/admin_log', 'fa-info-circle', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('30', '29', '操作日志', 'admin/admin_log/index', 'fa-keyboard-o', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('31', '30', '查看操作日志详情', 'admin/admin_log/view', 'fa-search-plus', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('32', '29', '系统日志', 'admin/syslog/index', 'fa-exclamation-circle', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('33', '32', '查看系统日志Trace', 'admin/syslog/view', 'fa-info-circle', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('34', '2', '数据维护', 'admin/data', 'fa-database', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('35', '34', '数据库备份', 'admin/databack/index', 'fa-database', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('36', '35', '添加备份', 'admin/databack/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('37', '35', '删除备份', 'admin/databack/del', 'fa-trash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('38', '35', '还原备份', 'admin/databack/reduction', 'fa-circle-o', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('39', '35', '下载备份', 'admin/databack/download', 'fa-download', '', '0', '1000', '1', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('40', '34', '数据表管理', 'admin/database/index', 'fa-list', '', '0', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('41', '40', '优化表', 'admin/database/optimize', 'fa-refresh', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('42', '40', '修复表', 'admin/database/repair', 'fa-circle-o-notch', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('43', '40', '查看表详情', 'admin/database/view', 'fa-info-circle', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('44', '2', '个人资料', 'admin/admin_user/profile', 'fa-smile-o', '', '1', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('45', '0', '前台用户管理', 'admin/user/manage', 'fa-user', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('46', '45', '用户列表', 'admin/user/index', 'fa-list', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('47', '46', '添加用户', 'admin/user/add', 'fa-plus', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('48', '46', '修改用户', 'admin/user/edit', 'fa-pencil', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('49', '46', '删除用户', 'admin/user/del', 'fa-trash', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('50', '46', '用户禁用(启用)', 'admin/user/disable', 'fa-ban', '', '0', '1000', '2', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('52', '0', '图片设置', 'admin/deng', 'fa-area-chart', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('53', '52', '登录页图片', 'admin/deng/index', 'fa-battery', '', '1', '1000', '0', '1', '1');
INSERT INTO `bear_admin_menus` VALUES ('54', '52', '充值页面', 'admin/deng/types', 'fa-adjust', '', '1', '1000', '0', '1', '1');

-- ----------------------------
-- Table structure for bear_admin_users
-- ----------------------------
DROP TABLE IF EXISTS `bear_admin_users`;
CREATE TABLE `bear_admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `name` varchar(50) NOT NULL COMMENT '用户名（登录帐号）',
  `password` char(32) NOT NULL COMMENT '密码',
  `nickname` varchar(30) DEFAULT NULL COMMENT '用户昵称或中文用户名',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `mobile` char(11) DEFAULT NULL COMMENT '手机号',
  `avatar` varchar(255) DEFAULT '/static/admin/images/avatar.png' COMMENT '用户头像',
  `qq_openid` varchar(64) DEFAULT NULL,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `delete_time` int(10) unsigned DEFAULT NULL COMMENT '删除时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '用户状态1正常，0冻结',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='后台用户表';

-- ----------------------------
-- Records of bear_admin_users
-- ----------------------------
INSERT INTO `bear_admin_users` VALUES ('1', 'admin', '0192023a7bbd73250516f069df18b500', '超级管理员', '', '18888888888', '/uploads/attachment/20190923/ac92299bd727aa1a5dd2d9475f052aa8.jpg', null, '1488189586', '1569466464', null, '1');
INSERT INTO `bear_admin_users` VALUES ('2', 'zhang', 'e10adc3949ba59abbe56e057f20f883e', '哈哈哈', '', '17353993431', '/uploads/attachment/20190926/56490a44c6e9c0fb71b1d114d9cf73d3.jpg', null, '1569466145', '1569466242', '1569466242', '1');
INSERT INTO `bear_admin_users` VALUES ('3', 'haha', '3f7caa3d471688b704b73e9a77b1107f', '张安峰', '', '', '/static/admin/images/avatar.png', null, '1569466225', '1569466239', '1569466239', '1');

-- ----------------------------
-- Table structure for bear_attachments
-- ----------------------------
DROP TABLE IF EXISTS `bear_attachments`;
CREATE TABLE `bear_attachments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上传用户id',
  `original_name` varchar(255) NOT NULL,
  `save_name` varchar(255) NOT NULL,
  `save_path` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `size` int(11) unsigned NOT NULL DEFAULT '0',
  `md5` char(32) NOT NULL,
  `sha1` char(40) NOT NULL,
  `url` varchar(255) NOT NULL,
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否公开，默认为0不公开只能自己看，1为公开',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL,
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='附件表';

-- ----------------------------
-- Records of bear_attachments
-- ----------------------------
INSERT INTO `bear_attachments` VALUES ('1', '0', 'fx.png', 'dd9be964dc8cec705ef2626be6a94648.png', 'D:/php/website/BearAdmin/public/uploads/attachment/20180808/dd9be964dc8cec705ef2626be6a94648.png', 'png', 'image/png', '3228', '82d5b8eb764adb141250a8613b0f883a', 'be9492d8fa95873377e3e8008b15b1d41368925b', '/uploads/attachment/20180808/dd9be964dc8cec705ef2626be6a94648.png', '0', '1533695403', '1533695403', null);
INSERT INTO `bear_attachments` VALUES ('2', '0', 'r3.png', '7e2a8ed1e5e301608e8851e8df8d0bbe.png', 'D:/php/website/BearAdmin/public/uploads/attachment/20180808/7e2a8ed1e5e301608e8851e8df8d0bbe.png', 'png', 'image/png', '1933', 'b7a14b939643579b40273a10a29da008', 'b9db5f2d43c2b988ea65612a414403e8f9f78c63', '/uploads/attachment/20180808/7e2a8ed1e5e301608e8851e8df8d0bbe.png', '0', '1533695438', '1533695438', null);
INSERT INTO `bear_attachments` VALUES ('3', '0', 'r3_1.png', '1c6bcdb692cc11df6b393e90d30af5e2.png', 'D:/php/website/BearAdmin/public/uploads/attachment/20180808/1c6bcdb692cc11df6b393e90d30af5e2.png', 'png', 'image/png', '1836', '9f870914e24115562c869538daa4820d', 'e83af3fcc03e7b9db52ad485f6b4e142eaadda7c', '/uploads/attachment/20180808/1c6bcdb692cc11df6b393e90d30af5e2.png', '0', '1533695461', '1533695461', null);
INSERT INTO `bear_attachments` VALUES ('4', '0', 'fanwei.jpg', 'ac92299bd727aa1a5dd2d9475f052aa8.jpg', 'C:/Users/Administrator/Desktop/phpEnv5.6.0-Green/www/duowan/public/uploads/attachment/20190923/ac92299bd727aa1a5dd2d9475f052aa8.jpg', 'jpg', 'image/jpeg', '55156', '5ebdd7be38ca9fddc69a09adf6f8d4ab', '4dd52428f3c795f8b09ae88f839d2fccd005f533', '/uploads/attachment/20190923/ac92299bd727aa1a5dd2d9475f052aa8.jpg', '0', '1569227406', '1569227406', null);
INSERT INTO `bear_attachments` VALUES ('5', '0', 'fanwei.jpg', '56490a44c6e9c0fb71b1d114d9cf73d3.jpg', 'C:/Users/Administrator/Desktop/phpEnv5.6.0-Green/www/duowan/public/uploads/attachment/20190926/56490a44c6e9c0fb71b1d114d9cf73d3.jpg', 'jpg', 'image/jpeg', '55156', '5ebdd7be38ca9fddc69a09adf6f8d4ab', '4dd52428f3c795f8b09ae88f839d2fccd005f533', '/uploads/attachment/20190926/56490a44c6e9c0fb71b1d114d9cf73d3.jpg', '0', '1569466145', '1569466145', null);

-- ----------------------------
-- Table structure for bear_login_img
-- ----------------------------
DROP TABLE IF EXISTS `bear_login_img`;
CREATE TABLE `bear_login_img` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `images` varchar(255) DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bear_login_img
-- ----------------------------
INSERT INTO `bear_login_img` VALUES ('0000000008', '');

-- ----------------------------
-- Table structure for bear_sysconfigs
-- ----------------------------
DROP TABLE IF EXISTS `bear_sysconfigs`;
CREATE TABLE `bear_sysconfigs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '分组默认1，系统设置',
  `name` varchar(255) NOT NULL COMMENT '名称',
  `code` varchar(255) NOT NULL COMMENT '代码',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否启用，1启用，0禁用',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='系统参数表';

-- ----------------------------
-- Records of bear_sysconfigs
-- ----------------------------
INSERT INTO `bear_sysconfigs` VALUES ('1', '1', '多玩后台', '多玩后台', '1.0', '多玩后台', '1', '1502187289', '0', null);

-- ----------------------------
-- Table structure for bear_syslogs
-- ----------------------------
DROP TABLE IF EXISTS `bear_syslogs`;
CREATE TABLE `bear_syslogs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '错误等级',
  `message` varchar(255) NOT NULL COMMENT '错误信息',
  `file` varchar(255) NOT NULL COMMENT '文件',
  `line` int(10) unsigned NOT NULL COMMENT '所在行数',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='系统错误日志表';

-- ----------------------------
-- Records of bear_syslogs
-- ----------------------------
INSERT INTO `bear_syslogs` VALUES ('1', '0', 'file_get_contents(C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\README.md): failed to open stream: No such file or directory', 'C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\application\\admin\\controller\\Index.php', '29', '1569226725');
INSERT INTO `bear_syslogs` VALUES ('2', '0', 'Class \'Monolog\\Logger\' not found', 'C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\application\\common\\exception\\LogException.php', '52', '1569226725');

-- ----------------------------
-- Table structure for bear_syslog_trace
-- ----------------------------
DROP TABLE IF EXISTS `bear_syslog_trace`;
CREATE TABLE `bear_syslog_trace` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_id` int(11) unsigned NOT NULL COMMENT '日志id',
  `trace` longtext COMMENT '日志trace',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='系统日志trace表';

-- ----------------------------
-- Records of bear_syslog_trace
-- ----------------------------
INSERT INTO `bear_syslog_trace` VALUES ('1', '1', '#0 [internal function]: think\\Error::appError(2, \'file_get_conten...\', \'C:\\\\Users\\\\Admini...\', 29, Array)\n#1 C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\application\\admin\\controller\\Index.php(29): file_get_contents(\'C:\\\\Users\\\\Admini...\')\n#2 [internal function]: app\\admin\\controller\\Index->index()\n#3 C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\thinkphp\\library\\think\\App.php(343): ReflectionMethod->invokeArgs(Object(app\\admin\\controller\\Index), Array)\n#4 C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\thinkphp\\library\\think\\App.php(606): think\\App::invokeMethod(Array, Array)\n#5 C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\thinkphp\\library\\think\\App.php(457): think\\App::module(Array, Array, NULL)\n#6 C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\thinkphp\\library\\think\\App.php(139): think\\App::exec(Array, Array)\n#7 C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\thinkphp\\start.php(19): think\\App::run()\n#8 C:\\Users\\Administrator\\Desktop\\phpEnv5.6.0-Green\\www\\duowan\\public\\index.php(17): require(\'C:\\\\Users\\\\Admini...\')\n#9 {main}');
INSERT INTO `bear_syslog_trace` VALUES ('2', '2', '#0 [internal function]: think\\Error::appShutdown()\n#1 {main}');

-- ----------------------------
-- Table structure for bear_type_img
-- ----------------------------
DROP TABLE IF EXISTS `bear_type_img`;
CREATE TABLE `bear_type_img` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `images` varchar(255) DEFAULT NULL COMMENT '图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bear_type_img
-- ----------------------------

-- ----------------------------
-- Table structure for bear_users
-- ----------------------------
DROP TABLE IF EXISTS `bear_users`;
CREATE TABLE `bear_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户等级id',
  `name` varchar(50) NOT NULL COMMENT '用户账号',
  `password` char(32) NOT NULL COMMENT '密码',
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `headimg` varchar(255) NOT NULL COMMENT '头像',
  `mobile` char(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `money` decimal(11,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '余额',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态，1启用，2禁用',
  `reg_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='前台用户表';

-- ----------------------------
-- Records of bear_users
-- ----------------------------
INSERT INTO `bear_users` VALUES ('1', '1', 'test001', '14e1b600b1fd579f47433b88e8d85291', 'test001', '/uploads/attachment/20180808/dd9be964dc8cec705ef2626be6a94648.png', '13000000001', '', '0.00', '1', '0', '0', '1533695403', '1533695403', null);
INSERT INTO `bear_users` VALUES ('2', '2', 'test002', '14e1b600b1fd579f47433b88e8d85291', 'test002', '/uploads/attachment/20180808/7e2a8ed1e5e301608e8851e8df8d0bbe.png', '13000000002', '', '0.00', '1', '0', '0', '1533695438', '1533695438', null);
INSERT INTO `bear_users` VALUES ('3', '3', 'test003', '14e1b600b1fd579f47433b88e8d85291', 'test003', '/uploads/attachment/20180808/1c6bcdb692cc11df6b393e90d30af5e2.png', '13000000003', '', '0.00', '1', '0', '0', '1533695461', '1533695461', null);

-- ----------------------------
-- Table structure for bear_user_levels
-- ----------------------------
DROP TABLE IF EXISTS `bear_user_levels`;
CREATE TABLE `bear_user_levels` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '等级名称',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='前台用户等级表';

-- ----------------------------
-- Records of bear_user_levels
-- ----------------------------
INSERT INTO `bear_user_levels` VALUES ('1', '普通会员', '1533695231', '1533695231', null);
INSERT INTO `bear_user_levels` VALUES ('2', '中级会员', '1533695240', '1533695240', null);
INSERT INTO `bear_user_levels` VALUES ('3', '高级会员', '1533695246', '1533695246', null);
