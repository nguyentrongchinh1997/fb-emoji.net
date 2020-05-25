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
    </div>
@endsection
