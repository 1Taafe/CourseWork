<?php 

            $sql = "SELECT * FROM (SELECT * FROM products ORDER BY id DESC LIMIT 4) t ORDER BY id ";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
              $ID = $row['ID'];
              $type = $row['type'];
              $name = $row['name'];
              $image = $row['image'];
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
                <div class=\"col-lg-3\">
                  <div class=\"card catalogCards\">
                    <img src=\"".$image."\" class=\"card-img-top\" alt=\"".$name."\">
                    <div class=\"card-body\">
                      <div class=\"card-text cardFeatures\">
                        <div>Новинка</div>
                      </div>
                      <h6 class=\"card-subtitle\">".$type."</h6>
                      <h5 class=\"card-title cardModelName\">".$name."</h5>
                      ";
                  
                        

                      echo "
                      <a class=\"aboutButton\">Подробнее</a>
                      <a class=\"cardButton\">Купить</a>
                      <div class=\"cardCost\">".$cost." р.</div>
                    </div>
                  </div>
                </div>

                <div class=\"cardMoreInfo\">
                  <div class=\"fullInfo\">
                    <a class=\"closeInfo\"><i class=\"bi bi-x-circle\"></i></a>
                    <h6 class=\"card-subtitle\">".$type."</h6><h5 class=\"card-title cardInfoModelName\">".$name."</h5>
                    <div><strong>Год выпуска:</strong> ".$releaseDate."</div>
                    <div><strong>Назначение:</strong> ".$function."</div>
                    <div><strong>Конструкция микрофона:</strong> ".$microphone."</div>
                    <div><strong>Длина кабеля:</strong> ".$cableLength." м</div>
                    <div><strong>Диаметр излучателя:</strong> ".$emitterDiameter." мм</div>
                    <div><strong>Сопротивление:</strong> ".$resistance."</div>
                    <div><strong>Вес:</strong> ".$weight." г</div>
                    <div><strong>Аудиокодеки Bluetooth:</strong> ".$btCodecs."</div>
                    <div><strong>NFC:</strong> ".$nfc."</div>
                    <div><strong>Комплектация:</strong> ".$kit."</div>
                    <a class=\"cardInfoButton\">Купить</a>
                    <div class=\"infoCost\">".$cost." р.</div>
                  </div>
                  <img src=\"".$image."\">
                </div>
              ";
            }
          ?>