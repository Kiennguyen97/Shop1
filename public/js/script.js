// {{--
//     Nhóm Bài Tập 18 - CNPM Nhóm 8 - Thầy Thạc Bình Cường - D15
//         Bùi Văn Tụ
//         Kiều Việt Anh
//         Phạm Ngọc Anh
//         Nguyễn Văn Đạo
//         Đỗ Văn Trọng  
// --}}
$(document).ready(function() {
    $(".error_msg").delay(3000).slideUp();
});
function xacnhan(msg) {
    if (window.confirm(msg)) {
        return true;
    } 
    return false;
}