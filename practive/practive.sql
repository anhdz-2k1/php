create table user(
    id int not null auto_increment primary key ,
    fullname Nvarchar(100) not null ,
    email nvarchar(100) not null,
    username nvarchar(100) not null unique ,
    password nvarchar(100) not null
)

