@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo chữ xiên chéo trên facebook nhanh nhất</h2>
        <p>
            Công cụ này tạo ra các xiên chéo trên văn bản của bạn, sử dụng unicode. Các xiên chéo trông như thế n̷à̷y̷ hoặc thế n̸à̸y̸. Bạn có thể sử dụng chữ xiên trên Facebook và Twitter, tin nhắn riêng, bình luận, vân vân. Chữ với xiên chéo thể hiện rằng văn bản đã được chỉnh sửa, xem xét hoặc xóa.
        </p>
        <p><b>Gõ chữ muốn xiên chéo làm Status Facebook/Yahoo:</b></p>
        <textarea rows="5" class="text-input"></textarea>
        <p>Nội dung trên được biến thành c̷h̷ữ̷ ̷x̷i̷ê̷n̷ ̷c̷h̷é̷o̷ trong ô dưới
            đây</p>
        <textarea rows="5" class="text-output"></textarea>
        <button class="btn btn-primary btn-copy tooltip" title="Copied!">Copy</button>
        <p>Hãy copy chữ xiên chéo này và paste vào hộp status đăng lên FaceBook hoặc chat Yahoo</p>
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
                   data:{input:input, type:0},
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
