<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
let json_resp = fetch("http://127.0.0.1:8000/ajax", {
    method: "GET",
    headers: {
        "Content-Type": "application/json"
    }
}).then((response)=>{
    return response.json();
}).then((jsonData)=>{
    console.log(jsonData);
});
</script>
</body>
</html>
