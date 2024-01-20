Liệt kê danh sách mua hàng của user bao gồm giá tiền của mỗi đơn hàng, thông tin hiển thị gồm: mã user, tên user, mã đơn hàng, tổng tiền

SELECT
    u.user_id,
    u.user_name,
    o.order_id,
    SUM(p.product_price) AS total_price
FROM
    users u
JOIN
    orders o ON u.user_id = o.user_id
JOIN
    order_details od ON o.order_id = od.order_id
JOIN
    products p ON od.product_id = p.product_id
GROUP BY
    u.user_id, o.order_id
ORDER BY
    u.user_id, o.order_id;