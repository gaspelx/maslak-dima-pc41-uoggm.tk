(function ($) {
    $(document).ready(function () {
        document.getElementById('form41315104').addEventListener('submit', sub, false);
        function sub(evt){
            var http = new XMLHttpRequest(), f = this;
            evt.preventDefault();
            http.open("POST", "form.php", true);
            http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            http.send("Name=" + f.Name.value + "&Phone=" + f.Phone.value);
            http.onreadystatechange = function() {
                if (http.readyState == 4 && http.status == 200) {
                    //alert(http.responseText + ', Ваше сообщение получено.\nНаши специалисты ответят Вам в течении 2-х дней.\nБлагодарим за интерес к нашей фирме!');
                    t702_closePopup();
                    alert('Спасибо за Ваше обращение! Скоро с Вами свяжутся');
                    //f.Textarea.removeAttribute('value'); // очистить поле сообщения (две строки)
                    //f.Textarea.value='';
                } else {
                    alert('Спасибо за Ваше обращение! Скоро с Вами свяжутся');
                }
            }
            http.onerror = function() {
                alert('Извините, данные не были переданы');
            }
        }
    })
})(jQuery)