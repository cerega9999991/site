<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SelectHTML</title>
    <script>
    var links= new Object;
            links['Яндекс'] = "http://www.yandex.ru";
            links['Рамблер'] = "http://www.rambler.ru";
            links['Гугл'] = "http://www.google.com";
            links['Axe'] = "https://vk.com/aksenova_m";
            links['Axe1'] = "https://vk.com/id13878930";
            links['Axe2'] = "  ";
        
        
        
        function goToURL(){
            var s = document.myForm.selURL;
            var url = s.options[s.selectedIndex].value;
            location.assign(url);
        }
    </script>
</head>
<body>
    <form id='myForm' name="myForm">
       <label for="selURL"  disable>Выберите адрес</label><br>
        <select name="selURL" id="selURL"  disable></select>
        <a href="javascript:goToURL()">Переход</a>
    </form>
    
    
    <script type="text/javascript">

         var s = document.myForm.selURL;
         for(var linkName in links){
             var o = new Option(linkName,links[linkName]);
             /* var o = new option();  o.value = links[linkName];  o.text = linkName; */
                 s.add(o);
         }
         var f = document.myForm;
        for(var i=0; i<f.elements.length;i++){
            f.elements[i].disabled = false;
        }
            
    </script>
</body>
</html>