<?php

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $ID = $row['ID'];
    $type = $row['type'];
    $name = $row['name'];
    $image = $row['image'];
    $pref1 = $row['pref1'];
    $pref2 = $row['pref2'];
    $pref3 = $row['pref3'];
    $pref4 = $row['pref4'];
    $pref5 = $row['pref5'];
    $cost = $row['cost'];
    $releaseDate = $row['releaseDate'];
    $function = $row['function'];
    $microphone = $row['microphone'];
    $cableLength = $row['cableLength'];
    $emitterDiameter = $row['emitterDiameter'];
    $resistance = $row['resistance'];
    $weight = $row['weight'];
    $btCodecs = $row['btCodecs'];
    $nfc = $row['nfc'];
    $kit = $row['kit'];


    echo "
<div class=\"accordion-item\">
<h2 class=\"accordion-header\" id=\"heading".$ID."\">
  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse".$ID."\" aria-expanded=\"false\" aria-controls=\"collapse".$ID."\">
    <div class=\"itemInfo\">
      <div class=\"infoBox\">
        <div class=\"itemImage\">
          <img src=\"".$image."\">
        </div>
        <div class=\"textInfo\">
          <div class=\"fullName\">".$type."<br><span class=\"modelName\">".$name."</span></div>
            <div class=\"features\">";

            if(strlen($pref1) > 0){
              echo "<div>".$pref1."</div>";
            }
            if (strlen($pref2) > 0){
              echo "<div>".$pref2."</div>";
            }
            if (strlen($pref3) > 0){
              echo "<div>".$pref3."</div>";
            }
            if (strlen($pref4) > 0){
              echo "<div>".$pref4."</div>";
            }
            if (strlen($pref5) > 0){
              echo "<div>".$pref5."</div>";
            }
              
    echo "
            </div>
          </div>
      </div> 
      <div class=\"cost\">".$cost." р.</div> 
    </div>
  </button>
</h2>
<div id=\"collapse".$ID."\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading".$ID."\" data-bs-parent=\"#accordionExample\">
  <div class=\"accordion-body\">
    <pre class=\"fullSpecs\">
      <strong>Год выпуска:</strong> ".$releaseDate."
      <strong>Назначение:</strong> ".$function."
      <strong>Конструкция микрофона:</strong> ".$microphone."
      <strong>Длина кабеля:</strong> ".$cableLength." м
      <strong>Диаметр излучателя:</strong> ".$emitterDiameter." мм
      <strong>Сопротивление:</strong> ".$resistance."
      <strong>Вес:</strong> ".$weight." г
      <strong>Аудиокодеки Bluetooth:</strong> ".$btCodecs."
      <strong>NFC:</strong> ".$nfc."
      <strong>Комплектация:</strong> ".$kit."
    </pre>
    <a class=\"buyButton\">Купить</a>
  </div>
</div>
</div>
";
    
}

?>