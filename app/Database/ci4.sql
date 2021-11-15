-- USE ci4;

CREATE TABLE user_data (
    id INT AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO user_data VALUES
('', 'bodybody', '1234');

-- SELECT * FROM user_data;