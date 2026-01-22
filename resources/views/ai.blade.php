<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Google AI Demo</title>
</head>
<body>
    <h2>Trang Web sử dụng Google AI API</h2>

    <form method="POST" action="/ai">
        @csrf
        <input type="text" name="question" placeholder="Nhập câu hỏi..." style="width:300px" required>
        <button type="submit">Gửi</button>
    </form>

    @if(isset($answer))
        <hr>
        <h3>Câu hỏi:</h3>
        <p>{{ $question }}</p>

        <h3>Trả lời từ AI:</h3>
        <p>{{ $answer }}</p>
    @endif
</body>
</html>
