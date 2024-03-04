-- Active: 1708937091942@@127.0.0.1@3306@s_crud
SHOW DATABASES

INSERT INTO
    student (name, age, address)
VALUES ('Tania', 21, 'Kamarkhali')

UPDATE student SET name = 'Tabassum' WHERE id = 6;

DELETE FROM student WHERE id = 5;

SELECT * FROM student