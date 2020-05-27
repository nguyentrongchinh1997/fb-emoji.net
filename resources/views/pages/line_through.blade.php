@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo chữ gạch ngang trên facebook nhanh nhất</h2>
        <p>
            Công cụ này tạo ra văn bản gạch ngang (t̵h̵ế̵ ̵n̵à̵y̵), để bạn có thể sao chép / dán vào Facebook, Twitter, YouTube, SMS, vân vân. Văn bản gạch ngang thường được dùng để lưu ý đã xem hoặc chỉnh sửa, khi bạn muốn để lại văn bản gốc để giữ nguyên tính minh bạch và công khai. Phông chữ này cũng có thể được dùng để gạch lỗi, châm biếm hoặc gạch các việc đã làm trong danh sách.
        </p>
        <p><b>Gõ chữ muốn gạch ngang làm Status Facebook/Yahoo:</b></p>
        <textarea rows="5" class="text-input"></textarea>
        <p><b>Kết quả:</b></p>
        <textarea rows="5" class="text-output"></textarea>
        <button class="btn btn-primary btn-copy tooltip" title="Copied!">Copy</button>
        <p>Hãy copy chữ gạch ngang này và paste vào hộp status đăng lên FaceBook hoặc chat Yahoo</p>
    </div>
@endsection

@section('js')
    <script>
        $(function () {
            $('.text-input').on('input', function () {
                let textInput = $(this).val();
                let textOutput = '';
                for (let i = 0; i < textInput.length; i++) {
                    textOutput += '̶' + textInput.charAt(i) + '̶';
                }
                $('.text-output').val(textOutput);
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
