<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <?php
        echo'<p>Boa noite</p>'
    ?>
    <div id="box" style="width:200px;height:100px;padding:16px;border:1px solid #000;">
        Move mouse over this box
    </div>

</body>
<script>

    const box = document.getElementById("box");

    // Let box listen for mouseover
    box.addEventListener("mouseover", function () {
    box.innerHTML = "Mouse is over me!";
    });

    // Let box listen for mouseout
    box.addEventListener("mouseout", function () {
    box.innerHTML = "Move is out!";
    });

</script>
</html>