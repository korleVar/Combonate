   <!-- обратная связь -->

   <section class="connection ">
       <div class="connection__content _container ">
           <div class=" header-block">
               <h2 class="header-block__title ">ОБРАТНАЯ СВЯЗЬ </h2>
           </div>
           <form class="form__connection" onsubmit="alert('Ваша заявка отправлена!');return false">
               <div class="form-text ">
                   <h3 class="form-header">ОСТАВЬТЕ КОНТАКТЫ, И <br> НАШ МЕНЕДЖЕР ОТВЕТИТ <br> НА ВАШИ ВОПРОСЫ </h3>
               </div>
               <div class="form-inner ">



                   <p><input value="" type="text" name="username" placeholder="Имя" maxlength="25"></p>
                   <p><input class="tel" type="text" value="+7(___)___-____"></p>
                   <p><input type="submit" value="Отправить"></p>
               </div>
           </form>
           <script>
           window.addEventListener("DOMContentLoaded", function() {
               function setCursorPosition(pos, elem) {

                   elem.focus();
                   if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
                   else if (elem.createTextRange) {
                       var range = elem.createTextRange();
                       range.collapse(true);
                       range.moveEnd("character", pos);
                       range.moveStart("character", pos);
                       range.select()
                   }
               }

               function mask(event) {
                   var matrix = this.defaultValue,
                       i = 0,
                       def = matrix.replace(/\D/g, ""),
                       val = this.value.replace(/\D/g, "");
                   def.length >= val.length && (val = def);
                   matrix = matrix.replace(/[_\d]/g, function(a) {
                       return val.charAt(i++) || "_"
                   });
                   this.value = matrix;
                   i = matrix.lastIndexOf(val.substr(-1));
                   i < matrix.length && matrix != this.defaultValue ? i++ : i = matrix.indexOf("_");
                   setCursorPosition(i, this)
               }
               var input = document.querySelector(".tel");;
               input.addEventListener("input", mask, false)
           });
           </script>

       </div>

   </section>