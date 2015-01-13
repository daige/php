create table quotes (

quote_id  INT UNSIGNED NOT NULL AUTO_INCREMENT,
quote     TEXT NOT NULL,
source    VARCHAR(100) NOT NULL,
favorite  TINYINT(1)  UNSIGNED NOT NULL,
date_entered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

primary key( quote_id)

)