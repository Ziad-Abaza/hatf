    <!-- Bootstrap js -->
    <script src="{{ asset('front/new_design/src/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/new_design/src/bootstrap/bootstrap.bundle.min.js.map') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('front/new_design/src/navbar.js') }}"></script>
    <script src="{{ asset('front/new_design/src/btn-handel-clicke.js') }}"></script>
    <script src="{{ asset('front/new_design/src/swiper.js') }}"></script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ProfessionalService",
          "name": "hatf",
          "image": "https://hatf.sa/",
          "@id": "",
          "url": "https://hatf.sa/",
          "telephone": "9660530333218",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "",
            "addressLocality": "",
            "postalCode": "",
            "addressCountry": "SA"
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
              "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
          } 
        }
    </script>
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "ovvzh2zmro");
    </script>
    <script>
        function copyPathWithAppUrl(path) {
            const appUrl = "{{ env('APP_URL') }}"; // Dynamically get APP_URL from Laravel
            const fullUrl = `${appUrl}/${path.replace(/^\//, '')}`;
            navigator.clipboard.writeText(fullUrl).catch(err => {
                console.error('Failed to copy URL to clipboard:', err);
            });
        }
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16806674298/nlBlCI7W1PUZEPr-hc4-',
            'value': 1.0,
            'currency': 'SAR'
        });
    </script>

