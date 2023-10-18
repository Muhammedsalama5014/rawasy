create table service(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    ext_img VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    `s_description` TEXT NOT NULL,
    `l_description` TEXT NOT NULL,
    intern_img VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);

create table doctors(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    job VARCHAR(255) NOT NULL,
    qualification TEXT NOT NULL,
    certification TEXT NOT NULL,
    personal_skills TEXT NOT NULL,
    education TEXT NOT NULL,
    awards TEXT NOT NULL,
    `description` TEXT NOT NULL,
    img VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);

create table appointment(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    `date` TEXT NOT NULL,
    PRIMARY KEY (id)
);

create table contact(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    PRIMARY KEY (id)
);

create table admin(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name_admin VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `profile` VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL default now(),
    PRIMARY KEY (id)
);

create table gallery(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    img VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT now(),
    PRIMARY KEY (id)
);







