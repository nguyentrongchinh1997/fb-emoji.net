@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tải Video từ Facebook</h2>
        <p>
            Các bước tải video từ Facebook:
        </p>
        <ul>
            <li>
                <b>Bước 1:</b> Dán link video vào ô input phía dưới
            </li>
            <li>
                <b>Bước 2:</b> Click button tải về
            </li>
        </ul>
        <p>
            Nhập link video Facebook
        </p>
        <input placeholder="Nhập Url video Facebook..." type="text" class="url form-control" name="">
        <button type="submit" class="button download">Tải về</button>
        <div class="result">
            <img src="" id="loading">
            <div class="video"></div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $('.download').click(function(){
            url = $('.url').val();
            
            if (url != '') {
                $('#loading').attr('src', "assets/images/200.gif");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                   type:'POST',
                   url:"{{route('convert_video')}}",
                   data:{url:url},
                   success:function(data){
                        $('.video').html(data);
                        $('#loading').attr('src', "");
                   }
                });
            } else {
                alert('Cần nhập link video');
            }
        })
    </script>
@endsection