@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Lấy ID người dùng Facebook</h2>
        <p>
            Các bước tiến hành:
        </p>
        <ul>
            <li>
                <b>Bước 1:</b> Dán link trang cá nhân muốn lấy ID
            </li>
            <li>
                <b>Bước 2:</b> Click button để thực hiện lấy ID
            </li>
        </ul>
        <p>
            Nhập link trang cá nhân Facebook
        </p>
        @if (count($errors->all()) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    {{$err}}
                @endforeach
            </div>
        @endif
        <form action="{{route('uid.find')}}" method="post">
            @csrf
            <input placeholder="https://www.facebook.com/username" type="text" class="url form-control" name="url">
            <button type="submit" class="button download">Tìm kiếm</button>
        </form>
        @if (isset($code))
            <p class="uid">
                <span id="code">
                    {{ $code }}
                </span>
            </p>
            <input type="text" style="opacity: 0" id="myInput" value="{{ $code }}" name="">
            <button id="copy" onclick="copy()">
                Sao chép mã
            </button>
            <script>
                function copy() {
                  var copyText = document.getElementById("myInput");
                  copyText.select();
                  copyText.setSelectionRange(0, 99999)
                  document.execCommand("copy");
                  alert("Đã copy mã: " + copyText.value);
                }
            </script>
        @endif
        <h2>UID Facebook là gì?</h2>
        <p>
            UID (viết tắt của User ID) là 1 đoạn dãy số được Facebook sử dụng để định danh một tài khoản trên Facebook. Chúng ta có thể hình dung nó như là số chứng minh thư của mình trên facebook vậy. Mỗi một hình ảnh, bài viết, sự kiện, group hay fanpage nào đó đều có 1 UID riêng biệt và duy nhất.
        </p>
        <h2>Vai trò của UID Facebook là gì?</h2>
        <h3 style="margin-bottom: 10px">1. Hỗ trợ chạy quảng cáo</h3>
        <p>
            UID Facebook giúp chiến dịch quảng cáo của bạn nhắm đúng được đối tượng mục tiêu đang hướng đến. Ví dụ, bạn đang muốn chạy quảng cáo nhắm đến những người thích thời trang thì bạn chỉ cần tìm những fanpage, group về thời trang và quét UID của những người like page hoặc tham gia group về thời trang. Sau đó lấy UID Facebook của những người này, tạo tệp tùy chỉnh rồi tiếp cận trực tiếp đến họ. UID giúp bạn nghiên cứu  được hành vi, sở thích,… của khách hàng mục tiêu, do đó bạn hoàn toàn có thể Target đúng đối tượng để chạy quảng cáo.
        </p>
        <h3 style="margin-bottom: 10px">2. Kết bạn theo tệp khách hàng mục tiêu</h3>
        <p>
            Nếu bạn đang dùng Facebook cá nhân để kinh doanh thì bạn cần phải kết bạn dựa trên sản phẩm mà bạn đang bán. Bạn hãy xác định chân dung khách hàng rõ nét nhất. (Họ là ai? giới tính, tuổi, sở thích,…) để tìm kiếm và kết bạn với họ. Càng có nhiều bạn bè nằm trong nhóm khách hàng mục tiêu thì sản phẩm của bạn càng tiếp cận được với nhiều người. Bằng cách sử dụng thêm công cụ hỗ trợ như Simple UID, Simple Facebook,.. bạn có thể tìm kiếm khách hàng tiềm năng  một cách dễ dàng và kết bạn với họ.
        </p>
        <h3 style="margin-bottom: 10px">3. Nghiên cứu khách hàng mục tiêu (Target Audience)</h3>
        <p>
            Đây là một công dụng rất quan trọng đối với các shop kinh doanh online, giúp hiểu khách hàng của mình hơn. Từ UID của một tài khoản Facebook nào đó, bạn có thể xem được các thông tin về sở thích, các hình ảnh, video mà họ đã like, bình luận,... bằng cách sử dụng tính năng Graph Search của Facebook.
        </p>
        <h3 style="margin-bottom: 10px">
            4. Kết bạn theo tệp khách hàng mục tiêu
        </h3>
        <p>
            Nếu bạn đang dùng Facebook cá nhân để kinh doanh thì bạn cần phải kết bạn dựa trên sản phẩm mà bạn đang bán. Bạn hãy xác định chân dung khách hàng rõ nét nhất. (Họ là ai? giới tính, tuổi, sở thích,…) để tìm kiếm và kết bạn với họ. Càng có nhiều bạn bè nằm trong nhóm khách hàng mục tiêu thì sản phẩm của bạn càng tiếp cận được với nhiều người. Bằng cách sử dụng thêm công cụ hỗ trợ như Simple UID, Simple Facebook,.. bạn có thể tìm kiếm khách hàng tiềm năng  một cách dễ dàng và kết bạn với họ.
        </p>
    </div>
@endsection
