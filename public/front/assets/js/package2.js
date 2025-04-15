      // Initialize Swiper
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
         
          768: {
            slidesPerView: 3,
          },
         
          0: {
            slidesPerView: 1.4, 
          },
        },
        navigation: {
          nextEl: ".swiper-button-next", 
          prevEl: ".swiper-button-prev", 
        },
      });


    // Fetch data and populate Swiper slides
    fetch("https://hatf.sa/api/package")
      .then((response) => {
        if (!response.ok)
          throw new Error(`HTTP error! status: ${response.status}`);
        return response.json();
      })
      .then((data) => {
        console.log(data);
        const path = data.path;
        const pathImage = data.data[0].image;
        const fullPath = path + "/" + pathImage;
        console.log(fullPath);

        if (data.status === 200) {
          const swiperWrapper = document.getElementById("package-cards");
          data.data.forEach((packageItem) => {
            const slide = document.createElement("div");
            slide.classList.add("swiper-slide");

            // Generate HTML based on availability
            const packageCard =
              packageItem.availability === "available"
                ? `
                      <div class="d-flex flex-column align-items-center">
                          <div class="position-relative w-100 image-container-icon-slider">
                              <img src="${data.path}/${packageItem.image}" alt="Package 1" class="d-block w-100 card-img-top"
                                  data-bs-toggle="modal" data-bs-target="#imageModal">
                              <i class="fa-solid eye-icon fa-magnifying-glass"></i>
                          </div>
                          <div class="w-100" style="text-align: center; margin-top: 10px;">
                              <a href="https://wa.me/${packageItem.number}?text= ${data.path}/${packageItem.image} اريد الحصول على هذه الباقة"
                                  class="btn btn-light text-dark mt-3 " target="_blank">
                                  <i class="fa-brands fa-whatsapp"></i>
                                اطلبها الان
                              </a>
                          </div>
                      </div>`
                : `
                      <div class="d-flex flex-column align-items-center">
                          <div class="position-relative w-100">
                              <!-- class aftar  -->
                              <div id="specialContent" class="aftar">
                                  <img src="${data.path}/${packageItem.image}" alt="Package 1"
                                      class="d-block w-100">
                              </div>
                          </div>
                          <div class="w-100 container-a" style="text-align: center; margin-top: 10px;">
                              <a href="https://wa.me/${packageItem.number}?text= ${data.path}/${packageItem.image}  هل يمكننى حجز هذه الباقة!؟"
                                  class="btn btn-light text-dark mt-3 " target="_blank">
                                  <i class=" fa-brands fa-whatsapp"></i>
                                 احجزهاالان
                              </a>
                          </div>
                      </div>`;

            // Insert package card into slide
            slide.innerHTML = packageCard;
            swiperWrapper.appendChild(slide);
          });

          // Update Swiper layout
          if (typeof swiper !== "undefined" && swiper.update) {
            swiper.update();
          } else {
            console.warn(
              "Swiper instance not found. Ensure Swiper is initialized."
            );
          }
        } else {
          console.error("Error fetching data:", data);
        }

        const images = document
          .querySelectorAll(".card-img-top")
          .forEach((img) => {
            img.addEventListener("click", (e) => {
              document.getElementById("modalImage").src = e.target.src;
            });
          });
      });
    // .catch((error) => console.error("Fetch error:", error));