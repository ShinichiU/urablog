CREATE TABLE urablog_blog_box (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, title VARCHAR(255) NOT NULL, discri TEXT, is_active TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME, updated_at DATETIME, INDEX user_id_idx (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 ENGINE = INNODB;
CREATE TABLE urablog_category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME, updated_at DATETIME, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 ENGINE = INNODB;
CREATE TABLE urablog_user (id BIGINT AUTO_INCREMENT, email VARCHAR(255) NOT NULL UNIQUE, user_name VARCHAR(255) NOT NULL, passwd VARCHAR(255) NOT NULL, is_active TINYINT(1) DEFAULT '1' NOT NULL, created_at DATETIME, updated_at DATETIME, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 ENGINE = INNODB;
CREATE TABLE urablog_field (id BIGINT AUTO_INCREMENT, category_id BIGINT, user_id BIGINT NOT NULL, blog_id BIGINT NOT NULL, title VARCHAR(255) NOT NULL, article TEXT NOT NULL, is_active TINYINT(1) DEFAULT '1' NOT NULL, expires_at DATETIME, created_at DATETIME, updated_at DATETIME, INDEX category_id_idx (category_id), INDEX user_id_idx (user_id), INDEX blog_id_idx (blog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 ENGINE = INNODB;
ALTER TABLE urablog_blog_box ADD FOREIGN KEY (user_id) REFERENCES urablog_user(id);
ALTER TABLE urablog_field ADD FOREIGN KEY (user_id) REFERENCES urablog_user(id);
ALTER TABLE urablog_field ADD FOREIGN KEY (category_id) REFERENCES urablog_category(id);
ALTER TABLE urablog_field ADD FOREIGN KEY (blog_id) REFERENCES urablog_blog_box(id);
