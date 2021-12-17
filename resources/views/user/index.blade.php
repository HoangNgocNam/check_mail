<div>
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form action="{{ route('checkEmail') }}" method="post">
        @csrf
        <label for="email-input">Email</label>
        <input type="text" placeholder="Nhập email" name="email">
        <button type="submit">check</button>
    </form>
    @if(isset($isEmail))
        kêt quả: {{ $isEmail ? 'Đúng định dạng Email':'Sai định dạng Email' }};
    @endif
</div>
