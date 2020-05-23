@extends('layouts.master')

@section('main-class', 'full-height')

@section('content')
    <div class="main-content">
        <h2>Tạo QR Code online miễn phí</h2>
        <p>Công cụ tạo mã QR Code trực tuyến miễn phí cho website, danh thiếp (name card) hay làm Mật khẩu Wifi, Email,
            Website, Vị trí, SMS, Số điện thoại... Bạn có thể thêm QR Code có logo, hình ảnh riêng giúp tạo điểm nhất,
            đặc trưng cho QR Code của bạn</p>
        <div class="qr-code-content">
            <div class="info">
                <p><b>Tải lên logo của bạn hoặc một watermark:</b></p>
                <input type="file" class="qr-logo">
                <p><b>Màu nền:</b> <i class="fa fa-qrcode"></i> <span class="required">(*)</span></p>
                <input type="color" value="#F5F6F7" class="background-color">
                <span class="background-color-val">#F5F6F7</span>
                <p><b>Màu mã QR Code:</b> <i class="fa fa-qrcode"></i> <span class="required">(*)</span></p>
                <input type="color" value="#222222" class="color">
                <span class="color-val">#222222</span>
                <p><b>Kích thước:</b> <span class="required">(*)</span></p>
                <select class="size">
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="10" selected>10</option>
                    <option value="12">12</option>
                    <option value="14">14</option>
                    <option value="16">16</option>
                </select>
                <p><b>Độ chính xác:</b> <span class="required">(*)</span></p>
                <select class="quality">
                    <option value="L">L - Smallest</option>
                    <option value="M" selected>M - Medium</option>
                    <option value="Q">Q - High</option>
                    <option value="H">H - Best</option>
                </select>
                <p><b>Loại mã QR Code:</b> <span class="required">(*)</span></p>
                <select class="qr-code-type">
                    <option value="">Chọn...</option>
                    <option value="1">Liên kết</option>
                    <option value="2">Nội dung</option>
                    <option value="3">Wifi</option>
                    <option value="4">Email</option>
                </select>
                <div class="url-section qr-section-detail">
                    <p><b>Nhập liên kết:</b></p>
                    <input type="text" class="qr-url">
                </div>
                <div class="content-section qr-section-detail">
                    <p><b>Nhập nội dung:</b></p>
                    <textarea rows="5" class="qr-content"></textarea>
                </div>
                <div class="wifi-section qr-section-detail">
                    <p><b>Network name:</b></p>
                    <input type="text" class="network-name">
                    <p><b>Network type:</b></p>
                    <select class="network-type">
                        <option value="WEP">WEP</option>
                        <option value="WPA/WPA2" selected>WPA/WPA2</option>
                        <option value="">No encryption</option>
                    </select>
                    <p><b>Mật khẩu:</b></p>
                    <input type="password" class="password">
                </div>
                <div class="email-section qr-section-detail">
                    <p><b>Gửi đến:</b></p>
                    <input type="email" class="email-to">
                    <p><b>Subject:</b></p>
                    <input type="text" class="email-subject">
                    <p><b>Nội dung:</b></p>
                    <textarea rows="5" class="email-content"></textarea>
                </div>
            </div>
            <div class="image">
                <div class="qr-code-img">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         width="300px" height="300px" viewBox="0 0 300 300">
                        <defs>
                            <rect id="r0" width="9" height="9" fill="#cccccc"/>
                        </defs>
                        <rect x="0" y="0" width="300" height="300" fill="#f5f6f7"/>
                        <use x="37" y="37" xlink:href="#r0"/>
                        <use x="46" y="37" xlink:href="#r0"/>
                        <use x="55" y="37" xlink:href="#r0"/>
                        <use x="64" y="37" xlink:href="#r0"/>
                        <use x="73" y="37" xlink:href="#r0"/>
                        <use x="82" y="37" xlink:href="#r0"/>
                        <use x="91" y="37" xlink:href="#r0"/>
                        <use x="109" y="37" xlink:href="#r0"/>
                        <use x="127" y="37" xlink:href="#r0"/>
                        <use x="145" y="37" xlink:href="#r0"/>
                        <use x="154" y="37" xlink:href="#r0"/>
                        <use x="181" y="37" xlink:href="#r0"/>
                        <use x="199" y="37" xlink:href="#r0"/>
                        <use x="208" y="37" xlink:href="#r0"/>
                        <use x="217" y="37" xlink:href="#r0"/>
                        <use x="226" y="37" xlink:href="#r0"/>
                        <use x="235" y="37" xlink:href="#r0"/>
                        <use x="244" y="37" xlink:href="#r0"/>
                        <use x="253" y="37" xlink:href="#r0"/>
                        <use x="37" y="46" xlink:href="#r0"/>
                        <use x="91" y="46" xlink:href="#r0"/>
                        <use x="118" y="46" xlink:href="#r0"/>
                        <use x="127" y="46" xlink:href="#r0"/>
                        <use x="136" y="46" xlink:href="#r0"/>
                        <use x="145" y="46" xlink:href="#r0"/>
                        <use x="154" y="46" xlink:href="#r0"/>
                        <use x="199" y="46" xlink:href="#r0"/>
                        <use x="253" y="46" xlink:href="#r0"/>
                        <use x="37" y="55" xlink:href="#r0"/>
                        <use x="55" y="55" xlink:href="#r0"/>
                        <use x="64" y="55" xlink:href="#r0"/>
                        <use x="73" y="55" xlink:href="#r0"/>
                        <use x="91" y="55" xlink:href="#r0"/>
                        <use x="109" y="55" xlink:href="#r0"/>
                        <use x="118" y="55" xlink:href="#r0"/>
                        <use x="127" y="55" xlink:href="#r0"/>
                        <use x="154" y="55" xlink:href="#r0"/>
                        <use x="172" y="55" xlink:href="#r0"/>
                        <use x="199" y="55" xlink:href="#r0"/>
                        <use x="217" y="55" xlink:href="#r0"/>
                        <use x="226" y="55" xlink:href="#r0"/>
                        <use x="235" y="55" xlink:href="#r0"/>
                        <use x="253" y="55" xlink:href="#r0"/>
                        <use x="37" y="64" xlink:href="#r0"/>
                        <use x="55" y="64" xlink:href="#r0"/>
                        <use x="64" y="64" xlink:href="#r0"/>
                        <use x="73" y="64" xlink:href="#r0"/>
                        <use x="91" y="64" xlink:href="#r0"/>
                        <use x="109" y="64" xlink:href="#r0"/>
                        <use x="118" y="64" xlink:href="#r0"/>
                        <use x="127" y="64" xlink:href="#r0"/>
                        <use x="145" y="64" xlink:href="#r0"/>
                        <use x="154" y="64" xlink:href="#r0"/>
                        <use x="163" y="64" xlink:href="#r0"/>
                        <use x="199" y="64" xlink:href="#r0"/>
                        <use x="217" y="64" xlink:href="#r0"/>
                        <use x="226" y="64" xlink:href="#r0"/>
                        <use x="235" y="64" xlink:href="#r0"/>
                        <use x="253" y="64" xlink:href="#r0"/>
                        <use x="37" y="73" xlink:href="#r0"/>
                        <use x="55" y="73" xlink:href="#r0"/>
                        <use x="64" y="73" xlink:href="#r0"/>
                        <use x="73" y="73" xlink:href="#r0"/>
                        <use x="91" y="73" xlink:href="#r0"/>
                        <use x="109" y="73" xlink:href="#r0"/>
                        <use x="136" y="73" xlink:href="#r0"/>
                        <use x="145" y="73" xlink:href="#r0"/>
                        <use x="163" y="73" xlink:href="#r0"/>
                        <use x="172" y="73" xlink:href="#r0"/>
                        <use x="199" y="73" xlink:href="#r0"/>
                        <use x="217" y="73" xlink:href="#r0"/>
                        <use x="226" y="73" xlink:href="#r0"/>
                        <use x="235" y="73" xlink:href="#r0"/>
                        <use x="253" y="73" xlink:href="#r0"/>
                        <use x="37" y="82" xlink:href="#r0"/>
                        <use x="91" y="82" xlink:href="#r0"/>
                        <use x="127" y="82" xlink:href="#r0"/>
                        <use x="136" y="82" xlink:href="#r0"/>
                        <use x="154" y="82" xlink:href="#r0"/>
                        <use x="163" y="82" xlink:href="#r0"/>
                        <use x="199" y="82" xlink:href="#r0"/>
                        <use x="253" y="82" xlink:href="#r0"/>
                        <use x="37" y="91" xlink:href="#r0"/>
                        <use x="46" y="91" xlink:href="#r0"/>
                        <use x="55" y="91" xlink:href="#r0"/>
                        <use x="64" y="91" xlink:href="#r0"/>
                        <use x="73" y="91" xlink:href="#r0"/>
                        <use x="82" y="91" xlink:href="#r0"/>
                        <use x="91" y="91" xlink:href="#r0"/>
                        <use x="109" y="91" xlink:href="#r0"/>
                        <use x="127" y="91" xlink:href="#r0"/>
                        <use x="145" y="91" xlink:href="#r0"/>
                        <use x="163" y="91" xlink:href="#r0"/>
                        <use x="181" y="91" xlink:href="#r0"/>
                        <use x="199" y="91" xlink:href="#r0"/>
                        <use x="208" y="91" xlink:href="#r0"/>
                        <use x="217" y="91" xlink:href="#r0"/>
                        <use x="226" y="91" xlink:href="#r0"/>
                        <use x="235" y="91" xlink:href="#r0"/>
                        <use x="244" y="91" xlink:href="#r0"/>
                        <use x="253" y="91" xlink:href="#r0"/>
                        <use x="127" y="100" xlink:href="#r0"/>
                        <use x="145" y="100" xlink:href="#r0"/>
                        <use x="37" y="109" xlink:href="#r0"/>
                        <use x="46" y="109" xlink:href="#r0"/>
                        <use x="55" y="109" xlink:href="#r0"/>
                        <use x="64" y="109" xlink:href="#r0"/>
                        <use x="91" y="109" xlink:href="#r0"/>
                        <use x="109" y="109" xlink:href="#r0"/>
                        <use x="127" y="109" xlink:href="#r0"/>
                        <use x="136" y="109" xlink:href="#r0"/>
                        <use x="145" y="109" xlink:href="#r0"/>
                        <use x="163" y="109" xlink:href="#r0"/>
                        <use x="172" y="109" xlink:href="#r0"/>
                        <use x="181" y="109" xlink:href="#r0"/>
                        <use x="190" y="109" xlink:href="#r0"/>
                        <use x="217" y="109" xlink:href="#r0"/>
                        <use x="226" y="109" xlink:href="#r0"/>
                        <use x="235" y="109" xlink:href="#r0"/>
                        <use x="253" y="109" xlink:href="#r0"/>
                        <use x="37" y="118" xlink:href="#r0"/>
                        <use x="73" y="118" xlink:href="#r0"/>
                        <use x="100" y="118" xlink:href="#r0"/>
                        <use x="109" y="118" xlink:href="#r0"/>
                        <use x="127" y="118" xlink:href="#r0"/>
                        <use x="145" y="118" xlink:href="#r0"/>
                        <use x="163" y="118" xlink:href="#r0"/>
                        <use x="181" y="118" xlink:href="#r0"/>
                        <use x="208" y="118" xlink:href="#r0"/>
                        <use x="244" y="118" xlink:href="#r0"/>
                        <use x="37" y="127" xlink:href="#r0"/>
                        <use x="55" y="127" xlink:href="#r0"/>
                        <use x="82" y="127" xlink:href="#r0"/>
                        <use x="91" y="127" xlink:href="#r0"/>
                        <use x="118" y="127" xlink:href="#r0"/>
                        <use x="127" y="127" xlink:href="#r0"/>
                        <use x="136" y="127" xlink:href="#r0"/>
                        <use x="145" y="127" xlink:href="#r0"/>
                        <use x="190" y="127" xlink:href="#r0"/>
                        <use x="55" y="136" xlink:href="#r0"/>
                        <use x="64" y="136" xlink:href="#r0"/>
                        <use x="73" y="136" xlink:href="#r0"/>
                        <use x="100" y="136" xlink:href="#r0"/>
                        <use x="109" y="136" xlink:href="#r0"/>
                        <use x="118" y="136" xlink:href="#r0"/>
                        <use x="127" y="136" xlink:href="#r0"/>
                        <use x="154" y="136" xlink:href="#r0"/>
                        <use x="172" y="136" xlink:href="#r0"/>
                        <use x="181" y="136" xlink:href="#r0"/>
                        <use x="199" y="136" xlink:href="#r0"/>
                        <use x="226" y="136" xlink:href="#r0"/>
                        <use x="235" y="136" xlink:href="#r0"/>
                        <use x="37" y="145" xlink:href="#r0"/>
                        <use x="55" y="145" xlink:href="#r0"/>
                        <use x="64" y="145" xlink:href="#r0"/>
                        <use x="91" y="145" xlink:href="#r0"/>
                        <use x="100" y="145" xlink:href="#r0"/>
                        <use x="109" y="145" xlink:href="#r0"/>
                        <use x="118" y="145" xlink:href="#r0"/>
                        <use x="127" y="145" xlink:href="#r0"/>
                        <use x="145" y="145" xlink:href="#r0"/>
                        <use x="154" y="145" xlink:href="#r0"/>
                        <use x="199" y="145" xlink:href="#r0"/>
                        <use x="217" y="145" xlink:href="#r0"/>
                        <use x="235" y="145" xlink:href="#r0"/>
                        <use x="244" y="145" xlink:href="#r0"/>
                        <use x="253" y="145" xlink:href="#r0"/>
                        <use x="46" y="154" xlink:href="#r0"/>
                        <use x="55" y="154" xlink:href="#r0"/>
                        <use x="64" y="154" xlink:href="#r0"/>
                        <use x="100" y="154" xlink:href="#r0"/>
                        <use x="136" y="154" xlink:href="#r0"/>
                        <use x="145" y="154" xlink:href="#r0"/>
                        <use x="154" y="154" xlink:href="#r0"/>
                        <use x="163" y="154" xlink:href="#r0"/>
                        <use x="172" y="154" xlink:href="#r0"/>
                        <use x="181" y="154" xlink:href="#r0"/>
                        <use x="190" y="154" xlink:href="#r0"/>
                        <use x="199" y="154" xlink:href="#r0"/>
                        <use x="208" y="154" xlink:href="#r0"/>
                        <use x="217" y="154" xlink:href="#r0"/>
                        <use x="253" y="154" xlink:href="#r0"/>
                        <use x="46" y="163" xlink:href="#r0"/>
                        <use x="64" y="163" xlink:href="#r0"/>
                        <use x="82" y="163" xlink:href="#r0"/>
                        <use x="91" y="163" xlink:href="#r0"/>
                        <use x="109" y="163" xlink:href="#r0"/>
                        <use x="127" y="163" xlink:href="#r0"/>
                        <use x="136" y="163" xlink:href="#r0"/>
                        <use x="163" y="163" xlink:href="#r0"/>
                        <use x="190" y="163" xlink:href="#r0"/>
                        <use x="199" y="163" xlink:href="#r0"/>
                        <use x="217" y="163" xlink:href="#r0"/>
                        <use x="235" y="163" xlink:href="#r0"/>
                        <use x="244" y="163" xlink:href="#r0"/>
                        <use x="37" y="172" xlink:href="#r0"/>
                        <use x="64" y="172" xlink:href="#r0"/>
                        <use x="127" y="172" xlink:href="#r0"/>
                        <use x="136" y="172" xlink:href="#r0"/>
                        <use x="163" y="172" xlink:href="#r0"/>
                        <use x="181" y="172" xlink:href="#r0"/>
                        <use x="190" y="172" xlink:href="#r0"/>
                        <use x="199" y="172" xlink:href="#r0"/>
                        <use x="208" y="172" xlink:href="#r0"/>
                        <use x="217" y="172" xlink:href="#r0"/>
                        <use x="253" y="172" xlink:href="#r0"/>
                        <use x="55" y="181" xlink:href="#r0"/>
                        <use x="73" y="181" xlink:href="#r0"/>
                        <use x="82" y="181" xlink:href="#r0"/>
                        <use x="91" y="181" xlink:href="#r0"/>
                        <use x="109" y="181" xlink:href="#r0"/>
                        <use x="118" y="181" xlink:href="#r0"/>
                        <use x="145" y="181" xlink:href="#r0"/>
                        <use x="163" y="181" xlink:href="#r0"/>
                        <use x="172" y="181" xlink:href="#r0"/>
                        <use x="181" y="181" xlink:href="#r0"/>
                        <use x="190" y="181" xlink:href="#r0"/>
                        <use x="199" y="181" xlink:href="#r0"/>
                        <use x="208" y="181" xlink:href="#r0"/>
                        <use x="217" y="181" xlink:href="#r0"/>
                        <use x="226" y="181" xlink:href="#r0"/>
                        <use x="235" y="181" xlink:href="#r0"/>
                        <use x="244" y="181" xlink:href="#r0"/>
                        <use x="253" y="181" xlink:href="#r0"/>
                        <use x="109" y="190" xlink:href="#r0"/>
                        <use x="118" y="190" xlink:href="#r0"/>
                        <use x="181" y="190" xlink:href="#r0"/>
                        <use x="217" y="190" xlink:href="#r0"/>
                        <use x="235" y="190" xlink:href="#r0"/>
                        <use x="253" y="190" xlink:href="#r0"/>
                        <use x="37" y="199" xlink:href="#r0"/>
                        <use x="46" y="199" xlink:href="#r0"/>
                        <use x="55" y="199" xlink:href="#r0"/>
                        <use x="64" y="199" xlink:href="#r0"/>
                        <use x="73" y="199" xlink:href="#r0"/>
                        <use x="82" y="199" xlink:href="#r0"/>
                        <use x="91" y="199" xlink:href="#r0"/>
                        <use x="118" y="199" xlink:href="#r0"/>
                        <use x="127" y="199" xlink:href="#r0"/>
                        <use x="154" y="199" xlink:href="#r0"/>
                        <use x="163" y="199" xlink:href="#r0"/>
                        <use x="181" y="199" xlink:href="#r0"/>
                        <use x="199" y="199" xlink:href="#r0"/>
                        <use x="217" y="199" xlink:href="#r0"/>
                        <use x="235" y="199" xlink:href="#r0"/>
                        <use x="244" y="199" xlink:href="#r0"/>
                        <use x="253" y="199" xlink:href="#r0"/>
                        <use x="37" y="208" xlink:href="#r0"/>
                        <use x="91" y="208" xlink:href="#r0"/>
                        <use x="118" y="208" xlink:href="#r0"/>
                        <use x="127" y="208" xlink:href="#r0"/>
                        <use x="136" y="208" xlink:href="#r0"/>
                        <use x="154" y="208" xlink:href="#r0"/>
                        <use x="163" y="208" xlink:href="#r0"/>
                        <use x="172" y="208" xlink:href="#r0"/>
                        <use x="181" y="208" xlink:href="#r0"/>
                        <use x="217" y="208" xlink:href="#r0"/>
                        <use x="37" y="217" xlink:href="#r0"/>
                        <use x="55" y="217" xlink:href="#r0"/>
                        <use x="64" y="217" xlink:href="#r0"/>
                        <use x="73" y="217" xlink:href="#r0"/>
                        <use x="91" y="217" xlink:href="#r0"/>
                        <use x="118" y="217" xlink:href="#r0"/>
                        <use x="154" y="217" xlink:href="#r0"/>
                        <use x="163" y="217" xlink:href="#r0"/>
                        <use x="181" y="217" xlink:href="#r0"/>
                        <use x="190" y="217" xlink:href="#r0"/>
                        <use x="199" y="217" xlink:href="#r0"/>
                        <use x="208" y="217" xlink:href="#r0"/>
                        <use x="217" y="217" xlink:href="#r0"/>
                        <use x="226" y="217" xlink:href="#r0"/>
                        <use x="244" y="217" xlink:href="#r0"/>
                        <use x="37" y="226" xlink:href="#r0"/>
                        <use x="55" y="226" xlink:href="#r0"/>
                        <use x="64" y="226" xlink:href="#r0"/>
                        <use x="73" y="226" xlink:href="#r0"/>
                        <use x="91" y="226" xlink:href="#r0"/>
                        <use x="109" y="226" xlink:href="#r0"/>
                        <use x="118" y="226" xlink:href="#r0"/>
                        <use x="190" y="226" xlink:href="#r0"/>
                        <use x="199" y="226" xlink:href="#r0"/>
                        <use x="217" y="226" xlink:href="#r0"/>
                        <use x="226" y="226" xlink:href="#r0"/>
                        <use x="235" y="226" xlink:href="#r0"/>
                        <use x="244" y="226" xlink:href="#r0"/>
                        <use x="253" y="226" xlink:href="#r0"/>
                        <use x="37" y="235" xlink:href="#r0"/>
                        <use x="55" y="235" xlink:href="#r0"/>
                        <use x="64" y="235" xlink:href="#r0"/>
                        <use x="73" y="235" xlink:href="#r0"/>
                        <use x="91" y="235" xlink:href="#r0"/>
                        <use x="109" y="235" xlink:href="#r0"/>
                        <use x="163" y="235" xlink:href="#r0"/>
                        <use x="172" y="235" xlink:href="#r0"/>
                        <use x="181" y="235" xlink:href="#r0"/>
                        <use x="190" y="235" xlink:href="#r0"/>
                        <use x="199" y="235" xlink:href="#r0"/>
                        <use x="217" y="235" xlink:href="#r0"/>
                        <use x="235" y="235" xlink:href="#r0"/>
                        <use x="244" y="235" xlink:href="#r0"/>
                        <use x="37" y="244" xlink:href="#r0"/>
                        <use x="91" y="244" xlink:href="#r0"/>
                        <use x="109" y="244" xlink:href="#r0"/>
                        <use x="118" y="244" xlink:href="#r0"/>
                        <use x="127" y="244" xlink:href="#r0"/>
                        <use x="136" y="244" xlink:href="#r0"/>
                        <use x="145" y="244" xlink:href="#r0"/>
                        <use x="154" y="244" xlink:href="#r0"/>
                        <use x="163" y="244" xlink:href="#r0"/>
                        <use x="190" y="244" xlink:href="#r0"/>
                        <use x="217" y="244" xlink:href="#r0"/>
                        <use x="235" y="244" xlink:href="#r0"/>
                        <use x="37" y="253" xlink:href="#r0"/>
                        <use x="46" y="253" xlink:href="#r0"/>
                        <use x="55" y="253" xlink:href="#r0"/>
                        <use x="64" y="253" xlink:href="#r0"/>
                        <use x="73" y="253" xlink:href="#r0"/>
                        <use x="82" y="253" xlink:href="#r0"/>
                        <use x="91" y="253" xlink:href="#r0"/>
                        <use x="109" y="253" xlink:href="#r0"/>
                        <use x="118" y="253" xlink:href="#r0"/>
                        <use x="136" y="253" xlink:href="#r0"/>
                        <use x="190" y="253" xlink:href="#r0"/>
                        <use x="199" y="253" xlink:href="#r0"/>
                        <use x="208" y="253" xlink:href="#r0"/>
                        <use x="217" y="253" xlink:href="#r0"/>
                        <use x="226" y="253" xlink:href="#r0"/>
                        <use x="235" y="253" xlink:href="#r0"/>
                        <use x="244" y="253" xlink:href="#r0"/>
                        <use x="253" y="253" xlink:href="#r0"/>
                    </svg>
                </div>
                <button class="btn btn-primary btn-create-qr-code"><i class="fa fa-magic"></i> Tạo QR Code</button>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function () {
            $('.qr-code-type').on('change', function () {
                let qrCodeType = $(this).val();
                $('.qr-section-detail.show').removeClass('show');
                if (qrCodeType === '1') {
                    $('.url-section').addClass('show');
                } else if (qrCodeType === '2') {
                    $('.content-section').addClass('show');
                } else if (qrCodeType === '3') {
                    $('.wifi-section').addClass('show');
                } else if (qrCodeType === '4') {
                    $('.email-section').addClass('show');
                }
            });

            $('.background-color').on('change', function () {
                let backgroundColor = $(this).val();
                $('.background-color-val').html(backgroundColor);
                $('.fa-qrcode').css({
                    backgroundColor: backgroundColor
                });
            });

            $('.color').on('change', function () {
                let color = $(this).val();
                $('.color-val').html(color);
                $('.fa-qrcode').css({
                    color: color
                });
            });

            $('.btn-create-qr-code').on('click', function () {
                let formData = new FormData();
                let qrLogo = $('.qr-logo')[0].files[0];
                let backgroundColor = $('.background-color').val();
                let color = $('.color').val();
                let size = $('.size').val();
                let quality = $('.quality').val();
                let qrCodeType = $('.qr-code-type').val();

                if (backgroundColor === '' || color === '' || size === '' || quality === '' || qrCodeType === '') {
                    alert('Nhập đủ nội dung trước khi tạo mã QR Code!');
                } else {
                    formData.append('_token', "{{csrf_token()}}");
                    formData.append('background-color', backgroundColor);
                    formData.append('color', color);
                    formData.append('size', size);
                    formData.append('quality', quality);
                    formData.append('qr-code-type', qrCodeType);

                    if (qrCodeType === '1') {
                        let qrUrl = $('.qr-url').val();
                        formData.append('qr-url', qrUrl);
                    } else if (qrCodeType === '2') {
                        let qrContent = $('.qr-content').val();
                        formData.append('qr-content', qrContent);
                    } else if (qrCodeType === '3') {
                        let networkName = $('.network-name').val();
                        let networkType = $('.network-type').val();
                        let password = $('.password').val();
                        formData.append('network-name', networkName);
                        formData.append('network-type', networkType);
                        formData.append('password', password);
                    } else if (qrCodeType === '4') {
                        let emailTo = $('.email-to').val();
                        let emailSubject = $('.email-subject').val();
                        let emailContent = $('.email-content').val();
                        formData.append('email-to', emailTo);
                        formData.append('email-subject', emailSubject);
                        formData.append('email-content', emailContent);
                    }
                    $.ajax({
                        url: "{{route('create-qr-code')}}",
                        data: formData,
                        type: 'post',
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            if (response.success) {
                                $('.qr-code-img').html(response.data);
                            } else {

                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
