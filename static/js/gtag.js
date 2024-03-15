  grantButton.addEventListener("click", function() {
  localStorage.setItem("consentGranted", "true");
  function gtag() { dataLayer.push(arguments); }

  gtag('consent', 'update', {
    ad_user_data: 'granted',
    ad_personalization: 'granted',
    ad_storage: 'granted',
    analytics_storage: 'granted'
  });

  // Load gtag.js script.
  var gtagScript = document.createElement('script');
  gtagScript.async = true;
  gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-1KX8P933JG';

  var firstScript = document.getElementsByTagName('script')[0];
  firstScript.parentNode.insertBefore(gtagScript,firstScript);