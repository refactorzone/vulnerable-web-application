CREATE TABLE users (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255),
  password VARCHAR(255),
  admin BOOL DEFAULT 0,
  UNIQUE u_username(username)
);

CREATE TABLE domains (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  user_id BIGINT NOT NULL,
  name VARCHAR(255),
  expires DATETIME NOT NULL,
  UNIQUE u_name(name),
  CONSTRAINT fk_domains_user_id
    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);