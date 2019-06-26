{{--
    Nhóm Bài Tập 18 - CNPM Nhóm 8 - Thầy Thạc Bình Cường - D15
        Bùi Văn Tụ
        Kiều Việt Anh
        Phạm Ngọc Anh
        Nguyễn Văn Đạo
        Đỗ Văn Trọng  
--}}

@include('back-end.layouts.header')
<body>
@include('back-end.modules.top-nav')
@include('back-end.modules.left-nav')
	@yield('content')
@include('back-end.layouts.footer')