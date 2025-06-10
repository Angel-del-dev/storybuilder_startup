DROP DATABASE IF EXISTS STORYBUILDER;
CREATE DATABASE STORYBUILDER;

USE STORYBUILDER;

INSERT into users
(NAME, EMAIL, PASSWORD)
VALUES
('AngelNovo', 'angelnovo15@gmail.com', '$2y$12$ayru4ERyHxT4LrsY1WohXOR59fICyPzaXkVcTDTrL.MAKY25hIvzW');

insert into userfragments
(user_id, fragment)
values
(1, "— Dos décadas atrapado en tu cuerpo, viendo el mundo a través de tus ojos...");