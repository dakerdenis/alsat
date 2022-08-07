   <!------popup тело---->
   <div id="popup" class="popup">
      <div class="popup__body">
         <div class="popup__content">
            <a href="#header" class="popup__close close-popup">&#10006;</a>
            <div class="popup__wrapper_content popup__wrapper_content2">
               <!---публикация нужная-->
               <div class="popup__wrapper_block">
                  <?php include './content/account__page/account__block_maketop.php' ?>
               </div>
               <!----блок с кнопками где выводится цена------>
               <div class="popup__content__container popup__content__container2">
                  <div class="popup__verification_title">Верификация публикаций</div>
                  <!-----описание раздела---->
                  <div class="popup__verification__desc">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt commodi excepturi omnis eos repellendus quisquam, rem, repellat provident voluptatem pariatur atque quae repudiandae, amet incidunt vel quam eveniet similique iure.
                  </div>
                  <!---загрузка документов--->
                  <div class="popup__verification__upload">
                     <!---блок загрузки картинки--->
                     <div class="center">
                        <div class="form-input">
                           <label for="file-ip-1">Загрузить </label>
                           <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                           <div class="preview">
                              <img id="file-ip-1-preview">
                           </div>

                        </div>
                     </div>
                     <!---блок загрузки картинки--->
                     <div class="center">
                        <div class="form-input">
                           <label for="file-ip-2">Загрузить</label>
                           <input type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">
                           <div class="preview">
                              <img id="file-ip-2-preview">
                           </div>

                        </div>
                     </div>
                     <!---блок загрузки картинки--->
                     <div class="center">
                        <div class="form-input">
                           <label for="file-ip-3">Загрузить</label>
                           <input type="file" id="file-ip-3" accept="image/*" onchange="showPreview3(event);">
                           <div class="preview">
                              <img id="file-ip-3-preview">
                           </div>

                        </div>
                     </div>


                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>