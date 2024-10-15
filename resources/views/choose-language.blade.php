<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اختر لغتك</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <div class="container">
        <div class="card-header">
            <form action="/save-language" method="post">
                @csrf
                <div class="mb-3">
                    <label for="language" class="form-label">اللغة</label>
                    <select id="language" name="language" class="form-select" aria-label="Default select example">
                        <option value="english">الإنجليزية</option>
                        <option value="arbic">العربية</option>
                        <option value="espanch">الاسبانية</option>
                        <option value="kurde">الكردية</option>
                    </select>
                    <label for="remember-me">
                        <input type="checkbox" id="remember-me" name="remember-me"> ذكرني
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">حفظ اللغة</button>

            </form>
        </div>
        </div>
</body>
</html>


