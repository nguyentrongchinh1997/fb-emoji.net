@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo chữ in nghiêng trên facebook nhanh nhất</h2>
        <p>
            Công cụ này giúp tạo ra các văn bản in nghiêng nhờ sử dụng ký tự unicode. Văn bản do công cụ này tạo ra có thể tương tự với văn bản được tạo ra nhờ thẻ HTML nhưng trên thực tế không phải.
        </p>
        <p>
            Bạn có thể sao chép và dán văn bản vào email hoặc dùng khi muốn cập nhật trạng thái trên trang Facebook và Twitter, bình luận trên YouTube, vân vân. Phông chữ in nghiêng thường được sử dụng để nhấn mạnh một quan điểm. Chữ in nghiêng cũng có thể được sử dụng để sắp xếp cấu trúc các đoạn văn lớn, ví dụ để đánh dấu chủ đề, đầu bài hoặc tiêu đề.
        </p>
        <p><b>Gõ chữ muốn in nghiêng làm Status Facebook/Yahoo:</b></p>
        <textarea rows="5" class="text-input"></textarea>
        <p><b>Kết quả:</b></p>
        <textarea rows="5" class="text-output"></textarea>
        <button class="btn btn-primary btn-copy tooltip" title="Copied!">Copy</button>
        <p>Hãy copy chữ in nghiêng này và paste vào hộp status đăng lên FaceBook hoặc chat Yahoo</p>
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
                   data:{input:input, type:3},
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
