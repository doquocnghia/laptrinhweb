2. Lấy ra danh sách khách hàng theo thứ tự tên theo Alphabet (A->Z), trongđóTênkhách hàng có chữ a hoặc bắt đầu bằng chữ m, chiều dài email từ 5 đến 20kýtự(>=5, <=20). Thông tin hiển thị gồm: Mã khách hàng, Tên khách hàng, Email.

SELECT user_id, user_name, user_email
FROM users
WHERE (user_name LIKE '%a%' OR user_name LIKE '%b%' OR user_name LIKE 'm%')
  AND LENGTH(user_email) BETWEEN 5 AND 20
ORDER BY user_name ASC;