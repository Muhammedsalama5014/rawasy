INSERT INTO `service` (`id`, `ext_img`, `title`, `s_description`, `l_description`, `intern_img`, `created_at`)
VALUES (NULL, '1.jpg', 'Service Title', 'Service Short Description', 'Service Long Description', '2.jpg',
        current_timestamp());

INSERT INTO `gallery` (`id`, `img`, `title`, `description`, `created_at`)
VALUES (NULL, '1.jpg', 'Title', 'Description', current_timestamp());

INSERT INTO `doctors` (`id`, `name`, `job`, `qualification`, `certification`, `personal_skills`, `education`, `awards`,
                       `description`, `img`, `created_at`)
VALUES (NULL, 'Doctor Name', 'Doctor', 'This is qualification', 'This is Certification', 'This is personal skills',
        'This is educations', 'This is awards', 'This is description', '1.jpg', current_timestamp());

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`)
VALUES (NULL, 'name', 'ak@gmail.com', '01207807796', 'this is a message');

INSERT INTO `appointment` (`id`, `name`, `email`, `phone`, `date`)
VALUES (NULL, 'test name', 'ak@gmail.com', '01207807796', 'monday');

INSERT INTO `admin` (`id`, `name_admin`, `email`, `password`, `profile`, `created_at`)
VALUES (NULL, 'karem', 'ak54@gmail.com', '$2y$10$WIs3Id2fkJIDrdl1lzJUR.iHYTMJONNgzYU6YS9chzBE.qF8XcWZi', '1.jpg',
        current_timestamp());

