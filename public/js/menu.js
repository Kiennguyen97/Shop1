// {{--
//     Nhóm Bài Tập 18 - CNPM Nhóm 8 - Thầy Thạc Bình Cường - D15
//         Bùi Văn Tụ
//         Kiều Việt Anh
//         Phạm Ngọc Anh
//         Nguyễn Văn Đạo
//         Đỗ Văn Trọng  
// --}}
// dropdown menu hover 
$(function(){
    $(".dropdown").hover(            
	    function() {
	        $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
	        $(this).toggleClass('open');
	        $('b', this).toggleClass("caret caret-up");                
	    },
	    function() {
	        $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
	        $(this).toggleClass('open');
	        $('b', this).toggleClass("caret caret-up");                
		}
	);
});
