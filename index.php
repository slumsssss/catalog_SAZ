<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
</head>
<style>
    *{
        margin: 0;
  padding: 0;
  font-family: 'Oswald', sans-serif;
}
    .page .image{
    display: flex;
    justify-content: center;
}
.page .table{
    display: flex;
  justify-content: center;
}
tbody .zagl{
   text-align: center;
   font-size: 25px; 
   height:80px;
   color:#A21B2C;
   font-weight: bold;
   padding: 5px 5px 5px 5px;
}
table .back{
    background:#CFD3D4;
  text-align: center;
  font-size: 20px; 
  padding: 5px 5px 5px 5px;
  cursor: pointer;
  transition: ease all 0.6s;
  border-radius: 15px;
}
table .back:hover{
    background:#A21B2C;
    color: white;
    
}
</style>
<body>
    <div class="page">
        <div class="image">
            <img src="Аннотация 2024-02-09 101157.png" alt="">
        </div>
        <div class="table">
            <table>
                <colgroup>
                </colgroup>
                <thead>
                    <tr style="font-size: 55px;font-weight: bold; color:#A21B2C;">
                    <th  style="text-align: center;">БЕЛАРУС - 152</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="zagl">
                        <td >Трансмиссия</td>
                    </tr>
                    <tr>
                        <td class="back" id="1">Трансмиссия</td>
                    </tr>

                    <tr>
                    <td class="zagl">Система питания</td>
                    </tr>
                    <tr>
                        <td class="back" id="2">Управление подачей топлива</td>
                    </tr>

                    <tr>
                    <td class="zagl">Сцепление</td>
                    </tr>
                        <tr><td class="back">Редуктор</td></tr>
                        <tr><td class="back">Муфта фрикционная</td></tr>
                        <tr><td class="back">Управление сцеплением</td></tr>
                        <tr><td class="back">Трос</td></tr>
                   
                    <tr>
                        <td class="zagl">Коробка передач</td>
                    </tr>
                        <tr><td class="back">Коробка передач</td></tr>
                        <tr><td class="back">Стакан</td></tr>
                        <tr><td class="back">Вал первичный</td></tr>
                        <tr><td class="back">Крышка 082-1702090-Б</td></tr>
                        <tr><td class="back">Крышка 155-1702110</td></tr>
                        <tr><td class="back">Механизм переключения коробки передач</td></tr>
                        <tr><td class="back">Механизм управления</td></tr>
                        <tr><td class="back">Управление реверсом</td></tr>
                        <tr><td class="back">Вал вторичный</td></tr>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>

<script>

const zagl_btn = document.querySelectorAll("tbody .back");
const img = document.querySelector(".image img");


zagl_btn.forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    let id = this.id;
    alert(id);
    window.location.href = 'nalichie.php'+'#'+id;
  })
});


</script>