<html>
<head>
</head>
<body>
    <form action="{{url('qlsach/themtheloai')}}" method = "post">
    id <input type='text' name='id'><br>
    Thể loại <input type='text' name='the_loai'><br>
    <input type='submit' value='Thêm thể loại'>
    {{ csrf_field() }}
</form>
</body>
</html>
