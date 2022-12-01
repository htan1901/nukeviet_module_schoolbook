<?php

/**
 * @Project NUKEVIET 4.x
 * @Author SWINGP (http://swingp.com.vn)
 * @Copyright (C) 2022 SWINGP. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 3 Wed 2022 21:00:00 GMT
 */
if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

$sql_drop_module = [];

$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_monhoc';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_truong';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_giaovien';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_lop';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_monhoc';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_kehoachbaiday';

$sql_create_module = $sql_drop_module;

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_monhoc (
  MaMH varchar(10),
  TenMH varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY (MaMH)
) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_truong (
  MaTruong char(8) NOT NULL,
  TenTruong varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY (MaTruong)
) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_giaovien (
  MaGV varchar(10) NOT NULL,
  HoTen varchar(50) character set utf8 NOT NULL,
  SDT char(10) NOT NULL,
  DiaChi varchar(70) character set utf8 NULL,
  Email varchar(50) character NULL,
  MaTruong char(8) NOT NULL,
  FOREIGN KEY (MaTruong) REFERENCES " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_truong(MaTruong),
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_lop (
  MaLop varchar(10) NOT NULL,
  TenLop varchar(50) character set utf8 NULL,
  Khoi tinyint NULL,
  NamHoc char(11) NULL,
  MaGVCN varchar(10) NULL,
  FOREIGN KEY (MaGVCN) REFERENCES " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_giaovien(MaGV),
  PRIMARY KEY (MaLop)
) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_monhoc (
    MaMH varchar(10) NOT NULL,
    TenMH varchar(50) character set utf8 NOT NULL,
    PRIMARY KEY (MaMH)
  ) ENGINE=MyISAM";

$sql_create_module[] = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_kehoachbaiday (
    MaLop varchar(10) NOT NULL,
    MaMH varchar(10) NOT NULL,
    NgayDay date NOT NULL,
    TietBD tinyint NOT NULL,
    NhanXet varchar(55) character set utf8 NULL,
    XepLoai char(1) NULL,
    TrangThai BIT(1) NULL,
    MaGV varchar(10) NOT NULL,
    FOREIGN KEY (MaLop) REFERENCES " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_lop(MaLop),
    FOREIGN KEY (MaMH) REFERENCES " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_monhoc(MaMH),
    FOREIGN KEY (MaGV) REFERENCES " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_giaovien(MaGV),
    PRIMARY KEY (MaLop, MaMH)
  ) ENGINE=MyISAM";
 
