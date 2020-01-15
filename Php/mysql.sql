drop database if exists DanNhac;
create database DanNhac;
use DanNhac;


create table Users(
  id int auto_increment primary key,
  fullName varchar(255),
  username varchar(255),
  password varchar(255),
  phone varchar(255),
  email varchar(255),
  birthday date,
  roll varchar(255) default  'user'
);

insert into  Users (fullName,username,password,phone,email,birthday,roll) values
('Nguyen Thi Tien','tien','tien12345','0776650195','nguyenthitien@gmail.com','2000-10-09','admin'),
('Ho Thi Mai','mai','mai12345','0779113425','hothimai@gmail.com','2000-05-15','user');




create table introduce(
id int auto_increment primary key,
names varchar(255),
image varchar(255),
content1 varchar(255),
content2 varchar(255),
note varchar(255)
);
insert into introduce value(1,"Dàn Nhạc Trịnh","img/loa.jpg","Dàn loa chuyên nghiệp","Với thời đại công nghệ đổi mới nhanh chóng,dàn nhạc Trịnh chúng tôi luôn nâng cấp dàn loa mỗi ngày để phục vụ quý khách một cách chuyên nghiệp nhất,tốt nhất.Đặc biệt không sử dụng đồ cũ nên quý khách cứ yên tâm khi chọn dàn nhạc chúng tôi","Luôn nâng cấp để trở nên hoàn hảo");

create table service(
id int auto_increment primary key,
image varchar(255),
names varchar(255),
intro varchar(255)
);
insert into service value(1,"../Img/nhaccong.jpg","Đàn Organ","Cảm xúc về tình yêu,về cha mẹ,..dàn nhạc Trịnh bao trùm nhiều mặt"),
						 (2,"../Img/trong.jpg","Trống","Âm nhạc là sự câm lặng giữa nhưng nốt nhạc"),
						 (3,"../Img/dannhac.jpg","Dàn nhạc","Âm nhạc là cách cảm xúc trở thành âm thanh"),
                         (4,"../Img/guitar.jpg","Guitar","Âm nhạc là cách cảm xúc trở thành âm thanh");
                         
create table service1(
 id int auto_increment primary key,
 names varchar(255),
 images varchar(255),
 emp varchar(255),
 price varchar(255),
 content varchar(255)
 );
 

 
  insert into service1 value (1,"Nhạc công","nhaccong.jpg","Nguyễn Trịnh","600000","Hãy hòa vào tiếng đàn của tôi, nó sẽ làm bạn cảm thấy thoải mái"),
                        (2,"Nhạc","nhac.jpg","Trần Văn Bi","500000","Muốn to hay nhỏ, chỉ cần nói chúng tôi"),
                        (3,"Nhạc công","nhaccong.jpg","Nguyễn Văn Mạnh","600000","Hãy hòa vào tiếng đàn của tôi, nó sẽ làm bạn cảm thấy thoải mái"),
                        (4,"MC","chubao.jpg","Phan Phước Bảo","500000","Có lẽ tôi sẽ à người tạo ra tiếng cười cho bạn"),
                        (5,"Pháo","phao.jpg","Nguyễn Trịnh","400000","Sẽ cho bạn khoảnh khắc chụp hình đẹp nhất"),
                        (6,"Kim tuyến","ktuyen.jpg","Nguyễn Trịnh","300000","Nếu là đám cưới thì chắc không nên thiếu nhó rồi nhỉ"),
                        (7,"Màn hình led","denled.jpg","Nguyễn Anh Bi","2000000","Bạn có muốn đám cưới của mình trở nên sang trọng hơn không nào"),
                        (8,"Máy chiếu","maychieu.jpg","Nguyễn Trịnh","1000000","Chú rễ à hãy tạo cho cô dâu một video thật đáng nhớ nhé"),
                        (9,"Máy nổ","mno.png","Nguyễn Trịnh","600000","Tôi chỉ phòng trừ những lúc mất điện sẽ làm tuột hứng cho các bạn thôi à"),
                        (10,"Phương tiện","nhac3.jpg","Nguyễn Trịnh","500000","Chúng tôi sẽ chở đến tận nơi, các bạn hãy lo việc khác đi nhé"),
                        (11,"Trống","trong.jpg","Nguyễn Văn Lạc","1000000","Tùm,tùm,tùm... tiếng kêu tui đó mấy bạn"),
                        (12,"Guitar","guitar.jpg","Nguyễn Trịnh","600000","Giai điệu nhẹ nhàng mà êm ái làm sao các bạn nhỉ"),
						(13,"Toàn bộ","../Img/toanbo.png","All","9000000","Chắc hẳn nó sẽ là một ngày đặc biệt rồi...hihi");
create table why(
id int auto_increment primary key,
image varchar(255),
title varchar(255),
intro varchar(255),
detail1 varchar(255),
detail2 varchar(255),
detail3 varchar(255)
);
insert into why value(1,"c6.jpg","Tại sao bạn nên chọn chúng tôi?","Chúng tôi là một dàn nhạc luôn luôn đáp ứng các nhu cầu để cho quý khách có những giây phút thư giãn thoải máy nhất","Chúng tôi có một dàn loa chuyên nghiệp","Đội ngũ nhân viên nhiệt tình","Làm việc lâu năm và đầy kinh nghiệm ");

create table emp(
id int auto_increment primary key,
image varchar(255)
);
insert into emp value(1,"cau6.jpg"),
                     (2,"abi.jpg"),
                     (3,"amanh.jpg"),
                     (4,"chubao.jpg");
					 
CREATE TABLE Carts (
    cartId int auto_increment primary key,
    cusId int,
    serviceId int,
    quantity int,
    price double,
    dayStart datetime,
    FOREIGN KEY (serviceId) REFERENCES service1(id),
    FOREIGN KEY (cusId) REFERENCES Users(id)
);





create table manager(
id int auto_increment primary key,
img varchar(255),
namess varchar(255),
content text
);
insert into manager value(1,"cau6ne.jpg","Ông Trịnh(GĐ) nói:","Tôi có điềm đam mê mãnh liệt về âm nhạc từ nhỏ,nhưng ngày xưa thì không đủ điệu kiện để học nên tôi đã từ bỏ.Cho đến một ngày tôi có thể tự xây dựng nên được một dàn nhạc riêng cho chính bản thân mình thì tôi rất trân trọng nó,đặt hết tâm huyết vào nó.Tôi đã cố gắng từng ngày để dàn nhạc của tôi được biết đến nhiều như bây giờ.Các bạn biết không, tôi đã ngoài 50u nhưng tôi vẫn xem youtube để học những giai điệu mới mỗi ngày đó. Nên các bạn cứ tin tưởng khi chọ dàn nhạc chúng tôi nhé!");
                       


create table employee(
id int auto_increment primary key,
name varchar(255),
image varchar(255),
assignment varchar(255),
address varchar(255),
phone varchar(255)
);

insert into employee value(1,"Nguyễn Trịnh(Giám đốc)","cau6.jpg","Nhạc công","Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng","0983942707"),
                          (2,"Trần Văn Bi","abi.jpg","Chỉnh âm","Hòa Ninh-Hòa Vang-Đà Nẵng","0876533462"),
						  (3,"Bùi Mạnh","amanh.jpg","Nhạc công","Hòa Liên-Hòa Vang-Đà Nẵng","0927881056"),
                          (4,"Lê Thị Thu","co.jpg","MC","Hòa Ninh-Hòa Vang-Đà Nẵng","0926321462"),
                          (5,"Phan Phước Bảo","chubao.jpg","MC","Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng","0775196254");