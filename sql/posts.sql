DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS categories;

/* Posts table - stores user account registration registration with Id as the primary key (auto-generated from users_id_sequence if no key is provided)*/
CREATE TABLE posts
(
  category INT,
  title VARCHAR(255),
  body TEXT,
  author VARCHAR(255),
  tags VARCHAR(255),
  date TIMESTAMP
);

CREATE TABLE categories
(
  id INT PRIMARY KEY,
  name VARCHAR(255)
);

/* Sample of admin user creation that will use sequence for unique ID */
INSERT INTO posts
  (id, category, title, body, author, tags, date)
VALUES
  (
    '1', '1', '100 Days of Code', 'This is the first post to test the database connection.', 'Scott Alton', 'code', '2020-11-05 11:00:00'
  );

INSERT INTO posts
  (id, category, title, body, author, tags, date)
VALUES
  (
    '2', '1', 'A Test Post', 'This is a test post to test the database connection.', 'Scott Alton', 'code', '2020-11-05 11:00:00'
  );

INSERT INTO categories
  (id, name)
VALUES
  (
    '1', '100 Days of Code'
  );

INSERT INTO categories
  (id, name)
VALUES
  (
    '2', 'Front-End'
  );

INSERT INTO categories
  (id, name)
VALUES
  (
    '3', 'Back-End'
  );

SELECT *
FROM categories;



