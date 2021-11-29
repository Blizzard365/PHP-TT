<!DOCTYPE html>
<html>
<head>
    <title>Результаты ТЗ PHP</title>
</head>
<body>

<?php
function revertCharacters($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
?>
<h1 style="text-align: center; margin-bottom: 40px">Результаты ТЗ PHP</h1>
<div>
    <h4 style="margin-left: 40px">Тест 1</h4>
    <p>
        <?echo revertCharacters("Привет! Давно не виделись."); // 1 тест: .ьсиледив ен онваД !тевирП?>
        <br>
    </p>
    <h4 style="margin-left: 40px">Тест 2</h4>
    <p>
        <?echo revertCharacters("Я люблю PHP!"); // 2 тест: !PHP юлбюл Я! ?>
        <br>
    </p>
    <h4 style="margin-left: 40px">Тест 3</h4>
    <p>
        <?echo revertCharacters("Добрый день!"); // 3 тест: !ьнед йырбоД ?>
        <br>
    </p>
    <h4 style="margin-left: 40px">Тест 4</h4>
    <p>
        <?// 4 тест: .вотйас-бев хиксечиманид яинадзос ялд ясхищюянемирп ,вокызя идерс воредил зи миндо ястеялвя и воредйаворп-гнитсох мовтснишьлоб мищюялвадоп ястеавижреддоп ямерв еещяотсан В .йинежолирп-бев иктобарзар ялд йымеянемирп онвиснетни ,яинечанзан огещбо кызя йывотпиркс — PHP
        echo revertCharacters("PHP — скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов.");  ?>
    </p>
    <h3>Сама функция</h3>
    <h4>
        function revertCharacters($str){
        <br>
    $r = '';
    <br>
    for ($i = mb_strlen($str); $i>=0; $i--) {
    <br>
        $r .= mb_substr($str, $i, 1);
        <br>
    }
    <br>
    return $r;
    <br>
}
    </h4>
</div>


</body>
</html>


