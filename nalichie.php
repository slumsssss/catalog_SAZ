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
    transition: ease all 0.6s;
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

table tbody:hover tr:hover td {
  color: white;
  background-color: #A21B2C;
  transition: ease all 0.6s;
}
table .yes{
    background-color: green;
    text-align: center;
  font-size: 20px; 
  padding: 5px 5px 5px 5px;
  transition: ease all 0.6s;
  border-radius: 15px;
  color: white;
}
table .no{
    background-color: red;
    text-align: center;
  font-size: 20px; 
  padding: 5px 5px 5px 5px;
  transition: ease all 0.6s;
  border-radius: 15px;
  color: white;
}
</style>
<body>
    <div class="page">
        <div class="image">
            <img src="1_0.png" alt="">
        </div>
        <div class="table">
            <table>
                <colgroup>
                </colgroup>
                <thead>
                    <tr style="font-size: 55px;font-weight: bold; color:#A21B2C;">
                    <th  colspan = "3" style="text-align: center;">БЕЛАРУС - 152</th>
                    <tr style="font-size: 25px;font-weight: bold; color:#A21B2C; text-align:center">
                        <td >Номер</td>
                        <td >Трансмиссия</td>
                        <td>Наличие</td>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                        <tr id="1"><td class="back">1</td><td class="back">Редуктор</td><td class="back">&#9989;</td></tr>
                        <tr id="2"><td class="back">2</td><td class="back">Мост передний</td><td class="back">	&#10060;</td></tr>
                        <tr id="3"><td class="back">3</td><td class="back">Мост задний</td><td class="back">&#10060;</td></tr>
                        <tr id="4"><td class="back">4</td><td class="back">Рама шарнирная</td><td class="back">&#9989;</td></tr>
                        <tr id="6"><td class="back">6</td><td class="back">Прокладка</td><td class="back">&#10060;</td></tr>
                        <tr id="8"><td class="back">8</td><td class="back">Прокладка</td><td class="back">&#9989;</td></tr>
                        <tr id="10"><td class="back">10</td><td class="back">Болт</td><td class="back">&#9989;</td></tr>
                        <tr id="11"><td class="back">11</td><td class="back">Болт</td><td class="back">&#9989;</td></tr>
                        <tr id="13"><td class="back">13</td><td class="back">Шайба</td><td class="back">&#9989;</td></tr>

                     
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>

<script>

const zagl_btn = document.querySelectorAll("tbody tr");
const img = document.querySelector(".image img");


zagl_btn.forEach(function(btn) {
  btn.addEventListener('mouseover', function(e) {
    let id = this.id;
    img.setAttribute('src', '1_'+id+'.png')
  })
});
zagl_btn.forEach(function(btn) {
  btn.addEventListener('mouseout', function(e) {
    let id = this.id;
    img.setAttribute('src', '1_0.png')
  })
});

</script>