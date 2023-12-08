<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>驗證資料庫連線</title>
</head>
<body>
    <script>
        // 使用 AJAX 發送請求
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "check_connection.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // 解析 JSON 回應
                var response = JSON.parse(xhr.responseText);

                // 處理回應
                if (response.status === 'success') {
                    alert(response.message);  // 成功訊息
                } else {
                    alert(response.message);  // 失敗訊息
                }
            }
        };
        xhr.send();
    </script>
</body>
</html>
