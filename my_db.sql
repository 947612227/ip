/*
 Navicat Premium Data Transfer

 Source Server         : 本地Mysql
 Source Server Type    : MySQL
 Source Server Version : 50728
 Source Host           : localhost:3306
 Source Schema         : my_db

 Target Server Type    : MySQL
 Target Server Version : 50728
 File Encoding         : 65001

 Date: 15/03/2020 11:20:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ips
-- ----------------------------
DROP TABLE IF EXISTS `ips`;
CREATE TABLE `ips` (
  `id` int(6) NOT NULL AUTO_INCREMENT COMMENT '自动增长',
  `uid` int(10) DEFAULT NULL COMMENT '查询者ID',
  `ip` char(200) DEFAULT NULL COMMENT 'IP地址',
  `addr` varchar(200) DEFAULT NULL COMMENT '实际地址',
  `browse` varchar(100) DEFAULT NULL COMMENT '浏览器类型',
  `sysversion` varchar(100) DEFAULT NULL COMMENT '操作系统版本',
  `nettype` char(100) DEFAULT NULL COMMENT '网络类型：WIFI,4G,3G,2G',
  `phonetype` char(200) DEFAULT NULL COMMENT '手机型号',
  `addtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '添加时间',
  `uptime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `ua` varchar(1000) DEFAULT NULL,
  `show_ip` int(10) DEFAULT '1' COMMENT '是否显示信息 1显示 0不显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=343 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
