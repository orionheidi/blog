
create database blog;
drop database blog;
use blog;
show tables;
explain post;
show tables;
select * from posts;

insert into posts(title,body,created_at,updated_at,published) values('Blog 1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',Now(),Now(),0);
insert into posts(title,body,created_at,updated_at,published) values('Blog 2','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',Now(),Now(),1);
insert into posts(title,body,created_at,updated_at,published) values('Blog 3','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',Now(),Now(),1);
insert into posts(title,body,created_at,updated_at,published) values('Blog 4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',Now(),Now(),1);
insert into posts(title,body,created_at,updated_at,published) values('Blog 5','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',Now(),Now(),1);
insert into posts(title,body,created_at,updated_at,published) values('Blog 6','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',Now(),Now(),1);

select * from comments;

insert into comments(post_id,author,text,created_at,updated_at) values(1,'Mikica','Krasn tekst.',Now(),Now());
insert into comments(post_id,author,text,created_at,updated_at) values(1,'Jelkica','Strava ste!.',Now(),Now());
insert into comments(post_id,author,text,created_at,updated_at) values(1,'Timika','Cao zdravo.',Now(),Now());
insert into comments(post_id,author,text,created_at,updated_at) values(2,'Timika','Onomatopeja kao stilska figura.',Now(),Now());
insert into comments(post_id,author,text,created_at,updated_at) values(2,'Timika','Laravel je cooler.',Now(),Now());