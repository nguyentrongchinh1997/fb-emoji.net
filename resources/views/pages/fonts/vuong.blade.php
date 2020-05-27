@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo chữ vuông trên facebook nhanh nhất</h2>
        <p>
            Sử dụng công cụ này để tạo ra các hộp vuông với ký tự chữ bên trong. Bạn có thể dùng các ký tự này để đăng chữ kiểu người treo cổ & Bánh xe Số phận trên Twitter và Facebook. 🅆🄰🄽🄽🄰 🄱🅄🅈 🄰 🅅🄾🅆🄴🄻? hoặc.. sử dụng kiểu phông chữ này để khiến văn bản của bạn trông độc đáo hơn. Vì hình vuông luôn độc ;)
        </p>
        <p><b>Gõ chữ muốn vuông làm Status Facebook/Yahoo:</b></p>
        <textarea rows="5" class="text-input"></textarea>
        <p><b>Kết quả:</b></p>
        <textarea rows="5" class="text-output"></textarea>
        <button class="btn btn-primary btn-copy tooltip" title="Copied!">Copy</button>
        <p>Hãy copy chữ vuông này và paste vào hộp status đăng lên FaceBook hoặc chat Yahoo</p>
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
                   data:{input:input, type:5},
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
