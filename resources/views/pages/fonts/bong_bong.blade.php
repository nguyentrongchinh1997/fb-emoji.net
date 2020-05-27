@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo chữ bong bóng trên facebook nhanh nhất</h2>
        <p>
            Công cụ này tạo các vòng tròn hoặc bong bóng có chứa ký tự văn bản với nền trắng. Các ký tự bong bóng này có thể được dùng khi cập nhật trạng thái trên Facebook hoặc Twitter, trong email và bất kỳ nơi nào khác. Bạn có thể sử dụng chữ bong bóng để thể hiện sự hào hứng, sự chúc mừng hoặc nhấn mạnh điều quan trọng.
        </p>
        <p>
            <b>Gõ chữ muốn tạo bong bóng làm Status Facebook/Yahoo:</b>
        </p>
        <textarea rows="5" class="text-input"></textarea>
        <p>
            <b>Kết quả:</b>
        </p>
        <textarea rows="5" class="text-output"></textarea>
        <button class="btn btn-primary btn-copy tooltip" title="Copied!">Copy</button>
        <p>Hãy copy và paste vào hộp status đăng lên FaceBook hoặc chat Yahoo</p>
    </div>
@endsection

@section('js')
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.text-input').on('input', function () {
                input = $('.text-input').val();
                route = "{{route('convert')}}";
                $.ajax({
                   type:'POST',
                   url:route,
                   data:{input:input, type:4},
                   success:function(data){
                        $('.text-output').val(data);
                   }
                });
            });

            $('.btn-copy').on('click', function () {
                let textOutput = $('.text-output');
                console.log(textOutput.val());
                textOutput.select();
                document.execCommand("copy");
            });

            $('.btn-copy.tooltip').tooltipster({
                animation: 'fade',
                delay: 100,
                theme: 'tooltipster-borderless',
                trigger: 'click',
                timer: 1000
            });
        });
    </script>
@endsection
