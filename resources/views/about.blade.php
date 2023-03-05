@extends('layouts.index')

@section('title', 'About')

@push('css')
    @vite(['resources/scss/about.scss'])
@endpush

@section('content')
    <div class="content">
        <div class="row title">
            <span>About me</span>
        </div>
        <div class="row about">
            <div class="col-6 about__avatar">
                <img src="{{ asset('assets/images/avatar.jpg') }}" alt="">
            </div>
            <div class="col-6">
                Tôi là Tuấn một fresher lập trình web . Với tài năng và kiến thức của mình, tôi đã tạo ra nhiều ứng dụng web
                độc đáo và chất lượng cao, từ các trang web cá nhân cho đến các hệ thống quản lý nội dung lớn.<br />

                Tôi có kiến thức sâu rộng về nhiều ngôn ngữ lập trình và công nghệ web phổ biến như HTML, CSS, JavaScript,
                PHP và MySQL. Với khả năng tương tác với các khách hàng và hiểu được yêu cầu của họ, tôi luôn tìm cách đưa
                ra giải pháp lập trình web tốt nhất cho các dự án của mình.<br />

                Ngoài ra, Tôi cũng rất đam mê và cập nhật với các xu hướng mới nhất trong lĩnh vực công nghệ thông tin. Tôi
                luôn tìm kiếm cách để phát triển kỹ năng của mình, học hỏi từ các chuyên gia hàng đầu và áp dụng kiến thức
                mới vào các dự án của mình.<br />

                Với sự tận tụy và tâm huyết của mình với nghề, Tôi đã trở thành một lập trình viên web rất được khách hàng
                đánh giá cao. Tôi luôn cố gắng tạo ra các sản phẩm web đẹp, tối ưu và dễ sử dụng, mang lại trải nghiệm người
                dùng tốt nhất cho khách hàng của mình.<br />

                Nếu bạn đang cần tìm kiếm một lập trình viên web tài năng và đáng tin cậy, hãy liên hệ với Tôi qua emai hoặc
                các kênh liên hệ khác tôi có để dưới footer hoặc thậm chí bạn cũng có thể liên hệ với tôi qua số:
                0364887508. Tôi sẽ mang lại cho bạn các giải pháp web chất lượng cao và đáp ứng các yêu cầu của bạn một cách
                tốt nhất.
            </div>
        </div>
    </div>
@endsection
