<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اللغة المحفوظة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>اللغة المحفوظة</h1>
        <p>اللغة التي تم حفظها هي: <strong>{{ $language }}</strong></p>

        <a href="/choose-language" class="btn btn-primary">اختيار لغة أخرى</a>
    </div>
</body>
</html>
