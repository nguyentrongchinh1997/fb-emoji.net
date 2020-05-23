@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo chữ gạch ngang trên facebook nhanh nhất</h2>
        <p>Bạn muốn tạo chữ gạch ngang để đăng trên status Facebook hay Yahoo hiệu quả nhất?</p>
        <p>Không khó khăn, công cụ dưới đây sẽ giúp bạn tạo các chữ dạng gạch ngang, xóa bỏ trên Facebook, Yahoo mà
            không cần dùng app hay phần mềm nào.</p>
        <p>Cách làm và nguyên tắc</p>
        <ul>
            <li><b>Bước 1:</b> Bạn gõ chữ muốn tạo gạch ngang vào ô thư nhất. Cương trình sẽ tự sinh ra chữ gạch ngang
                tương
                ứng trong ô thứ hai cho bạn.
            </li>
            <li><b>Bước 2:</b> Bạn copy chữ đã gạch ngang trong ô thứ hai, và paste vào status Facebook, Chat Yahoo và
                đăng.
            </li>
        </ul>
        <p>Đây là công cụ làm chữ gạch ngang. Các bạn làm theo hước dẫn để có chữ gạch ngang nhé (Hỗ trợ mọi kiểu chữ:
            Viết thường, viết hoa, số, tiếng Việt)</p>
        <p><b>Gõ chữ muốn gạch ngang làm Status Facebook/Yahoo:</b></p>
        <textarea rows="5" class="text-input"></textarea>
        <p>Nội dung trên được biến thành <span style="text-decoration: line-through">chữ gạch ngang</span> trong ô dưới
            đây</p>
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
