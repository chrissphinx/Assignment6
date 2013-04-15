CREATE TABLE `Country` (
  `Code` char(3) NOT NULL default '',
  `Name` char(52) NOT NULL default '',
  `Continent` char(13) CHECK (`Continent` IN ('Asia','Europe','North America','Africa','Oceania','Antarctica','South America')) NOT NULL default 'Asia',
  `Region` char(26) NOT NULL default '',
  `SurfaceArea` float(10,2) NOT NULL default '0.00',
  `IndepYear` smallint(6) default NULL,
  `Population` int(11) NOT NULL default '0',
  `LifeExpectancy` float(3,1) default NULL,
  `GNP` float(10,2) default NULL,
  `GNPOld` float(10,2) default NULL,
  `LocalName` char(45) NOT NULL default '',
  `GovernmentForm` char(45) NOT NULL default '',
  `HeadOfState` char(60) default NULL,
  `Capital` int(11) default NULL,
  `Code2` char(2) NOT NULL default '',
  PRIMARY KEY  (`Code`)
);

CREATE TABLE `CountryLanguage` (
  `CountryCode` char(3) NOT NULL default '',
  `Language` char(30) NOT NULL default '',
  `IsOfficial` char(1) CHECK (`IsOfficial` IN ('T','F')) NOT NULL default 'F',
  `Percentage` float(4,1) NOT NULL default '0.0',
  PRIMARY KEY  (`CountryCode`,`Language`)
);