 <div class="faq-container">
     <div class="faq-wrapper">
         <p>The Begninning of a New Asset class</p>
         <h1>Frequently Asked Questions</h1>

         <div class="faq">
             <button class="accordion">
                 What is Krushi?
                 <i class="fa-solid fa-chevron-down"></i>
             </button>
             <div class="pannel">
                 <p>
                     Krushi is a Public Charitable Trust designed to carry out farming on
                     extensive scale Natural & Sustainable methods.
                 </p>
             </div>
         </div>

         <div class="faq">
             <button class="accordion">
                 How does it work?
                 <i class="fa-solid fa-chevron-down"></i>
             </button>
             <div class="pannel">
                 <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                     saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                     ullam, iure eligendi harum eaque hic corporis debitis porro
                     consectetur voluptate rem officiis architecto.
                 </p>
             </div>
         </div>

         <div class="faq">
             <button class="accordion">
                 What are the major challanges of current agriculture?
                 <i class="fa-solid fa-chevron-down"></i>
             </button>
             <div class="pannel">
                 <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                     saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                     ullam, iure eligendi harum eaque hic corporis debitis porro
                     consectetur voluptate rem officiis architecto.
                 </p>
             </div>
         </div>

         <div class="faq">
             <button class="accordion">
                 How does the Krushi address the above challanges?
                 <i class="fa-solid fa-chevron-down"></i>
             </button>
             <div class="pannel">
                 <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                     saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                     ullam, iure eligendi harum eaque hic corporis debitis porro
                     consectetur voluptate rem officiis architecto.
                 </p>
             </div>
         </div>

         <div class="faq">
             <button class="accordion">
                 How can I be a part of Krushi?
                 <i class="fa-solid fa-chevron-down"></i>
             </button>
             <div class="pannel">
                 <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                     saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                     ullam, iure eligendi harum eaque hic corporis debitis porro
                     consectetur voluptate rem officiis architecto.
                 </p>
             </div>
         </div>

         <div class="faq">
             <button class="accordion">
                 How does it work?
                 <i class="fa-solid fa-chevron-down"></i>
             </button>
             <div class="pannel">
                 <p>
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis
                     saepe molestiae distinctio asperiores cupiditate consequuntur dolor
                     ullam, iure eligendi harum eaque hic corporis debitis porro
                     consectetur voluptate rem officiis architecto.
                 </p>
             </div>
         </div>
     </div>
 </div>

 <script>
     var acc = document.getElementsByClassName("accordion");
     var i;

     for (i = 0; i < acc.length; i++) {
         acc[i].addEventListener("click", function() {
             this.classList.toggle("active");
             this.parentElement.classList.toggle("active");

             var pannel = this.nextElementSibling;

             if (pannel.style.display === "block") {
                 pannel.style.display = "none";
             } else {
                 pannel.style.display = "block";
             }
         });
     }
 </script>