<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Google AI Demo</title>
</head>
<body>
    <h2>Trang Web sử dụng Google AI API</h2>

    <form method="POST" action="/ai">
        <?php echo csrf_field(); ?>
        <input type="text" name="question" placeholder="Nhập câu hỏi..." style="width:300px" required>
        <button type="submit">Gửi</button>
    </form>

    <?php if(isset($answer)): ?>
        <hr>
        <h3>Câu hỏi:</h3>
        <p><?php echo e($question); ?></p>

        <h3>Trả lời từ AI:</h3>
        <p><?php echo e($answer); ?></p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH D:\laragon\www\web-ai-lab-1\resources\views/ai.blade.php ENDPATH**/ ?>