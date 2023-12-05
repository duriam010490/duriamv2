<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Lấy dữ liệu từ yêu cầu POST
  $recipient = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Gửi email
  $headers = 'From: thanhtrung@duriam.vn'; // Thay thế bằng địa chỉ email của bạn
  $success = mail($recipient, $subject, $message, $headers);

  // Trả về phản hồi cho JavaScript
  if ($success) {
    echo 'Email đã được gửi thành công';
  } else {
    echo 'Có lỗi trong quá trình gửi mail. Vui lòng thử lại sau!';
  }
} else {
  echo 'Invalid request method.';
}
?>