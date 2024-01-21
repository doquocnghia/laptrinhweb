a. Truy vấn người dùng
1. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z)
SELECT * FROM users ORDER BY user_name ASC;
2. Lấy ra 07 người dùng theo thứ tự tên theo Alphabet (A->Z)
SELECT * FROM users ORDER BY user_name ASC LIMIT 7;
3. Lấy ra danh sách người dùng theo thứ tự tên theo Alphabet (A->Z), trong đó tên
người dùng có chữ a
SELECT * FROM users WHERE user_name LIKE '%a%' ORDER BY user_name ASC
4. Lấy ra danh sách người dùng trong đó tên người dùng bắt đầu bằng chữ m
SELECT*from users where  user_name like 'm%'
5. Lấy ra danh sách người dùng trong đó tên người dùng kết thúc bằng chữ i
SELECT*from users where user_name like '%i'
6. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ:
example@gmail.com)
SELECT*from users where user_email like '%gmail%'
7. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ:
example@gmail.com), tên người dùng bắt đầu bằng chữ m
SELECT*from users where user_email like '%gmail%' and user_name like 'm%';
8. Lấy ra danh sách người dùng trong đó email người dùng là Gmail (ví dụ:
example@gmail.com), tên người dùng có chữ i và tên người dùng có chiều dài lớn
hơn 5
SELECT*from users where user_email like '%gmail%' and user_name like '%i%' order by length(user_name) > 5 ; 
9. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5 đến 9,
email dùng dịch vụ Gmail, trong tên email có chữ i
SELECT*from users where user_email like '%a%' and user_email like '%gmail%' and user_email like '%i%'  order by length(user_name) > 5 and length (user_name) < 9 ;
10. Lấy ra danh sách người dùng trong đó tên người dùng có chữ a, chiều dài từ 5 đến 9 hoặc tên người dùng có chữ i, chiều dài nhỏ hơn 9 hoặc email dùng dịch vụ Gmail,
trong tên email có chữ i
SELECT * FROM users WHERE (username LIKE '%a%' AND LENGTH(username) BETWEEN 5 AND 9) OR (username LIKE '%i%' AND LENGTH(username) < 9) OR (email LIKE '%gmail.com' AND email LIKE '%i%') ORDER BY username;
