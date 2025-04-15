document.addEventListener("DOMContentLoaded", async function () {
    var inputName = document.getElementById("fullName");
    var inputPhoneNumber = document.getElementById("phoneNumber");
    var inputEmail = document.getElementById("email");
    var inputMsg = document.getElementById("msg");

    var fullNamePattern = /^[\u0600-\u06FF\s]+$/; // Adjust pattern for Arabic name validation if needed
    var phoneNumberPattern = /^[0-9]{10}$/; // Adjust pattern as needed
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var msgPattern = /.{3,}/;

    function validateInput(input, pattern, errorMsg) {
        if (!pattern.test(input.value)) {
            input.classList.add("is-invalid");
            input.nextElementSibling.textContent = errorMsg;
        } else {
            input.classList.remove("is-invalid");
            input.classList.add("is-valid");
        }
    }

    inputName.addEventListener("input", function () {
        validateInput(inputName, fullNamePattern, "يجب ان يكون الاسم ثلاثيا باللغة العربية");
    });

    inputPhoneNumber.addEventListener("input", function () {
        validateInput(inputPhoneNumber, phoneNumberPattern, "يجب ان يكون رقما صالحا مكونا من 10 أرقام");
    });

    inputEmail.addEventListener("input", function () {
        validateInput(inputEmail, emailPattern, "يجب ان يكون بريدا الكترونيا صالحا");
    });

    inputMsg.addEventListener("input", function () {
        validateInput(inputMsg, msgPattern, "يجب ان تكون الرسالة تشمل بحد ادني 3 حروف");
    });

    document.getElementById("contactForm").addEventListener("submit", async function (e) {
        e.preventDefault(); // Prevent the default form submission
        let form = e.target;
        let submitButton = form.querySelector('button[type="submit"]');

        if (form.checkValidity() === false) {
            e.stopPropagation();
            return;
        }

        let formUrl = "https://formsubmit.co/ajax/info@hatf.sa";

        let formData = new FormData(form);
        let DashboardData = new FormData();

        DashboardData.append('name', formData.get("fullName"));
        DashboardData.append('phone', formData.get("phoneNumber"));
        DashboardData.append('email', formData.get("email"));
        DashboardData.append('service', formData.get("service"));
        DashboardData.append('desc', formData.get("msg"));
        DashboardData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

        // Check URL for a specific query parameter (e.g., 'key')
        let urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('marketeer')) {
            const marketeerCode = urlParams.get('marketeer');
            DashboardData.append('marketeer_code', marketeerCode);
            formData.append('marketeer_code', marketeerCode);
        }

        let hasError = 0;

        await $.ajax({
            url: window.location.origin + '/' + 'customers-web',
            type: 'POST',
            data: DashboardData,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log('Success:', data);
                $('#error-message').hide();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Get the error from the response
                let errorMessage = ' رمز المسوق المحدد غير صالح. يرجي التأكد و إعادة المحاوله.';
                // Display on the website
                $('#error-message').text(errorMessage).show();
                console.error('Error:', errorMessage); // Log to the console
                hasError = 1;
            }
        });


        // ###########################################################################
        if (hasError == 0) {

            //////////////////////////////           sendWhatsAppMessage             ////////////////////////////////////////////////////////

            const sendWhatsAppMessage = async (phone) => {
                try {
                    const response = await fetch('https://7103.api.greenapi.com/waInstance7103103035/sendMessage/98b404461ea0409cb3692d1114c7269c50befd413c2c4f4898', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            chatId: `${phone}@c.us`,
                            message: `الاسم كامل: ${formData.get("fullName")}
رقم الهاتف: ${formData.get("phoneNumber")}
البريد الالكتروني: ${formData.get("email")}
الخدمة: ${formData.get("service")}
الرسالة: ${formData.get("msg")}`
                        }),
                    });

                    if (response.status != 200 && response.status != 201) {
                        return false;
                    }

                    return true;
                } catch (error) {
                    console.error('Error sending message:', error);
                    return false;
                }
            };

            // Example usage:
            const phone = '966531333006';
            sendWhatsAppMessage(phone)
                .then(success => {
                    if (success) {
                        console.log('Message sent successfully!');
                    } else {
                        console.log('Failed to send message.');
                    }
                });


            ///////////////////////////////////////////////////////////////////////////////////////////

            const emailRes = await fetch(formUrl, {
                method: "POST",
                body: new URLSearchParams(formData),
                headers: {
                    'Accept': 'application/json',
                }
            });

            if (!emailRes.ok) {
                throw new Error(`FormSubmit.co error: ${emailRes.statusText}`);
            }

            const emailResData = await emailRes.json();
            console.log('FormSubmit.co response:', emailResData);

            DashboardData.forEach(pair => {
                console.log(pair.key + ': ' + pair.value);
            });

            // Handle successful submission
            document.getElementById("formMessage").style.display = "block";
            form.reset(); // Reset the form
            setTimeout(() => {
                location.reload();
            }, 1000); // Wait 2 seconds before reloading
        }
    });
});

$(document).ready(function () {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            }
        },
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
    });
});

const sidebar = document.querySelector(".navbar-mobile");

function togglerSidebar() {
    document.addEventListener("click", (e) => {
        if (e.target.classList.contains("toggler-sidebar")) {
            sidebar.classList.add("open");
        }
        if (e.target.classList.contains("close-sidebar") || !e.target.classList.contains("toggler-sidebar")) {
            sidebar.classList.remove("open");
        }
    });
}

togglerSidebar();
