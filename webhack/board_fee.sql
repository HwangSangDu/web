CREATE TABLE IF NOT EXISTS board_free (
  uno int(10) unsigned not null auto_increment,
  gno int(10) unsigned not null ,
  reply_depth varchar(255),
  name varchar(20),
  passwd varchar(200),
  email varchar(50),
  homepage varchar(50),
  subject varchar(60),
  content text,
  html_tag varchar(10),
  hit int(5) unsigned not null default 0,
  register_date int(10) unsigned,
  client_ip varchar(20),
  filename varchar(200),
  primary key (uno)
);
