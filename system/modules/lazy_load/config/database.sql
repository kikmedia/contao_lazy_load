-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_page`
-- 

CREATE TABLE `tl_page` (
  `ll_use` char(1) NOT NULL default '',
  `ll_range` varchar(255) NOT NULL default '',
  `ll_elements` varchar(255) NOT NULL default '',
  `ll_mode` varchar(255) NOT NULL default '',
  `ll_realSrcAttribute` varchar(255) NOT NULL default '',
  `ll_useFade` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;