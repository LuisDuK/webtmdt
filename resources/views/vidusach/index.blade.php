<x-book-layout>
<x-slot name="title">
Sách
</x-slot>
<div class='list-book'>
    @foreach($data as $row)
    <div class='book'>
        <a href="{{ url('sach/theloai/thongtinsach/'.$row->id) }}" class="block-book">
            <img src="{{ asset('book_image/' . $row->file_anh_bia) }}" width='200px' height='200px'><br>
            <b>{{$row->tieu_de}}</b><br />
            <i>{{number_format($row->gia_ban,0,",",".")}}đ</i>
        </a>
    </div>
    @endforeach
</div>
</x-book-layout>