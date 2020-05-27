@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo chữ viết tay (nghuệch ngoạc) trên facebook nhanh nhất</h2>
        <p>
            Công cụ này tạo ra văn bản chữ viết tay trang trọng, mềm mại (𝓃𝒽𝓊̛ 𝓉𝒽ℯ̂́ 𝓃𝒶̀𝓎) để bạn có thể sao chép và dán vào trạng thái trênFacebook, Twitter, tin nhắn, bình luận YouTube, vân vân. Phông chữ này có thể được dùng để mô phỏng phông chữ viết tay của người hoặc các văn bản trang trọng.
        </p>
        <p><b>Gõ chữ muốn tạo kiểu chữ viết tay làm Status Facebook/Yahoo:</b></p>
        <textarea rows="5" class="text-input"></textarea>
        <p>Nội dung trên được biến thành c̷h̷ữ̷ ̷x̷i̷ê̷n̷ ̷c̷h̷é̷o̷ trong ô dưới
            đây</p>
        <textarea rows="5" class="text-output"></textarea>
        <button class="btn btn-primary btn-copy tooltip" title="Copied!">Copy</button>
        <p>Hãy copy chữ này và paste vào hộp status đăng lên FaceBook hoặc chat Yahoo</p>
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
                   data:{input:input, type:1},
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
